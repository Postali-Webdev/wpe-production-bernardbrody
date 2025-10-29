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
					<div class="menu-main">
					<div id="menu-icon" class="toggle-nav">
						<span class="line line-1"></span>
						<span class="line line-2"></span>
						<span class="line line-3"></span>
					</div>
						<?php
							$args = array(
								'container' => false,
								'theme_location' => 'header-nav'
							);
							wp_nav_menu( $args );
						?>
					</div>
					<div class="menu-more">
					<div id="more-button" class="toggle-nav">MORE</div>
						<nav id="more-nav">
							<ul>
								<li class=""><a href="/legal-blog/">Legal Blog</a></li>
								<li class=""><a href="/testimonials/">Reviews</a></li>
								<li class=""><a href="/media-mentions/">Media</a></li>
								<li class=""><a href="/case-preparation/">Case Preparation</a></li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
		</div>
	</header>

