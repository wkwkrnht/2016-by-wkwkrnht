$('#outline .link').click(function(){
    var target = $('*data-outline="' + $(this).attr('href') + '"');// 移動先のオブジェクトを取得します
    if(target.length == 0){return false;}
    $('html, body').animate({'scrollTop' : $target.offset().top},100);// 移動先までスクロールさせます
    return false;// 元のaタグを実行させないように、falseを返します
  });
})
