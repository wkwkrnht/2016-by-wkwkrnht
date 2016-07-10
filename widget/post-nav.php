<style>
    .post-nav{height:20vh;width:80vw;margin:5vh auto;}
    .post-nav a{display:inline-block;position:relative;height:10vh;width:80vw;color:#fff;}
    .post-nav a::before{display:block;content:'';height:10vh;width:80vw;position:absolute;top:0;left:0;background-color:rgba(0,0,0,.2);box-shadow:inset 0 0 50px rgba(0,0,0,.3);}
    <?php wkwkrnht_post_nav_background();?>
</style>
 <nav class="post-nav">
    <a href="<?php echo get_permalink((is_attachment()) ? get_post(get_post()->post_parent) : get_adjacent_post(false,'',true));?>" class="prev">←  <?php the_title_attribute(array());?></a>
    <a href="<?php echo get_permalink(get_adjacent_post(false,'',false));?>" class="next"><?php the_title_attribute(array());?>  →</a>
 </nav>
