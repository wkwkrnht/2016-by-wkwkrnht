<style>
    .post-nav{height:20vh;width:80vw;margin:5vh 10vw;}
    .post-nav a{display:inline-block;height:10vh;width:80vw;font-size:2.5rem;line-height:10vh;text-align:center;color:#fff;box-shadow:inset 0 0 50px rgba(0,0,0,.3);}
    <?php
        if(is_singular()===false){return;}
        $prev    = (is_attachment()) ? get_post(get_post()->post_parent) : get_adjacent_post(false,'',true);
        $next    = get_adjacent_post(false,'',false);
        $css     = '';
        $url     = '';
        $prevurl = '';
        $nexturl = '';
        if(is_attachment()===true&&'attachment'===$prev->post_type){return;}
        if($prev&&has_post_thumbnail($prev->ID)){
            $prevthumb=wp_get_attachment_image_src(get_post_thumbnail_id($prev->ID),'post-thumbnail');
            $prevurl=esc_url($prevthumb[0]);
        }
        if($next&&has_post_thumbnail($next->ID)){
            $nextthumb=wp_get_attachment_image_src(get_post_thumbnail_id($next->ID),'post-thumbnail');
            $nexturl=esc_url($nextthumb[0]);
        }
        echo'
        .post-nav .prev{background:url(' . $prevurl . ') rgba(0,0,0,.1) center;}
        .post-nav .next{background:url(' . $nexturl . ') rgba(0,0,0,.1) center;}
        ';
    ?>
</style>
<div></div>
 <nav class="post-nav">
    <a href="<?php echo get_permalink((is_attachment()) ? get_post(get_post()->post_parent) : get_adjacent_post(false,'',true));?>" class="prev">←  <?php the_title_attribute(array('post'=>get_permalink((is_attachment()) ? get_post(get_post()->post_parent) : get_adjacent_post(false,'',true))));?></a>
    <a href="<?php echo get_permalink(get_adjacent_post(false,'',false));?>" class="next"><?php the_title_attribute(array('post'=>get_permalink(get_adjacent_post(false,'',false))));?>  →</a>
 </nav>
