<?php $popularpost = new WP_Query(array('posts_per_page'=>10,'meta_key'=>'wpb_post_views_count','orderby'=>'meta_value_num','order'=>'DESC'));
    while($popularpost->have_posts()):$popularpost->the_post();?>
        <div class="latest_wrap" deta-view="<?php echo post_custom('wpb_post_views_count');?>">
            <a href="<?php the_permalink(); ?>">
                <?php if(has_post_thumbnail()):?>
                    <?php the_post_thumbnail('thumbnail',array('class'=>'thumbnail'));?>
                <?php else:?>
                    <img src="<?php echo get_stylesheet_directory_uri();?>/img/no_image3.gif">
                <?php endif;?>
                <h2 class="title"><?php the_title();?></h2>
            </a>
        </div>
    <?php endwhile;?>
