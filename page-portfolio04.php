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
            <span>Cosme-site</span>
          </li>
          <li>
            <p>制作期間</p>
            <span>約2週間</span>
          </li>
          <li>
            <p>制作ポイント</p>
            <span>架空の美容室をイメージして作りました。20代〜30代の女性をターゲットにしたサイトとなっております。シンプルかつ優しい雰囲気をイメージして作成しました。</span>
          </li>
          <li>
            <p>GitHub</p>
            <span><a href="https://github.com/shontanakamura/menta_works_cosme">https://github.com/shontanakamura/menta_works_cosme</a></span>
          </li>
        </ul>
      </div>

      <div class="portfolio-img">
        <div class="img-left">
          <img src="<?php echo get_template_directory_uri(); ?>/img/cosme-img-pc.png" alt="">
        </div>
        <div class="img-right">
          <img src="<?php echo get_template_directory_uri(); ?>/img/cosme-img-sp.png" alt="">
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