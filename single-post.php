<?php
    $attr = array('alt'=> get_the_title(),
                  'class'=>'img-fluid'
    );
    $attrib = array('alt'=> get_the_title());
?>
<?php get_header(); ?>
<?php get_sidebar(); ?>

<main class="mt-4">
  <div class="main-article container col-lx-6">
    <?php while (have_posts()): ?>
    <?php
      the_post();
    ?>
      <?php if(has_post_thumbnail()): ?>
        <?= the_post_thumbnail( 'singleThumbnail', $attr ) ?>
      <?php endif ?>
        <h1><?= the_title() ?></h1>
        <p><?= the_content() ?></p>
        <div class="fill"></div>
    <?php endwhile ?>
  </div>
</main>

<?php get_footer(); ?>