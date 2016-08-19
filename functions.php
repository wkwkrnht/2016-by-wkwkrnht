<?php
/*
    セットアップ
1.各種宣言
    ●コンテント幅指定
    ●機能サポート宣言
    ●メニューエリア追加
2.エディタースタイル追加
3.API対応追加
4.ウィジェット周り
    ●ウィジェットエリア追加
    ●ウィジェット追加
    ●カスタマイズ
        ●メタウィジェット
            ●WordPressへのリンクを削除
            ●リンク項目の追加
        ●コメントウィジェット
5.不要なjs削除&jQueryのCDN化
6.body_classにクラス追加
*/
function wkwkrnht_setup(){
    if(!isset($content_width)):$content_width=1080;endif;
    add_theme_support('title-tag');
    add_theme_support('automatic-feed-links');
    add_theme_support('html5',array('comment-list','comment-form','search-form','gallery','caption'));
    add_theme_support('post-formats',array('aside','gallery','quote','image','link','status','video','audio','chat'));
    add_theme_support('post-thumbnails');
    add_theme_support('custom-background');
    add_theme_support('custom-logo',array('height'=>256,'width'=>256,'flex-height'=>true,));
    register_nav_menu('main','main');
    register_nav_menu('social','social');
}
add_action('after_setup_theme','wkwkrnht_setup');


add_action('admin_init',function(){add_editor_style('inc/custom-editor-style.css');});


add_action('init','wkwkrnht_oembed_api');
function wkwkrnht_oembed_api(){
    wp_oembed_add_provider('#https?://(www.)?youtube.com/watch.*#i','http://www.youtube.com/oembed/',true);
	wp_oembed_add_provider('#https?://(www.)?youtube.com/playlist.*#i','http://www.youtube.com/oembed/',true);
	wp_oembed_add_provider('#https?://(www.)?youtu.be/.*#i','http://www.youtube.com/oembed/',true);
    wp_oembed_add_provider('#https?://(www\.)?twitter\.com/.+?/status(es)?/.*#i','https://api.twitter.com/1/statuses/oembed',true);
    wp_oembed_add_provider('#https?://(www.)?instagram.com/p/.*#i','http://api.instagram.com/oembed',true);
    wp_oembed_add_provider('#https?://(www.)?instagr.am/p/.*#i','http://api.instagram.com/oembed',true);
    wp_oembed_add_provider('http://*.hatenablog.com/*','http://hatenablog-parts.com/embed?url=');
    wp_oembed_add_provider('http://codepen.io/*/pen/*','http://codepen.io/api/oembed');
    wp_oembed_add_provider('#https?://(www.)?ifttt.com/recipes/.*#i','http://www.ifttt.com/oembed/',true);
    wp_oembed_add_provider('http://www.kickstarter.com/projects/*','http://www.kickstarter.com/services/oembed',false);
    wp_oembed_add_provider('#https?://(www.)?cloudup.com/.*#i','https://cloudup.com/oembed/',true);
    wp_oembed_add_provider('#https?://(www.)?playbuzz.com/.*#i','https://www.playbuzz.com/api/oembed/',true);
}


add_action('widgets_init','wkwkrnht_widgets_init');
function wkwkrnht_widgets_init(){
    register_sidebar(array('name'=>'Main Area','id'=>'floatmenu','before_widget'=>'<li id="%1$s" class="widget %2$s">','after_widget'=>'</li>','before_title'=>'<h2 class="widget-title">','after_title' =>'</h2>',));
    register_sidebar(array('name'=>'Singular Footer','id'=>'singularfooter','before_widget'=>'<li id="%1$s" class="widget %2$s">','after_widget'=>'</li>','before_title'=>'<h2 class="widget-title">','after_title' =>'</h2>',));
    register_widget('wkwkrnht_manth_archive');
    register_widget('related_posts');
    register_widget('post_nav');
    register_widget('post_comment');
    register_widget('disqus_widget');
}

class wkwkrnht_manth_archive extends WP_Widget{
    function __construct(){parent::__construct('wkwkrnht_manth_archive','月別アーカイブ(短縮版)',array());}
    public function widget($args,$instance){echo $args['before_widget'];include(get_template_directory() . '/widget/manth-archive.php');echo $args['after_widget'];}
    public function form($instance){$title=!empty($instance['title']) ? $instance['title'] : '';?>
		<p>
		<label for="<?php echo $this->get_field_id('title');?>">title</label>
		<input class="widefat" id="<?php echo $this->get_field_id('title');?>" name="<?php echo $this->get_field_name('title');?>" type="text" value="<?php echo esc_attr($title);?>">
		</p>
		<?php
	}
	public function update($new_instance,$old_instance){$instance=array();$instance['title']=(!empty($new_instance['title'])) ? strip_tags($new_instance['title']):'';return $instance;}
}

class related_posts extends WP_Widget{
    function __construct(){parent::__construct('related_posts','関連記事',array());}
    public function widget($args,$instance){echo $args['before_widget'];include(get_template_directory() . '/widget/related.php');echo $args['after_widget'];}
    public function form($instance){$title=!empty($instance['title']) ? $instance['title'] : '';?>
		<p>
		<label for="<?php echo $this->get_field_id('title');?>">title</label>
		<input class="widefat" id="<?php echo $this->get_field_id('title');?>" name="<?php echo $this->get_field_name('title');?>" type="text" value="<?php echo esc_attr($title);?>">
		</p>
		<?php
	}
	public function update($new_instance,$old_instance){$instance=array();$instance['title']=(!empty($new_instance['title'])) ? strip_tags($new_instance['title']):'';return $instance;}
}

