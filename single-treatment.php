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
        <div class="treatment-show">
        <?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : the_post(); ?>
            <?php
                if(has_post_thumbnail('')):
                $id=get_post_thumbnail_id();
                $img_src=wp_get_attachment_image_src($id)[0];//アイキャッチ画像のリンクを取得
                else:
                $img_src=get_template_directory_uri()."/img/treatment/treatment_eyecatch_1.jpg";//アイキャッチ画像が設定されていなかったときこちらの画像を表示
            endif; ?>
            <div class="treatment-show__img">
                <img src="<?php echo $img_src; ?>" alt="症状の写真" />
            </div>
            <p class="treatment-show__title"><?php the_title(); ?></p>
            <div class="treatment-show__text">
                <p><?php the_content(); ?></p>
            </div>
            <?php endwhile; ?>
            <?php endif; ?>
            <div class="treatment-show__btn">
                <a href="<?php echo home_url('treatment'); ?>" class="btn">
                    診療科目一覧へ
                </a>
            </div>
            </div>
        </div>

        <?php get_footer(); ?>
