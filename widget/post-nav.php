<style>
    .post-nav{height:20vh;width:80vw;}
    .post-nav a{display:inline-block;position:relative;height:10vh;width:80vw;color:#fff;}
    <?php wkwkrnht_post_nav_background();?>
</style>
 <nav class="post-nav">
    <a href="<?php echo get_permalink((is_attachment()) ? get_post(get_post()->post_parent) : get_adjacent_post(false,'',true));?>" class="prev">←  <?php the_title_attribute(array());?></a>
    <a href="<?php echo get_permalink(get_adjacent_post(false,'',false));?>" class="next"><?php the_title_attribute(array());?>  →</a>
 </nav>
