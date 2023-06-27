

<?php get_header(); ?>

<!-- mv -->
<section class="mv mv-top">
  <div class="mv__circle bg-circle u-desktop"></div>
  <h1 class="mv__text-pc u-desktop">
    <img src="<?php echo get_template_directory_uri();?>/img/common/top-mv-text.png" alt="メインビュー写真">
  </h1>
  <div class="mv__wrap" id="slider">
    <h1 class="mv__text u-mobile">
      <img src="<?php echo get_template_directory_uri();?>/img/common/top-mv-text.png" alt="メインビュー写真">
    </h1>
  </div>
</section>

<!-- news -->
<section class="news news-top">
  <div class="inner">
    <div class="common-title">
      <div class="common-title__img">
        <img src="<?php echo get_template_directory_uri();?>/img/common/title-img.png" alt="タイトルイラスト">
      </div>
      <h2>お知らせ</h2>
      <p>news</p>
    </div>
    <div class="news__body">
      <ul class="news__list news-list">
      <?php
        $args = array(
      //この中で条件を指定
          'category-name' => 'news',
          'posts_per_page' => 3
        );
      $the_query = new WP_Query( $args ); ?>
    <?php if ( $the_query->have_posts() ) : ?>
      <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
        <li class="news-list__item">
          <a href="<?php the_permalink(); ?>">
            <div class="news-list__wrap">
              <time datetime="2022-03-31"><?php the_time('Y.m.d'); ?></time>
              <div class="news-list__container">
                <?php
                  $this_categories = get_the_category();
                  if ( $this_categories ) {
                    $this_category_color = get_field( 'color', 'category_' . $this_categories[0]->term_id );
                    $this_category_name  = $this_categories[0]->name;
                    echo '<span class="news-list__title news-list__title--orange" style="'. esc_attr( 'border-color:' . $this_category_color) . '; '. esc_attr( 'color:' . $this_category_color) . '; ">' .esc_html( $this_category_name ) .  '</span>';
                    } ?>
              </div>
            </div>
            <div class="news-list__text">
              <p><?php the_title(); ?></p>
            </div>
            <div class="narrow u-desktop"></div>
          </a>
        </li>
        <?php endwhile; ?>
      <?php wp_reset_postdata(); ?>
      <?php else : ?>
        <p><?php esc_html_e( ‘記事がありません’ ); ?></p>
      <?php endif; ?>
      </ul>
      <div class="news__btn">
        <a href="<?php echo home_url('news'); ?>" class="btn-narrow news__btn--narrow">もっと見る</a>
      </div>
    </div>

  </div>
</section>



<section class="about about-top">
  <div class="about__circle bg-circle__left"></div>
  <div class="inner">
    <div class="about__body">
      <div class="about__img">
          <div class="about__img-first">
            <img src="<?php echo get_template_directory_uri();?>/img/top/top-about2.jpg" alt="院内の画像" />
          </div>
          <div class="about__img-second">
            <img src="<?php echo get_template_directory_uri();?>/img/top/top-about1.jpg" alt="男性医師の写真" />
          </div>
      </div>
      <div class="about__item">
        <div class="common-title">
          <div class="common-title__img">
            <img src="<?php echo get_template_directory_uri();?>/img/common/title-img.png" alt="タイトルイラスト">
          </div>
          <h2>クリニックのご紹介</h2>
          <p>about</p>
        </div>
        <h3>安心して相談できるかかりつけ医</h3>
        <p class="about__text"><?php echo nl2br(get_field('about-text')); ?></p>
          <div class="about__item-btn">
            <a href="<?php echo home_url('about'); ?>" class="btn-narrow u-desktop">クリニックのご紹介</a>
            <a href="<?php echo home_url('about'); ?>" class="btn-narrow u-mobile">もっと見る</a>
          </div>
        </div>
    </div>
  </div>

</section>