class post_nav extends WP_Widget{
    function __construct(){parent::__construct('post_nav','前後への記事のナビゲーション',array());}
    public function widget($args,$instance){echo $args['before_widget'];include(get_template_directory() . '/widget/post-nav.php');echo $args['after_widget'];}
    public function form($instance){$title=!empty($instance['title']) ? $instance['title'] : '';?>
		<p>
		<label for="<?php echo $this->get_field_id('title');?>">title</label>
		<input class="widefat" id="<?php echo $this->get_field_id('title');?>" name="<?php echo $this->get_field_name('title');?>" type="text" value="<?php echo esc_attr($title);?>">
		</p>
		<?php
	}
	public function update($new_instance,$old_instance){$instance=array();$instance['title']=(!empty($new_instance['title'])) ? strip_tags($new_instance['title']):'';return $instance;}
}

class post_comment extends WP_Widget{
    function __construct(){parent::__construct('post_comment','コメント',array());}
    public function widget($args,$instance){echo $args['before_widget'];comments_template('/widget/comment.php');echo $args['after_widget'];}
    public function form($instance){$title=!empty($instance['title']) ? $instance['title'] : '';?>
		<p>
		<label for="<?php echo $this->get_field_id('title');?>">title</label>
		<input class="widefat" id="<?php echo $this->get_field_id('title');?>" name="<?php echo $this->get_field_name('title');?>" type="text" value="<?php echo esc_attr($title);?>">
		</p>
		<?php
	}
	public function update($new_instance,$old_instance){$instance=array();$instance['title']=(!empty($new_instance['title'])) ? strip_tags($new_instance['title']):'';return $instance;}
}

class disqus_widget extends WP_Widget{
    function __construct(){parent::__construct('disqus_widget','Disqus',array());}
    public function widget($args,$instance){echo $args['before_widget'];include(get_template_directory() . '/widget/disqus.php');$args['after_widget'];}
}


add_filter('widget_meta_poweredby','__return_empty_string');
add_action('wp_meta','my_custom_meta_widget');
function my_custom_meta_widget(){ ?>
    <li><a href="<?php echo esc_url(home_url());?>/wp-admin/post-new.php" target="_blank" class="addnew"></a></li>
    <li><?php edit_post_link();?></li>
    <li><a href="wlw://wkwkrnht.gegahost.net/?postid=<?php echo the_ID();?>" class="wlwedit"></a></li>
<?php
}

remove_action('wp_head','print_emoji_detection_script',7);
remove_action('wp_print_styles','print_emoji_styles');
add_action('wp_enqueue_scripts','theme_enqueue_scripts_styles');
function theme_enqueue_scripts_styles(){
    wp_deregister_script('jquery');
    wp_register_script('jquery','');
    wp_enqueue_script('jquery',false,array(),null,true);
    wp_dequeue_script('devicepx');
    wp_enqueue_script('devicepx',false,array(),null,true);
}

function autoblank($text){
	$return = str_replace('<a','<a target="_blank"',$text);
	return $return;
}
add_filter('comment_text','autoblank');

add_filter('comments_open','custom_comment_tags');
add_filter('pre_comment_approved','custom_comment_tags');
function custom_comment_tags($data){
	global $allowedtags;
    $allowedtags['style'] = array('class'=>array());
	$allowedtags['pre'] = array('class'=>array());
    $allowedtags['code'] = array('class'=>array());
	return $data;
}


add_filter('body_class','add_body_class');
function add_body_class($classes){if(is_singular()===true):$classes[] = 'singular';else:$classes[] = 'card-list';endif;return $classes;}
/*
    メタ情報
1.アクセス中のURL取得
2.更新時間と投稿時間の比較
3.カテゴリーページのメタ設定
    ●画像
    ●ディスプリクション
    ●キーワード
4.タグページのメタ設定
    ●キーワード
    ●ディスプリクション
5.メタディスクリプション
6.イメージ
    ●yes_image
    ●no_image
    ●meta_image
    ●eyecatch
7.Twitterアカウント判別
8.Alt属性がないIMGタグにalt=""を追加する
9.続き物ページのメタ表示最適化
    ●Wordpressデフォルトのnext/prev出力動作を停止
    ●ページネーション（一覧ページ）と分割ページ（マルチページ）タグを出力
        ●1ページを複数に分けた分割ページ（マルチページ）でのタグ出力
        ●トップページやカテゴリページなどのページネーションでのタグ出力
    ●分割ページ（マルチページ）URLの取得
    ●分割ページ（マルチページ）かチェックする
*/
function get_meta_url(){return (empty($_SERVER['HTTPS']) ? 'http://' : 'https://') . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];}

function get_mtime($format){$mtime=get_the_modified_time('Ymd');$ptime=get_the_time('Ymd');if($ptime > $mtime):return get_the_time($format);elseif($ptime===$mtime):return null;else:return get_the_modified_time($format);endif;}

function get_meta_description_from_category(){
    $cat_desc=trim(strip_tags(category_description()));
    if($cat_desc){return $cat_desc;}
    $cat_desc='「' . single_cat_title('',false) . '」の記事一覧です。' . get_bloginfo('description');
    return $cat_desc;
}
function get_meta_keyword_from_category(){return single_cat_title('',false) . ',カテゴリー,ブログ,記事一覧';}

function get_meta_keyword_from_tag(){return single_tag_title('',false) . ',タグ,ブログ,記事一覧';}
function get_meta_description_from_tag(){
    $tag_desc=trim(strip_tags(tag_description()));
    if($tag_desc){return $tag_desc;}
    $tag_desc='「' . single_tag_title('',false) . '」の記事一覧です。' . get_bloginfo('description');
    return $tag_desc;
}

