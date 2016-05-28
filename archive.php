<?php get_header();?>
	<article id="post-<?php the_ID();?>" <?php post_class();?>>
		<header class="article-header">
			<div class="article-img"><?php if(has_post_thumbnail()):the_post_thumbnail();else:echo'<img src="../img/no-img.png" alt="eyecatch">'endif;?></div>
			<h2 class="article-name"><?php the_title();?></h2>
			<span class="article-meta"><?php the_author();the_time();the_category(', ');?></span>
		</header>
		<div class="article-main">
			aaaa
		</div>
		<ul class="article-tag"><li><a href="#">a</a></li></ul>
		<?php comments_template();?>
	</article>
<?php get_footer();?>
