<style>
    .bio-wrapper{display:block;}
</style>
<a href="<?php echo site_url() . '?author=' . get_the_author_meta('ID');?>" style="" class="bio-wrapper card info-card">
    <header class="bio-header"><?php echo get_avatar(get_the_author_meta('ID'),108,no_image(),'avatar');?><span class="bio-name"><?php the_author();?></span></header>
    <div class="bio-main">
        <div class="follow-button"></div>
        <p class="bio-description"><?php the_author_meta('user_description');?></p>
    </div>
</a>
