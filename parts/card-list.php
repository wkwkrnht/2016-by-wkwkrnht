<section class="card article-card">
    <a href="<?php the_permalink();?>" title="<?php the_title_attribute();?>" class="article-eye"><?php if(has_post_thumbnail()):the_post_thumbnail();else:echo'<img src="' . get_stylesheet_directory_uri() . '/img/no-img.png" alt="eyecatch">'endif;?></a>
    <div class="article-info">
        <h2 class="article-name"><?php the_title();?></h2><br>
        <span class="article-meta"><?php the_author();echo'<time>';the_time();echo'</time>';the_category(', ');?></span>
    </div>
</section>
