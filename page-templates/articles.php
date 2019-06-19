<?php
    /*
    Template Name: Articles Page
    */
    get_header();
    get_sidebar();
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
  </div>
  <div class="card-columns">
    <?php while ($the_query->have_posts()): ?>
      <?= $the_query->the_post() ?>
          <h1><a href="<?= the_permalink() ?>"><?= the_title() ?></a></h1>
  <?php endwhile ?>
  </div>
</main>
<?php get_footer(); ?>