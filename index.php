<?php get_header();?>
	<?php wkwkrnht_special_card();?>
	<div class="article-list">
    	<?php if(have_posts()):while(have_posts()):the_post();?>
			<section class="card article-card">
		        <a href="<?php the_permalink();?>" title="<?php the_title_attribute();?>" class="article-eye"><img src="<?php wkwkrnht_eyecatch();?>" alt="eyecatch"></a>
		        <div class="card-info">
		            <a href="<?php the_permalink();?>" title="<?php the_title_attribute();?>" class="card-eyecatch"><h2 class="article-name"><?php the_title();?></h2></a><br>
		            <span class="card-meta">公開日：<time class="entry-date" datetime="<?php echo get_mtime('Y/n/j G:i.s');?>"><?php the_time('Y/n/j');?></time><br><?php echo'著者：<a href="' . site_url() . '?author=' . get_the_author_meta('ID') . '">';the_author();echo'</a><br>カテゴリー:';the_category(', ');?></span>
		        </div>
		    </section>
		<?php endwhile;endif;?>
	</div>
	<ul class="pagenation">
		<?php wkwkrnht_page_navi();?>
	</ul>
<?php get_footer();?>
