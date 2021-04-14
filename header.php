<?php
/**
 * The header.
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="stylesheet" type="text/css"
	href="<?php echo esc_url(home_url('wp-content/themes/camping-site/assets/css/custom-style.css'));?>"/>
	<link href="https://fonts.googleapis.com/css2?family=RocknRoll+One&display=swap" rel="stylesheet">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<header>
		<nav>
		<!-- logo -->
		<div class="menu-nav">
			<div class="div-logo">
				<a href="<?php echo esc_url( home_url() );?>">
					<img src="<?php echo esc_url( home_url( 'wp-content/uploads/2021/04/logo.png' ) );?>" alt="camping logo">
			  </a>
				<p>Camping Fire</p>
			</div>
			<div class="nav-links">
				<?php
					wp_nav_menu(array(
						'menu' => 'major', //this is the name that we gave our menu when we made it
						'theme_location' => '', // we will leave this empty
						'depth' => 5, // how many sub menu it can go
						'fallback_cb' => false // we don't want to set a fall back so just set to false
					));
				?>
			</div>
		</div>
		</nav>
	</header>
