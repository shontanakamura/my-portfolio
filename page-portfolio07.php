<!DOCTYPE html>
<html lang="ja">

<head>
  <?php get_header(); ?>
</head>

<body>
  <main>
    <section class="works-list">
      <div class="section-ttl inview fadeIn">
        <h2>Works</h2>
        <p>-制作物-</p>
      </div>
      <div class="container">
        <ul class="works-group">
          <li>
            <p>サイト名</p>
            <span>Fujioka Office</span>
          </li>
          <li>
            <p>制作期間</p>
            <span>約1ヶ月</span>
          </li>
          <li>
            <p>制作ポイント</p>
            <span>行政書士のwebサイトを制作しました。ワードプレス化まで行っています。ファイル数が多いので、共通部分をコンポーネント化しています。Goolemapsを入れてオリジナルのピンや投稿一覧、お問い合わせフォームも作成しています。</span>
          </li>
          <li>
            <p>GitHub</p>
            <span><a href="https://github.com/shontanakamura/fujioka-office-site">https://github.com/shontanakamura/fujioka-office-site</a></span>
          </li>
        </ul>
      </div>

      <div class="portfolio-img">
        <div class="img-left">
          <img src="<?php echo get_template_directory_uri(); ?>/img/fujioka-img-pc.png" alt="">
        </div>
        <div class="img-right">
          <img src="<?php echo get_template_directory_uri(); ?>/img/fujioka-img-sp.png" alt="">
        </div>
      </div>
      <div class="top-link">
        <span><a href="<?php echo home_url("/"); ?>">Topへ戻る</a></span>
      </div>
    </section>
  </main>

  <?php get_template_part('includes/footer'); ?>
  <?php get_footer(); ?>
</body>

</html>