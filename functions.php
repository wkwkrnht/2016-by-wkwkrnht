<? php
//theme-setup(nav&wiwidgeterea&editor-style)
function wkwkrnht_setup(){
    add_theme_support('post-formats',array('aside','gallery','quote','image','link','status','video','audio','chat'));
    add_theme_support('post-thumbnails');
    add_theme_support('custom-background');
    add_theme_support('custom-logo',array('height'=>248,'width'=>248,'flex-height'=>true,));
    add_theme_support('custom-header');
    add_theme_support('title-tag');
    add_theme_support('automatic-feed-links');
    add_theme_support('html5',array('comment-list','comment-form','search-form','gallery','caption'));
    register_nav_menu('main','main-menu');
    register_nav_menu('social','social-menu');
}
add_action('after_setup_theme','wkwkrnht_setup');
function wpdocs_theme_add_editor_styles(){
    add_editor_style('css/custom-editor-style.css');
}
add_action('admin_init','wpdocs_theme_add_editor_styles');
function theme_slug_widgets_init(){
    register_sidebar(array('name'=>__('Main Sidebar','theme-slug'),'description'=>__('Widgets in this area will be shown on all posts and pages.','theme-slug'),'id'=>'floatmenu','before_widget'=>'<li id="%1$s" class="widget %2$s">','after_widget'=>'</li>','before_title'=>'<h2 class="widget-title">','after_title' =>'</h2>',));
}
add_action('widgets_init','wkwkrnht_sidebar_widgets_init');
remove_action('wp_head','print_emoji_detection_script',7);
remove_action('wp_print_styles','print_emoji_styles');
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

function my_hourly_action() {
    // 投稿記事全取得
    $args = array(
                    'posts_per_page' => -1,
                    'post_type' => array(
                        'post'
                    )
                );
    // 変数に格納
    $the_query = new WP_Query($args);
    $count_key = 'wpb_post_views_count';
    delete_post_meta_by_key('wpb_post_views_count');
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
    $schedules['Nextmonth'] = array(
        'interval' => $difftime,
        'display' => 'Nextmonth'
    );
    return $schedules;
}

function my_activation() {
    // イベントが未登録なら登録する
    if(!wp_next_scheduled('my_hourly_event')){
        wp_schedule_event(time(), 'Nextmonth', 'my_hourly_event');
    }
}
add_action('wp', 'my_activation');

// イベント排除
register_deactivation_hook(__FILE__, 'my_deactivation');
function my_deactivation() {
    wp_clear_scheduled_hook('my_hourly_event');
}
/*
    <?php // POPULAR POST
				$popularpost = new WP_Query( array( 'posts_per_page' => 10, 'meta_key' => 'wpb_post_views_count', 'orderby' => 'meta_value_num', 'order' => 'DESC'  ) );

				while ( $popularpost->have_posts() ) : $popularpost->the_post();?>
					<div class="latest_wrap">
						<a href="<?php the_permalink(); ?>">
						<?php if ( has_post_thumbnail() ) { ?>
		                    <?php the_post_thumbnail('thumbnail', array('class' => 'thumbnail')); ?>
		                <?php } else { ?>
		                	<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/no_image3.gif" />
		                <?php } ?>

		                <h2 class="title"><?php the_title(); ?></h2>
		                <span class="view_count"><?php echo post_custom('wpb_post_views_count'); ?></span>
			    		</a>
			    	</div>
				<?php endwhile; ?>
*/
