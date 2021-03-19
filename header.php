<?php
global $selimrezaswadhin;
/**
 * Displays header site branding
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

$blog_info    = get_bloginfo( 'name' );
$description  = get_bloginfo( 'description', 'display' );
$show_title   = ( true === get_theme_mod( 'display_title_and_tagline', true ) );
$header_class = $show_title ? 'site-title' : 'screen-reader-text';

?>

<?php if ( has_custom_logo() && $show_title ) : ?>
    <div class="site-logo"><?php the_custom_logo(); ?></div>
<?php endif; ?>

<div class="site-branding">

    <!--redux framework use start-->

    <!--    <img width="100px" height="100px" src="--><?php //echo $selimrezaswadhin['optta-logo']['url']; ?><!--" alt="no redux image">-->
    <!--    <h3>--><?php //echo $selimrezaswadhin['optt-text']; ?><!--</h3>-->
    <!--    <img width="200px" height="100px" src="--><?php //echo $selimrezaswadhin['optt-bannerads']['url']; ?><!--" alt="no redux image">-->

    <!--    <img width="200px" height="100px" src="--><?php //echo $selimrezaswadhin['optt-favicon']['url']; ?><!--" alt="no redux favicon">-->

	<?php
	if ($selimrezaswadhin['banner-ads-gallery'] == 1):
		?>
        <h3><?php echo $selimrezaswadhin['optt-text']; ?></h3>
        <img width="200px" height="100px" src="<?php echo $selimrezaswadhin['optt-bannerads']['url']; ?>" alt="no redux favicon">
	<?php endif;?>

    <!--redux framework use end-->

	<?php if ( has_custom_logo() && ! $show_title ) : ?>
        <div class="site-logo"><?php the_custom_logo(); ?></div>
	<?php endif; ?>

	<?php if ( $blog_info ) : ?>
		<?php if ( is_front_page() && ! is_paged() ) : ?>
            <h1 class="<?php echo esc_attr( $header_class ); ?>"><?php echo esc_html( $blog_info ); ?></h1>
		<?php elseif ( is_front_page() || is_home() ) : ?>
            <h1 class="<?php echo esc_attr( $header_class ); ?>"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php echo esc_html( $blog_info ); ?></a></h1>
		<?php else : ?>
            <p class="<?php echo esc_attr( $header_class ); ?>"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php echo esc_html( $blog_info ); ?></a></p>
		<?php endif; ?>
	<?php endif; ?>

	<?php if ( $description && true === get_theme_mod( 'display_title_and_tagline', true ) ) : ?>
        <p class="site-description">
			<?php echo $description; // phpcs:ignore WordPress.Security.EscapeOutput ?>
        </p>
	<?php endif; ?>
</div><!-- .site-branding -->


