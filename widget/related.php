<?php $myAmp=false;$string=$post->post_content;$nowurl=$_SERVER["REQUEST_URI"];if(strpos($nowurl,'amp')!==false&&strpos($string,'<script>')===false&&is_single()){$myAmp=true;};
if($myAmp===true):
	echo'
	<style amp-custom>
		#flex{display:flex;flex-wrap:nowrap;justify-content:space-between;align-items:center;height:calc(20vw + 12vmin);width:100%;margin:2vmin 0;overflow-x:auto;overflow-y:hidden;-webkit-overflow-scrolling:touch;}
		#flex > * {-webkit-transform:translateZ(0px);}
		.related-wrapper{display:block;height:calc(20vw + 10vmin);width:35vw;border-radius:2vmin;margin:1vmin 3vmin;background-color:#fff;box-shadow:0 0 1vmin rgba(0,0,0,.3);text-align:center;}
		.related-thumb{height:20vw;width:35vw;background-color:#ffcc00;}
		.related-title{height:10vmin;font-size:1.8rem;color:#333;text-decoration:none;}
	</style>';
else:
	echo'
	<style>
		#flex{display:flex;flex-wrap:nowrap;justify-content:space-between;align-items:center;height:calc(20vw + 12vmin);width:100%;margin:2vmin 0;overflow-x:auto;overflow-y:hidden;-webkit-overflow-scrolling:touch;}
		#flex > * {-webkit-transform:translateZ(0px);}
		.related-wrapper{display:block;height:calc(20vw + 10vmin);width:35vw;border-radius:2vmin;margin:1vmin 3vmin;background-color:#fff;box-shadow:0 0 1vmin rgba(0,0,0,.3);text-align:center;}
		.related-thumb{height:20vw;width:35vw;background-color:#ffcc00;}
		.related-title{height:10vmin;font-size:1.8rem;color:#333;text-decoration:none;}
	</style>';
endif;?>
<div id="flex">
	<?php $categories=get_the_category();$category_ID=array();
	foreach($categories as $category):array_push($category_ID,$category->cat_ID);endforeach;
	$cat_posts=get_posts(array('numberposts'=>6,'category'=>$category_ID,'orderby'=>'rand'));
	if($cat_posts!==array()):
		foreach($cat_posts as $post):?>
			<a href="<?php the_permalink()?>" title="<?php the_title_attribute();?>" class="related-wrapper">
				<img src="<?php wkwkrnht_eyecatch();?>" alt="thumbnail" class="related-thumb">
				<?php the_title('<div class="related-title">','</div>');?>
			</a>
		<?php endforeach;?>
	<?php else:
		$rand_posts=get_posts(array('numberposts'=>6,'orderby'=>'rand'));
		foreach($rand_posts as $post):?>
			<a href="<?php the_permalink()?>" title="<?php the_title_attribute();?>" class="related-wrapper">
				<img src="<?php wkwkrnht_eyecatch();?>" alt="thumbnail" class="related-thumb">
				<?php the_title('<div class="related-title">','</div>');?>
			</a>
		<?php endforeach;?>
	<?php endif;?>
</div>