add_filter('wp_title',function($title){if(empty($title)&&(is_home()||is_front_page())){$title = bloginfo('name');}return $title;});

function meta_description(){
    if(is_singular()===true&&has_excerpt()===true):
        the_excerpt();
    elseif(is_category()===true):
        echo get_meta_description_from_category();
    elseif(is_tag()===true):
        echo get_meta_description_from_tag();
    else:
        bloginfo('description');
    endif;
}

function yes_image($size){$img = wp_get_attachment_image_src(get_post_thumbnail_id(),$size);echo $img[0];}
function no_image(){echo get_template_directory_uri() . '/inc/no-img.png';}
function meta_image(){
    if(is_singular()===true&&has_post_thumbnail()===true):
        $size = array(256,256);
        yes_image($size);
    else:
        $logo=get_theme_mod('custom_logo');
        echo wp_get_attachment_url($logo);
    endif;
}
function wkwkrnht_eyecatch($size){if(has_post_thumbnail()===true):yes_image($size);else:no_image();endif;}

function get_twitter_acount(){if(get_the_author_meta('twitter')!==''):return get_the_author_meta('twitter');elseif(get_option('Twitter_URL')!==''):return get_option('Twitter_URL');else:return null;endif;}

add_filter('the_content',function($content){return preg_replace('/<img((?![^>]*alt=)[^>]*)>/i','<img alt=""${1}>',$content);});

remove_action('wp_head','adjacent_posts_rel_link_wp_head');
function rel_next_prev_link_tags(){
    if(is_single()||is_page()){
        global $wp_query;
        $multipage = check_multi_page();
        if($multipage[0] > 1){
            $prev = generate_multipage_url('prev');
            $next = generate_multipage_url('next');
            if($prev){echo'<link rel="prev" href="'.$prev.'">'.PHP_EOL;}
            if($next){echo'<link rel="next" href="'.$next.'">'.PHP_EOL;}
        }
    }else{
        global $paged;
        if(get_previous_posts_link()){echo'<link rel="prev" href="'.get_pagenum_link( $paged - 1 ).'">'.PHP_EOL;}
        if(get_next_posts_link()){echo'<link rel="next" href="'.get_pagenum_link( $paged + 1 ).'">'.PHP_EOL;}
    }
}
add_action('wp_head','rel_next_prev_link_tags');
function generate_multipage_url($rel='prev'){
    global $post;
    $url = '';
    $multipage = check_multi_page();
    if($multipage[0] > 1):
        $numpages = $multipage[0];
        $page = $multipage[1] == 0 ? 1 : $multipage[1];
        $i = 'prev' == $rel? $page - 1: $page + 1;
        if($i && $i > 0 && $i <= $numpages):
            if(1 == $i){
                $url = get_permalink();
            }elseif('' == get_option('permalink_structure') || in_array($post->post_status,array('draft','pending'))){
                $url = add_query_arg('page',$i,get_permalink());
            }else{
                $url = trailingslashit(get_permalink()).user_trailingslashit($i,'single_paged');
            }
        endif;
    endif;
    return $url;
}
function check_multi_page(){$num_pages=substr_count($GLOBALS['post']->post_content,'<!--nextpage-->') + 1;$current_page=get_query_var('page');return array($num_pages,$current_page);}
/*
    独自要素&独自装飾
1.情報カード
    ●site name&site description
    ●cat name&cat description
    ●serach keyword&result
2.ページネーション
3.OGP版ブログカード
4.検索結果をマーカー風にハイライト
5.@hogehogeをツイッターにリンク
*/
function wkwkrnht_special_card(){
    $blogname=get_bloginfo('name');
    $sitedescription=get_bloginfo('description');
    if(is_author()===true):
        $url = dirname(__FILE__) . '/./widget/author-bio.php';
        include_once $url;
    else:
        echo'<div class="card info-card">';
            if(is_category()===true):
                echo'<h1 class="site-title">「' . single_cat_title('',false) . '」の記事一覧｜' . $blogname . '</h1><br><p class="site-description">' . category_description() . '</p>';
            elseif(is_tag()===true):
                echo'<h1 class="site-title">「' . single_tag_title('',false) . '」の記事一覧｜' . $blogname . '</h1><br><p class="site-description">' . tag_description() . '</p>';
            elseif(is_search()===true):
                global $wp_query;
                $serachresult=$wp_query->found_posts;
                wp_reset_query();
                echo'<h1 class="site-title">「' . get_search_query() . '」の検索結果｜' . $blogname . '</h1><br><p class="site-description">' . $serachresult . ' 件 / ' . $wp_query->max_num_pages . ' ページ</p>';
            else:
                echo'<a href="' . site_url() . '"><h1 class="site-title">' . $blogname . '</h1><p class="site-description">' . $sitedescription . '</p></a>';
            endif;
        echo'<br><span class="copyright">&copy;2015&nbsp;' . $blogname . '</span></div>';
    endif;
}

function wkwkrnht_page_navi(){
    global $wp_query;
    $big = 999999999;
    $page_format = paginate_links(array(
        'base'=>str_replace($big,'%#%',esc_url(get_pagenum_link($big))),
        'format'=>'/page/%#%',
        'current'=>max(1,get_query_var('paged')),
        'total'=>$wp_query->max_num_pages,
        'prev_next'=>True,
		'prev_text'=>'<',
		'next_text'=>'>',
		'type'=>'array'
    ));
    if(is_array($page_format)){
		$paged = (get_query_var('paged')==0) ? 1 : get_query_var('paged');
		foreach($page_format as $page){if($page===$paged){echo "<li class='current'>$page</li>";}else{echo "<li>$page</li>";}}
	}
	wp_reset_query();
}

