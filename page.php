<?php get_header(); ?>
<?php get_sidebar(); ?>

<?php if (is_page(21)) {
      include(TEMPLATE_PATH.'/all_articles.php');
    }
    else {
        include(TEMPLATE_PATH.'/default.php');
    }
?>

<?php get_footer(); ?>