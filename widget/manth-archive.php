<style>

</style>
<?php
/*
1.年を抽出して配列に格納
    年数ごとに配列$archives_year_arrayに格納
    配列内の最後に空の配列ができてるので削除
2.アーカイブ一覧を取得して配列に格納
    月別アーカイブを取得
    同様に改行ごとに配列に格納
3.1で抽出した年数分繰り返し
    <li><a href="/year">で年を表示
    月別アーカイブ数分繰り返し
        1で取得した年と、2の各月別アーカイブの文字列を比較
        2の月別アーカイブの各行のhtmlからYYYY年部分を除去して表示。
*/
$archives_year       = strip_tags(wp_get_archives('type=yearly&show_count=0&format=custom&echo=0'));
$archives_year_array = split('\n',$archives_year);
array_pop($archives_year_array);

$archives       = wp_get_archives('type=monthly&show_post_count=1&use_desc_for_title=0&echo=0');
$archives_array = split('\n',$archives);

echo'<ul>\n';
foreach ($archives_year_array as $year_value){
    echo'<li><a href="' . get_bloginfo('url') . '/' . ltrim($year_value) . '">' . ltrim($year_value) . '年</a>\n';
    echo'<ul class="cl">' . '\n';
    foreach($archives_array as $archives_value){
        if(intval(strip_tags($archives_value)) == intval($year_value)){
            echo  str_replace(intval($year_value).'年','',ltrim($archives_value)) . '\n';
        }
    }
    echo'</ul></li>';
}
echo'</ul>';
?>
