<?php get_header();?>
<?php wkwkrnht_special_card();?>
<section class="card">
    <h2>404 Not Found</h2>
    <p>このサイトにはお探しのものはございません。お手数を掛けますが、以下から再度お探しください。</p>
</section>
<section class="card">
    <h2>キーワードから検索</h2>
    <?php get_search_form();?>
</section>
<section class="card">
    <h2>カテゴリから検索</h2>
    <?php wp_tag_cloud(array('taxonomy' => 'category',));?>
</section>
<section class="card">
    <h2>タグから検索</h2>
    <?php wp_tag_cloud(array('taxonomy' => 'post_tag',));?>
</section>
<ul class="widget-area">
    <?php dynamic_sidebar('singularfooter');?>
</ul>
<?php get_footer();?>
