<?php if(post_password_required()===true){return;}elseif(is_singular()===true){wp_enqueue_script('comment-reply');}?>
<style>
    .comment{min-height:10vmin;width:90%;margin:5vmin auto;padding:4vmin 3vmin;border-radius:3vmin;font-size:1.8rem;background-color:<?php echo get_option('wkwkrnht_comment_background','#fff');?>;box-shadow:0 0 3vmin rgba(0,0,0,.2);}
    .comment-title{height:10%;width:80%;margin:0 auto;font-size:2rem;text-align:center;color:<?php echo get_option('wkwkrnht_comment_title_color','#fff');?>;background-color:<?php echo get_option('wkwkrnht_comment_title_background','#03a9f4');?>;box-shadow:0 0 3vmin rgba(0,0,0,.2);}
    .comment-list{list-style-type:none;}
    .comment-list li{box-shadow:none;}
    .comment-respond{width:80%;margin:0 auto;}
    .comment-form{max-width:100%;}
    .comment-form-comment textarea,.comment-form-author input,.comment-form-email input,.comment-form-url input{max-width:100%;}
    .night-mode .comment{background-color:#333;}
</style>
<div class="comment">
<?php if(have_comments()):?>
    <h3 class="comment-title">コメント</h3>
	<ul class="comment-list">
	    <?php wp_list_comments(array('avatar_size'=>96,'style'=>'ul','type'=>'comment',));?>
	</ul>
    <?php if(get_comment_pages_count() > 1):?>
        <ul class="comment-nav">
		    <li class="prev"><?php previous_comments_link('&lt;');?></li>
		    <li class="next"><?php next_comments_link('&gt;');?></li>
	    </ul>
    <?php endif;
endif;?>
<?php comment_form();?>
</div>
