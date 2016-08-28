<div id="search">
<form method="get" action="<?php bloginfo( 'url' ); ?>">
    <p>検索</p>
    <input name="s" id="s" type="text" />
    <?php wp_dropdown_categories('depth=0&orderby=name&hide_empty=1&show_option_all=カテゴリー選択');?>
    <?php $tags = get_tags();if($tags):?>
        <select name='tag' id='tag'>
        <option value="" selected="selected">タグ選択</option>
        <?php foreach($tags as $tag):?>
            <option value="<?php echo esc_html($tag->slug);?>"><?php echo esc_html($tag->name);?></option>
        <?php endforeach;?>
        </select>
    <?php endif; ?>
    <input id="submit" type="submit" value="検索">
</form>
</div>
