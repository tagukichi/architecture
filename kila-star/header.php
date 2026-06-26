<?php
/**
 * ヘッダーテンプレート
 *
 * @package KILA_STAR
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

	<!-- Custom Cursor -->
	<div class="cursor" id="cursor"></div>
	<div class="cursor-ring" id="cursorRing"></div>

	<!-- Mobile Nav -->
	<nav class="mobile-nav" id="mobileNav" aria-label="<?php esc_attr_e( 'モバイルナビゲーション', 'kila-star' ); ?>">
		<a href="#about">About</a>
		<a href="#business">Business</a>
		<a href="#works">Works</a>
		<a href="#flow">Flow</a>
		<a href="#contact">Contact</a>
	</nav>

	<!-- Navigation -->
	<header class="nav" id="mainNav" role="banner">
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="nav-logo">株式会社KILA <span>STAR</span></a>
		<nav aria-label="<?php esc_attr_e( 'メインナビゲーション', 'kila-star' ); ?>">
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'primary',
					'container'      => false,
					'menu_class'     => 'nav-links',
					'depth'          => 1,
					'fallback_cb'    => 'kila_star_primary_menu_fallback',
				)
			);
			?>
		</nav>
		<button class="nav-hamburger" id="hamburger" aria-label="<?php esc_attr_e( 'メニューを開く', 'kila-star' ); ?>">
			<span></span>
			<span></span>
			<span></span>
		</button>
	</header>
