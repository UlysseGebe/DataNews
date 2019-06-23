<?php // SYNTAXE : wp_nav_menu( array $args = array() )
  $args=array(
    'theme_location' => 'topBar', // nom du slug
    'menu' => 'topBar_fr', // nom à donner cette occurence du menu
    'menu_class' => 'list header_social', // class à attribuer au menu
    // voir les autres arguments possibles sur le codex
  );

  $arg=array(
    'theme_location' => 'header', // nom du slug
    'menu' => 'header_fr', // nom à donner cette occurence du menu
    'menu_class' => 'nav navbar-nav menu_nav', // class à attribuer au menu
    'menu_id' => 'menu_id', // id à attribuer au menu
    'container_class' => 'collapse navbar-collapse offset',
    'container_id' => 'navbarSupportedContent',
    'link_id' => 'navbarSupportedContent'
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
  <header class="header_area">
    <div class="top_menu">
      <div class="container">
        <div class="float-left">
          <a href="#"><?= current_time('l, F d, Y') ?></a>
        </div>
        <div class="float-right">
          <?= wp_nav_menu($args) ?>
        </div>
      </div>
    </div>
    <div class="logo_part">
      <div class="container">
        <div class="float-left">
          <?php 
            if ( function_exists( 'the_custom_logo' ) ) {
              the_custom_logo();
            }
          ?>
        </div>
      </div>
    </div>
    <div class="main_menu">
      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
          <div class="container_inner">
            <!-- Brand and toggle get grouped for better mobile display -->
            <?php 
            if ( function_exists( 'the_custom_logo' ) ) {
              the_custom_logo();
            }
          ?>
            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <?= wp_nav_menu($arg) ?>
          </div>
        </div>
      </nav>
    </div>
  </header>