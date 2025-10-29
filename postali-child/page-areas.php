<?php
/**
 * Areas Served 
 * Template Name: Areas Served 
 * @package Postali Parent
 * @author Postali LLC
 */
get_header(); ?>

<?php get_template_part('block', 'header-areas');?>

<section class="category-intro">
	<div class="container">
		
        <?php if ( function_exists('yoast_breadcrumb') ) {yoast_breadcrumb('<p id="breadcrumbs">','</p>');} ?> 
        <hr>
        <div class="columns">
            <div class="column-half"><?php the_field('intro_left_column'); ?></div>
            <div class="column-half"><?php the_field('intro_right_column'); ?></div>
            <hr>
            <?php if( have_rows('interior_content_block') ): ?>
            <?php while( have_rows('interior_content_block') ): the_row(); ?>
                <div class="column-fourth"><?php the_sub_field('left_column'); ?></div>
                <div class="column-three-fourths"><?php the_sub_field('right_column'); ?></div>
                <hr>
            <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</section>

<?php get_template_part('block', 'awards');?>
	
<?php get_footer(); ?>
