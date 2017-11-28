<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

$the_theme = wp_get_theme();
$container = get_theme_mod( 'understrap_container_type' );
?>

<?php if( is_active_sidebar( 'footer-top' ) ) : ?>

	<div class="wrapper" id="wrapper-footer-top">

		<div class="<?php echo esc_html( $container ); ?>">

			<div class="row">

				<section class="page-section">

					<header class="section-header col-12">
					<h2 class="section-heading"><span><?php _e( 'What We Offer', 'pai' ); ?></span></h2>
					</header>

					<?php dynamic_sidebar( 'footer-top' ) ?>

				</section>

			</div>

		</div>

	</div>

<?php endif; ?>

<?php get_sidebar( 'footerfull' ); ?>

<?php if ( is_active_sidebar( 'site-info' ) ) : ?>

	<div class="wrapper" id="wrapper-footer">

		<div class="<?php echo esc_html( $container ); ?>">

			<div class="row">

				<div class="col-md-12">

					<footer class="site-footer" id="colophon">

						<?php dynamic_sidebar( 'site-info' ); ?>

						<?php if ( function_exists( 'jetpack_social_menu' ) ) jetpack_social_menu(); ?>

					</footer><!-- #colophon -->

				</div><!--col end -->

			</div><!-- row end -->

		</div><!-- container end -->

	</div><!-- wrapper end -->

<?php endif; ?>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>
