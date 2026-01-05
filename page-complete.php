<?php
/*
Template Name: お問い合わせ（完了）
*/
if ( !defined( 'ABSPATH' ) ) exit;
$co_jpg_path = 'images/common/jpg/';
$co_png_path = 'images/common/png/';
$co_svg_path = 'images/common/svg/';
?>
<?php get_header(); ?>
<main class="sub contact complete">
    <section class="contact complete">
        <div class="contact_inner">
            <div class="heading">
                <h1 class="heading_main" data-head="COMPLETE">お問い合わせ完了</h1>
            </div>
            <p class="contact_text">
                お問い合わせいただきありがとうございました。<br>
                ご入力いただいたメールアドレス宛に受付確認メールをお送りしましたのでご確認ください。<br>
                確認メールが届いていない場合、メールアドレスが誤っているか、 迷惑メールフォルダ等に振り分けられている可能性がございますので、再度ご確認をお願いいたします。
            </p>
            <div class="btn_shop-wht fade-in">
                <a class="link" href="<?= esc_url(home_url('/')); ?>">
                    <span class="link_text">TOPに戻る</span>
                </a>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>