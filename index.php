<?php get_header();?>
	<?php wkwkrnht_special_card();?>
	<div class="article-list">
    	<?php if(have_posts()):while(have_posts()):get_template_part('parts/card-list',get_post_format());endwhile;endif;?>
	</div>
	<div class="page-links">
		<?php wp_link_pages(array('link_before'=>'<span>','link_after' =>'</span>',));?>
	</div>
<?php get_footer();?>
