<!DOCTYPE html>
<html lang="ja">

<head>
  <?php get_header(); ?>
</head>

<body>

  <?php get_template_part('includes/header'); ?>

  <main>
    <section class="main-visual">
      <div class="container inview fadeIn">
        <div class="main-visual__img">

        </div>
        <div class="main-visual__txt ">
          <span><span class="span-inner1">SHOTA</span></span>
          <span><span class="span-inner2">DESIGN</span></span>
          <span><span class="span-inner3">PROTFOLIO</span></span>
        </div>
      </div>
      <div class="top-link">
        <span class="top-btn">
          <span class="top-btn__arrow"></span>
        </span>
      </div>
    </section>

    <!-- profile -->
    <section class="profile" id="profile">
      <div class="section-ttl inview fadeIn">
        <h2>Profile</h2>
        <p>-自己紹介-</p>
      </div>

      <div class="container inview fadeIn">
        <div class="container-img">
          <img src="<?php echo get_template_directory_uri(); ?>/img/my-profile-img-sp.png"  srcset="<?php echo get_template_directory_uri(); ?>/img/my-profile-img-sp.png 1x, <?php echo get_template_directory_uri(); ?>/img/my-prolile-img-pc@2x.png 2x" alt="Example image">
        </div>
        <div class="container-txt inview fadeIn">
          <span class="myName">中村&nbsp;昭太</span>
          <span class="enName">Nakamura&nbsp;shota</span>
          <p>1989年&nbsp;鹿児島県出身</p>
          <p>鹿児島国際大学&nbsp;経済学部経営学科卒(2012年卒業)</p>
          <p>大学を卒業後,小売業で9年間、主に食料品の販売・接客・販促計画などの業務に携わっていました。また、3年間管理職として従業員50名のマネジメント、社員教育などの経験も行いつつ店舗運営にも取り組んできました。</p>
          <p>現在、福祉とweb事業を行なっている企業で、webデザイナーとしてホームページ制作に携わっています。</p>
          <p>将来は、webディレクターとして活躍する目標を抱き,日々のスキル向上に取り組んでいます。</p>
        </div>
      </div>
    </section>
    <!-- profile -->

    <!-- concept -->
    <section class="concept" id="concept font-size: 2rem;">
      <div class="section-ttl inview fadeIn">
        <h2>Concept</h2>
        <p>-大事なこと-</p>
      </div>
      <div class="container inview fadeIn">
        <div class="container-img">
          <img src="<?php echo get_template_directory_uri(); ?>/img/concept-img-sp.png" srcset="<?php echo get_template_directory_uri(); ?>/img/concept-img-sp.png 1x, <?php echo get_template_directory_uri(); ?>/img/concept-img-pc@2x.png 2x" alt="Example image">
          </div>
          <div class=" container-txt inview fadeIn">
          <h3><span>デザインを通じて多くの人々に多くの喜びと感動を与えたい。</span></h3>
          <p>デザインから設計において、お客様の魅力や強みを最大限に表現し、目的まで導いていくことが使命です。</p>
          <p>また、制作したwebサイトを一人でも多くの人に見て感動してもらい、何よりお客様に「あなたに任せてよかった」と思えるようなキモチを届けたい。</p>
          <p>そして、お客様の目的に沿った理想のwebサイトを提供することを何より大事にしていきたい。</p>
        </div>
      </div>
    </section>
    <!-- concept -->

    <!-- aboutMe -->
    <section class="aboutMe" id="aboutMe">
      <div class="section-ttl inview fadeIn">
        <h2>About Me</h2>
        <p>-私の強み-</p>
      </div>
      <div class="container">
        <div class="container-list inview fadeIn">
          <div class="container-list__icon">
            <img src="<?php echo get_template_directory_uri(); ?>/svg/design.svg" alt="">
          </div>
          <div class="container-list__txt">
            <p>デザイン</p>
            <p>実案件のwebサイトデザインの提案を行なっていました。お客様の理想のサイトを作る為、一生懸命頑張ります。</p>
          </div>
        </div>
        <div class="container-list inview fadeIn">
          <div class="container-list__icon">
            <img src="<?php echo get_template_directory_uri(); ?>/svg/human.svg" alt="">
          </div>
          <div class="container-list__txt">
            <p>人事経験</p>
            <p>前職では採用担当に携わっており、約30名ほどの面接やスケジュール調整など行なっておりました。会社との相性や人柄がマッチしているか見極める力があります。</p>
          </div>
        </div>
        <div class="container-list inview fadeIn">
          <div class="container-list__icon">
            <img src="<?php echo get_template_directory_uri(); ?>/svg/management.svg" alt="">
          </div>
          <div class="container-list__txt">
            <p>マネジメント</p>
            <p>管理職として従業員50名のマネジメントを行なった経験があります。新入社員の教育も行なっておりました。売上を伸ばすために店舗内で独自の企画や、イベントを催し年間売上の底上げに貢献しました。</p>
          </div>
        </div>
        <div class="container-list inview fadeIn">
          <div class="container-list__icon">
            <img src="<?php echo get_template_directory_uri(); ?>/svg/continuation.svg" alt="">
          </div>
          <div class="container-list__txt">
            <p>継続力</p>
            <p>現在、現役のプロの方に師事してもらい、実務を体験しています.自身のレベルアップのため、日々スキルの鍛錬に努めています。全てはより良いものをお客様へ届けたいと思っているからです。</p>
          </div>
        </div>
      </div>
    </section>
    <!-- aboutMe -->

    <!-- skikks -->
    <section class="skills" id="skills">
      <div class="section-ttl inview fadeIn">
        <h2>skills</h2>
        <p>-スキル-</p>
      </div>
      <div class="container">
        <div class="container-top inview fadeIn">
          <h3>Webdesign</h3>
          <p>理想のwebデザインを提供できるよう日々、スキルを磨いております。</p>
        </div>
        <div class="container-list inview fadeIn">
          <div class="container-list__icon">
            <img src="<?php echo get_template_directory_uri(); ?>/svg/html-icon.svg" alt="">
          </div>
          <div class="container-list__txt">
            <p>HTML/css</p>
            <p>レスポンシブ 対応はもちろんのこと,リキッドデザインなどの可変的な動きも再現できます。</p>
          </div>
        </div>
        <div class="container-list inview fadeIn">
          <div class="container-list__icon">
            <img src="<?php echo get_template_directory_uri(); ?>/svg/js-icon.svg" alt="">
          </div>
          <div class="container-list__txt">
            <p>Javascript/Jquery</p>
            <p>Class属性を操作してサイトに動きをつけたりプラグインを使ってスライダーやフェードイン などの実装ができます。
            </p>
          </div>
        </div>
        <div class="container-list inview fadeIn">
          <div class="container-list__icon">
            <img src="<?php echo get_template_directory_uri(); ?>/svg/wordpress-icon.svg" alt="">
          </div>
          <div class="container-list__txt">
            <p>Wordpress</p>
            <p>1からコーディングから行いwordpress化、サーバー、ドメインを取得して公開まで実装できます。</p>
          </div>
        </div>
        <div class="container-list inview fadeIn">
          <div class="container-list__icon">
            <img src="<?php echo get_template_directory_uri(); ?>/svg/php-icon.svg" alt="">
          </div>
          <div class="container-list__txt">
            <p>PHP</p>
            <p>PHPによって動的にHTMLを生成して表示するし、Wordpressのカスタマイズを実装することができます。</p>
          </div>
        </div>
        <div class="container-list inview fadeIn">
          <div class="container-list__icon">
            <img src="<?php echo get_template_directory_uri(); ?>/svg/photoshop-icon.svg" alt="">
          </div>
          <div class="container-list__txt">
            <p>Photoshop</p>
            <p>Photoshopを使って,webサイトのメインビジュアルの画像編集や簡単なバナーなど作成できます。</p>
          </div>
        </div>
        <div class="container-list inview fadeIn">
          <div class="container-list__icon">
            <img src="<?php echo get_template_directory_uri(); ?>/svg/frame-icon.svg" alt="">
          </div>
          <div class="container-list__txt">
            <p>ワイヤーフレーム</p>
            <p>XDのツールを使ってワイヤーフレームの作成,デザインの提案をすることができます。</p>
          </div>
        </div>
      </div>
    </section>
    <!-- skikks -->

    <!-- works -->
    
    <?php get_template_part('includes/works'); ?>
    
    <!-- works -->

    <!-- contact -->
    <section class="contact" id="contact">
      <div class="section-ttl inview fadeIn">
        <h2>Contact</h2>
        <p>-お気軽にお問い合わせください-</p>
      </div>
      <div class="contact-icon inview fadeIn">
        <div class="contact-icon__twitter">
          <a href="https://twitter.com/nishi0128s"><img src="<?php echo get_template_directory_uri(); ?>/svg/twitter.svg" alt=""></a>
        </div>
        <div class="contact-icon__email">
          <a href="mailto:shota.ns0128@gmail.com"><img src="<?php echo get_template_directory_uri(); ?>/svg/my-email.svg" alt=""></a>
        </div>
      </div>
    </section>
    <!-- contact -->
  </main>
  <?php get_template_part('includes/footer'); ?>
  <?php get_footer(); ?>
</body>

</html>