function make_ogp_blog_card($url){
    $ifvar = get_site_transient($url);
    if($ifvar):
        $content = $ifvar;
    else:
        require_once('inc/OpenGraph.php');
    	$ogp = OpenGraph::fetch($url);
        $url = $ogp->url;
        $img = $ogp->image;
        $title = $ogp->title;
        $site_name = $ogp->site_name;
        $description = $ogp->description;
        $content =
        '<div class="ogp-blogcard">
            <div class="ogp-blogcard-main">
                <img class="ogp-blogcard-img" src="' . $img . '">
                <div class="ogp-blogcard-info">
                    <a href="' . $url . '" target="_blank">
                        <h2 class="ogp-blogcard-title">' . $title . '</h2>
                        <p class="ogp-blogcard-description">' . $description . '</p>
                    </a>
                </div>
            </div>
            <div class="ogp-blogcard-footer">
                <a href="' . $url . '" target="_blank">
                    <span class="ogp-blogcard-site-name">' . $site_name . '</span>
                </a>
            </div>
        </div>';
        if(strlen($url) > 20){$transitname = wordwrap($url,20);}else{$transitname = $url;}
        set_site_transient($transitname,$content,12 * WEEK_IN_SECONDS);
    endif;
    return $content;
}

function wps_highlight_results($text){
    if(is_search()===true){
        $sr   = get_query_var('s');
        $keys = explode(" ",$sr);
        $text = preg_replace('/('.implode('|',$keys) .')/iu','<span class="marker">'.$sr.'</span>',$text);
    }
    return $text;
}
add_filter('the_title','wps_highlight_results');
add_filter('the_content','wps_highlight_results');

