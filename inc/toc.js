$('#outline ul a').click(function() {
    // 移動先のオブジェクトを取得します。
    var $target = $('*[data-outline="' + $(this).attr('href') + '"]');
    if ($target.length == 0) {
      // 移動先を取得できなかった場合は処理を終了します。
      // ※正しく目次を作成できている場合は、ここには入らないはず。
      return false;
    }

    // 移動先までスクロールさせます。
    $('html, body').animate({'scrollTop': $target.offset().top}, 100);

    // 元のaタグを実行させないように、falseを返します。
    return false;
  });
})
