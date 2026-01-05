<?php
/*
Template Name: ABOUT
*/
if ( !defined( 'ABSPATH' ) ) exit;
$co_path = 'images/common/';
$co_jpg_path = 'images/common/jpg/';
$co_png_path = 'images/common/png/';
$co_svg_path = 'images/common/svg/';
$page_jpg_path = 'images/page/jpg/';
$page_png_path = 'images/page/png/';
$page_svg_path = 'images/page/svg/';
?>
<?php get_header(); ?>
<main class="page about">
  <section class="about">
    <div class="about_inner">
      <div class="heading first">
        <h1 class="heading_main" data-head="ABOUT">ニノミヤ家具について</h1>
      </div>
      <?php
                $about_content = [
                    [
                        'title' => 'ハンドメイド',
                        'title-en' => 'HAND MADE',
                        'text' => ' すべて天然の無垢材を使用しております。<br>
                                    無垢材にはひとつとして同じ物がない自然な木目や既製品や工業製品ではだせない、<br>
                                    「木」本来の質感や温もりがあります。<br>
                                    また、節や欠け、そりなど、ひとつひとつに違った個性を持っています。<br>
                                    塗料も木目により独特なムラが出ます。<br>
                                    それらを、組み合わせることで、同じデザインの家具でも世界でひとつだけの物になり<br>
                                    味わい深い家具になります。',
                        'src-pc-times' => 'img-about01_pc@2x.jpg',
                        'src-pc' => 'img-about01_pc.jpg',
                        'src-sp-times' => 'img-about01_sp@2x.jpg',
                        'src-sp' => 'img-about01_sp.jpg',
                        'alt' => 'ハンドメイド',
                    ],
                    [
                        'title' => 'こだわり',
                        'title-en' => 'COMMITMENT',
                        'text' => ' ニノミヤ家具製作所の家具はご注文をいただいてから、家具職人の手によって手間暇かけて丁寧に製作しております。家具がひとつできあがるまでには、数えきれないほどたくさんの工程があります。<br>
                                    切磋琢磨して磨き上げた技術を持った家具職人だからこそ、難しいデザインでも形になります。素材の良さを存分に引き出すのが家具職人としての誇りです。<br>
                                    木の個性や形状に合わせて、いくつもの道具を巧みに使いこなします。',
                        'src-pc-times' => 'img-about02_pc@2x.jpg',
                        'src-pc' => 'img-about02_pc.jpg',
                        'src-sp-times' => 'img-about02_sp@2x.jpg',
                        'src-sp' => 'img-about02_sp.jpg',
                        'alt' => 'こだわり',
                    ],
                    [
                        'title' => '無垢材',
                        'title-en' => 'SOLID WOOD',
                        'text' => ' 自然で美しい木目と個性豊かな節を楽しむ。<br>
                                    心を込めた手作業による世界にひとつだけの家具。<br>
                                    それは優しい風合いとぬくもりを感じさせてくれます。<br>
                                    経年変化――使えば使うほど木肌が滑らかになり、自然な艶が生まれ、色合いも深くなります。<br>
                                    同じ木はひとつもなく、月日とともにそれぞれ独自の色合いに変化し、あなたに馴染んでいき、世界にひとつの家具になっていきます。',
                        'src-pc-times' => 'img-about03_pc@2x.jpg',
                        'src-pc' => 'img-about03_pc.jpg',
                        'src-sp-times' => 'img-about03_sp@2x.jpg',
                        'src-sp' => 'img-about03_sp.jpg',
                        'alt' => 'こだわり',
                    ],

                ];
                foreach ( $about_content as $item ) {
            ?>
      <article class="about_inner_content fade-in">
        <div class="about_inner_content_image">
          <picture class="image">
            <source media="(max-width: 600px)" srcset="<?= get_theme_file_uri($page_jpg_path.$item['src-sp']);?> 1x, <?= get_theme_file_uri($page_jpg_path.$item['src-sp-times']);?> 2x">
            <source media="(min-width: 601px)" srcset="<?= get_theme_file_uri($page_jpg_path.$item['src-pc']);?> 1x, <?= get_theme_file_uri($page_jpg_path.$item['src-pc-times']);?> 2x">
            <img src="<?= get_theme_file_uri($page_jpg_path.$item['src-pc']);?>" alt="<?= esc_attr($item['alt']); ?>">
          </picture>
          <div class="lead">
            <p class="lead_title-en"><?= esc_html($item['title-en']); ?></p>
            <p class="lead_title-jp"><?= esc_html($item['title']); ?></p>
          </div>
        </div>
        <p class="about_inner_content_text"><?= wp_kses_post($item['text']); ?></p>
      </article>
      <?php } ?>
    </div>
  </section>

  <section class="prologue" data-id="#prologue">
    <div class="prologue_inner">
      <div class="heading second">
        <h1 class="heading_main" data-head="PROLOGUE">プロローグ</h1>
      </div>
      <P class="prologue_inner_desc">
        無垢材の魅力にとりつかれ、<br>
        香川県の田舎でコツコツとハンドメイド家具を製作している、職人二宮は<br>
        なぜハンドメイド家具を製作するようになったのか<br>
        ニノミヤ家具のブランドストーリーをプロローグとしてご紹介。
      </P>
    </div>
    <!-- package.scssに記載 -->
    <div id="flipbook">
      <!-- 1ページ目 -->
      <article class="package_inner active page1">
        <picture class="package_inner_image">
          <source media="(max-width: 1024px)" srcset="<?= get_theme_file_uri($page_jpg_path.'img-about04_sp.jpg');?> 1x, <?= get_theme_file_uri($page_jpg_path.'img-about04_sp@2x.jpg');?> 2x">
          <source media="(min-width: 1025px)" srcset="<?= get_theme_file_uri($page_jpg_path.'img-about04_pc.jpg');?> 1x, <?= get_theme_file_uri($page_jpg_path.'img-about04_pc@2x.jpg');?> 2x">
          <img src="<?= get_theme_file_uri($page_jpg_path.'img-about04_pc.jpg');?>" alt="浜辺">
        </picture>
        <div class="package_inner_content">
          <h2 class="package_inner_content_number">第一章</h2>
          <h2 class="package_inner_content_heading">幼い頃に触れた“モノヅクリ”</h2>
          <p class="package_inner_content_text">
            僕の爺ちゃんは島で民宿を営んでいて、休みになれば手伝いに行っていました。<br>
            テントを張ったり、雨漏りしているトタンの屋根を張り替えたり、<br>
            小学生ながら少しは役に立ってるぞ！と思いながら作業してたのを<br>
            今でも鮮明に覚えています。
          </p>
          <p class="package_inner_content_text">
            島にはゲームもオモチャもなく、友達もいません。<br>
            島に流れ着いた棒を振り回しては遊んだりしていました。<br>
            その棒から爺ちゃんがナタやカンナなどで<br>
            あっという間にかっこいい刀を作ってくれました。<br>
            僕は嬉しく嬉しくて、学校まで持っていったほどでした。<br>
            （先生にすぐに没収されましたが…）
          </p>
          <!-- btn.scssに記載 -->
          <div class="btn_shop-wht btn_shop-wht-next pc-only">
            <a class="link">
              <span class="link_text">NEXT</span>
              <span class="link_image">
                <img src="<?= esc_url(get_theme_file_uri($co_path .'icon-arw-dbl-rgt-blc.svg')); ?>" alt="右向き矢印">
              </span>
            </a>
          </div>
        </div>
      </article>
      <!-- 2ページ目 -->
      <article class="package_inner page2">
        <picture class="package_inner_image">
          <source media="(max-width: 1024px)" srcset="<?= get_theme_file_uri($page_jpg_path.'img-about05_sp.jpg');?> 1x, <?= get_theme_file_uri($page_jpg_path.'img-about05_sp@2x.jpg');?> 2x">
          <source media="(min-width: 1025px)" srcset="<?= get_theme_file_uri($page_jpg_path.'img-about05_pc.jpg');?> 1x, <?= get_theme_file_uri($page_jpg_path.'img-about05_pc@2x.jpg');?> 2x">
          <img src="<?= get_theme_file_uri($page_jpg_path.'img-about04_pc.jpg');?>" alt="職人">
        </picture>
        <div class="package_inner_content">
          <h2 class="package_inner_content_number">第二章</h2>
          <h2 class="package_inner_content_heading">ハンドメイド家具との出会い</h2>
          <p class="package_inner_content_text">
            社会人になり飲食店で働いていた僕は、新店舗をオープンする仕事に関わらせていだいていました。<br>
            タイルを貼ったり、床を塗ったり、テーブルを作ったり…。<br>
            ある時研磨する機械を使い、遊びで木を削ってみたら木がとてもツルツルになり、なんともいえないあたたかい雰囲気をその木材から感じました。<br>
            休憩時間にひたすら木を削っていたのですが、「これで家具を作ってみたら、どんな雰囲気になるんかな？」のワクワクから家具作りがスタートしました。<br>
            しかし初めから上手くはいきません。<br>

          </p>
          <p class="package_inner_content_text">
            青空工房の中でのスタートでした。<br>
            無垢材特有の反りにより何度も何度も組み立てますがきちんと収まらず、苦しめられる日々。<br>
            僕が表現したい風合いに何をやっても近づかない、工具の使い方が下手で手はいつも傷だらけ。<br>
            真冬の深夜に作業台の雪を払いのけ作業したのは今では本当にいい思い出です<br>
            そんな中でも日に日に増していく家具への想い‥‥
          </p>
          <!-- btn.scssに記載 -->
          <div class="btn__inner pc-only">
            <div class="btn_shop-wht btn_shop-wht-prev pc-only">
              <a class="link">
                <span class="link_text">BACK</span>
                <span class="link_image">
                  <img src="<?= esc_url(get_theme_file_uri($co_path .'icon-arw-dbl-rgt-blc.svg')); ?>" alt="右向き矢印">
                </span>
              </a>
            </div>
            <div class="btn_shop-wht btn_shop-wht-next pc-only">
              <a class="link">
                <span class="link_text">NEXT</span>
                <span class="link_image">
                  <img src="<?= esc_url(get_theme_file_uri($co_path .'icon-arw-dbl-rgt-blc.svg')); ?>" alt="右向き矢印">
                </span>
              </a>
            </div>
          </div>
        </div>
      </article>
      <!-- 3ページ目 -->
      <article class="package_inner page3">
        <picture class="package_inner_image">
          <source media="(max-width: 1024px)" srcset="<?= get_theme_file_uri($page_jpg_path.'img-about06_sp.jpg');?> 1x, <?= get_theme_file_uri($page_jpg_path.'img-about06_sp@2x.jpg');?> 2x">
          <source media="(min-width: 1025px)" srcset="<?= get_theme_file_uri($page_jpg_path.'img-about06_pc.jpg');?> 1x, <?= get_theme_file_uri($page_jpg_path.'img-about06_pc@2x.jpg');?> 2x">
          <img src="<?= get_theme_file_uri($page_jpg_path.'img-about04_pc.jpg');?>" alt="職人">
        </picture>
        <div class="package_inner_content">
          <h2 class="package_inner_content_number">第三章</h2>
          <h2 class="package_inner_content_heading">無垢材の魅力をより多くの人へ</h2>
          <p class="package_inner_content_text">
            ハンドメイド家具と出会ってから僕に許される時間は全て家具作りに引き寄せられていきました。<br>
            無我夢中で、いつのまにか深夜になっていたことも…。楽しくて楽しくて、寝ても覚めても一日中考えていました。<br>
            気がつけば、木が好きで、インテリアが好きな家具作りが大好きな仲間も増えていき、全国各地の沢山のお客様に製品を届けることができるようになりました。<br>
          </p>
          <p class="package_inner_content_text">
            一つ一つに個性ある無垢材に「ああでもない、こうでもない」と話しながら進める家具作り。<br>
            汗がしたたる夏の暑さや冬の厳しい寒さの工房でも仲間と家具を作る時間は楽しく、<br>
            商品を届けたお客様からの沢山の喜びの声に励まされ、僕の家具への情熱はさらに強くなり夢は大きくなりました。<br>
            「今よりも沢山の人に無垢材の家具を届けたい」<br>
            今日もニヤニヤ（笑）しながらそんな事を想いながら香川の田舎で家具を製作しています
          </p>
          <!-- btn.scssに記載 -->
          <div class="btn_shop-wht btn_shop-wht-prev pc-only">
            <a class="link">
              <span class="link_text">BACK</span>
              <span class="link_image">
                <img src="<?= esc_url(get_theme_file_uri($co_path .'icon-arw-dbl-rgt-blc.svg')); ?>" alt="右向き矢印">
              </span>
            </a>
          </div>
        </div>
      </article>
    </div>
  </section>
</main>

<?php get_footer(); ?>