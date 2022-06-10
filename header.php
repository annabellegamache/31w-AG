<?php
	/**
	 * Template header
	 * Le template est intégré dans tous le modèles de thème
	 * @link https://developer.wordpress.org/themes/
	 * @package 31w-AG
	 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>
<body>
	<section class="site">
		<header class="site__header">
			<section class="site__branding">
			
			<h1 class="site-title">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
				<img src="<?php echo get_template_directory_uri(); ?>/logoTim150.png" width="150" height="150" alt="Logo">
				</a>
			</h1>
			<h4><?php bloginfo( 'description' ); ?></h4>
			</section>
			<nav class="site__navigation">
				<!--Menu ici -->
		
			</nav>
		</header>

