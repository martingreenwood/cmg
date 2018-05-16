<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package cmg
 */

?>
<!--
	Built by Martin Greenwood
	Lead developer @WEAREBEARD
-->
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="theme-color" content="#5f007b">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class($pagename); ?>>
<div id="page" class="site">

	<header id="header" class="">

		<div class="container">
			
			<div class="row">

				<div class="four columns branding">
					<?php //the_custom_logo(); ?>
					<a href="<?php echo home_url( '/' ) ?>" title="">
					<svg class="elp" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 230.3 339.77"><defs><style>.a{fill:#fff;}</style></defs><title>Untitled-1</title><path class="a" d="M110.4,72.3c40.1,5.6,37.8,20,27.2,51s-65.3,47.2-98.3-16.2,63.8-72.5,63.8-72.5S95.5,31.2,77.6,33c0,0,15.1-23.3,36.3-26.3s27.8,8.4,48.7-14.5-3.1-54.9-28-37.7L127.2-54s21.8-22.2,49.1,0,1.8,76.5,1.8,76.5L153.9,36a9.53,9.53,0,0,0-3.8,12.9h0a9.61,9.61,0,0,0,12.4,4.2l6.6-3s-22,79,46.3,116.8l-13,26s-124.5-41-164.2,83H3.8V217.6s-4.7,8.3-18.7,7.2c0,0,16-11.2,17.7-26.7S-2.5,157.3,37,118.8c0,0,22.2,42.8,60.7,42.3s48.8-37.5,48.8-37.5S172.2,60.6,110.4,72.3Z" transform="translate(14.9 63.87)"/><path class="a" d="M154.4,46.2h0a5.85,5.85,0,0,0,8,3.1c6.6-3.3,19-12.4,39.4-37.5,0,0-30.4,20.2-44.5,26.9A5.85,5.85,0,0,0,154.4,46.2Z" transform="translate(14.9 63.87)"/><path class="a" d="M51.2,275.9c5-22.3,20.3-44.2,20.3-44.2s3.3,41.8,7.7,44.2Z" transform="translate(14.9 63.87)"/><path class="a" d="M184.5,199.1c-24.2-5.8-49.3-1.5-49.3-1.5s11.2,16,25.3,19.7Z" transform="translate(14.9 63.87)"/></svg>
					<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 252.8 122.1"><defs><style>.a{fill:#fff;}</style></defs><title>Untitled-2</title><path class="a" d="M166.6,101.2v10.9h12.8q-2.25,8.1-12,8.1a13.58,13.58,0,0,1-10.4-4.3,15.36,15.36,0,0,1-4.1-10.9A15,15,0,0,1,157,94.2a13.65,13.65,0,0,1,10.5-4.3,15.4,15.4,0,0,1,4.3.6,17.22,17.22,0,0,1,3.3,1.4,13,13,0,0,1,2.3,1.8,17.42,17.42,0,0,1,1.4,1.4,2.09,2.09,0,0,1,.4.6l10.7-10.8-.8-1a15.22,15.22,0,0,0-2.5-2.2,32.24,32.24,0,0,0-4.3-2.7,30.06,30.06,0,0,0-6.3-2.3,36.16,36.16,0,0,0-8.2-.9c-8.5,0-15.7,2.8-21.4,8.5a28,28,0,0,0-8.7,20.8,27.9,27.9,0,0,0,8.4,20.6c5.6,5.5,12.7,8.3,21.2,8.3s15.2-2.7,20.4-8.2,7.8-12.2,7.8-20.4a31.89,31.89,0,0,0-.3-4.2ZM94.3,125h8.1l11.5-22.7v30.8h14.8V76.6H113.8L98.9,106.2,84,76.6H68v56.5H82.8V102.3ZM49.8,113.7l-.5.6a8.82,8.82,0,0,1-1.4,1.5,15.36,15.36,0,0,1-2.3,1.8,12,12,0,0,1-3.4,1.5,16.11,16.11,0,0,1-4.4.6,13.58,13.58,0,0,1-10.4-4.3,16,16,0,0,1,0-21.4,13.58,13.58,0,0,1,10.4-4.3,14.71,14.71,0,0,1,4.2.6,14.09,14.09,0,0,1,3.2,1.3,11.6,11.6,0,0,1,2.1,1.6,12.52,12.52,0,0,1,1.2,1.2,2.09,2.09,0,0,1,.4.6l11.4-9.9-.8-1A19.86,19.86,0,0,0,57,81.7a32.1,32.1,0,0,0-4.3-2.8,25.33,25.33,0,0,0-6.3-2.3,36.1,36.1,0,0,0-8.2-1c-8.5,0-15.7,2.8-21.4,8.5A28.88,28.88,0,0,0,8,105a27.9,27.9,0,0,0,8.4,20.6c5.6,5.5,12.7,8.3,21.2,8.3a34.34,34.34,0,0,0,8.6-1.1,32.83,32.83,0,0,0,6.5-2.5,24.37,24.37,0,0,0,4.5-3.2,34.65,34.65,0,0,0,2.6-2.5c.4-.5.6-.9.8-1.1Z" transform="translate(25.8 -45.5)"/><path class="a" d="M227,167.6H-25.8V45.5H227Zm-239.8-13H214V58.5H-12.8Z" transform="translate(25.8 -45.5)"/></svg>
					</a>
				</div>

				<div class="eight columns nav">
					<div class="navTrigger">
						<i></i><i></i><i></i>
					</div>
					<div id="primary-menu" class="menu">
						<?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_id' => 'main-menu' ) ); ?>
					</div>
				</div>

			</div>

		</div>

	</header><!-- /header -->

	<div id="content" class="site-content">
