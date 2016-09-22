<style>
    .widget_post_nav a{display:inline-block;height:10vh;width:80vw;font-size:2.5rem;line-height:10vh;text-align:center;color:#fff;box-shadow:inset 0 0 50px rgba(0,0,0,.3);}
    <?php
        if(is_singular()===false){return;}
        $prev    = (is_attachment()) ? get_post(get_post()->post_parent) : get_adjacent_post(false,'',true);
        $next    = get_adjacent_post(false,'',false);
        $css     = '';
        $url     = '';
        $prevurl = get_template_directory_uri() . '/inc/no-img.png';
        $nexturl = get_template_directory_uri() . '/inc/no-img.png';
        if(is_attachment()===true&&'attachment'===$prev->post_type){return;}
        if($prev&&has_post_thumbnail($prev->ID)){
            $prevthumb = wp_get_attachment_url(get_post_thumbnail_id($prev->ID));
            $prevurl   = esc_url($prevthumb);
        }
        if($next&&has_post_thumbnail($next->ID)){
            $nextthumb = wp_get_attachment_url(get_post_thumbnail_id($next->ID));
            $nexturl   = esc_url($nextthumb);
        }
        echo'
        .widget_post_nav .prev{background:url(' . $prevurl . ') rgba(0,0,0,.1) center;}
        .widget_post_nav .next{background:url(' . $nexturl . ') rgba(0,0,0,.1) center;}
        ';
    ?>
</style>
<a href="<?php echo get_permalink((is_attachment()) ? get_post(get_post()->post_parent) : get_adjacent_post(false,'',true));?>" class="prev">←  <?php the_title_attribute(array('post'=>$prev->ID));?></a>
<a href="<?php echo get_permalink(get_adjacent_post(false,'',false));?>" class="next"><?php the_title_attribute(array('post'=>$next->ID));?>  →</a>
