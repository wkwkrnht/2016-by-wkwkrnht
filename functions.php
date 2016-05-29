<?php
//theme-setup(nav&wiwidgeterea&editor-style&addclassinbody)
function wkwkrnht_setup(){
    if(!isset($content_width)){$content_width=3840;}
    add_theme_support('post-formats',array('aside','gallery','quote','image','link','status','video','audio','chat'));
    add_theme_support('post-thumbnails');
    add_theme_support('custom-background');
    add_theme_support('custom-logo',array('height'=>248,'width'=>248,'flex-height'=>true,));
    add_theme_support('custom-header');
    add_theme_support('title-tag');
    add_theme_support('automatic-feed-links');
    add_theme_support('html5',array('comment-list','comment-form','search-form','gallery','caption'));
    register_nav_menu('main','main-menu');
    register_nav_menu('social','social-menu');
}
add_action('after_setup_theme','wkwkrnht_setup');
add_action('admin_init','origin_editor_styles');
function orign_editor_styles(){
    add_editor_style('css/custom-editor-style.css');
}
function theme_slug_widgets_init(){
    register_sidebar(array('name'=>'Main Sidebar','id'=>'floatmenu','before_widget'=>'<li id="%1$s" class="widget %2$s">','after_widget'=>'</li>','before_title'=>'<h2 class="widget-title">','after_title' =>'</h2>',));
}
add_action('widgets_init','wkwkrnht_sidebar_widgets_init');
remove_action('wp_head','print_emoji_detection_script',7);
remove_action('wp_print_styles','print_emoji_styles');
add_filter('body_class','add_body_class');
function add_body_class($classes){if(!is_singular()):$classes[] = 'card-list';return $classes;endif;}
add_action('wp_enqueue_scripts','theme_enqueue_scripts_styles');
function theme_enqueue_scripts_styles(){
    wp_deregister_script('jquery');
    wp_register_script('jquery','http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js');
    wp_enqueue_script('jquery','http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js',array(),null,false);
}
//metainfo
function get_meta_description_from_category(){
    $cate_desc = trim(strip_tags(category_description()));
    if($cate_desc){return $cate_desc;}
    $cate_desc = '「' . single_cat_title('',false) . '」の記事一覧です。' . get_bloginfo('description');
    return $cate_desc;
}
function get_meta_keyword_from_category(){return single_cat_title('',false) . ',カテゴリー,ブログ,記事一覧';}
function meta_description(){
    if(is_home()):
        bloginfo('description');
    elseif(is_singular()&&has_excerpt()):
        the_execrpt();
    elseif(is_category()):
        echo get_meta_description_from_category();
    else:
        bloginfo('description');
    endif;
}
function meta_keyword(){
    if(is_home()):
        bloginfo('description');
    elseif(is_singular()&&has_excerpt()):
        the_tags();
    elseif(is_category()):
        echo get_meta_keyword_from_category();
    else:
        bloginfo('description');
    endif;
}
//1st-card
function wkwkrnht_special_card(){
    $blogname=get_bloginfo('name');
    echo'<div class="card info-card">' . the_custom_logo() . '<h1 class="site-title">';
        if(is_home()):
            echo $blogname . '</h1><p class="site-description">' . get_bloginfo('description') . '</p><br><span class="copyright">&copy;2015&nbsp;' . $blogname;
        elseif(is_category()):
            echo'「' . single_cat_title('',false) . '」の記事一覧｜' . $blogname . '</h1><br><p class="site-description">' . category_description() . '</p><br><span class="copyright">&copy;2015&nbsp;' . $blogname;
        else:
            echo bloginfo('name') . '</h1><p class="site-description">' . get_bloginfo('description') . '</p><br><span class="copyright">&copy;2015&nbsp;' . $blogname;
        endif;
    echo'</span></div>';
}
