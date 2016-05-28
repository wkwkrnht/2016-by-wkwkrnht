<?php $amp=false;$string=$post->post_content;if(strpos($_SERVER["REQUEST_URI"],'amp')!==false&&strpos($string,'<script>')===false):$amp=true;endif;
if($amp):
	include(get_template_directory() . '/amp.php');
else:
    get_header();
		wkwkrnht_special_card();
        if(have_posts()):while(have_posts()):the_post();get_template_part('card-list',get_post_format())endwhile;endif;
    get_footer();
endif;
?>
