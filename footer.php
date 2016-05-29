    </main>
    <div class="toggle-zone">
        <div id="share-toggle"><i class="fa fa-share-alt"></i></div>
        <div id="menu-toggle"><i class="fa fa-bars"></i></div>
        <div id="share-toggle"><i class="fa fa-share-alt"></i></div>
    </div>
    <nav id="share-menu">
        <ui>
		    <li><a class="twitter"></a></li>
            <li><a class="fb-like"></a></li>
            <li><a class="line"></a></li>
            <li><a class="g-plus"></a></li>
            <li><a class="linkedin"></a></li>
            <li><a class="hatebu"></a></li>
            <li><a class="pocket"></a></li>
            <li><a class="pinterest"></a></li>
            <li><a class="tumblr"></a></li>
            <li><a class="embedly"></a></li>
        </ui>
    </nav>
    <div id="main-menu">
        <nav class="admin-navigation" role="navigation">
            <?php if(is_user_logged_in()):?>
                <a href="<?php echo esc_url(home_url());?>/wp-login.php?loggedout=true" target="_blank" class="logout"></a><a href="<?php echo esc_url(home_url());?>/wp-admin/post-new.php" target="_blank" class="addnew"></a><?php edit_post_link();?><a href="wlw://wkwkrnht.gegahost.net/?postid=<?php echo the_ID();?>" class="wlwedit"></a><a href="<?php echo esc_url(home_url());?>/wp-admin/" target="_blank" class="adminmenu"></a>
            <?php endif;?>
        </nav>
	    <?php if(has_nav_menu('social')):?>
            <nav class="social-navigation" role="navigation">
                <a href="<?php echo esc_url(home_url());?>/wp-login.php" target="_blank" class="login"></a><?php wp_nav_menu(array('theme_location'=>'social','depth'=>1,'link_before'=>'<span class="screen-reader-text">','link_after'=>'</span>',));?>
            </nav>
        <?php endif;?>
        <?php if(has_nav_menu('primary')):?>
            <nav class="main-navigation" role="navigation">
                <?php wp_nav_menu(array('menu_class'=>'nav-menu','theme_location'=>'primary',));?>
            </nav>
        <?php endif;?>
        <?php if(is_active_sidebar('floatmenu')):?>
	        <ul class="widget-area">
		        <?php dynamic_sidebar('floatmenu');?>
            </ul>
        <?php endif;?>
    </div>
    <script>
        window.jQuery || document.write('<script src="<?php echo includes_url();?>js/jquery/jquery.js"><\/script>');
        jQuery(function(){var body = jQuery('body');jQuery('#share-toggle').on('click',function(){body.toggleClass('open');});});
        jQuery(function(){function tableData(){var index ='';var headTxt ='';jQuery('.article-main table').each(function(){jQuery(this).find('thead tr th').each(function(){index = jQuery(this).index()-1;headTxt = jQuery(this).text();jQuery(this).parents('table').find('tbody tr').each(function(){jQuery(this).find('td').eq(index).attr('data-th',headTxt);});});});}tableData();});
        document.body.addEventListener("click",drop,false);function drop(e){var x = e.pageX;var y = e.pageY;var sizuku = document.createElement("div");sizuku.style.top = y + "px";sizuku.style.left = x + "px";document.body.appendChild(sizuku);sizuku.className = "sizuku";sizuku.addEventListener("animationend",function(){this.parentNode.removeChild(this);},false);}
	</script>
    <?php wp_footer();?>
</body>
</html>
