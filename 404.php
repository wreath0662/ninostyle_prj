<?php
/*
Template Name: 404エラー
*/
if ( !defined( 'ABSPATH' ) ) exit;
$co_jpg_path = 'images/common/jpg/';
$co_png_path = 'images/common/png/';
$co_svg_path = 'images/common/svg/';
?>
<?php get_header(); ?>
<main class="page not-found">
  <section class="error">
    <div class="error_inner">
        <h2 class="error_title fade-appear">404 Not Found</h2>
        <p class="error_text fade-in">お探しのページは見つかりませんでした。</p>
        <div class="btn_shop-wht fade-in">
            <a class="link" href="<?= esc_url(home_url('/')); ?>">
                <span class="link_text">TOPに戻る</span>
            </a>
        </div>
    </div>
  </section>
</main>
<?php get_footer(); ?>