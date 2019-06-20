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
    $attrib = array('alt'=> get_the_title());
?>
<main role="main" class="probootstrap-main js-probootstrap-main">
  <div class="container col-lx-6">
    <?php while (have_posts()): ?>
      <?= the_post() ?>
          <h2><?= the_title() ?></h2>
          <p><?= the_content() ?></p>
    <?php endwhile ?>
  </div>
  
    <div class="articles container col-lx-6">
        <?php while ($the_query->have_posts()): ?>
          <?php
            $the_query->the_post();
          ?>
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
        <?php endwhile ?>
    </div>

  </div>
</main>
<?php get_footer(); ?>