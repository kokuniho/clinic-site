<footer class="footer footer-top">
  <div class="inner">
  <div class="footer__wrap-1">
    <div class="footer__logo u-desktop">
      <a href="/">
        <img src="<?php echo get_template_directory_uri();?>/img/common/footer.logo.svg" alt="フッターロゴ">
      </a>
    </div>
    <div class="footer__nav-wrap">
    <?php
    $args = array(
      'menu'            => 'footer-menu',
      'container'       => 'nav',
      'container_class' => 'footer__nav',
    );
    wp_nav_menu( $args );
    ?>
    <span class="footer__nav-line"></span>
    <div class="footer__logo u-mobile">
      <a href="">
        <img src="<?php echo get_template_directory_uri();?>/img/common/footer.logo.svg" alt="フッターロゴ">
      </a>
    </div>
    <div class="footer__info">
      <p class="footer__info-address">福岡県福岡市中央区渡邉123</p>
      <a class="footer__info-tel" href="tel:+81-93-0000-0000">Tel. 093-0000-0000</a>
    </div>
  </div>
</div>
</div>
<div class="footer__wrap-2">
  <small class="copyright">&copy;2022 Watanabe neuro-spone clinic</small>
</div>
</footer>

<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/vegas/2.4.4/vegas.min.js"></script>
<!--自作のJS-->
<script src="<?php echo get_template_directory_uri();?>/js/slider.js"></script>
<?php wp_footer(); ?>
</body>
</html>