<?php
    $args = array(
      'showposts' => 3,
    );
    $the_query = new WP_Query($args);
?>

<?php get_header(); ?>
<?php get_sidebar(); ?>

<main role="main" class="probootstrap-main js-probootstrap-main">
  <div class="card-columns">
    <?php while ($the_query->have_posts()): ?>
    <?= $the_query->the_post() ?>
          <h1><a href="<?= the_permalink() ?>"><?= the_title() ?></a></h1>
          <h2>Posté le <?= the_time('F jS, Y') ?></h2>
          <p><?= the_content() ?></p>
  <?php endwhile ?>
  </div>
  <h2><a href="articles/">See all posts</a></h2>
</main>

<?php get_footer(); ?>