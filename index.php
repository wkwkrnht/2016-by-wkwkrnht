<?php get_header();?>
	<main id="site-main">
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
					<?php
						$link       = get_permalink();
						$title      = the_title_attribute(array('echo'=>false));
						$txt        = mb_strimwidth(get_the_title(),0,32,'…');
						$categories = get_the_category();
						$category   = $categories[0];
					?>
					<section class="card article-card">
						<a href="<?php echo $link;?>" title="<?php echo $title;?>" tabindex="0"><img src="<?php wkwkrnht_eyecatch('wkwkrnht-thumb');?>" alt="eyecatch" height="800" width="800" class="card-eyecatch"></a>
						<div class="card-info">
							<h2 class="article-name"><a href="<?php echo $link;?>" title="<?php echo $title;?>" tabindex="0"><?php echo $txt;?></a></h2><br>
							<span class="card-meta">
								公開日：<time class="entry-date updated" datetime="<?php the_time('Y-m-d');?>"><?php the_time('Y/n/j');?></time><br>
								著者 ：<?php echo'
								<span itemscope itemtype="http://schema.org/Person" style="margin:0;">
									<a href="' . site_url() . '?author=' . get_the_author_meta('ID') . '" tabindex="0" itemprop="url" style="margin:0;">
										<span class="vcard author" style="margin:0;">
											<span class="fn" itemprop="name" style="margin:0;">'
											. get_the_author() .
											'</span>
										</span>
									</a>
								</span><br>
								<span class="card-cat">カテゴリー : <a href="' . get_category_link($category->term_id) . '" title="' . $category->name . '">' . $category->cat_name . '</a>';?>
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
	</main>
<?php get_footer();?>