function twtreplace($content){
    $twtreplace = preg_replace('/([^a-zA-Z0-9-_&])@([0-9a-zA-Z_]+)/',"$1<a href=\"http://twitter.com/$2\" target=\"_blank\" rel=\"nofollow\">@$2</a>",$content);
    return $twtreplace;
}
add_filter('the_content','twtreplace');
add_filter('comment_text','twtreplace');
/*
    ショートコード
1.カスタムCSS
2.HTMLエンコード
3.embed.ly版ブログカード
4.はてな版ブログカード
5.検索風表示
*/
function style_into_article($atts){extract(shortcode_atts(array('style'=>'',),$atts));return'<pre class="wpcss" style="display:none;"><code>' . $style . '</code></pre>';}
function html_encode($args=array(),$content=''){return htmlspecialchars($content,ENT_QUOTES,'UTF-8');}
function wps_trend($atts){extract(shortcode_atts(array('width'=>'640','height'=>'480','geo'=>'JP','keyword'=>'','date'=>''),$atts));$height=(int)$height;$width=(int)$width;$keyword=esc_attr($keyword);$geo=esc_attr($geo);$date=esc_attr($date);return'<script src="//www.google.com/trends/embed.js?hl=ja&amp;q=' . $keyword . '&amp;geo=' . $geo . '&amp;date=' . $date . '&amp;cmpt=q&amp;content=1&amp;cid=TIMESERIES_GRAPH_0&amp;export=5&amp;w=' . $width . '&amp;h=' . $height . '"></script>';}
function url_to_embedly($atts){extract(shortcode_atts(array('url'=>'',),$atts));return'<a class="embedly-card" href="' . $url . '"></a><script async="" charset="UTF-8" src="//cdn.embedly.com/widgets/platform.js"></script>';}
function url_to_hatenaBlogcard($atts){extract(shortcode_atts(array('url'=>'',),$atts));return'<iframe class="hatenablogcard" src="http://hatenablog-parts.com/embed?url=' . $url . '" frameborder="0" scrolling="no"></iframe>';}
function url_to_OGPBlogcard($atts){extract(shortcode_atts(array('url'=>'',),$atts));return make_ogp_blog_card($url);}
function txt_to_SearchBox($atts){extract(shortcode_atts(array('txt'=>'',),$atts));return'<div class="search-form"><div class="sform">' . $txt . '</div><div class="sbtn"><span class="fa fa-search fa-fw" aria-hidden="true"></span> 検索</div></div>';}
add_shortcode('customcss','style_into_article');
add_shortcode('html_encode','html_encode');
add_shortcode('google_keyword','wps_trend');
add_shortcode('embedly','url_to_embedly');
add_shortcode('hatenaBlogcard','url_to_hatenaBlogcard');
add_shortcode('OGPBlogcard','url_to_OGPBlogcard');
add_shortcode('SearchBox','txt_to_SearchBox');
/*
    表示高速化
1.lazyload
*/
add_filter('the_content','wkwkrnht_lazyload');
function wkwkrnht_lazyload($content){
    require_once('inc/phpQuery-onefile.php');
    $phpQuery = phpQuery::newDocument($content);
    $is_gbot  = strpos($_SERVER["HTTP_USER_AGENT"],'Googlebot');
    if($is_gbot===false){
        foreach($phpQuery->find('img') as $img){
            $src = $img->getAttribute('src');
            pq($img)->addClass('lazyload');
            $img->setAttribute('data-src',$src);
            $img->setAttribute('src',"data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==");
        }
        $script = '
            <script>
                // lazysizes - v2.0.0
                !function(a,b){var c=b(a,a.document);a.lazySizes=c,"object"==typeof module&&module.exports&&(module.exports=c)}(window,function(a,b){"use strict";if(b.getElementsByClassName){var c,d=b.documentElement,e=a.Date,f=a.HTMLPictureElement,g="addEventListener",h="getAttribute",i=a[g],j=a.setTimeout,k=a.requestAnimationFrame||j,l=a.requestIdleCallback,m=/^picture$/i,n=["load","error","lazyincluded","_lazyloaded"],o={},p=Array.prototype.forEach,q=function(a,b){return o[b]||(o[b]=new RegExp("(\\s|^)"+b+"(\\s|$)")),o[b].test(a[h]("class")||"")&&o[b]},r=function(a,b){q(a,b)||a.setAttribute("class",(a[h]("class")||"").trim()+" "+b)},s=function(a,b){var c;(c=q(a,b))&&a.setAttribute("class",(a[h]("class")||"").replace(c," "))},t=function(a,b,c){var d=c?g:"removeEventListener";c&&t(a,b),n.forEach(function(c){a[d](c,b)})},u=function(a,c,d,e,f){var g=b.createEvent("CustomEvent");return g.initCustomEvent(c,!e,!f,d||{}),a.dispatchEvent(g),g},v=function(b,d){var e;!f&&(e=a.picturefill||c.pf)?e({reevaluate:!0,elements:[b]}):d&&d.src&&(b.src=d.src)},w=function(a,b){return(getComputedStyle(a,null)||{})[b]},x=function(a,b,d){for(d=d||a.offsetWidth;d<c.minSize&&b&&!a._lazysizesWidth;)d=b.offsetWidth,b=b.parentNode;return d},y=function(){var a,c,d=[],e=function(){var b;for(a=!0,c=!1;d.length;)b=d.shift(),b[0].apply(b[1],b[2]);a=!1};return function(f){a?f.apply(this,arguments):(d.push([f,this,arguments]),c||(c=!0,(b.hidden?j:k)(e)))}}(),z=function(a,b){return b?function(){y(a)}:function(){var b=this,c=arguments;y(function(){a.apply(b,c)})}},A=function(a){var b,c=0,d=125,f=999,g=f,h=function(){b=!1,c=e.now(),a()},i=l?function(){l(h,{timeout:g}),g!==f&&(g=f)}:z(function(){j(h)},!0);return function(a){var f;(a=a===!0)&&(g=66),b||(b=!0,f=d-(e.now()-c),0>f&&(f=0),a||9>f&&l?i():j(i,f))}},B=function(a){var b,c,d=99,f=function(){b=null,a()},g=function(){var a=e.now()-c;d>a?j(g,d-a):(l||f)(f)};return function(){c=e.now(),b||(b=j(g,d))}},C=function(){var f,k,l,n,o,x,C,E,F,G,H,I,J,K,L,M=/^img$/i,N=/^iframe$/i,O="onscroll"in a&&!/glebot/.test(navigator.userAgent),P=0,Q=0,R=0,S=-1,T=function(a){R--,a&&a.target&&t(a.target,T),(!a||0>R||!a.target)&&(R=0)},U=function(a,c){var e,f=a,g="hidden"==w(b.body,"visibility")||"hidden"!=w(a,"visibility");for(F-=c,I+=c,G-=c,H+=c;g&&(f=f.offsetParent)&&f!=b.body&&f!=d;)g=(w(f,"opacity")||1)>0,g&&"visible"!=w(f,"overflow")&&(e=f.getBoundingClientRect(),g=H>e.left&&G<e.right&&I>e.top-1&&F<e.bottom+1);return g},V=function(){var a,e,g,i,j,m,n,p,q;if((o=c.loadMode)&&8>R&&(a=f.length)){e=0,S++,null==K&&("expand"in c||(c.expand=d.clientHeight>500?500:400),J=c.expand,K=J*c.expFactor),K>Q&&1>R&&S>2&&o>2&&!b.hidden?(Q=K,S=0):Q=o>1&&S>1&&6>R?J:P;for(;a>e;e++)if(f[e]&&!f[e]._lazyRace)if(O)if((p=f[e][h]("data-expand"))&&(m=1*p)||(m=Q),q!==m&&(C=innerWidth+m*L,E=innerHeight+m,n=-1*m,q=m),g=f[e].getBoundingClientRect(),(I=g.bottom)>=n&&(F=g.top)<=E&&(H=g.right)>=n*L&&(G=g.left)<=C&&(I||H||G||F)&&(l&&3>R&&!p&&(3>o||4>S)||U(f[e],m))){if(ba(f[e]),j=!0,R>9)break}else!j&&l&&!i&&4>R&&4>S&&o>2&&(k[0]||c.preloadAfterLoad)&&(k[0]||!p&&(I||H||G||F||"auto"!=f[e][h](c.sizesAttr)))&&(i=k[0]||f[e]);else ba(f[e]);i&&!j&&ba(i)}},W=A(V),X=function(a){r(a.target,c.loadedClass),s(a.target,c.loadingClass),t(a.target,Z)},Y=z(X),Z=function(a){Y({target:a.target})},$=function(a,b){try{a.contentWindow.location.replace(b)}catch(c){a.src=b}},_=function(a){var b,d,e=a[h](c.srcsetAttr);(b=c.customMedia[a[h]("data-media")||a[h]("media")])&&a.setAttribute("media",b),e&&a.setAttribute("srcset",e),b&&(d=a.parentNode,d.insertBefore(a.cloneNode(),a),d.removeChild(a))},aa=z(function(a,b,d,e,f){var g,i,k,l,o,q;(o=u(a,"lazybeforeunveil",b)).defaultPrevented||(e&&(d?r(a,c.autosizesClass):a.setAttribute("sizes",e)),i=a[h](c.srcsetAttr),g=a[h](c.srcAttr),f&&(k=a.parentNode,l=k&&m.test(k.nodeName||"")),q=b.firesLoad||"src"in a&&(i||g||l),o={target:a},q&&(t(a,T,!0),clearTimeout(n),n=j(T,2500),r(a,c.loadingClass),t(a,Z,!0)),l&&p.call(k.getElementsByTagName("source"),_),i?a.setAttribute("srcset",i):g&&!l&&(N.test(a.nodeName)?$(a,g):a.src=g),(i||l)&&v(a,{src:g})),y(function(){a._lazyRace&&delete a._lazyRace,s(a,c.lazyClass),(!q||a.complete)&&(q?T(o):R--,X(o))})}),ba=function(a){var b,d=M.test(a.nodeName),e=d&&(a[h](c.sizesAttr)||a[h]("sizes")),f="auto"==e;(!f&&l||!d||!a.src&&!a.srcset||a.complete||q(a,c.errorClass))&&(b=u(a,"lazyunveilread").detail,f&&D.updateElem(a,!0,a.offsetWidth),a._lazyRace=!0,R++,aa(a,b,f,e,d))},ca=function(){if(!l){if(e.now()-x<999)return void j(ca,999);var a=B(function(){c.loadMode=3,W()});l=!0,c.loadMode=3,W(),i("scroll",function(){3==c.loadMode&&(c.loadMode=2),a()},!0)}};return{_:function(){x=e.now(),f=b.getElementsByClassName(c.lazyClass),k=b.getElementsByClassName(c.lazyClass+" "+c.preloadClass),L=c.hFac,i("scroll",W,!0),i("resize",W,!0),a.MutationObserver?new MutationObserver(W).observe(d,{childList:!0,subtree:!0,attributes:!0}):(d[g]("DOMNodeInserted",W,!0),d[g]("DOMAttrModified",W,!0),setInterval(W,999)),i("hashchange",W,!0),["focus","mouseover","click","load","transitionend","animationend","webkitAnimationEnd"].forEach(function(a){b[g](a,W,!0)}),/d$|^c/.test(b.readyState)?ca():(i("load",ca),b[g]("DOMContentLoaded",W),j(ca,2e4)),W(f.length>0)},checkElems:W,unveil:ba}}(),D=function(){var a,d=z(function(a,b,c,d){var e,f,g;if(a._lazysizesWidth=d,d+="px",a.setAttribute("sizes",d),m.test(b.nodeName||""))for(e=b.getElementsByTagName("source"),f=0,g=e.length;g>f;f++)e[f].setAttribute("sizes",d);c.detail.dataAttr||v(a,c.detail)}),e=function(a,b,c){var e,f=a.parentNode;f&&(c=x(a,f,c),e=u(a,"lazybeforesizes",{width:c,dataAttr:!!b}),e.defaultPrevented||(c=e.detail.width,c&&c!==a._lazysizesWidth&&d(a,f,e,c)))},f=function(){var b,c=a.length;if(c)for(b=0;c>b;b++)e(a[b])},g=B(f);return{_:function(){a=b.getElementsByClassName(c.autosizesClass),i("resize",g)},checkElems:g,updateElem:e}}(),E=function(){E.i||(E.i=!0,D._(),C._())};return function(){var b,d={lazyClass:"lazyload",loadedClass:"lazyloaded",loadingClass:"lazyloading",preloadClass:"lazypreload",errorClass:"lazyerror",autosizesClass:"lazyautosizes",srcAttr:"data-src",srcsetAttr:"data-srcset",sizesAttr:"data-sizes",minSize:40,customMedia:{},init:!0,expFactor:1.5,hFac:.8,loadMode:2};c=a.lazySizesConfig||a.lazysizesConfig||{};for(b in d)b in c||(c[b]=d[b]);a.lazySizesConfig=c,j(function(){c.init&&E()})}(),{cfg:c,autoSizer:D,loader:C,init:E,uP:v,aC:r,rC:s,hC:q,fire:u,gW:x,rAF:y}}});
            </script>
        ';
        $phpQuery->find('body')->append(pq($script));
    }
    print phpQuery::getDocument();
}
/*
    投稿画面カスタマイズ
1.カテゴリーフィルター&抜粋制限
2.クイックタグ追加
3.投稿一覧に項目追加
*/
function add_post_edit_featuer(){ ?>
<script>
	jQuery(function($){function catFilter(header,list){var form =$('<form>').attr({'class':'filterform','action':'#'}).css({'position':'absolute','top':'3vmin'}),input=$('<input>').attr({'class':'filterinput','type':'text','placeholder':'カテゴリー検索'});$(form).append(input).appendTo(header);$(header).css({'padding-top':'3.5vmin'});$(input).change(function(){var filter=$(this).val();if(filter){$(list).find('label:not(:contains('+filter+'))').parent().hide();$(list).find('label:contains('+filter+')').parent().show();}else{$(list).find('li').show();}return false;}).keyup(function(){$(this).change();});}$(function(){catFilter($('#category-all'),$('#categorychecklist'));});});
    jQuery(function($){var count=100;jQuery('#postexcerpt .hndle span').after('<span style=\"padding-left:1em; color:#888; font-size:12px;\">現在の文字数： <span id=\"excerpt-count\"></span> / '+ count +'</span>');jQuery('#excerpt-count').text($('#excerpt').val().length);jQuery('#excerpt').keyup(function(){$('#excerpt-count').text($('#excerpt').val().length);if($(this).val().length > count){$(this).val($(this).val().substr(0,count));}});jQuery('#postexcerpt .inside p').html('※ここには <strong>"'+ count +'文字"</strong> 以上は入力できません。').css('color','#888');});
    jQuery(document).ready(function($){if('post' == $('#post_type').val() || 'page' == $('#post_type').val()){$("#post").submit(function(e){if('' == $('#title').val()){alert('タイトルを入力してください！');$('.spinner').hide();$('#publish').removeClass('button-primary-disabled');$('#title').focus();return false;}});}});
</script>
<?php }
add_action('admin_head-post-new.php','add_post_edit_featuer');
add_action('admin_head-post.php','add_post_edit_featuer');

