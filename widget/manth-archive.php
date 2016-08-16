<style>
    .widget_wkwkrnht_manth_archive{max-width:80%;margin:5vh auto;}
    .widget_wkwkrnht_manth_archive ul{list-style:none;}
    .widget_wkwkrnht_manth_archive .list-year{margin:1em auto;background-color:#03a9f4;border:1px solid #03a9f4;}
    .widget_wkwkrnht_manth_archive .list-year h3{text-align:center;}
    .widget_wkwkrnht_manth_archive .list-year h3 a{font-size:1.8rem;color:#fff;text-decoration:none;}
    .widget_wkwkrnht_manth_archive .article-list{list-style:none;margin-top:1em;background-color:#fff;display:flex;flex-wrap:wrap;justify-content:flex-start;align-items:center;}
    .widget_wkwkrnht_manth_archive .article-list li{display:inline-block;font-size:1.6rem;height:2em;width:4.5em;text-align:center;}
    .widget_wkwkrnht_manth_archive .article-list li a{text-decoration:none;}
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
$archives_year = strip_tags(wp_get_archives('type=yearly&show_count=0&format=custom&echo=0'));
$archives_year = explode("\n",$archives_year);
array_pop($archives_year);

$archives = wp_get_archives('type=monthly&show_post_count=1&use_desc_for_title=0&echo=0');
$archives = explode("\n",$archives);

echo'<ul>';
foreach ($archives_year as $year_value){
    echo'<li class="list-year"><h3><a href="' . get_bloginfo('url') . '/' . ltrim($year_value) . '">' . ltrim($year_value) . '年</a></h3>';
    echo'<ul class="article-list">';
    foreach($archives as $archives_value){
        if(intval(strip_tags($archives_value)) == intval($year_value)){
            echo  str_replace(intval($year_value).'年','',ltrim($archives_value));
        }
    }
    echo'</ul></li>';
}
echo'</ul>';
?>