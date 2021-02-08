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
            <span>standard-portfolio</span>
          </li>
          <li>
            <p>制作期間</p>
            <span>約３週間</span>
          </li>
          <li>
            <p>制作ポイント</p>
            <span>メインビジュアルに動画を埋め込み動きのあるサイトをアピールしました。また、positionやスライダーも多用してサイトの動きをさらにつけました。</span>
          </li>
          <li>
            <p>GitHub</p>
            <span><a class="git-link" href="https://github.com/shontanakamura/standard-portfolio">https://github.com/shontanakamura/standard-portfolio</a></span>
          </li>
          <li>
            <p>URL</p>
            <span><a class="git-link" href="http://nakamujp.wp.xdomain.jp/">http://nakamujp.wp.xdomain.jp/</a></span>
          </li>
        </ul>
      </div>

      <div class="portfolio-img">
        <div class="img-left">
          <img src="<?php echo get_template_directory_uri(); ?>/img/standard-portfolio-pc.png" alt="">
        </div>
        <div class="img-right">
          <img src="<?php echo get_template_directory_uri(); ?>/img/standard-portfolio-sp.png" alt="">
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