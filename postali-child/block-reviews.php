<section class="reviews">
    <div class="container">
        <div class="columns">
        <?php 
            $query = new WP_Query( array(
                'posts_per_page'         => 1,
                'post_type' => 'testimonials',          // name of post type.
                'orderby'                => 'rand',

            ) );

            while ( $query->have_posts() ) : $query->the_post(); ?>
                <div class="review-container">
                    <h3><?php the_title(); ?></h3>
                    <div class="star-rating"><span class="icon-star-full"></span><span class="icon-star-full"></span><span class="icon-star-full"></span><span class="icon-star-full"></span><span class="icon-star-full"></span></div>
                    <span class="review"><?php the_excerpt(); ?></span>
                </div>

                <?php endwhile; wp_reset_postdata(); ?>
                <a href="/testimonials/" title="Read More Testimonials" class="centered">Continue Reading</a>

        </div>
    </div>
</section>