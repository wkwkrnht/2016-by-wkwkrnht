<?php
/*
    setup
1.setup
    ●content width
    ●theme feature
    ●ADD img size
    ●ADD menu area
2.ADD editor-style
3.ADD oEmbed-API
4.widget
    ●ADD area
    ●ADD original widget
    ●do short code
    ●custom
        ●search
        ●meta
            ●REMOVE link for WordPress
            ●ADD link
        ●comment
5.script
6.ADD data-title to element on social-nav
7.ADD class into body_class
*/
function wkwkrnht_setup(){
    if(!isset($content_width)){$content_width=1080;}

    $custom_header = array('default-image'=>'','random-default'=>false,'width'=>1280,'height'=>720,'flex-height'=>true,'flex-width'=>true,'default-text-color'=>'#fff','header-text'=>true,'uploads'=>true,);
    add_theme_support('custom-header',$custom_header);
    add_theme_support('title-tag');
    add_theme_support('automatic-feed-links');
    add_theme_support('html5',array('comment-list','comment-form','search-form','gallery','caption'));
    add_theme_support('post-formats',array('aside','gallery','quote','image','link','status','video','audio','chat'));
    add_theme_support('post-thumbnails');
    add_theme_support('custom-background');
    add_theme_support('custom-logo',array('height'=>512,'width'=>512,'flex-height'=>true,));

    add_image_size('wkwkrnht-eyecatch',1344,576);
    add_image_size('wkwkrnht-thumb',800,800,true);

    register_nav_menu('main','main');
    register_nav_menu('social','social');
}
add_action('after_setup_theme','wkwkrnht_setup');


add_action('admin_init',function(){add_editor_style('inc/editor-style.css');});


add_action('init','wkwkrnht_init');
function wkwkrnht_init(){
    register_taxonomy_for_object_type('category','page');
    register_taxonomy_for_object_type('post_tag','page');
    register_taxonomy_for_object_type('category','attachment');
    register_taxonomy_for_object_type('post_tag','attachment');

    if(get_option('jetpack.css')){add_filter('jetpack_implode_frontend_css','__return_false');}
    if(get_option('jetpack_open_graph')){add_filter('jetpack_enable_open_graph','__return_false',99);}

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
    register_sidebar(array('name'=>'Singular Header','id'=>'singularheader','before_widget'=>'<li id="%1$s" class="widget %2$s">','after_widget'=>'</li>','before_title'=>'<h2 class="widget-title">','after_title' =>'</h2>',));
    register_sidebar(array('name'=>'Singular Footer','id'=>'singularfooter','before_widget'=>'<li id="%1$s" class="widget %2$s">','after_widget'=>'</li>','before_title'=>'<h2 class="widget-title">','after_title' =>'</h2>',));
    register_sidebar(array('name'=>'List Above','id'=>'listabove','before_widget'=>'<li id="%1$s" class="widget %2$s">','after_widget'=>'</li>','before_title'=>'<h2 class="widget-title">','after_title' =>'</h2>',));
    register_sidebar(array('name'=>'List Header','id'=>'listheader','before_widget'=>'<section class="card"><div id="%1$s" class="widget %2$s">','after_widget'=>'</div></section>','before_title'=>'<h2 class="widget-title">','after_title' =>'</h2>',));
    register_sidebar(array('name'=>'List Footer','id'=>'listfooter','before_widget'=>'<section class="card"><div id="%1$s" class="widget %2$s">','after_widget'=>'</div></section>','before_title'=>'<h2 class="widget-title">','after_title' =>'</h2>',));
    register_sidebar(array('name'=>'List Under','id'=>'listunder','before_widget'=>'<li id="%1$s" class="widget %2$s">','after_widget'=>'</li>','before_title'=>'<h2 class="widget-title">','after_title' =>'</h2>',));
    register_sidebar(array('name'=>'404 Page','id'=>'404','before_widget'=>'<section class="card"><div id="%1$s" class="widget %2$s">','after_widget'=>'</div></section>','before_title'=>'<h2 class="widget-title">','after_title' =>'</h2>',));
    register_widget('wkwkrnht_manth_archive');
    register_widget('related_posts');
    register_widget('related_posts_img');
    register_widget('post_nav');
    register_widget('post_nav_hover');
    register_widget('post_comment');
    register_widget('disqus_widget');
    register_widget('duck_duck_go_search_widget');
    register_widget('google_search_widget');
    register_widget('google_search_ads_widget');
    register_widget('google_two_ads_widget');
    register_widget('move_top');
}

