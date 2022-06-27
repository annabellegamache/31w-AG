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
		<section class="site__sidebar">
			<?php
				function print_post_title() {
				global $post;
				$thePostID = $post->ID;
				$post_id = get_post($thePostID);
				$title = $post_id->post_title;
				$perm = get_permalink($post_id);
				$post_keys = array(); $post_val = array();
				$post_keys = get_post_custom_keys($thePostID);

				if (!empty($post_keys)) {
					foreach ($post_keys as $pkey) {
						if ($pkey=='external_url') {
						$post_val = get_post_custom_values($pkey);
						}
					}
				if (empty($post_val)) {
					$link = $perm;
				} else {
					$link = $post_val[0];
				}
				} else {
					$link = $perm;
				}
					echo '<h2><a href="'.$link.'" rel="bookmark" title="'.$title.'">'.$title.'</a></h2>';
				}
				?>
		</section>