function appthemes_add_quicktags(){
    if(wp_script_is('quicktags')){ ?>
    <script type="text/javascript">
		QTags.addButton('qt-p','p','<p>','</p>');
        QTags.addButton('qt-h1','h1','<h1>','</h1>');
        QTags.addButton('qt-h2','h2','<h2>','</h2>');
		QTags.addButton('qt-h3','h3','<h3>','</h3>');
		QTags.addButton('qt-h4','h4','<h4>','</h4>');
        QTags.addButton('qt-h5','h5','<h5>','</h5>');
        QTags.addButton('qt-h6','h6','<h6>','</h6>');
        QTags.addButton('qt-table','テーブル','<table>','</table>');
        QTags.addButton('qt-tbody','テーブル(ボディ)','    <tbody>','</tbody>');
        QTags.addButton('qt-tr','テーブル(ライン)','   <tr>','</tr>');
        QTags.addButton('qt-th','テーブル(ヘッド)','   <th>','</th>');
        QTags.addButton('qt-td','テーブル(項目)','    <td>','</td>');
		QTags.addButton('qt-marker','マーカー','<span class="marker">','</span>');
		QTags.addButton('qt-information','情報','<div class="information">','</div>');
		QTags.addButton('qt-question','疑問','<div class="question">','</div>');
        QTags.addButton('qt-customcss','カスタムCSS','[customcss style=',']');
		QTags.addButton('qt-htmlencode','HTMLエンコード','[html_encode]','[/html_encode]');
        QTags.addButton('qt-googlekeyword','Googleキーワード','[google_keyword keyword= date= geo= height= width=',']');
		QTags.addButton('qt-embedly','embedly','[embedly url=',']');
		QTags.addButton('qt-hatenablogcard','はてなブログカード','[hatenaBlogcard url=',']');
        QTags.addButton('qt-ogpblogcard','OGPブログカード','[OGPBlogcard url=',']');
        QTags.addButton('qt-searchbox','検索風表示','[SearchBox txt=',']');
    </script>
<?php }}
add_action('admin_print_footer_scripts','appthemes_add_quicktags');

