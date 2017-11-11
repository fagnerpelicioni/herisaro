<?php
// the query
$the_query = new WP_Query( "post_type=post" ); ?>
		<section class="noticias-sec">
			<div class="row text-center margin-b-40">
					<div class="col-sm-6 col-sm-offset-3">
							<h2 class="text-center"><small class="text-green"><?php the_title(); ?></small><br />Confira as últimas novidades da Aldeia!</h2></div>
			</div>
<?php if ( $the_query->have_posts() ) : ?>

	<!-- pagination here -->

	<!-- the loop -->
	<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

			<?php get_template_part('templates/partials/lista-posts'); ?>


	<?php endwhile; ?>
	<!-- end of the loop -->

	<!-- pagination here -->

	<?php wp_reset_postdata(); ?>

<?php else : ?>
	<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>
		</section>
<?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
