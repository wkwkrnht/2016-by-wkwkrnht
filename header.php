<!DOCTYPE html>
<html>
<head>
	<link rel="amphtml" href="<?php echo get_permalink() . '?amp=1';?>">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="HandheldFriendly" content="true">
	<meta name="viewport" content="width=device-width">
	<meta name="referrer" content="default">
	<meta name="google-site-verification" content="">
	<meta name="msvalidate.01" content="">
	<meta name="theme-color" content="#ffcc00">
	<meta name="msapplication-TileColor" content="#ffcc00">
	<meta http-equiv="cleartype" content="on">
	<meta name="renderer" content="webkit">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo('pingback_url');?>">
	<link rel="publisher" href="http://plus.google.com/hogehoge">
	<link rel="prerender" href="<?php if(is_home()):echo get_permalink();else:echo home_url();endif;?>">
	<link rel="fluid-icon" href="./img/icon.ico" title="<?php bloginfo('name');?>">
	<link rel="image_src" href="./img/icon.ico">
	<link rel="stylesheet" href="./css/normalize.min.css">
	<link rel="stylesheet" href="./css/font-awesome.min.css">
	<link rel="stylesheet" href="./style.css">
	<?php wp_head();?>
</head>
<body class="card-list">
	<main id="site-main">
