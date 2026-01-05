<?php
/*
Template Name: ラインナップ
*/
if (!defined('ABSPATH')) exit;
$co_path = 'images/common/';
$co_jpg_path = 'images/common/jpg/';
$co_png_path = 'images/common/png/';
$co_svg_path = 'images/common/svg/';
$page_jpg_path = 'images/page/jpg/';
$page_png_path = 'images/page/png/';
$page_svg_path = 'images/page/svg/';
?>
<?php get_header(); ?>
<main class="page lineup">
  <section class="lineup">
    <div class="lineup__inner">
      <div class="wrapper">
        <div class="heading">
          <h1 class="heading_main" data-head="LINE UP">ラインナップ</h1>
        </div>
      </div>
    </div>
    <?php
    $lineup_unit = [
      [
        'link' => '#muku',
        'link-shop' => 'https://ninostyle-shop.net/products/list?category_id=7',
        'title-front' => '無垢',
        'title-sub' => 'Muku',
        'catch' => '無垢をあじわう。',
        'text' => ' 〜muKu〜styleでは、その名の通りどの角度から見ても無垢材を感じることができます。<br>
                                無垢材は丈夫で耐久年数が長く、使い込まれるほどに風合いが豊かになっていく素材です。<br>
                                品質・性能が低下する「経年劣化」ではなく、<br>
                                アンティークのような味わいが出てくる「経年変化」を楽しめます。<br>
                                使い込まれるほどに風合いが豊かになっていく無垢材が持つ質感や温かみは、<br>
                                設置したその瞬間から生活に溶け込み、忙しい日々を送る私たちに優しく寄り添い、<br>
                                心をほっこりさせてくれます。<br>
                                素材の良さを存分に引き出すのが家具職人としての誇りです。<br>
                                木の個性や形状に合わせて、いくつもの道具を巧みに使いこなします。',
        'src-pc-times' => 'img-lineup-muku01_pc@2x.jpg',
        'src-pc' => 'img-lineup-muku01_pc.jpg',
        'src-sp-times' => 'img-lineup-muku01_sp@2x.jpg',
        'src-sp' => 'img-lineup-muku01_sp.jpg',
        'alt' => '無垢の家具',
        'furniture' => [
          [
            'title' => 'color:オーク',
            'src-ft-pc' => 'img-lineup-muku-sub01.png',
            'src-ft-pc-times' => 'img-lineup-muku-sub01@2x.png',
            'ft-alt' => 'color:オーク',
          ],
          [
            'title' => 'color:ミディアムブラウン',
            'src-ft-pc' => 'img-lineup-muku-sub02.png',
            'src-ft-pc-times' => 'img-lineup-muku-sub02@2x.png',
            'ft-alt' => 'color:ミディアムブラウン',
          ],
          [
            'title' => 'color:ダークブラウン',
            'src-ft-pc' => 'img-lineup-muku-sub03.png',
            'src-ft-pc-times' => 'img-lineup-muku-sub03@2x.png',
            'ft-alt' => 'color:ダークブラウン',
          ],
        ],
      ],
      [
        'link' => '#koshi',
        'link-shop' => 'https://ninostyle-shop.net/products/list?category_id=8',
        'title-front' => '格子',
        'title-sub' => 'Ko-Shi',
        'catch' => '全面無垢材、<br class="sp-only">格子の存在感',
        'text' => '～Ko-Shi～styleのシリーズでは、その名の通り、どの角度から見ても無垢材を感じることができます。<br class="pc-lg-escape">
                                無垢材が持つ質感や温かみは設置したその瞬間から生活に溶け込み、
                                心をほっこりさせてくれます。<br>日々忙しい生活を送る私たちの無垢材は優しく寄り添ってくれます。',
        'src-pc-times' => 'img-lineup-ko-shi01_pc@2x.jpg',
        'src-pc' => 'img-lineup-ko-shi01_pc.jpg',
        'src-sp-times' => 'img-lineup-ko-shi01_sp@2x.jpg',
        'src-sp' => 'img-lineup-ko-shi01_sp.jpg',
        'alt' => '格子の家具',
        'furniture' => [
          [
            'title' => 'color:ミディアムブラウン',
            'src-ft-pc' => 'img-lineup-ko-shi-sub01.png',
            'src-ft-pc-times' => 'img-lineup-ko-shi-sub01@2x.png',
            'ft-alt' => 'color:ミディアムブラウン',
          ],
          [
            'title' => 'color:color:ダークブラウン',
            'src-ft-pc' => 'img-lineup-ko-shi-sub02.png',
            'src-ft-pc-times' => 'img-lineup-ko-shi-sub02@2x.png',
            'ft-alt' => 'color:ダークブラウン',
          ],
        ],
      ],
      [
        'link' => '#original',
        'link-shop' => 'https://ninostyle-shop.net/products/list?category_id=9',
        'title-front' => 'オリジナル',
        'title-sub' => 'original',
        'catch' => '手作業だから<br class="sp-only">生み出せる<br class="sp-only">オリジナルstyle。',
        'text' => '～Original～styleでは「muku」「Ko-shi」それぞれのスタイルの良さを<br>
                                ミックスさせ、さらにオリジナルな一点ものの商品がラインナップされています。<br>
                                無垢材のみ使用した商品もご用意しておりますが<br>
                                オリジナルならではのスチール脚を使用した商品もあり、<br>
                                無垢材と異素材の組み合わせが一層家具を引き立たせてくれるので<br>
                                お部屋の雰囲気やお好みのテイストに合わせた<br>
                                商品をお探しの方にピッタリなシリーズとなっています。<br>
                                手作業で制作するニノミヤ家具だからこそ生み出せるオリジナルstyleを<br>
                                ぜひご覧になってみてください。',
        'src-pc-times' => 'img-lineup-original01_pc@2x.jpg',
        'src-pc' => 'img-lineup-original01_pc.jpg',
        'src-sp-times' => 'img-lineup-original01_sp@2x.jpg',
        'src-sp' => 'img-lineup-original01_sp.jpg',
        'alt' => '「オリジナル」の家具',
        'furniture' => [
          [
            'title' => '鉄脚 ダークブラウン',
            'src-ft-pc' => 'img-lineup-original-sub01.png',
            'src-ft-pc-times' => 'img-lineup-original-sub01@2x.png',
            'ft-alt' => '鉄脚 ダークブラウン',
          ],
          [
            'title' => '木脚 オーク 格子',
            'src-ft-pc' => 'img-lineup-original-sub02.png',
            'src-ft-pc-times' => 'img-lineup-original-sub02@2x.png',
            'ft-alt' => '木脚 オーク 格子',
          ],
        ],
      ],
      [
        'link' => '#symphony',
        'link-shop' => 'https://ninostyle-shop.net/products/list?category_id=11',
        'title-front' => '交響',
        'title-sub' => 'Symphony',
        'catch' => '無垢材と金属が<br>交響曲のように調和',
        'text' => '無垢材と金属が交響曲のように調和し、<br>
                                美しいデザインを生み出しているイメージを表現します。',
        'src-pc-times' => 'img-lineup-symphony01_pc@2x.jpg',
        'src-pc' => 'img-lineup-symphony01_pc.jpg',
        'src-sp-times' => 'img-lineup-symphony01_sp@2x.jpg',
        'src-sp' => 'img-lineup-symphony01_sp.jpg',
        'alt' => 'symphonyの家具',
        'furniture' => [
          [
            'title' => '',
            'src-ft-pc' => 'img-lineup-symphony-sub01.png',
            'src-ft-pc-times' => 'img-lineup-symphony-sub01@2x.png',
            'ft-alt' => 'symphony',
          ],

        ],
      ],
      [
        'link' => '#premium',
        'link-shop' => 'https://ninostyle-shop.net/products/list?category_id=10',
        'title-front' => 'プレミアム',
        'title-sub' => 'Premium',
        'catch' => '職人がこだわり抜いた<br>これぞプレミアムな一点。',
        'text' => '～Premium~style で使用されるのは無垢材の中でも<br>
                            極上の無垢材のみ使用されたシリーズです。<br>
                            全く同じものは世界にひとつもない、職人の想いやこだわりが<br>
                            全てたっぷり込められた一点限りのプレミアム商品です。<br>
                            特別な家具をお探しの方や長く使える家具でお部屋をランクアップさせたい方に
                            おすすめのシリーズとなっています。<br>
                            「～muku～」「～Ko-shi～」「~Original~」とは違ったラインで<br>
                            世界に一つの一点ものをお届けいたします。',
        'src-pc-times' => 'img-lineup-premium01_pc@2x.jpg',
        'src-pc' => 'img-lineup-premium01_pc.jpg',
        'src-sp-times' => 'img-lineup-premium01_sp@2x.jpg',
        'src-sp' => 'img-lineup-premium01_sp.jpg',
        'alt' => '「プレミアム」の家具',
      ],
    ];
    foreach ($lineup_unit as $item) {
    ?>
      <article class="lineup_feature" data-id="<?= $item['link'] ?>">
        <!-- package.scssに記載 -->
        <div class="package_inner">
          <picture class="package_inner_image fade-left">
            <source media="(max-width: 600px)" srcset="<?= get_theme_file_uri($page_jpg_path . $item['src-sp']); ?> 1x, <?= get_theme_file_uri($page_jpg_path . $item['src-sp-times']); ?> 2x">
            <source media="(min-width: 601px)" srcset="<?= get_theme_file_uri($page_jpg_path . $item['src-pc']); ?> 1x, <?= get_theme_file_uri($page_jpg_path . $item['src-pc-times']); ?> 2x">
            <img src="<?= get_theme_file_uri($page_jpg_path . $item['src-pc']); ?>" alt="<?= esc_attr($item['alt']); ?>">
          </picture>
          <div class="package_inner_content fade-right">
            <h2 class="package_inner_content_heading"><?= wp_kses_post($item['title-front']); ?></h2>
            <div class="package_inner_content_subTitle">~ <?= wp_kses_post($item['title-sub']); ?> ~</div>
            <h3 class="package_inner_content_catch"><?= wp_kses_post($item['catch']); ?></h3>
            <p class="package_inner_content_text">
              <?= wp_kses_post($item['text']); ?>
            </p>
            <!-- btn.scssに記載 -->
            <div class="btn_shop-wht">
              <a href="<?= esc_url($item['link-shop']); ?>" class="link" target="_blank">
                <span class="link_icon">
                  <img src="<?= get_theme_file_uri($page_svg_path . 'icon-cart.svg'); ?>" alt="注文カート">
                </span>
                <span class="link_text">ご注文はこちら</span>
                <span class="link_image">
                  <img src="<?= esc_url(get_theme_file_uri($co_path . 'icon-arw-dbl-rgt-blc.svg')); ?>" alt="右向き矢印">
                </span>
              </a>
            </div>
          </div>
        </div>
        <?php if (isset($item['furniture'])) { ?>
          <div class="container fade-in">
            <div class="lineup_feature_deco">NINOMIYA KAGU</div>
            <div class="lineup_feature_items">
              <?php foreach ($item['furniture'] as $furniture_item) { ?>
                <div class="item">
                  <picture class="image">
                    <source srcset="<?= get_theme_file_uri($page_png_path . $furniture_item['src-ft-pc']); ?> 1x, <?= get_theme_file_uri($page_png_path . $furniture_item['src-ft-pc-times']); ?> 2x">
                    <img src="<?= get_theme_file_uri($page_png_path . $furniture_item['src-ft-pc']); ?>" alt="<? esc_attr($furniture_item['ft-alt']); ?>">
                  </picture>
                  <p><?= $furniture_item['title']; ?></p>
                </div>
              <?php } ?>
            </div>
          </div>
        <?php } ?>
      </article>
    <?php } ?>
  </section>
</main>
<?php get_footer(); ?>