class wkwkrnht_categorytag extends WP_Widget{
    function __construct(){parent::__construct('wkwkrnht_categorytag','カテゴリーとタグのみの検索',array());}
    public function widget($args,$instance){echo $args['before_widget'];include(get_template_directory() . '/widget/wkwkrnht-categorytag.php');echo $args['after_widget'];}
    public function form($instance){$title=!empty($instance['title']) ? $instance['title'] : '';?>
		<p>
		<label for="<?php echo $this->get_field_id('title');?>">title</label>
		<input class="widefat" id="<?php echo $this->get_field_id('title');?>" name="<?php echo $this->get_field_name('title');?>" type="text" value="<?php echo esc_attr($title);?>">
		</p>
		<?php
	}
	public function update($new_instance,$old_instance){$instance=array();$instance['title']=(!empty($new_instance['title'])) ? strip_tags($new_instance['title']):'';return $instance;}
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

class move_top extends WP_Widget{
    function __construct(){parent::__construct('move_top','先頭へのナビゲーション',array());}
    public function widget($args,$instance){echo $args['before_widget'];include(get_template_directory() . '/widget/move-top.php');echo $args['after_widget'];}
}

class related_posts extends WP_Widget{
    function __construct(){parent::__construct('related_posts','関連記事',array());}
    public function widget($args,$instance){echo $args['before_widget'];include(get_template_directory() . '/widget/related-post.php');echo $args['after_widget'];}
    public function form($instance){$title=!empty($instance['title']) ? $instance['title'] : '';?>
		<p>
		<label for="<?php echo $this->get_field_id('title');?>">title</label>
		<input class="widefat" id="<?php echo $this->get_field_id('title');?>" name="<?php echo $this->get_field_name('title');?>" type="text" value="<?php echo esc_attr($title);?>">
		</p>
		<?php
	}
	public function update($new_instance,$old_instance){$instance=array();$instance['title']=(!empty($new_instance['title'])) ? strip_tags($new_instance['title']):'';return $instance;}
}

class related_posts_img extends WP_Widget{
    function __construct(){parent::__construct('related_posts_img','関連記事(画像付)',array());}
    public function widget($args,$instance){echo $args['before_widget'];include(get_template_directory() . '/widget/related-post-img.php');echo $args['after_widget'];}
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

class post_nav_hover extends WP_Widget{
    function __construct(){parent::__construct('post_nav_hover','前後への記事のナビゲーション(hover)',array());}
    public function widget($args,$instance){echo $args['before_widget'];include(get_template_directory() . '/widget/post-nav-hover.php');echo $args['after_widget'];}
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
    public function widget($args,$instance){echo $args['before_widget'];include(get_template_directory() . '/widget/disqus.php');echo $args['after_widget'];}
}

class duck_duck_go_search_widget extends WP_Widget{
    function __construct(){parent::__construct('duck_duck_go_search_widget','DuckDuckGo 検索',array());}
    public function widget($args,$instance){echo $args['before_widget'];include(get_template_directory() . '/widget/duckduckgo-search.php');echo $args['after_widget'];}
}

class google_search_widget extends WP_Widget{
    function __construct(){parent::__construct('google_search_widget','Google 検索',array());}
    public function widget($args,$instance){
        extract($instance);
        echo $args['before_widget'] .
        "<script>(function(){var cx = '" . $cx . "';var gcse = document.createElement('script');gcse.type = 'text/javascript';gcse.async = true;gcse.src = 'https://cse.google.com/cse.js?cx=' + cx;var s = document.getElementsByTagName('script')[0];s.parentNode.insertBefore(gcse, s);})();</script>
        <gcse:search></gcse:search>"
        . $args['after_widget'];
    }
    public function form($instance){$cx=!empty($instance['cx']) ? $instance['cx'] : '';?>
		<p>
		<label for="<?php echo $this->get_field_id('cx');?>">cx</label>
		<input class="widefat" id="<?php echo $this->get_field_id('cx');?>" name="<?php echo $this->get_field_name('cx');?>" type="text" value="<?php echo esc_attr($cx);?>">
		</p>
		<?php
	}
	public function update($new_instance,$old_instance){$instance=array();$instance['cx']=(!empty($new_instance['cx'])) ? strip_tags($new_instance['cx']):'';return $instance;}
}

class google_search_ads_widget extends WP_Widget{
    function __construct(){parent::__construct('google_search_ads_widget','Google 検索 with Ads',array());}
    public function widget($args,$instance){
        extract($instance);
        echo $args['before_widget'] .
        '<style>
            #cse-search-box input{display:inline-block;}
            #cse-search-box input[type="text"]{width:70%;margin-right:5%;}
            #cse-search-box input[type="submit"]{width:15%;border-radius:3vmin;color:#03a9f4;background-color:#fff;border:1px solid #03a9f4;}
            #cse-search-box input[type*="submit"]:hover{color:#fff;background-color:#03a9f4;}
        </style>
        <form action="http://www.google.co.jp/cse" id="cse-search-box" target="_blank" role="searc﻿h﻿">
          <div>
            <input type="hidden" name="cx" value="partner-pub-' . $id . '">
            <input type="hidden" name="ie" value="UTF-8">
            <input type="text" name="q" size="55">
            <input type="submit" name="sa" value="検索">
          </div>
        </form>
        <script src="//www.google.co.jp/coop/cse/brand?form=cse-search-box&amp;lang=ja"></script>'
        . $args['after_widget'];
    }
    public function form($instance){$id=!empty($instance['id']) ? $instance['id'] : '';?>
		<p>
		<label for="<?php echo $this->get_field_id('id');?>">id</label>
		<input class="widefat" id="<?php echo $this->get_field_id('id');?>" name="<?php echo $this->get_field_name('id');?>" type="text" value="<?php echo esc_attr($id);?>">
		</p>
		<?php
	}
	public function update($new_instance,$old_instance){$instance=array();$instance['id']=(!empty($new_instance['id'])) ? strip_tags($new_instance['id']):'';return $instance;}
}

class google_two_ads_widget extends WP_Widget{
    function __construct(){parent::__construct('google_two_ads_widge','Google Adsense x2',array());}
    public function widget($args,$instance){
        extract($instance);
        echo $args['before_widget'] .
        '<div id="adsense" itemscope itemtype="https://schema.org/WPAdBlock">
            <p class="ad-label" itemprop="headline name">' . $label . '</p>
            <div id="rectangle" itemprop="about">
                <div class="ad-1">
        			<div class="textwidget">
                        <script async  src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                        <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-' . $client . '" data-ad-slot="' . $slot . '" data-ad-format="rectangle"></ins>
                        <script>(adsbygoogle = window.adsbygoogle || []).push({});</script>
                    </div>
        		</div>
                <div class="ad-2">
        			<div class="textwidget">
                        <script async  src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                        <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-' . $client . '" data-ad-slot="' . $slot . '" data-ad-format="rectangle"></ins>
                        <script>(adsbygoogle = window.adsbygoogle || []).push({});</script>
                    </div>
        		</div>
            </div>
        </div>'
        . $args['after_widget'];
    }
    public function form($instance){
        $label=!empty($instance['label']) ? $instance['label'] : '';?>
    		<p>
    		<label for="<?php echo $this->get_field_id('label');?>">label</label>
    		<input class="widefat" id="<?php echo $this->get_field_id('label');?>" name="<?php echo $this->get_field_name('label');?>" type="text" value="<?php echo esc_attr($label);?>">
    		</p>
		<?php
        $client=!empty($instance['client']) ? $instance['client'] : '';?>
    		<p>
    		<label for="<?php echo $this->get_field_id('client');?>">client</label>
    		<input class="widefat" id="<?php echo $this->get_field_id('client');?>" name="<?php echo $this->get_field_name('client');?>" type="text" value="<?php echo esc_attr($client);?>">
    		</p>
    	<?php
        $slot=!empty($instance['slot']) ? $instance['slot'] : '';?>
    		<p>
    		<label for="<?php echo $this->get_field_id('slot');?>">slot</label>
    		<input class="widefat" id="<?php echo $this->get_field_id('slot');?>" name="<?php echo $this->get_field_name('slot');?>" type="text" value="<?php echo esc_attr($slot);?>">
    		</p>
    	<?php
	}
	public function update($new_instance,$old_instance){
        $instance=array();
        $instance['label']  = (!empty($new_instance['label'])) ? strip_tags($new_instance['label']) : '';
        $instance['client'] = (!empty($new_instance['client'])) ? strip_tags($new_instance['client']) : '';
        $instance['slot']   = (!empty($new_instance['slot'])) ? strip_tags($new_instance['slot']) : '';
        return $instance;
    }
}

add_filter('widget_text','do_shortcode');

function wkwkrnht_search_form($form){
    $tags = get_tags();
    $tag_echo = '';
    foreach($tags as $tag):
        $tag_echo .= '<option value="' . esc_html($tag->slug) . '">' . esc_html($tag->name) . '</option>';
    endforeach;
    $form = '
    <style>
        #search input[type*="text"]{width:98%;}
        #search select{width:40%;margin:1vh 0;margin-right:2%;}
        #search input[type*="submit"]{width:13%;margin:1vh 0;border-radius:3vmin;color:#03a9f4;background-color:#fff;border:1px solid #03a9f4;}
        #search input[type*="submit"]:hover{color:#fff;background-color:#03a9f4;}
    </style>
    <aside id="search" role="searc﻿h﻿">
        <form method="get" action="' . esc_url(home_url()) . '">
            <input name="s" id="s" type="text"><br>'
            . wp_dropdown_categories('depth=0&orderby=name&echo=0&hide_empty=1&show_option_all=カテゴリー')
            . '<select name="tag" id="tag">
                <option value="" selected="selected">タグ</option>'
                 . $tag_echo
            . '</select>
            <button id="submit" type="submit"><i class="fa fa-search" aria-hidden="true"></i><button>
        </form>
    </aside>
    ';
    return $form;
}
add_filter('get_search_form','wkwkrnht_search_form');

add_filter('widget_meta_poweredby','__return_empty_string');
add_action('wp_meta','wkwkrnht_meta_widget');
function wkwkrnht_meta_widget(){ ?>
    <li><a href="<?php echo esc_url(home_url());?>/wp-admin/post-new.php" target="_blank" class="addnew"></a></li>
    <?php if(is_singular()===true):
        $id      = '';
        $homeurl = '';
        if(is_ssl()){$homeurl = substr(home_url(),5);}else{$homeurl = substr(home_url(),4);}
        if(have_posts()):while(have_posts()):the_post();$id = the_ID();endwhile;endif;?>
        <li><?php edit_post_link();?></li>
        <li><a href="<?php echo'wlw' . $homeurl . '/?postid=' . $id;?>" class="wlwedit"></a></li>
    <?php endif;
}

function autoblank($text){
	$return = str_replace('<a','<a target="_blank" rel="noopener"',$text);
	return $return;
}
add_filter('comment_text','autoblank');

add_filter('comments_open','custom_comment_tags');
add_filter('pre_comment_approved','custom_comment_tags');
function custom_comment_tags($data){
	global $allowedtags;
    $allowedtags['style'] = array('class'=>array());
    $allowedtags['code']  = array('class'=>array());
    $allowedtags['pre']   = array('class'=>array());
	return $data;
}


remove_action('wp_head','print_emoji_detection_script',7);
remove_action('wp_print_styles','print_emoji_styles');
function vc_remove_wp_ver_css_js($src){
    if(strpos($src,'ver=')){$src = remove_query_arg('ver',$src);}
    return $src;
}
add_filter('style_loader_src','vc_remove_wp_ver_css_js',9999);
add_filter('script_loader_src','vc_remove_wp_ver_css_js',9999);


add_filter('walker_nav_menu_start_el','title_in_nav_menu',10,4);
function title_in_nav_menu($item_output,$item){
    $title = esc_attr($item->title);
    return preg_replace('/href="(.*?)"/','href="$1" data-title="' . $title . '"',$item_output);
}


add_filter('body_class','add_body_class');
function add_body_class($classes){
    $classes = preg_grep('/\Aauthor\-.+\z/i',$classes,PREG_GREP_INVERT);
    if(is_singular()===true){
        global $post;
        foreach((get_the_category($post->ID)) as $category){$classes[] = 'categoryid-' . $category->cat_ID;}
    }else{
        $classes[] = 'card-list';
    }
    return $classes;
}

/**
 * Adds custom classes to the array of comment classes.
 *
 * @param array $classes Classes for the comment element.
 *
 * @return array
 * @copyright KUCKLU & VisuAlive
 */
function themeslug_comment_class($classes){
	return preg_grep('/\Acomment\-author\-.+\z/i',$classes,PREG_GREP_INVERT);
}
add_action('comment_class','themeslug_comment_class');
/*
    SEO
1.GET URL access now
2.time & year
3.for category page
    ●description
    ●keyword
4.for tag page
    ●keyword
    ●description
5.meta_description()
6.image
    ●yes_image
    ●no_image
    ●meta_image
    ●wkwkrnht_eyecatch
7.check account Twitter
8.optimized multipage for search
9.is_subpage()
*/
function get_meta_url(){return (empty($_SERVER['HTTPS']) ? 'http://' : 'https://') . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];}

function get_mtime($format){$mtime=get_the_modified_time('Ymd');$ptime=get_the_time('Ymd');if($ptime > $mtime || $ptime===$mtime):return get_the_time($format);else:return get_the_modified_time($format);endif;}
function get_first_post_year(){$year = null;query_posts('posts_per_page=1&order=ASC');if(have_posts()):while(have_posts()):the_post();$year = intval(get_the_time('Y'));endwhile;endif;wp_reset_query();return $year;}

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

function get_meta_description(){
    if(is_singular()===true && has_excerpt()===true){
        return get_the_excerpt();
    }elseif(is_category()===true){
        return get_meta_description_from_category();
    }elseif(is_tag()===true){
        return get_meta_description_from_tag();
    }else{
        return get_bloginfo('description');
    }
}
function meta_description(){echo get_meta_description();}

function get_yes_image($size){$img = wp_get_attachment_image_src(get_post_thumbnail_id(),$size);return $img[0];}
function yes_image($size){echo get_yes_image($size);}
function get_no_image(){return get_template_directory_uri() . '/inc/no-img.png';}
function no_image(){echo get_no_image();}
function get_meta_image(){
    if(is_singular()===true && has_post_thumbnail()===true):
        $size = 'thumbnail';
        return get_yes_image($size);
    else:
        $logo = get_theme_mod('custom_logo');
        return wp_get_attachment_url($logo);
    endif;
}
function meta_image(){echo get_meta_image();}
function get_wkwkrnht_eyecatch($size){if(has_post_thumbnail()===true):return get_yes_image($size);else:return get_no_image();endif;}
function wkwkrnht_eyecatch($size){echo get_wkwkrnht_eyecatch($size);}

function get_twitter_acount(){if(get_the_author_meta('twitter')!==''):return get_the_author_meta('twitter');elseif(get_option('Twitter_URL')!==''):return get_option('Twitter_URL');else:return null;endif;}

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
                $url = trailingslashit(get_permalink()) . user_trailingslashit($i,'single_paged');
            }
        endif;
    endif;
    return $url;
}
function check_multi_page(){$num_pages=substr_count($GLOBALS['post']->post_content,'<!--nextpage-->') + 1;$current_page=get_query_var('page');return array($num_pages,$current_page);}

