<!DOCTYPE html>
<html <?php language_attributes();?>>
<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#">
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<meta name="HandheldFriendly" content="true">
	<meta name="referrer" content="<?php echo get_theme_mod('referrer_setting','default');?>">
	<?php
	$bing   = '';
	$google = '';
	$pi     = '';
	$bing   = get_option('Bing_Webmaster');
	$google = get_option('Google_Webmaster');
	$pin    = get_option('Pinterest');
	if($bing!==''){echo'<meta name="msvalidate.01" content="' . $bing . '">';}
	if($google!==''){echo'<meta name="google-site-verification" content="' . $google . '">';}
	if($pin!==''){echo'<meta name="p:domain_verify" content="' . $pin . '">';}?>
	<meta name="theme-color" content="<?php echo get_option('GoogleChrome_URLbar');?>">
	<meta name="msapplication-TileColor" content="<?php echo get_option('GoogleChrome_URLbar');?>">
	<meta http-equiv="cleartype" content="on">
	<meta name="renderer" content="webkit">
	<meta name="description" content="<?php meta_description();?>">
	<meta property="fb:app_id" content="<?php echo get_option('facebook_appid');?>">
	<meta property="og:type" content="article">
	<?php if(is_home()===false):?><meta property="og:title" content="<?php wp_title('｜',true,'right');bloginfo('name');?>"><?php endif;?>
	<meta property="og:url" content="<?php echo get_meta_url();?>">
	<meta property="og:description" content="<?php meta_description();?>">
	<meta property="og:site_name" content="<?php bloginfo('name');?>">
	<meta property="og:image" content="<?php meta_image();?>">
	<meta name="twitter:card" content="summary">
	<meta name="twitter:domain" content="<?php echo $_SERVER['SERVER_NAME'];?>">
	<meta name="twitter:title" content="<?php wp_title('');?>">
	<meta name="twitter:description" content="<?php meta_description();?>">
	<meta name="twitter:image" content="<?php meta_image();?>">
	<meta name="twitter:site" content="@<?php echo get_option('Twitter_URL');?>">
	<?php if(is_home()===true || is_singular()===true || is_category()===true || is_tag()===true || is_author()===true || is_date()===true || is_search()===true || is_attachment()===true){include_once(get_template_directory() . '/inc/meta-json.php');}?>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo('pingback_url');?>">
	<link rel="prerender" href="<?php if(is_home()):echo get_permalink();else:echo site_url();endif;?>">
	<link rel="fluid-icon" href="<?php meta_image();?>" title="<?php bloginfo('name');?>">
	<link rel="image_src" href="<?php meta_image();?>" url="<?php meta_image();?>" height="256" width="256">
	<?php
	include_once(get_template_directory() . '/styles.php');
	$txt='';$txt=get_option('header_txt');if($txt!==''){echo $txt;}
	wp_head();?>
</head>
<body <?php body_class();?>>
	<?php if(is_singular()===true):?>
		<?php  if(get_previous_post()):?>
			<div class="hide-nav-prev"><?php previous_post_link('%link','◀');?></div>
		<?php  endif;?>
		<?php if(get_next_post()):?>
			<div class="hide-nav-next"><?php next_post_link('%link','▶');?></div>
		<?php endif;?>
	<?php else:?>
		<?php if(get_previous_posts_link()):?>
			<div class="hide-nav-prev"><?php previous_posts_link('◀');?></div>
		<?php endif;?>
		<?php if(get_next_posts_link()):?>
			<div class="hide-nav-next"><?php next_posts_link('▶');?></div>
		<?php endif;?>
	<?php endif;?>
	<main id="site-main">
