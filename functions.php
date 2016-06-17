<?php
/*
    theme-setup
0.SET theme support
1.SET nav area
2.SET wiwidget area
3.ADD editor-style
4.ADD class in body
5.jQuery load from Google
*/
function wkwkrnht_setup(){
    if(!isset($content_width)):$content_width=1080;endif;
    add_theme_support('title-tag');
    add_theme_support('automatic-feed-links');
    add_theme_support('html5',array('comment-list','comment-form','search-form','gallery','caption'));
    add_theme_support('post-formats',array('aside','gallery','quote','image','link','status','video','audio','chat'));
    add_theme_support('post-thumbnails');
    add_theme_support('custom-background');
    add_theme_support('custom-logo',array('height'=>248,'width'=>248,'flex-height'=>true,));
    register_nav_menu('main','main');
    register_nav_menu('social','social');
}
add_action('after_setup_theme','wkwkrnht_setup');
add_action('admin_init',function(){add_editor_style('css/custom-editor-style.css');});
add_action('widgets_init','wkwkrnht_sidebar_widgets_init');
function wkwkrnht_sidebar_widgets_init(){
    register_sidebar(array('name'=>'Main Area','id'=>'floatmenu','before_widget'=>'<li id="%1$s" class="widget %2$s">','after_widget'=>'</li>','before_title'=>'<h2 class="widget-title">','after_title' =>'</h2>',));
}
remove_action('wp_head','print_emoji_detection_script',7);
remove_action('wp_print_styles','print_emoji_styles');
add_action('wp_enqueue_scripts','theme_enqueue_scripts_styles');
function theme_enqueue_scripts_styles(){
    wp_deregister_script('jquery');
    wp_register_script('jquery','');
    wp_enqueue_script('jquery',false,array(),null,true);
}
add_filter('body_class','add_body_class');
function add_body_class($classes){if(is_singular()):$classes[] = 'singular';else:$classes[] = 'card-list';endif;return $classes;}
/*
    metainfo
1.アクセス中のURL取得
2.カスタムロゴ取得
3.記事ページのメタ設定
    ●キーワード
    ●アイキャッチ
4.更新日と公開日の比較
5.カテゴリーのキーワード化
6.カテゴリーページのメタ設定
    ●ディスプリクション
    ●キーワード
7.Alt属性がないIMGタグにalt=""を追加する
*/
function get_meta_url(){return (empty($_SERVER['HTTPS']) ? 'http://' : 'https://') . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];}
function get_mtime($format){$mtime=get_the_modified_time('Ymd');$ptime=get_the_time('Ymd');if($ptime > $mtime):return get_the_time($format);elseif($ptime===$mtime):return null;else:return get_the_modified_time($format);endif;}
function get_meta_description_from_category(){
    $cate_desc=trim(strip_tags(category_description()));
    if($cate_desc){return $cate_desc;}
    $cate_desc='「' . single_cat_title('',false) . '」の記事一覧です。' . get_bloginfo('description');
    return $cate_desc;
}
function get_meta_keyword_from_category(){return single_cat_title('',false) . ',カテゴリー,ブログ,記事一覧';}
function meta_description(){
    if(is_home()):
        bloginfo('description');
    elseif(is_singular()&&has_excerpt()):
        the_excerpt();
    elseif(is_category()):
        echo get_meta_description_from_category();
    else:
        bloginfo('description');
    endif;
}
function meta_image(){
    $m='';$pattern='';
    if(is_singular()&&has_post_thumbnail()):
        $pattern=get_post_thumbnail_id($post->ID);
        echo wp_get_attachment_url($pattern);
    else:
        $pattern=get_custom_logo();
        preg_match ($pattern, '/src=(.*)/', $m);
        echo $m;
    endif;
}
add_filter('the_content',function($content){return preg_replace('/<img((?![^>]*alt=)[^>]*)>/i', '<img alt=""${1}>', $content);});
/*
    Wordpressデフォルトのnext/prev出力動作を停止
*/
remove_action('wp_head','adjacent_posts_rel_link_wp_head');

/*
    ページネーション（一覧ページ）と分割ページ（マルチページ）タグを出力
*/
function rel_next_prev_link_tags(){
    if(is_single() || is_page()){
        //1ページを複数に分けた分割ページ（マルチページ）でのタグ出力
        global $wp_query;
        $multipage = check_multi_page();
        if($multipage[0] > 1){
            $prev = generate_multipage_url('prev');
            $next = generate_multipage_url('next');
            if($prev){echo '<link rel="prev" href="'.$prev.'" />'.PHP_EOL;}
            if($next){echo '<link rel="next" href="'.$next.'" />'.PHP_EOL;}
        }
    }else{
        //トップページやカテゴリページなどのページネーションでのタグ出力
        global $paged;
        if(get_previous_posts_link()){echo '<link rel="prev" href="'.get_pagenum_link( $paged - 1 ).'" />'.PHP_EOL;}
        if(get_next_posts_link()){echo '<link rel="next" href="'.get_pagenum_link( $paged + 1 ).'" />'.PHP_EOL;}
    }
}
//適切なページのヘッダーにnext/prevを表示
add_action( 'wp_head','rel_next_prev_link_tags');

