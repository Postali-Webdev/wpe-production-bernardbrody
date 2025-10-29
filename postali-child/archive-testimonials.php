<?php
/**
 * Testimonials Archive
 *
 * @package Postali Parent
 * @author Postali LLC
 */
get_header(); ?>

<section class="interior-header">
    <div class="container">
        <div class="columns">
            <div class="column-full">
                <h1>Reviews</h1>
                <span class="header-headline">What our clients have to say</span>
                <div class="blue-separator"></div>
                <p class="header-snippet">The following are unedited reviews posted by our clients on <a href="https://www.avvo.com/attorneys/30309-ga-bernard-brody-477202.html#client_reviews" title="Read our AVVO reviews">Avvo.com.</a></p>
            </div>
        </div>
            </div>
</section>

<section>
    <div class="container">

        <div class="reviews centered">
            <div class="columns">
            <?php  while ( have_posts() ) : the_post(); ?>
            
                <div class="review-container">
                    <h3><?php the_title(); ?></h3>
                    <div class="star-rating"><span class="icon-star-full"></span><span class="icon-star-full"></span><span class="icon-star-full"></span><span class="icon-star-full"></span><span class="icon-star-full"></span></div>
                    <span class="review"><?php the_content(); ?></span>
                    <span class="author">Posted by <?php the_field('testimonial_author'); ?></span>
                    <div class="blue-separator"></div>
                </div>
                <?php endwhile; wp_reset_postdata(); ?>
            </div>
        </div>

        


    </div><!-- #content -->
</section>

<section class="pagination">
	<div class="container">  
        <?php the_posts_pagination(); ?>
    </div>
</section>

<?php get_footer();
