<style>
    .bio-wrapper{display:block;}
    .bio-name{font-size:2rem;text-align:center;vertical-align:middle;}
    .follow-button{list-style:none;overflow-x:auto;overflow-y:hidden;}
    .follow-button li{display:inline-block;padding:0 .5em;text-align:center;vertical-align:middle;}
</style>
<section class="bio-wrapper card info-card">
    <?php echo get_avatar(get_the_author_meta('ID'),256);?>
    <div class="bio-main">
        <a href="<?php echo site_url() . '?author=' . get_the_author_meta('ID');?>" title="<?php the_author_meta('display_name');?>'s summary">
            <h2 class="bio-name"><?php the_author_meta('display_name');?></h2><br>
            <p class="bio-description"><?php the_author_meta('user_description');?></p>
        </a>
        <ul class="follow-button">
            <?php $tw = '';$tw = get_the_author_meta('twitter');if($tw!==''){echo'<li><a href="https://twitter.com/' . $tw . '"><i class="fa fa-twitter-square fa-3x" aria-hidden="true"></i></a></li>';}?>
            <?php $fb = '';$fb = get_the_author_meta('facebook');if($fb!==''){echo'<li><a href="https://www.facebook.com/profile.php?id=' . $fb . '"><i class="fa fa-facebook-official fa-3x" aria-hidden="true"></i></a></li>';}?>
            <?php $gp = '';$gp = get_the_author_meta('Googleplus');if($gp!==''){echo'<li><a href="https://plus.google.com/u/0/' . $gp . '"><i class="fa fa-google-plus-official fa-3x" aria-hidden="true"></i></a></li>';}?>
            <?php $ld = '';$ld = get_the_author_meta('Linkedin');if($ld!==''){echo'<li><a href="https://jp.linkedin.com/in/' . $ld . '"><i class="fa fa-linkedin-square fa-3x" aria-hidden="true"></i></a></li>';}?>
            <?php $line = '';$line = get_the_author_meta('LINE');if($line!==''){echo'<li>' . $line . '</li>';}?>
            <?php $Quita = '';$Quita = get_the_author_meta('Quita');if($Quita!==''){echo'<li><a href="http://qiita.com/' . $Quita . '">' . $Quita . '</a>';}?></li>
            <?php $Github = '';$Github = get_the_author_meta('Github');if($Github!==''){echo'<li><a href="https://github.com/' . $Github . '"><i class="fa fa-github fa-3x" aria-hidden="true"></i></a></li>';}?>
        </ul>
    </div>
</section>
