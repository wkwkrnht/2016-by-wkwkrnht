<style>
</style>
<div id="toc"></div>
<script>
    (function(){
        var element = document.getElementByClass('article-main');
        var idcount = 1;
        var toc = '';
        var currentlevel = 0;
        for(var i = 0; i < element.length; i++)(function(){
            element.id = "toc_" + idcount;
            idcount++;
            var level = 0;
            if(element.nodeName.toLowerCase() == "h2"){
                level = 1;
            }else if(element.nodeName.toLowerCase() == "h3"){
                level = 2;
            }else if(element.nodeName.toLowerCase() == "h4"){
                level = 3;
            }else if(element.nodeName.toLowerCase() == "h5"){
                level = 4;
            }
            while(currentlevel < level){
                toc += "<ul>";
                currentlevel++;
            }
            while(currentlevel > level){
                toc += "</ul>";
                currentlevel--;
            }
            toc += '<li><a href="#' + element.id + '">' + element + "<\/a><\/li>\n";
        });
        document.getElementByClass("widget_toc").innerHTML = toc;
        /*ページ内リンク#非表示。加速スクロール
        $('a[href^=#]').click(function(){
            var   speed = 1000,
            href= element.attr("href"),
            target = $(href == "#" || href == "" ? 'html' : href),
            position = target.offset().top;
            $("html, body").animate({scrollTop:position}, speed, "swing");
            return false;
        });*/
    })();
</script>
