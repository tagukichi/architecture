<?php
/**
 * フロントページ（1ページ構成のランディング）
 *
 * @package KILA_STAR
 */

get_header();

$kila_form_url  = kila_star_get_form_url();
$kila_tel       = kila_star_get_tel();
$kila_tel_href  = kila_star_get_tel_href();
$kila_email     = kila_star_get_email();

// 未入力の項目は表示しない
$kila_has_form  = ( '' !== $kila_form_url && '#' !== $kila_form_url );
$kila_has_tel   = ( '' !== trim( $kila_tel ) && '' !== $kila_tel_href );
$kila_has_email = ( '' !== trim( $kila_email ) );
?>

	<!-- Hero -->
	<section data-section="HERO" class="hero">
		<div class="hero-bg">
			<img
				class="hero-bg-image"
				id="heroBgImage"
				src="https://images.unsplash.com/photo-1600596542815-ffad4c1539a9?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80"
				alt="<?php esc_attr_e( '建物の外観', 'kila-star' ); ?>"
				loading="eager"
			>
			<div class="hero-bg-gradient"></div>
		</div>

		<div class="hero-deco-overlay"></div>

		<div class="hero-content">
			<div class="hero-eyebrow reveal">
				<span class="deco-line-h" aria-hidden="true"></span>
				<span class="hero-eyebrow-text">Real Estate Solutions</span>
			</div>
			<h1 class="hero-title reveal reveal-delay-1">
				土地に、<br><em>新たな価値を。</em>
			</h1>
			<p class="hero-desc reveal reveal-delay-2">
				株式会社KILA STARは、一都三県を中心に、<br>
				不動産の買取再販・売買仲介から<br>
				アパート・マンション建築コンサルティングまでを<br>
				手がける不動産会社です。
			</p>
			<div class="hero-actions reveal reveal-delay-3">
				<a href="#business" class="btn-primary">
					<span>事業内容を見る</span>
				</a>
				<a href="#contact" class="btn-text">
					<span class="btn-text-arrow" aria-hidden="true"></span>
					お問い合わせ
				</a>
			</div>
		</div>

		<div class="hero-scroll-indicator" aria-hidden="true">
			<div class="hero-scroll-line"></div>
			<span class="hero-scroll-text">Scroll</span>
		</div>
	</section>

	<!-- About -->
	<section data-section="ABOUT" class="philosophy" id="about">
		<div class="philosophy-bg-pattern" aria-hidden="true"></div>
		<div class="philosophy-inner">
			<div class="section-label reveal">
				<span class="deco-line-h" aria-hidden="true"></span>
				About Us
				<span class="deco-line-h" aria-hidden="true"></span>
			</div>
			<blockquote class="philosophy-quote reveal reveal-delay-1">
				土地の可能性を、<br>
				<em>かたちにする。</em>
			</blockquote>
			<div class="deco-divider reveal reveal-delay-2" aria-hidden="true">
				<span class="deco-line-h"></span>
				<span class="deco-diamond"></span>
				<span class="deco-line-h"></span>
			</div>
			<p class="philosophy-body reveal reveal-delay-3">
				私たちは、一つひとつの土地と建物に丁寧に向き合い、<br>
				買取再販・売買仲介・建築コンサルティングを通じて、<br>
				不動産が本来持つ価値を引き出します。<br>
				お客様にとって最善の選択を、誠実にご提案します。
			</p>
		</div>
	</section>

	<!-- Business / 事業内容 -->
	<section data-section="BUSINESS" class="services" id="business">
		<div class="services-header">
			<div class="section-label reveal" style="justify-content: center;">
				<span class="deco-line-h" aria-hidden="true"></span>
				Our Business
				<span class="deco-line-h" aria-hidden="true"></span>
			</div>
			<h2 class="services-title reveal reveal-delay-1">
				事業<em>内容</em>
			</h2>
		</div>

		<div class="service-grid">
			<article class="service-card reveal">
				<div class="service-number">01</div>
				<div class="media-placeholder" aria-hidden="true"><span>Image</span></div>
				<h3 class="service-name">不動産買取再販</h3>
				<p class="service-desc">
					アパート用地・マンション用地・戸建て用地を買い取り、
					価値を高めて再販いたします。
				</p>
				<ul class="service-meta">
					<li>一都三県</li>
					<li>20坪以上</li>
					<li>駅徒歩13分以内</li>
				</ul>
			</article>

			<article class="service-card reveal reveal-delay-1">
				<div class="service-number">02</div>
				<div class="media-placeholder" aria-hidden="true"><span>Image</span></div>
				<h3 class="service-name">不動産売買仲介</h3>
				<p class="service-desc">
					土地・建物の売買を、売主様・買主様双方のお立場に立って
					丁寧に仲介いたします。
				</p>
			</article>

			<article class="service-card reveal reveal-delay-2">
				<div class="service-number">03</div>
				<div class="media-placeholder" aria-hidden="true"><span>Image</span></div>
				<h3 class="service-name">アパート・マンション建築コンサルティング</h3>
				<p class="service-desc">
					アパート・マンションの建築計画について、企画から
					専門的な視点でコンサルティングを行います。
				</p>
			</article>
		</div>
	</section>

	<!-- Works / 事例 -->
	<section data-section="WORKS" class="works" id="works">
		<div class="works-header">
			<div>
				<div class="section-label reveal">
					<span class="deco-line-h" aria-hidden="true"></span>
					Case Studies
				</div>
				<h2 class="works-title reveal reveal-delay-1">
					取引・開発<br><em>事例</em>
				</h2>
			</div>
			<a href="#contact" class="btn-text reveal reveal-delay-2">
				<span class="btn-text-arrow" aria-hidden="true"></span>
				ご相談はこちら
			</a>
		</div>

		<div class="works-grid">
			<article class="work-item reveal">
				<img class="work-img" src="https://images.unsplash.com/photo-1512917774080-9991f1c4c750?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="<?php esc_attr_e( 'アパート用地の事例', 'kila-star' ); ?>" loading="lazy">
				<div class="work-overlay"></div>
				<div class="work-deco-border"></div>
				<div class="work-info">
					<p class="work-tag">買取再販 · 東京都世田谷区</p>
					<h3 class="work-name">アパート用地</h3>
					<p class="work-year">2025</p>
				</div>
			</article>

			<article class="work-item reveal reveal-delay-1">
				<img class="work-img" src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="<?php esc_attr_e( 'マンション用地の事例', 'kila-star' ); ?>" loading="lazy">
				<div class="work-overlay"></div>
				<div class="work-deco-border"></div>
				<div class="work-info">
					<p class="work-tag">買取再販 · 神奈川県横浜市</p>
					<h3 class="work-name">マンション用地</h3>
					<p class="work-year">2024</p>
				</div>
			</article>

			<article class="work-item reveal reveal-delay-2">
				<img class="work-img" src="https://images.unsplash.com/photo-1593696140826-c58b021acf8b?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="<?php esc_attr_e( '戸建て用地の事例', 'kila-star' ); ?>" loading="lazy">
				<div class="work-overlay"></div>
				<div class="work-deco-border"></div>
				<div class="work-info">
					<p class="work-tag">買取再販 · 埼玉県さいたま市</p>
					<h3 class="work-name">戸建て用地</h3>
					<p class="work-year">2024</p>
				</div>
			</article>

			<article class="work-item reveal reveal-delay-3">
				<img class="work-img" src="https://images.unsplash.com/photo-1600607687939-ce8a6c25118c?ixlib=rb-4.0.3&auto=format&fit=crop&w=900&q=80" alt="<?php esc_attr_e( '建築コンサルティングの事例', 'kila-star' ); ?>" loading="lazy">
				<div class="work-overlay"></div>
				<div class="work-deco-border"></div>
				<div class="work-info">
					<p class="work-tag">建築コンサルティング · 千葉県市川市</p>
					<h3 class="work-name">賃貸マンション</h3>
					<p class="work-year">2023</p>
				</div>
			</article>
		</div>
	</section>

	<!-- Flow -->
	<section data-section="FLOW" class="process" id="flow">
		<div class="process-header">
			<div class="section-label reveal" style="justify-content: center;">
				<span class="deco-line-h" aria-hidden="true"></span>
				Flow
				<span class="deco-line-h" aria-hidden="true"></span>
			</div>
			<h2 class="process-title reveal reveal-delay-1">
				ご相談から<em>お取引まで</em>
			</h2>
		</div>

		<div class="process-steps">
			<div class="process-step reveal">
				<div class="process-number">01</div>
				<div class="media-placeholder" aria-hidden="true"><span>Image</span></div>
				<h3 class="process-step-title">お問い合わせ・ご相談</h3>
				<p class="process-step-desc">
					まずはお気軽にご相談ください。<br>
					物件の情報やご要望を<br>
					丁寧に伺います。
				</p>
			</div>
			<div class="process-step reveal reveal-delay-1">
				<div class="process-number">02</div>
				<div class="media-placeholder" aria-hidden="true"><span>Image</span></div>
				<h3 class="process-step-title">現地調査・査定</h3>
				<p class="process-step-desc">
					立地や条件を丁寧に確認し、<br>
					適正な査定を<br>
					行います。
				</p>
			</div>
			<div class="process-step reveal reveal-delay-2">
				<div class="process-number">03</div>
				<div class="media-placeholder" aria-hidden="true"><span>Image</span></div>
				<h3 class="process-step-title">ご提案・お打ち合わせ</h3>
				<p class="process-step-desc">
					買取・売買・建築活用など、<br>
					お客様に最適なプランを<br>
					ご提案します。
				</p>
			</div>
			<div class="process-step reveal reveal-delay-3">
				<div class="process-number">04</div>
				<div class="media-placeholder" aria-hidden="true"><span>Image</span></div>
				<h3 class="process-step-title">ご契約・お引渡し</h3>
				<p class="process-step-desc">
					条件にご納得いただいた上で、<br>
					ご契約・お引渡しへ<br>
					進みます。
				</p>
			</div>
		</div>
	</section>

	<!-- Testimonial / お客様の声 -->
	<section data-section="TESTIMONIAL" class="testimonial">
		<div class="testimonial-bg"></div>
		<div class="testimonial-deco" aria-hidden="true"></div>
		<div class="testimonial-inner">
			<span class="testimonial-quote-mark reveal" aria-hidden="true">&ldquo;</span>
			<div class="testimonial-slider reveal reveal-delay-1" id="testimonialSlider">
				<div class="testimonial-track" id="testimonialTrack">
					<div class="testimonial-slide">
						<blockquote class="testimonial-text">
							相続した土地の売却で相談しました。<br>
							買取まで丁寧に対応いただき、<br>
							想像以上の価格で手放すことができました。
						</blockquote>
						<div class="deco-divider" aria-hidden="true">
							<span class="deco-line-h"></span>
							<span class="deco-diamond"></span>
							<span class="deco-line-h"></span>
						</div>
						<p class="testimonial-author">T.S. 様</p>
						<p class="testimonial-role">土地売却のご相談 / 神奈川県</p>
					</div>
					<div class="testimonial-slide">
						<blockquote class="testimonial-text">
							アパート用地の買取をお願いしました。<br>
							査定から契約までスムーズで、<br>
							安心してお任せできました。
						</blockquote>
						<div class="deco-divider" aria-hidden="true">
							<span class="deco-line-h"></span>
							<span class="deco-diamond"></span>
							<span class="deco-line-h"></span>
						</div>
						<p class="testimonial-author">K.M. 様</p>
						<p class="testimonial-role">用地買取のご相談 / 東京都</p>
					</div>
					<div class="testimonial-slide">
						<blockquote class="testimonial-text">
							マンション建築の進め方に悩んでいましたが、<br>
							専門的な視点で丁寧にご提案いただき、<br>
							納得して計画を進められました。
						</blockquote>
						<div class="deco-divider" aria-hidden="true">
							<span class="deco-line-h"></span>
							<span class="deco-diamond"></span>
							<span class="deco-line-h"></span>
						</div>
						<p class="testimonial-author">Y.N. 様</p>
						<p class="testimonial-role">建築コンサルティングのご相談 / 埼玉県</p>
					</div>
				</div>
			</div>
			<div class="testimonial-controls reveal reveal-delay-2">
				<button class="testimonial-arrow" id="testimonialPrev" type="button" aria-label="<?php esc_attr_e( '前のお客様の声', 'kila-star' ); ?>">&lsaquo;</button>
				<div class="testimonial-dots" id="testimonialDots"></div>
				<button class="testimonial-arrow" id="testimonialNext" type="button" aria-label="<?php esc_attr_e( '次のお客様の声', 'kila-star' ); ?>">&rsaquo;</button>
			</div>
		</div>
	</section>

	<!-- CTA / Contact -->
	<section data-section="CONTACT" class="cta-section" id="contact">
		<div class="cta-inner">
			<div class="section-label reveal" style="justify-content: center;">
				<span class="deco-line-h" aria-hidden="true"></span>
				Contact
				<span class="deco-line-h" aria-hidden="true"></span>
			</div>
			<h2 class="cta-title reveal reveal-delay-1">
				不動産のご相談を、<br>
				<em>お聞かせください</em>
			</h2>
			<p class="cta-body reveal reveal-delay-2">
				買取・売却・建築活用など、不動産に関するご相談を承ります。<br>
				一都三県を中心に対応しております。<br>
				下記フォームよりお気軽にお問い合わせください。
			</p>
			<?php if ( $kila_has_form ) : ?>
			<a href="<?php echo esc_url( $kila_form_url ); ?>" class="btn-primary cta-form-btn reveal reveal-delay-3" target="_blank" rel="noopener">
				<span>お問い合わせはこちら</span>
			</a>
			<?php endif; ?>
			<?php if ( $kila_has_tel || $kila_has_email ) : ?>
			<div class="cta-contact reveal reveal-delay-3">
				<?php if ( $kila_has_tel ) : ?>
				<a href="tel:<?php echo esc_attr( $kila_tel_href ); ?>" class="btn-text">
					<span class="btn-text-arrow" aria-hidden="true"></span>
					<?php echo esc_html( $kila_tel ); ?>
				</a>
				<?php endif; ?>
				<?php if ( $kila_has_email ) : ?>
				<a href="mailto:<?php echo esc_attr( $kila_email ); ?>" class="btn-text">
					<span class="btn-text-arrow" aria-hidden="true"></span>
					<?php echo esc_html( $kila_email ); ?>
				</a>
				<?php endif; ?>
			</div>
			<?php endif; ?>
		</div>
	</section>

<?php
get_footer();
