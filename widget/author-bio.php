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
            <?php $Instagram = '';$Instagram = get_the_author_meta('Instagram');if($Instagram!==''){echo'<li><a href="https://www.instagram.com/' . $Instagram . '"></a></li>';}?>
            <?php $line = '';$line = get_the_author_meta('LINE');if($line!==''){echo'<li>' . $line . '</li>';}?>
            <?php $gp = '';$gp = get_the_author_meta('Googleplus');if($gp!==''){echo'<li><a href="https://plus.google.com/u/0/' . $gp . '"><i class="fa fa-google-plus-official fa-3x" aria-hidden="true"></i></a></li>';}?>
            <?php $ld = '';$ld = get_the_author_meta('Linkedin');if($ld!==''){echo'<li><a href="https://jp.linkedin.com/in/' . $ld . '"><i class="fa fa-linkedin-square fa-3x" aria-hidden="true"></i></a></li>';}?>
            <?php $vine = '';$vine = get_the_author_meta('vine');if($vine!==''){echo'<li>' . $vine . '</li>';}?>
            <?php $vimeo = '';$vimeo = get_the_author_meta('vimeo');if($vimeo!==''){echo'<li>' . $vimeo . '</li>';}?>
            <?php $niconico = '';$niconico = get_the_author_meta('niconico');if($niconico!==''){echo'<li><a href="' . $niconico . '"></a></li>';}?>
            <?php $YouTube = '';$YouTube = get_the_author_meta('YouTube');if($YouTube!==''){echo'<li><a href="https://youtube.com/channel/' . $YouTube . '"></a></li>';}?>
            <?php $Twitch = '';$Twitch = get_the_author_meta('Twitch');if($Twitch!==''){echo'<li>' . $Twitch . '</li>';}?>
            <?php $USTREAM = '';$USTREAM = get_the_author_meta('USTREAM');if($USTREAM!==''){echo'<li>' . $USTREAM . '</li>';}?>
            <?php $fc2 = '';$fc2 = get_the_author_meta('fc2');if($fc2!==''){echo'<li>' . $fc2 . '</li>';}?>
            <?php $livedoor = '';$livedoor = get_the_author_meta('livedoor');if($livedoor!==''){echo'<li>' . $livedoor . '</li>';}?>
            <?php $ameba = '';$ameba = get_the_author_meta('ameba');if($ameba!==''){echo'<li>' . $ameba . '</li>';}?>
            <?php $mixi = '';$mixi = get_the_author_meta('mixi');if($mixi!==''){echo'<li>' . $mixi . '</li>';}?>
            <?php $hatenablog = '';$hatenablog = get_the_author_meta('hatenablog');if($hatenablog!==''){echo'<li>' . $hatenablog . '</li>';}?>
            <?php $hatenadiary = '';$hatenadiary = get_the_author_meta('hatenadiary');if($hatenadiary!==''){echo'<li>' . $hatenadiary . '</li>';}?>
            <?php $hatebu = '';$hatebu = get_the_author_meta('hatebu');if($hatebu!==''){echo'<li>' . $hatebu . '</li>';}?>
            <?php $xda = '';$xda = get_the_author_meta('xda');if($xda!==''){echo'<li>' . $xda . '</li>';}?>
            <?php $Quita = '';$Quita = get_the_author_meta('Quita');if($Quita!==''){echo'<li><a href="http://qiita.com/' . $Quita . '">' . $Quita . '</a>';}?></li>
            <?php $Github = '';$Github = get_the_author_meta('Github');if($Github!==''){echo'<li><a href="https://github.com/' . $Github . '"><i class="fa fa-github fa-3x" aria-hidden="true"></i></a></li>';}?>
            <?php $Codepen = '';$Codepen = get_the_author_meta('Codepen');if($Codepen!==''){echo'<li>' . $Codepen . '</li>';}?>
            <?php $JSbuddle = '';$JSbuddle = get_the_author_meta('JSbuddle');if($JSbuddle!==''){echo'<li>' . $JSbuddle . '</li>';}?>
            <?php $Amazonlist = '';$Amazonlist = get_the_author_meta('Amazonlist');if($Amazonlist!==''){echo'<li><a href="' . $Amazonlist . '"></a></li>';}?>
            <?php $Yahooaction = '';$Yahooaction = get_the_author_meta('Yahooaction');if($Yahooaction!==''){echo'<li><a href="' . $Yahooaction . '"></a></li>';}?>
            <?php $Rakuma = '';$Rakuma = get_the_author_meta('Rakuma');if($Rakuma!==''){echo'<li><a href="' . $Rakuma . '"></a></li>';}?>
            <?php $Merukari = '';$Merukari = get_the_author_meta('Merukari');if($Merukari!==''){echo'<li><a href="' . $Merukari . '"></a></li>';}?>
        </ul>
    </div>
</section>
