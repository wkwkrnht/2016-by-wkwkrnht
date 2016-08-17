jQuery('#outline ul a').click(function(){
    var target = jQuery('*[data-outline="' + jQuery(this).attr('href') + '"]');// 移動先のオブジェクトを取得します
    if(target.length == 0){return false;}
    jQuery('html, body').animate({'scrollTop' : $target.offset().top},100);// 移動先までスクロールさせます
    return false;// 元のaタグを実行させないように、falseを返します
});
