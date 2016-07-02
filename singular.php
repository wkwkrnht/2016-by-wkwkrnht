<?php get_header();?>
<article id="post-<?php the_ID();?>" <?php post_class();?>>
	<header class="article-header">
		<a href="<?php home_url();?>" class="article-img" style="display:block;background:url(<?php wkwkrnht_eyecatch();?>) no-repeat center/cover;">
			<?php bloginfo('name');?>
		</a>
		<div class="article-meta">
			<time class="article-date" datetime="<?php the_time('Y/n/j G:i.s');?>"><?php the_time('Y/n/j');?></time>
			<span class="article-info"><h2 class="article-name"><?php the_title();?></h2><br><?php the_author();?><?php if($mtime===get_mtime('Y/n/j G:i.s')):echo'最終更新日：' . $mtime;endif;the_category(', ');?></span>
		</div>
		<div itemtype="http://data-vocabulary.org/Breadcrumb" itemscope="" class="bread">
			<?php if(!is_home()&&!is_front_page()):$cat = is_single() ? get_the_category():array(get_category($cat));
				if($cat && !is_wp_error($cat)){
					$par = get_category($cat[0]->parent);
					echo'<a href="' . home_url() . '" itemprop="url"><span itemprop="title">Home</span></a><span class="sp">/</span>';
					while($par && !is_wp_error($par) && $par->term_id != 0):
						$echo = '<a href="'.get_category_link($par->term_id).'" itemprop="url"><span itemprop="title">'.$par->name.'</span></a><span class="sp">/</span>'.$echo;$par = get_category($par->parent);
					endwhile;
					echo $echo.'<a href="'.get_category_link($cat[0]->term_id).'" itemprop="url"><span itemprop="title">'.$cat[0]->name.'</span></a>';
				}
			endif;?>
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
