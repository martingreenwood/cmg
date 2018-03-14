<?php
/**
 * The main template fil
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
					<h3><?php the_field( 'section_one_heading' ); ?></h3>
					<p><?php the_field( 'section_one_text' ); ?></p>
				</div>

				<div class="one columns blank">
					&nbsp;
				</div>

			</div>

		</div>

	</section>

	<?php //$socialIamge = get_field( 'section_two_image' ); ?>
	<!-- <section id="social" class="parallax-window" data-parallax="scroll" data-bleed="50" data-image-src="<?php echo $socialIamge['url'] ?>"> -->
	<section id="social">
		<?php if (get_field( 'section_two_video' )): ?>
		<video id="vid" video autobuffer autoplay>
			<source id="mp4" src="<?php the_field( 'section_two_video' ); ?>" type="video/mp4">
		</video>
		<?php endif ?>

		<div class="table">
			<div class="cell middle">

				<div class="container">
					
					<div class="row">

						<!-- <div class="four columns blank">
							&nbsp;
						</div> -->

						<div class="eight columns copy">
							<div class="messages">
							<?php
							if( have_rows('section_two_messages') ):
							while ( have_rows('section_two_messages') ) : the_row();
								?>
								<div class="slide">
									<?php the_sub_field('section_two_text'); ?>
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

	<!-- <section id="brands">

		<div class="container">
					
			<div class="row">

				<div class="four columns">
					<?php the_field( 'brand_content' ); ?>
				</div>

				<div class="eight columns images">
				<?php 
				$brand_logos = get_field('brand_logos');
				$size = 'full'; // (thumbnail, medium, large, full or custom size)
				if( $brand_logos ):
					foreach( $brand_logos as $brand_logo ):
						echo wp_get_attachment_image( $brand_logo['ID'], $size );
					endforeach;
				endif; 
				?>
				</div>

			</div>

		</div>
		
	</section> -->

	<?php $coverageImage = get_field( 'section_three_image' ); ?>
	<!-- <section id="coverage" class="parallax-window" data-parallax="scroll" data-bleed="50" data-image-src="<?php echo $coverageImage['url']; ?>">

		<div class="table">
			<div class="cell middle">

				<div class="container">
					
					<div class="row">

						<div class="four columns blank">
							&nbsp;
						</div>

						<div class="eight columns copy">
							<?php the_field( 'section_three_text' ); ?>

							<div class="multiple-items">

								<?php 
								$args = array( 'post_type' => 'coverage', 'posts_per_page' => 10 );
								$loop = new WP_Query( $args );
								while ( $loop->have_posts() ) : $loop->the_post();
									?>
									<div class="slide">
										<h4><?php the_title( ) ?></h4>
										<p><?php the_excerpt() ?></p>
										<cite><?php the_field( 'source' ); ?></cite>
									</div>
									<?php
								endwhile;
								wp_reset_query();
								?>
								
							</div>
							
							<a class="button" href="#" title="">Interested in hitting these audiences?</a>
						</div>

					</div>

				</div>

			</div>
		</div>
		
	</section> -->

	<section id="news">

		<div class="container">
							
			<div class="row">

				<div class="twelve columns copy">
					<?php the_field( 'news_content' ); ?>
				</div>

			</div>

			<div class="row">

				<div class="twelve columns brands">
					<?php 
					$news_logos = get_field('news_logos');
					$size = 'full'; // (thumbnail, medium, large, full or custom size)
					if( $news_logos ):
						foreach( $news_logos as $news_logo ):
							echo wp_get_attachment_image( $news_logo['ID'], $size );
						endforeach;
					endif; 
					?>
				</div>

			</div>

		</div>
				
	</section>

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
