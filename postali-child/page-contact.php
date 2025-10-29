<?php
/**
 * Contact Us 
 * Template Name: Contact
 * @package Postali Parent
 * @author Postali LLC
 */
get_header(); ?>

<?php get_template_part('block', 'header-interior');?>

<section class="category-intro lightgray">
	<div class="container">
		
        <?php if ( function_exists('yoast_breadcrumb') ) {yoast_breadcrumb('<p id="breadcrumbs">','</p>');} ?> 
        <div class="columns">
            <h3>We’re a boutique criminal defense firm focused on one thing – the passionate defense of individuals accused of sex offenses in Georgia.</h3>
        </div>
    </div>	
</section>

<section class="contact-bottom">
    <div class="container">
        <div class="columns">
            <div class="column-half">
                <div class="contact-form-container">
                    <?php echo do_shortcode("[contact-form-7 id='5499' title='Primary contact form']"); ?>
                </div>
            </div>
            <div class="column-half"><?php the_sub_field('contact_bottom_right_column'); ?>
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13263.92784374608!2d-84.3882702!3d33.786964!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x4a9d6bd8fca89b32!2sBrody%20Law%20Firm!5e0!3m2!1sen!2sus!4v1574088830437!5m2!1sen!2sus" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
            </div>
        </div>
    </div>
</section>

<?php get_template_part('block', 'awards');?>
	
<?php get_footer(); ?>
