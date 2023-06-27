
<?php get_header(); ?>

<!-- mv -->
<section class="about-main common-main">
  <div class="common-main__mv">
    <h1>about</h1>
    <h2>クリニックのご紹介</h2>
  </div>
</section>
<?php get_template_part('breadcrumbs'); ?>


<!-- 院長紹介 -->
<section class="introduce introduce-top">
  <div class="inner">
    <h2 class="introduce__title">
      院長紹介
    </h2>
    <div class="introduce__body">
      <div class="introduce__img">
        <img src="<?php echo get_template_directory_uri();?>/img/about/top-about2.jpg" alt="院長の画像">
      </div>
      <div class="introduce__text">
        <p>院長の渡邊和則と申します。</p>
          <p class="introduce__text-space">平成10年に医師免許を取得し、その後脳神経外科専門医を取得。</p>
          <p class="introduce__text-space">
          大学病院や総合病院での経験を経て、平成20年に日本脳卒中学会脳卒中専門<br class="u-mobile">医を取得。平成28年、福岡市に「渡邉脳神経外科クリニック」を開院させていただくことになりました。</p>
          <h3 class="introduce__text-space introduce__text-space--pc">“あなたの第一の相談相手”</h3>
          <p class="introduce__text-space">当クリニックではつらい症状から些細な症状まで気軽に受診できる、地域に密着したクリニックを目指しております。</p>
          <p class="introduce__text-space">
            ちょっとした軽い症状を放置し、取り返しのつかない事態となることも少<br class="u-desktop">なくありません。どんなに些細な症状や心配事でも構いませんので、どうぞお気軽に受診ください。</p>
            <div class="introduce__sign">
              <div>渡邉脳神経外科クリニック院長</div>
              <div class="introduce__sign-img">
                <img src="<?php echo get_template_directory_uri();?>/img/about/about_head-doctor_sign.png" alt="院長サイン">
            </div>
          </div>
        </div>
      </div>
    </div>
</section>


<section class="inside-hospital">
  <div class="inner">
    <h2 class="inside-hospital__title">
      院内紹介
    </h2>
    <div class="inside-hospital__text">
    <p><?php echo nl2br(get_field('about-main-text')); ?></p>
    </div>
    <!-- 有料プラグインでカスタムフィールド実装可能 -->
      <ul class="inside__gallery">
        <li><img src="<?php echo get_template_directory_uri();?>/./img/about/top-about1.jpg" alt=""></li>
        <li><img src="<?php echo get_template_directory_uri();?>/./img/about/about_hospital_2.jpg" alt=""></li>
        <li><img src="<?php echo get_template_directory_uri();?>/./img/about/about_hospital_3.jpg" alt=""></li>
        <li><img src="<?php echo get_template_directory_uri();?>/./img/about/about_hospital_4.jpg" alt=""></li>
        <li><img src="<?php echo get_template_directory_uri();?>/./img/about/about_hospital_5.jpg" alt=""></li>
        <li><img src="<?php echo get_template_directory_uri();?>/./img/about/about_hospital_6.jpg" alt=""></li>
      </ul>
  </div>
</section>



<?php get_footer(); ?>
