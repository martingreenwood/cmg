<?php
/**
 * The default page template
 *
 * @package cmg		
 */

get_header(); ?>

	<?php $introImg = get_field( 'intro_image' ); ?>
	<section id="intro" class="parallax-window" data-parallax="scroll" data-bleed="50" data-image-src="<?php echo $introImg['url']; ?>">

		<div class="table">
			<div class="cell middle">

				<div class="container">
					
					<div class="row">

						<div class="ten columns hero" style="padding-top: 100px;">

							<div class="slides">

								<?php
								if( have_rows('messages') ):
								while ( have_rows('messages') ) : the_row();
									?>
									<div class="slide">
										<?php the_sub_field('message'); ?>
									</div>
									<?php
								endwhile;
								endif;
								?>
								
							</div>

						</div>

					</div>

				</div>

			</div>
		</div>

	</section>

	<section id="primary">

		<div class="container">
			
			<div class="row">

				<div class="one columns blank">
					&nbsp;
				</div>

				<div class="ten columns copy">
					<h3><?php the_title( ); ?></h3>
					<?php
					if ( have_posts() ) :

						while ( have_posts() ) : the_post();

							get_template_part( 'template-parts/content', 'page' );

						endwhile;

					endif; ?>
				</div>

				<div class="one columns blank">
					&nbsp;
				</div>

			</div>

		</div>

	</section>

	

<?php
get_footer();
