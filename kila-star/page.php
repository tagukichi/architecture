<?php
/**
 * 固定ページテンプレート
 *
 * @package KILA_STAR
 */

get_header();
?>

	<main class="site-main" style="padding: calc(var(--space-xl) + 4rem) clamp(1.5rem, 5%, 5rem) var(--space-xl);">
		<div style="max-width: 760px; margin: 0 auto;">
			<?php
			while ( have_posts() ) :
				the_post();
				?>
				<article <?php post_class(); ?>>
					<h1 class="services-title" style="margin-bottom: var(--space-lg);"><?php the_title(); ?></h1>
					<div class="philosophy-body page-content" style="text-align: left; margin: 0;">
						<?php
						the_content();

						wp_link_pages(
							array(
								'before' => '<div class="page-links">' . esc_html__( 'ページ:', 'kila-star' ),
								'after'  => '</div>',
							)
						);
						?>
					</div>
				</article>
				<?php
			endwhile;
			?>
		</div>
	</main>

<?php
get_footer();
