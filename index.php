<?php $amp=false;$string=$post->post_content;$nowurl=$_SERVER["REQUEST_URI"];if(strpos($nowurl,'amp')!==false){$amp=true;}?>
<?php if($amp):?>
	<?php include(get_template_directory() . '/amp.php');?>
<?php else:?>
    <?php get_header();?>
		<?php wkwkrnht_special_card();?>
        <?php if(have_posts()):while(have_posts()):the_post();get_template_part('card-list',get_post_format())endwhile;endif;?>
    <?php get_footer();?>
<?php endif;?>
