<?php
/**
 * Firm Overview 
 * Template Name: About Us
 * @package Postali Parent
 * @author Postali LLC
 */
get_header(); ?>

<?php get_template_part('block', 'header-interior');?>

<section class="category-intro">
	<div class="container">
		
        <?php if ( function_exists('yoast_breadcrumb') ) {yoast_breadcrumb('<p id="breadcrumbs">','</p>');} ?> 
        <hr>
    </div>	
</section>

<section class="about-top">
    <div class="container">
        <div class="columns">
            <?php if( have_rows('about_top_columns') ): ?>
            <?php while( have_rows('about_top_columns') ): the_row(); ?>
                <div class="column-half"><?php the_sub_field('about_top_left_column'); ?></div>
                <div class="column-half"><?php the_sub_field('about_top_right_column'); ?></div>
            <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</section>

<?php get_template_part('block', 'reviews');?>

<section class="about-bottom">
    <div class="container">
        <?php if( have_rows('about_bottom_columns') ): ?>
        <?php while( have_rows('about_bottom_columns') ): the_row(); ?>
            <div class="columns">
                <div class="column-half"><?php the_sub_field('about_bottom_left_column'); ?></div>
                <div class="column-half"><?php the_sub_field('about_bottom_right_column'); ?></div>
            </div>
            <hr>
        <?php endwhile; ?>
        <?php endif; ?>
    </div>
</section>

<?php get_template_part('block', 'awards');?>
	
<?php get_footer(); ?>
