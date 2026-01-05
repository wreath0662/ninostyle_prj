<?php
/*
Template Name: 投稿ページ
*/
if ( !defined( 'ABSPATH' ) ) exit;
$co_path = 'images/common/';
?>
<?php get_header(); ?>
<main class="post">
    <div class="heading">
        <h1 class="heading_main" data-head="NEWS">お知らせ</h1>
    </div>
    <article id="post-<?php the_ID(); ?>" class="blog">
        <div class="wrapper">
            <?php
            if(have_posts()):
                while ( have_posts() ) :
                    the_post();
            ?>
            <div class="blog_block">
                <div class="blog_block_unit">
                    <div class="deco">NINOMIYA KAGU</div>
                    <p class="time" datetime="<?php the_time('Y.m.d'); ?>"><?php the_time('Y.m.d'); ?></p>
                    <h2 class="title"><?php the_title(); ?></h2>
                </div>
                <p class="blog_block_image">
                <?php
                    $image_id = get_post_thumbnail_id(get_the_ID());
                    $alt_text = get_post_meta($image_id, '_wp_attachment_image_alt', true);
                    $image_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
                    if($image_url) {
                ?>
                    <img src="<?= $image_url; ?>" alt="<?= $alt_text; ?>">
                    <div class="blog_block_contents include">
                <?php } else { ?>
                    <div class="blog_block_contents">
                <?php } ?>
                </p>
                    <?php the_content(); ?>
                    <!-- <div class="btn_shop-blc">
                        <a href="#" class="link">
                            <span class="link_text">公式オンラインショップ</span>
                            <span class="link_image">
                                <img src="<?= esc_url(get_theme_file_uri($co_path.'icon-arw-dbl-rgt-blc.svg')); ?>" alt="">
                            </span>
                        </a>
                    </div> -->
                </div>
            </div>
            <?php
                endwhile;
            endif;
            ?>
        </div>
    </article>
</main>
<?php get_footer(); ?>