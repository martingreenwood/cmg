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

				<div class="eight columns offices"><!--
				<?php
				$cnt = 1;
				if( have_rows('offices', 'options') ):
				while ( have_rows('offices', 'options') ) : the_row();
				?>

					--><div class="office">
						<h4><?php the_sub_field( 'name' ); ?></h4>
						<span><a href="tel:<?php the_sub_field( 'phone' ); ?>"><?php the_sub_field( 'phone' ); ?></a></span>
						<span><a href="mailto:<?php echo antispambot( get_sub_field( 'email' ), false ); ?>"><?php echo antispambot( get_sub_field( 'email' ), false ); ?></a></span>
					</div><!--
				<?php
				$cnt++;
				endwhile;
				endif;
				?>
				--></div>


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
						<!-- <li><a href="<?php echo home_url( '/legal' ); ?>">legal</a></li> -->
						<li><a href="<?php echo home_url( '/privacy' ); ?>">Privacy</a></li>
						<li><a href="<?php echo home_url( '/terms' ); ?>">Terms</a></li>
						<li><a href="<?php echo home_url( '/cookies' ); ?>">Cookies</a></li>
					</ul>
				</div>

			</div>

		</div>
		
	</footer>

</div><!-- #page -->

<?php wp_footer(); ?>
<link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.css" />
<script src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.js"></script>
<script>
window.addEventListener("load", function(){
window.cookieconsent.initialise({
  "palette": {
    "popup": {
      "background": "#5f007b",
      "text": "#ffffff"
    },
    "button": {
      "background": "#27b6b3",
      "text": "#ffffff"
    }
  },
  "position": "bottom-right",
  "content": {
    "href": "http://www.catersmediagroup.com/cookies/"
  }
})});
</script>
</body>
</html>
