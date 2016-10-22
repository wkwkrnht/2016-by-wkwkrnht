<?php
$year            = get_first_post_year();
$blogname        = get_bloginfo('name');
$sitedescription = get_bloginfo('description');
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
    <span class="copyright"><span itemprop="copyrightHolder" itemscope itemtype="http://schema.org/Organization"><span itemprop="name">' . $blogname . '</span></span> &copy;<span itemprop="copyrightYear">' . $year . '</span></span>
</header>';?>
