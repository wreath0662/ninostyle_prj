<?php
/*
Template Name: プライバシーポリシー
*/
if ( !defined( 'ABSPATH' ) ) exit;
$co_jpg_path = 'images/common/jpg/';
$co_png_path = 'images/common/png/';
$co_svg_path = 'images/common/svg/';
?>
<?php get_header(); ?>
<main class="page privacy-policy">
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