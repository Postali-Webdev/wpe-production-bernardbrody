<?php
/**
 * Case Preparation 
 * Template Name: Case Prep
 * @package Postali Parent
 * @author Postali LLC
 */
get_header(); ?>

<section class="interior-header" <?php if( get_field('header_background') ) { ?> style="background-image:url(<?php echo get_field('header_background'); ?>)" <?php } ?>>
    <div class="header-photo" <?php if( get_field('header_background') ) { ?> style="background-image:url(<?php echo get_field('header_background'); ?>)" <?php } ?>></div>
    <div class="container">
        <div class="columns">
            <div class="column-half">
                <h1><?php the_field('header_h1'); ?></h1>
                    <span class="header-headline"><?php the_field('header_headline'); ?></span>
                    <div class="blue-separator"></div>
                <?php if ( !is_page ( 5495 )) { ?>
                    <div class="spacer-30"></div>
                    <p class="header-contact">Contact Brody Law Firm &nbsp; | &nbsp; <a href="tel:<?php the_field('global_phone','options'); ?>" title="Call Brody Law Firm Today"><?php the_field('global_phone','options'); ?></a></p>
                <?php } else { ?>
                    
                <?php } ?>
            </div>
        </div>
    </div>
</section>
<section class="interior-intro-case">
    <div class="container">
        <div class="columns">
            <div class="column-full">
                <p class="header-snippet"><?php the_field('header_snippet'); ?></p>
            </div>
        </div>
    </div>
</section>

<section class="preparation-top">
    <div class="container">
    <?php if ( function_exists('yoast_breadcrumb') ) {yoast_breadcrumb('<p id="breadcrumbs">','</p>');} ?> 
        <hr style="display:block !important;"> 
        <div class="columns">
        <?php if( have_rows('preparation_top_columns') ): ?>
        <?php while( have_rows('preparation_top_columns') ): the_row(); ?>
            <div class="column-fourth">
                <?php the_sub_field('preparation_top_left_column'); ?>
            </div>
            <div class="column-three-fourths">
                <?php the_sub_field('preparation_top_right_column'); ?>
            </div>
            <hr>
            <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</section>
	
<section class="reviews">
    <div class="container">
        <div class="columns">
                <div class="review-container">
                    <h3><?php the_field('prep_review_title'); ?></h3>
                    <div class="star-rating"><span class="icon-star-full"></span><span class="icon-star-full"></span><span class="icon-star-full"></span><span class="icon-star-full"></span><span class="icon-star-full"></span></div>
                    <span class="review">
                        <p><?php the_field('prep_review_body'); ?></p>
                    </span>
                </div>

                <a href="/testimonials/" title="Read More Reviews" class="centered">Read Reviews</a>
        </div>
    </div>
</section>

<section class="preparation-bottom">
    <div class="container">
        <div class="columns">
        <?php if( have_rows('preparation_bottom_columns') ): ?>
        <?php while( have_rows('preparation_bottom_columns') ): the_row(); ?>
            <div class="column-fourth"><?php the_sub_field('preparation_bottom_left_column'); ?></div>
            <div class="column-three-fourths"><?php the_sub_field('preparation_bottom_right_column'); ?></div>
            <hr>
            <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</section>

<section class="more-pages">
    <div class="container">
        <div class="columns">
            <div class="column-full">
                <?php   if ( is_page(5831) ) { ?>
                <p><strong> <a href="/case-preparation/experts/" title="Expert Testimony"><strong>Next Topic: Expert Testimony</a> &nbsp; <span class="icon-drw-chevron-right"></span></strong></p>
                <?php } elseif( is_page(5840) ) { ?>
                <p><strong><span class="icon-drw-chevron-left"></span> &nbsp; <a href="/case-preparation/investigation/" title="Investigation">Previous Topic: Investigation</strong></a><span class="divider"> | </span><a href="/case-preparation/pretrial-motion-practice/" title="Pre-Trial Motions"><strong>Next Topic: Pre-Trial Motions</a> &nbsp; <span class="icon-drw-chevron-right"></span></strong></p>
                <?php } elseif( is_page(5843) ) { ?>
                <p><strong><span class="icon-drw-chevron-left"></span> &nbsp; <a href="/case-preparation/experts/" title="Expert Testimony">Previous Topic: Expert Testimony</strong></a><span class="divider"> | </span><a href="/case-preparation/trial-preparation/" title="Trial Preparation"><strong>Next Topic: Trial Preparation</a> &nbsp; <span class="icon-drw-chevron-right"></span></strong></p>
                <?php } elseif( is_page(5848) ) { ?>
                <p><strong><span class="icon-drw-chevron-left"></span> &nbsp; <a href="/case-preparation/pretrial-motion-practice/" title="Pre-Trial Motions">Previous Topic: Pre-Trial Motions</strong></a></p>
                <?php } ?>
            </div>
        </div>
    </div>
</section>

<?php get_template_part('block', 'awards');?>
	
<?php get_footer(); ?>
