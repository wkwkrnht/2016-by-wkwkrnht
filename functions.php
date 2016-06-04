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
function add_body_class($classes){if(!is_singular()):$classes[] = 'card-list';endif;return $classes;}
/*
    metainfo
1.カスタムロゴ取得
2.記事ページのメタ設定
    ●キーワード
    ●アイキャッチ
3.更新日と公開日の比較
4.カテゴリーのキーワード化
5.カテゴリーページのメタ設定
    ●ディスプリクション
    ●キーワード

*/
function get_mtime($format){$mtime=get_the_modified_time('Ymd');$ptime=get_the_time('Ymd');if($ptime > $mtime):return get_the_time($format);elseif($ptime===$mtime):return null;else:return get_the_modified_time($format);endif;}
function get_meta_keyword_from_singular(){$tag=get_the_tags();if($tag!==null){return $tag;}}
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
function meta_keyword(){
    if(is_home()):
        bloginfo('description');
    elseif(is_singular()):
        echo get_meta_keyword_from_singular();
    elseif(is_category()):
        echo get_meta_keyword_from_category();
    else:
        bloginfo('description');
    endif;
}
function meta_image(){
    $m='';$pattern='';
    if(is_singular()&&has_post_thumbnail()):
        $pattern=get_the_post_thumbnail();
    else:
        $pattern=get_custom_logo();
    endif;
    preg_match ($pattern, '/src=(.*)/', $m);
    echo $m;
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
