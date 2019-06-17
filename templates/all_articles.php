<?php
  $args = array(
    'showposts' => -1,
  );
  $the_query = new WP_Query($args);
?>
<main role="main" class="probootstrap-main js-probootstrap-main">
  <div class="card-columns">
    <?php while (have_posts()): ?>
      <?= the_post() ?>
          <h1><?= the_title() ?></h1>
          <p><?= the_content() ?></p>
    <?php endwhile ?>

    <?php while ($the_query->have_posts()): ?>
      <?= $the_query->the_post() ?>
          <h1><?= the_title() ?></h1>
          <h2>Posté le <?= the_time('F jS, Y') ?></h2>
          <p><?= the_content() ?></p>
  <?php endwhile ?>
  </div>
</main>