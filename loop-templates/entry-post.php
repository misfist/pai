<?php
/**
 * Post list partial template.
 *
 * @package understrap
 * @subpackage pai
 */

?>
<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

		<header class="entry-header">

			<?php if( has_category( 'press-mention' ) && ( $publication = get_post_meta( $post->ID, 'publication', true ) ) ) : ?>

				<div class="entry-meta">

					<?php if( $url = get_post_meta( $post->ID, 'source_url', true ) ) :  ?>

						<span class="source-publication">
							<a href="<?php echo esc_url( $url ); ?>" title="View <?php echo esc_attr( $publication ); ?>" target="_blank"><?php esc_html_e( $publication ); ?></a>
						</span>

						<?php pai_published_date(); ?>

					<?php else : ?>

						<span class="source-publication">
							<?php esc_html_e( $publication ); ?>
						</span>

						<?php pai_published_date(); ?>

					<?php endif; ?>

				</div>

			<?php endif; ?>

			<?php if( has_category( 'press-mention' ) && ( $source_url = get_post_meta( $post->ID, 'source_url', true ) ) ) : ?>

				<?php the_title(
					sprintf( '<h2 class="entry-title"><a href="%s" class="block-link" title="%s" rel="bookmark" target="_blank">',
					 esc_url( $source_url ),
					 esc_attr( $post->post_title )
					),
				'</a></h2>' ); ?>

			<?php else : ?>

				<?php the_title(
					sprintf( '<h2 class="entry-title"><a href="%s" class="block-link" title="%s" rel="bookmark">',
					 esc_url( get_permalink( $post->ID ) ),
					 esc_attr( $post->post_title )
					),
				'</a></h2>' ); ?>

			<?php endif; ?>

		</header><!-- .entry-header -->

		<?php if( has_category( 'projects' ) ) : ?>

			<div class="entry-excerpt">

				<?php the_content(); ?>

			</div><!-- .entry-content -->

		<?php elseif( $excerpt = $post->post_excerpt ) : ?>

			<div class="entry-excerpt">

				<?php esc_html_e( $excerpt, 'pai' ); ?>

			</div><!-- .entry-content -->

		<?php endif; ?>

		<footer class="entry-footer">

			<div class="entry-meta post-date">

				<?php if( has_category( 'projects' ) ) : ?>

					<?php the_post_thumbnail( 'medium', array( 'class' => 'project-logo img-fluid' ) ); ?>

				<?php elseif( !has_category( 'press-mention' ) ) : ?>

					<?php pai_published_date(); ?>

				<?php endif; ?>

			</div><!-- .entry-meta -->

		</footer><!-- .entry-footer -->

</article><!-- #post-## -->