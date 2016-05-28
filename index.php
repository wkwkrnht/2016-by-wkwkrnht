<?php
$myAmp=false;$string=$post->post_content;$nowurl=$_SERVER["REQUEST_URI"];if(strpos($nowurl,'amp')!==false&&strpos($string,'<script>')===false){$myAmp=true;};
if($myAmp):
	include(get_template_directory() . '/amp.php');
else:
    get_header();
		wkwkrnht_special_card();
        if(have_posts()):while(have_posts()):the_post();get_template_part('card-list',get_post_format())endwhile;endif;
    get_footer();
endif;
?>
