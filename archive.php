<?php
/*
Template Name: お知らせ（一覧）
*/
if ( !defined( 'ABSPATH' ) ) exit;
$co_jpg_path = 'images/common/jpg/';
$co_png_path = 'images/common/png/';
$co_svg_path = 'images/common/svg/';
?>
<?php get_header(); ?>
<main class="archive notice">
    <section class="news">
        <div class="wrapper">
            <div class="heading">
                <h1 class="heading_main" data-head="NEWS">お知らせ</h1>
            </div>
            <div class="news_list">
                <?php
                if (have_posts()) :
                    while (have_posts()) : the_post();
                ?>
                <article class="news_list_article">
                    <a href="<?= esc_url( the_permalink() ); ?>" class="link">
                        <div class="link_unit">
                            <time class="link_unit_time" datetime="<?php the_time('Y/m/d'); ?>"><?php the_time('Y/m/d') ?></time>
                            <h2 class="link_unit_heading"><?php the_title(); ?></h2>
                        </div>
                    </a>
                </article>
                <?php
                    endwhile;
                endif;
                ?>
            </div>
        </div>
        <?php get_template_part( 'template/component/pagination' ); ?>
    </section>
</main>
<?php get_footer(); ?>