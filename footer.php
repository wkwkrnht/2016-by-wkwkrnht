    </main>
    <div class="toggle-zone">
        <div id="share-toggle"><i class="fa fa-share-alt"></i></div>
        <div id="menu-toggle"><i class="fa fa-bars"></i></div>
        <div id="share-menu-toggle"><i class="fa fa-share-alt"></i></div>
    </div>
    <nav id="share-menu" class="close">
        <ui>
		    <li><a class="tweet"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
            <li><a class="fb-like"><i class="fa fa-thumbs-up" aria-hidden="true"></i></a></li>
            <li><a class="line"><i class="fa fa-comments" aria-hidden="true"></i></a></li>
            <li><a class="g-plus"><i class="fa fa-google-plus-official" aria-hidden="true"></i></a></li>
            <li><a class="linkedin"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>
            <li><a class="hatebu">B!</a></li>
            <li><a class="pocket"><i class="fa fa-get-pocket" aria-hidden="true"></i></a></li>
            <li><a class="pinterest"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
            <li><a class="tumblr"><i class="fa fa-tumblr" aria-hidden="true"></i></a></li>
            <li><a class="embedly"></a></li>
        </ui>
    </nav>
    <div id="main-menu" class="close">
        <nav class="admin-navigation" role="navigation">
            <?php if(is_user_logged_in()):?>
                <a href="<?php echo esc_url(home_url());?>/wp-login.php?loggedout=true" target="_blank" class="logout"></a><a href="<?php echo esc_url(home_url());?>/wp-admin/post-new.php" target="_blank" class="addnew"></a><?php edit_post_link();?><a href="wlw://wkwkrnht.gegahost.net/?postid=<?php echo the_ID();?>" class="wlwedit"></a><a href="<?php echo esc_url(home_url());?>/wp-admin/" target="_blank" class="adminmenu"></a>
            <?php endif;?>
        </nav>
	    <?php if(has_nav_menu('social')):?>
            <nav class="social-nav" role="navigation">
                <a href="<?php echo esc_url(home_url());?>/wp-login.php" target="_blank" class="login"></a><?php wp_nav_menu(array('theme_location'=>'social','depth'=>1,'link_before'=>'<span class="screen-reader-text">','link_after'=>'</span>',));?>
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
        jQuery(function(){function tableData(){var index='';var headTxt='';jQuery('.article-main table').each(function(){jQuery(this).find('thead tr th').each(function(){index = jQuery(this).index()-1;headTxt = jQuery(this).text();jQuery(this).parents('table').find('tbody tr').each(function(){jQuery(this).find('td').eq(index).attr('data-th',headTxt);});});});}tableData();});
	</script>
    <script type='text/javascript' src='<?php echo get_stylesheet_directory_uri();?>/js/microlight.js'></script>
    <?php wp_footer();?>
</body>
</html>
