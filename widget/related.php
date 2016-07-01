<style>
	#flex{height:calc(20vw + 15vmin);width:100vw;overflow-x:auto;overflow-y:hidden;-webkit-overflow-scrolling:touch;}
	#flex > * {-webkit-transform:translateZ(0px);}
	.related{display:block;height:calc(20vw + 10vmin);width:30vw;border-radius:2vmin;margin:2.5vmin 3vmin;float:left;background-color:#fff;box-shadow:0 1px 6px rgba(0,0,0,.12);}
	.related .thumb{background-color:#ffcc00;}
	.related .title{height:10vmin;width:30vw;font-size:1.8rem;text-align:center;}
</style>
<div id="flex">
	<?php $categories=get_the_category();$category_ID=array();
	foreach($categories as $category):array_push($category_ID,$category->cat_ID);endforeach;
	$args=array('posts_per_page'=>6,'post__not_in'=>array($post->ID),'category__in'=>$category_ID,'orderby'=>'rand');
	$query=new WP_Query($args);
	if($query->have_posts()):?>
		<?php while($query->have_posts()):$query->the_post();?>
			<a href="<?php the_permalink()?>" title="<?php the_title_attribute();?>" class="related">
				<img src="<?php if(has_post_thumbnail()):meta_image();else:no_image();endif;?>" alt="thumbnail" width="30vw" height="20vw" class="thumb">
				<?php the_title('<div class="title">','</div>');?>
			</a>
		<?php endwhile;?>
		<?php wp_reset_postdata();
	else:?>
		<?php $args=array('numberposts'=>6,'orderby'=>'rand','post_status'=>'publish','offset'=>1);
		$rand_posts=get_posts($args);
		foreach($rand_posts as $post):?>
			<a href="<?php the_permalink()?>" title="<?php the_title_attribute();?>" class="related">
				<img src="<?php if(has_post_thumbnail()):meta_image();else:no_image();endif;?>" alt="thumbnail" width="30vw" height="20vw" class="thumb">
				<?php the_title('<div class="title">','</div>');?>
			</a>
		<?php endforeach;?>
		<?php wp_reset_postdata();
	endif;?>
</div>