function is_subpage(){global $post;if(is_page() && $post->post_parent){$parentID = $post->post_parent;return $parentID;}else{return false;}}

class add_meta_Nav_Menu extends Walker_Nav_Menu{
    function start_el(&$output,$item,$depth,$args){
        $output .= '<li itemprop="name" class="menu-item">';
        $item_output .= '<a itemprop="url" href="' . esc_attr($item -> url) .'">' . $item -> title . '</a>';
        $output .= apply_filters('walker_nav_menu_start_el',$item_output,$item,$depth,$args);
    }
}
/*
    original
1.special card
2.blogcard by OGP
3.oEmbed content
4.highlight as marker in resut of search
5.content
    ●ADD alt=""
    ●linked @hogehoge to Twitter
    ●ADD rel="noopener"(if it have target="_blank")
*/
function wkwkrnht_special_card(){
    $year            = get_first_post_year();
    $blogname        = get_bloginfo('name');
    $sitedescription = get_bloginfo('description');
    if(is_author()===true):
        $url = dirname(__FILE__) . '/./widget/author-bio.php';
        include_once $url;
    else:
        echo'<header class="card info-card special-card" itemscope itemtype="http://schema.org/WPHeader">';
            if(is_category()===true):
                echo'<h1 class="site-title" itemprop="name headline">「' . single_cat_title('',false) . '」の記事一覧｜' . $blogname . '</h1><br><p class="site-description" itemprop="about">' . category_description() . '</p>';
            elseif(is_tag()===true):
                echo'<h1 class="site-title" itemprop="name headline">「' . single_tag_title('',false) . '」の記事一覧｜' . $blogname . '</h1><br><p class="site-description" itemprop="about">' . tag_description() . '</p>';
            elseif(is_search()===true):
                global $wp_query;
                $serachresult = $wp_query->found_posts;
                wp_reset_query();
                echo'<h1 class="site-title" itemprop="name headline">「' . get_search_query() . '」の検索結果｜' . $blogname . '</h1><br><p class="site-description" itemprop="about">' . $serachresult . ' 件 / ' . $wp_query->max_num_pages . ' ページ</p>';
            elseif(is_404()===true):
                echo'<a href="' . site_url() . '" tabindex="0" itemprop="url"><h1 class="site-title" itemprop="name headline">' . $blogname . '</h1><br><h2>404 Not Found</h2><p class="site-description" itemprop="about">このサイトにはお探しのものはございません。お手数を掛けますが、以下から再度お探しください。</p></a>';
            else:
                echo'<a href="' . site_url() . '" tabindex="0" itemprop="url"><h1 class="site-title" itemprop="name headline">' . $blogname . '</h1><p class="site-description" itemprop="about">' . $sitedescription . '</p></a>';
            endif;
        echo'<br>
            <span class="copyright">&copy;<span itemprop="copyrightYear">' . $year . '</span><span itemprop="copyrightHolder" itemscope itemtype="http://schema.org/Organization"><span itemprop="name">&nbsp;' . $blogname . '</span></span></span>
        </header>';
    endif;
}

