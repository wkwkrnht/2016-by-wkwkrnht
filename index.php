<?php
$size_full = array(1344,576);
$size_128  = array(128,128);
$size_256  = array(256,256);
$size_512  = array(512,512);
$size_1024 = array(1024,1024);
$myAmp     = false;
$string    = $post->post_content;
$nowurl    = $_SERVER["REQUEST_URI"];
if(strpos($nowurl,'amp')!==false && strpos($string,'<script>')===false && is_singular()===true){$myAmp = true;}
if($myAmp===true):
	require_once('amp.php');
elseif(is_singular()===true):
	if(have_posts()):while(have_posts()):the_post();
		$author_name = get_the_author_meta('display_name');
		$author_id   = get_the_author_meta('ID');
	endwhile;endif;?>
	<?php get_header();?>
	<article id="post-<?php the_ID();?>" <?php post_class();?>>
		<?php if(is_active_sidebar('singularheader')):?>
			<ul class="widget-area">
				<?php dynamic_sidebar('singularheader');?>
			</ul>
		<?php endif;?>
		<header class="article-header">
			<img src="<?php wkwkrnht_eyecatch($size_full);?>" sizes="92vw" srcset="<?php wkwkrnht_eyecatch($size_256);?> 320w,<?php wkwkrnht_eyecatch($size_512);?> 640w,<?php wkwkrnht_eyecatch($size_1024);?> 1270w" alt="eyecatch" class="article-eyecatch">
			<div class="article-meta">
				<time class="article-date updated" datetime="<?php get_mtime('Y/m/d');?>" content="<?php the_time('Y/n/j G:i.s');?>">
					<?php the_time('Y/n/j');?>
				</time>
				<span class="article-info">
					<h1 class="article-name entry-title"><?php the_title();?></h1>
					<span class="author">
						著者 :
						<a href="<?php echo site_url() . '?author=' . $author_id;?>" title="<?php echo $author_name;?>" tabindex="0">
							<span class="vcard author">
								<span class="fn">
									<?php echo $author_name;?>
								</span>
							</span>
						</a>
					</span><br>
					<span class="widget_tag_cloud">
						<?php the_tags('','','');?>
					</span>
				</span>
			</div>
		</header>
		<div class="article-main" role="main">
			<?php
			if(have_posts()):while(have_posts()):the_post();the_content();endwhile;endif;
			wp_link_pages(array('before'=>'<div class="page-nav">','after'=>'</div>','separator'=>'','nextpagelink'=>'<','previouspagelink'=>'>'));?>
		</div>
		<footer class="article-footer" itemscope itemtype="http://schema.org/WPFooter">
			<?php if(is_active_sidebar('singularfooter')):?>
				<ul class="widget-area">
					<?php dynamic_sidebar('singularfooter');?>
				</ul>
			<?php endif;?>
		</footer>
	</article>
	<?php get_footer();?>
<?php else:?>
	<?php get_header();?>
	<?php
	if(is_author()===true){include_once(get_template_directory() . '/widget/author-bio.php');}
	if(is_active_sidebar('listabove')){dynamic_sidebar('listabove');}?>
	<div class="card-list">
		<?php
		if(is_404()===true){
				if(is_active_sidebar('404')){dynamic_sidebar('404');}
		}else{
			if(is_active_sidebar('listheader')){dynamic_sidebar('listheader');}
			if(have_posts()):while(have_posts()):the_post();
				$link       = get_permalink();
				$title      = the_title_attribute(array('echo'=>false));
				$txt        = mb_strimwidth(get_the_title(),0,32,'…');
				$categories = get_the_category();
				$category   = $categories[0];
				?>
				<section class="card">
					<a href="<?php echo $link;?>" title="<?php echo $title;?>" tabindex="0">
						<img src="<?php wkwkrnht_eyecatch($size_full);?>" sizes="30vw" srcset="<?php wkwkrnht_eyecatch($size_128);?> 320w,<?php wkwkrnht_eyecatch($size_256);?> 1270w,<?php wkwkrnht_eyecatch($size_512);?> 1920w,<?php wkwkrnht_eyecatch($size_1024);?> 2560w" alt="eyecatch" class="card-eyecatch">
					</a>
					<div class="card-info">
						<h2 class="card-title"><a href="<?php echo $link;?>" title="<?php echo $title;?>" tabindex="0"><?php echo $txt;?></a></h2><br>
						<span class="card-meta">
							<span class="card-date">公開日：<time class="entry-date updated" datetime="<?php the_time('Y-m-d');?>"><?php the_time('Y/n/j');?></time></span><br>
							<span class="card-author">著者 ：
								<span itemscope itemtype="http://schema.org/Person" style="margin:0;">
								<?php echo'
									<a href="' . site_url() . '?author=' . get_the_author_meta('ID') . '" tabindex="0" itemprop="url" style="margin:0;">
										<span class="vcard author" style="margin:0;">
											<span class="fn" itemprop="name" style="margin:0;">'
											. get_the_author() .
											'</span>
										</span>
									</a>';?>
								</span><br>
								<?php echo'<span class="card-cat">カテゴリー : <a href="' . get_category_link($category->term_id) . '" title="' . $category->name . '">' . $category->cat_name . '</a></span>';?>
						</span>
					</div>
				</section>
			<?php endwhile;endif;
			if(is_active_sidebar('listfooter')){dynamic_sidebar('listfooter');}
		}?>
	</div>
	<?php
	global $wp_query;
	$big = 999999999;
	$page_format = paginate_links(array(
	    'base'      => str_replace($big,'%#%',esc_url(get_pagenum_link($big))),
	    'format'    => '/page/%#%',
	    'current'   => max(1,get_query_var('paged')),
	    'total'     => $wp_query->max_num_pages,
	    'prev_next' => True,
	    'prev_text' => '<',
	    'next_text' => '>',
	    'type'      => 'array'
	));
	if(is_array($page_format)){
	    $echo  = '';
	    $paged = (get_query_var('paged')==0) ? 1 : get_query_var('paged');
	    foreach($page_format as $page){if($page===$paged){$echo .= "<li class='current'>$page</li>";}else{$echo .= "<li>$page</li>";}}
	    echo'<ul class="page-nation">' . $echo . '</ul>';
	}
	wp_reset_query();
	if(is_active_sidebar('listunder')){dynamic_sidebar('listunder');}?>
	<?php get_footer();?>
<?php endif;?>
