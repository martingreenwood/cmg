<?php
/**
 * Template Name: Basic Page
 *
 * @package cmg		
 */

get_header(); ?>

	<?php get_template_part( 'partials/main', 'banner' ); ?>

	<section id="basic">

		<div class="container">
			
			<div class="row">

				<div class="one columns blank">
					&nbsp;
				</div>

				<div class="ten columns copy">
					<h3><?php the_title(); ?></h3>
					<?php
					if ( have_posts() ) :

						while ( have_posts() ) : the_post();

							get_template_part( 'template-parts/content', 'page' );

						endwhile;

					endif; ?>
					</div>
				</div>

				<div class="one columns blank">
					&nbsp;
				</div>

			</div>

		</div>

	</section>	

<?php
get_footer();
