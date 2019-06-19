<?php // SYNTAXE : wp_nav_menu( array $args = array() )
  $args=array(
    'theme_location' => 'topBar', // nom du slug
    'menu' => 'topBar_fr', // nom à donner cette occurence du menu
    'menu_class' => 'menu_topBar', // class à attribuer au menu
    'menu_id' => 'topBar_id' // id à attribuer au menu
    // voir les autres arguments possibles sur le codex
  );
?>
<!DOCTYPE html>
<html <?= language_attributes() ?>>
    <head>
        <meta charset="<?= bloginfo( 'charset' ) ?>" />
        <link rel="stylesheet" href="<?= bloginfo('stylesheet_url') ?>">
        <?= wp_head() ?>
    </head>
    <body <?= body_class(); ?>>
        <header id="header">
            <?= wp_nav_menu($args) ?>
        </header>