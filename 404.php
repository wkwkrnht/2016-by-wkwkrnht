<?php get_header();?>
<?php wkwkrnht_special_card();?>
<div class="article-list">
    <section class="card 404-card">
        <h2>キーワードから検索</h2>
        <?php get_search_form();?>
    </section>
    <section class="card 404-card">
        <h2>カテゴリから検索</h2>
        <?php wp_tag_cloud(array('taxonomy'=>'category',));?>
    </section>
    <section class="card 404-card">
        <h2>タグから検索</h2>
        <?php wp_tag_cloud(array('taxonomy'=>'post_tag',));?>
    </section>
    <?php if(is_active_sidebar('404')){dynamic_sidebar('404');}?>
</div>
<?php get_footer();?>
