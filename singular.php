<?php get_header();?>
<article id="post-<?php the_ID();?>" <?php post_class();?>>
	<header class="article-header">
		<div class="article-img"><?php if(has_post_thumbnail()):the_post_thumbnail();else:echo'<img src="' . get_stylesheet_directory_uri() . '/img/no-img.png" alt="eyecatch">';endif;?></div>
		<h2 class="article-name"><?php the_title();?></h2>
		<span class="article-meta"><?php the_author();?>公開日：<time class="entry-date" datetime="<?php the_time('c');?>"><?php the_time('Y/n/j G:i.s');?></time><?php if($mtime = get_mtime('Y/n/j G:i.s')):echo'最終更新日：' . $mtime;endif;the_category(', ');?></span>
	</header>
	<div class="article-main">
		<?php if(have_posts()):while(have_posts()):the_post();the_content();endwhile;endif;?>
	</div>
	<?php the_tags('<ul class="article-tag"><li>','</li><li>','</li></ul>');?>
</article>
<?php get_footer();?>
