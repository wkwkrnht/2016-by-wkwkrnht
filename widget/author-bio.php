<style>
    .bio-wrapper{display:block;position:absolute;}
    .bio-img{position:absolute;top:0;left:0;}
    .bio-info{position:absolute;top:0;right:0;}
    .bio-name{font-size:2.3rem;text-align:center;vertical-align:middle;}
    .bio-description{font-size:1.6rem;}
    .follow-button{position:absolute;bottom:0;list-style:none;overflow-x:auto;overflow-y:hidden;}
    .follow-button li{display:inline-block;height:2em;width:2em;padding:.5em;border-radius:3vmin;text-align:center;vertical-align:middle;box-shadow:0 0 2vmin rgba(0,0,0,.3);}
</style>
<header class="bio-wrapper card info-card" <?php if(is_author()===true){echo'itemscope itemtype="http://schema.org/WPHeader"';}?>>
    <?php echo get_avatar(get_the_author_meta('ID'),256,'','bio-img',array('class'=>'bio-img'));?>
    <a class="bio-info" href="<?php echo home_url() . '?author=' . get_the_author_meta('ID');?>" tabindex="0" title="<?php the_author_meta('display_name');?>'s summary"<?php if(is_author()===true){echo'itemprop="copyrightHolder" itemscope itemtype="http://schema.org/Organization"';}?>>
        <h2 class="bio-name" <?php if(is_author()===true){echo'itemprop="name"';}?>><?php the_author_meta('display_name');?></h2><br>
        <p class="bio-description" <?php if(is_author()===true){echo'itemprop="about"';}?>><?php the_author_meta('user_description');?></p>
    </a>
    <ul class="follow-button" itemscope itemtype=”http://schema.org/SiteNavigationElement”>
        <?php $tw = '';$tw = get_the_author_meta('twitter');if($tw!==''){echo'<li><a href="https://twitter.com/' . $tw . '" class="twitter" tabindex="0" itemprop=”url”><i class="fa fa-twitter-square fa-3x" aria-hidden="true"></i></a></li>';}?>
        <?php $fb = '';$fb = get_the_author_meta('facebook');if($fb!==''){echo'<li><a href="https://www.facebook.com/profile.php?id=' . $fb . '" class="facebook" tabindex="0" itemprop=”url”><i class="fa fa-facebook-official fa-3x" aria-hidden="true"></i></a></li>';}?>
        <?php $Instagram = '';$Instagram = get_the_author_meta('Instagram');if($Instagram!==''){echo'<li><a href="https://www.instagram.com/' . $Instagram . '" class="instagram" tabindex="0" itemprop=”url”></a></li>';}?>
        <?php $line = '';$line = get_the_author_meta('LINE');if($line!==''){echo'<li>' . $line . '</li>';}?>
        <?php $gp = '';$gp = get_the_author_meta('Googleplus');if($gp!==''){echo'<li><a href="https://plus.google.com/u/0/' . $gp . '" class="google-plus" tabindex="0" itemprop=”url”><i class="fa fa-google-plus-official fa-3x" aria-hidden="true"></i></a></li>';}?>
        <?php $ld = '';$ld = get_the_author_meta('Linkedin');if($ld!==''){echo'<li><a href="https://jp.linkedin.com/in/' . $ld . '" class="linkedin" tabindex="0" itemprop=”url”><i class="fa fa-linkedin-square fa-3x" aria-hidden="true"></i></a></li>';}?>
        <?php $vine = '';$vine = get_the_author_meta('vine');if($vine!==''){echo'<li><a href="' . $vine . '" class="vine" tabindex="0" itemprop=”url”><i class="fa fa-vine" aria-hidden="true"></i></a></li>';}?>
        <?php $vimeo = '';$vimeo = get_the_author_meta('vimeo');if($vimeo!==''){echo'<li><a href="' . $vimeo . '" class="vimeo" tabindex="0" itemprop=”url”><i class="fa fa-vimeo-square" aria-hidden="true"></i></a></li>';}?>
        <?php $niconico = '';$niconico = get_the_author_meta('niconico');if($niconico!==''){echo'<li><a href="' . $niconico . '" class="nicnico" tabindex="0" itemprop=”url”><i class="fa fa-television" aria-hidden="true"></i></a></li>';}?>
        <?php $YouTube = '';$YouTube = get_the_author_meta('YouTube');if($YouTube!==''){echo'<li><a href="https://youtube.com/channel/' . $YouTube . '" class="youtube" tabindex="0" itemprop=”url”><i class="fa fa-youtube-square" aria-hidden="true"></i></a></li>';}?>
        <?php $Twitch = '';$Twitch = get_the_author_meta('Twitch');if($Twitch!==''){echo'<li><a href="' . $Twitch . '" class="twitch" tabindex="0" itemprop=”url”><i class="fa fa-twitch" aria-hidden="true"></i></a></li>';}?>
        <?php $USTREAM = '';$USTREAM = get_the_author_meta('USTREAM');if($USTREAM!==''){echo'<li><a href="' . $USTREAM . '" class="ustream" tabindex="0" itemprop=”url”></a></li>';}?>
        <?php $fc2 = '';$fc2 = get_the_author_meta('fc2');if($fc2!==''){echo'<li><a href="' . $fc2 . '" class="fc2" tabindex="0" itemprop=”url”></a></li>';}?>
        <?php $livedoor = '';$livedoor = get_the_author_meta('livedoor');if($livedoor!==''){echo'<li><a href="' . $livedoor . '" class="livedoor" tabindex="0" itemprop=”url”></a></li>';}?>
        <?php $ameba = '';$ameba = get_the_author_meta('ameba');if($ameba!==''){echo'<li><a href="' . $ameba . '" class="ameba" tabindex="0" itemprop=”url”></a></li>';}?>
        <?php $mixi = '';$mixi = get_the_author_meta('mixi');if($mixi!==''){echo'<li><a href="' . $mixi . '" class="mixi" tabindex="0" itemprop=”url”></a></li>';}?>
        <?php $hatenablog = '';$hatenablog = get_the_author_meta('hatenablog');if($hatenablog!==''){echo'<li><a href="' . $hatenablog . '" tabindex="0" itemprop=”url”>' . $hatenablog . '</a></li>';}?>
        <?php $hatenadiary = '';$hatenadiary = get_the_author_meta('hatenadiary');if($hatenadiary!==''){echo'<li><a href="' . $hatenadiary . '" tabindex="0" itemprop=”url”>' . $hatenadiary . '</a></li>';}?>
        <?php $hatebu = '';$hatebu = get_the_author_meta('hatebu');if($hatebu!==''){echo'<li><a href="' . $hatebu . '" tabindex="0" itemprop=”url”></a></li>';}?>
        <?php $xda = '';$xda = get_the_author_meta('xda');if($xda!==''){echo'<li><a href="' . $xda . '" class="xda" tabindex="0" itemprop=”url”></a></li>';}?>
        <?php $Quita = '';$Quita = get_the_author_meta('Quita');if($Quita!==''){echo'<li><a href="http://qiita.com/' . $Quita . '" tabindex="0" itemprop=”url”>' . $Quita . '</a>';}?></li>
        <?php $Github = '';$Github = get_the_author_meta('Github');if($Github!==''){echo'<li><a href="https://github.com/' . $Github . '" tabindex="0" itemprop=”url”><i class="fa fa-github fa-3x" aria-hidden="true"></i></a></li>';}?>
        <?php $Codepen = '';$Codepen = get_the_author_meta('Codepen');if($Codepen!==''){echo'<li><a href="' . $Codepen . '" tabindex="0" itemprop=”url”></a></li>';}?>
        <?php $JSbuddle = '';$JSbuddle = get_the_author_meta('JSbuddle');if($JSbuddle!==''){echo'<li><a href="' . $JSbuddle . '" tabindex="0" itemprop=”url”></a></li>';}?>
        <?php $Amazonlist = '';$Amazonlist = get_the_author_meta('Amazonlist');if($Amazonlist!==''){echo'<li><a href="' . $Amazonlist . '" tabindex="0" itemprop=”url”><i class="fa fa-amazon" aria-hidden="true"></i></a></li>';}?>
        <?php $Yahooaction = '';$Yahooaction = get_the_author_meta('Yahooaction');if($Yahooaction!==''){echo'<li><a href="' . $Yahooaction . '" tabindex="0" itemprop=”url”>Y!</a></li>';}?>
        <?php $Rakuma = '';$Rakuma = get_the_author_meta('Rakuma');if($Rakuma!==''){echo'<li><a href="' . $Rakuma . '" tabindex="0" itemprop=”url”>rakuma</a></li>';}?>
        <?php $Merukari = '';$Merukari = get_the_author_meta('Merukari');if($Merukari!==''){echo'<li><a href="' . $Merukari . '" tabindex="0" itemprop=”url”>merukari</a></li>';}?>
    </ul>
</header>