function make_ogp_blog_card($url){
    $cache = get_site_transient($url);
    if($cache):
        $content = $cache;
    else:
        require_once('inc/OpenGraph.php');
    	$ogp           = OpenGraph::fetch($url);
        $url           = $ogp->url;
        $share_url     = urlencode($url);
        $id_url        = mb_strtolower(str_replace(':/.','',$url));
        $img           = $ogp->image;
        $title         = $ogp->title;
        $site_name     = $ogp->site_name;
        $description   = str_replace(']]<>',']]＜＞',$ogp->description);
        $tw_acount     = '';
        $get_tw_acount = get_twitter_acount();
        if($get_tw_acount!==null){$tw_acount = '&amp;via=' . $get_tw_acount;}
        $script      = "document.getElementById('ogp-blogcard-share-" . $id_url . "').classList.toggle('none');document.getElementById('ogp-blogcard-share-" . $id_url . "').classList.toggle('block');";
        $content     =
        '<div class="ogp-blogcard">
            <div id="ogp-blogcard-share-' . $id_url . '" class="ogp-blogcard-share none">
                <a href="javascript:void(0)" class="ogp-blogcard-share-close" tabindex="0" onclick="' . $script . '">×</a>
                <ul>
                    <li><a href="https://twitter.com/share?url=' . $share_url . '&amp;text=' . $title . $tw_acount . '" target="_blank" tabindex="0"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    <li><a href="http://www.facebook.com/share.php?u=' . $share_url . '" target="_blank" tabindex="0"><i class="fa fa-thumbs-up" aria-hidden="true"></i></a></li>
                    <li><a href="http://getpocket.com/edit?url=' . $share_url . '&amp;title=' . $title . '" target="_blank" tabindex="0"><i class="fa fa-get-pocket" aria-hidden="true"></i></a></li>
                    <li><a href="http://b.hatena.ne.jp/add?mode=confirm&url=' . $share_url . '&amp;title=' . $title . '" target="_blank" tabindex="0">B!</a></li>
                </ul>
            </div>
            <div class="ogp-blogcard-main">
                <img class="ogp-blogcard-img" src="' . $img . '">
                <div class="ogp-blogcard-info">
                    <a href="' . $url . '" target="_blank" rel="noopener" tabindex="0" title="' . $title . '">
                        <h2 class="ogp-blogcard-title">' . $title . '</h2>
                        <p class="ogp-blogcard-description">' . $description . '</p>
                    </a>
                </div>
            </div>
            <div class="ogp-blogcard-footer">
                <a href="' . $url . '" target="_blank" rel="noopener" class="ogp-blogcard-site-name" tabindex="0">引用元 : ' . $site_name . '</a>
                <a href="javascript:void(0)" class="ogp-blogcard-share-toggle" tabindex="0" onclick="' . $script . '"><i class="fa fa-share-alt"></i></a>
            </div>
        </div>';
        if(strlen($url) > 20){$transitname = wordwrap($url,20);}else{$transitname = $url;}
        set_site_transient($transitname,$content,12 * WEEK_IN_SECONDS);
    endif;
    return $content;
}

function custom_oembed_element($code){
    if(strpos($code,'twitter.com')!==false){
        $html = preg_replace('/ class="(.*?)\d+"/','class="$1" align="center"',$html);
        return $html;
    }
    if(strpos($code,'youtu.be')!==false || strpos($code,'youtube.com')!==false){
        $html = preg_replace("@src=(['\"])?([^'\">\s]*)@","src=$1$2&rel=0",$code);
        $html = preg_replace('/ width="\d+"/','',$html);
        $html = preg_replace('/ height="\d+"/','',$html);
        $html = '<div class="wrap"><div>' . $html . '</div></div>';
        return $html;
    }
    return $code;
}
add_filter('embed_handler_html','custom_oembed_element');
add_filter('embed_oembed_html','custom_oembed_element');

function wkwkrnht_search_results_highlight($text){
    if(is_search()===true){
        $sr   = get_query_var('s');
        $keys = explode(" ",$sr);
        $text = preg_replace('/('.implode('|',$keys) .')/iu','<span class="marker">'.$sr.'</span>',$text);
    }
    return $text;
}
add_filter('the_title','wkwkrnht_search_results_highlight');
add_filter('the_content','wkwkrnht_search_results_highlight');

function wkwkrnht_replace($content){
    $img_replace = preg_replace('/<img((?![^>]*alt=)[^>]*)>/i','<img alt=""${1}>',$content);
    $a_replace   = preg_replace('/<a href="(.*?)" target="_blank"/',"<a href=\"$1\" target=\"_blank\" rel=\"noopener\"",$img_replace);
    $twtreplace  = preg_replace('/([^a-zA-Z0-9-_&])@([0-9a-zA-Z_]+)/',"$1<a href=\"http://twitter.com/$2\" target=\"_blank\" rel=\"noopener nofollow\">@$2</a>",$a_replace);
    return $twtreplace;
}
add_filter('the_content','wkwkrnht_replace');
add_filter('comment_text','wkwkrnht_replace');