//分割ページ（マルチページ）URLの取得
//参考ページ：http://seophp.net/wordpress-fix-rel-prev-and-rel-next-without-plugin/
function generate_multipage_url($rel='prev') {
    global $post;
    $url = '';
    $multipage = check_multi_page();
    if($multipage[0] > 1){
        $numpages = $multipage[0];
        $page = $multipage[1] == 0 ? 1 : $multipage[1];
        $i = 'prev' == $rel? $page - 1: $page + 1;
        if($i && $i > 0 && $i <= $numpages){
            if(1 == $i){
                $url = get_permalink();
            }elseif('' == get_option('permalink_structure') || in_array($post->post_status,array('draft','pending'))){
                $url = add_query_arg('page',$i,get_permalink());
            }else{
                $url = trailingslashit(get_permalink()).user_trailingslashit($i,'single_paged');
            }
        }
    }
    return $url;
}

//分割ページ（マルチページ）かチェックする
function check_multi_page(){
  $num_pages    = substr_count($GLOBALS['post']->post_content,'<!--nextpage-->') + 1;
  $current_page = get_query_var('page');
  return array($num_pages,$current_page);
}
/*
    oEmbed
1.API対応追加
2.OGP版
*/
wp_oembed_add_provider('http://*.hatenablog.com/*', 'http://hatenablog.com/oembed');
wp_oembed_add_provider('http://codepen.io/*/pen/*','http://codepen.io/api/oembed');

