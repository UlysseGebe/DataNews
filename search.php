<?php get_header(); ?>
<?php get_sidebar(); ?>

<main role="main" class="probootstrap-main js-probootstrap-main">
    <div class="card-columns">
        <?php while (have_posts()): ?>
            <?= the_post() ?>
            <h1><?= the_title() ?></h1>
        <?php endwhile ?>
    </div>
</main>

<?php get_footer(); ?>