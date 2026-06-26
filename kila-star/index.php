<?php
/**
 * フォールバックテンプレート（投稿一覧・アーカイブ等）
 *
 * このテーマは1ページ構成のフロントページ（front-page.php）が中心です。
 * 投稿ページや検索結果などはこのテンプレートで表示されます。
 *
 * @package KILA_STAR
 */

get_header();
?>

	<main class="site-main" style="padding: calc(var(--space-xl) + 4rem) clamp(1.5rem, 5%, 5rem) var(--space-xl);">
		<div style="max-width: 760px; margin: 0 auto;">
			<?php if ( have_posts() ) : ?>

				<?php if ( is_home() && ! is_front_page() ) : ?>
					<h1 class="services-title" style="margin-bottom: var(--space-lg);"><?php single_post_title(); ?></h1>
				<?php elseif ( is_archive() ) : ?>
					<h1 class="services-title" style="margin-bottom: var(--space-lg);"><?php the_archive_title(); ?></h1>
				<?php elseif ( is_search() ) : ?>
					<h1 class="services-title" style="margin-bottom: var(--space-lg);">
						<?php printf( esc_html__( '「%s」の検索結果', 'kila-star' ), '<em>' . esc_html( get_search_query() ) . '</em>' ); ?>
					</h1>
				<?php endif; ?>

				<?php
				while ( have_posts() ) :
					the_post();
					?>
					<article <?php post_class(); ?> style="margin-bottom: var(--space-lg); padding-bottom: var(--space-md); border-bottom: 1px solid var(--color-border-subtle);">
						<h2 class="service-name" style="margin-bottom: var(--space-sm);">
							<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
						</h2>
						<div class="philosophy-body" style="text-align: left; margin: 0;">
							<?php the_excerpt(); ?>
						</div>
					</article>
					<?php
				endwhile;

				the_posts_pagination(
					array(
						'mid_size'  => 1,
						'prev_text' => esc_html__( '前へ', 'kila-star' ),
						'next_text' => esc_html__( '次へ', 'kila-star' ),
					)
				);

			else :
				?>
				<p class="philosophy-body" style="margin: 0;"><?php esc_html_e( 'コンテンツが見つかりませんでした。', 'kila-star' ); ?></p>
				<?php
			endif;
			?>
		</div>
	</main>

<?php
get_footer();
