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
function orign_editor_styles(){
    add_editor_style('css/custom-editor-style.css');
}
add_action('admin_init','origin_editor_styles');
function theme_slug_widgets_init(){
    register_sidebar(array('name'=>'Main Sidebar','id'=>'floatmenu','before_widget'=>'<li id="%1$s" class="widget %2$s">','after_widget'=>'</li>','before_title'=>'<h2 class="widget-title">','after_title' =>'</h2>',));
}
add_action('widgets_init','wkwkrnht_sidebar_widgets_init');
remove_action('wp_head','print_emoji_detection_script',7);
remove_action('wp_print_styles','print_emoji_styles');
add_filter('body_class','my_class_names');
function my_class_names($classes){if(!is_singular()):$classes[] = 'card-list';return $classes;endif;}
//1st-card
function wkwkrnht_special_card(){
    if(is_home()):
        echo'<div class="card info-card"><h1 class="site-title">NEW THEME!</h1><p class="site-description">hogehogeehugahugaaaaaaa</p><br><span class="copyright">&copy;2015&nbsp;RT狂の思考ログ</span></div>';
    else:
        echo'<div class="card info-card"><h1 class="site-title">NEW THEME!</h1><p class="site-description">hogehogeehugahugaaaaaaa</p><br><span class="copyright">&copy;2015&nbsp;RT狂の思考ログ</span></div>';
    endif;
}
