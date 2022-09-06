/* トップに戻るボタン */
$(function() {
    var topBtn = $('.bl_pageTop');    
    topBtn.hide();
    $(window).scroll(function () {
        //スクロールが100に達したらボタン表示
        if ($(this).scrollTop() > 100) {
            topBtn.fadeIn();
        } else {
            topBtn.fadeOut();
        }
    });
});

/* スムーズスクロール */
$(function(){
  $('a[href^="#"]').click(function(){
    var adjust = 0;
    var speed = 400;
    var href= $(this).attr("href");
    var target = $(href == "#" || href == "" ? 'html' : href);
    var position = target.offset().top + adjust;
    $('body,html').animate({scrollTop:position}, speed, 'swing');
    return false;
  });
});

/* タブ切り替え */
$(function() {
    let tabs = $('.tabBtn'); // tabのクラスを全て取得し、変数tabsに配列で定義
    $('.tabBtn').on('click', function() { // tabをクリックしたらイベント発火
        $('.active').removeClass('active'); // activeクラスを消す
        $(this).addClass('active'); // クリックした箇所にactiveクラスを追加
        const index = tabs.index(this); // クリックした箇所がタブの何番目か判定し、定数indexとして定義
        $('.bl_tabCont').removeClass('show').eq(index).addClass('show'); // showクラスを消して、contentクラスのindex番目にshowクラスを追加
    })
})