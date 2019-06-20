<?php
    $args1 = array(
      'showposts' => 1,
    );
    $args2 = array(
      'showposts' => 4,
    );
    $the_query1 = new WP_Query($args1);
    $the_query2 = new WP_Query($args2);
    $count = 0;
    $attr = array('alt'=> get_the_title(),
                  'class'=>'img-fluid'
    );
    $attrib = array('alt'=> get_the_title());
?>

<?php get_header(); ?>
<?php get_sidebar(); ?>

<main class="mt-4">
  <div class="main-article container col-lx-6">
    <?php while ($the_query1->have_posts()): ?>
    <?php
      $the_query1->the_post();
      $count += 1;
    ?>
      <?php if ($count == 1): ?>
      <?php if(has_post_thumbnail()): ?>
        <?= the_post_thumbnail( 'bigThumbnail', $attr ) ?>
      <?php endif ?>
        <h1><?= the_title() ?></h1>
        <a href="<?= the_permalink() ?>">Lire</a>
        <div class="fill"></div>
      <?php endif?>
    <?php endwhile ?>
  </div>

  <div class="articles container col-lx-6">
  <?php while ($the_query2->have_posts()): ?>
    <?php
      $the_query2->the_post();
      $count += 1;
    ?>
      <?php if ($count != 2): ?>
      <div class="article d-flex justify-content-between">
          <div class="description">
              <h1><?= the_title() ?></h1>
              <time datetime="2019-05-30"><?= the_time('j F Y') ?></time>
              <a href="<?= the_permalink() ?>">Lire</a>
          </div>
          <div class="images">
            <?php if(has_post_thumbnail()): ?>
              <?= the_post_thumbnail( 'singleThumbnail', $attrib ) ?>
            <?php endif ?>
          </div>
      </div>
        <?php endif?>
  <?php endwhile ?>
  </div>
  <h2 style="text-align: end"><a href="articles/">See all posts</a></h2>
</main>

<?php get_footer(); ?>