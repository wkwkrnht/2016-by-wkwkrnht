<!DOCTYPE html>
<html amp class="amp">
<head>
	<meta charset="utf-8">
	<link rel="canonical" href="<?php echo get_permalink();?>">
	<title><?php wp_title('｜',true,'right');?></title>
	<meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">
	<meta name="google-site-verification" content="<?php echo get_option('Google_Webmaster');?>">
	<meta name="msvalidate.01" content="<?php echo get_option('Bing_Webmaster');?>">
	<meta name="theme-color" content="<?php echo get_option('GoogleChrome_URLbar');?>">
	<meta name="msapplication-TileColor" content="<?php echo get_option('GoogleChrome_URLbar');?>">
	<meta name="renderer" content="webkit">
	<meta name="description" content="<?php meta_description();?>">
	<meta property="fb:app_id" content="<?php echo get_option('facebook_appid');?>">
	<meta property='og:type' content='article'>
	<meta property='og:title' content="<?php wp_title('｜',true,'right');?>">
	<meta property='og:url' content="<?php echo get_permalink();?>">
	<meta property='og:description' content="<?php meta_description();?>">
	<meta property='og:site_name' content="<?php bloginfo('name');?>">
	<meta property='og:image' content="<?php meta_image();?>">
	<meta property="article:author" content="<?php the_author_meta('facebook');?>">
	<meta name="twitter:card" content="summary">
	<meta name="twitter:domain" content="<?php echo $_SERVER['SERVER_NAME'];?>">
	<meta name="twitter:title" content="<?php wp_title('');?>">
	<meta name="twitter:description" content="Content description less than 200 characters">
	<meta name="twitter:image" content="<?php meta_image();?>">
	<meta name="twitter:site" content="<?php get_twitter_acount();?>">
	<meta name="twitter:creator" content="<?php the_author_meta('twitter');?>">
	<link rel="publisher" href="http://plus.google.com/'<?php the_author_meta('GoogleID');?>">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo('pingback_url');?>">
	<link rel="fluid-icon" href="<?php meta_image();?>" title="<?php bloginfo('name');?>">
	<link rel="image_src" href="<?php meta_image();?>">
	<script async src="https://cdn.ampproject.org/v0.js"></script>
	<script type="application/ld+json">
		{
			"@context":"http://schema.org",
			"@type":"NewsArticle",
			"mainEntityOfPage":{
				"@type":"WebPage",
				"@id":"<?php the_permalink();?>"
			},
			"headline":"<?php the_title();?>",
			"image":{
				"@type":"ImageObject",
				"url":"<?php echo esc_url(get_wkwkrnht_eyecatch(array(800,800)));?>",
				"height":800,
				"width":800
			},
			"datePublished":"<?php the_time('Y/m/d');?>",
			"dateModified":"<?php the_modified_date('Y/m/d');?>",
			"author":{
				"@type":"Person",
				"name":"<?php the_author_meta('display_name');?>"
			},
			"publisher":{
				"@type":"Organization",
				"name":"<?php bloginfo('name');?>",
				"homeLocation" : {
                    "@type" : "Place",
                    "name" : "<?php echo get_locale( );?>"
                },
				"logo":{
					"@type": "ImageObject",
					"url": "<?php echo esc_url(get_meta_image());?>",
					"width":60,
					"height":60
				}
			},
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
		.article-img{display:block;max-width:96vw;margin:0 auto;}
		.article-eyecatch{max-width:96vw;text-align:center;vertical-align:middle;}
		.article-meta{min-height:20vh;width:80vw;margin:0 auto;background-color:#f1f1f1;font-size:1.6rem;text-align:center;vertical-align:middle;}
		.article-date{display:block;float:left;height:inherit;width:30%;background-color:#03a9f4;color:#fff;font-size:2rem;line-height:20vh;}
		.article-title{font-size:2rem;}
		.bread .sp{margin:0 .5em;}
		.article-main{font-size:1.6rem;}
		.article-main p{max-width:50em;padding:5vmin 8vmin 0;margin:2vh auto;}
		.article-main a[href^="http"]:empty::before{content:attr(href);}
		.article-main a{text-decoration:none;border-bottom:0;}
		.article-main a:hover{border-bottom:solid 1px <?php echo get_option('a_hover_border','#03a9f4');?>;}
		.article-main a[href*=".png"],.article-main a[href*=".jpg"],.article-main a[href*=".jpeg"],.article-main a[href*=".gif"]{display:block;margin:2vh auto;}
		.article-main div{max-width:80vw;}
		.article-main pre,.article-main address{max-width:94vw;margin:1em auto;}
		.article-main pre{font-weight:bold;}
		.article-main code{white-space:pre;overflow-x:auto;}
		.article-main address,.article-main code{background-color:#eee;}
		.article-main amp-img{max-width:50%;max-height:50%;text-align:center;}
		.article-main table{width:calc(100% - 16vmin);margin:0 8vmin;table-layout:fixed;-webkit-box-sizing:border-box;box-sizing:border-box;border-collapse:collapse;}
		.article-main table caption{padding:1.2em;text-align:center;background-color:#ffc045;}
		.article-main table tr th{background-color:#f1f1f1;}
		.article-main table tr th,.article-main table tr td{padding:1.2em;text-align:center;border:1px solid #cfcfcf;}
		.article-main ul{margin:2em auto;list-style:none;}
		.article-main ul li::before{content:'●';display:inline;color:#03a9f4;font-size:.8em;padding-right:1em;}
		.article-main ul li::after,.article-main ol li::after{content:'';display:block;height:0;width:100%;position:relative;top:0;left:0;border-bottom:1px dashed #aaa;}
		.article-main ol{counter-reset:counter-name;}
		.article-main ol li:before{counter-increment:counter-name;content:counter(counter-name);display:inline-block;height:1.5em;width:1.5em;border-radius:50%;position:absolute;left:0;background-color:<?php echo get_option('article_main_ol_background','#03a9f4');?>;color:<?php echo get_option('article_main_ol_color','#fff');?>;line-height:1.5em;text-align:center;}
		.article-main ol li{margin:0;list-style:none;position:relative;padding-top:.1em;padding-left:2em;}
		.article-main h1,.article-main h2,.article-main h3,.article-main h4,.article-main h5,.article-main h6{min-height:5vh;max-width:90%;margin:2vh auto;line-height:5vh;text-align:center;}
		.article-main h3,.article-main h4,.article-main h5,.article-main h6{font-size:2rem;}
		.article-main h1{padding:.75em;background-color:<?php echo get_option('article_main_h1_background','#f4f4f4');?>;border-top:1px dashed <?php echo get_option('article_main_h1_border','#ccc');?>;border-bottom:1px dashed <?php echo get_option('article_main_h1_border','#ccc');?>;box-shadow:0 7px 10px -5px rgba(0,0,0,.1) inset;counter-increment:counter-h1;counter-reset:counter-h2;}
		.article-main h2{color:<?php echo get_option('article_main_h2_color','#fff');?>;background-color:<?php echo get_option('article_main_h2_background','#03a9f4');?>;box-shadow:0 0 3vmin rgba(0,0,0,.2);counter-increment:counter-h2;counter-reset:counter-h3;}
		.article-main h2 > a:visited{color:<?php echo get_option('article_main_h2_color','#fff');?>;}
		.article-main h3{color:<?php echo get_option('article_main_h3_color','#03a9f4');?>;border:1vmin solid <?php echo get_option('article_main_h3_border','#03a9f4');?>;box-shadow:0 3px 6px rgba(0,0,0,.1);counter-increment:counter-h3;counter-reset:counter-h4;}
		.article-main h3 > a:visited{color:<?php echo get_option('article_main_h3_color','#03a9f4');?>;}
		.article-main h4{border-left:.5em solid <?php echo get_option('article_main_h4_border','#03a9f4');?>;border-bottom:1px solid;counter-increment:counter-h4;counter-reset:counter-h5;}
		.article-main h5{border-left:.5em solid <?php echo get_option('article_main_h5_border','#03a9f4');?>;counter-increment:counter-h5;counter-reset:counter-h6;}
		.article-main h6{border-bottom:.75vmin dashed <?php echo get_option('article_main_h6_border','#03a9f4');?>;counter-increment:counter-h6;}
		.marker{background-color:linear-gradient(transparent 30%,yellow 30%);}
		.information,.question{background-color:#f4f3eb;padding:2em;padding-left:calc(7rem + 2vmin);border-radius:3vmin;position:relative;margin:1em auto;}
		.information::before,.question::before{display:inline-block;height:7rem;width:7rem;border-radius:50%;position:absolute;top:1vmin;left:1vmin;margin-right:7rem;color:#f4f3eb;background-color:#eae3b4;text-align:center;font-size:5rem;font-weight:700;line-height:7rem;}
		.information::before{content:"！";}
		.question::before{content:"？";}
		.button{display:block;box-sizing:border-box;min-height:4rem;width:80%;padding:2vmin 5vmin;border-radius:1.5vmin;font-size:2rem;font-weight:600;line-height:2;text-align:center;margin:2vh auto;position:relative;}
		.red.button{color:#fff;background-color:#f44336;box-shadow:0 1vmin 0 #d32f2f;}
		.red.button:hover{top:.2vmin;box-shadow:0 .75vmin 0 #d32f2f;}
		.blue.button{color:#fff;background-color:#03a9f4;box-shadow:0 1vmin 0 #0288d1;}
		.blue.button:hover{top:.2vmin;box-shadow:0 .75vmin 0 #0288d1;}
		.yellow.button{color:#fff;background-color:#ffeb3b;box-shadow:0 1vmin 0 #fbc02d;}
		.yellow.button:hover{top:.2vmin;box-shadow:0 .75vmin 0 #fbc02d;}
		.orange.button{color:#fff;background-color:#ff9800;box-shadow:0 1vmin 0 #f57c00;}
		.orange.button:hover{top:.2vmin;box-shadow:0 .75vmin 0 #f57c00;}
		.green.button{color:#fff;background-color:#8bc34a;box-shadow:0 1vmin 0 #689f38;}
		.green.button:hover{top:.2vmin;box-shadow:0 .75vmin 0 #689f38;}
		.black.button{color:#fff;background-color:#333;box-shadow:0 1vmin 0 #9e9e9e;}
		.black.button:hover{top:.2vmin;box-shadow:0 .75vmin 0 #9e9e9e;}
		.search-form{margin:3em 0;line-height:170%;}
		.search-form div{display:inline-block;padding:5px;margin-left:1rem;border:1px solid #555;border-radius:2px;}
		.search-form .sform{min-width:280px;background-color:#fff;}
		.search-form .sbtn{position:absolute;padding-left:2rem;padding-right:3rem;color:#fff;background-color:#1155ee;}
		.ogp-blogcard{display:block;min-height:10vh;max-width:80%;margin:3vmin auto;padding:2vmin 3vmin;border:1vmin solid #333;background-color:#fff;box-shadow:0 3px 6px rgba(0,0,0,.1);}
		.ogp-blogcard-main{height:70%;width:100%;position:relative;top:0;}
		.ogp-blogcard-img{display:inline-block;height:40%;width:40%;background-color:#03a9f4;}
		.ogp-blogcard-info{display:inline-block;width:55%;text-align:center;}
		.ogp-blogcard-title{font-size:2rem;}
		.ogp-blogcard-footer{height:30%;width:100%;position:relative;bottom:0;border-top:.1rem solid #333;vertical-align:middle;}
		.toc{width:90vw;padding-bottom:3vh;margin:3vh auto;box-shadow:0 0 3vmin rgba(0,0,0,.2);}
		.toc-toggle,.ogp-blogcard-share{display:none;}
		.format-chat .article-main p{display:block;height:3em;width:60%;padding:1em;border:1px solid #777;border-radius:5px;margin-bottom:2em;font-size:1.8rem;vertical-align:middle;}
		.format-chat .article-main p:nth-of-type(odd){float:left;clear:both;margin-left:3vmin;background-color:rgba(139,195,74,.6);}
		.format-chat .article-main p:nth-of-type(even){float:right;clear:both;margin-right:3vmin;background-color:rgba(230,230,230,.6);}
		.wp-caption{height:3em;max-width:96%;padding:1em .5em;margin:4vh auto;text-align:center;background-color:#f4f4f4;box-shadow:0 0 3vmin rgba(0,0,0,.1);}
		.wp-caption.alignleft{margin-left:0;}
		.wp-caption.alignright{margin-right:0;}
		.wp-caption img{height:auto;width:auto;max-width:100%;border:none;margin:0;padding:0;}
		.wp-caption p.wp-caption-text{font-size:.9em;margin:0;padding:1.5em 2em;}
		.alignnone,a img.alignnone{margin:2vh 3vw 5vh 0;}
		.alignright,a img.alignright{float:right;margin:2vh 0 5vh 3vw;}
		.aligncenter,div.aligncenter{display:block;margin:1vh auto;}
		.alignleft,a img.alignleft{float:left;margin:2vh 3vw 5vh 0;}
		a img.aligncenter{display:block;margin-left:auto;margin-right:auto;}
		footer{display:flex;flex-wrap:nowrap;justify-content:space-between;align-items:center;height:25vw;width:100%;margin:5vh 0;overflow-x:auto;overflow-y:hidden;-webkit-overflow-scrolling:touch;}
		.related-wrapper{display:block;height:20vw;min-width:28vw;border-radius:3vmin;padding:.5em 1em;margin:2vw;box-shadow:0 0 2vmin rgba(0,0,0,.3);background-color:#fff;color:#333;text-decoration:none;}
		.related-wrapper:visited{color:#333;}
		.related-title{box-shadow:0 3px 6px rgba(0,0,0,.1);background-color:#03a9f4;font-size:2rem;color:#fff;text-align:center;vertical-align:middle;}
		.related-date,.related-category{font-size:1.6rem;text-align:left;}
		@media screen and (max-width:768px){
			.article-main table,.article-main table caption,.article-main table thead,.article-main table tbody,.article-main table tr,.article-main table tr th{display:block;}
			.article-main table tr th{margin:-1px;}
			.article-main table tr td{display:list-item;list-style:disc inside;border:none;}
			.article-main table tr td + td {padding-top:0;}
		}
	</style>
</head>
<body>
	<article>
		<header class="article-header">
			<a href="<?php echo esc_url(home_url());?>" tabindex="0" class="article-img">
				<amp-img src="<?php wkwkrnht_eyecatch('wkwkrnht-thumb');?>" alt="eyecatch" height="576" width="1344" layout="responsive" class="article-eyecatch"></amp-img>
			</a>
			<div class="article-meta">
				<time class="article-date" datetime="<?php get_mtime('Y/n/j G:i.s');?>"><?php the_time('Y/n/j');?></time>
				<span class="article-info">
					<h1 class="article-name"><?php the_title();?></h1>
					<?php the_author();the_category(', ');?>
					<?php
					$cat=get_the_category();
					if($cat && !is_wp_error($cat)){
						$par=get_category($cat[0]->parent);$echo='';
						echo'<div class="bread" itemtype="http://data-vocabulary.org/Breadcrumb" itemscope=""><a href="' . home_url() . '" tabindex="0" itemprop="url"><span itemprop="title">ホーム</span></a><span class="sp">/</span>';
						while($par && !is_wp_error($par) && $par->term_id!==0){
							$echo='<a href="' . get_category_link($par->term_id) . '" tabindex="0" itemprop="url"><span itemprop="title">' . $par->name . '</span></a><span class="sp">/</span></div>' . $echo;
							$par=get_category($par->parent);
						}
						echo $echo . '<a href="'.get_category_link($cat[0]->term_id).'" tabindex="0" itemprop="url"><span itemprop="title">' . $cat[0]->name . '</span></a></div>';
					}
					?>
				</span>
			</div>
		</header>
		<main class="article-main">
			<?php
			$img     = ' src="' . get_no_image() . '"';
			$content = '';
			if(have_posts()):while(have_posts()):the_post();$content = get_the_content();endwhile;endif;

			$content = apply_filters('the_content',$content);
			$content = str_replace(']]>',']]&gt;',$content);
			$content = preg_replace('/<blockquote class="twitter-tweet".*>.*<a href="https:\/\/twitter.com\/.*\/status\/(.*).*<\/blockquote>.*<script async src="\/\/platform.twitter.com\/widgets.js" charset="utf-8"><\/script>/i','<div class=\'embed-container\'><amp-twitter width="800" height="600" layout="responsive" data-tweetid="$1" data-conversation="all" data-align="center"></amp-twitter></div>',$content);
			$content = preg_replace('/<iframe width=\'100%\' src=\'https:\/\/vine.co\/v\/(.*)\/embed\/simple\'.*><\/iframe>/i','<div class=\'embed-container\'><amp-vine data-vineid="$1" width="592" height="592" layout="responsive"></amp-vine></div>',$content);
			$content = preg_replace('/<iframe src=\'\/\/instagram.com\/p\/(.*)\/embed\/\'.*<\/iframe>/i','<div class=\'embed-container\'><amp-instagram layout="responsive" data-shortcode="$1" width="592" height="716" ></amp-instagram></div>',$content);
			$content = preg_replace('/https:\/\/youtu.be\/(.*)/i','<div class=\'embed-container\'><amp-youtube layout="responsive" data-videoid="$1" width="592" height="363"></amp-youtube></div>',$content);
			$content = preg_replace('/<iframe width="853" height="480" src="https:\/\/www.youtube.com\/embed\/(.*)" frameborder="0" allowfullscreen><\/iframe>.*<\/div>/i','<div class=\'embed-container\'><amp-youtube layout="responsive" data-videoid="$1" width="592" height="363"></amp-youtube></div>',$content);
			$content = preg_replace('/<iframe class="hatenablogcard" src="http:\/\/hatenablog-parts.com\/embed?url=(.*?)" frameborder="0" scrolling="no"><\/iframe>/i','<a href="$1">$1</a>',$content);
			$content = preg_replace('/<a class="embedly-card" href="(.*?)"><\/a><script async="" charset="UTF-8" src="\/\/cdn.embedly.com\/widgets\/platform.js"><\/script>/i','<a href="$1">$1</a>',$content);
			$content = preg_replace('/<iframe src="https:\/\/www.google.com\/maps\/embed?(.*?)" (.*?)><\/iframe>/i','<div><amp-iframe layout="responsive" src="https:\/\/www.google.com\/maps\/embed?$1" width="600" height="450" layout="responsive" sandbox="allow-scripts allow-same-origin allow-popups" frameborder="0" allowfullscreen></amp-iframe></div>',$content);
			$content = preg_replace('/<iframe (.*?)src="https:\/\/(.*?).amazon(.*?)><\/iframe>/i','<amp-iframe width="120" height="240" sandbox="allow-scripts allow-same-origin" frameborder="0" $1src="https://$2.amazon$3 ></amp-iframe>',$content);
			$content = preg_replace('/<iframe(.*?)><\/iframe>/i','<div><amp-iframe layout="responsive" height="576" width="1344" $1></amp-iframe></div>',$content);
			$content = preg_replace('/<img(.*?)>/i','<div><amp-img layout="responsive" height="576" width="1344" $1></amp-img></div>',$content);
			$content = preg_replace('/<(.*?)border=".*?"(.*?)>/','<$1$2>',$content);
			$content = preg_replace('/<(.*?)style=".*?"(.*?)>/','<$1$2>',$content);
  			$content = preg_replace('/<(.*?)onclick=".*?"(.*?)>/','<$1$2>',$content);
			$content = preg_replace('/<(.*?)onmouseover=".*?"(.*?)>/','<$1$2>',$content);
			$content = preg_replace('/<(.*?)onmouseout=".*?"(.*?)>/','<$1$2>',$content);
			$content = preg_replace('/<(.*?)oncontextmenu=".*?"(.*?)>/','<$1$2>',$content);
			$content = preg_replace('/<a(.*?)target=".*?"(.*?)>/','<a$1$2>',$content);
			$content = preg_replace('/<(.*?)marginwidth=".*?"(.*?)>/i','<$1$2>',$content);
			$content = preg_replace('/<(.*?)marginheight=".*?"(.*?)>/i','<$1$2>',$content);
			$content = str_replace('href="javascript:void(0)"','',$content);
			$content = str_replace('src=""',$img,$content);

			echo $content;
			?>
		</main>
		<footer>
			<?php $categories=get_the_category();$category_ID=array();foreach($categories as $category):array_push($category_ID,$category->cat_ID);endforeach;
			if(have_posts()):while(have_posts()):the_post();$now = get_the_ID();endwhile;endif;$array=array('numberposts'=>10,'category'=>$category_ID,'orderby'=>'rand','post__not_in'=>array($now),'no_found_rows'=>true,'update_post_term_cache'=>false,'update_post_meta_cache'=>false);
			$query = new WP_Query($array);
			if($query -> have_posts()):
				while($query -> have_posts()):$query -> the_post();
					$cat = get_the_category();?>
					<a href="<?php the_permalink()?>" title="<?php the_title_attribute();?>" tabindex="0" class="related-wrapper">
						<h3 class="related-title"><?php echo mb_strimwidth(get_the_title(),0,20,'…');?></h3><br>
						<span class="related-date">投稿日時 : <time datetime="<?php get_mtime('Y/n/j G:i.s');?>"><?php the_time('Y/n');?></time></span><br>
						<span class="related-category">カテゴリー : <?php echo $cat[0]->name;?></span>
					</a>
				<?php endwhile;?>
				<?php wp_reset_postdata();?>
			<?php else:
				wp_reset_postdata();
				$array=array('numberposts'=>10,'orderby'=>'rand','post__not_in'=>array($now),'no_found_rows'=>true,'update_post_term_cache'=>false,'update_post_meta_cache'=>false);
				$query = new WP_Query($array);
				while($query -> have_posts()):$query -> the_post();?>
					<a href="<?php the_permalink()?>" title="<?php the_title_attribute();?>" tabindex="0" class="related-wrapper">
						<h3 class="related-title"><?php echo mb_strimwidth(get_the_title(),0,20,'…');?></h3><br>
						<span class="related-date">投稿日時 : <time datetime="<?php get_mtime('Y/n/j G:i.s');?>"><?php the_time('Y/n');?></time></span><br>
						<span class="related-category">カテゴリー : <?php echo $cat[0]->name;?></span>
					</a>
				<?php endwhile;?>
				<?php wp_reset_postdata();?>
			<?php endif;?>
		</footer>
	</article>
</body>
</html>
