<style>
    .widget_wkwkrnht_manth_archive{max-width:80%;margin:5vh auto;}
    .widget_wkwkrnht_manth_archive ul{list-style:none;}
    .widget_wkwkrnht_manth_archive .list-year{margin:1em auto;background-color:#03a9f4;border:1px solid #03a9f4;}
    .widget_wkwkrnht_manth_archive .list-year h3{text-align:center;}
    .widget_wkwkrnht_manth_archive .list-year h3 a{font-size:1.8rem;color:#fff;text-decoration:none;}
    .widget_wkwkrnht_manth_archive .article-list{list-style:none;padding:.75em 0;margin:1em 0;background-color:#fff;display:flex;flex-wrap:wrap;justify-content:flex-start;align-items:center;}
    .widget_wkwkrnht_manth_archive .article-list li{display:inline-block;font-size:1.6rem;height:2em;width:4.5em;text-align:center;}
    .widget_wkwkrnht_manth_archive .article-list li a{text-decoration:none;}
</style>
<?php
$archives_year = strip_tags(wp_get_archives('type=yearly&show_count=0&format=custom&echo=0'));
$archives_year = explode("\n",$archives_year);
array_pop($archives_year);

$archives = wp_get_archives('type=monthly&show_post_count=1&use_desc_for_title=0&echo=0');
$archives = explode("\n",$archives);

echo'<ul>';
foreach ($archives_year as $year_value){
    echo'<li class="list-year"><h3><a href="' . esc_url(home_url()) . '/' . ltrim($year_value) . '">' . ltrim($year_value) . '年</a></h3>';
    echo'<ul class="article-list">';
    foreach($archives as $archives_value){if(intval(strip_tags($archives_value)) == intval($year_value)){echo  str_replace(intval($year_value).'年','',ltrim($archives_value));}}
    echo'</ul></li>';
}
echo'</ul>';
?>
