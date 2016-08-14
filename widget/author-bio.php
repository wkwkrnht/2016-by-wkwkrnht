<style>
    .bio-wrapper{display:block;}
    .bio-wrapper img{float:left;}
    .bio-main{max-width:60%;float:right;}
    .bio-name{font-size:2rem;text-align:center;vertical-align:middle;}
    .follow-button{display:flex;flex-wrap:nowrap;justify-content:space-between;align-items:center;}
</style>
<a href="<?php echo site_url() . '?author=' . get_the_author_meta('ID');?>" class="bio-wrapper card info-card">
    <?php echo get_avatar(get_the_author_meta('ID'),256);?>
    <div class="bio-main">
        <h1 class="bio-name"><?php the_author_meta('display_name');?></h1><br>
        <p class="bio-description"><?php the_author_meta('user_description');?></p>
        <ul class="follow-button">
            <li><?php $tw = '';$tw = get_the_author_meta('twitter');if($tw!==''){echo $tw;}?></li>
            <li><?php $fb = '';$fb = get_the_author_meta('facebook');if($fb!==''){echo $fb;}?></li>
            <li><?php $gp = '';$gp = get_the_author_meta('Googleplus');if($gp!==''){echo $gp;}?></li>
            <li><?php $ld = '';$ld = get_the_author_meta('Linkedin');if($ld!==''){echo $ld;}?></li>
            <li><?php $line = '';$line = get_the_author_meta('LINE');if($line!==''){echo $line;}?></li>
            <li><?php $Quita = '';$Quita = get_the_author_meta('Quita');if($Quita!==''){echo $Quita;}?></li>
            <li><?php $Github = '';$Github = get_the_author_meta('Github');if($Github!==''){echo $Github;}?></li>
        </ul>
    </div>
</a>
