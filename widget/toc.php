<style>
    .mokuji{
        width:80vw;
    	background:#fff;
    	box-shadow: 0px 2px 5px 0px rgba(0, 0, 0, 0.1);
    }

    .mokuji h4 {
    	position:relative;
    	padding:1em 1em 0.8em;
    	color:#6C501B;
    	font-size:96%;
    	font-weight:bold;
    	background:#FDD835;
    	text-shadow:1px 1px 0 rgba(255,255,255,0.5);
    }
    .mokuji h4 .closeBtn {
    	cursor:pointer;
    	position:absolute;
    	top:11px;
    	right:12px;
    	font-size:1.5em;
    	-webkit-transition:0.2s;
    	-moz-transition:0.2s;
    	transition:0.2s;
    	-webkit-transform: rotate(45deg);
    	-moz-transform: rotate(45deg);
    	-ms-transform: rotate(45deg);
    	-o-transform: rotate(45deg);
    	transform: rotate(45deg);
    	-webkit-transform-origin:center;
    	-moz-transform-origin:center;
    	-ms-transform-origin:center;
    	-o-transform-origin:center;
    	transform-origin:center;
    }
    .mokuji h4 .closeBtn.active {
    	-webkit-transform: rotate(0deg);
    	-moz-transform: rotate(0deg);
    	-ms-transform: rotate(0deg);
    	-o-transform: rotate(0deg);
    	transform: rotate(0deg);
    }
    .mokuji .mokujiInner {
    	border:1px solid #ddd;
    	border-top:none;
    }

    /* インデント */
    .mokuji li {
    	overflow:hidden;
    	position:relative;
    	cursor:pointer;
    	width:100%;
    	height:100%;
    	/*text-indent:-1em;*/
    	list-style:none;
    	-webkit-transition:0.2s;
    	-moz-transition:0.2s;
    	transition:0.2s;
    	-webkit-box-sizing:border-box;
    	-moz-box-sizing:border-box;
    	box-sizing:border-box;
    }
    .mokuji ul.mokujiShare li {
    	list-style:none;
    	text-align:center;
    	background:#f2f2f2;
    }
    .mokuji ol ol {	display:none; }
    .mokuji ol ol li { padding-left:1em; }
    .mokuji ol ol ol li { padding-left:2em; }

    .mokuji li a {
    	display:block;
    	padding:1em;
    	color:#333;
    	font-size:75%;
    	line-height:1.5;
    	text-decoration:none;
    }
    .mokuji > ol li.accordion .inner a {
    	padding-left:0;
    }
    .mokuji li:hover {
    	background:#f2f2f2;
    }
    .mokuji li.current {
    	background:#FFECB3;
    }
    .mokuji li.active {
    	background:#f00;
    }
    .mokuji li.current a {
    	color:#6C501B;
    	font-weight:bold;
    }

    /* アコーディオン */
    .mokuji li.accordion {
    	padding:0;
    }
    .mokuji li.accordion .inner {
    	display:table;
    	width:100%;
    	table-layout:fixed;
    }
    .mokuji li.accordion .inner a {
    	display:table-cell;
    	width:100%;
    	text-indent:0;
    	padding: 1em;
    	vertical-align:middle;
    }
    .mokuji li.accordion .inner .accBtn {
    	display:table-cell;
    	width: 30px;
    	margin-top:12px;
    	font-size: 1.5em;
    	text-indent:0;
    	color:#fff;
    	background:#555;
    	text-align:center;
    	vertical-align:middle;
    }
