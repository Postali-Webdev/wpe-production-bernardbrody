<?php
/**
 * Template Name: Front Page
 * @package Postali Child
 * @author Postali LLC
**/
get_header();?>

<section class="homepage-hero" style="background-image:url(<?php the_field('hero_background'); ?>);">
    <div class="container">
        <div class="hero-content">
            <h1><?php the_field('hero_h1'); ?></h1>
            <div class="hero-headline"><?php the_field('hero_main_text'); ?></div>
            <div class="blue-separator"></div>
            <div class="mobile-cta-container">
                <div class="hero-cta-headline"><?php the_field('hero_cta'); ?></div>
                <div class="hero-cta-number"><a href="tel:<?php the_field('global_phone','options'); ?>" title="Call Bernard Brody"><?php the_field('global_phone','options'); ?></a></div>
            </div>
        </div>
    </div>
</section>

<section class="homepage-intro">
    <div class="container">
        <div class="columns">
            <div class="column-half"><?php the_field('intro_left_column'); ?></div>
            <div class="column-half"><?php the_field('intro_right_column'); ?></div>
        </div>
    </div>
</section>
	
<?php get_template_part('block', 'awards');?>

<section class="homepage-about">
    <div class="container">
        <div class="columns">
            <div class="column-half"><?php the_field('about_left_column'); ?></div>
            <div class="column-half"><?php the_field('about_right_column'); ?></div>
        </div>
    </div>
</section>

<section class="homepage-practice-areas">
    <div class="container">
        <h2>Our Practice Areas</h2>
        <div class="h2-sub">Our Entire Practice is Devoted to the Defense of Sex Offense Allegations</div>
        <div class="columns">

            <?php if( have_rows('practice_areas') ): ?>
            <?php while( have_rows('practice_areas') ): the_row(); ?>
            <?php $back_title = strip_tags( get_sub_field('practice_area_title') ); ?>

            <span class="card">
                <span class="front">
                    <span class="practice-area-title"><span><?php the_sub_field('practice_area_title'); ?></span></span>
                </span>
                <span class="back">
                    <p><?php the_sub_field('practice_area_description'); ?></p>
                    <p><a href="<?php the_sub_field('practice_area_link'); ?>" title="More about <?php echo $back_title; ?>"><?php echo $back_title; ?></a></p>
                </span>
            </span>

            <?php endwhile; ?>
            <?php endif; ?>

        </div>
    </div>
</section>

<?php get_template_part('block', 'results');?>

<section class="reviews">
    <div class="container">
        <h2>Our Reviews</h2>
        <div class="h2-sub">Read what our clients have to say</div>
        <p class="avvo-link"><a href="https://www.avvo.com/attorneys/30309-ga-bernard-brody-477202.html#client_reviews" title="AVVO Reviews" target="_blank">(Courtesy of Avvo.com)</a></p>
        <div class="columns">
            <?php if( have_rows('reviews') ): ?>
            <?php while( have_rows('reviews') ): the_row(); ?>
                <div class="review-container">
                    <div class="star-rating"><span class="icon-star-full"></span><span class="icon-star-full"></span><span class="icon-star-full"></span><span class="icon-star-full"></span><span class="icon-star-full"></span></div>
                    <span class="review"><?php the_sub_field('review_copy'); ?></span>
                    <span class="author"><?php the_sub_field('review_name'); ?></span>
                    <div class="blue-separator"></div>
                </div>
            <?php endwhile; ?>
            <?php endif; ?>
            <div class="spacer-60"></div>
            <a href="/testimonials/" title="Read more testimonials" class="btn centered">All Reviews</a>
        </div>
    </div>
</section>

<section class="homepage-faqs lightgray">
    <div class="container">
        <div class="columns">
            <div class="column-third"><?php the_field('faq_left_column'); ?></div>
            <div class="column-two-thirds"><?php the_field('faq_right_column'); ?></div>

            <hr>

            <div class="column-half"><?php the_field('caseprep_left_column'); ?></div>
            <div class="column-half"><?php the_field('caseprep_right_column'); ?></div>
            <div class="spacer-30"></div>
            <div class="prep-steps-container">
                <?php if( have_rows('caseprep_steps') ): ?>
                <?php while( have_rows('caseprep_steps') ): the_row(); ?>
                    <div class="column-half prep-steps">
                        <div class="steps-process-container">
                            <span class="steps-title">

                                <?php 
                                $image = get_sub_field('caseprep_step_img');
                                if( !empty( $image ) ): ?>
                                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                <?php endif; ?>

                            </span>
                            <div class="steps-content"><p><?php the_sub_field('caseprep_steps_description'); ?></p></div>
                        </div>
                        <div class="spacer-30"></div>
                        <a href="<?php the_sub_field('caseprep_steps_link'); ?>" title="Learn more about <?php the_sub_field('caseprep_steps_title'); ?>" class="steps-link">Learn more about <?php the_sub_field('caseprep_steps_title'); ?></a>
                    </div>
                    
                <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<section class="homepage-blog slategray">
    <div class="container">
        <h2>Our Blog</h2>
        <div class="blue-separator"></div>
        <div class="columns">
            <div class="column-half">
            <?php 
                $args = array (
                    'post_type'              => 'post',
                    'posts_per_page'         => 3,
                );
                $blog_posts = new WP_Query( $args );
                ?>
                <?php while( $blog_posts->have_posts() ) :  $blog_posts->the_post(); ?>  
                    <a href="<?php the_permalink(); ?>" title="Read More about <?php the_title(); ?>" class="home-blog"><strong><?php the_title(); ?></strong> - <?php the_date(); ?></a>
                <?php endwhile; wp_reset_postdata(); ?>
                <div class="spacer-30"></div>
                <a href="/blog/" class="btn">Read our Blog</a>
            </div>
            <div class="column-half"><?php the_field('blog_right_column'); ?></div>
        </div>
    </div>
</section>

<script>
jQuery(function() {                       
    jQuery(".card").click(function() {  
    jQuery(this).toggleClass("active");      
  });
});
</script>

<?php get_footer();?>