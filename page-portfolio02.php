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
            <span>design_conslutingLP</span>
          </li>
          <li>
            <p>制作期間</p>
            <span>約３週間</span>
          </li>
          <li>
            <p>制作ポイント</p>
            <span>リキッドデザインを意識し制作いたしました。特に力を入れたところは,アニメーションを多様に使い動きを出したところです。positionや擬似要素も使いデザインの幅を広げました。</span>
          </li>
          <li>
            <p>URL</p>
            <span><a href="http://shota-portfolio.work/">http://shota-portfolio.work/</a></span>
          </li>
        </ul>
      </div>

      <div class="portfolio-img">
        <div class="img-left">
          <img src="<?php echo get_template_directory_uri(); ?>/img/design_conslutingLP-img-pc.png" alt="">
        </div>
        <div class="img-right">
          <img src="<?php echo get_template_directory_uri(); ?>/img/design_conslutingLP-img-sp.png" alt="">
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