add_filter('term_description',function($term){if(empty($term)){return false;}return apply_filters('the_content',$term);});
/*
    shortcode
1.customCSS
2.HTMLencode
3.embed.ly
4.blogcard by hatena
5.blogcard by OGP
6.embed spotify
7.display navi
*/
function style_into_article($atts){extract(shortcode_atts(array('style'=>'','display'=>'',),$atts));$none='';if($display==='none'){$none='class="none"';}return'<pre id="wpcss"' . $none . '><code>' . $style . '</code></pre>';}
function html_encode($args=array(),$content=''){return htmlspecialchars($content,ENT_QUOTES,'UTF-8');}
function url_to_embedly($atts){extract(shortcode_atts(array('url'=>'',),$atts));return'<a class="embedly-card" href="' . $url . '"></a><script async="" charset="UTF-8" src="//cdn.embedly.com/widgets/platform.js"></script>';}
function url_to_hatenaBlogcard($atts){extract(shortcode_atts(array('url'=>'',),$atts));return'<iframe class="hatenablogcard" src="http://hatenablog-parts.com/embed?url=' . $url . '" frameborder="0" scrolling="no"></iframe>';}
function url_to_OGPBlogcard($atts){extract(shortcode_atts(array('url'=>'',),$atts));return make_ogp_blog_card($url);}
function spotify_play_into_article($atts){extract(shortcode_atts(array('url'=>'',),$atts));return'<iframe src="https://embed.spotify.com/?uri=' . $url . '&theme=white" frameborder="0" allowtransparency="true"></iframe>';}
function navigation_in_article($atts){extract(shortcode_atts(array('id'=>'',),$atts));$content = wp_nav_menu(array('menu'=>$id,'echo'=>false));return $content;}
function google_ads_in_article($atts){extract(shortcode_atts(array('client'=>'','slot'=>'',),$atts));return'<div id="adsense"><script>google_ad_client = "pub-' . $client . '";google_ad_slot = "' . $slot . '";google_ad_width = 640;google_ad_height = 480;</script><script src="//pagead2.googlesyndication.com/pagead/show_ads.js"></script></div>';}
function make_toc($atts){
    $atts = shortcode_atts(array(
        'id'          => '',
        'class'       => 'toc',
        'title'       => '目次',
        'toggle'      => 'true',
        'showcount'   => 2,
        'depth'       => 0,
        'toplevel'    => 1,
        'targetclass' => 'article-main'
    ),$atts);

    $content   = get_the_content();
    $headers   = array();
    $html      = '';
    $toc_list  = '';
    $id        = $atts['id'];
    $toggle    = '';
    $counter   = 0;
    $counters  = array(0,0,0,0,0,0);
    $top_level = intval($atts['toplevel']);
    $harray      = array();
    $targetclass = trim($atts['targetclass']);
    if($targetclass===''){$targetclass = get_post_type();}
    for($h = $atts['toplevel']; $h <= 6; $h++){$harray[] = '"h' . $h . '"';}
    $harray = implode(',',$harray);

    preg_match_all('/<([hH][1-6]).*?>(.*?)<\/[hH][1-6].*?>/u',$content,$headers);
    $header_count = count($headers[0]);
    if($header_count > 0){
        $level = strtolower($headers[1][0]);
        if($top_level < $level){$top_level = $level;}
    }
    if($top_level < 1){$top_level = 1;}
    if($top_level > 6){$top_level = 6;}
    $atts['toplevel'] = $top_level;
    $current_depth          = $top_level - 1;
    $prev_depth             = $top_level - 1;
    $max_depth              = (($atts['depth'] == 0) ? 6 : intval($atts['depth'])) - $top_level + 1;

    for($i=0;$i < $header_count;$i++){
        $depth = 0;
        switch(strtolower($headers[1][$i])){
            case 'h1': $depth = 1 - $top_level + 1; break;
            case 'h2': $depth = 2 - $top_level + 1; break;
            case 'h3': $depth = 3 - $top_level + 1; break;
            case 'h4': $depth = 4 - $top_level + 1; break;
            case 'h5': $depth = 5 - $top_level + 1; break;
            case 'h6': $depth = 6 - $top_level + 1; break;
        }
        if($depth >= 1 && $depth <= $max_depth){
            if($current_depth == $depth){$toc_list .= '</li>';}
            while($current_depth > $depth){
                $toc_list .= '</li></ol>';
                $current_depth--;
                $counters[$current_depth] = 0;
            }
            if($current_depth != $prev_depth){$toc_list .= '</li>';}
            if($current_depth < $depth){
                $toc_list .= '<ol' . (($current_depth == $top_level - 1) ? ' class="toc-list open"' : '') . '>';
                $current_depth++;
            }
            $counters[$current_depth - 1] ++;
            $counter++;
            $toc_list .= '<li><a href="#toc' . $counter . '" tabindex="0">' . $headers[2][$i] . '</a>';
            $prev_depth = $depth;
        }
    }
    while($current_depth >= 1 ){
        $toc_list .= '</li></ol>';
        $current_depth--;
    }
    if($counter >= $atts['showcount']){
        if(strtolower($atts['toggle'] ) == 'true'){
            $script = "document.getElementByClassName('toc-list').classList.toggle('open');document.getElementByClassName('toc-list').classList.toggle('close');";
            $toggle = '<a class="toc-toggle" href="javascript:void(0)" tabindex="0" onclick="' . $script . '">↺</a>';
        }
        if($id!==''){$id = ' id="' . $id . '"';}else{$id = '';}
        $html .= '
        <aside' . $id . ' class="' . $atts['class'] . '">'
            . $toggle .
            '<h2 class="toc-title">' . $atts['title'] . '</h2>'
            . $toc_list .
        '
        </aside>
        <script>
            (function(){
                var idCounter = 0;
                var targetclass = document.getElementsByClassName("' . $targetclass . '");
                var sub = [<?php echo $harray;?>];
                for (var i = 0; i < sub.length; i++) {
                    var targetelement = targetclass.getElementsByTagName(sub[i]);
                    for (var n = 0; n < targetelement.length; n++) {
                        idCounter++;
                        targetelement[i].id = "toc" + idCounter;
                    }
                }
            })();
        </script>';
    }
    return $html;
}
add_shortcode('customcss','style_into_article');
add_shortcode('html_encode','html_encode');
add_shortcode('embedly','url_to_embedly');
add_shortcode('hatenaBlogcard','url_to_hatenaBlogcard');
add_shortcode('OGPBlogcard','url_to_OGPBlogcard');
add_shortcode('spotify','spotify_play_into_article');
add_shortcode('nav','navigation_in_article');
add_shortcode('adsense','google_ads_in_article');
add_shortcode('toc','make_toc');
/*
    editor custom
1.script
    ●category filter
    ●regulated excerpt
    ●NOT to upload without title
2.ADD TinyMCE Buttons
3.ADD quicktag
4.ADD article drived list
*/
function add_post_edit_featuer(){ ?>
<script>
	jQuery(function($){function catFilter(header,list){var form = $('<form>').attr({'class':'filterform','action':'#'}).css({'position':'absolute','top':'3vmin'}),input=$('<input>').attr({'class':'filterinput','type':'text','placeholder':'カテゴリー検索'});$(form).append(input).appendTo(header);$(header).css({'padding-top':'3.5vmin'});$(input).change(function(){var filter=$(this).val();if(filter){$(list).find('label:not(:contains('+filter+'))').parent().hide();$(list).find('label:contains('+filter+')').parent().show();}else{$(list).find('li').show();}return false;}).keyup(function(){$(this).change();});}$(function(){catFilter($('#category-all'),$('#categorychecklist'));});});
    jQuery(function($){var count=100;jQuery('#postexcerpt .hndle span').after('<span style=\"padding-left:1em;color:#888;font-size:1rem;\">現在の文字数： <span id=\"excerpt-count\"></span> / '+ count +'</span>');jQuery('#excerpt-count').text($('#excerpt').val().length);jQuery('#excerpt').keyup(function(){$('#excerpt-count').text($('#excerpt').val().length);if($(this).val().length > count){$(this).val($(this).val().substr(0,count));}});jQuery('#postexcerpt .inside p').html('※ここには <strong>"'+ count +'文字"</strong> 以上は入力できません。').css('color','#888');});
    jQuery(function($){if('post' == $('#post_type').val() || 'page' == $('#post_type').val()){$("#post").submit(function(e){if('' == $('#title').val()){alert('タイトルを入力してください！');$('.spinner').hide();$('#publish').removeClass('button-primary-disabled');$('#title').focus();return false;}});}});
</script>
<?php }
add_action('admin_head-post-new.php','add_post_edit_featuer');
add_action('admin_head-post.php','add_post_edit_featuer');

add_filter('tiny_mce_before_init','wkwkrnht_add_mce_settings');
function wkwkrnht_add_mce_settings($settings){
    $settings['fontsize_formats'] = '10px 12px 14px 16px 18px 20px 22px 24px 26px 28px 30px 32px 34px 36px 38px 40px 42px 44px 46px 48px 50px 0.5rem 0.6rem 0.8rem 1rem 1.1rem 1.2rem 1.3rem 1.4rem 1.5rem 1.6rem 1.7rem 1.8rem 1.9rem 2rem 2.1rem 2.2rem 2.3rem 2.4rem 2.5rem 0.5em 0.6em 0.7em 0.8em 0.9em 1em 1.1em 1.2em 1.3em 1.4em 1.5em 1.6em 1.7em 1.8em 1.9em 2em 2.1em 2.2em 2.3em 2.4em 2.5em 50% 55% 60% 65% 70% 75% 80% 85% 90% 95% 100% 105% 110% 115% 120% 125% 130% 135% 140% 145% 150%';
    return $settings;
}
add_filter('mce_buttons_3','wkwkrnht_add_mce_buttons');
function wkwkrnht_add_mce_buttons($buttons){
    array_push($buttons,'fontsizeselect');
    array_push($buttons,'fontselect');
    array_push($buttons,'styleselect');
    array_push($buttons,'backcolor');
    array_push($buttons,'newdocument');
    array_push($buttons,'copy');
    array_push($buttons,'paste');
    return $buttons;
}

