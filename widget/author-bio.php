<style>
    .bio-wrapper{display:block;}
    .bio-wrapper img{float:left;}
    .bio-main{float:right;}
</style>
<a href="<?php echo site_url() . '?author=' . get_the_author_meta('ID');?>" style="" class="bio-wrapper card info-card">
    <?php echo get_avatar(get_the_author_meta('ID'),256);?>
    <div class="bio-main">
        <span class="bio-name"><?php the_author();?></span><br>
        <div class="follow-button"></div>
        <p class="bio-description"><?php the_author_meta('user_description');?></p>
    </div>
</a>
