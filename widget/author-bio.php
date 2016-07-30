<style>
    .bio-wrapper{display:block;}
</style>
<a href="<?php echo site_url() . '?author=' . get_the_author_meta('ID');?>" class="bio-wrapper <?php if(is_author()===true):echo'info-card';endif;?>">
    <header class="bio-header"><img src=""><span class="bio-name"><?php the_author();?></span></header>
    <div class="bio-main">
        <div class="follow-button"></div>
        <p class="bio-description"><?php the_author_meta('user_description');?></p>
    </div>
</a>
