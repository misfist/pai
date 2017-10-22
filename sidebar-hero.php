<?php
/**
 * Sidebar - hero setup.
 *
 * @package understrap
 * @subpackage pai
 * @since 0.1.0
 */

?>

<?php if ( is_active_sidebar( 'hero' ) ) : ?>

	<div class="container">

	<!-- ******************* The Hero Widget Area ******************* -->

		<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">

			<div class="carousel-inner" role="listbox">

			<?php dynamic_sidebar( 'hero' ); ?>

			</div>

			 <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">

			    <span class="carousel-control-prev-icon" aria-hidden="true"></span>

			    <span class="sr-only"><?php _e( 'Previous', 'pai' ); ?></span>

			 </a>

			 <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">

			    <span class="carousel-control-next-icon" aria-hidden="true"></span>

			    <span class="sr-only"><?php _e( 'Next', 'pai' ); ?></span>

			</a>

		</div><!-- .carousel -->

	</div>


<script>
jQuery( ".carousel-item" ).first().addClass( "active" );
</script>

<?php endif; ?>
