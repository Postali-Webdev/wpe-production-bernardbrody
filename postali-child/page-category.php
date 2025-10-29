<?php
/**
 * Law Category 
 * Template Name: Category
 * @package Postali Parent
 * @author Postali LLC
 */
get_header(); ?>

<?php get_template_part('block', 'header-interior');?>

<section class="category-intro">
	<div class="container">
		
        <?php if ( function_exists('yoast_breadcrumb') ) {yoast_breadcrumb('<p id="breadcrumbs">','</p>');} ?> 
        <hr>
        <div class="columns">
            <div class="column-half"><?php the_field('intro_left_column'); ?></div>
            <div class="column-half"><?php the_field('intro_right_column'); ?></div>
        </div>

    </div>	
</section>

<section class="category-top">
    <div class="container">
        <div class="columns">
        <?php if( have_rows('category_top_columns') ): ?>
        <?php while( have_rows('category_top_columns') ): the_row(); ?>
            <div class="column-third"><?php the_sub_field('category_top_left_column'); ?></div>
            <div class="column-two-thirds"><?php the_sub_field('category_top_right_column'); ?></div>
            <hr>
            <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</section>

<?php get_template_part('block', 'reviews');?>

<?php get_template_part('block', 'results');?>

<section class="category-bottom">
    <div class="container">
        <div class="columns">
        <?php if( have_rows('category_bottom_columns') ): ?>
        <?php while( have_rows('category_bottom_columns') ): the_row(); ?>
            <div class="column-third"><?php the_sub_field('category_bottom_left_column'); ?></div>
            <div class="column-two-thirds"><?php the_sub_field('category_bottom_right_column'); ?></div>
            <hr>
            <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</section>

<?php if( have_rows('links') ): ?>
<section class="more-pages">
    <div class="container">
        <div class="columns">
            <div class="column-third"></div>
            <div class="column-two-thirds"><p><strong>More on this topic</strong><span class="divider"> | </span><?php while( have_rows('links') ): the_row(); ?><a href="<?php the_sub_field('page'); ?>"><?php the_sub_field('page_title'); ?></a><span class="divider"> | </span> <?php endwhile; ?></p></div>
        </div>
    </div>
</section>
<?php endif; ?>

<?php get_template_part('block', 'awards');?>
	
<?php get_footer(); ?>
