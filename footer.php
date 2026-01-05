<?php
if ( !defined( 'ABSPATH' ) ) exit;
$co_path = 'images/common/';
?>
<footer class="footer">
    <div class="wrapper">
        <nav class="footer_nav">
            <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'footer',
                        'container' => '',
                        'menu_class' => 'footer_nav_unordered',
                    )
                )
            ?>
        </nav>
        <?php
            $ftr_logo = [
                'src' => 'logo-ninostyle.png',
                'src-times' => 'logo-ninostyle@2x.png',
                'alt' => 'ニノミヤ家具製作所 ~ Handmade & Furniture ~ ロゴ',
            ]
        ?>
        <p class="footer_logo">
            <picture class="footer_logo_icon">
                <source srcset="<?= esc_url(get_theme_file_uri( $co_path.$ftr_logo['src'] ));?> 1x, <?= esc_url(get_theme_file_uri( $co_path.$ftr_logo['src-times'] ));?> 2x">
                <img src="<?= esc_url(get_theme_file_uri( $co_path.$ftr_logo['src-times'] ));?>" alt="<?= esc_attr( $ftr_logo['alt'] ); ?>">
            </picture>
        </p>
        <address class="footer_address">〒762-0083 <br class="sp-only">香川県丸亀市飯山町下法軍寺658-7</address>
        <div class="btn-white">
            <a href="<?= esc_url( home_url('/contact') ); ?>" class="btn-white-link">お問い合わせ</a>
        </div>
        <p class="footer_copyright">Copyright © NINOMIYA KAGU <br class="sp-only">All Rights Reserved.</p>
        <p class="footer_privacy-policy"><a href="<?= esc_url(home_url('/privacy-policy')) ?>">プライバシーポリシー</a></p>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
