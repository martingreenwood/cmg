<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package cmg
 */

?>

	<section id="subfooter">

		<div class="container">
							
			<div class="row">

				<div class="four columns branding">
					<?php the_custom_logo(); ?>
					<p><?php the_field( 'footer_text', 'options' ); ?></p>
				</div>

				<div class="four columns offices">
				<?php
				$cnt = 1;
				if( have_rows('offices', 'options') ):
				while ( have_rows('offices', 'options') ) : the_row();
				?>

					<div class="office">
						<h4><?php the_sub_field( 'name' ); ?></h4>
						<span>Phone: <?php the_sub_field( 'phone' ); ?></span>
						<span><?php echo antispambot( get_sub_field( 'email' ), false ); ?></span>
					</div>

				<?php if ($cnt % 3 == 0): ?>
				</div>
				<div class="four columns offices">
				<?php endif; ?>	

				<?php
				$cnt++;
				endwhile;
				endif;
				?>
				</div>


			</div>
		
	</section>

	</div><!-- #content -->

	<footer>

		<div class="container">
							
			<div class="row">

				<div class="eight columns copy">
					<p>&copy; Copyright <?php echo date('Y') ?> Caters Media Group. All rights reserved.</p>
				</div>
				<div class="four columns copy">
					<ul>
						<li><a href="<?php echo home_url( '/legal' ); ?>">legal</a></li>
						<li><a href="<?php echo home_url( '/terms' ); ?>">terms</a></li>
						<li><a href="<?php echo home_url( '/cookies' ); ?>">cookies</a></li>
					</ul>
				</div>

			</div>

		</div>
		
	</footer>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