</style>
<aside class="mokuji"></aside>
<script>
    jQuery(function(){
    	/* -------------------------------------------------------
    		記事の見出しから目次作成
    	--------------------------------------------------------*/
    	function makeMokuji(){
    		var idcount = 1;
    		var mokuji = '';
    		var currentlevel = 0
    		var sectionTopArr = new Array();

    		// 見出しを回してリストに格納
    		jQuery('article h1,article h2,article h3,article h4,article h5,article h6').each(function(i){

    			// IDを保存
    			this.id = 'chapter-' + idcount;
    			idcount ++;

    			// 見出しの入れ子
    			var level = 0;
    			if(this.nodeName.toLowerCase() == 'h1'){
    				level = 1;
    			}else if(this.nodeName.toLowerCase() == 'h2'){
    				level = 2;
    			}else if(this.nodeName.toLowerCase() == 'h3'){
    				level = 3;
    			}else if(this.nodeName.toLowerCase() == 'h4'){
    				level = 3;
    			}else if(this.nodeName.toLowerCase() == 'h5'){
    				level = 3;
    			}else if(this.nodeName.toLowerCase() == 'h6'){
    				level = 3;
    			}
    			while(currentlevel < level){
    				mokuji += '<ol class="chapter">';
    				currentlevel ++;
    			}
    			while(currentlevel > level){
    				mokuji += '</ol>';
    				currentlevel --;
    			}

    			// リストを生成
    			mokuji += '<li><a href="#' + this.id + '">' + jQuery(this).html() + '</a></li>\n';
    		});

    		while(currentlevel > 0){
    			mokuji += '</ol>';
    			currentlevel --;
    		}

    		// HTML出力
    		strMokuji = '<h4>目次で流し読みする <span class="closeBtn"><i class="fa fa-times-circle-o"></i></span></h4>\
    					 <div class="mokujiInner">'
    						+ mokuji +
    					 '</div>';

    		jQuery('.mokuji').html(strMokuji);

    		/* -------------------------------------------------------
    			リストクリックでスムーズスクロール
    		--------------------------------------------------------*/
    		jQuery('.mokuji li').not('.accordion, .accBtn').click(function(){
    			var speed = 800;
    			var href = $(this).find('a').attr('href');
    			var target = $(href == '#' || href == '' ? 'html' : href);
    			var position = target.offset().top;
    			jQuery('html,body').stop().animate({scrollTop:position},speed,'easeInOutCirc');
    			return false;
    		});

    		/* -------------------------------------------------------
    			目次のアコーディオン
    		--------------------------------------------------------*/
    		jQuery('.mokuji ol').prev().addClass('accordion').append('<span class="accBtn"><i class="fa fa-plus-square-o"></i></span>');
    		jQuery('.mokuji li.accordion').wrapInner('<div class="inner clearfix"></div>');

    		// 開閉ボタンを押した時
    		jQuery('.accBtn').click(function(){

    			// 開閉処理
    			jQuery(this).parents('li').next().stop().slideToggle(300,'easeInOutCirc');

    			// 閉じるボタンアイコン切替
    			jQuery('.closeBtn').removeClass('active').addClass('active');

    			// アイコン切替
    			if(jQuery(this).find('i').hasClass('fa-plus-square-o')){
    				jQuery(this).find('i').removeClass('fa-plus-square-o').addClass('fa-minus-square-o');
    			}else{
    				jQuery(this).find('i').removeClass('fa-minus-square-o').addClass('fa-plus-square-o');
    			}
    			return false;
    		});

    		// 閉じるボタンの表示切替
    		var closeBtnFlag = '';
    		jQuery('.mokuji li').each(function(){if($(this).hasClass('accordion')){closeBtnFlag = false;}});
            if( closeBtnFlag == true ){jQuery('.closeBtn').hide();}

    		// 全て閉じるボタンを押した時
    		jQuery('.closeBtn').click(function(){
    			// 閉じるアイコン切替
    			jQuery(this).toggleClass('active');

    			// classの有無を確認
    			if(jQuery(this).hasClass('active')){
    				jQuery('.mokuji ol ol').stop().slideDown(300, 'easeInOutCirc');
    				jQuery('.accBtn').find('i').removeClass('fa-plus-square-o').addClass('fa-minus-square-o');
    			}else{
    				jQuery('.mokuji ol ol').stop().slideUp(300, 'easeInOutCirc');
    				jQuery('.accBtn').find('i').removeClass('fa-minus-square-o').addClass('fa-plus-square-o');
    			}
    		});

    		/* -------------------------------------------------------
    			カレント表示切替
    		--------------------------------------------------------*/
    		var secTopArr = new Array();
    		secTopArr.length = 0;
    		var current = -1;

    		// 現在位置の取得
    		jQuery('article [id^="chapter"]').each(function(i){secTopArr[i] = jQuery(this).offset().top;});

    		//スクロールイベント
    		jQuery(window).on('load scroll',function(){
    			for(var i = secTopArr.length-1; i>=0; i--){
    				if(jQuery(window).scrollTop() > secTopArr[i] - 20){
    					jQuery('.mokuji li').removeClass('current').eq(i).addClass('current');
    					jQuery('.mokuji ol ol li.current').parent('ol').prev().addClass('current');
    					break;
    				}
    			}
    		});
    	}
    	makeMokuji();
    });
</script>
