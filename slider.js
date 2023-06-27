var img_dir = "http://" + window.location.hostname + "/wp-content/themes/clinic-site/";
var windowwidth =
    window.innerWidth || document.documentElement.clientWidth || 0;
if (windowwidth > 768) {
    var responsiveImage = [
        //PC用の画像
        { src: img_dir + "img/top/top_mv_1.jpg" },
        { src: img_dir + "img/top/top_mv_2.jpg" },
        { src: img_dir + "img/top/top_mv_3.jpg" },
    ];
} else {
    var responsiveImage = [
        //タブレットサイズ（768px）以下用の画像
        { src: "../img/top/top_mv_1_sp.jpg" },
        { src: "../img/top/top_mv_2_sp.jpg" },
        { src: "../img/top/top_mv_3_sp.jpg" },
    ];
}

//Vegas全体の設定

$("#slider").vegas({
    overlay: true, //画像の上に網線やドットのオーバーレイパターン画像を指定。
    transition: "fade2", //切り替わりのアニメーション。http://vegas.jaysalvat.com/documentation/transitions/参照。
    transitionDuration: 2000, //切り替わりのアニメーション時間をミリ秒単位で設定
    delay: 5000, //スライド間の遅延をミリ秒単位で。
    animationDuration: 20000, //スライドアニメーション時間をミリ秒単位で設定
    animation: "random", //スライドアニメーションの種類。
    slides: responsiveImage, //画像設定を読む
    //timer:false,// プログレスバーを非表示したい場合はこのコメントアウトを外してください
});
