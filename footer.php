<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wubetTheme
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer row">
	
    <div class="container-fluid text-center text-md-left">
      <div id="footer-sidebar" class="secondary">
        <div id="footer-sidebar1">
        <?php
        if(is_active_sidebar('footer-sidebar-1')){
        dynamic_sidebar('footer-sidebar-1');
        }
        ?>
        </div>
        <div id="footer-sidebar2">
        <?php
        if(is_active_sidebar('footer-sidebar-2')){
        dynamic_sidebar('footer-sidebar-2');
        }
        ?>
        </div>
        <div id="footer-sidebar3">
        <?php
        if(is_active_sidebar('footer-sidebar-3')){
        dynamic_sidebar('footer-sidebar-3');
        }
        ?>
      </div>
    </div>
    </div>
		<div class="site-info col-md-12">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'wubettheme' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly Powered by %s', 'wubettheme' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'wubettheme' ), 'WubetTheme', '' );
				?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
