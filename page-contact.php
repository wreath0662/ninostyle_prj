<?php
/*
Template Name: お問い合わせ
*/
if ( !defined( 'ABSPATH' ) ) exit;
$co_jpg_path = 'images/common/jpg/';
$co_png_path = 'images/common/png/';
$co_svg_path = 'images/common/svg/';
$co_path = 'images/common/';
?>

<?php get_header(); ?>

<main class="sub contact">
    <section class="contact">
        <div class="contact_inner">
            <div class="heading">
                <h1 class="heading_main" data-head="CONTACT">お問い合わせ</h1>
            </div>
            <p class="contact_text">お問い合わせいただきました内容は担当者より折り返しご連絡させていただきます。</p>
            <p class="contact_caption">※は必須項目になります</p>
            <div class="container">
                <?php the_content(); ?>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>