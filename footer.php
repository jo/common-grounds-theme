<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package commongrounds
 */
?>
    <footer class="navbar navbar-bottom navbar-default">
      <div class="container">
        <hr>
        <?php wp_nav_menu(
              array(
                  'theme_location' => 'footer-left',
                  'container' => false,
                  'menu_class' => 'nav navbar-nav navbar-left',
                  'fallback_cb' => '',
                  'menu_id' => 'footer-menu-left',
                  'walker' => new wp_bootstrap_navwalker()
              )
          ); ?>
          <?php wp_nav_menu(
                array(
                    'theme_location' => 'footer-right',
                    'container' => false,
                    'menu_class' => 'nav navbar-nav navbar-right',
                    'fallback_cb' => '',
                    'menu_id' => 'footer-menu-right',
                    'walker' => new wp_bootstrap_navwalker()
                )
            ); ?>
      </div>
    </footer>
    <?php wp_footer(); ?>
  </body>
</html>
