<?php // SYNTAXE : wp_nav_menu( array $args = array() )
      $args=array(
        'theme_location' => 'footer', // nom du slug
        'menu' => 'footer_fr', // nom à donner cette occurence du menu
        'menu_class' => 'list', // class à attribuer au menu
        'menu_id' => 'footer_id', // id à attribuer au menu
        'container_class' => 'col-6',
        // voir les autres arguments possibles sur le codex
      );
      ?>
<footer class="footer-area">
  <div class="container">
    <div class="row f_widgets_inner">
      <div class="col-lg-6 col-md-6 col-sm-6">
        <div class="single-footer-widget ab_widgets">
          <img src="img/footer-logo.png" alt="">
          <p>Technology and gadgets Adapter (MPA) is our favorite iPhone solution, since it lets you use
            the headphones you’re most comfortable with. It has an iPhone-compatible jack at one end and
            a microphone module with an Answer/End/Pause button and a female 3.5mm audio jack for
            connectingheadphones</p>
        </div>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-6">
        <div class="single-footer-widget">
          <div class="f_title">
            <h3>Quick Links</h3>
          </div>
          <div class="row">
          <?= wp_nav_menu($args)?>
          </div>
        </div>
      </div>
    </div>
    <div class="row footer-bottom d-flex justify-content-between align-items-center">
      <div class="col-lg-12">
        <div class="f_boder"></div>
      </div>
      <p class="col-lg-8 col-md-8 footer-text m-0">
        Copyright &copy;<script>
          document.write(new Date().getFullYear());
        </script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by
        <a href="https://www.hetic.net" target="_blank">Hetic Studients</a>
      </p>
      <div class="col-lg-4 col-md-4 footer-social">
        <a href="#"><i class="fa fa-facebook"></i></a>
        <a href="#"><i class="fa fa-twitter"></i></a>
        <a href="#"><i class="fa fa-youtube-play"></i></a>
        <a href="#"><i class="fa fa-pinterest"></i></a>
        <a href="#"><i class="fa fa-rss"></i></a>
      </div>
    </div>
  </div>
</footer>
<?php wp_footer();  ?>
</body>

</html>