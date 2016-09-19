<!DOCTYPE html>
<html <?php language_attributes();?>>
<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#">
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<meta name="HandheldFriendly" content="true">
	<meta name="referrer" content="<?php echo get_theme_mod('referrer_setting','default');?>">
	<?php $google = '';$google = get_option('Google_Webmaster');if($google!==''){echo'<meta name="google-site-verification" content="' . $google . '">';}?>
	<?php $bing = '';$bing = get_option('Bing_Webmaster');if($bing!==''){echo'<meta name="msvalidate.01" content="' . $bing . '">';}?>
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
	<?php
	if(is_singular()===true):
		$fb         = '';
		$tw         = '';
		$gp         = '';
		$logo       = '';
		$author_id  = '';
		$fb         = get_the_author_meta('facebook');
		$tw         = get_the_author_meta('twitter');
		$gp         = get_the_author_meta('Googleplus');
		$logo       = get_theme_mod('custom_logo');
		$author_id  = $post->post_author;
		$i          = 1;
		if($fb!==''){echo'<meta property="article:author" content="' . $fb . '">';}
		if($tw!==''){echo'<meta name="twitter:creator" content="' . $tw . '">';}
		if($gp!==''){echo'<link rel="publisher" href="http://plus.google.com/' . $gp . '">';}
		echo'
		<script type="application/ld+json">
			{
  				"@context": "http://schema.org",
  				"@type": "NewsArticle",
  				"mainEntityOfPage": {
    				"@type": "WebPage",
    				"@id": "https://google.com/article"
  				},
  				"headline": "Article headline",
  					"image": {
    				"@type": "ImageObject",
    				"url": "' . get_meta_image() . '",
    				"height": 256,
    				"width": 696
  				},
  				"datePublished": "' . get_the_time('Y/n/j G:i.s') . '",
  				"dateModified": "' . get_mtime('Y/n/j G:i.s') . '",
  				"author": {
    				"@type": "Person",
    				"name": "' . get_the_author_meta('display_name',$author_id) . '"
  				},
   				"publisher": {
    				"@type": "Organization",
    				"name": "' . get_bloginfo('name') . '",
    				"logo": {
      					"@type": "ImageObject",
      					"url": "' . wp_get_attachment_url($logo) . '",
      					"width": 600,
      					"height": 60
    				}
  				},
  				"description": "' . get_meta_description() . '"
			}
		</script>';
		if(is_single() || is_page() && is_subpage()===false){
			$categories = get_the_category($post->ID);
			$cat        = $categories[0];
			echo'
			<script type="application/ld+json">
				{
					"@context":"http://schema.org",
					"@type": "BreadcrumbList",
					"itemListElement":
					[
						{
							"@type": "ListItem",
							"position": 1,
							"item":{
								"@id": "' . home_url() . '",
								"name": "ホーム"
							}
						},';
						if($cat -> parent != 0){
							$ancestors = array_reverse(get_ancestors( $cat -> cat_ID, 'category' ));
							foreach($ancestors as $ancestor){
								$i++;
								echo'
								{
									"@type": "ListItem",
									"position": ' . $i . ',
									"item":{
										"@id": "' . get_category_link($ancestor) . '",
										"name": "' . get_cat_name($ancestor) . '"
									}
								},';
							}
						}
						$i++;
						echo'
						{
							"@type": "ListItem",
							"position": ' . $i . ',
							"item":{
								"@id": "' . get_category_link($cat -> term_id) . '",
								"name": "' . $cat-> cat_name . '"
							}
						},';
		}
		if(is_page() && is_subpage()===true){
			$obj = get_queried_object();
			echo'
			<script type="application/ld+json">
				{
					"@context":"http://schema.org",
					"@type": "BreadcrumbList",
					"itemListElement":
					[
						{
							"@type": "ListItem",
							"position": 1,
							"item":{
								"@id": "' . home_url() . '",
								"name": "ホーム"
							}
						},';
						if($obj -> post_parent != 0){
							$pageAncestors = array_reverse($post -> ancestors);
							foreach($pageAncestors as $pageAncestor){
								$i++;
								echo'
								{
									"@type": "ListItem",
									"position": ' . $i . ',
									"item":{
										"@id": "' . esc_url(get_permalink($pageAncestor)) . '",
										"name": "' . esc_html(get_the_title($pageAncestor)) . '"
									}
								},';
							}
						}
		}
					$i++;
					echo'
					{
						"@type": "ListItem",
						"position": ' . $i . ',
						"item":{
							"@id": "' . esc_url(get_permalink()) . '",
							"name": "' . esc_html(get_the_title()) . '"
						}
					}
				]
			}
			</script>';
	elseif(is_category()):
		$i          = 1;
		$categories = get_the_category($post->ID);
		$cat        = $categories[0];
		$cattitle   = get_the_archive_title();
		echo'
		<script type="application/ld+json">
			{
				"@context":"http://schema.org",
				"@type": "BreadcrumbList",
				"itemListElement":
				[
					{
						"@type": "ListItem",
						"position": 1,
						"item":{"@id": "' . home_url() . '",
						"name": "ホーム"
					}
				},';
				if($cat -> parent != 0){
					$ancestors = array_reverse(get_ancestors($cat -> cat_ID,'category'));
					foreach($ancestors as $ancestor){
						$i++;
						echo'
						{
							"@type": "ListItem",
							"position": ' . $i . ',
							"item":{
								"@id": "' . get_category_link($ancestor) .'",
								"name": "' . get_cat_name($ancestor) . '"
							}
						},';
					}
				}
				$i++;
				echo'
					{
						"@type": "ListItem",
						"position": ' . $i . ',
						"item":{
							"@id": "' . get_category_link($cat -> term_id) . '",
							"name": "' . $cattitle . '"
						}
					}
				]
			}
		</script>';
	elseif(is_tag()):
		$tagName = single_tag_title('',false);
		$tag     = get_term_by('name',$tagName,'post_tag');
		$link    = get_tag_link($tag->term_id);
		echo'
			<script type="application/ld+json">
			{
				"@context":"http://schema.org",
				"@type": "BreadcrumbList",
				"itemListElement":
				[
					{
						"@type": "ListItem",
						"position": 1,
						"item":{
							"@id": "' . home_url() . '",
							"name": "ホーム"
						}
					},
					{
						"@type": "ListItem",
						"position": 2,
						"item":{
							"@id": "' . esc_url($link) . '",
							"name": "' . esc_html($tagName) . '"
						}
					}
				]
			}
			</script>';
	elseif(is_author()):
			$userId     = get_query_var('author');
			$authorName = get_the_author_meta('display_name',$userId);
			echo'
			<script type="application/ld+json">
			{
				"@context":"http://schema.org",
				"@type": "BreadcrumbList",
				"itemListElement":
				[
					{
						"@type": "ListItem",
						"position": 1,
						"item":{
							"@id": "' . home_url() . '",
							"name": "ホーム"
						}
					{
						"@type": "ListItem",
						"position": 2,
						"item":{
							"@id": "' . esc_url(get_author_posts_url($userId)) . '",
							"name": "' . esc_html($authorName) . '"}}
				]
			}
			</script>';
	elseif(is_date()):
			$y     = get_query_var('year');
			$m     = get_query_var('monthnum');
			$d     = get_query_var('day');
			$linkY = get_year_link($y);
			$linkM = get_month_link($y,$m);
			$linkD = get_month_link($y,$m,$d);
			echo'
				<script type="application/ld+json">
					{
						"@context":"http://schema.org",
						"@type": "BreadcrumbList",
						"itemListElement":
						[
							{
								"@type": "ListItem",
								"position": 1,
								"item":{"@id": "' . home_url() . '",
								"name": "ホーム"
							}
						},
						{
							"@type": "ListItem",
							"position": 2,
							"item":{
								"@id": "' . esc_url($linkY) . '",
								"name": "' . esc_html($y) . '年"
							}
						}';
						if(is_month() || is_day()){
							echo'
							{
								"@type": "ListItem",
								"position": 3,
								"item":{
									"@id": "' . esc_url($linkM) . '",
									"name": "' . esc_html($m) . '月"
								}
							}';
							if(is_day()){
								echo'
								{
									"@type": "ListItem",
									"position": 4,
									"item":{
										"@id": "' . esc_url($linkD) . '",
										"name": "' . esc_html($d) . '日"
									}
								}';
							}
						}
						echo'
						]
					}
				</script>';
	elseif(is_search()):
		echo'
		<script type="application/ld+json">
			{
				"@context":"http://schema.org",
				"@type": "BreadcrumbList",
				"itemListElement":
				[
					{
						"@type": "ListItem",
						"position": 1,
						"item":{
							"@id": "' . home_url() . '",
							"name": "ホーム"
						}
					},
					{
						"@type": "ListItem",
						"position": 2,
						"item":{
							"@id": "' . esc_url(get_search_link()) . '",
							"name": "「' . esc_html(get_search_query()) . '」で検索した結果"
						}
					}
				]
			}
		</script>';
	elseif(is_attachment()):
			echo'
			<script type="application/ld+json">
				{
					"@context":"http://schema.org",
					"@type": "BreadcrumbList",
					"itemListElement":
					[
						{
							"@type": "ListItem",
							"position": 1,
							"item":{
								"@id": "' . home_url() . '",
								"name": "ホーム"
							}
						},';
						$i   = 1;
						$obj = get_queried_object();
						if($obj -> parent != 0){
							$i++;
							echo'
							{
								"@type": "ListItem",
								"position": ' . $i . ',
								"item":{
									"@id": "' . esc_url(get_permalink($pageAncestor)) . '",
									"name": "' . esc_html(get_the_title($pageAncestor)) . '"
								}
							},';
						}
						$i++;
						echo'
						{
							"@type": "ListItem",
							"position": ' . $i . ',
							"item":{
								"@id": "' . esc_url(get_permalink()) . '",
								"name": "' . esc_html(get_the_title()) . '"
							}
						}
					]
				}
			</script>';
	endif;?>
	<link rel="amphtml" href="<?php echo get_permalink() . '?amp=1';?>">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo('pingback_url');?>">
	<link rel="prerender" href="<?php if(is_home()):echo get_permalink();else:echo site_url();endif;?>">
	<link rel="fluid-icon" href="<?php meta_image();?>" title="<?php bloginfo('name');?>">
	<link rel="image_src" href="<?php meta_image();?>" url="<?php meta_image();?>" height="256" width="256">
	<?php $code = '';$code = get_option('Analytics');if($code!==''){echo $code;}?>
	<?php wp_head();?>
</head>
<body <?php body_class();?>>
	<main id="site-main">
