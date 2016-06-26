    </main>
    <div class="toggle-zone">
        <div id="share-toggle"><i class="fa fa-share-alt fa-3x"></i></div>
        <div id="menu-toggle"><i class="fa fa-bars fa-3x"></i></div>
        <div id="share-menu-toggle"><i class="fa fa-share-alt fa-3x"></i></div>
    </div>
    <nav id="share-menu" class="close">
        <ul>
		    <li class="tweet sharewindow"><a href="https://twitter.com/share?url=<?php echo get_meta_url();?>&amp;text=<?php echo'txt';?><?php if(get_twitter_acount()!==null):echo '&amp;via=' . get_twitter_acount();endif;?>" target="_blank"><i class="fa fa-twitter fa-5x" aria-hidden="true"></i></a></li>
            <li class="fb-like sharewindow"><a href="http://www.facebook.com/share.php?u=<?php echo rawurlencode(get_meta_url());?>" target="_blank"><i class="fa fa-thumbs-up fa-5x" aria-hidden="true"></i></a></li>
            <li class="line sharewindow"><a href="http://line.me/R/msg/text/?<?php echo'txt';?>%0D%0A<?php echo get_meta_url();?>" target="_blank"><i class="fa fa-comments fa-5x" aria-hidden="true"></i></a></li>
            <li class="reddit sharewindow"><a href="https://www.reddit.com/submit?url=<?php echo get_meta_url();?>" target="_blank"><i class="fa fa-reddit-alien fa-5x" aria-hidden="true"></i></a></li>
            <li class="g-plus sharewindow"><a href="https://plus.google.com/share?url=<?php echo get_meta_url();?>" target="_blank"><i class="fa fa-google-plus-official fa-5x" aria-hidden="true"></i></a></li>
            <li class="linkedin sharewindow"><a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo get_meta_url();?>&amp;title=<?php echo'txt';?>" target="_blank"><i class="fa fa-linkedin-square fa-5x" aria-hidden="true"></i></a></li>
            <li class="pinterest"><a href="http://pinterest.com/pin/create/button/?url=<?php echo get_meta_url();?>&amp;media=<?php meta_image();?>"><i class="fa fa-pinterest fa-5x" aria-hidden="true"></i></a></li>
            <li class="evernote"><a href="#" onclick="Evernote.doClip({url:'<?php meta_url();?>',providerName:'<?php bloginfo('name');?>',title:'<?php the_title();?>',contentId:'post-<?php the_ID();?>',}); return false;"><i class="fa fa-sticky-note-o fa-5x" aria-hidden="true"></i></a></li>
            <li class="pocket sharewindow"><a href="http://getpocket.com/edit?url=<?php echo get_meta_url();?>&amp;title=<?php echo'txt';?>" target="_blank"><i class="fa fa-get-pocket fa-5x" aria-hidden="true"></i></a></li>
            <li class="hatebu"><a href="http://b.hatena.ne.jp/add?mode=confirm&url=<?php echo get_meta_url();?>&amp;title=<?php echo'txt';?>" target="_blank">B!</a></li>
            <li class="tumblr sharewindow"><a href="https://www.tumblr.com/widgets/share/tool?canonicalUrl=<?php echo get_meta_url();?>" target="_blank"><i class="fa fa-tumblr fa-5x" aria-hidden="true"></i></a></li>
            <li class="embedly sharewindow"><a href="http://cdn.embedly.com/widgets/embed?url=<?php echo get_meta_url();?>" target="_blank"></a></li>
        </ul>
    </nav>
    <div id="main-menu" class="close">
        <nav class="admin-navigation" role="navigation">
            <?php if(is_user_logged_in()):?>
                <a href="<?php echo esc_url(home_url());?>/wp-login.php?loggedout=true" target="_blank" class="logout"></a><a href="<?php echo esc_url(home_url());?>/wp-admin/post-new.php" target="_blank" class="addnew"></a><?php edit_post_link();?><a href="wlw://wkwkrnht.gegahost.net/?postid=<?php echo the_ID();?>" class="wlwedit"></a><a href="<?php echo esc_url(home_url());?>/wp-admin/" target="_blank" class="adminmenu"></a>
            <?php endif;?>
        </nav>
	    <?php if(has_nav_menu('social')):?>
            <nav class="social-nav" role="navigation">
                <li><a href="<?php echo esc_url(home_url());?>/wp-login.php" target="_blank" class="login"></a></li><?php wp_nav_menu(array('theme_location'=>'social','depth'=>1,'link_before'=>'<span class="screen-reader-text">','link_after'=>'</span>',));?>
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
    <?php //require(get_template_directory() . '/js/script.php');?>
    <script type='text/javascript' src='//ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js'></script>
    <script>
        window.jQuery || document.write('<script src="<?php echo includes_url();?>js/jquery/jquery.js"><\/script>');
        document.body.addEventListener("click",drop,false);function drop(e){var x = e.pageX;var y = e.pageY;var sizuku = document.createElement("div");sizuku.style.top = y + "px";sizuku.style.left = x + "px";document.body.appendChild(sizuku);sizuku.className = "sizuku";sizuku.addEventListener("animationend",function(){this.parentNode.removeChild(this);},false);};
        jQuery(function(){jQuery('#menu-toggle').click(function(){jQuery('#main-menu').toggleClass('close');jQuery('#main-menu').toggleClass('open');});});
        jQuery(function(){jQuery('#share-toggle').click(function(){jQuery('#share-menu').toggleClass('close');jQuery('#share-menu').toggleClass('open');});});
        jQuery(function(){jQuery('#share-menu-toggle').click(function(){jQuery('#share-menu').toggleClass('close');jQuery('#share-menu').toggleClass('open');});});
    </script>
    <?php wp_footer();?>
</body>
</html>
