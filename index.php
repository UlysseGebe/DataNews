<?php
    $args1 = array(
      'showposts' => 1,
    );
    $args2 = array(
      'showposts' => 5,
    );
    $the_query1 = new WP_Query($args1);
    $the_query2 = new WP_Query($args2);
    $count = 0;
?>

<?= get_header() ?>

<section class="home_banner_area">
  <?php while ($the_query1->have_posts()): ?>
  <?= $the_query1->the_post() ?>
  <div class="banner_inner d-flex align-items-center"
    style="background-image: url('<?= the_post_thumbnail_url( 'bigThumbnail', $attr ) ?>')">
    <div class="container">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="banner_content text-center">
              <div class="date">
                <a class="gad_btn" href="<?= the_permalink() ?>">Lire la suite</a>
                <a href="#"><i class="fa fa-calendar" aria-hidden="true"></i><?= the_time('j F Y') ?></a>
              </div>
              <h3><?= the_title() ?></h3>
              <?= the_excerpt() ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php endwhile ?>
</section>

<section class="choice_area p_120">
  <div class="container">
    <div class="main_title2">
      <h2>Top articles</h2>
    </div>
    <div class="row choice_inner">
      <?php while ($the_query2->have_posts()): ?>
      <?php
        $the_query2->the_post();
        $count += 1;
      ?>
      <?php if ($count != 1): ?>
      <div class="col-lg-3 col-md-6">
        <div class="choice_item">
          <img class="img-fluid" src="<?= the_post_thumbnail_url( 'bigThumbnail') ?>" alt="">
          <div class="choice_text">
            <a href="<?= the_permalink() ?>">
              <h4><?= the_title() ?></h4>
            </a>
            <?= the_excerpt() ?>
            <div class="date mt-10">
              <a class="gad_btn" href="<?= the_permalink() ?>">Lire la suite</a>
              <a href="#"><i class="fa fa-calendar" aria-hidden="true"></i><?= the_time('j F Y') ?></a>
            </div>
          </div>
        </div>
      </div>
      <?php endif ?>
      <?php endwhile ?>
    </div>
  </div>
</section>

<?= get_footer() ?>