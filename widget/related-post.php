<style>
	.widget_related_posts{display:flex;flex-wrap:nowrap;justify-content:space-between;align-items:center;height:calc(20vw + 12vmin);width:100%;margin:5vh 0;overflow-x:auto;overflow-y:hidden;-webkit-overflow-scrolling:touch;}
	.widget_related_posts > *{-webkit-transform:translateZ(0px);}
	.widget_related_posts .related-wrapper{display:block;height:20vw;width:20vw;border-radius:2vmin;position:relative;margin:1vmin 3vmin;box-shadow:0 0 2vmin rgba(0,0,0,.3);background-color:#fff;color:#333;text-decoration:none;}
	.widget_related_posts .related-wrapper:visited{color:#333;}
	.widget_related_posts .related-title{font-size:2rem;text-align:center;vertical-align:middle;}
	.widget_related_posts .related-time{font-size:1.6rem;text-align:left;}
</style>
<?php $categories=get_the_category();$category_ID=array();foreach($categories as $category):array_push($category_ID,$category->cat_ID);endforeach;
if(have_posts()):while(have_posts()):the_post();$now = get_the_ID();endwhile;endif;$array=array('numberposts'=>8,'category'=>$category_ID,'orderby'=>'rand','post__not_in'=>array($now),'no_found_rows'=>true,'update_post_term_cache'=>false,'update_post_meta_cache'=>false);
$query = new WP_Query($array);
if($query -> have_posts()):
	while($query -> have_posts()):$query -> the_post();?>
		<a href="<?php the_permalink()?>" title="<?php the_title_attribute();?>" class="related-wrapper">
			<?php the_title('<h2 class="related-title">','</h2>');?><br>
			<span class="related-date"><i class="fa fa-clock-o" aria-hidden="true"></i> : <time datetime="<?php get_mtime('Y/n/j G:i.s');?>"><?php the_time('Y/n/j');?></time></span>
		</a>
	<?php endwhile;?>
	<?php wp_reset_postdata();?>
<?php else:
	wp_reset_postdata();
	$array=array('numberposts'=>8,'orderby'=>'rand','post__not_in'=>array($now),'no_found_rows'=>true,'update_post_term_cache'=>false,'update_post_meta_cache'=>false);
	$query = new WP_Query($array);
	while($query -> have_posts()):$query -> the_post();?>
		<a href="<?php the_permalink()?>" title="<?php the_title_attribute();?>" class="related-wrapper">
			<?php the_title('<h2 class="related-title">','</h2>');?><br>
			<span class="related-date"><i class="fa fa-clock-o" aria-hidden="true"></i> : <time datetime="<?php get_mtime('Y/n/j G:i.s');?>"><?php the_time('Y/n/j');?></time></span>
		</a>
	<?php endwhile;?>
	<?php wp_reset_postdata();?>
<?php endif;?>
