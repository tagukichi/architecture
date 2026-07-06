<?php
/**
 * KILA STAR theme functions and definitions.
 *
 * @package KILA_STAR
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // 直接アクセスを禁止
}

if ( ! defined( 'KILA_STAR_VERSION' ) ) {
	define( 'KILA_STAR_VERSION', '1.0.0' );
}

/**
 * テーマの基本設定
 */
if ( ! function_exists( 'kila_star_setup' ) ) {
	function kila_star_setup() {
		load_theme_textdomain( 'kila-star', get_template_directory() . '/languages' );

		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );
		add_theme_support( 'custom-logo' );
		add_theme_support(
			'html5',
			array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script' )
		);

		register_nav_menus(
			array(
				'primary' => __( 'メインメニュー（ヘッダー）', 'kila-star' ),
				'footer'  => __( 'フッターメニュー', 'kila-star' ),
			)
		);
	}
}
add_action( 'after_setup_theme', 'kila_star_setup' );

/**
 * スタイル・スクリプトの読み込み
 */
function kila_star_scripts() {
	// Google Fonts
	wp_enqueue_style(
		'kila-star-fonts',
		'https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;1,300;1,400&family=Montserrat:wght@200;300;400;500;600&display=swap',
		array(),
		null
	);

	// テーマ本体のスタイル（style.css）
	wp_enqueue_style(
		'kila-star-style',
		get_stylesheet_uri(),
		array( 'kila-star-fonts' ),
		KILA_STAR_VERSION
	);

	// メインスクリプト（フッターで読み込み）
	wp_enqueue_script(
		'kila-star-script',
		get_template_directory_uri() . '/script.js',
		array(),
		KILA_STAR_VERSION,
		true
	);
}
add_action( 'wp_enqueue_scripts', 'kila_star_scripts' );

/**
 * フォント用の preconnect を追加
 */
function kila_star_resource_hints( $hints, $relation_type ) {
	if ( 'preconnect' === $relation_type && wp_style_is( 'kila-star-fonts', 'enqueued' ) ) {
		$hints[] = array(
			'href'        => 'https://fonts.gstatic.com',
			'crossorigin' => 'anonymous',
		);
	}
	return $hints;
}
add_filter( 'wp_resource_hints', 'kila_star_resource_hints', 10, 2 );

/**
 * トップページに meta description を出力
 */
function kila_star_meta_description() {
	if ( is_front_page() ) {
		echo '<meta name="description" content="株式会社KILA STARは、一都三県を中心に不動産の買取再販・売買仲介、アパート・マンション建築コンサルティングを手がける不動産会社です。">' . "\n";
	}
}
add_action( 'wp_head', 'kila_star_meta_description', 1 );

/**
 * ヘッダー primary メニューが未設定のときのフォールバック（現在のアンカーメニュー）
 */
function kila_star_primary_menu_fallback() {
	?>
	<ul class="nav-links">
		<li><a href="#about">About</a></li>
		<li><a href="#business">Business</a></li>
		<li><a href="#works">Works</a></li>
		<li><a href="#flow">Flow</a></li>
		<li><a href="#contact" class="nav-cta">Contact</a></li>
	</ul>
	<?php
}

/* =========================================
   カスタマイザー（連絡先・お問い合わせ）
========================================= */

/**
 * '#' または URL を許可するサニタイズ
 */
function kila_star_sanitize_url_or_hash( $value ) {
	$value = trim( (string) $value );
	if ( '' === $value || '#' === $value ) {
		return '#';
	}
	return esc_url_raw( $value );
}

function kila_star_customize_register( $wp_customize ) {
	$wp_customize->add_section(
		'kila_star_contact',
		array(
			'title'       => __( 'KILA STAR｜お問い合わせ設定', 'kila-star' ),
			'description' => __( 'お問い合わせボタンのリンク先や電話番号・メールアドレスを設定します。', 'kila-star' ),
			'priority'    => 30,
		)
	);

	// お問い合わせボタンのリンク先（Googleフォーム等）
	$wp_customize->add_setting(
		'kila_star_form_url',
		array(
			'default'           => '#',
			'sanitize_callback' => 'kila_star_sanitize_url_or_hash',
			'transport'         => 'refresh',
		)
	);
	$wp_customize->add_control(
		'kila_star_form_url',
		array(
			'label'       => __( 'お問い合わせボタンのURL（Googleフォーム等）', 'kila-star' ),
			'description' => __( '空欄または「#」の場合、「お問い合わせはこちら」ボタンは表示されません。', 'kila-star' ),
			'section'     => 'kila_star_contact',
			'type'        => 'text',
		)
	);

	// 電話番号
	$wp_customize->add_setting(
		'kila_star_tel',
		array(
			'default'           => '080-6523-5282',
			'sanitize_callback' => 'sanitize_text_field',
			'transport'         => 'refresh',
		)
	);
	$wp_customize->add_control(
		'kila_star_tel',
		array(
			'label'       => __( '電話番号', 'kila-star' ),
			'description' => __( '空欄にすると電話番号の項目は表示されません。', 'kila-star' ),
			'section'     => 'kila_star_contact',
			'type'        => 'text',
		)
	);

	// メールアドレス
	$wp_customize->add_setting(
		'kila_star_email',
		array(
			'default'           => 'kita@kila-corp.com',
			'sanitize_callback' => 'sanitize_email',
			'transport'         => 'refresh',
		)
	);
	$wp_customize->add_control(
		'kila_star_email',
		array(
			'label'       => __( 'メールアドレス', 'kila-star' ),
			'description' => __( '空欄にするとメールアドレスの項目は表示されません。', 'kila-star' ),
			'section'     => 'kila_star_contact',
			'type'        => 'email',
		)
	);
}
add_action( 'customize_register', 'kila_star_customize_register' );

/* =========================================
   連絡先ヘルパー
========================================= */

function kila_star_get_form_url() {
	return get_theme_mod( 'kila_star_form_url', '#' );
}

function kila_star_get_tel() {
	return get_theme_mod( 'kila_star_tel', '080-6523-5282' );
}

/**
 * tel: 用に数字（と先頭+）だけ抽出
 */
function kila_star_get_tel_href() {
	return preg_replace( '/[^0-9+]/', '', kila_star_get_tel() );
}

function kila_star_get_email() {
	return get_theme_mod( 'kila_star_email', 'kita@kila-corp.com' );
}