function wkwkrnht_add_quicktags(){
    if(wp_script_is('quicktags')){ ?>
    <script>
        QTags.addButton('qt-customcss','カスタムCSS','[customcss display= style=',']');
        QTags.addButton('qt-htmlencode','HTMLエンコード','[html_encode]','[/html_encode]');
        QTags.addButton('qt-nav','カスタムメニュー','[nav id=',']');
        QTags.addButton('qt-toc','目次','[toc id= class=toc title=目次 showcount=2 depth=0 toplevel=1 targetclass=article-main duration=slow offset=]');
        QTags.addButton('qt-embed','embed','[embed]','[/embed]');
        QTags.addButton('qt-embedly','embedly','[embedly url=',']');
		QTags.addButton('qt-hatenablogcard','はてなブログカード','[hatenaBlogcard url=',']');
        QTags.addButton('qt-ogpblogcard','OGPブログカード','[OGPBlogcard url=',']');
        QTags.addButton('qt-spotify','spotify','[spotify url=',']');
        QTags.addButton('qt-adsense','Googledsense','[adsaaense client= slot=',']');
		QTags.addButton('qt-p','p','<p>','</p>');
        QTags.addButton('qt-h1','h1','<h1>','</h1>');
        QTags.addButton('qt-h2','h2','<h2>','</h2>');
		QTags.addButton('qt-h3','h3','<h3>','</h3>');
		QTags.addButton('qt-h4','h4','<h4>','</h4>');
        QTags.addButton('qt-h5','h5','<h5>','</h5>');
        QTags.addButton('qt-h6','h6','<h6>','</h6>');
        QTags.addButton('qt-table','table','<table>','</table>');
        QTags.addButton('qt-tbody','tbody','      <tbody>','    </tbody>');
        QTags.addButton('qt-tr','tr','         <tr>','     </tr>');
        QTags.addButton('qt-th','th','           <th>','</th>');
        QTags.addButton('qt-td','td','           <td>','</td>');
		QTags.addButton('qt-marker','marker','<span class="marker">','</span>');
		QTags.addButton('qt-information','情報','<div class="information">','</div>');
		QTags.addButton('qt-question','疑問','<div class="question">','</div>');
        QTags.addButton('qt-searchbox','検索風表示','<div class="search-form"><div class="sform">','</div><div class="sbtn"><span class="fa fa-search fa-fw" aria-hidden="true"></span> 検索</div></div>');
    </script>
<?php }}
add_action('admin_print_footer_scripts','wkwkrnht_add_quicktags');

