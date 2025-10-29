<?php
/**
 * Media Mentions 
 * Template Name: Media
 * @package Postali Parent
 * @author Postali LLC
 */
get_header(); ?>

<?php get_template_part('block', 'header-interior');?>

<section class="category-intro lightgray">
	<div class="container">
		
        <?php if ( function_exists('yoast_breadcrumb') ) {yoast_breadcrumb('<p id="breadcrumbs">','</p>');} ?> 
        <div class="columns">
            <h3>Recognized by Georgia Trend Magazine and Atlanta Magazine’s Super Lawyers, Bernard Brody is an authority in the field of sex crime defense and one of the top attorneys in Georgia.</h3>
        </div>
    </div>	
</section>

<section class="media">
    <div class="container">
        <div class="columns">
        <?php if( have_rows('video_details') ): ?>
        <?php while( have_rows('video_details') ): the_row(); ?>
            
            <?php if( have_rows('video_left_column') ): ?>
            <?php while( have_rows('video_left_column') ): the_row(); ?>
                <div class="column-half">
                    <div class="video-text">
                        <h4><?php the_sub_field('video_title'); ?></h4>
                        <p class="larger"><?php the_sub_field('video_description'); ?></p>
                    </div>
                    <div class="video-image">
                        <a href="<?php the_sub_field('video_url'); ?>" data-lity><img src="<?php the_sub_field('video_thumbnail'); ?>"></a>
                    </div>
                </div>
            <?php endwhile; ?>
            <?php endif; ?>

            <?php if( have_rows('video_right_column') ): ?>
            <?php while( have_rows('video_right_column') ): the_row(); ?>
            <div class="column-half">
                <?php if( get_sub_field('video_title') ): ?>
                    <div class="video-text">
                        <h4><?php the_sub_field('video_title'); ?></h4>
                        <p class="larger"><?php the_sub_field('video_description'); ?></p>
                    </div>
                    <div class="video-image">
                        <a href="<?php the_sub_field('video_url'); ?>" data-lity><img src="<?php the_sub_field('video_thumbnail'); ?>"></a>
                    </div>
                <?php endif; ?>
            </div>
            <?php endwhile; ?>
            <?php endif; ?>

            <hr>

            <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</section>

<?php get_template_part('block', 'awards');?>

<!-- lity -->
<script src="/wp-content/themes/postali-child/assets/js/lity.js"></script>

<?php get_footer(); ?>

