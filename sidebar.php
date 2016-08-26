<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package activello-child
 */
?>
</div>

  <?php
        $show_sidebar = true;
        if( is_singular() && ( get_post_meta($post->ID, 'site_layout', true) ) ){
           if( get_post_meta($post->ID, 'site_layout', true) == 'no-sidebar' || get_post_meta($post->ID, 'site_layout', true) == 'full-width' ) {
               $show_sidebar = false;
           }
        }
        elseif( get_theme_mod( 'activello_sidebar_position' ) == "no-sidebar" ||  get_theme_mod( 'activello_sidebar_position' ) == "full-width" ) {
            $show_sidebar = false;
        } ?>
        <?php if( $show_sidebar ): ?>
  <div id="secondary" class="widget-area col-sm-12 col-md-4" role="complementary">
    <div class="inner">
      <?php do_action( 'before_sidebar' ); ?>
      <?php if ( ! dynamic_sidebar( 'sidebar-1' ) ) : ?>
        <img class="profile-image" src="<?php echo get_stylesheet_directory_uri(); ?>/images/profile.jpg" />
        <p>For collaborations, questions, and business inquiries, send an email to hey@momookimoto.com</p>
        <h3 class="instagram-header"><a href="http://instagram.com/momez">Follow me on Instagram</a></h3>
        <aside id="instagram" class="widget widget_instagram">
          <?php echo wdi_feed(array('id'=>'1')); ?>
        </aside>

      <?php endif; // end sidebar widget area ?>
    </div>
  </div><!-- #secondary -->
  <?php endif; ?>
