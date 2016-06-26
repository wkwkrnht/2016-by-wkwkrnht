<!DOCTYPE html>
<html <?php language_attributes();?>>
<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#">
	<meta charset="utf-8">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<meta name="HandheldFriendly" content="true">
	<meta name="referrer" content="default">
	<!--<meta name="google-site-verification" content="">
	<meta name="msvalidate.01" content="">-->
	<meta name="theme-color" content="#ffcc00">
	<meta name="msapplication-TileColor" content="#ffcc00">
	<meta http-equiv="cleartype" content="on">
	<meta name="renderer" content="webkit">
	<meta name="description" content="<?php meta_description();?>">
	<meta property="fb:app_id" content="123456789">
	<meta property='og:type' content='article'>
	<?php if(!is_home()):?><meta property='og:title' content='<?php wp_title('｜',true,'right');?>'><?php endif;?>
	<meta property='og:url' content="<?php echo get_meta_url();?>">
	<meta property='og:description' content='<?php meta_description();?>'>
	<meta property='og:site_name' content='<?php bloginfo('name');?>'>
	<meta property='og:image' content='<?php meta_image();?>'>
	<meta name="twitter:card" content="summary">
	<meta name="twitter:domain" content="<?php echo $_SERVER['SERVER_NAME'];?>">
	<meta name="twitter:title" content="Content Title">
	<meta name="twitter:description" content="Content description less than 200 characters">
	<meta name="twitter:image" content="<?php meta_image();?>">
	<meta name="twitter:site" content="@">
	<?php if(is_singular()):
		echo'<meta property="article:author" content="' . the_author_meta() . '">
		<meta name="twitter:creator" content="@' . the_author_meta('twitter') . '">
		<link rel="publisher" href="http://plus.google.com/' . the_author_meta('GoogleID') . '">';
	endif;?>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo('pingback_url');?>">
	<link rel="prerender" href="<?php if(is_home()):echo get_permalink();else:echo site_url();endif;?>">
	<link rel="fluid-icon" href="<?php meta_image();?>" title="<?php bloginfo('name');?>">
	<link rel="image_src" href="<?php meta_image();?>">
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();?>/css/normalize.min.css">
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();?>/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();?>/css/main.css">
	<link rel="stylesheet" href="/css/default.css">
	<script src="http://static.evernote.com/noteit.js"></script>
	<?php wp_head();?>
</head>
<body <?php body_class();?>>
	<main id="site-main">
