<?php get_header(); ?>

<!-- mv -->
<section class="news-main common-main">
  <div class="common-main__mv">
    <h1>news</h1>
    <h2>お知らせ</h2>
  </div>
</section>

<?php get_template_part('breadcrumbs'); ?>

<!-- news body -->
<div class="news-main__wrapper">
    <div class="inner news-main__inner">


    <ul class="news-main__items">
    <?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>
      <?php
      if(has_post_thumbnail()):
        $id=get_post_thumbnail_id();
        $img_src=wp_get_attachment_image_src($id)[0];//アイキャッチ画像のリンクを取得
        else:
        $img_src=get_template_directory_uri()."/img/news/news_eyecatch.jpg";//アイキャッチ画像が設定されていなかったときこちらの画像を表示
        endif; ?>
      <li class="news-main__item">
        <a href="<?php the_permalink(); ?>">
          <div class="news-main__body">
            <!-- カテゴリー色分け -->
          <?php
            $this_categories = get_the_category();
            if ( $this_categories ) {
              $this_category_color = get_field( 'color', 'category_' . $this_categories[0]->term_id );
              $this_category_name  = $this_categories[0]->name;
              echo '<div class="news-main__title" style="'. esc_attr( 'border-color:' . $this_category_color) . '; '. esc_attr( 'color:' . $this_category_color) . '; ">' .esc_html( $this_category_name ) .  '</div>';
            } ?>
            <div class="news-main__text">
              <p><?php the_title(); ?></p>
            </div>
            <div class="news-main__time">
              <time datetime=""><?php the_time('Y.m.d'); ?></time>
            </div>
          </div>
          <div class="news-main__img">
            <img src="<?php echo $img_src; ?>" alt="時計の写真">
          </div>
          </a>
        </li>
        <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
              <?php else : ?>
                  <p><?php esc_html_e( ‘記事がありません’ ); ?></p>
              <?php endif; ?>
		  <?php wp_pagenavi(); ?>
      </ul>

      <!-- <li class="news-main__item">
        <a href="">
          <div class="news-main__body">
            <div class="news-main__title">
              営業時間について
            </div>
            <div class="news-main__text">
              <p>コロナウイルス拡大に伴う営業時間短縮のお知らせ</p>
            </div>
            <div class="news-main__time">
              <time datetime="2022-03-31">2022.03.31</time>
            </div>
          </div>
          <div class="news-main__img">
            <img src="./img/news/news_eyecatch.jpg" alt="時計の写真">
          </div>
        </a>
      </li> -->

      <!-- <li class="news-main__item">
        <a href="">
          <div class="news-main__body">
            <div class="news-main__title">
              営業時間について
            </div>
            <div class="news-main__text">
              <p>コロナウイルス拡大に伴う営業時間短縮のお知らせコロナウイルス拡大に伴う営業時間短縮のお知らせ</p>

            </div>
            <div class="news-main__time">
              <time datetime="2022-03-31">2022.03.31</time>
            </div>
          </div>
          <div class="news-main__img">
            <img src="./img/news/news_eyecatch.jpg" alt="時計の写真">
          </div>
        </a>
      </li> -->

      <!-- <li class="news-main__item">
        <a href="">
          <div class="news-main__body">
            <div class="news-main__title">
              営業時間について
            </div>
            <div class="news-main__text">
              <p>コロナウイルス拡大に伴う営業時間短縮のお知らせ</p>

            </div>
            <div class="news-main__time">
              <time datetime="2022-03-31">2022.03.31</time>
            </div>
          </div>
          <div class="news-main__img">
            <img src="./img/news/news_eyecatch.jpg" alt="時計の写真">
          </div>
        </a>
      </li> -->

      <!-- <li class="news-main__item">
        <a href="">
          <div class="news-main__body">
            <div class="news-main__title">
              営業時間について
            </div>
            <div class="news-main__text">
              <p>コロナウイルス拡大に伴う営業時間短縮のお知らせコロナウイルス拡大に伴う営業時間短縮のお知らせ</p>

            </div>
            <div class="news-main__time">
              <time datetime="2022-03-31">2022.03.31</time>
            </div>
          </div>
          <div class="news-main__img">
            <img src="./img/news/news_eyecatch.jpg" alt="時計の写真">
          </div>
        </a>
      </li> -->

    <!-- サイドバー　カテゴリー -->
    <div class="news-main__category category">
      <?php get_sidebar(); ?>
    </div>

  </div>
</div>


<?php get_footer(); ?>