<section class="treatment treatment-top">
  <div class="treatment__circle bg-circle__right"></div>
  <div class="inner">
    <div class="treatment__body">
      <div class="treatment__img">
          <div class="treatment__img-first">
            <img src="<?php echo get_template_directory_uri();?>/img/top/top_treatment_2.jpg" alt="男性医師の写真" />
          </div>
          <div class="treatment__img-second">
            <img src="<?php echo get_template_directory_uri();?>/img/top/top_treatment_1.jpg" alt="院内の画像" />
          </div>
      </div>
      <div class="treatment__item">
        <div class="common-title">
          <div class="common-title__img">
            <img src="<?php echo get_template_directory_uri();?>/img/common/title-img.png" alt="タイトルイラスト">
          </div>
          <h2>診療科目</h2>
          <p>treatment</p>
        </div>
        <h3>早期発見・早期治療が<br class="u-mobile">大事な脳の病気。</h3>
        <p class="treatment__text">頭の専門医として、脳卒中や認知症だけではなく、<br class="u-mobile"><?php echo nl2br(get_field('treatment-text')); ?></p>
          <div class="treatment__item-btn">
            <a href="<?php echo home_url('treatment'); ?>" class="btn-narrow u-desktop">クリニックのご紹介</a>
            <a href="<?php echo home_url('treatment'); ?>" class="btn-narrow u-mobile">もっと見る</a>
          </div>
        </div>
    </div>
  </div>

</section>

<section class="contact contact-top">
  <!-- <div class="contact__circle bg-circle"></div> -->
  <div class="contact__img u-mobile">
    <img src="<?php echo get_template_directory_uri();?>/img/top/top_contact.jpg" alt="女性医師と患者さん">
  </div>
  <div class="contact__item">
    <div class="common-title">
      <div class="common-title__img">
        <img src="<?php echo get_template_directory_uri();?>/img/common/title-img.png" alt="タイトルイラスト">
      </div>
      <h2>お問い合わせ</h2>
      <p>contact</p>
    </div>
    <p class="contact__text"><?php echo nl2br(get_field('contact-text')); ?></p>
      <div class="contact__item-btn">
        <a href="<?php echo home_url('contact'); ?>" class="btn-narrow">お問い合わせへ</a>
      </div>
  </div>
</section>

<section class="access access-top">
  <div class="inner">
  <div class="access__item">
    <div class="common-title">
      <div class="common-title__img">
        <img src="<?php echo get_template_directory_uri();?>/img/common/title-img.png" alt="タイトルイラスト">
      </div>
      <h2>アクセス</h2>
      <p>access</p>
    </div>
    <div class="access__map">
      <?php the_field('Google-map'); ?>

      <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3323.694491296651!2d130.39974191520284!3d33.587280680734935!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x354191907164bdcd%3A0xbfa38bcff19b49fd!2z56aP5bKh55yM56aP5bKh5biC5Lit5aSu5Yy6IOa4oei-uumAmuOCig!5e0!3m2!1sja!2sjp!4v1681349679443!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> -->
    </div>
    <p class="access__text">病院の敷地内に6台の駐車スペースを<br class="u-mobile">ご用意しております。<br>
      ※駐車場内での事故等のトラブルについては一切責任を負いかねます。あらかじめご了承ください。</p>

    <div class="access__table">
      <img src="<?php the_field('access-table'); ?>">

      <!-- コードで表を作る場合 -->
      <!-- <tbody class="access__table-body">
        <tr>
          <th class="access__table-time">診療時間</th>
          <th class="access__table-day">月</th>
          <th class="access__table-day">火</th>
          <th class="access__table-day">水</th>
          <th class="access__table-day">木</th>
          <th class="access__table-day">金</th>
          <th class="access__table-day access__table-day--blue">土</th>
          <th class="access__table-day access__table-day--red">日</th>
        </tr>
        <tr>
          <th class="access__table-time">10:00~12:30</th>
          <td class="access__table-circle"></td>
          <td class="access__table-circle"></td>
          <td class="access__table-circle"></td>
          <td class="access__table-circle"></td>
          <td class="access__table-circle"></td>
          <td class="access__table-circle"></td>
          <td class="access__table-cross"></td>
        </tr>
        <tr>
          <th class="access__table-time">14:00~17:00</th>
          <td class="access__table-circle"></td>
          <td class="access__table-circle"></td>
          <td class="access__table-circle"></td>
          <td class="access__table-cross"></td>
          <td class="access__table-circle"></td>
          <td class="access__table-cross"></td>
          <td class="access__table-cross"></td>
        </tr>
      </tbody> -->
    </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>

