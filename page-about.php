<?php
/**
 * Template Name: About Page
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

	<section id="reach">

		<div class="container">
			
			<div class="row">

				<div class="one columns blank">
					&nbsp;
				</div>

				<div class="ten columns copy">
					<h3><?php the_field( 'hero_title' ); ?></h3>
					<div class="icons">
					<?php
					if( have_rows('icons') ):
					while ( have_rows('icons') ) : the_row();
						?>
						<?php $icon = get_sub_field( 'icon' ); ?>
						<div class="icon">
							<img src="<?php echo $icon['url'] ?>" alt="">
							<h4><?php the_sub_field('blurb'); ?></h4>
						</div>
						<?php
					endwhile;
					endif;
					?>
					</div>
				</div>

				<div class="one columns blank">
					&nbsp;
				</div>

			</div>

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
							<h3><?php the_field( 'section_one_heading' ); ?></h3>
							<div class="stats">
							<?php
							if( have_rows('section_one_stats') ):
							while ( have_rows('section_one_stats') ) : the_row();
								?>
								<?php $icon = get_sub_field( 'icon' ); ?>
								<div class="stat">
									<img src="<?php echo $icon['url'] ?>" alt="">
									<h4><?php the_sub_field('stst'); ?></h4>
									<p><?php the_sub_field('blurb'); ?></p>
								</div>
								<?php
							endwhile;
							endif;
							?>
							</div>
							<div class="caveat">
								<?php the_field( 'section_one_text' ); ?>
							</div>
						</div>

						<div class="one columns blank">
							&nbsp;
						</div>

					</div>

				</div>

			</div>
		</div>
		
	</section>

	<section id="brands">

		<div class="container">
					
			<div class="row">

				<div class="one columns blank">
					&nbsp;
				</div>

				<div class="ten columns copy">
					<h3><?php the_field( 'section_two_heading' ); ?></h3>

					<div class="library">
					<?php
					if( have_rows('section_two_items') ):
					while ( have_rows('section_two_items') ) : the_row();
						?>
						<?php $icon = get_sub_field( 'icon' ); ?>
						<div class="item">
							<img src="<?php echo $icon['url'] ?>" alt="">
							<p><?php the_sub_field('text'); ?></p>
						</div>
						<?php
					endwhile;
					endif;
					?>
					</div>
				</div>

				<div class="one columns blank">
					&nbsp;
				</div>

			</div>

		</div>
		
	</section>

	<section id="track">

		<div class="container">
					
			<div class="row">

				<div class="one columns blank">
					&nbsp;
				</div>

				<div class="ten columns copy">
					<h3><?php the_field( 'section_three_heading' ); ?></h3>

					<div class="social">
						<i class="fab fa-snapchat-ghost"></i>
						<i class="fab fa-instagram"></i>
						<i class="fab fa-youtube"></i>
						<i class="fab fa-vimeo-v"></i>
						<i class="fab fa-facebook-f"></i>
					</div>

					<div class="stats">
						<?php
						if( have_rows('section_three_stats') ):
						while ( have_rows('section_three_stats') ) : the_row();
							?>
							<?php $image = get_sub_field( 'image' ); ?>
							<div class="stat">
								<img src="<?php echo $image['url'] ?>" alt="">
								<!-- <p><?php the_sub_field('text'); ?></p> -->
							</div>
							<?php
						endwhile;
						endif;
						?>
					</div>
				</div>

				<div class="one columns blank">
					&nbsp;
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
					<h3><?php the_field( 'section_four_title' ); ?></h3>
					<?php the_field( 'section_four_intro' ); ?>
					<?php $four_image = get_field( 'section_four_image' ); ?>
					<img src="<?php echo $four_image['url']; ?>" alt="">
				</div>

				<div class="one columns blank">
					&nbsp;
				</div>

			</div>

		</div>
		
	</section>

	<section id="casestudy">

		<div class="table">
			<div class="cell middle">

				<div class="container">
							
					<div class="row">

						<div class="one columns blank">
							&nbsp;
						</div>

						<div class="ten columns copy">
							<h3><?php the_field( 'case_study_title' ); ?></h3>
							<?php the_field( 'case_study_content' ); ?>
						</div>

						<div class="one columns blank">
							&nbsp;
						</div>

					</div>

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
					<h3>Get in touch!</h3>
					<div class="text">
						<h4>We'd love to hear from you.</h4>
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

	

<?php
get_footer();
