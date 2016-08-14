<style>
    .bio-wrapper{display:block;}
    .bio-name{font-size:2rem;text-align:center;vertical-align:middle;}
    .follow-button{list-style:none;}
</style>
<a href="<?php echo site_url() . '?author=' . get_the_author_meta('ID');?>" class="bio-wrapper card info-card">
    <?php echo get_avatar(get_the_author_meta('ID'),256);?>
    <div class="bio-main">
        <span class="bio-name"><?php the_author_meta('display_name');?></span><br>
        <p class="bio-description"><?php the_author_meta('user_description');?></p>
        <ul class="follow-button">
            <li><?php $tw = '';$tw = get_the_author_meta('twitter');if($tw!==''){echo'<a href="https://twitter.com/' . $tw . '"><i class="fa fa-twitter-square" aria-hidden="true"></i></a>';}?></li>
            <li><?php $fb = '';$fb = get_the_author_meta('facebook');if($fb!==''){echo'<a href="https://www.facebook.com/profile.php?id=' . $fb . '"><i class="fa fa-facebook-official" aria-hidden="true"></i></a>';}?></li>
            <li><?php $gp = '';$gp = get_the_author_meta('Googleplus');if($gp!==''){echo'<a href="https://plus.google.com/u/0/' . $gp . '"><i class="fa fa-google-plus-official" aria-hidden="true"></i></a>';}?></li>
            <li><?php $ld = '';$ld = get_the_author_meta('Linkedin');if($ld!==''){echo'<a href="https://jp.linkedin.com/in/' . $ld . '"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a>';}?></li>
            <li><?php $line = '';$line = get_the_author_meta('LINE');if($line!==''){echo $line;}?></li>
            <li><?php $Quita = '';$Quita = get_the_author_meta('Quita');if($Quita!==''){echo $Quita;}?></li>
            <li><a href="https://github.com/<?php $Github = '';$Github = get_the_author_meta('Github');if($Github!==''){echo $Github;}?>"></a></li>
        </ul>
    </div>
</a>
