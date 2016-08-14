<style>
	.widget_related_posts{margin:5vh 0;}
	#flex{display:flex;flex-wrap:nowrap;justify-content:space-between;align-items:center;height:calc(20vw + 12vmin);width:100%;overflow-x:auto;overflow-y:hidden;-webkit-overflow-scrolling:touch;}
	#flex > * {-webkit-transform:translateZ(0px);}
	.related-wrapper{display:block;height:calc(20vw + 10vmin);width:35vw;border-radius:2vmin;margin:1vmin 3vmin;background-color:#fff;box-shadow:0 0 1vmin rgba(0,0,0,.3);text-align:center;}
	.related-thumb{height:20vw;width:35vw;background-color:#ffcc00;}
	.related-title{height:10vmin;font-size:1.8rem;color:#333;text-decoration:none;}
</style>
<div id="flex">
	<?php $categories=get_the_category();$category_ID=array();foreach($categories as $category):array_push($category_ID,$category->cat_ID);endforeach;
	if(have_posts()):while(have_posts()):the_post();$now = get_the_ID();endwhile;endif;$array=array('numberposts'=>6,'category'=>$category_ID,'orderby'=>'rand','post__not_in'=>array($now),'no_found_rows'=>true,'update_post_term_cache'=>false,'update_post_meta_cache'=>false);
	$query = new WP_Query($array);
	if($query -> have_posts()):
		while($query -> have_posts()):$query -> the_post();?>
			<a href="<?php the_permalink()?>" title="<?php the_title_attribute();?>" class="related-wrapper">
				<img src="<?php $size=array(512,512);wkwkrnht_eyecatch($size);?>" alt="thumbnail" class="related-thumb">
				<?php the_title('<div class="related-title">','</div>');?>
			</a>
		<?php endwhile;?>
		<?php wp_reset_postdata();?>
	<?php else:
		wp_reset_postdata();
		$array=array('numberposts'=>6,'orderby'=>'rand','post__not_in'=>array($now),'no_found_rows'=>true,'update_post_term_cache'=>false,'update_post_meta_cache'=>false);
		$query = new WP_Query($array);
		while($query -> have_posts()):$query -> the_post();?>
			<a href="<?php the_permalink()?>" title="<?php the_title_attribute();?>" class="related-wrapper">
				<img src="<?php $size=array(512,512);wkwkrnht_eyecatch($size);?>" alt="thumbnail" class="related-thumb">
				<?php the_title('<div class="related-title">','</div>');?>
			</a>
		<?php endwhile;?>
		<?php wp_reset_postdata();?>
	<?php endif;?>
</div>
