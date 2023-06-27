<?php get_header(); ?>

<!-- mv -->
<section class="treatment-main common-main">
  <div class="common-main__mv">
    <h1>treatment</h1>
    <h2>診療科目</h2>
  </div>
</section>

<?php get_template_part('breadcrumbs'); ?>

<div class="inner">
  <div class="treatment-main__button">
      <div class="treatment-main__btn">
        <a href="#body" class="btn treatment-main__btn--1">身体の痛み</a>
      </div>
      <div class="treatment-main__btn ">
        <a href="#trouble" class="btn treatment-main__btn--2">身体機能の不調</a>
      </div>
      <div class="treatment-main__btn">
        <a href="#checkup" class="btn treatment-main__btn--3">健診</a>
      </div>
  </div>
</div>

<section class="symptoms symptoms-top" id="body">
  <div class="inner">
  <div class="common-title common-title--symptoms" >
    <div class="common-title__img">
      <img src="<?php echo get_template_directory_uri();?>/img/common/title-img.png" alt="タイトルイラスト">
    </div>
    <h2>身体の痛み</h2>
    <div class="symptoms__text">ちょっとした痛みからやってくる病気も少なからず存在します。<br>
    少しでも異変を感じたら早期に受診しましょう。</div>
  </div>
  <div class="symptoms__wrapper">
    <ul class="symptoms__body">
      <?php
        $categories=array(
          'tax_query' => array(
            array(
              'taxonomy' => 'cat-treatment', //タクソノミーを指定
              'field' => 'slug', //ターム名をスラッグで指定する
              'terms' => array( 'pain1'),//表示したいタームをスラッグで指定
              'orderby' => 'attributes'
            ),
          ),
          'post_type' => 'treatment' //カスタム投稿名
        );
      ?>
      <?php query_posts( $categories ); ?>
      <?php if(have_posts()): ?>
      <?php while(have_posts()):the_post(); ?>
      <li class="symptoms__item">
          <a href="<?php the_permalink(); ?>">
            <span class="symptoms__mask">
              <div class="symptoms__img">
                <img src="<?php the_post_thumbnail(); ?>" alt="">
              </div>
            </span>
            <p class="symptoms__title"><?php the_title(); ?></p>
          </a>
      </li>
      <?php endwhile; else: ?>
        <p>記事がありません。</p>
      <?php endif; ?>
      <?php wp_reset_query(); ?>
    </ul>
  </div>
  </div>
</section>

<section class="symptoms symptoms2-top" id="trouble">
  <div class="inner">
  <div class="common-title common-title--symptoms">
    <div class="common-title__img">
      <img src="<?php echo get_template_directory_uri();?>/img/common/title-img.png" alt="タイトルイラスト">
    </div>
    <h2>身体機能の不調</h2>
    <div class="symptoms__text">歩行障害や呂律が回らないなど、脳の病気を疑う要注意症状です。<br>
      一刻も早く頭部CT/MRIなどの精査を行い、速やかに原因を特定、治療を開始する必要があります。</div>
  </div>
  <div class="symptoms__wrapper">
    <ul class="symptoms__body">
    <?php
        $categories=array(
          'tax_query' => array(
            array(
              'taxonomy' => 'cat-treatment', //タクソノミーを指定
              'field' => 'slug', //ターム名をスラッグで指定する
              'terms' => array( 'pain2') //表示したいタームをスラッグで指定
            ),
          ),
          'post_type' => 'treatment' //カスタム投稿名
        );
      ?>
      <?php query_posts( $categories ); ?>
      <?php if(have_posts()): ?>
      <?php while(have_posts()):the_post(); ?>
      <li class="symptoms__item">
        <a href="<?php the_permalink(); ?>">
          <span class="symptoms__mask">
            <div class="symptoms__img">
              <img src="<?php the_post_thumbnail(); ?>" alt="">
            </div>
          </span>
            <p class="symptoms__title"><?php the_title(); ?></p>
        </a>
      </li>
      <?php endwhile; else: ?>
        <p>記事がありません。</p>
      <?php endif; ?>
      <?php wp_reset_query(); ?>
    </ul>
  </div>
  </div>
</section>

<section class="symptoms symptoms3-top" id="checkup">
  <div class="inner">
  <div class="common-title common-title--symptoms">
    <div class="common-title__img">
      <img src="<?php echo get_template_directory_uri();?>/img/common/title-img.png" alt="タイトルイラスト">
    </div>
    <h2>健診</h2>
    <div class="symptoms__text">脳卒中は予防が第一です。早期発見・早期治療で人生まだまだ楽しみたい！<br>
      脳の状態を知ることのできる大変貴重な機会です。一度受診してみませんか？</div>
  </div>
  <div class="symptoms__wrapper">
    <ul class="symptoms__body">
    <?php
        $categories=array(
          'tax_query' => array(
            array(
              'taxonomy' => 'cat-treatment', //タクソノミーを指定
              'field' => 'slug', //ターム名をスラッグで指定する
              'terms' => array( 'pain3') //表示したいタームをスラッグで指定
            ),
          ),
          'post_type' => 'treatment' //カスタム投稿名
        );
      ?>
      <?php query_posts( $categories ); ?>
      <?php if(have_posts()): ?>
      <?php while(have_posts()):the_post(); ?>
      <li class="symptoms__item">
        <a href="<?php the_permalink(); ?>">
          <span class="symptoms__mask">
            <div class="symptoms__img">
              <img src="<?php the_post_thumbnail(); ?>" alt="">
            </div>
          </span>
            <p class="symptoms__title"><?php the_title(); ?></p>
        </a>
      </li>
      <?php endwhile; else: ?>
        <p>記事がありません。</p>
      <?php endif; ?>
      <?php wp_reset_query(); ?>
    </ul>
  </div>
  </div>
</section>

<?php get_footer(); ?>