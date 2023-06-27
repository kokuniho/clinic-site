

<?php get_header(); ?>

<!-- mv -->
<section class="contact-main common-main">
  <div class="common-main__mv">
    <h1>contact</h1>
    <h2>お問い合わせ</h2>
  </div>
</section>
<?php get_template_part('breadcrumbs'); ?>

<div class="contact-main__body">
    <div class="inner">
      <div class="common-title contact-main__title">
        <div class="common-title__img">
          <img src="<?php echo get_template_directory_uri();?>/img/common/title-img.png" alt="タイトルイラスト">
        </div>
        <h2>お問い合わせフォーム</h2>
        <div class="contact-main__text">
          <p>ご質問、ご要望、ご相談は下記フォームを<br class="u-mobile">ご利用ください。<br>
            ※体調に不安がある方は、直接医師の診察をお勧めします。</p>
        </div>
      </div>
        <?php echo apply_shortcodes( '[contact-form-7 id="123" title="お問い合わせ"]' ); ?>
  </div>
</div>



<?php get_footer(); ?>
