<?php $introImg = get_field( 'intro_image' ); ?>
	<section id="intro" class="parallax-window" data-parallax="scroll" data-bleed="50" data-image-src="<?php echo $introImg['url']; ?>">

		<div class="table">
			<div class="cell middle">

				<div class="container">
					
					<div class="row">

						<div class="hero">

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