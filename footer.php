<?php // SYNTAXE : wp_nav_menu( array $args = array() )
      $args=array(
        'theme_location' => 'footer', // nom du slug
        'menu' => 'footer_fr', // nom à donner cette occurence du menu
        'menu_class' => 'menu_footer', // class à attribuer au menu
        'menu_id' => 'footer_id' // id à attribuer au menu
        // voir les autres arguments possibles sur le codex
      );
?>
<footer id="footer">
<div class="container-fluid d-md-none">
    <div class="row">
      <div class="col-md-12">
      <?= wp_nav_menu($args)?>
        <ul class="list-unstyled d-flex probootstrap-aside-social">
          <li><a href="#" class="p-2"><span class="icon-twitter">icon</span></a></li>
          <li><a href="#" class="p-2"><span class="icon-instagram">icon</span></a></li>
          <li><a href="#" class="p-2"><span class="icon-dribbble">icon</span></a></li>
        </ul>
        <p>&copy; 2017 <a href="https://uicookies.com/" target="_blank">uiCookies:Aside</a>. <br> All Rights Reserved. Designed by <a href="https://uicookies.com/" target="_blank">uicookies.com</a></p>
      </div>
    </div>
  </div>
</footer>
    </body>
</html>