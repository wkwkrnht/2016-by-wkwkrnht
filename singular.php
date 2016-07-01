<?php get_header();?>
<article id="post-<?php the_ID();?>" <?php post_class();?>>
	<header class="article-header">
		<div class="article-img">
			<img src="<?php if(has_post_thumbnail()):meta_image();else:no_image();endif;?>" alt="eyecatch">
		</div>
		<div class="article-meta">
			<h2 class="article-name"><?php the_title();?></h2>
			<span class="article-info"><?php the_author();?>公開日：<time class="entry-date" datetime="<?php the_time('c');?>"><?php the_time('Y/n/j G:i.s');?></time><?php if($mtime===get_mtime('Y/n/j G:i.s')):echo'最終更新日：' . $mtime;endif;the_category(', ');?></span>
		</div>
	</header>
	<div class="article-main">
		<?php if(have_posts()):while(have_posts()):the_post();the_content();endwhile;endif;?>
		<?php wp_link_pages();?>
	</div>
	<ul class="widget-area">
		<?php dynamic_sidebar('singularfooter');?>
	</ul>
</article>
<?php get_footer();?>
