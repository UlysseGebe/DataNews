<?php // SYNTAXE : wp_nav_menu( array $args = array() )
      $args=array(
        'theme_location' => 'header', // nom du slug
        'menu' => 'header_fr', // nom à donner cette occurence du menu
        'menu_class' => 'menu_header', // class à attribuer au menu
        'menu_id' => 'menu_id' // id à attribuer au menu
        // voir les autres arguments possibles sur le codex
      );
?>
<nav class="container col-lx-6">
  <!-- wp_nav_menu($args) -->
</nav>