function add_posts_columns($columns){
    $columns['thumbnail']='thumb';
    $columns['postid']='ID';
    $columns['count']='word count';
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
    ADD item to customize
1.customizer
2.user profile
    ●ADD item
    ●accept HTML tag
*/
add_action('customize_register','theme_customize');
function theme_customize($wp_customize){
    $wp_customize->add_setting('Google_Webmaster',array('type'=>'option','sanitize_callback'=>'sanitize_text_field',));
    $wp_customize->add_control('Google_Webmaster',array('section'=>'title_tagline','settings'=>'Google_Webmaster','label'=>'サイトのGoogleSerchconsole向け認証コードを指定する','type'=>'text'));
    $wp_customize->add_setting('Bing_Webmaster',array('type'=>'option','sanitize_callback'=>'sanitize_text_field',));
    $wp_customize->add_control('Bing_Webmaster',array('section'=>'title_tagline','settings'=>'Bing_Webmaster','label'=>'サイトのBingWebmaster向け認証コードを指定する','type'=>'text'));
    $wp_customize->add_setting('Pinterest',array('type'=>'option','sanitize_callback'=>'sanitize_text_field',));
    $wp_customize->add_control('Pinterest',array('section'=>'title_tagline','settings'=>'Pinterest','label'=>'サイトのPinterest向け認証コードを指定する','type'=>'text'));
    $wp_customize->add_setting('GoogleChrome_URLbar',array('type'=>'option','default'=>'#03a9f4','sanitize_callback'=>'sanitize_hex_color',));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'GoogleChrome_URLbar',array('label'=>'モバイル版GoogleChrome向けURLバーの色コードを指定する','settings'=>'GoogleChrome_URLbar','section'=>'colors',)));
    $wp_customize->add_setting('a_color',array('type'=>'option','default'=>'#03a9f4','sanitize_callback'=>'sanitize_hex_color',));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'a_color',array('label'=>'a_color','settings'=>'a_color','section'=>'colors',)));
    $wp_customize->add_setting('nav_a_background',array('type'=>'option','default'=>'#03a9f4','sanitize_callback'=>'sanitize_hex_color',));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'nav_a_background',array('label'=>'nav_a_background','settings'=>'nav_a_background','section'=>'colors',)));
    $wp_customize->add_setting('nav_a_color',array('type'=>'option','default'=>'#fff','sanitize_callback'=>'sanitize_hex_color',));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'nav_a_color',array('label'=>'nav_a_color','settings'=>'nav_a_color','section'=>'colors',)));
    $wp_customize->add_setting('footer_background',array('type'=>'option','default'=>'#fff','sanitize_callback'=>'sanitize_hex_color',));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'footer_background',array('label'=>'footer_background','settings'=>'footer_background','section'=>'colors',)));
    $wp_customize->add_setting('footer_color',array('type'=>'option','default'=>'#03a9f4','sanitize_callback'=>'sanitize_hex_color',));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'footer_color',array('label'=>'footer_color','settings'=>'footer_color','section'=>'colors',)));
    $wp_customize->add_setting('menu_background',array('type'=>'option','default'=>'#fff','sanitize_callback'=>'sanitize_hex_color',));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'menu_background',array('label'=>'menu_background','settings'=>'menu_background','section'=>'colors',)));
    $wp_customize->add_setting('tag_cloud_border',array('type'=>'option','default'=>'#03a9f4','sanitize_callback'=>'sanitize_hex_color',));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'tag_cloud_border',array('label'=>'tag_cloud_border','settings'=>'tag_cloud_border','section'=>'colors',)));
    $wp_customize->add_setting('tag_cloud_border_hover',array('type'=>'option','default'=>'#fff','sanitize_callback'=>'sanitize_hex_color',));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'tag_cloud_border_hover',array('label'=>'tag_cloud_border_hover','settings'=>'tag_cloud_border_hover','section'=>'colors',)));
    $wp_customize->add_setting('tag_cloud_color',array('type'=>'option','default'=>'#fff','sanitize_callback'=>'sanitize_hex_color',));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'tag_cloud_color',array('label'=>'tag_cloud_color','settings'=>'tag_cloud_color','section'=>'colors',)));
    $wp_customize->add_setting('card_list_background',array('type'=>'option','default'=>'#f1f1f1','sanitize_callback'=>'sanitize_hex_color',));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'card_list_background',array('label'=>'card_list_background','settings'=>'card_list_background','section'=>'colors',)));
    $wp_customize->add_setting('page_nation_background',array('type'=>'option','default'=>'#fff','sanitize_callback'=>'sanitize_hex_color',));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'page_nation_background',array('label'=>'page_nation_background','settings'=>'page_nation_background','section'=>'colors',)));
    $wp_customize->add_setting('page_nation_border',array('type'=>'option','default'=>'#03a9f4','sanitize_callback'=>'sanitize_hex_color',));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'page_nation_border',array('label'=>'page_nation_border','settings'=>'page_nation_border','section'=>'colors',)));
    $wp_customize->add_setting('page_nation_a_background',array('type'=>'option','default'=>'#fff','sanitize_callback'=>'sanitize_hex_color',));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'page_nation_a_background',array('label'=>'page_nation_a_background','settings'=>'page_nation_a_background','section'=>'colors',)));
    $wp_customize->add_setting('page_nation_a_color',array('type'=>'option','default'=>'#03a9f4','sanitize_callback'=>'sanitize_hex_color',));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'page_nation_a_color',array('label'=>'page_nation_a_color','settings'=>'page_nation_a_color','section'=>'colors',)));
    $wp_customize->add_setting('page_nation_dots_color',array('type'=>'option','default'=>'#333','sanitize_callback'=>'sanitize_hex_color',));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'page_nation_dots_color',array('label'=>'page_nation_dots_color','settings'=>'page_nation_dots_color','section'=>'colors',)));
    $wp_customize->add_setting('page_nation_hover_color',array('type'=>'option','default'=>'#fff','sanitize_callback'=>'sanitize_hex_color',));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'page_nation_hover_color',array('label'=>'page_nation_hover_color','settings'=>'page_nation_hover_color','section'=>'colors',)));
    $wp_customize->add_setting('page_nation_hover_background',array('type'=>'option','default'=>'#03a9f4','sanitize_callback'=>'sanitize_hex_color',));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'page_nation_hover_background',array('label'=>'page_nation_hover_background','settings'=>'page_nation_hover_background','section'=>'colors',)));
    $wp_customize->add_setting('article_date_color',array('type'=>'option','default'=>'#fff','sanitize_callback'=>'sanitize_hex_color',));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'article_date_color',array('label'=>'article_date_color','settings'=>'article_date_color','section'=>'colors',)));
    $wp_customize->add_setting('article_date_background',array('type'=>'option','default'=>'#03a9f4','sanitize_callback'=>'sanitize_hex_color',));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'article_date_background',array('label'=>'article_date_background','settings'=>'article_date_background','section'=>'colors',)));
    $wp_customize->add_setting('article_meta_background',array('type'=>'option','default'=>'#f1f1f1','sanitize_callback'=>'sanitize_hex_color',));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'article_meta_background',array('label'=>'article_meta_background','settings'=>'article_meta_background','section'=>'colors',)));
    $wp_customize->add_setting('article_main_h1_background',array('type'=>'option','default'=>'#f4f4f4','sanitize_callback'=>'sanitize_hex_color',));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'article_main_h1_background',array('label'=>'article_main_h1_background','settings'=>'article_main_h1_background','section'=>'colors',)));
    $wp_customize->add_setting('article_main_h1_border',array('type'=>'option','default'=>'#ccc','sanitize_callback'=>'sanitize_hex_color',));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'article_main_h1_border',array('label'=>'article_main_h1_border','settings'=>'article_main_h1_border','section'=>'colors',)));
    $wp_customize->add_setting('article_main_h2_color',array('type'=>'option','default'=>'#fff','sanitize_callback'=>'sanitize_hex_color',));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'article_main_h2_color',array('settings'=>'article_main_h2_color','label'=>'article_main_h2_color','section'=>'colors',)));
    $wp_customize->add_setting('article_main_h2_background',array('type'=>'option','default'=>'#03a9f4','sanitize_callback'=>'sanitize_hex_color',));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'article_main_h2_background',array('label'=>'article_main_h2_background','settings'=>'article_main_h2_background','section'=>'colors',)));
    $wp_customize->add_setting('article_main_h3_color',array('type'=>'option','default'=>'#03a9f4','sanitize_callback'=>'sanitize_hex_color',));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'article_main_h3_color',array('settings'=>'article_main_h3_color','label'=>'article_main_h3_color','section'=>'colors',)));
    $wp_customize->add_setting('article_main_h3_border',array('type'=>'option','default'=>'#03a9f4','sanitize_callback'=>'sanitize_hex_color',));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'article_main_h3_border',array('label'=>'article_main_h3_border','settings'=>'article_main_h3_border','section'=>'colors',)));
    $wp_customize->add_setting('article_main_h4_border',array('type'=>'option','default'=>'#03a9f4','sanitize_callback'=>'sanitize_hex_color',));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'article_main_h4_border',array('label'=>'article_main_h4_border','settings'=>'article_main_h4_border','section'=>'colors',)));
    $wp_customize->add_setting('article_main_h5_border',array('type'=>'option','default'=>'#03a9f4','sanitize_callback'=>'sanitize_hex_color',));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'article_main_h5_border',array('label'=>'article_main_h5_border','settings'=>'article_main_h5_border','section'=>'colors',)));
    $wp_customize->add_setting('article_main_h6_border',array('type'=>'option','default'=>'#03a9f4','sanitize_callback'=>'sanitize_hex_color',));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'article_main_h6_border',array('label'=>'article_main_h6_border','settings'=>'article_main_h6_border','section'=>'colors',)));
    $wp_customize->add_setting('article_main_bq_border',array('type'=>'option','default'=>'#bbb','sanitize_callback'=>'sanitize_hex_color',));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'article_main_bq_border',array('label'=>'article_main_bq_border','settings'=>'article_main_bq_border','section'=>'colors',)));
    $wp_customize->add_setting('article_main_li_color',array('default'=>'#03a9f4','sanitize_callback'=>'sanitize_hex_color',));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'article_main_li_color',array('label'=>'article_main_li_color','settings'=>'article_main_li_color','section'=>'colors',)));
    $wp_customize->add_setting('article_main_li_border',array('default'=>'#aaa','sanitize_callback'=>'sanitize_hex_color',));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'article_main_li_border',array('label'=>'article_main_li_border','settings'=>'article_main_li_border','section'=>'colors',)));
    $wp_customize->add_setting('article_main_ol_color',array('default'=>'#fff','sanitize_callback'=>'sanitize_hex_color',));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'article_main_ol_color',array('label'=>'article_main_ol_color','settings'=>'article_main_ol_color','section'=>'colors',)));
    $wp_customize->add_setting('article_main_ol_background',array('default'=>'#03a9f4','sanitize_callback'=>'sanitize_hex_color',));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'article_main_ol_background',array('label'=>'article_main_ol_background','settings'=>'article_main_ol_background','section'=>'colors',)));
    $wp_customize->add_setting('article_main_tr_border',array('default'=>'#cfcfcf','sanitize_callback'=>'sanitize_hex_color',));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'article_main_tr_border',array('label'=>'article_main_tr_border','settings'=>'article_main_tr_border','section'=>'colors',)));
    $wp_customize->add_setting('article_main_th_color',array('default'=>'#fff','sanitize_callback'=>'sanitize_hex_color',));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'article_main_th_color',array('label'=>'article_main_th_color','settings'=>'article_main_th_color','section'=>'colors',)));
    $wp_customize->add_setting('article_main_th_background',array('default'=>'#03a9f4','sanitize_callback'=>'sanitize_hex_color',));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'article_main_th_background',array('label'=>'article_main_th_background','settings'=>'article_main_th_background','section'=>'colors',)));
    $wp_customize->add_setting('comment_background_color',array('default'=>'#fff','sanitize_callback'=>'sanitize_hex_color',));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'comment_background_color',array('label'=>'comment_background_color','settings'=>'comment_background_color','section'=>'colors',)));
    $wp_customize->add_setting('comment_title_background_color',array('default'=>'#03a9f4','sanitize_callback'=>'sanitize_hex_color',));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'comment_title_background_color',array('label'=>'comment_title_background_color','settings'=>'comment_title_background_color','section'=>'colors',)));
    $wp_customize->add_setting('manth_archive_year_background_color',array('default'=>'#03a9f4','sanitize_callback'=>'sanitize_hex_color',));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'manth_archive_year_background_color',array('label'=>'manth_archive_year_background_color','settings'=>'manth_archive_year_background_color','section'=>'colors',)));
    $wp_customize->add_setting('manth_archive_year_border_color',array('default'=>'#03a9f4','sanitize_callback'=>'sanitize_hex_color',));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'manth_archive_year_border_color',array('label'=>'manth_archive_year_border_color','settings'=>'manth_archive_year_border_color','section'=>'colors',)));
    $wp_customize->add_setting('manth_archive_year_h3_color',array('default'=>'#fff','sanitize_callback'=>'sanitize_hex_color',));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'manth_archive_year_h3_color',array('label'=>'manth_archive_year_h3_color','settings'=>'manth_archive_year_h3_color','section'=>'colors',)));
    $wp_customize->add_setting('manth_archive_article_background_color',array('default'=>'#fff','sanitize_callback'=>'sanitize_hex_color',));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'manth_archive_article_background_color',array('label'=>'manth_archive_article_background_color','settings'=>'manth_archive_article_background_color','section'=>'colors',)));
    $wp_customize->add_setting('move_top_color',array('default'=>'#fff','sanitize_callback'=>'sanitize_hex_color',));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'move_top_color',array('label'=>'move_top_color','settings'=>'move_top_color','section'=>'colors',)));
    $wp_customize->add_setting('move_top_background_color',array('default'=>'#03a9f4','sanitize_callback'=>'sanitize_hex_color',));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'move_top_background_color',array('label'=>'move_top_background_color','settings'=>'move_top_background_color','section'=>'colors',)));
    $wp_customize->add_setting('img_related_background_color',array('default'=>'#fff','sanitize_callback'=>'sanitize_hex_color',));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'img_related_background_color',array('label'=>'img_related_background_color','settings'=>'img_related_background_color','section'=>'colors',)));
    $wp_customize->add_setting('img_related_color',array('default'=>'#fff','sanitize_callback'=>'sanitize_hex_color',));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'img_related_color',array('label'=>'img_related_color','settings'=>'img_related_color','section'=>'colors',)));
    $wp_customize->add_setting('img_related_img_color',array('default'=>'#333','sanitize_callback'=>'sanitize_hex_color',));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'img_related_img_color',array('label'=>'img_related_img_color','settings'=>'img_related_img_color','section'=>'colors',)));
    $wp_customize->add_setting('related_background_color',array('default'=>'#fff','sanitize_callback'=>'sanitize_hex_color',));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'related_background_color',array('label'=>'related_background_color','settings'=>'related_background_color','section'=>'colors',)));
    $wp_customize->add_setting('related_color',array('default'=>'#333','sanitize_callback'=>'sanitize_hex_color',));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'related_color',array('label'=>'related_color','settings'=>'related_color','section'=>'colors',)));
    $wp_customize->add_setting('related_title_background_color',array('default'=>'#03a9f4','sanitize_callback'=>'sanitize_hex_color',));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'related_title_background_color',array('label'=>'related_title_background_color','settings'=>'article_main_li_color','section'=>'colors',)));
    $wp_customize->add_setting('related_title_color',array('default'=>'#fff','sanitize_callback'=>'sanitize_hex_color',));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'related_title_color',array('label'=>'related_title_color','settings'=>'related_title_color','section'=>'colors',)));
    $wp_customize->add_section('security_section',array('title'=>'セキュリティ','description'=>'このテーマ独自のセキュリティ設定',));
    $wp_customize->add_setting('referrer_setting',array('default'=>'default','type'=>'theme_mod','sanitize_callback'=>'sanitize_radio',));
	$wp_customize->add_control('referrer_setting',array('settings'=>'referrer_setting','label'=>'メタタグのリファラーの値','section'=>'security_section','type'=>'radio','choices'=>array('default'=>'default','unsafe-url'=>'unsafe-url','origin-when-crossorigin'=>'origin-when-crossorigin','none-when-downgrade'=>'none-when-downgrade','none'=>'none',),));
    $wp_customize->add_setting('cookie_key',array('type'=>'option','sanitize_callback'=>'sanitize_text_field',));
    $wp_customize->add_control('cookie_key',array('section'=>'security_section','settings'=>'cookie_key','label'=>'Cookieのkeyを入力する','type'=>'text'));
    $wp_customize->add_setting('cookie_txt',array('type'=>'option','sanitize_callback'=>'sanitize_text_field',));
    $wp_customize->add_control('cookie_txt',array('section'=>'security_section','settings'=>'cookie_txt','label'=>'Cookieのテキストを入力する','type'=>'text'));
    $wp_customize->add_section('sns_section',array('title'=>'SNS','description'=>'このテーマ独自のSNS向け設定',));
    $wp_customize->add_setting('Twitter_URL',array('type'=>'option','sanitize_callback'=>'sanitize_text_field',));
    $wp_customize->add_control('Twitter_URL',array('section'=>'sns_section','settings'=>'Twitter_URL','label'=>'サイト全体のTwitterアカウントへを指定する','type'=>'text'));
    $wp_customize->add_setting('facebook_appid',array('type'=>'option','sanitize_callback'=>'sanitize_text_field',));
    $wp_customize->add_control('facebook_appid',array('section'=>'sns_section','settings'=>'facebook_appid','label'=>'facebookのappidを表示する','type'=>'text'));
    $wp_customize->add_setting('header_txt',array('type'=>'option','sanitize_callback'=>'sanitize_text_field',));
    $wp_customize->add_control('header_txt',array('section'=>'sns_section','settings'=>'header_txt','label'=>'headタグ内に追加で出力するテキスト','type'=>'textarea'));
    $wp_customize->add_setting('footer_txt',array('type'=>'option','sanitize_callback'=>'sanitize_text_field',));
    $wp_customize->add_control('footer_txt',array('section'=>'sns_section','settings'=>'footer_txt','label'=>'bodyタグ直前に追加で出力するテキスト','type'=>'textarea'));
    $wp_customize->add_section('widget_section',array('title'=>'widget','description'=>'このテーマ独自ウイジェット向けの設定',));
	$wp_customize->add_setting('Disqus_ID',array('type'=>'option','sanitize_callback'=>'sanitize_text_field',));
    $wp_customize->add_control('Disqus_ID',array('section'=>'widget_section','settings'=>'Disqus_ID','label'=>'DisqusのIDを入力する','type'=>'text'));
    $wp_customize->add_section('jetpack_section',array('title'=>'jetpack','description'=>'このテーマ独自のjetpack向け設定',));
    $wp_customize->add_setting('jetpack.css',array('type'=>'option','sanitize_callback'=>'sanitize_checkbox',));
    $wp_customize->add_control('jetpack.css',array('settings'=>'jetpack.css','label'=>'jetpack.cssの読み込みを停止する','section'=>'jetpack_section','type'=>'checkbox',));
    $wp_customize->add_setting('jetpack_open_graph',array('type'=>'option','sanitize_callback'=>'sanitize_checkbox',));
    $wp_customize->add_control('jetpack_open_graph',array('settings'=>'jetpack_open_graph','label'=>'jetpackによるOGPの出力を停止する','section'=>'jetpack_section','type'=>'checkbox',));
}

function sanitize_checkbox($input){if($input===true){return true;}else{return false;}}
function sanitize_radio($input,$setting){
    global $wp_customize;
    $control = $wp_customize->get_control($setting->id);
    if(array_key_exists($input,$control->choices)){
        return $input;
    }else{
        return $setting->default;
    }
}


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
    $contactmethods['Amazonlist']='Amazonの欲しいものリスト';
    $contactmethods['Yahooaction']='Yahoo!オークション';
    $contactmethods['Rakuma']='ラクマ';
    $contactmethods['Merukari']='メルカリ';
    $contactmethods['Bitcoin']='Bitcoin';
    return $contactmethods;
}
add_filter('user_contactmethods','my_new_contactmethods',10,1);
remove_filter('pre_user_description','wp_filter_kses');
