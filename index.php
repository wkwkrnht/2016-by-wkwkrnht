<?php $myAmp=false;$string=$post->post_content;$nowurl=$_SERVER["REQUEST_URI"];if(strpos($nowurl,'amp')!==false&&strpos($string,'<script>')===false&&is_single()){$myAmp=true;};?>
<?php if($myAmp):?>
	<?php include(get_template_directory() . '/amp.php');?>
<?php else:?>
    <?php get_header();?>
		<?php wkwkrnht_special_card();
            if(have_posts()):
                while(have_posts()):the_post();
                    include(get_template_directory() . '/parts/card-list.php');
                endwhile;
            endif;?>
    <?php get_footer();
endif;?>