function make_ogp_blog_card($url){
    require_once('parts/OpenGraph.php');
	$graph = OpenGraph::fetch($url);
    $img = $graph->image;
    $url = $graph->url;
    $title = $graph->title;
    $site_name = $graph->site_name;
    $description = $graph->description;
    $description = mb_substr($description,0,30);
    //$description = 'description';
    $html  = '<div class="main"><img src="' . $img . '" alt="' . $title . '`s img" class="img">';
    $html .= '<div class="txt"><h2 class="title">' . $title . '</h2>';
    $html .= '<p class="description">' . $description . '</p></div></div>';
    $html .= '<div class="sub"><span class="site-name">' . $site_name . '</span><span><i class="fa fa-share-alt"></i></span></div>';
    return '<div class="ogp-blogcard">' . $html . '</div>';
}
/*
    1st card
1.site name&site description
2.cat name&cat description
3.serach keyword&result
*/
function wkwkrnht_special_card(){
    $blogname=get_bloginfo('name');$sitedescription=get_bloginfo('description');
    global $wp_query;$serachresult=$wp_query->found_posts;wp_reset_query();
    echo'<div class="card info-card"><h1 class="site-title">';
        if(is_home()):
            echo $blogname . '</h1><p class="site-description">' . $sitedescription . '</p>';
        elseif(is_category()):
            echo'「' . single_cat_title('',false) . '」の記事一覧｜' . $blogname . '</h1><br><p class="site-description">' . category_description() . '</p>';
        elseif(is_search()):
            echo'「' . get_search_query() . '」の検索結果｜' . $blogname . '</h1><br><p class="site-description">' . $serachresult . ' 件 / ' . $wp_query->max_num_pages . ' ページ</p>';
        else:
            echo $blogname . '</h1><p class="site-description">' . $sitedescription . '</p>';
        endif;
    echo'<br><span class="copyright">&copy;2015&nbsp;' . $blogname . '</span></div>';
}
/*
    page-nation
1.
2.
3.表示部分
    ●外側
    ●先頭へ
    ●1つ戻る
    ●番号つきページ送りボタン
    ●1つ進む
    ●最後尾へ
*/
function pagenation($pages='',$range=3){
    $showitems=($range * 2)+1;
    global $paged;
    if(empty($paged)){$paged=1;}
    if($pages==''){global $wp_query;$pages=$wp_query->max_num_pages;if(!$pages){$pages=1;}}
    if(1!=$pages){
        echo'<ul class="pagenation">';
        if($paged > 2 && $paged > $range + 1 && $showitems < $pages){echo'<li><a href="'.get_pagenum_link(1).'"><i class="fa fa-angle-double-left" aria-hidden="true"></i></a</li>>';}
        if($paged > 1 && $showitems < $pages){echo'<li><a href="'.get_pagenum_link($paged - 1).'"><i class="fa fa-angle-left" aria-hidden="true"></i></a></li>';}
        for($i=1;$i<=$pages;$i++){if(1!=$pages&&(!($i>=$paged+$range+1||$i<=$paged-$range-1)||$pages<=$showitems)){echo ($paged==$i)? '<li class="current">'.$i.'</li>' : '<li><a href="'.get_pagenum_link($i).'" class="inactive">'.$i.'</a></li>';}}
        if($paged < $pages && $showitems < $pages){echo'<li><a href="'.get_pagenum_link($paged + 1).'"><i class="fa fa-angle-right" aria-hidden="true"></i></a></li>';}
        if($paged < $pages - 1 && $paged + $range - 1 < $pages && $showitems < $pages){echo'<li><a href="'.get_pagenum_link($pages).'"><i class="fa fa-angle-double-right" aria-hidden="true"></i></a></li>';}
        echo'</ul>';
    }
}
/*
    コンテンツ中装飾
1.マーカー風にハイライト
2.@hogehogeをツイッターにリンク
*/
function wps_highlight_results($text){if(is_search()){$sr=get_query_var('s');$keys=explode(" ",$sr);$text=preg_replace('/('.implode('|',$keys) .')/iu','<span class="marker">'.$sr.'</span>',$text);}return $text;}
function twtreplace($content){$twtreplace=preg_replace('/([^a-zA-Z0-9-_&])@([0-9a-zA-Z_]+)/',"$1<a href=\"http://twitter.com/$2\" target=\"_blank\" rel=\"nofollow\">@$2</a>",$content);return $twtreplace;}
add_filter('the_title','wps_highlight_results');
add_filter('the_content','wps_highlight_results');
add_filter('the_content','twtreplace');
add_filter('comment_text','twtreplace');
/*
    ショートコード
1.カスタムCSS
2.HTMLエンコード
3.embed.ly版ブログカード
4.はてな版ブログカードS
*/
function style_into_article($atts){extract(shortcode_atts(array('style'=>'',),$atts));return'<pre class="wpcss" style="display:none;"><code>' . $style . '</code></pre>';}
function html_encode($args=array(),$content=''){return htmlspecialchars($content,ENT_QUOTES,'UTF-8');}
function url_to_embedly($atts){extract(shortcode_atts(array('url'=>'',),$atts));$content='<a class="embedly-card" href="' . $url . '"></a><script async="" charset="UTF-8" src="//cdn.embedly.com/widgets/platform.js"></script>';return $content;}
function url_to_hatenaBlogcard($atts){extract(shortcode_atts(array('url'=>'',),$atts));$content='<iframe class="hatenablogcard" src="http://hatenablog.com/embed?url=' . $url . '" frameborder="0" scrolling="no"></iframe>';return $content;}
function url_to_OGPBlogcard($atts){extract(shortcode_atts(array('url'=>'',),$atts));return make_ogp_blog_card($url);}
add_shortcode('customcss','style_into_article');
add_shortcode('html_encode','html_encode');
add_shortcode('embedly','url_to_embedly');
add_shortcode('hatenaBlogcard','url_to_hatenaBlogcard');
add_shortcode('OGPBlogcard','url_to_OGPBlogcard');
/*
    投稿画面カスタマイズ
1.カテゴリーフィルター
2.抜粋制限
3.クイックタグ追加
*/
function post_filter_categories(){ ?>
<script type="text/javascript">
	jQuery(function($){function catFilter(header,list){var form =$('<form>').attr({'class':'filterform','action':'#'}).css({'position':'absolute','top':'38px'}),input=$('<input>').attr({'class':'filterinput','type':'text','placeholder':'カテゴリー検索'});$(form).append(input).appendTo(header);$(header).css({'padding-top':'42px'});$(input).change(function(){var filter=$(this).val();if(filter){$(list).find('label:not(:contains('+filter+'))').parent().hide();$(list).find('label:contains('+filter+')').parent().show();}else{$(list).find('li').show();}return false;}).keyup(function(){$(this).change();});}$(function(){catFilter($('#category-all'),$('#categorychecklist'));});});
</script>
<?php }
function appthemes_add_quicktags(){
    if(wp_script_is('quicktags')){ ?>
    <script type="text/javascript">
		QTags.addButton('qt-p','p','<p>','</p>');
		QTags.addButton('qt-h2','h2','<h2>','</h2>');
		QTags.addButton('qt-h3','h3','<h3>','</h3>');
		QTags.addButton('qt-h4','h4','<h4>','</h4>');
		QTags.addButton('qt-marker','マーカー','<span class="marker">','</span>');
		QTags.addButton('qt-information','情報','<div class="information">','</div>');
		QTags.addButton('qt-question','疑問','<div class="question">','</div>');
		QTags.addButton('qt-customcss','カスタムCSS','[customcss style=',']');
		QTags.addButton('qt-htmlencode','HTMLエンコード','[html_encode]','{/html_encode]');
		QTags.addButton('qt-embedly','embedly','[embedly url=',']');
		QTags.addButton('qt-hatenablogcard','はてなブログカード','[hatenaBlogcard url=',']');
        QTags.addButton('qt-ogpblogcard','OGPブログカード','[OGPBlogcard url=',']');
    </script>
<?php }}
add_action('admin_head-post-new.php','post_filter_categories');
add_action('admin_head-post.php','post_filter_categories');
add_action('admin_print_footer_scripts','appthemes_add_quicktags');
//プロフィール欄追加(the_author_meta('hogehoe')で表示)
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
  $contactmethods['Rakutenaction']='楽天オークション';
  $contactmethods['Rakuma']='ラクマ';
  $contactmethods['Merukari']='メルカリ';
  $contactmethods['Bitcoin']='Bitcoin';
  return $contactmethods;}
add_filter('user_contactmethods','my_new_contactmethods',10,1);
