<?php
function custom_setup(){
    add_theme_support('post-thumbnails', array( 'post','page','treatment' ));
    add_theme_support('menus');
}
add_action('after_setup_theme','custom_setup');

// 診療科目のカスタム投稿
add_action( 'init', 'create_post_type' );
function create_post_type() {
  register_post_type( 'treatment',
    array(
      'label' => '診療内容',
      'public' => true,
      'has_archive' => true,
      'menu_position' => 5,
      'supports' => array('title', 'editor', 'thumbnail') //デフォルトだと'title', 'editor'になる
    )
  );
}


//前の記事・次の記事のリンクにclassを付与する
function add_prev_post_link_class($output) {
    return str_replace('<a href=', '<a class="prev-link" href=', $output); //前の記事リンク
  }
  add_filter( 'previous_post_link', 'add_prev_post_link_class' );
  function add_next_post_link_class($output) {
    return str_replace('<a href=', '<a class="next-link" href=', $output); //次の記事リンク
  }
  add_filter( 'next_post_link', 'add_next_post_link_class' );

// サンクスページへの遷移
add_action( 'wp_footer', 'wp_footer_wpcf7mailsent');
  function wp_footer_wpcf7mailsent() {?>
  <script type="text/javascript">
      document.addEventListener( 'wpcf7mailsent', function( event ) {
      location.replace("<?php echo esc_url(home_url('/complete/')); ?>");
    }, false );
  </script><?php
  }

// サイドバーのウィジェット追加
  if (function_exists('register_sidebar')) {
    register_sidebar(array(
      'name' => 'サイドバー',
      'id' => 'sidebar',
      'description' => 'サイドバーウィジェット',
      'before_widget' => '<div class="category__wrapper">',
      'after_widget' => '</div>',
      'before_title' => '<h3 class="category__title">',
      'after_title' => '</h3>',
      'before_category' => '<p class="category__name">',
      'after_category' => '</p>',
      'before_archive' => '<p class="category__name">',
      'after_archive' => '</p>',
      'has_archive' => 'true'
    ));
  }



  $args = array(
      'mid_size' => 1,
      'prev_text' => '&lt;&lt;前へ',
      'next_text' => '次へ&gt;&gt;',
      'screen_reader_text' => ' ',
  );
  the_posts_pagination($args);


















