<?php get_header();?>
<article id="post-<?php the_ID();?>" <?php post_class();?>>
	<header class="article-header">
		<a href="<?php home_url();?>" class="article-img" style="display:block;background:url(<?php wkwkrnht_eyecatch();?>) no-repeat center/cover;">
			<span><?php bloginfo('name');?></span>
		</a>
		<div class="article-meta">
			<time class="article-date" datetime="<?php get_mtime('Y/n/j G:i.s');?>"><?php the_time('Y/n/j');?></time>
			<span class="article-info"><h2 class="article-name"><?php the_title();?></h2><br><?php the_author();the_category(', ');?></span>
		</div>
		<?php
		$cat=get_the_category();
		if($cat && !is_wp_error($cat)){
			$par=get_category($cat[0]->parent);$echo='';
			echo'<div class="bread" itemtype="http://data-vocabulary.org/Breadcrumb" itemscope=""><a href="' . get_bloginfo('url') . '" itemprop="url"><span itemprop="title">ホーム</span></a><span class="sp">/</span></div>';
			while($par && !is_wp_error($par) && $par->term_id!==0){
				$echo='<div itemtype="http://data-vocabulary.org/Breadcrumb" itemscope=""><a href="' . get_category_link($par->term_id) . '" itemprop="url"><span itemprop="title">' . $par->name . '</span></a><span class="sp">/</span></div>' . $echo;
				$par=get_category($par->parent);
			}
			echo $echo . '<div itemtype="http://data-vocabulary.org/Breadcrumb" itemscope=""><a href="'.get_category_link($cat[0]->term_id).'" itemprop="url"><span itemprop="title">' . $cat[0]->name . '</span></a></div>';
		}
		?>
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