function add_posts_columns($columns){
    $columns['thumbnail']='サムネイル';
    $columns['postid']='ID';
    $columns['count']='文字数';
    return $columns;
}
function add_posts_columns_row($column_name,$post_id){
    if('thumbnail'===$column_name):
        $thumb = get_the_post_thumbnail($post_id);
        echo ($thumb) ? '○' : '×';
    elseif('postid'===$column_name):
        echo $post_id;
    elseif('count'===$column_name):
        $count = mb_strlen(strip_tags(get_post_field('post_content',$post_id)));
        echo $count;
    endif;
}
add_filter('manage_posts_columns','add_posts_columns');
add_action('manage_posts_custom_column','add_posts_columns_row',10,2);
/*
    設定項目追加
1.カスタマイザー
2.ユーザープロフィール欄
*/
add_action('customize_register','theme_customize');
function theme_customize($wp_customize){
    $wp_customize->add_section('sns_section',array('title'=>'独自設定','description'=>'このテーマの独自設定','priority'=>1,));
    $wp_customize->add_setting('jetpack_css_load',array('type'=>'option','sanitize_callback'=>'sanitize_checkbox',));
    $wp_customize->add_control('jetpack_css_load',array('section'=>'sns_section', 'settings'=>'jetpack_css_load','label'=>'jetpack.cssを読み込まない','type'=>'checkbox'));
	$wp_customize->add_setting('referrer_setting',array('default'=>'value1','type'=>'theme_mod',));
	$wp_customize->add_control('referrer_setting',array('settings'=>'referrer_setting','label'=>'メタタグのリファラーの値','section'=>'sns_section','type'=>'radio','choices'=>array('value1'=>'default','value2'=>'unsafe-url','value3'=>'origin-when-crossorigin','value4'=>'none-when-downgrade','value5'=>'none',),));
    $wp_customize->add_setting('GoogleChrome_URLbar',array('default'=>'#ffcc00','type'=>'option','sanitize_callback' => 'sanitize_text_field',));
    $wp_customize->add_control('GoogleChrome_URLbar',array('section'=>'sns_section','settings'=>'GoogleChrome_URLbar','label'=>'モバイル版GoogleChrome向けURLバーの色コードを指定する','type'=>'text'));
    $wp_customize->add_setting('Google_Webmaster',array('type'=>'option','sanitize_callback' => 'sanitize_text_field',));
    $wp_customize->add_control('Google_Webmaster',array('section'=>'sns_section','settings'=>'Google_Webmaster','label'=>'サイトのGoogleSerchconsole向けコードを指定する','type'=>'text'));
    $wp_customize->add_setting('Bing_Webmaster',array('type'=>'option','sanitize_callback' => 'sanitize_text_field',));
    $wp_customize->add_control('Bing_Webmaster',array('section'=>'sns_section','settings'=>'Bing_Webmaster','label'=>'サイトのBingWebmaster向けコードを指定する','type'=>'text'));
    $wp_customize->add_setting('Analytics',array('type'=>'option','sanitize_callback' => 'sanitize_text_field',));
    $wp_customize->add_control('Analytics',array('section'=>'sns_section','settings'=>'Analytics','label'=>'サイトのアナリティクスコードを指定する','type'=>'textarea'));
    $wp_customize->add_setting('Twitter_URL',array('type'=>'option','sanitize_callback' => 'sanitize_text_field',));
    $wp_customize->add_control('Twitter_URL',array('section'=>'sns_section','settings'=>'Twitter_URL','label'=>'サイト全体のTwitterアカウントへを指定する','type'=>'text'));
    $wp_customize->add_setting('facebook_appid',array('type'=>'option','sanitize_callback' => 'sanitize_text_field',));
    $wp_customize->add_control('facebook_appid',array('section'=>'sns_section','settings'=>'facebook_appid','label'=>'facebookのappidを表示する','type'=>'text'));
	$wp_customize->add_setting('Disqus_ID',array('type'=>'option','sanitize_callback' => 'sanitize_text_field',));
    $wp_customize->add_control('Disqus_ID',array('section'=>'sns_section','settings'=>'Disqus_ID','label'=>'DisqusのIDを入力する','type'=>'text'));
}
function sanitize_checkbox($input){if($input===true){return true;}else{return false;}}
function how_referrer_setting(){
    $array = array('default'=>'value1','unsafe-url'=>'value2','origin-when-crossorigin'=>'value3','none-when-downgrade'=>'value4','none'=>'value5',);
    $value = get_theme_mod('referrer_setting','value1');
    $result = array_search($value,$array);
    if($result===null){
        return'default';
    }else{
        return $result;
    }
}
if(get_option('jetpack_css_load')){add_filter('jetpack_implode_frontend_css','__return_false');}

