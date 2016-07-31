<?php $myAmp=false;$string=$post->post_content;$nowurl=$_SERVER["REQUEST_URI"];if(strpos($nowurl,'amp')!==false&&strpos($string,'<script>')===false&&is_single()){$myAmp=true;};
if($myAmp===true):?>
	<?php require_once('amp.php');?>
<?php else:?>
	<?php get_header();?>
	<article id="post-<?php the_ID();?>" <?php post_class();?>>
		<header style="max-width:92vw;margin:5vmin auto;" itemscope itemtype="schema.org/BlogPosting" itemprop="articleBody">
			<img src="<?php wkwkrnht_eyecatch();?>" alt="eyecatch" class="article-eyecatch" itemprop="image">
			<div class="article-meta">
				<time class="article-date" datetime="<?php get_mtime('Y/n/j G:i.s');?>" itemprop="datePublished"><?php the_time('Y/n/j');?></time>
				<span class="article-info">
					<span style="display:none;" itemprop="publisher"><?php bloginfo('name');?></span>
					<h2 class="article-name" itemprop="name"><?php the_title();?></h2>
					<a href="<?php echo site_url() . '?author=' . get_the_author_meta('ID');?>" itemprop="author"><?php the_author_meta('display_name');?></a><?php the_category(', ');?>
					<?php
					$cat=get_the_category();
					if($cat && !is_wp_error($cat)){
						$par=get_category($cat[0]->parent);$echo='';
						echo'<div class="bread" itemtype="http://data-vocabulary.org/Breadcrumb" itemscope=""><a href="' . home_url() . '" itemprop="url"><span itemprop="title">ホーム</span></a><span class="sp">/</span>';
						while($par && !is_wp_error($par) && $par->term_id!==0){
							$echo='<a href="' . get_category_link($par->term_id) . '" itemprop="url"><span itemprop="title">' . $par->name . '</span></a><span class="sp">/</span></div>' . $echo;
							$par=get_category($par->parent);
						}
						echo $echo . '<a href="'.get_category_link($cat[0]->term_id).'" itemprop="url"><span itemprop="title">' . $cat[0]->name . '</span></a></div>';
					}
					?>
				</span>
			</div>
		</header>
		<div class="article-main">
			<?php if(have_posts()):while(have_posts()):the_post();the_content();endwhile;endif;?>
			<?php wp_link_pages(array('before'=>'<div class="page-nav">','after'=>'</div>','separator'=>'','nextpagelink'=>'<','previouspagelink'=>'>'));?>
		</div>
		<ul class="widget-area">
			<?php dynamic_sidebar('singularfooter');?>
		</ul>
	</article>
	<?php get_footer();?>
<?php endif;?>
