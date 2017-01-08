<style>
	.widget_related_posts_img{
		align-items:center;
		display:flex;
		flex-wrap:nowrap;
		height:calc(20vw + 2vh * 2);
		justify-content:space-between;
		margin:6vh 0;
		overflow-x:auto;
		overflow-y:hidden;
		-webkit-overflow-scrolling:touch;
		width:100%;
	}
	.widget_related_posts_img > *{
		-webkit-transform:translateZ(0px);
	}
	.widget_related_posts_img .related-wrapper{
		background-color:<?php echo get_option('img_related_background','#fff');?>;
		border-radius:2vmin;
		box-shadow:0 0 2vmin rgba(0,0,0,.3);
		color:<?php echo get_option('img_related_color','#fff');?>;
		display:block;
		height:20vw;
		margin:2vh 4vh;
		position:relative;
		text-align:center;
		text-decoration:none;
		width:35vw;
	}
	.widget_related_posts_img .related-wrapper:visited{
		color:<?php echo get_option('img_related_color','#fff');?>;
	}
	.widget_related_posts_img .related-thumb{
		color:<?php echo get_option('img_related_img_color','#333');?>;
		height:20vw;
		width:35vw;
	}
	.widget_related_posts_img .related-title{
		background-color:rgba(0,0,0,.4);
		bottom:0;
		font-size:1.8rem;
		height:10vmin;
		position:absolute;
		vertical-align:middle;
		width:35vw;
	}
</style>
<?php
$size_full   = array(1344,576);
$size_128    = array(128,128);
$size_256    = array(256,256);
$size_512    = array(512,512);
$size_1024   = array(1024,1024);
$categories  = get_the_category();
$category_ID = array();
foreach($categories as $category){
	array_push($category_ID,$category->cat_ID);
}
if(have_posts()):while(have_posts()):the_post();$now = get_the_ID();endwhile;endif;
$array = array('numberposts'=>6,'category'=>$category_ID,'orderby'=>'rand','post__not_in'=>array($now),'no_found_rows'=>true,'update_post_term_cache'=>false,'update_post_meta_cache'=>false);
$query = new WP_Query($array);?>
<?php if($query -> have_posts()):
	while($query -> have_posts()):$query -> the_post();?>
		<a href="<?php the_permalink()?>" title="<?php the_title_attribute();?>" tabindex="0" class="related-wrapper">
			<img src="<?php wkwkrnht_eyecatch($size_full);?>" sizes="30vw" srcset="<?php wkwkrnht_eyecatch($size_128);?> 320w,<?php wkwkrnht_eyecatch($size_256);?> 1270w,<?php wkwkrnht_eyecatch($size_512);?> 1920w,<?php wkwkrnht_eyecatch($size_1024);?> 2560w" alt="thumbnail" class="related-thumb">
			<?php the_title('<div class="related-title">','</div>');?>
		</a>
	<?php endwhile;?>
	<?php wp_reset_postdata();?>
<?php else:?>
	<?php
	wp_reset_postdata();
	$array=array('numberposts'=>6,'orderby'=>'rand','post__not_in'=>array($now),'no_found_rows'=>true,'update_post_term_cache'=>false,'update_post_meta_cache'=>false);
	$query = new WP_Query($array);
	while($query -> have_posts()):$query -> the_post();?>
		<a href="<?php the_permalink()?>" title="<?php the_title_attribute();?>" tabindex="0" class="related-wrapper">
			<img src="<?php wkwkrnht_eyecatch($size_full);?>" sizes="30vw" srcset="<?php wkwkrnht_eyecatch($size_128);?> 320w,<?php wkwkrnht_eyecatch($size_256);?> 1270w,<?php wkwkrnht_eyecatch($size_512);?> 1920w,<?php wkwkrnht_eyecatch($size_1024);?> 2560w" alt="thumbnail" class="related-thumb">
			<?php the_title('<div class="related-title">','</div>');?>
		</a>
	<?php endwhile;?>
	<?php wp_reset_postdata();?>
<?php endif;?>
