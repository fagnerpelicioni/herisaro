<?php
// the query
$the_query = new WP_Query( "post_type=produto" ); ?>
<section class="product-sec" id="product">

		<div class="container">

				<div class="row">
						<div class="col-lg-12 col-md-12">
								<h2 class="text-center"><small class="text-green"><?php the_title(); ?></small><br />Don't find fault, find a remedy</h2>
						</div>
				</div>
<?php if ( $the_query->have_posts() ) : ?>
	<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
		<?php get_template_part('templates/partials/lista-produtos'); ?>
	<?php endwhile; ?>
			        </div>
			    </div> <!-- /container -->
			</section>
	<?php wp_reset_postdata(); ?>

<?php else : ?>
	<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>

<?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
