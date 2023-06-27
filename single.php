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
<div class="inner">
<div class="news-show">
      <div class="news-show__wrapper">
      <?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>
      <?php
      if(has_post_thumbnail()):
        $id=get_post_thumbnail_id();
        $img_src=wp_get_attachment_image_src($id)[0];//アイキャッチ画像のリンクを取得
        else:
        $img_src=get_template_directory_uri()."/img/news/news_eyecatch.jpg";//アイキャッチ画像が設定されていなかったときこちらの画像を表示
        endif; ?>
        <div class="news-show__img">
          <img src="<?php echo $img_src; ?>" alt="時計の画像">
        </div>
        <div class="news-show__tags">
          <?php
            $this_categories = get_the_category();
            if ( $this_categories ) {
              $this_category_color = get_field( 'color', 'category_' . $this_categories[0]->term_id );
              $this_category_name  = $this_categories[0]->name;
              echo '<div class="news-show__tag news-main__title" style="'. esc_attr( 'border-color:' . $this_category_color) . '; '. esc_attr( 'color:' . $this_category_color) . '; ">' .esc_html( $this_category_name ) .  '</div>';
            } ?>

          <time datetime="Y.m.d" class="news-show__time news-main__time"><?php the_time('Y.m.d'); ?></time>
        </div>
        <div class="news-show__title">
          <?php the_title(); ?>
        </div>
          <div class="news-show__text">
          <?php the_content(); ?>
        </div>

        <div class="news-show__btn u-desktop">
            <?php previous_post_link(' %link','前の記事', true); ?>
              <a href="<?php echo home_url('index/news'); ?>" class="btn news-show__button">お知らせ一覧へ</a>
            <?php next_post_link(' %link ','次の記事', true); ?>
        </div>

        <div class="news-show__btn u-mobile">
          <span class="previous-arrow"><?php  previous_post_link(' %link', '前の記事'); ?></span>
          <span class="next-arrow"><?php  next_post_link('%link ','次の記事'); ?>
            <a href="<?php echo home_url('index/news'); ?>" class="btn news-show__button">お知らせ一覧へ</a>
        </div>
      </div>

      <?php endwhile; ?>
        <?php endif; ?>


    <!-- サイドカテゴリー -->

    <div class="news-show__category category">
      <?php get_sidebar(); ?>
    </div>
  </div>
</div>


<?php get_footer(); ?>