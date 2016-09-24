<?php $myAmp=false;$string=$post->post_content;$nowurl=$_SERVER["REQUEST_URI"];if(strpos($nowurl,'amp')!==false&&strpos($string,'<script>')===false&&is_singular()){$myAmp=true;};
if($myAmp===true):?>
	<?php require_once('amp.php');?>
<?php else:?>
	<?php get_header();?>
	<article id="post-<?php the_ID();?>" <?php post_class();?>>
		<?php if(is_active_sidebar('singularheader')):?>
			<ul class="widget-area">
				<?php dynamic_sidebar('singularheader');?>
			</ul>
		<?php endif;?>
		<header class="article-header">
			<img src="<?php wkwkrnht_eyecatch('large');?>" height="576" width="1344" alt="eyecatch" class="article-eyecatch">
			<div class="article-meta">
				<time class="article-date updated" datetime="<?php get_mtime('Y/m/d');?>" content="<?php the_time('Y/n/j G:i.s');?>">
					<?php the_time('Y/n/j');?>
				</time>
				<span class="article-info">
					<h1 class="article-name entry-title"><?php the_title();?></h1>
					<span class="author">
						著者 :
						<a href="<?php if(have_posts()):while(have_posts()):the_post();echo site_url() . '?author=' . get_the_author_meta('ID');endwhile;endif;?>">
							<span class="vcard author">
								<span class="fn">
									<?php if(have_posts()):while(have_posts()):the_post();the_author_meta('display_name');endwhile;endif;?>
								</span>
							</span>
						</a>
					</span><br>
					<span class="article-tag">
						<?php the_tags('','','');?>
					</span>
				</span>
			</div>
		</header>
		<div class="article-main">
			<?php if(have_posts()):while(have_posts()):the_post();the_content();endwhile;endif;?>
			<?php wp_link_pages(array('before'=>'<div class="page-nav">','after'=>'</div>','separator'=>'','nextpagelink'=>'<','previouspagelink'=>'>'));?>
		</div>
		<?php if(is_active_sidebar('singularfooter')):?>
			<ul class="widget-area">
				<?php dynamic_sidebar('singularfooter');?>
			</ul>
		<?php endif;?>
	</article>
	<?php get_footer();?>
<?php endif;?>
