<?php
/**
 * Template Name: Licensing Page
 *
 * @package cmg		
 */

get_header(); ?>

	<?php get_template_part( 'partials/main', 'banner' ); ?>

	<section id="reach">

		<div class="container">
			
			<div class="row">

				<div class="one columns blank">
					&nbsp;
				</div>

				<div class="ten columns copy">
					<h3><?php the_field( 'hero_title' ); ?></h3>
				</div>

				<div class="one columns blank">
					&nbsp;
				</div>

			</div>

			<?php
			if( have_rows('icons') ):
			while ( have_rows('icons') ) : the_row();
			?>
			<?php $icon = get_sub_field( 'icon' ); ?>
			<div class="row">
				<div class="one columns blank">
					&nbsp;
				</div>

				<div class="two columns">
					<img src="<?php echo $icon['url'] ?>" alt="">
				</div>

				<div class="eight columns copy blurb">
					<h4><?php the_sub_field('blurb'); ?></h4>
				</div>

				<div class="one columns blank">
					&nbsp;
				</div>
			</div>
			<?php
			endwhile;
			endif;
			?>

		</div>

	</section>

	<section id="social">

		<div class="table">
			<div class="cell middle">

				<div class="container">
					
					<div class="row">

						<div class="one columns blank">
							&nbsp;
						</div>

						<div class="ten columns copy">
							<h3><?php the_field( 'section_two_heading' ); ?></h3>
						</div>

						<div class="one columns blank">
							&nbsp;
						</div>

					</div>

					<?php
					if( have_rows('section_two_items') ):
					while ( have_rows('section_two_items') ) : the_row();
					?>
					<?php $icon = get_sub_field( 'icon' ); ?>
					<div class="row">
						<div class="one columns blank">
							&nbsp;
						</div>

						<div class="two columns">
							<img src="<?php echo $icon['url'] ?>" alt="">
						</div>

						<div class="eight columns copy blurb">
							<?php the_sub_field('text'); ?>
						</div>

						<div class="one columns blank">
							&nbsp;
						</div>
					</div>
					<?php
					endwhile;
					endif;
					?>

				</div>

			</div>
		</div>
		
	</section>

	<section id="joining">

		<div class="container">
					
			<div class="row">

				<div class="one columns blank">
					&nbsp;
				</div>

				<div class="ten columns copy">
					<h3><?php the_field( 'section_three_heading' ); ?></h3>
					<div class="blurb">
						<?php the_field( 'section_three_content' ); ?>
					</div>
				</div>

				<div class="one columns blank">
					&nbsp;
				</div>

			</div>

		</div>
		
	</section>

	<section id="contact">

		<div class="container">
					
			<div class="row">

				<div class="one columns blank">
					&nbsp;
				</div>

				<div class="ten columns copy">
					<h3>Get in touch</h3>
					<div class="text">
						<h4>We would love to hear from you.</h4>
						<p>Shoot us an email at <a href="mailto:licensing@catersmediagroup.com">licensing@catersmediagroup.com</a><br> 
						to find out how we can help with your campaign.</p>
					</div>
					<img src="<?php echo get_template_directory_uri() . '/assets/img/env.png' ?>" alt="">
				</div>

				<div class="one columns blank">
					&nbsp;
				</div>

			</div>

		</div>

				
	</section>

	<?php /*
	<!-- For Template only [[hidden]] -->
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php
		if ( have_posts() ) :

			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'home' );

			endwhile;

		endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->
	*/ 
	?>

	

<?php
get_footer();
