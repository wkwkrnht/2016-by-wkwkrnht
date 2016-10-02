<style>
    .page-nation{list-style:none;height:10vw;width:80vw;margin:5vmin auto;background-color:<?php echo get_option('page_nation_background','#fff');?>;box-shadow:0 0 15px rgba(0,0,0,.3);display:flex;flex-wrap:wrap;justify-content:center;align-items:center;}
    .page-nation a,.page-nation .current,.page-nation li .dots{padding:2vmin;margin:0 .5vmin;border:solid .5vmin <?php echo get_option('page_nation_border','#03a9f4');?>;font-weight:bold;}
    .page-nation a,.page-nation li .dots{background-color:<?php echo get_option('page_nation_a_background','#fff');?>font-size:1.3rem;text-decoration:none;}
    .page-nation a{color:<?php echo get_option('page_nation_a_color','#03a9f4');?>;}
    .page-nation li .dots{color:<?php echo get_option('page_nation_dots_color','#333');?>;}
    .page-nation a:hover,.page-nation .current{color:<?php echo get_option('page_nation_hover_color','#fff');?>;background-color:<?php echo get_option('page_nation_hover_background','#03a9f4');?>;}
</style>
<?php
global $wp_query;
$big = 999999999;
$page_format = paginate_links(array(
    'base'      => str_replace($big,'%#%',esc_url(get_pagenum_link($big))),
    'format'    => '/page/%#%',
    'current'   => max(1,get_query_var('paged')),
    'total'     => $wp_query->max_num_pages,
    'prev_next' => True,
    'prev_text' => '<',
    'next_text' => '>',
    'type'      => 'array'
));
if(is_array($page_format)){
    $echo = '';
    $paged = (get_query_var('paged')==0) ? 1 : get_query_var('paged');
    foreach($page_format as $page){if($page===$paged){$echo .= "<li class='current'>$page</li>";}else{$echo .= "<li>$page</li>";}}
    echo'<ul class="page-nation">' . $echo . '</ul>';
}
wp_reset_query();?>
