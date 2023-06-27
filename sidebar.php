<!-- サイドバー -->

      <?php dynamic_sidebar('sidebar'); ?>
      <?php
$args = array(
	'type'            => 'monthly',
	'limit'           => '',
	'format'          => 'link', 
	'before'          => 'category',
	'after'           => '',
	'show_post_count' => false,
	'echo'            => 1,
	'order'           => 'DESC',
	'post_type'     => 'post',
  'has_archive' => 'true'
);
wp_get_archives( $args );
?>


      <!-- サイドバーコード -->
        <!-- <h3 class="category__title">
          カテゴリー
        </h3>
        <a href="">
          <p class="category__name">スタッフブログ</p>
        </a>
        <a href="">
          <p class="category__name">診療時間のお知らせ</p>
        </a>
        <a href="">
          <p class="category__name">健康コラム</p>
        </a>
        <a href="">
          <p class="category__name">メディア情報</p>
        </a>
      </div>
      <div class="category__wrapper2">
        <h3 class="category__title">
          月別アーカイブ
        </h3>
        <a href="">
          <p class="category__name">2022年3月</p>
        </a>
        <a href="">
          <p class="category__name">2022年2月</p>
        </a>
        <a href="">
          <p class="category__name">2022年1月</p>
        </a>
        <a href="">
          <p class="category__name">2022年12月</p>
        </a> -->
