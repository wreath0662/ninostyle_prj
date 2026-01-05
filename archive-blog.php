<?php
/*
Template Name: ブログ（一覧）
*/
if ( !defined( 'ABSPATH' ) ) exit;
$co_jpg_path = 'images/common/jpg/';
$co_png_path = 'images/common/png/';
$co_svg_path = 'images/common/svg/';
$co_webp_path = 'images/common/webp/';
?>
<?php get_header(); ?>
<main class="blog archive">
    <section class="blog"> 
        <div class="blog_inner">
            <div class="heading">
                <h1 class="heading_main" data-head="BLOG">製作所ブログ</h1>
            </div>
            <div class="container">
            <?php
                    // クエリの作成
                    $args = array(
                        'post_type' => 'blog', // カスタム投稿タイプの名前
                        'posts_per_page' => 3, // 最新の3件のみを取得
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'genre', // カスタムタクソノミーの名前
                                'field' => 'slug',
                                'terms' => 'pickup', // pickupタームのスラッグ
                            ),
                        ),
                    );
                    // クエリの実行
                    $query = new WP_Query( $args );

                    // クエリが投稿を持っているかチェック
                    if ( $query->have_posts() ) :
                ?>
                <div class="blog_inner_deco">PICK UP</div>
                <ul class="blog_list">
                    <?php while ( $query->have_posts() ) : $query->the_post(); ?>
                    <li class="blog_list_item fade-in
                    
                    ">
                        <a href="<?php esc_url( the_permalink()); ?>" class="link">
                            <figure class="link_image">
                                <div class="time">
                                    <time datetime="<?php the_time('Y.m.d'); ?>"><?php the_time('Y.m.d') ?></time>
                                </div>
                                <?php
                                    $image_id = get_post_thumbnail_id(get_the_ID());
                                    $alt_text = get_post_meta($image_id, '_wp_attachment_image_alt', true);
                                    $image_url = get_the_post_thumbnail_url(get_the_ID(), 'blog_archive_pick_thumb');
                                    if(has_post_thumbnail()) :
                                ?>
                                    <img src="<?= esc_url($image_url); ?>" alt="<?= esc_attr($alt_text); ?>">
                                <?php else: ?>
                                    <img src="<?= esc_url(get_theme_file_uri($co_webp_path.'no-img.webp')); ?>" alt="画像がありません">
                                <?php endif; ?>
                            </figure>
                            <h2 class="link_title">
                                <?php the_title(); ?>
                            </h2>
                            <p class="link_desc">
                                <?= esc_html(wp_trim_words(get_the_content(), 45, '...')); ?>
                            </p>
                        </a>
                    </li>
                    <?php endwhile; ?>
                </ul>
                <?php
                    // メインのクエリをリセット
                    wp_reset_postdata();
                    endif;
                ?>
                <?php if(have_posts()): ?>
                <ul class="blog_list">
                    <?php while(have_posts()): the_post(); ?>
                    <li class="blog_list_item fade-in">
                        <a href="<?php esc_url( the_permalink()); ?>"class="link">
                            <figure class="link_image">
                                <div class="time">
                                    <time datetime="<?php the_time('Y.m.d'); ?>"><?php the_time('Y.m.d') ?></time>
                                </div>
                                <?php
                                    $image_id = get_post_thumbnail_id(get_the_ID());
                                    $alt_text = get_post_meta($image_id, '_wp_attachment_image_alt', true);
                                    $image_url = get_the_post_thumbnail_url(get_the_ID(), 'blog_archive_thumb');
                                    if(has_post_thumbnail()) :
                                ?>
                                    <img src="<?= esc_url($image_url); ?>" alt="<?= esc_attr($alt_text); ?>">
                                <?php else: ?>
                                    <img src="<?= esc_url(get_theme_file_uri($co_webp_path.'no-img.webp')); ?>" alt="画像がありません">
                                <?php endif; ?>
                            </figure>
                            <h2 class="link_title">
                                <?php the_title();
                                ?>
                            </h2>
                            <p class="link_desc">
                            <?= esc_html(wp_trim_words(get_the_content(), 33, '...')); ?>
                            </p>
                        </a>
                    </li>
                    <?php endwhile; ?>
                </ul>
                <?php endif; ?>
            </div>
        </div>
        <?php get_template_part( 'template/component/pagination' ); ?>
    </section>
</main>
<?php get_footer(); ?>