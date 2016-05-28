<?php get_header();?>
<?php if(have_posts()):while(have_posts()):?>
	<article id="post-<?php the_ID();?>" <?php post_class();?>>
		<header class="article-header">
			<div class="article-img"><?php if(has_post_thumbnail()):the_post_thumbnail();else:echo'<img src="' . get_stylesheet_directory_uri() . '/img/no-img.png" alt="eyecatch">'endif;?></div>
			<h2 class="article-name"><?php the_title();?></h2>
			<span class="article-meta"><?php the_author();the_time();the_category(', ');?></span>
		</header>
		<div class="article-main">
			<?php the_content();?>
		</div>
		<?php the_tags('<ul class="article-tag"><li>','</li><li>','</li></ul>');?>
	</article>
<?php endwhile;endif;?>
<?php get_footer();?>
