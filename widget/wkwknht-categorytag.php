<style>
</style>
<?php
$tags = get_tags();
$tag_echo = '';
foreach($tags as $tag):
    $tag_echo .= '<option value="' . esc_html($tag->slug) . '">' . esc_html($tag->name) . '</option>';
endforeach;
?>
<div id="search">
    <form method="get" action="<?php echo esc_url(home_url());?>">
        <?php wp_dropdown_categories('depth=0&orderby=name&echo=0&hide_empty=1&show_option_all=カテゴリー');?>
        <select name="tag" id="tag">
            <option value="" selected="selected">タグ</option>
            <?php echo $tag_echo;?>
        </select>
        <input id="submit" type="submit" value="検索">
    </form>
</div>
