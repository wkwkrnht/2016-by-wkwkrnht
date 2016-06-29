<style>
	#flex{display:flex;flex-wrap:wrap;justify-content:flex-start;align-items:center;}
	.related{display:block;width:35vw;border-radius:8px;margin:20px 8px 20px 0;background-color:#fff;box-shadow:0 1px 6px rgba(0,0,0,.12);}
	.related .thumb{background-color:#ffcc00;width:150px;height:150px;}
	.related .title{color:#333;font-size:1.8rem;max-height:150px;text-align:center;}
</style>
<div id="flex">
	<?php $categories=get_the_category($post->ID);$category_ID=array();
	foreach($categories as $category):array_push($category_ID,$category->cat_ID);endforeach;
	$args=array('posts_per_page'=>6,'post__not_in'=>array($post->ID),'category__in'=>$category_ID,'orderby'=>'rand',);
	$query=new WP_Query($args);
	if($query->have_posts()):?>
		<?php while($query->have_posts()):$query->the_post();?>
			<a href="<?php the_permalink()?>" title="<?php the_title_attribute();?>" class="related">
				<img src="<?php if(has_post_thumbnail()):echo meta_image();else:no_image();endif;?>" alt="no_thumbnail" width="35vw" height="150px" class="thumb">
				<?php the_title('<div class="title">','</div>');?>
			</a>
		<?php endwhile;?>
		<?php wp_reset_postdata();
	else:?>
		<?php $args=array('numberposts'=>6,'orderby'=>'rand','post_status'=>'publish','offset'=>1);
		$rand_posts=get_posts($args);
		foreach($rand_posts as $post):?>
			<a href="<?php the_permalink()?>" title="<?php the_title_attribute();?>" class="related">
				<img src="<?php if(has_post_thumbnail()):meta_image();else:no_image();endif;?>" alt="no_thumbnail" width="35vw" height="150px" class="thumb">
				<?php the_title('<div class="title">','</div>');?>
			</a>
		<?php endforeach;?>
		<?php wp_reset_postdata();
	endif;?>
</div>
