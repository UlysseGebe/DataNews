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
      <header class="container col-lx-6">
        <div class="logo col-2">
            <?php 
            if ( function_exists( 'the_custom_logo' ) ) {
              the_custom_logo();
            }
            ?>
        </div>
        <div class="right container col-lx-5">
          <?= wp_nav_menu($args) ?>
        </div>
      </header>