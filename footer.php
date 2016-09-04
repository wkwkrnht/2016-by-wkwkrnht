    </main>
    <footer class="toggle-zone">
        <a href="#" id="share-toggle" title="共有機能へのリンク" onclick="document.getElementById('share-menu').classList.toggle('close');document.getElementById('share-menu').classList.toggle('open');"><i class="fa fa-share-alt fa-3x"></i></a>
        <a href="#" id="menu-toggle" title="メニューボタン" onclick="document.getElementById('main-menu').classList.toggle('close');document.getElementById('main-menu').classList.toggle('open');"><i class="fa fa-bars fa-3x"></i></a>
        <a href="#" id="share-menu-toggle" title="共有機能へのリンク" onclick="document.getElementById('share-menu').classList.toggle('close');document.getElementById('share-menu').classList.toggle('open');"><i class="fa fa-share-alt fa-3x"></i></a>
    </footer>
    <nav id="share-menu" class="close">
        <ul>
		    <li class="tweet newwindow"><a href="https://twitter.com/share?url=<?php echo get_meta_url();?>&amp;text=<?php wp_title('');?><?php if(get_twitter_acount()!==null):echo '&amp;via=' . get_twitter_acount();endif;?>" target="_blank"><i class="fa fa-twitter fa-5x" aria-hidden="true"></i></a></li>
            <li class="fb-like newwindow"><a href="http://www.facebook.com/share.php?u=<?php echo rawurlencode(get_meta_url());?>" target="_blank"><i class="fa fa-thumbs-up fa-5x" aria-hidden="true"></i></a></li>
            <li class="line newwindow"><a href="http://line.me/R/msg/text/?<?php echo'txt';?>%0D%0A<?php echo get_meta_url();?>" target="_blank"><i class="fa fa-comments fa-5x" aria-hidden="true"></i></a></li>
            <li class="reddit newwindow"><a href="https://www.reddit.com/submit?url=<?php echo get_meta_url();?>" target="_blank"><i class="fa fa-reddit-alien fa-5x" aria-hidden="true"></i></a></li>
            <li class="g-plus newwindow"><a href="https://plus.google.com/share?url=<?php echo get_meta_url();?>" target="_blank"><i class="fa fa-google-plus-official fa-5x" aria-hidden="true"></i></a></li>
            <li class="linkedin newwindow"><a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo get_meta_url();?>&amp;title=<?php echo'txt';?>" target="_blank"><i class="fa fa-linkedin-square fa-5x" aria-hidden="true"></i></a></li>
            <li class="pocket newwindow"><a href="http://getpocket.com/edit?url=<?php echo get_meta_url();?>&amp;title=<?php echo'txt';?>" target="_blank"><i class="fa fa-get-pocket fa-5x" aria-hidden="true"></i></a></li>
            <li class="pinterest"><a href="http://pinterest.com/pin/create/button/?url=<?php echo get_meta_url();?>&amp;media=<?php meta_image();?>"><i class="fa fa-pinterest fa-5x" aria-hidden="true"></i></a></li>
            <li class="hatebu"><a href="http://b.hatena.ne.jp/add?mode=confirm&url=<?php echo get_meta_url();?>&amp;title=<?php echo'txt';?>" target="_blank">B!</a></li>
            <li class="tumblr newwindow"><a href="https://www.tumblr.com/widgets/share/tool?canonicalUrl=<?php echo get_meta_url();?>" target="_blank"><i class="fa fa-tumblr fa-5x" aria-hidden="true"></i></a></li>
        </ul>
    </nav>
    <div id="main-menu" class="close">
	    <?php if(has_nav_menu('social')):?>
            <nav class="social-nav" role="navigation">
                <?php wp_nav_menu(array('theme_location'=>'social','depth'=>1,'link_before'=>'<span class="screen-reader-text">','link_after'=>'</span>',));?>
            </nav>
        <?php endif;?>
        <?php if(has_nav_menu('main')):?>
            <nav class="main-nav" role="navigation">
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
    <script>(function(){var selector = document.getElementsByClassName("newwindow");for(var i = 0; i < shareButton.length; i++){selector[i].addEventListener("click",function(e){e.preventDefault();window.open(this.href,"SNS_window","width=960,height=540,menubar=no,toolbar=no,scrollbars=yes");},false);}})()</script>
    <?php wp_footer();?>
</body>
</html>
