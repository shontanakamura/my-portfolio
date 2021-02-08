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
          <span>Tax-book</span>
        </li>
        <li>
          <p>制作期間</p>
          <span>3日間</span>
        </li>
        <li>
          <p>制作ポイント</p>
          <span>リキッドデザインを意識し制作いたしました。アニメーションを多様に使い動きのあるページとなっております。</span>
        </li>
        <li>
          <p>GitHub</p>
          <span><a href="https://github.com/shontanakamura/tax-book">https://github.com/shontanakamura/tax-book</a></span>
        </li>
      </ul>
    </div>

    <div class="portfolio-img">
      <div class="img-left">
        <img src="<?php echo get_template_directory_uri(); ?>/img/tax-book-img-pc.png" alt="">
      </div>
      <div class="img-right">
        <img src="<?php echo get_template_directory_uri(); ?>/img/tax-book-img-sp.png" alt="">
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