function my_new_contactmethods($contactmethods){
    $contactmethods['TEL']='TEL';
    $contactmethods['FAX']='FAX';
    $contactmethods['Addres']='住所';
    $contactmethods['Graveter']='Graveter';
    $contactmethods['LINE']='LINE';
    $contactmethods['YO']='YO!';
    $contactmethods['twitter']='Twitter';
    $contactmethods['facebook']='Facebook';
    $contactmethods['Linkedin']='Linkedin';
    $contactmethods['Googleplus']='Google+';
    $contactmethods['Github']='Github';
    $contactmethods['Bitbucket']='Bitbucket';
    $contactmethods['Codepen']='Codepen';
    $contactmethods['JSbuddle']='JSbuddle';
    $contactmethods['Quita']='Quita';
    $contactmethods['xda']='xda';
    $contactmethods['hatenablog']='はてなブログ';
    $contactmethods['hatenadiary']='はてなダイアリー';
    $contactmethods['hatebu']='はてなブックマーク';
    $contactmethods['Pocket']='Pocket';
    $contactmethods['ameba']='アメーバ';
    $contactmethods['fc2']='fc2';
    $contactmethods['mixi']='mixi';
    $contactmethods['Instagram']='Instagram';
    $contactmethods['Pinterest']='Pinterest';
    $contactmethods['Flickr']='Flickr';
    $contactmethods['FourSquare']='FourSquare';
    $contactmethods['Swarm']='Swarm';
    $contactmethods['Steam']='Steam';
    $contactmethods['XboxLive']='XboxLive';
    $contactmethods['PSN']='PSN';
    $contactmethods['NINTENDOaccount']='ニンテンドーアカウント';
    $contactmethods['NINTENDONetworkID']='ニンテンドーネットワークID';
    $contactmethods['friendcode']='フレンドコード';
    $contactmethods['UPlay']='UPlay';
    $contactmethods['EAOrigin']='EAOrigin';
    $contactmethods['SQUAREENIXMembers']='SQUAREENIXMembers';
    $contactmethods['BANDAINAMCOID']='BANDAINAMCOID';
    $contactmethods['SEGAID']='SEGAID';
    $contactmethods['vine']='vine';
    $contactmethods['vimeo']='vimeo';
    $contactmethods['YouTube']='YouTube';
    $contactmethods['USTREAM']='USTREAM';
    $contactmethods['Twitch']='Twitch';
    $contactmethods['niconico']='niconico';
    $contactmethods['Skype']='Skype';
    $contactmethods['twitcasting']='ツイキャス';
    $contactmethods['MixCannel']='MixChannel';
    $contactmethods['Slideshare']='Slideshare';
    $contactmethods['Medium']='Medium';
    $contactmethods['note']='note';
    $contactmethods['Pxiv']='Pxiv';
    $contactmethods['Tumblr']='Tumblr';
    $contactmethods['Blogger']='Blogger';
    $contactmethods['livedoor']='livedoor';
    $contactmethods['wordpress.com']='wordpress.com';
    $contactmethods['wordpress.org']='wordpress.org';
    $contactmethods['Adsense']='アドセンス';
    $contactmethods['A8.net']='A8.net';
    $contactmethods['GoogleAdsense']='GoogleAdsense';
    $contactmethods['AmazonAdsense']='Amazonアフィリエイト';
    $contactmethods['Amazonlist']='Amazonの欲しいものリスト';
    $contactmethods['Yahooaction']='Yahoo!オークション';
    $contactmethods['Rakuma']='ラクマ';
    $contactmethods['Merukari']='メルカリ';
    $contactmethods['Bitcoin']='Bitcoin';
    return $contactmethods;
}
add_filter('user_contactmethods','my_new_contactmethods',10,1);
