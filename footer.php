    </main>
    <div class="toggle-zone">
        <label class="share-toggle fa fa-share-alt" for="share-check"><input id="share-check" type="checkbox" value="off"></label>
        <label class="menu-toggle fa fa-bars" for="menu-check"><input id="menu-check" type="checkbox" value="off"></label>
        <label class="share-toggle fa fa-share-alt" for="share-check"><input id="share-check" type="checkbox" value="off"></label>
    </div>
    <nav id="share-menu">
        <ui>
		    <li class="twitter"></li>
            <li class="fb-like"></li>
            <li class="line"></li>
            <li class="g-plus"></li>
            <li class="linkedin"></li>
            <li class="hatebu"></li>
            <li class="pocket"></li>
            <li class="pinterest"></li>
            <li class="tumblr"></li>
            <li class="embedly"></li>
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
        jquery(function(){function tableData(){var index ='';var headTxt ='';$('.article-main table').each(function(){$(this).find('thead tr th').each(function(){index = $(this).index()-1;headTxt = $(this).text();$(this).parents('table').find('tbody tr').each(function(){$(this).find('td').eq(index).attr('data-th',headTxt);});});});}tableData();});
        document.body.addEventListener("click"s drop,false);function drop(e){var x = e.pageX;var y = e.pageY;var sizuku = document.createElement("div");sizuku.style.top = y + "px";sizuku.style.left = x + "px";document.body.appendChild(sizuku);sizuku.className = "sizuku";sizuku.addEventListener("animationend",function(){this.parentNode.removeChild(this);},false);}
	</script>
    <?php wp_footer();?>
</body>
</html>
