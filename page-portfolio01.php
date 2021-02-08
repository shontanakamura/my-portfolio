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
      <div class="container inview fadeIn">
        <ul class="works-group">
          <li>
            <p>サイト名</p>
            <span>My-portfolio</span>
          </li>
          <li>
            <p>制作期間</p>
            <span>約2週間</span>
          </li>
          <li>
            <p>制作ポイント</p>
            <span>自身のポートフォリオサイトです。ファーストビューからポートフォリオサイトという印象を持たせて、次に自分をアピールするために、プロフィール、コンセプトを前面にサイト構成しました。レイアウトはシンプルで見やすい配色を使いました。ユーザーの使いやすいように、インタラクションデザインを意識して設計しました。
            </span>
          </li>
          <li>
            <p>GitHub</p>
            <span><a href="http://nakamura0128.com/">http://nakamura0128.com/</a></span>
          </li>
          <li>
            <p>URL</p>
            <span><a href="http://nakamura0128.com/">http://nakamura0128.com/</a></span>
          </li>
        </ul>
      </div>

      <div class="portfolio-img">
        <div class="img-left">
          <img src="<?php echo get_template_directory_uri(); ?>/img/shotsnapp-01.png" alt="">
        </div>
        <div class="img-right">
          <img src="<?php echo get_template_directory_uri(); ?>/img/shota-portfolio-img-sp.png" alt="">
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