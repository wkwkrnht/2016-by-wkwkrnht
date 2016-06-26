<?php get_header();?>
<div class="article-img" style="background:url(<?php if(has_post_thumbnail()):meta_image();else:echo get_stylesheet_directory_uri() . '/img/no-img.png';endif;?>);"></div>
<article id="post-<?php the_ID();?>" <?php post_class();?>>
	<header class="article-meta">
		<h2 class="article-name"><?php the_title();?></h2>
		<span class="article-info"><?php the_author();?>公開日：<time class="entry-date" datetime="<?php the_time('c');?>"><?php the_time('Y/n/j G:i.s');?></time><?php if($mtime = get_mtime('Y/n/j G:i.s')):echo'最終更新日：' . $mtime;endif;the_category(', ');?></span>
	</header>
	<div class="article-main">
		<?php if(have_posts()):while(have_posts()):the_post();the_content();endwhile;endif;?>
		<?php wp_link_pages(); ?>
	</div>
	<?php the_tags('<div class="widget_tag_cloud">','','</div>');?>
</article>
<?php get_footer();?>
