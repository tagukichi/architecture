<?php
/**
 * フッターテンプレート
 *
 * @package KILA_STAR
 */

$kila_tel       = kila_star_get_tel();
$kila_tel_href  = kila_star_get_tel_href();
$kila_email     = kila_star_get_email();
$kila_year      = function_exists( 'wp_date' ) ? wp_date( 'Y' ) : date_i18n( 'Y' );

// 未入力の項目は表示しない
$kila_has_tel   = ( '' !== trim( $kila_tel ) && '' !== $kila_tel_href );
$kila_has_email = ( '' !== trim( $kila_email ) );
?>

	<!-- Footer -->
	<footer class="footer" role="contentinfo">
		<div class="footer-grid">
			<div>
				<div class="footer-brand">株式会社KILA <span>STAR</span></div>
				<p class="footer-tagline">
					一都三県を中心に、<br>
					不動産買取再販・売買仲介、<br>
					アパート・マンション建築コンサルティングを<br>
					手がける不動産会社です。
				</p>
			</div>
			<div>
				<div class="footer-col-title">Navigation</div>
				<ul class="footer-links">
					<li><a href="#about">About</a></li>
					<li><a href="#business">Business</a></li>
					<li><a href="#flow">Flow</a></li>
					<li><a href="#contact">Contact</a></li>
				</ul>
			</div>
			<div>
				<div class="footer-col-title">Business</div>
				<ul class="footer-links">
					<li><a href="#business">不動産買取再販</a></li>
					<li><a href="#business">不動産売買仲介</a></li>
					<li><a href="#business">建築コンサルティング</a></li>
				</ul>
			</div>
			<div>
				<div class="footer-col-title">Company</div>
				<ul class="footer-links footer-company">
					<li>株式会社KILA STAR</li>
					<li>代表取締役　喜多 裕輔</li>
					<li>〒214-0012<br>神奈川県川崎市多摩区中野島6-26-1<br>フジヨシハイム205</li>
					<?php if ( $kila_has_tel ) : ?>
					<li><a href="tel:<?php echo esc_attr( $kila_tel_href ); ?>">Mobile：<?php echo esc_html( $kila_tel ); ?></a></li>
					<?php endif; ?>
					<?php if ( $kila_has_email ) : ?>
					<li><a href="mailto:<?php echo esc_attr( $kila_email ); ?>"><?php echo esc_html( $kila_email ); ?></a></li>
					<?php endif; ?>
				</ul>
			</div>
		</div>
		<div class="footer-bottom">
			<p class="footer-copy">&copy; <?php echo esc_html( $kila_year ); ?> KILA STAR Co., Ltd. All rights reserved.</p>
		</div>
	</footer>

	<?php wp_footer(); ?>
</body>
</html>
