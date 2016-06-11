    </main>
    <div class="toggle-zone">
        <div id="share-toggle"><i class="fa fa-share-alt fa-3x"></i></div>
        <div id="menu-toggle"><i class="fa fa-bars fa-3x"></i></div>
        <div id="share-menu-toggle"><i class="fa fa-share-alt fa-3x"></i></div>
    </div>
    <nav id="share-menu" class="close">
        <ul>
		    <li class="tweet sharewindow"><a href="https://twitter.com/share?url=<?php echo get_meta_url();?>&amp;text=<?php echo get_Page_Title();?>&amp;via=<?php the_author_meta('twitter');?>" target="_blank"><i class="fa fa-twitter fa-5x" aria-hidden="true"></i></a></li>
            <li class="fb-like sharewindow"><a href="http://www.facebook.com/share.php?u=<?php echo rawurlencode(get_meta_url());?>" target="_blank"><i class="fa fa-thumbs-up fa-5x" aria-hidden="true"></i></a></li>
            <li class="line sharewindow"><a href="http://line.me/R/msg/text/?<?php echo get_Page_Title();?>%0D%0A<?php echo get_meta_url();?>" target="_blank"><i class="fa fa-comments fa-5x" aria-hidden="true"></i></a></li>
            <li class="g-plus sharewindow"><a href="https://plus.google.com/share?url=<?php echo get_meta_url();?>" target="_blank"><i class="fa fa-google-plus-official fa-5x" aria-hidden="true"></i></a></li>
            <li class="linkedin sharewindow"><a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo get_meta_url();?>&amp;title=<?php echo get_Page_Title();?>" target="_blank"><i class="fa fa-linkedin-square fa-5x" aria-hidden="true"></i></a></li>
            <li class="hatebu"><a href="http://b.hatena.ne.jp/add?mode=confirm&url=<?php echo get_meta_url();?>&amp;title=<?php echo get_Page_Title();?>" target="_blank">B!</a></li>
            <li class="pocket sharewindow"><a href="http://getpocket.com/edit?url=<?php echo get_meta_url();?>&amp;title=<?php echo get_Page_Title();?>" target="_blank"><i class="fa fa-get-pocket fa-5x" aria-hidden="true"></i></a></li>
            <li class="pinterest"><a href="http://pinterest.com/pin/create/button/?url=<?php echo get_meta_url();?>&amp;media=<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID));?>"><i class="fa fa-pinterest fa-5x" aria-hidden="true"></i></a></li>
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
    <script type='text/javascript' src='//ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js'></script>
    <script>
        window.jQuery || document.write('<script src="<?php echo includes_url();?>js/jquery/jquery.js"><\/script>');
        document.body.addEventListener("click",drop,false);function drop(e){var x = e.pageX;var y = e.pageY;var sizuku = document.createElement("div");sizuku.style.top = y + "px";sizuku.style.left = x + "px";document.body.appendChild(sizuku);sizuku.className = "sizuku";sizuku.addEventListener("animationend",function(){this.parentNode.removeChild(this);},false);};
        jQuery(function(){jQuery('#menu-toggle').click(function(){jQuery('#main-menu').toggleClass('close');jQuery('#main-menu').toggleClass('open');});});
        jQuery(function(){jQuery('#share-toggle').click(function(){jQuery('#share-menu').toggleClass('close');jQuery('#share-menu').toggleClass('open');});});
        jQuery(function(){jQuery('#share-menu-toggle').click(function(){jQuery('#share-menu').toggleClass('close');jQuery('#share-menu').toggleClass('open');});});
        (function(){var shareButton=document.getElementsByClassName("sharewindow");for(var i=0;i<shareButton.length;i++){shareButton[i].addEventListener("click",function(e){e.preventDefault();window.open(this.href,"SNS_window","width=600,height=500,menubar=no,toolbar=no,scrollbars=yes");},false);}})()
    </script>
    <script>
        jQuery(function(){function tableData(){var index='';var headTxt='';jQuery('.article-main table').each(function(){jQuery(this).find('thead tr th').each(function(){index = jQuery(this).index()-1;headTxt = jQuery(this).text();jQuery(this).parents('table').find('tbody tr').each(function(){jQuery(this).find('td').eq(index).attr('data-th',headTxt);});});});}tableData();});
	</script>
    <script type='text/javascript' src='<?php echo get_stylesheet_directory_uri();?>/js/microlight.js'></script>
    <?php wp_footer();?>
</body>
</html>
