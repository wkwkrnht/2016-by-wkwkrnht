    </main>
    <footer class="toggle-zone">
        <div id="share-toggle"><i class="fa fa-share-alt fa-3x"></i></div>
        <div id="menu-toggle"><i class="fa fa-bars fa-3x"></i></div>
        <div id="share-menu-toggle"><i class="fa fa-share-alt fa-3x"></i></div>
    </footer>
    <nav id="share-menu" class="close">
        <ul>
		    <li class="tweet sharewindow"><a href="https://twitter.com/share?url=<?php echo get_meta_url();?>&amp;text=<?php wp_title('');?><?php if(get_twitter_acount()!==null):echo '&amp;via=' . get_twitter_acount();endif;?>" target="_blank"><i class="fa fa-twitter fa-5x" aria-hidden="true"></i></a></li>
            <li class="fb-like sharewindow"><a href="http://www.facebook.com/share.php?u=<?php echo rawurlencode(get_meta_url());?>" target="_blank"><i class="fa fa-thumbs-up fa-5x" aria-hidden="true"></i></a></li>
            <li class="line sharewindow"><a href="http://line.me/R/msg/text/?<?php echo'txt';?>%0D%0A<?php echo get_meta_url();?>" target="_blank"><i class="fa fa-comments fa-5x" aria-hidden="true"></i></a></li>
            <li class="reddit sharewindow"><a href="https://www.reddit.com/submit?url=<?php echo get_meta_url();?>" target="_blank"><i class="fa fa-reddit-alien fa-5x" aria-hidden="true"></i></a></li>
            <li class="g-plus sharewindow"><a href="https://plus.google.com/share?url=<?php echo get_meta_url();?>" target="_blank"><i class="fa fa-google-plus-official fa-5x" aria-hidden="true"></i></a></li>
            <li class="linkedin sharewindow"><a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo get_meta_url();?>&amp;title=<?php echo'txt';?>" target="_blank"><i class="fa fa-linkedin-square fa-5x" aria-hidden="true"></i></a></li>
            <li class="pocket sharewindow"><a href="http://getpocket.com/edit?url=<?php echo get_meta_url();?>&amp;title=<?php echo'txt';?>" target="_blank"><i class="fa fa-get-pocket fa-5x" aria-hidden="true"></i></a></li>
            <li class="pinterest"><a href="http://pinterest.com/pin/create/button/?url=<?php echo get_meta_url();?>&amp;media=<?php meta_image();?>"><i class="fa fa-pinterest fa-5x" aria-hidden="true"></i></a></li>
            <li class="hatebu"><a href="http://b.hatena.ne.jp/add?mode=confirm&url=<?php echo get_meta_url();?>&amp;title=<?php echo'txt';?>" target="_blank">B!</a></li>
            <li class="tumblr sharewindow"><a href="https://www.tumblr.com/widgets/share/tool?canonicalUrl=<?php echo get_meta_url();?>" target="_blank"><i class="fa fa-tumblr fa-5x" aria-hidden="true"></i></a></li>
        </ul>
    </nav>
    <div id="main-menu" class="close">
        <?php if(is_user_logged_in()):?>
            <nav class="admin-navigation" role="navigation">
                <ul>
                    <li><a href="<?php echo esc_url(home_url());?>/wp-login.php?loggedout=true" target="_blank" class="logout"><i class="fa fa-3x fa-sign-out" aria-hidden="true"></i></a></li>
                    <li><a href="<?php echo esc_url(home_url());?>/wp-admin/post-new.php" target="_blank" class="addnew"></a></li>
                    <li><?php edit_post_link();?></li>
                    <li><a href="wlw://wkwkrnht.gegahost.net/?postid=<?php echo the_ID();?>" class="wlwedit"></a></li>
                    <li><a href="<?php echo esc_url(home_url());?>/wp-admin/" target="_blank" class="adminmenu"><i class="fa fa-3x fa-cog" aria-hidden="true"></i></a></li>
                </ul>
            </nav>
        <?php endif;?>
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
    <script src='//ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js'></script>
    <script>
        window.jQuery || document.write('<script src="<?php echo includes_url();?>js/jquery/jquery.js"><\/script>');
        jQuery(function(){jQuery('#menu-toggle').click(function(){jQuery('#main-menu').toggleClass('close');jQuery('#main-menu').toggleClass('open');});});
        jQuery(function(){jQuery('#share-toggle').click(function(){jQuery('#share-menu').toggleClass('close');jQuery('#share-menu').toggleClass('open');});});
        jQuery(function(){jQuery('#share-menu-toggle').click(function(){jQuery('#share-menu').toggleClass('close');jQuery('#share-menu').toggleClass('open');});});
    </script>
    <?php
    if(is_singular()===true):
        $format = get_post_format();
        if($format==='gallery'):
            echo'
            <link rel="stylesheet" href="' . get_stylesheet_directory_uri() . '/inc/baguetteBox/baguetteBox.min.css">
            <script src="' . get_stylesheet_directory_uri() . '/inc/baguetteBox/baguetteBox.min.js"></script>
            <script>baguetteBox.run(".gallery-icon",{
                captions:     function(element){return element.getElementsByTagName("img")[0].alt;},
                animation:    "fadeIn",
                noScrollbars: true
            });</script>
            ';
        elseif($format==='link'):
            echo'
            <script>
            var target = document.querySelectorAll(".format-link .article-main a");
            for(var i = 0; i < target.length; i++){var href = target[i].classList.add("embedly-card");}
            </script>
            <script async="" charset="UTF-8" src="//cdn.embedly.com/widgets/platform.js"></script>';
        endif;
    endif;?>
    <?php wp_footer();?>
</body>
</html>
