<?php
/*
Template Name: セミオーダー
*/
if ( !defined( 'ABSPATH' ) ) exit;
$co_jpg_path = 'images/common/jpg/';
$co_png_path = 'images/common/png/';
$co_svg_path = 'images/common/svg/';
$page_jpg_path = 'images/page/jpg/';
$page_png_path = 'images/page/png/';
$page_svg_path = 'images/page/svg/';
$co_path = 'images/common/';
?>
<?php get_header(); ?>
<main class="page order">
  <div class="heading">
    <h1 class="heading_main" data-head="SEMI ORDER">セミオーダー</h1>
  </div>
  <section class="hero">
    <div class="container">
      <div class="hero_inner">
        <h2 class="hero_inner_title">
          いつもの空間に<br>
          ぴったりの世界にひとつを。
        </h2>
        <p class="hero_inner_text">
          ニノミヤ家具製作所では、デザインから製作販売まで一貫して自社工房にて行っております。<br>
          そのため、お客様の細かいご要望にも柔軟に対応できる体制となっております。<br>
          セミオーダーとは、既製品をお客様のご要望に合わせて、<br>
          サイズやレイアウトを変えるオーダー方法です。<br>
          既製品がベースとなりますので、イメージがしやすくなっています。
        </p>
        <div class="btn_shop-wht">
          <a href="<?= esc_url('https://ninostyle-shop.net/contact') ?>" class="link" target="_blank">
            <span class="link_text">セミオーダーはこちらから</span>
            <span class="link_image">
              <img src="<?= esc_url(get_theme_file_uri($co_path .'icon-arw-dbl-rgt-blc.svg')); ?>" alt="右向き矢印">
            </span>
          </a>
        </div>
      </div>
    </div>
  </section>

  <section class="about">
    <div class="container">
      <h2 class="deco" data-title="セミオーダーに関して">NOTES</h2>
      <ul class="about_list">
        <li>既製品よりもサイズの小さいセミオーダーでも価格が下がることはありません。<br class="pc-escape">（図面の修正、製作工程が変わるため）</li>
        <li>変更サイズ、レイアウト（引出し・扉・棚板など）によって価格が前後いたします。</li>
        <li>価格重視の方は既製品からお選びいただくことをお勧めします。</li>
        <li>既製品はマニュアルが完成されているため、お求めになりやすい価格設定になっております。</li>
        <li>変更サイズや重さによっては、別途送料を頂戴してお届けさせていただく場合もあります。</li>
        <li>その他、ご質問やご相談などはメールにてお問い合わせください。</li>
      </ul>
    </div>
  </section>

  <section class="flow">
    <h2 class="deco" data-title="ご注文の流れ">FLOW</h2>
    <div class="flow_inner">
      <picture class="flow_inner_image">
        <source srcset="<?= get_theme_file_uri($page_jpg_path.'img-flow01_pc.jpg');?> 1x, <?= get_theme_file_uri($page_jpg_path.'img-flow01_pc@2x.jpg');?> 2x">
        <img src="<?= get_theme_file_uri($page_jpg_path.'img-flow01_pc@2x.jpg');?>" alt="家具">
      </picture>
      <ul class="flow_inner_list">
        <li class="item">
          <span>①</span>
          <p>まずはお問い合わせフォームよりご連絡ください</p>
        </li>
        <li class="item">
          <span>②</span>
          <p>ご記入いただいたサイズからお見積りを算出いたします</p>
        </li>
        <li class="item">
          <span>③</span>
          <p>お支払い確認後、制作を開始いたします<br>（お届けは3ヶ月以内目安）</p>
        </li>
        <li class="item">
          <span>④</span>
          <p>完成したセミオーダー家具をお届けいたします</p>
        </li>
      </ul>
    </div>
  </section>

  <section class="price">
    <div class="container">
      <h2 class="deco" data-title="セミオーダー価格目安">PRICE</h2>
      <table class="price_table">
        <tr class="price_table_item">
          <th>脚の長さ調整</th>
          <td>3,000円～10,000円</td>
        </tr>
        <tr class="price_table_item">
          <th>幅の調整</th>
          <td>5,000円～25,000円</td>
        </tr>
        <tr class="price_table_item">
          <th>奥行の調整</th>
          <td>5,000円～25,000円</td>
        </tr>
        <tr class="price_table_item">
          <th>高さの調整</th>
          <td>5,000円～25,000円</td>
        </tr>
        <tr class="price_table_item">
          <th>その他の調整</th>
          <td>5,000円～</td>
        </tr>
      </table>
    </div>
  </section>

  <section class="faq">
    <div class="container">
      <h2 class="deco" data-title="よくある質問">Q&A</h2>
      <?php
      $faqs = [
          [
              'question' => '納期はどれくらいかかりますか？',
              'answer' => 'ご注文をいただいてから制作に入りますので、混雑状況によって変動しますが、基本的には30日前後のお時間をいただいております。セミオーダー品の場合は、45日前後です。早めの納品をご希望の場合は、優先制作のオプションもございますので、お気軽にお問い合わせください。'
          ],
          [
              'question' => '日付指定は可能ですか？',
              'answer' => '基本的には、納期の範囲内で日付指定が可能です。ただし、180cmを超える商品については、ご相談させていただく場合がございます。お客様のご希望にできる限り沿うよう対応いたします。'
          ],
          [
              'question' => '完成品で届きますか？',
              'answer' => 'はい、基本的には完成品でお届けいたします。ただし、木製の足や鉄製の脚はお客様にて取り付けをお願いしております。足の取り付けは、回すだけで簡単にできます。鉄脚の場合も、ドライバー1本で簡単に取り付け可能ですのでご安心ください。'
          ],
          [
              'question' => '木の質感や色味を見たいのですが、サンプルをもらえますか？',
              'answer' => 'もちろん可能です。①郵便番号 ②ご住所 ③お名前 ④ご希望の色を、お問い合わせフォームよりご記入ください。お手元に無料サンプルをお届けいたしますので、実際に手に取ってお確かめいただけます。'
          ],
          [
              'question' => 'どこまで配送してもらえますか？',
              'answer' => '配送は佐川急便と西濃運輸を使用しており、玄関口までのお届けとなります。商品は玄関口でのお引き渡しとなり、室内までの搬入や設置は行っておりませんのでご了承ください。'
          ],
          [
              'question' => 'リモコン操作は可能ですか？',
              'answer' => '二宮家具製作所の無垢材家具は、前板が約2cmの厚みがあるため、リモコン信号は通りにくくなっています。Amazonや楽天などで販売されている「リモコンベンダー」をご利用いただくことで、無垢材の質感をそのままにリモコン操作が可能となります。こちらもぜひご検討ください。'
          ],
          [
              'question' => '色の変更は可能ですか？',
              'answer' => 'はい、既存の色であれば無料で変更可能です。また、特定の色をご希望の場合は、画像などをお送りいただければ、できる限りご希望に近づけた色で製作するオプションもございます。お問い合わせいただければ、詳細をご案内いたします。'
          ],
          [
              'question' => '木材が反ってしまった場合、どうすればいいですか？',
              'answer' => '無垢材特有の反りを防ぐために、反り止め加工を施しておりますが、それでも反りが発生する可能性があります。もし反りが発生し、使用に支障がある場合は、1ヵ月以内の初期不良であれば無償で修理いたします。また、1ヵ月以上経過した場合でも、送料をご負担いただければ、無料で修理を承りますのでご安心ください。'
          ]
      ];
      ?>
      <ul class="faq_content">
          <?php foreach ($faqs as $faq): ?>
              <li class="faq_content_item">
                  <p class="question"><span>Q.</span><?php echo esc_html($faq['question']); ?></p>
                  <div class="answer">
                      <span>A.</span>
                      <p><?php echo wp_kses_post($faq['answer']); ?></p>
                  </div>
              </li>
          <?php endforeach; ?>
      </ul>
      <!-- <div class="btn_shop-wht">
                <a class="link">
                    <span class="link_text">お問い合わせはこちらから</span>
                    <span class="link_image">
                        <img src="<?= esc_url(get_theme_file_uri($co_path .'icon-arw-dbl-rgt-blc.svg')); ?>" alt="右向き矢印">
                    </span>
                </a>
            </div> -->
    </div>
  </section>
</main>
<?php get_footer(); ?>