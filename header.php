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
			<a href="<?php echo home_url( '/' ); ?>" class="logo"><img src="<?php echo home_url( '/' ); ?>logoTim150.png" width="150" height="150" alt="Logo"></a>
			<h1 class="site-title">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
					<?php bloginfo( 'name' ); ?>
				</a>
			</h1>
			<h2><?php bloginfo( 'description' ); ?></h2>
			</section>
			<nav class="site__navigation">
				Menu ici
		
			</nav>
		</header>

