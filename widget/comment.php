<?php if(post_password_required()){return;}?>
<style>
    .comment{min-height:10vmin;width:90%;margin:5vmin auto;padding:4vmin 3vmin;border-radius:5px;font-size:1.8rem;background-color:#fff;box-shadow:0 0 15px rgba(0,0,0,.3);}
    .comment-title{height:10%;width:80%;margin:0 auto;font-size:2rem;text-align:center;color:#fff;background-color:#03a9f4;box-shadow:0 0 15px rgba(0,0,0,.3);}
    .comment-list{list-style-type:none;}
    .comment-list li{box-shadow:0 0 0 rgba(0,0,0,0);}
    .comment-respond{width:80%;margin:0 auto;}
    .comment-form-comment label{display:none;}
    .comment-form-comment textarea{max-width:inherit;}
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
