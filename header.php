<?php
if (!defined('ABSPATH')) exit;
?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-5T66STKP');
    </script>
    <!-- End Google Tag Manager -->

    <meta charset="UTF-8" />
    <meta http-equiv="Content-Script-Type" content="text/javascript" />
    <meta http-equiv="Content-Style-Type" content="text/css" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="format-detection" content="telephone=no">
    <?php if (is_page("contact") || is_page("complete")) : ?>
        <meta http-equiv="Pragma" content="no-cache">
        <meta http-equiv="Cache-Control" content="no-cache">
        <meta http-equiv="Expires" content="0">
    <?php elseif (is_page()) : ?>
    <?php endif; ?>
    <!-- <?php if (is_page("contact-stay") || is_page("contact-banquet") || is_page("contact-conference") || is_page("contact-restaurant")) : ?>
        <meta http-equiv="Pragma" content="no-cache">
        <meta http-equiv="Cache-Control" content="no-cache">
        <meta http-equiv="Expires" content="0">
    <?php elseif (is_page()) : ?>
    <?php endif; ?> -->
    <?php /* if( is_page('conference') || is_page('conference/venue/') || is_page('conference/fixtures/') || is_page('conference/flow/') || is_singular('assembly') ): ?>
    <meta name="robots" content="noindex, nofollow">
    <?php endif; */ ?>
    <?php wp_head(); ?>
</head>
<?php
$co_path = 'images/common/';
if (is_front_page()):
?>

    <body class="top" ontouchstart="">
        <!-- Google Tag Manager (noscript) -->
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5T66STKP"
                height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->
    <?php else: ?>

        <body class="sub" ontouchstart="">
            <!-- Google Tag Manager (noscript) -->
            <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5T66STKP"
                    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
            <!-- End Google Tag Manager (noscript) -->
        <?php endif; ?>
        <header class="header">
            <div class="wrapper">
                <h1 class="header_logo">
                    <?php
                    $hdr_logo = [
                        'src' => 'logo-ninostyle.png',
                        'src-times' => 'logo-ninostyle@2x.png',
                        'alt' => 'ニノミヤ家具製作所 ~ Handmade & Furniture ~ ロゴ',
                    ];
                    ?>
                    <?php if (is_front_page()) : ?>
                        <div class="header_logo">
                            <picture class="header_logo_item">
                                <source srcset="<?= esc_url(get_theme_file_uri($co_path . $hdr_logo['src'])); ?> 1x, <?= esc_url(get_theme_file_uri($co_path . $hdr_logo['src-times'])); ?> 2x">
                                <img src="<?= esc_url(get_theme_file_uri($co_path . $hdr_logo['src-times'])); ?>" alt="<?= esc_attr($hdr_logo['alt']); ?>">
                            </picture>
                        </div>
                    <?php else: ?>
                        <a href="<?= esc_url(home_url('/')); ?>" class="header_logo">
                            <picture class="header_logo_item">
                                <source srcset="<?= esc_url(get_theme_file_uri($co_path . $hdr_logo['src'])); ?> 1x, <?= esc_url(get_theme_file_uri($co_path . $hdr_logo['src-times'])); ?> 2x">
                                <img src="<?= esc_url(get_theme_file_uri($co_path . $hdr_logo['src-times'])); ?>" alt="<?= esc_attr($hdr_logo['alt']); ?>">
                            </picture>
                        </a>
                    <?php endif; ?>
                </h1>
                <div class="header_line">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <div class="header_nav">
                    <div class="header_nav_logo">
                        <picture class="picture">
                            <source srcset="<?= esc_url(get_theme_file_uri($co_path . $hdr_logo['src'])); ?> 1x, <?= esc_url(get_theme_file_uri($co_path . $hdr_logo['src-times'])); ?> 2x">
                            <img src="<?= esc_url(get_theme_file_uri($co_path . $hdr_logo['src-times'])); ?>" alt="<?= esc_attr($hdr_logo['alt']); ?>">
                        </picture>
                    </div>
                    <nav class="header_nav_block">
                        <?php
                        wp_nav_menu(
                            array(
                                'theme_location' => 'header',
                                'container' => '',
                                'menu_class' => 'unordered',
                            )
                        )
                        ?>
                        <div class="btn-white">
                            <a href="<?= esc_url(home_url('/contact')); ?>" class="btn-white-link">お問い合わせ</a>
                        </div>
                    </nav>
                </div>
            </div>
        </header>