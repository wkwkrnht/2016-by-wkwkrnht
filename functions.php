<?php
/*
    基本情報読み込み
1.セットアップ
    ●コンテント幅指定
    ●機能サポート宣言
    ●メニューエリア追加
2.エディタースタイル追加
3.ウィジェット周り
    ●ウィジェットエリア追加
    ●ウィジェット追加
    ●メタウィジェットカスタマイズ
        ●WordPressへのリンクを削除
        ●リンク項目の追加
4.不要なjs削除&jQueryのCDN化
5.body_classにクラス追加
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

add_action('admin_init',function(){add_editor_style('inc/custom-editor-style.css');});

add_action('widgets_init','wkwkrnht_widgets_init');
function wkwkrnht_widgets_init(){
    register_sidebar(array('name'=>'Main Area','id'=>'floatmenu','before_widget'=>'<li id="%1$s" class="widget %2$s">','after_widget'=>'</li>','before_title'=>'<h2 class="widget-title">','after_title' =>'</h2>',));
    register_sidebar(array('name'=>'Singular Footer','id'=>'singularfooter','before_widget'=>'<li id="%1$s" class="widget %2$s">','after_widget'=>'</li>','before_title'=>'<h2 class="widget-title">','after_title' =>'</h2>',));
    register_sidebar(array('name'=>'Left Bar','id'=>'leftbar','before_widget'=>'<li id="%1$s" class="widget %2$s">','after_widget'=>'</li>','before_title'=>'<h2 class="widget-title">','after_title' =>'</h2>',));
    register_sidebar(array('name'=>'Right Bar','id'=>'rightbar','before_widget'=>'<li id="%1$s" class="widget %2$s">','after_widget'=>'</li>','before_title'=>'<h2 class="widget-title">','after_title' =>'</h2>',));
    register_widget('wkwkrnht_manth_archive');
    register_widget('related_posts');
    register_widget('post_nav');
    register_widget('post_comment');
    register_widget('disqus_widget');
}

class wkwkrnht_manth_archive extends WP_Widget{
    function __construct(){parent::__construct('wkwkrnht_manth_archive','月別アーカイブ(短縮版)',array());}
    public function widget($args,$instance){echo $args['before_widget'];include(get_template_directory() . '/widget/manth-arcive.php');echo $args['after_widget'];}
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
    public function widget($args,$instance){
        echo
            $args['before_widget'];?>
            <div id="disqus_thread">
            </div>
            <script>(function(){
                var d=document,s=d.createElement('script');s.src='//<?php echo get_option('Disqus_ID');?>.disqus.com/embed.js';s.setAttribute('data-timestamp',+new Date());(d.head||d.body).appendChild(s);
            })();</script>
            <noscript><a href="https://disqus.com/?ref_noscript" rel="nofollow">Please enable JavaScript to view the comments powered by Disqus.</a></noscript>
            <?php echo $args['after_widget'];
    }
}

add_filter('widget_meta_poweredby','__return_empty_string');
add_action('wp_meta','my_custom_meta_widget_menu');
function my_custom_meta_widget_menu(){
?>
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

add_filter('body_class','add_body_class');
function add_body_class($classes){if(is_singular()===true):$classes[] = 'singular';else:$classes[] = 'card-list';endif;return $classes;}

/*
    metainfo
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

//予定地
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

function yes_image($size){$img=wp_get_attachment_image_src(get_post_thumbnail_id(),$size);echo $img[0];}
function no_image(){echo get_template_directory_uri() . '/inc/no-img.png';}
function meta_image(){
    if(is_singular()===true&&has_post_thumbnail()===true):
        $size=array(248,248);
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
    oEmbed
1.API対応追加
2.OGP版ブログカード
*/
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
                <div class="ogp-blogcard-img" style="background:#ffcc00 url(' . $img . ') ;"></div>
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
/*
    独自要素&独自装飾
1.情報カード
    ●site name&site description
    ●cat name&cat description
    ●serach keyword&result
2.ページネーション
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
/*
    コンテンツ中装飾
1.検索結果をマーカー風にハイライト
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
プロフィール欄追加(the_author_meta('hogehoge')で表示)
*/
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

/*
    カスタマイザー項目追加
1.twitterアカウント(サイト用)
2.disqus
3.Googleウェブマスターツール
4.Bingウェブマスターツール
5.アナリティクス
*/
add_action('customize_register','theme_customize');
function theme_customize($wp_customize){
    $wp_customize->add_section('sns_section',array('title'=>'独自設定','description'=>'このテーマの独自設定','priority'=>1,));
    $wp_customize->add_setting('jetpack_css_load',array('type'=>'option',));
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

/*
コメントウィジェット
*/
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
