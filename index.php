<?php get_header();?>
	<?php wkwkrnht_special_card();?>
	<div class="article-list">
    	<?php if(have_posts()):while(have_posts()):the_post();?>
			<section class="card article-card">
		        <a href="<?php the_permalink();?>" title="<?php the_title_attribute();?>" class="article-eye"><img src="<?php $size=array(800,800);wkwkrnht_eyecatch($size);?>" alt="eyecatch" height="800" width="800"></a>
		        <div class="card-info">
		            <a href="<?php the_permalink();?>" title="<?php the_title_attribute();?>" class="card-eyecatch"><h2 class="article-name"><?php $txt = '';$txt = mb_strimwidth(get_the_title(),0,32,…);echo $txt;?></h2></a><br>
		            <span class="card-meta">公開日：<time class="entry-date updated" datetime="<?php echo get_mtime('Y/n/j G:i.s');?>"><?php the_time('Y/n/j');?></time><br><?php echo'著者：<a href="' . site_url() . '?author=' . get_the_author_meta('ID') . '"><span class="vcard author"><span class="fn">';the_author();echo'</span></span></a><br>カテゴリー:';the_category(', ');?></span>
		        </div>
		    </section>
		<?php endwhile;endif;?>
	</div>
	<ul class="page-nation">
		<?php wkwkrnht_page_navi();?>
	</ul>
<?php get_footer();?>
