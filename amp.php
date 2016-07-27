<!DOCTYPE html>
<html amp class="amp">
<head>
	<meta charset="utf-8">
	<link rel="canonical" href="<?php echo get_permalink();?>">
	<title><?php wp_title();?></title>
	<meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">
	<meta name="google-site-verification" content="<?php echo get_option('Google_Webmaster');?>">
	<meta name="msvalidate.01" content="<?php echo get_option('Bing_Webmaster');?>">
	<meta name="theme-color" content="#ffcc00">
	<meta name="msapplication-TileColor" content="#ffcc00">
	<meta http-equiv="cleartype" content="on">
	<meta name="renderer" content="webkit">
	<meta name="description" content="<?php meta_description();?>">
	<meta property="fb:app_id" content="123456789">
	<meta property='og:type' content='article'>
	<meta property='og:title' content='<?php wp_title('｜',true,'right');?>'>
	<meta property='og:url' content="<?php echo get_meta_url();?>">
	<meta property='og:description' content='<?php meta_description();?>'>
	<meta property='og:site_name' content='<?php bloginfo('name');?>'>
	<meta property='og:image' content='<?php meta_image();?>'>
	<meta property="article:author" content="<?php the_author_meta('facebook');?>">
	<meta name="twitter:card" content="summary">
	<meta name="twitter:domain" content="<?php echo $_SERVER['SERVER_NAME'];?>">
	<meta name="twitter:title" content="Content Title">
	<meta name="twitter:description" content="Content description less than 200 characters">
	<meta name="twitter:image" content="<?php meta_image();?>">
	<meta name="twitter:site" content="<?php get_twitter_acount();?>">
	<meta name="twitter:creator" content="<?php the_author_meta('twitter');?>">
	<link rel="publisher" href="http://plus.google.com/'<?php the_author_meta('GoogleID');?>">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo('pingback_url');?>">
	<link rel="prerender" href="<?php if(is_home()):echo get_permalink();else:echo site_url();endif;?>">
	<link rel="fluid-icon" href="<?php meta_image();?>" title="<?php bloginfo('name');?>">
	<link rel="image_src" href="<?php meta_image();?>">
	<script async src="https://cdn.ampproject.org/v0.js"></script>
	<script type="application/ld+json">
		{
			"@context":"http://schema.org",
			"@type":"NewsArticle",
			"mainEntityOfPage":{"@type":"WebPage","@id":"<?php the_permalink();?>"},
			"headline":"<?php the_title();?>",
			"image":{"@type":"ImageObject","url":"<?php $image_url=wp_get_attachment_image_src(get_post_thumbnail_id(),true);echo $image_url[0];?>","height":800,"width":800},
			"datePublished":"<?php the_time('Y/m/d');?>",
			"dateModified":"<?php the_modified_date('Y/m/d');?>",
			"author":{"@type":"Person","name":"<?php the_author_meta('display_name');?>"},
			"publisher":{"@type":"Organization","name":"<?php bloginfo('name');?>","logo":{"@type": "ImageObject","url": "<?php echo esc_url(get_template_directory_uri());?>/img/logo.png","width":130,"height":53}},
			"description": "<?php echo mb_substr(strip_tags($post->post_content),0,60);?>…"
		}
	</script>
	<style amp-boilerplate>body{-webkit-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-moz-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-ms-animation:-amp-start 8s steps(1,end) 0s 1 normal both;animation:-amp-start 8s steps(1,end) 0s 1 normal both}@-webkit-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-moz-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-ms-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-o-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}</style><noscript><style amp-boilerplate>body{-webkit-animation:none;-moz-animation:none;-ms-animation:none;animation:none}</style></noscript>
	<script async custom-element="amp-analytics" src="https://cdn.ampproject.org/v0/amp-analytics-0.1.js"></script>
	<script async custom-element="amp-iframe" src="https://cdn.ampproject.org/v0/amp-iframe-0.1.js"></script>
	<script async custom-element="amp-facebook" src="https://cdn.ampproject.org/v0/amp-facebook-0.1.js"></script>
	<script async custom-element="amp-youtube" src="https://cdn.ampproject.org/v0/amp-youtube-0.1.js"></script>
	<script async custom-element="amp-vine" src="https://cdn.ampproject.org/v0/amp-vine-0.1.js"></script>
	<script async custom-element="amp-twitter" src="https://cdn.ampproject.org/v0/amp-twitter-0.1.js"></script>
	<script async custom-element="amp-instagram" src="https://cdn.ampproject.org/v0/amp-instagram-0.1.js"></script>
	<style amp-custom>
		:root{max-width:100%;font:400 62.5%/1.8 -apple-system,"Lucida Grande","Helvetica Neue","Hiragino Kaku Gothic ProN","游ゴシック","メイリオ",meiryo,sans-serif;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale;color:#333;}
		amp-iframe,h1,h2,h3,h4,h5,h6{text-align:center;}
		article{padding-top:18vh;}
		.siteinfo{width:100vw;height:18vh;background-color:#ffcc00;box-shadow:0 2px 2px 0 #999;z-index:10;position:fixed;top:0;left:0;margin-top:0;}
		.site-title{font-size:26px;color:white;text-decoration:none;}
		.article-img{display:block;height:20vh;width:100vw;}
		.article-img::before{display:block;content:'';height:20vh;width:100vw;position:relative;top:0;left:0;background-color:rgba(0,0,0,.3);box-shadow:inset 0 0 50px rgba(0,0,0,.4);}
		.article-img span{position:relative;top:0;left:0;}
		.article-meta{height:20vh;width:80vw;margin:0 auto;background-color:#f1f1f1;font-size:1.6rem;text-align:center;vertical-align:middle;}
		.article-date{display:block;float:left;height:inherit;width:30%;background-color:#ffcc00;color:#fff;font-size:2rem;line-height:20vh;}
		.article-title{font-size:2rem;}
		.bread{height:50%;}
		.bread .sp{margin:0 .5em;}
		.article-main{font-size:1.5rem;}
		.article-main amp-img{max-width:50%;max-height:50%;text-align:center;}
		.article-main table{border-collapse:separate;border-spacing:1px;border-top:1px solid #ccc;}
		.article-main th{padding:1rem;font-weight:bold;vertical-align:top;border-bottom:1px solid #ccc;background:#efefef;text-align:center;}
		.article-main td{padding:1rem;vertical-align:top;border-bottom:1px solid #ccc;text-align:left;}
		.article-main p{padding:5vmin 8vmin 0;}
		.article-main h2,.article-main h3,.article-main h4,.article-main h5,.article-main h6{min-height:4.5rem;max-width:90%;margin:1rem auto;font-size:2rem;line-height:4.5rem;}
		.article-main h2{color:#fff;background-color:#ffcc00;box-shadow:0 3px 6px rgba(0,0,0,.1);}
		.article-main h3{padding:.5em .75em;background-color:#f4f4f4;border-top:1px dashed #ccc;border-bottom:1px dashed #ccc;box-shadow:0 7px 10px -5px rgba(0,0,0,.1) inset;}
		.article-main h4{border-left:1rem solid #ffcc00;border-bottom:1px solid #ffcc00;}
		.article-main h5{border-left:1rem solid #ffcc00;}
		.article-main h6{border-bottom:.75vmin dashed #ffcc00;}
		h4{border-bottom:8px solid #ffcc00;}
	</style>
</head>
<body>
	<h1 class="siteinfo"><a href="<?php bloginfo('URL');?>" class="site-title"><?php bloginfo('name');?></a></h1>
	<article>
		<header class="article-header">
			<a href="<?php home_url();?>" class="article-img" style="background:url(<?php wkwkrnht_eyecatch();?>) no-repeat center/cover;"></a>
			<div class="article-meta">
				<time class="article-date" datetime="<?php get_mtime('Y/n/j G:i.s');?>"><?php the_time('Y/n/j');?></time>
				<span class="article-info">
					<h2 class="article-name"><?php the_title();?></h2>
					<?php the_author();the_category(', ');?>
					<?php
					$cat=get_the_category();
					if($cat && !is_wp_error($cat)){
						$par=get_category($cat[0]->parent);$echo='';
						echo'<div class="bread" itemtype="http://data-vocabulary.org/Breadcrumb" itemscope=""><a href="' . get_bloginfo('url') . '" itemprop="url"><span itemprop="title">ホーム</span></a><span class="sp">/</span>';
						while($par && !is_wp_error($par) && $par->term_id!==0){
							$echo='<a href="' . get_category_link($par->term_id) . '" itemprop="url"><span itemprop="title">' . $par->name . '</span></a><span class="sp">/</span></div>' . $echo;
							$par=get_category($par->parent);
						}
						echo $echo . '<a href="'.get_category_link($cat[0]->term_id).'" itemprop="url"><span itemprop="title">' . $cat[0]->name . '</span></a></div>';
					}
					?>
				</span>
			</div>
		</header>
		<section class="article-main">
			<?php
			$content = '';
			if(have_posts()):while(have_posts()):the_post();$content = get_the_content();endwhile;endif;

				$pattern = array(
					'/https:\/\/twitter.com\/.*\/status\/(.*).*/i',
					'/<blockquote class="twitter-tweet".*>.*<a href="https:\/\/twitter.com\/.*\/status\/(.*).*<\/blockquote>.*<script async src="\/\/platform.twitter.com\/widgets.js" charset="utf-8"><\/script>/i',
					'/<div class=\'embed-container\'><iframe width=\'100%\' src=\'https:\/\/vine.co\/v\/(.*)\/embed\/simple\'.*<\/div>/i',
					'/<div class=\'embed-container\'><iframe src=\'\/\/instagram.com\/p\/(.*)\/embed\/\'.*<\/iframe><\/div>/i',
					'/https:\/\/youtu.be\/(.*)/i',
					'/<iframe width="853" height="480" src="https:\/\/www.youtube.com\/embed\/(.*)" frameborder="0" allowfullscreen><\/iframe>.*<\/div>/i',
					'/<iframe .*src="(.*?)".*>/i',
					'/<img .*src="(.*?)".*>/i',
					'/\[OGPBlogcard url=(.*?)\]/',
					'/\[hatenaBlogcard url=(.*?)\]/',
					'/\[embedly url=(.*?)\]/'
				);

				$append = array(
					'<div class=\'embed-container\'><amp-twitter width="800" height="600" layout="responsive" data-tweetid="$1"></amp-twitter></div>',
					'<div class=\'embed-container\'><amp-twitter width="800" height="600" layout="responsive" data-tweetid="$1"></amp-twitter></div>',
					'<div class=\'embed-container\'><amp-vine data-vineid="$1" width="592" height="592" layout="responsive"></amp-vine></div>',
					'<div class=\'embed-container\'><amp-instagram layout="responsive" data-shortcode="$1" width="592" height="716" ></amp-instagram></div>',
					'<div class=\'embed-container\'><amp-youtube layout="responsive" data-videoid="$1" width="592" height="363"></amp-youtube></div>',
					'<div class=\'embed-container\'><amp-youtube layout="responsive" data-videoid="$1" width="592" height="363"></amp-youtube></div>',
					'<div><amp-iframe layout="responsive" src="$1"></amp-iframe></div>',
					'<div><amp-img layout="responsive" src="$1"></amp-img></div>',
					'<a href="$1">$1</a>',
					'<a href="$1">$1</a>',
					'<a href="$1">$1</a>'
				);

				echo preg_replace($pattern,$append,$content);
			?>
		</section>
		<footer>
			<?php require_once('widget/related.php');?>
		</footer>
	</article>
	<amp-pixel src="//ssl.google-analytics.com/collect?v=1&amp;tid=<?php //echo get_option('Google_Analytics');?>&amp;t=pageview&amp;cid=$RANDOM&amp;dt=$TITLE&amp;dl=$CANONICAL_URL&amp;z=$RANDOM"></amp-pixel>
</body>
</html>
