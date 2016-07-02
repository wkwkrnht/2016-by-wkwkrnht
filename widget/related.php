<style>
	#flex{height:calc(20vw + 20vmin);width:100vw;overflow-x:scroll;overflow-y:hidden;-webkit-overflow-scrolling:touch;}
	#flex > * {-webkit-transform:translateZ(0px);}
	.related-wrapper{display:block;height:calc(20vw + 10vmin);width:30vw;border-radius:2vmin;margin:2vmin 3vmin;float:left;background-color:#fff;box-shadow:0 0 1vmin rgba(0,0,0,.3);text-align:center;}
	.related-thumb{height:20vw;background-color:#ffcc00;}
	.related-title{height:10vmin;font-size:1.8rem;}
</style>
<div id="flex">
	<?php $categories=get_the_category();$category_ID=array();
	foreach($categories as $category):array_push($category_ID,$category->cat_ID);endforeach;
	$cat_posts=get_posts(array('posts_per_page'=>6,'post__not_in'=>array($post->ID),'category__in'=>$category_ID,'orderby'=>'rand'));
	if($cat_posts!==array()):
		foreach($cat_posts as $post):?>
			<a href="<?php the_permalink()?>" title="<?php the_title_attribute();?>" class="related">
				<img src="<?php wkwkrnht_eyecatch();?>" alt="thumbnail" class="related-thumb">
				<?php the_title('<div class="title">','</div>');?>
			</a>
		<?php endforeach;?>
	<?php else:
		$rand_posts=get_posts(array('numberposts'=>6,'orderby'=>'rand','post_status'=>'publish'));
		foreach($rand_posts as $post):?>
			<a href="<?php the_permalink()?>" title="<?php the_title_attribute();?>" class="related">
				<img src="<?php wkwkrnht_eyecatch();?>" alt="thumbnail" class="related-thumb">
				<?php the_title('<div class="title">','</div>');?>
			</a>
		<?php endforeach;?>
	<?php endif;?>
</div>
