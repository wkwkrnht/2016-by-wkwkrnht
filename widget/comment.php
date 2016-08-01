<?php if(post_password_required()){return;}?>
<style>
    .comment{min-height:10vmin;width:90%;margin:5vmin auto;padding:4vmin 3vmin;border-radius:5px;font-size:1.8rem;background-color:#fff;box-shadow:0 0 15px rgba(0,0,0,.3);}
    .comment-title{min-height:2.2rem;width:80%;font-size:2rem;line-height:2rem;color:#fff;background-color:#03a9f4;box-shadow:0 0 15px rgba(0,0,0,.3);}
    .comment-title::after{content:'<?php echo get_comments_number();?>';display:inline-block;height:2em;width:2em;border-radius:50%;margin:-50% -50% 0 0;font-size:2rem;line-height:2rem;color:#fff;background-color:#00bcd4;box-shadow:3px 0 5px rgba(0,0,0,.3);}
    .comment-list{list-style-type:none;}
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
