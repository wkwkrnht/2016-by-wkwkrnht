    </main>
    <footer>
        <a href="javascript:void(0)" id="menu-toggle" class="close" title="メニューへのリンク" onclick="document.getElementById('main-menu').classList.toggle('close');document.getElementById('main-menu').classList.toggle('open');"><i class="fa fa-bars fa-5x"></i></a>
        <?php $script='';if(is_home()===false){echo'<a href="' . esc_url(home_url()) . '" title="ホームへのリンク" id="home-button" class="close"><i class="fa fa-home fa-5x" aria-hidden="true"></i></a>';$script="document.getElementById('home-button').classList.toggle('close');document.getElementById('home-button').classList.toggle('open');";}?>
        <a href="javascript:void(0)" id="button-toggle" title="メニューボタン" onclick="document.getElementById('toggle-ok').classList.toggle('none');document.getElementById('toggle-ok').classList.toggle('inline-block');document.getElementById('toggle-no').classList.toggle('none');document.getElementById('toggle-no').classList.toggle('inline-block');<?php echo $script;?>document.getElementById('menu-toggle').classList.toggle('close');document.getElementById('menu-toggle').classList.toggle('open');document.getElementById('share-menu-toggle').classList.toggle('close');document.getElementById('share-menu-toggle').classList.toggle('open');"><i id="toggle-ok" class="fa fa-th-large fa-5x open" aria-hidden="true"></i><i id="toggle-no" class="fa fa-times fa-5x close" aria-hidden="true"></i></a>
        <a href="javascript:void(0)" id="share-menu-toggle" class="close" title="共有機能へのリンク" onclick="document.getElementById('share-menu').classList.toggle('close');document.getElementById('share-menu').classList.toggle('open');"><i class="fa fa-share-alt fa-5x"></i></a>
    </footer>
    <nav id="share-menu" class="close">
        <a href="javascript:void(0)" class="close-button" onclick="document.getElementById('share-menu').classList.toggle('close');document.getElementById('share-menu').classList.toggle('open');">×</a>
        <ul>
		    <li class="tweet"><a href="https://twitter.com/share?url=<?php echo get_meta_url();?>&amp;text=<?php wp_title('');?><?php if(get_twitter_acount()!==null):echo '&amp;via=' . get_twitter_acount();endif;?>" target="_blank"><i class="fa fa-twitter fa-5x" aria-hidden="true"></i></a></li>
            <li class="fb-like"><a href="http://www.facebook.com/share.php?u=<?php echo rawurlencode(get_meta_url());?>" target="_blank"><i class="fa fa-thumbs-up fa-5x" aria-hidden="true"></i></a></li>
            <li class="line"><a href="http://line.me/R/msg/text/?<?php wp_title('');?>%0D%0A<?php echo get_meta_url();?>" target="_blank"><i class="fa fa-comments fa-5x" aria-hidden="true"></i></a></li>
            <li class="reddit"><a href="https://www.reddit.com/submit?url=<?php echo get_meta_url();?>" target="_blank"><i class="fa fa-reddit-alien fa-5x" aria-hidden="true"></i></a></li>
            <li class="g-plus"><a href="https://plus.google.com/share?url=<?php echo get_meta_url();?>" target="_blank"><i class="fa fa-google-plus-official fa-5x" aria-hidden="true"></i></a></li>
            <li class="linkedin"><a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo get_meta_url();?>&amp;title=<?php wp_title('');?>" target="_blank"><i class="fa fa-linkedin-square fa-5x" aria-hidden="true"></i></a></li>
            <li class="pocket"><a href="http://getpocket.com/edit?url=<?php echo get_meta_url();?>&amp;title=<?php wp_title('');?>" target="_blank"><i class="fa fa-get-pocket fa-5x" aria-hidden="true"></i></a></li>
            <li class="pinterest"><a href="http://pinterest.com/pin/create/button/?url=<?php echo get_meta_url();?>&amp;media=<?php meta_image();?>"><i class="fa fa-pinterest fa-5x" aria-hidden="true"></i></a></li>
            <li class="hatebu"><a href="http://b.hatena.ne.jp/add?mode=confirm&url=<?php echo get_meta_url();?>&amp;title=<?php wp_title('');?>" target="_blank">B!</a></li>
            <li class="tumblr"><a href="https://www.tumblr.com/widgets/share/tool?canonicalUrl=<?php echo get_meta_url();?>" target="_blank"><i class="fa fa-tumblr fa-5x" aria-hidden="true"></i></a></li>
        </ul>
    </nav>
    <div id="main-menu" class="close">
        <a href="javascript:void(0)" class="close-button" onclick="document.getElementById('main-menu').classList.toggle('close');document.getElementById('main-menu').classList.toggle('open');">×</a>
	    <?php if(has_nav_menu('social')):?>
            <nav class="social-nav">
                <?php wp_nav_menu(array('theme_location'=>'social','depth'=>1,'link_before'=>'<span class="screen-reader-text">','link_after'=>'</span>',));?>
            </nav>
        <?php endif;?>
        <?php if(has_nav_menu('main')):?>
            <nav class="main-nav">
                <?php wp_nav_menu(array('theme_location'=>'main',));?>
            </nav>
        <?php endif;?>
        <?php if(is_active_sidebar('floatmenu')):?>
	        <ul class="widget-area">
		        <?php dynamic_sidebar('floatmenu');?>
            </ul>
        <?php endif;?>
    </div>
    <?php
    if(is_singular()===true):
        $format = get_post_format();
        if($format==='gallery'):
            $url = dirname(__FILE__) . '/./inc/baguetteBox.php';
            include_once $url;
        elseif($format==='link'):
            echo'
            <script>var target = document.querySelectorAll(".format-link .article-main a");for(var i = 0; i < target.length; i++){var href = target[i].classList.add("embedly-card");}</script>
            <script async="" charset="UTF-8" src="//cdn.embedly.com/widgets/platform.js"></script>';
        endif;
    endif;?>
    <?php wp_footer();?>
    <script>(function(){var doc = document;var wpCss = doc.getElementsByClassName('wpcss');var wpCssL = wpCss.length;for(i=0; i < wpCssL; i++){var wpStyle = doc.createElement('style');wpStyle.textContent = wpCss[i].textContent.replace(/\s{2,}/g,"");doc.head.appendChild(wpStyle);}})()if((new Date()).getHours() >= 21 || (new Date()).getHours() < 6 ){document.body.className += " night-mode";}</script>
    <style>
        .night-mode,.night-mode #main-menu,.night-mode .card,.night-mode .card-list{color:#fff;background-color:#333;}
        .night-mode #menu-toggle,.night-mode #home-button,.night-mode #button-toggle,.night-mode #share-menu-toggle{color:#fff;background-color:#333;}
        .night-mode #share-menu .close-button{background-color:#333;}
        .night-mode .ogp-blogcard{background-color:#333;border-color:#f1f1f1;}
        .night-mode .page-nation,.night-mode .page-nation a,.night-mode .page-nation li .dots,.night-mode .page-nation .current{color:#fff;background-color:#333;border-color:#fff;}
        .night-mode .page-nation li .dots{color:#f1f1f1;}
        .night-mode .page-nation a:hover{color:#333;background-color:#fff;}
        .night-mode .article-meta{color:#333;}
        .night-mode .article-main .ogp-blogcard-title,.night-mode .article-main .ogp-blogcard-description,.night-mode .article-main .ogp-blogcard-site-name,.night-mode .article-main .ogp-blogcard-title:visited,.night-mode .article-main .ogp-blogcard-description:visited,.night-mode .article-main .ogp-blogcard-site-name:visited,.night-mode .article-main img::after{color:#fff;}
    </style>
</body>
</html>
