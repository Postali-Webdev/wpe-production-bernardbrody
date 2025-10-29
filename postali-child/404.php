<?php
/**
 * Firm Overview 
 * Template Name: 404
 * @package Postali Parent
 * @author Postali LLC
 */
get_header(); ?>

<section class="interior-header">
    <div class="container">
        <div class="columns">
            <div class="column-half">
                <h1>Page Not Found</h1>
                <span class="header-headline">Our Apologies</span>
                <div class="blue-separator"></div>
                <div class="spacer-30"></div>
                <p class="header-contact">Contact Brody Law Firm &nbsp; | &nbsp; <a href="tel:<?php the_field('global_phone','options'); ?>" title="Call Brody Law Firm Today"><?php the_field('global_phone','options'); ?></a></p>
            </div>
        </div>
    </div>
</section>

<section>
<div class="container">
<h4><?php esc_html_e( 'We apologize but the page you\'re looking for could not be found.', 'postali' ); ?></h4>
<p><a class="link-404" href="/">Let's Get You Back on Track! </a><M/p>
<!-- TODO: Do we need this? Leaving it commented out for now -->
<?php // get_search_form(); ?>

</div><!-- #content -->
</section>
	
<?php get_template_part('block', 'awards');?>

<?php get_footer(); ?>
