<?php get_header();?>
	<?php wkwkrnht_special_card();?>
	<div class="article-list">
    	<?php if(have_posts()):while(have_posts()):the_post();?>
			<section class="card article-card">
		        <a href="<?php the_permalink();?>" title="<?php the_title_attribute();?>" class="article-eye"><?php if(has_post_thumbnail()):the_post_thumbnail();else:echo'<img src="' . get_stylesheet_directory_uri() . '/img/no-img.png" alt="eyecatch">';endif;?></a>
		        <div class="article-info">
		            <a href="<?php the_permalink();?>" title="<?php the_title_attribute();?>" class="article-eye"><h2 class="article-name"><?php the_title();?></h2></a><br>
		            <span class="article-meta"><?php the_author();?>公開日：<time class="entry-date" datetime="<?php the_time('c');?>"><?php the_time('Y/n/j G:i.s');?></time><?php if($mtime = get_mtime('Y/n/j G:i.s')):echo'最終更新日：' . $mtime;endif;the_category(', ');?></span>
		        </div>
		    </section>
		<?php endwhile;endif;?>
		<div class="page-links card">
			<?php posts_nav_link('','&laquo;','&raquo;');?>
		</div>
	</div>
<?php get_footer();?>
