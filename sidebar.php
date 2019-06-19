<aside class="probootstrap-aside js-probootstrap-aside">
  <div class="probootstrap-site-logo probootstrap-animate" data-animate-effect="fadeInLeft">
    <a href="<?= bloginfo( 'url' ) ?>" class="mb-2 d-block probootstrap-logo"><?= bloginfo( 'title' ) ?></a>
    <p class="mb-0"><?= bloginfo( 'description' ) ?></p>
  </div>
  <div class="probootstrap-overflow">
    <nav class="probootstrap-nav">
    <?php // SYNTAXE : wp_nav_menu( array $args = array() )
      $args=array(
        'theme_location' => 'header', // nom du slug
        'menu' => 'header_fr', // nom à donner cette occurence du menu
        'menu_class' => 'menu_header', // class à attribuer au menu
        'menu_id' => 'menu_id' // id à attribuer au menu
        // voir les autres arguments possibles sur le codex
      );
      wp_nav_menu($args);
    ?>
    </nav>
  </div>
</aside>