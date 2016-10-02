<?php get_header();?>
	<?php wkwkrnht_special_card();?>
	<?php if(is_404()===true):?>
		<div class="article-list">
			<?php if(is_active_sidebar('404')){dynamic_sidebar('404');}?>
		</div>
	<?php else:?>
		<?php if(is_active_sidebar('listabove')):?>
			<ul class="widget-area">
				<?php dynamic_sidebar('listabove');?>
			</ul>
		<?php endif;?>
		<div class="article-list">
			<?php if(is_active_sidebar('listheader')){dynamic_sidebar('listheader');}?>
    		<?php if(have_posts()):while(have_posts()):the_post();?>
            	<?php $link=get_permalink();$title=the_title_attribute(array('echo'=>false));$txt=mb_strimwidth(get_the_title(),0,32,'…');?>
				<section class="card article-card">
		        	<a href="<?php echo $link;?>" title="<?php echo $title;?>" class="article-eye"><img src="<?php wkwkrnht_eyecatch('wkwkrnht-thumb');?>" alt="eyecatch" height="800" width="800"></a>
		        	<div class="card-info">
		            	<a href="<?php echo $link;?>" title="<?php echo $title;?>" class="card-eyecatch"><h2 class="article-name"><?php echo $txt;?></h2></a><br>
		            	<span class="card-meta">
							公開日：<time class="entry-date updated" datetime="<?php the_time('Y-m-d');?>"><?php the_time('Y/n/j');?></time><br>
							著者 ：<?php echo'
							<span itemscope itemtype="http://schema.org/Person">
								<a href="' . site_url() . '?author=' . get_the_author_meta('ID') . '" itemprop="url">
									<span class="vcard author">
										<span class="fn" itemprop="name">'
										. get_the_author() .
										'</span>
									</span>
								</a>
							</span><br>
							カテゴリー : ';the_category(', ');?>
						</span>
		        	</div>
		    	</section>
			<?php endwhile;endif;?>
			<?php if(is_active_sidebar('listfooter')){dynamic_sidebar('listfooter');}?>
		</div>
		<?php include_once(get_template_directory() . '/widget/page-nav.php');?>
		<?php if(is_active_sidebar('listunder')):?>
			<ul class="widget-area">
				<?php dynamic_sidebar('listunder');?>
			</ul>
		<?php endif;?>
	<?php endif;?>
<?php get_footer();?>
