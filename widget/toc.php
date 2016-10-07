<?php
require_once(get_template_directory() . '/inc/Goutte/Client.php');
$client           = new Client();
$crawler          = $client->request('GET',the_permalink());
$h1_number_array  = array();
$h1_number        = $crawler->filter('h1::before')->each(function($node){$h1_number_array[] = $node->title();});
$h2_number_array  = array();
$h2_number        = $crawler->filter('h2::before')->each(function($node){$h2_number_array[] = $node->title();});
$h3_number_array  = array();
$h3_number        = $crawler->filter('h3::before')->each(function($node){$h3_number_array[] = $node->title();});
$h4_number_array  = array();
$h4_number        = $crawler->filter('h4::before')->each(function($node){$h4_number_array[] = $node->title();});
$h5_number_array  = array();
$h5_number        = $crawler->filter('h5::before')->each(function($node){$h5_number_array[] = $node->title();});
$h6_number_array  = array();
$h6_number        = $crawler->filter('h6::before')->each(function($node){$h6_number_array[] = $node->title();});
var_dump($h2_number_array);
?>
