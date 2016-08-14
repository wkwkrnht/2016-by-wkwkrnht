<style>
.latest_wrap a {
	float: left;
	padding: 10px 0 0 0;
	min-height: 75px;
	width: 100%;
	border-bottom: 1px solid #f0efef;
	text-decoration: none;
	position: relative;
}

.latest_wrap img {
	float: left;
	margin: 0 20px 10px 10px;
	padding: 0;
	width: 60px;
	height: 60px;
	border: 0;
	border-radius: 0;
	transition: 0.5s;
}

.latest_wrap .title {
	margin: 5px 0 0 0;
	color: #000;
	font-weight: 400;
}

.latest_wrap .view_count {
	position: absolute;
	bottom: 0;
	right: 0;
	font-family: impact;
	color: #666;
	font-size: 14px;
	background: rgba(0,0,0,0.1);
	padding: 0 0 0 5px;
}
</style>
<?php
    function wpb_set_post_views($postID) {
        $count_key = 'wpb_post_views_count';
        $count = get_post_meta($postID, $count_key, true);
        if($count==''){
            $count = 0;
            delete_post_meta($postID, $count_key);
            add_post_meta($postID, $count_key, '0');
        }else{
            $count++;
            update_post_meta($postID, $count_key, $count);
        }
    }
    //To keep the count accurate, lets get rid of prefetching
    remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);

    /* add post views to single page */
    function wpb_track_post_views ($post_id) {
        if ( !is_single() ) return;
        if ( empty ( $post_id) ) {
            global $post;
            $post_id = $post->ID;
        }
        wpb_set_post_views($post_id);
    }
    add_action( 'wp_head', 'wpb_track_post_views');
    add_action('my_hourly_event', 'my_hourly_action');

    function my_hourly_action(){
        $the_query = new WP_Query(array('posts_per_page' => -1,'post_type' => array('post')));
        $count_key = 'wpb_post_views_count';
        delete_post_meta_by_key($count_key);
        if ($the_query->have_posts()) :
            while ($the_query->have_posts()) : $the_query->the_post();
            	$post_id   = $the_query->post->ID;
            	$count = get_post_meta($post_id, $count_key, true);
            	if(empty($count)){
                	$count = 0;
                	delete_post_meta($post_id, $count_key);
                	add_post_meta($post_id, $count_key, '0');
            	}else{
                	$count++;
                	update_post_meta($post_id, $count_key, 0);
            	}
            endwhile;
        endif;
    }
    // イベントの時間追加
    add_filter('cron_schedules', 'my_interval' );
    function my_interval($schedules) {
        date_default_timezone_set( 'Asia/Tokyo' );
        $dt = new DateTime('now');
        $dt_2 = new DateTime('midnight first day of next month');
        $d = $dt_2->diff($dt, true);
        $dt_array = get_object_vars($d);
        $day = $dt_array["d"] * 24 * 60 * 60;
        $hour = $dt_array["h"] * 60 * 60;
        $minutes = $dt_array["i"] * 60;
        $second = $dt_array["s"];
        $difftime = $day + $hour + $minutes + $second + 60;
        $schedules['Nextmonth'] = array('interval' => $difftime,'display' => 'Nextmonth');
        return $schedules;
    }

    add_action('wp',function(){if(!wp_next_scheduled('my_hourly_event')){wp_schedule_event(time(),'Nextmonth','my_hourly_event');}});
    register_deactivation_hook(__FILE__,function(){wp_clear_scheduled_hook('my_hourly_event');});

	$popularpost = new WP_Query(array('posts_per_page' => 10,'meta_key' => 'wpb_post_views_count','orderby' => 'meta_value_num','order' => 'DESC' ));
	while($popularpost->have_posts()):$popularpost->the_post();?>
		<div class="latest_wrap">
			<a href="<?php the_permalink();?>">
				<?php if(has_post_thumbnail()):?>
		            <?php the_post_thumbnail('thumbnail',array('class' =>'thumbnail'));?>
		        <?php else:?>
		            <img src="<?php echo get_stylesheet_directory_uri();?>/inc/no-img.png">
		        <?php endif;?>
		        <h3 class="title"><?php the_title();?></h3>
		        <span class="view_count"><?php echo post_custom('wpb_post_views_count');?> view</span>
		    </a>
    	</div>
    <?php endwhile;?>
