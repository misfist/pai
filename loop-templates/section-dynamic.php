<?php
/**
 * Single post partial template.
 *
 * @package understrap
 * @subpackage pai
 */

?>
<?php
$featured_image = get_sub_field( 'display_featured_image' );
?>

<?php
$args = array();

if( $post_type = get_sub_field( 'post_type' ) ) {
	$args['post_type'] = $post_type;
}
if( $posts_per_page = get_sub_field( 'posts_per_page' ) ) {
	$args['posts_per_page'] = (int) $posts_per_page;
}
if( ( $category = get_sub_field( 'category' ) )  ) {
	$args['category__in'] = $category;
}
if( $tag = get_sub_field( 'post_tag' ) ) {
	$args['tag__in'] = $tag;
}
if( $series = get_sub_field( 'series' ) ) {
	$args['tax_query'] = array(
		array(
            'taxonomy' => 'series',
            'field'    => 'id',
            'terms'    => $series,
        ),
	);
}

$section_query = new WP_Query( $args );

if( $section_query->have_posts() ) : ?>

	<?php
	while( $section_query->have_posts() ) : $section_query->the_post() ; ?>

	<div class="grid-item">

		<?php get_template_part( 'loop-templates/entry', get_post_type() ); ?>

	</div><!-- .grid-item -->

	<?php
	endwhile;

	wp_reset_postdata();
	wp_reset_query();

endif;

?>
