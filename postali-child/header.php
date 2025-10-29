<?php
/**
 * Theme header.
 *
 * @package Postali Child
 * @author Postali LLC
**/
?><!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
<!-- Google Tag Manager -->


<!-- End Google Tag Manager -->
<meta http-equiv="Content-Type" content="text/html; charset=<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<!-- Google Tag Manager (noscript) -->

	<!-- End Google Tag Manager (noscript) -->

	<header>
		<div id="header-top" class="container">
			<div id="header-top_left">
				<?php the_custom_logo(); ?>
			</div>
			
			<div id="header-top_right">
				<div id="header-top_menu">
				<div id="more-button-mobile" class="toggle-nav">
							<span class="line line-1"></span>
							<span class="line line-2"></span>
							<span class="line line-3"></span>
						</div>
					<div class="menu-main">
					<div id="more-button-desktop" class="toggle-nav">MORE</div>
						
						<?php
							$args = array(
								'container' => false,
								'theme_location' => 'header-nav'
							);
							wp_nav_menu( $args );
						?>
						<span id="more-nav">
							<ul>
								<li class="menu-item-has-children"><a href="/case-preparation/">Case Preparation</a>
									<ul class="sub-menu">
										<li><a href="/case-preparation/investigation/">Investigation</a></li>
										<li><a href="/case-preparation/experts/">Experts</a></li>
										<li><a href="/case-preparation/pretrial-motion-practice/">Pretrial Motions</a></li>
										<li><a href="/case-preparation/trial-preparation/">Trial Preparation</a></li>
									</ul>
								</li>
								<li class=""><a href="/legal-blog/">Legal Blog</a></li>
								<li class=""><a href="/testimonials/">Reviews</a></li>
								<li class=""><a href="/media-mentions/">Media</a></li>
								<li class="mobile-contact"><a href="tel:<?php the_field('global_phone','options'); ?>"><span class="icon-phone-icon"></span> &nbsp; Call Brody Law Firm</a></li>
							</ul>
						</span>
					</div>
				</div>
			</div>
		</div>
	</header>

