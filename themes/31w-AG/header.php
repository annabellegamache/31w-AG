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
	<?php 
	if (is_front_page()) : ?>
	<section class="site2">
	<?php endif;?>
	<?php 
	if (!is_front_page()) : ?>
	<section class="site">
	<?php endif;?>	
		<header class="site__header">
			<section class="site__branding">
			<h1 class="site-title">Technique d'intégration multimédia</h1>
			
			</section>
			
		</header>

		
