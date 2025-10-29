<?php
/**
 * Generic Interior 
 * Template Name: Interior 
 * @package Postali Parent
 * @author Postali LLC
 */
get_header(); ?>

<?php get_template_part('block', 'header-interior');?>

<section id="content">
    <div class="container">
		<div class="columns">
        <div class="column-full">
            <?php the_content(); ?>
		</div>
	    </div>
    </div>
</section>

<?php get_template_part('block', 'awards');?>
	
<?php get_footer(); ?>
