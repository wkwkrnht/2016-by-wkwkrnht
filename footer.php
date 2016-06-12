    </main>
    <div class="toggle-zone">
        <div id="share-toggle"><i class="fa fa-share-alt fa-3x fa-middle"></i></div>
        <div id="menu-toggle"><i class="fa fa-bars fa-3x fa-middle"></i></div>
        <div id="share-menu-toggle"><i class="fa fa-share-alt fa-3x fa-middle"></i></div>
    </div>
    <nav id="share-menu" class="close">
        <ul>
		    <li class="tweet sharewindow"><a href="https://twitter.com/share?url=<?php echo get_meta_url();?>&amp;text=<?php echo'txt';?>&amp;via=<?php the_author_meta('twitter');?>" target="_blank"><i class="fa fa-twitter fa-5x fa-middle" aria-hidden="true"></i></a></li>
            <li class="fb-like sharewindow"><a href="http://www.facebook.com/share.php?u=<?php echo rawurlencode(get_meta_url());?>" target="_blank"><i class="fa fa-thumbs-up fa-5x fa-middle" aria-hidden="true"></i></a></li>
            <li class="line sharewindow"><a href="http://line.me/R/msg/text/?<?php echo'txt';?>%0D%0A<?php echo get_meta_url();?>" target="_blank"><i class="fa fa-comments fa-5x fa-middle" aria-hidden="true"></i></a></li>
            <li class="g-plus sharewindow"><a href="https://plus.google.com/share?url=<?php echo get_meta_url();?>" target="_blank"><i class="fa fa-google-plus-official fa-5x fa-middle" aria-hidden="true"></i></a></li>
            <li class="linkedin sharewindow"><a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo get_meta_url();?>&amp;title=<?php echo'txt';?>" target="_blank"><i class="fa fa-linkedin-square fa-5x fa-middle" aria-hidden="true"></i></a></li>
            <li class="hatebu"><a href="http://b.hatena.ne.jp/add?mode=confirm&url=<?php echo get_meta_url();?>&amp;title=<?php echo'txt';?>" target="_blank">B!</a></li>
            <li class="pocket sharewindow"><a href="http://getpocket.com/edit?url=<?php echo get_meta_url();?>&amp;title=<?php echo'txt';?>" target="_blank"><i class="fa fa-get-pocket fa-5x fa-middle" aria-hidden="true"></i></a></li>
            <li class="pinterest"><a href="http://pinterest.com/pin/create/button/?url=<?php echo get_meta_url();?>&amp;media=<?php meta_image();?>"><i class="fa fa-pinterest fa-5x fa-middle" aria-hidden="true"></i></a></li>
            <li class="tumblr sharewindow"><a href="https://www.tumblr.com/widgets/share/tool?canonicalUrl=<?php echo get_meta_url();?>" target="_blank"><i class="fa fa-tumblr fa-5x fa-middle" aria-hidden="true"></i></a></li>
            <li class="embedly sharewindow"><a href="http://cdn.embedly.com/widgets/embed?url=<?php echo get_meta_url();?>" target="_blank"></a></li>
        </ul>
    </nav>
    <div id="main-menu" class="close">
        <nav class="admin-navigation" role="navigation">
            <?php if(is_user_logged_in()):?>
                <a href="<?php echo esc_url(home_url());?>/wp-login.php?loggedout=true" target="_blank" class="logout"></a><a href="<?php echo esc_url(home_url());?>/wp-admin/post-new.php" target="_blank" class="addnew"></a><?php edit_post_link();?><a href="wlw://wkwkrnht.gegahost.net/?postid=<?php echo the_ID();?>" class="wlwedit"></a><a href="<?php echo esc_url(home_url());?>/wp-admin/" target="_blank" class="adminmenu"></a>
            <?php endif;?>
        </nav>
	    <?php if(has_nav_menu('social')):?>
            <nav class="social-nav" role="navigation">
                <li><a href="<?php echo esc_url(home_url());?>/wp-login.php" target="_blank" class="login"></a></li><?php wp_nav_menu(array('theme_location'=>'social','depth'=>1,'link_before'=>'<span class="screen-reader-text">','link_after'=>'</span>',));?>
            </nav>
        <?php endif;?>
        <?php if(has_nav_menu('main')):?>
            <nav class="main-nav" role="navigation">
                <?php wp_nav_menu(array('theme_location'=>'main',));?>
            </nav>
        <?php endif;?>
        <?php if(is_active_sidebar('floatmenu')):?>
	        <ul class="widget-area">
		        <?php dynamic_sidebar('floatmenu');?>
            </ul>
        <?php endif;?>
    </div>
    <script type='text/javascript' src='//ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js'></script>
    <script>
        window.jQuery || document.write('<script src="<?php echo includes_url();?>js/jquery/jquery.js"><\/script>');
        document.body.addEventListener("click",drop,false);function drop(e){var x = e.pageX;var y = e.pageY;var sizuku = document.createElement("div");sizuku.style.top = y + "px";sizuku.style.left = x + "px";document.body.appendChild(sizuku);sizuku.className = "sizuku";sizuku.addEventListener("animationend",function(){this.parentNode.removeChild(this);},false);};
        jQuery(function(){jQuery('#menu-toggle').click(function(){jQuery('#main-menu').toggleClass('close');jQuery('#main-menu').toggleClass('open');});});
        jQuery(function(){jQuery('#share-toggle').click(function(){jQuery('#share-menu').toggleClass('close');jQuery('#share-menu').toggleClass('open');});});
        jQuery(function(){jQuery('#share-menu-toggle').click(function(){jQuery('#share-menu').toggleClass('close');jQuery('#share-menu').toggleClass('open');});});
        //(function(){var shareButton=document.getElementsByClassName("sharewindow");for(var i=0;i<shareButton.length;i++){shareButton[i].addEventListener("click",function(e){e.preventDefault();window.open(this.href,"SNS_window","width=600,height=500,menubar=no,toolbar=no,scrollbars=yes");},false);}})()
        /*
            折り畳み式アーカイブウィジェット
        */
        /*(function($) {
            $(function() {
                var wgts = $(".widget_archive");//アーカイブウィジェット全てを取得
                //アーカイブウィジェットを1つずつ処理する
                wgts.each(function(i, el) {
                    wgt = $(el);
                    //日付表示＋投稿数か
                    var has_date_count = wgt.text().match(/\d+年\d+月\s\(\d+\)/);
                    //日付表示だけか
                    var has_date_only = wgt.text().match(/\d+年\d+月/) && !has_date_count;
                    //日付表示されているとき（ドロップダウン表示でない時）
                    if ( has_date_count || has_date_only ) {
                        var
                        clone = wgt.clone(),//アーカイブウィジェットの複製を作成
                        year = [];
                        //クローンはウィジェットが後にに挿入。クローンはcssで非表示
                        wgt.after(clone);
                        clone.attr("class", "archive_clone").addClass('hide');
                        var
                        acv = wgt; //ウィジェット
                        acvLi = acv.find("li"); //ウィジェット内のli全て
                        //ul.yearsをアーカイブウィジェット直下に追加してそのDOMを取得
                        var acv_years =  acv.append('<ul class="years"></ul>').find("ul.years");
                        //liのテキストから年がどこからあるかを調べる
                        acvLi.each(function(i) {
                            var reg = /(\d+)年(\d+)月/;
                            //日付表示＋投稿数か
                            if ( has_date_count ) {reg = /(\d+)年(\d+)月\s\((\d+)\)/;}
                            var dt = $(this).text().match(reg);
                            year.push(dt[1]);
                        });
                        $.unique(year); //重複削除
                        acvLi.unwrap(); //liの親のulを解除
                        //投稿年があるだけ中にブロックを作る
                        var
                        yearCount = year.length,
                        i = 0;
                        while (i < yearCount) {
                            acv_years.append("<li class='year_" + year[i] + "'><a class='year'>" + year[i] + "年</a><ul class='month'></ul></li>");
                            i++;
                        }
                        //作ったブロック内のulに内容を整形して移動
                        //オリジナルのクローンは順番に削除
                        var j = 0;
                        acvLi.each(function(i,el){
                            var reg = /(\d+)年(\d+)月/;
                            //日付表示＋投稿数か
                            if ( has_date_count ) {reg = /(\d+)年(\d+)月\s\((\d+)\)/;}
                            var
                            dt = $(this).text().match(reg),
                            href = $(this).find("a").attr("href");
                            //月の追加
                            var rTxt = "<li><a href='" + href + "'>" + "" + dt[2] + "月</a>";
                            //日付表示＋投稿数か
                            if ( has_date_count ) {rTxt += " (" + dt[3] + ")" + "</li>"; //投稿数の追加}
                            //作成した月のHTMLを追加、不要なものは削除
                            if (year[j] === dt[1]) {
                                acv_years.find(".year_" + year[j] + " ul").append(rTxt);
                                $(this).remove();
                            } else {
                                j++;
                                acv_years.find(".year_" + year[j] + " ul").append(rTxt);
                                $(this).remove();
                            }
                        });
                        //クローン要素を削除
                        clone.remove();
                        //直近の年の最初以外は.hide
                        acv.find("ul.years ul:not(:first)").addClass("hide");
                        //年をクリックでトグルshow
                        acv.find("a.year").on("click", function() {$(this).next().toggleClass("hide");});
                    }//if has_date_count || has_date_only
                });//wgts.each
            });
        })(jQuery);*/
    </script>
    <script>
        jQuery(function(){function tableData(){var index='';var headTxt='';jQuery('.article-main table').each(function(){jQuery(this).find('thead tr th').each(function(){index = jQuery(this).index()-1;headTxt = jQuery(this).text();jQuery(this).parents('table').find('tbody tr').each(function(){jQuery(this).find('td').eq(index).attr('data-th',headTxt);});});});}tableData();});
	</script>
    <script type='text/javascript' src='<?php echo get_stylesheet_directory_uri();?>/js/microlight.js'></script>
    <?php wp_footer();?>
</body>
</html>
