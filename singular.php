<?php get_header();?>
<article id="post-<?php the_ID();?>" <?php post_class();?>>
	<header class="article-header">
		<a href="<?php home_url();?>" class="article-img" style="display:block;background:url(<?php wkwkrnht_eyecatch();?>) rgba(0,0,0,.6);">
			<?php bloginfo('name');?>
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
