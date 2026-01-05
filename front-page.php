<?php
/*
Template Name: ホーム
*/
if ( !defined( 'ABSPATH' ) ) exit;
$co_path = 'images/common/';
$hm_path = 'images/home/';
$movie_path = 'movie/';
?>
<?php get_header(); ?>
<div class="loading">
  <div class="loading_content">
    <div class="loader"></div>
    <p class="loading_text-large">Ninostyle</p>
  </div>
</div>
<main class="home">
  <section class="mv">
    <div class="mv_movie">
      <video class="mv_movie_contents" webkit-playsinline playsinline autoplay muted loop>
        <source src="<?= esc_url(get_theme_file_uri($movie_path.'top-movie.mp4')); ?>" type="video/mp4">
      </video>
    </div>
    <div class="wrapper">
      <picture class="mv_logo">
        <?php
            $mv_logo = [
                'src' => 'logo-ninostyle.png',
                'src-times' => 'logo-ninostyle@2x.png',
                'alt' => 'ニノミヤ家具製作所 ~ Handmade & Furniture ~ ロゴ',
            ];
        ?>
        <source srcset="<?= esc_url(get_theme_file_uri( $co_path.$mv_logo['src'] ));?> 1x, <?= esc_url(get_theme_file_uri( $co_path.$mv_logo['src-times'] ));?> 2x">
        <img src="<?= esc_url(get_theme_file_uri( $co_path.$mv_logo['src-times'] ));?>" alt="<?= esc_attr( $mv_logo['alt'] ); ?>">
      </picture>
      <div class="mv_scroll">
        <div class="mv_scroll_block">
          <h2 class="heading">「暖かみ」<br>目には見えないけれど、<br>心で感じ和らぐ。</h2>
          <span class="line"></span>
        </div>
      </div>
      <?php
          $mv_block = [
              [
                  'title' => '心を込めた手作業による<br>世界にひとつだけの家具',
                  'text' => 'ニノミヤ家具製作所の家具はご注文をいただいてから、<br class="pc-only">家具職人の手によって手間暇かけて丁寧に製作しております。<br>家具がひとつできあがるまでには、<br class="pc-only">数えきれないほどたくさんの工程があります。<br>切磋琢磨して磨き上げた技術を持った家具職人だからこそ、<br class="pc-only">難しいデザインでも形になります。<br>素材の良さを存分に引き出すのが家具職人としての誇りです。<br>木の個性や形状に合わせて、いくつもの道具を巧みに使いこなします。',
              ],
              [
                  'title' => '使用する無垢材は一本、一本<br>自分の目で確かめて選定',
                  'text' => '自然で美しい木目と個性豊かな節を楽しむ。<br>心を込めた手作業による世界にひとつだけの家具。<br>それは優しい風合いとぬくもりを感じさせてくれます。<br>経年変化ー。使えば使うほど木肌が滑らかになり、<br class="pc-only">自然な艶が生まれ、色合いも深くなります。<br>同じ木はひとつもなく、月日とともにそれぞれ独自の色合いに変化し、<br class="pc-only">あなたに馴染んでいき、世界にひとつの家具になっていきます。',
              ],
          ];
          foreach ( $mv_block as $item ) {
      ?>
      <div class="mv_block">
        <h2 class="mv_block_heading"><?= wp_kses_post( $item['title'] ); ?></h2>
        <p class="mv_block_text"><?= wp_kses_post( $item['text'] ); ?></p>
      </div>
      <?php } ?>
    </div>
  </section>
  <section class="lineup">
    <div class="wrapper">
      <div class="lineup_block">
        <div class="heading">
          <h2 class="heading_main" data-head="LINE UP">ラインナップ</h2>
        </div>
        <div class="btn_shop">
          <div class="btn_shop-wht">
            <a href="<?= esc_url( home_url('/lineup') ); ?>" class="link">
              <span class="link_text">シリーズラインナップ</span>
              <span class="link_image">
                <img src="<?= esc_url(get_theme_file_uri($co_path.'icon-arw-dbl-rgt-blc.svg')); ?>" alt="">
              </span>
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="lineup_unit">
      <?php
                $lineup_unit = [
                    [
                        'link' => '#muku',
                        'title-front' => '無垢',
                        'text' => 'Muku',
                        'title-back' => 'どの角度から見ても<br class="pc-escape">無垢材を感じることができる',
                        'src-pc-times' => 'img-lineup01_pc@2x.webp',
                        'src-pc' => 'img-lineup01_pc.webp',
                        'src-sp-times' => 'img-lineup01_sp@2x.webp',
                        'src-sp' => 'img-lineup01_sp.webp',
                        'alt' => '「無垢」のイメージ',
                    ],
                    [
                        'link' => '#koshi',
                        'title-front' => '格子',
                        'text' => 'Ko-Shi',
                        'title-back' => '全面無垢材、<br class="pc-escape">格子の存在感',
                        'src-pc-times' => 'img-lineup02_pc@2x.webp',
                        'src-pc' => 'img-lineup02_pc.webp',
                        'src-sp-times' => 'img-lineup02_sp@2x.webp',
                        'src-sp' => 'img-lineup02_sp.webp',
                        'alt' => '「格子」のイメージ',
                    ],
                    [
                        'link' => '#original',
                        'title-front' => 'オリジナル',
                        'text' => 'original',
                        'title-back' => '手作業ならではの<br class="pc-escape">オリジナル',
                        'src-pc-times' => 'img-lineup03_pc@2x.webp',
                        'src-pc' => 'img-lineup03_pc.webp',
                        'src-sp-times' => 'img-lineup03_sp@2x.webp',
                        'src-sp' => 'img-lineup03_sp.webp',
                        'alt' => '「オリジナル」のイメージ',
                    ],
                    [
                        'link' => '#symphony',
                        'title-front' => '交響',
                        'text' => 'premium',
                        'title-back' => '無垢材と金属を<br class="pc-escape">一つの交響曲のように調和',
                        'src-pc-times' => 'img-lineup04_pc@2x.webp',
                        'src-pc' => 'img-lineup04_pc.webp',
                        'src-sp-times' => 'img-lineup04_sp@2x.webp',
                        'src-sp' => 'img-lineup04_sp.webp',
                        'alt' => '「交響」のイメージ',
                    ],
                ];
                foreach ( $lineup_unit as $item ) {
            ?>
      <a href="<?= esc_url( home_url('/lineup/' . $item['link']) ); ?>" class="lineup_unit_panel fade-in">
        <picture class="picture">
          <source media="(max-width: 600px)" srcset="<?= get_theme_file_uri( $hm_path.$item['src-sp'] );?> 1x, <?= get_theme_file_uri( $hm_path.$item['src-sp-times'] );?> 2x">
          <source media="(min-width: 601px)" srcset="<?= get_theme_file_uri( $hm_path.$item['src-pc'] );?> 1x, <?= get_theme_file_uri( $hm_path.$item['src-pc-times'] );?> 2x">
          <img src="<?= get_theme_file_uri( $hm_path.$item['src-pc-times'] );?>" alt="<?= esc_attr( $item['alt'] ); ?>">
        </picture>
        <div class="front">
          <h3 class="front_subheading"><?= wp_kses_post( $item['title-front'] ); ?></h3>
          <div class="front_deco">~ <?= esc_html( $item['text'] ); ?> ~</div>
          <div class="front_btn">
            <div class="link">
              <span class="link_text">View more</span>
              <span class="link_image">
                <img src="<?= esc_url(get_theme_file_uri($co_path.'icon-arw-dbl-rgt-blc.svg')); ?>" alt="">
              </span>
            </div>
          </div>
        </div>
        <div class="back">
          <p class="back_subheading"><?= wp_kses_post( $item['title-back'] ); ?></p>
          <div class="back_btn">
            <div class="link">
              <span class="link_text">View more</span>
              <span class="link_image">
                <img src="<?= esc_url(get_theme_file_uri($co_path.'icon-arw-dbl-rgt-blc.svg')); ?>" alt="">
              </span>
            </div>
          </div>
        </div>
      </a>
      <?php } ?>
    </div>
  </section>
  <section class="prologue common">
    <div class="wrapper">
      <div class="heading">
        <h2 class="heading_main" data-head="PROLOGUE">プロローグ</h2>
        <h3 class="subheading fade-appear">幼い頃に触れた“モノヅクリ”</h3>
      </div>
      <div class="textarea">
        <?php
            $prologue_text = [
                [ 'text' => '僕の爺ちゃんは島で民宿を営んでいて、休みになれば手伝いに行っていました。<br>テントを張ったり、雨漏りしているトタンの屋根を張り替えたり、<br class="pc-only">小学生ながら少しは役に立ってるぞ！と思いながら作業してたのを<br class="pc-only">今でも鮮明に覚えています。' ],
                [ 'text' => '島にはゲームもオモチャもなく、友達もいません。<br>島に流れ着いた棒を振り回しては遊んだりしていました。<br>その棒から爺ちゃんがナタやカンナなどであっという間に<br class="pc-only">かっこいい刀を作ってくれました。僕は嬉しく嬉しくて、<br class="pc-only">学校まで持っていったほどでした。（先生にすぐに没収されましたが…）' ],
            ];
            foreach ( $prologue_text as $item ) {
          ?>
        <p class="util_text-blc fade-in"><?= wp_kses_post( $item['text'] ); ?></p>
        <?php } ?>
      </div>
      <div class="btn_shop-wht fade-appear">
        <a href="<?= esc_url( home_url('/about/#prologue') ); ?>" class="link">
          <span class="link_text">2章：ハンドメイド家具との出会い</span>
          <span class="link_image">
            <img src="<?= esc_url(get_theme_file_uri($co_path.'icon-arw-dbl-rgt-blc.svg')); ?>" alt="">
          </span>
        </a>
      </div>
      <div class="common_image">
        <?php
                    $prologue_unit = [
                        [
                            'src-pc-times' => 'img-top-plg01_pc@2x.webp',
                            'src-pc' => 'img-top-plg01_pc.webp',
                            'src-sp-times' => 'img-top-plg01_sp@2x.webp',
                            'src-sp' => 'img-top-plg01_sp.webp',
                            'alt' => '海に流れ着いた木材',
                        ],
                        [
                            'src-pc-times' => 'img-top-plg02_pc@2x.webp',
                            'src-pc' => 'img-top-plg02_pc.webp',
                            'src-sp-times' => 'img-top-plg02_sp@2x.webp',
                            'src-sp' => 'img-top-plg02_sp.webp',
                            'alt' => '堤防から見える小島',
                        ],
                    ];
                    foreach ( $prologue_unit as $item ) {
                ?>
        <picture class="common_image_picture fade-right">
          <source media="(max-width: 600px)" srcset="<?= get_theme_file_uri( $hm_path.$item['src-sp'] );?> 1x, <?= get_theme_file_uri( $hm_path.$item['src-sp-times'] );?> 2x">
          <source media="(min-width: 601px)" srcset="<?= get_theme_file_uri( $hm_path.$item['src-pc'] );?> 1x, <?= get_theme_file_uri( $hm_path.$item['src-pc-times'] );?> 2x">
          <img src="<?= get_theme_file_uri( $hm_path.$item['src-pc-times'] );?>" alt="<?= esc_attr( $item['alt'] ); ?>">
        </picture>
        <?php } ?>
      </div>
    </div>
  </section>
  <section class="semi-order common">
    <div class="wrapper">
      <div class="heading">
        <h2 class="heading_main" data-head="SEMI ORDER">セミオーダー</h2>
        <h3 class="subheading">手作りだから理想を形に</h3>
      </div>
      <div class="textarea">
        <?php
                    $semi_odr_text = [
                        [ 'text' => '手作りの家具は、単なる家具ではなく、理想の暖かみを形にする手段です。<br>木材の優れた素材感、職人の丹精込めた技術が、<br class="pc-only">空間に唯一無二の独自性をもたらします。' ],
                        [ 'text' => '家具は単なる機能の道具ではありません。<br>手仕事がもたらす暖かみや独自の風合いは、生活空間に心地よいアクセントを添<br class="pc-only">え、日常に特別な価値をもたらします。' ],
                    ];
                    foreach ( $semi_odr_text as $item ) {
                ?>
        <p class="util_text-blc fade-in"><?= wp_kses_post( $item['text'] ); ?></p>
        <?php } ?>
      </div>
      <div class="btn_shop-wht fade-appear">
        <a href="<?= esc_url( home_url('/semi-order') ); ?>" class="link">
          <span class="link_text">セミオーダーについて</span>
          <span class="link_image">
            <img src="<?= esc_url(get_theme_file_uri($co_path.'icon-arw-dbl-rgt-blc.svg')); ?>" alt="">
          </span>
        </a>
      </div>
      <div class="common_image">
        <?php
                    $semi_odr_unit = [
                        [
                            'src-pc-times' => 'img-top-s-odr_pc@2x.webp',
                            'src-pc' => 'img-top-s-odr_pc.webp',
                            'src-sp-times' => 'img-top-s-odr_sp@2x.webp',
                            'src-sp' => 'img-top-s-odr_sp.webp',
                            'alt' => '設計図',
                        ],
                    ];
                    foreach ( $semi_odr_unit as $item ) {
                ?>
        <picture class="common_image_picture fade-right">
          <source media="(max-width: 600px)" srcset="<?= get_theme_file_uri( $hm_path.$item['src-sp'] );?> 1x, <?= get_theme_file_uri( $hm_path.$item['src-sp-times'] );?> 2x">
          <source media="(min-width: 601px)" srcset="<?= get_theme_file_uri( $hm_path.$item['src-pc'] );?> 1x, <?= get_theme_file_uri( $hm_path.$item['src-pc-times'] );?> 2x">
          <img src="<?= get_theme_file_uri( $hm_path.$item['src-pc-times'] );?>" alt="<?= esc_attr( $item['alt'] ); ?>">
        </picture>
        <?php } ?>
      </div>
    </div>
  </section>
  <?php
        $hm_blog_qry = new WP_Query();
        $hm_blog_args = array(
            'post_type' => 'blog',
            'posts_per_page' => 4,
        );
        $hm_blog_qry->query( $hm_blog_args );
        if( $hm_blog_qry->have_posts() ):
    ?>
  <section class="blog">
    <div class="wrapper">
      <div class="blog_block">
        <div class="heading">
          <h2 class="heading_main" data-head="BLOG">ブログ</h2>
        </div>
        <div class="btn_shop">
          <div class="btn_shop-wht">
            <a href="<?= esc_url( home_url('/blog') ); ?>" class="link">
              <span class="link_text">ブログ一覧</span>
              <span class="link_image">
                <img src="<?= esc_url(get_theme_file_uri($co_path.'icon-arw-dbl-rgt-blc.svg')); ?>" alt="">
              </span>
            </a>
          </div>
        </div>
      </div>
      <div class="blog_swiper">
        <div class="swiper">
          <div class="swiper-container">
            <div class="swiper-wrapper">
              <?php
                                while ( $hm_blog_qry->have_posts() ) :
                                    $hm_blog_qry->the_post();
                            ?>
              <div class="swiper-slide">
                <a href="<?php the_permalink(); ?>" class="swiper-slide-link">
                  <article class="article">
                    <p class="article_image">
                      <?php
                                                $image_id = get_post_thumbnail_id(get_the_ID());
                                                $alt_text = get_post_meta($image_id, '_wp_attachment_image_alt', true);
                                                $image_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
                                                if($image_url) {
                                            ?>
                      <img src="<?= $image_url; ?>" alt="<?= $alt_text; ?>">
                      <?php } else { ?>
                      <img src="<?= get_theme_file_uri($co_path.'no-img.webp'); ?>" alt="アイキャッチ画像がありません">
                      <?php } ?>
                    </p>
                    <div class="article_panel">
                      <time class="article_panel_time" datetime="<?php the_time('Y.m.d'); ?>"><?php the_time('Y.m.d'); ?></time>
                      <h3 class="article_panel_heading">
                        <?php
                                                    if(mb_strlen($post->post_title, 'UTF-8') > 20){
                                                        $title= mb_substr($post->post_title, 0, 20, 'UTF-8');
                                                        echo $title.'…';
                                                    } else {
                                                        echo $post->post_title;
                                                    }
                                                ?>
                      </h3>
                    </div>
                  </article>
                </a>
              </div>
              <?php endwhile; ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php
        endif;
        wp_reset_postdata();
    ?>
  <?php
        $hm_news_qry = new WP_Query();
        $hm_news_args = array(
            'post_type' => 'post',
            'posts_per_page' => 4,
        );
        $hm_news_qry->query( $hm_news_args );
        if( $hm_news_qry->have_posts() ):
    ?>
  <section class="news">
    <div class="deco">
      <?php
                $news_deco = [
                    [ 'text' => 'HAND MADE' ],
                ];
                foreach ( $news_deco as $item ) {
            ?>
      <div class="deco-text"><?= esc_html( $item['text'] ); ?></div>
      <?php } ?>
    </div>
    <div class="wrapper">
      <div class="news_block">
        <div class="heading">
          <h2 class="heading_main" data-head="NEWS">お知らせ</h2>
        </div>
        <div class="btn_shop">
          <div class="btn_shop-wht">
            <a href="<?= esc_url( home_url('/news') ); ?>" class="link">
              <span class="link_text">お知らせ一覧</span>
              <span class="link_image">
                <img src="<?= esc_url(get_theme_file_uri($co_path.'icon-arw-dbl-rgt-blc.svg')); ?>" alt="">
              </span>
            </a>
          </div>
        </div>
      </div>
      <div class="news_list">
        <?php
                    while ($hm_news_qry->have_posts() ) :
                        $hm_news_qry->the_post();
                ?>
        <article class="news_list_article fade-in">
          <a href="<?= esc_url( the_permalink() ); ?>" class="link">
            <div class="link_unit">
              <time class="link_unit_time" datetime="<?php the_time('Y/m/d'); ?>"><?php the_time('Y/m/d') ?></time>
              <h2 class="link_unit_heading"><?php the_title(); ?></h2>
            </div>
          </a>
        </article>
        <?php
                    endwhile;
                ?>
      </div>
    </div>
  </section>
  <?php
        endif;
        wp_reset_postdata();
    ?>
</main>
<?php get_footer(); ?>