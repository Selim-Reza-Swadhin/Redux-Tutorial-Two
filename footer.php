<?php global $selimrezaswadhin; ?>
<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
</main><!-- #main -->
</div><!-- #primary -->
</div><!-- #content -->

<!--before redux framework-->
<?php //get_template_part( 'template-parts/footer/footer-widgets' ); ?>

<!--use redux framework-->
<?php
if ($selimrezaswadhin['footer-backswitch'] == 1):
get_template_part( 'template-parts/footer/footer-widgets' );
endif;
?>

<footer id="colophon" class="site-footer" role="contentinfo">

	<?php if ( has_nav_menu( 'footer' ) ) : ?>
        <nav aria-label="<?php esc_attr_e( 'Secondary menu', 'twentytwentyone' ); ?>" class="footer-navigation">
            <ul class="footer-navigation-wrapper">
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'footer',
						'items_wrap'     => '%3$s',
						'container'      => false,
						'depth'          => 1,
						'link_before'    => '<span>',
						'link_after'     => '</span>',
						'fallback_cb'    => false,
					)
				);
				?>
            </ul><!-- .footer-navigation-wrapper -->
        </nav><!-- .footer-navigation -->
	<?php endif; ?>


<!--==========================================Footer hide=============================-->
    <!-- redux footer site info hide-->

    <div class="site-info">
        <div class="site-name">
			<?php if ( has_custom_logo() ) : ?>
                <div class="site-logo"><?php the_custom_logo(); ?></div>
			<?php else : ?>
				<?php if ( get_bloginfo( 'name' ) && get_theme_mod( 'display_title_and_tagline', true ) ) : ?>
					<?php if ( is_front_page() && ! is_paged() ) : ?>
						<?php bloginfo( 'name' ); ?>
					<?php else : ?>
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a>
					<?php endif; ?>
				<?php endif; ?>
			<?php endif; ?>
        </div><!-- .site-name -->


        <div class="powered-by">
			<?php
			printf(
			/* translators: %s: WordPress. */
				esc_html__( 'Proudly powered by %s.', 'twentytwentyone' ),
				'<a href="' . esc_url( __( 'https://wordpress.org/', 'twentytwentyone' ) ) . '">WordPress</a>'
			);
			?>
        </div><!-- .powered-by -->

    </div><!-- .site-info -->

<!--    =============================Footer color=========================-->
<!--copyright redux footer-->
    <style>
        .copyrightback{
            background-color: <?php echo $selimrezaswadhin['footer-back']; ?> !important;
            padding: 20px 30px;
            text-align: center
        }
    </style>
    <div class="copyrightback">
        <p>&copy; <?php echo $selimrezaswadhin['footer-right']; ?> <a style="text-decoration: none; background: #0a4b78;color: #fff;text-transform: uppercase" href="<?php echo $selimrezaswadhin['footer-devv-url']; ?>"><?php echo $selimrezaswadhin['footer-devv-name']; ?></a> </p>

        <style>
            .td{
                text-decoration: none;
            }
        </style>
        <ul class="footer-navigation-wrapper">
            <?php if (!empty( $selimrezaswadhin['footer-social-network']['Facebook'])):?>
            <li><a class="td" href="<?php echo $selimrezaswadhin['footer-social-network']['Facebook'];?>"><i class="fas fa-facebook-square"></i>Facebook</a></li>
            <?php endif;?>
            <?php if (!empty( $selimrezaswadhin['footer-social-network']['Twitter'])):?>
            <li><a class="td" href="<?php echo $selimrezaswadhin['footer-social-network']['Twitter'];?>"><i class="fa fa-facebook">Twitter</i></a></li>
            <?php endif;?>
	        <?php if (!empty( $selimrezaswadhin['footer-social-network']['Instagram'])):?>
            <li><a class="td" href="<?php echo $selimrezaswadhin['footer-social-network']['Instagram'];?>"><i class="fa fa-facebook">Instagram</i></a></li>
	        <?php endif;?>
	        <?php if (!empty( $selimrezaswadhin['footer-social-network']['LinkedIn'])):?>
            <li><a class="td" href="<?php echo $selimrezaswadhin['footer-social-network']['LinkedIn'];?>"><i class="fa fa-facebook">LinkedIn</i></a></li>
	        <?php endif;?>
        </ul>
    </div>
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
