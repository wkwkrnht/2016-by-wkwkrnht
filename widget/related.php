<style amp-custom>
	#flex{display:flex;flex-wrap:nowrap;justify-content:space-between;align-items:center;height:calc(20vw + 12vmin);width:100%;margin:5vh 0;overflow-x:auto;overflow-y:hidden;-webkit-overflow-scrolling:touch;}
	#flex > * {-webkit-transform:translateZ(0px);}
	.related-wrapper{display:block;height:calc(20vw + 10vmin);width:35vw;border-radius:2vmin;margin:1vmin 3vmin;background-color:#fff;box-shadow:0 0 1vmin rgba(0,0,0,.3);text-align:center;}
	.related-thumb{height:20vw;width:35vw;background-color:#ffcc00;}
	.related-title{height:10vmin;font-size:1.8rem;color:#333;text-decoration:none;}
</style>
<div id="flex">
	<?php $categories=get_the_category();$category_ID=array();
	foreach($categories as $category):array_push($category_ID,$category->cat_ID);endforeach;
	$args=array('numberposts'=>6,'category'=>$category_ID,'orderby'=>'rand','post__not_in'=>array($post -> ID));
	$query = new WP_Query($args);
	if($query -> have_posts()):
		while($query -> have_posts()):$query -> the_post();?>
			<a href="<?php the_permalink()?>" title="<?php the_title_attribute();?>" class="related-wrapper">
				<img src="<?php wkwkrnht_eyecatch();?>" alt="thumbnail" class="related-thumb">
				<?php the_title('<div class="related-title">','</div>');?>
			</a>
		<?php endwhile;?>
		<?php wp_reset_postdata();?>
	<?php else:
		wp_reset_postdata();
		$args=array('numberposts'=>6,'orderby'=>'rand','post__not_in'=>array($post -> ID));
		$query = new WP_Query($args);
		while($query -> have_posts()):$query -> the_post();?>
			<a href="<?php the_permalink()?>" title="<?php the_title_attribute();?>" class="related-wrapper">
				<img src="<?php wkwkrnht_eyecatch();?>" alt="thumbnail" class="related-thumb">
				<?php the_title('<div class="related-title">','</div>');?>
			</a>
		<?php endwhile;?>
		<?php wp_reset_postdata();?>
	<?php endif;?>
</div>
