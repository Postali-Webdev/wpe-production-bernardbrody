<?php 

        $termID = [];
        $terms = get_the_terms($post->ID, 'category');
        foreach ($terms as $term) {
            $termID[] = $term->term_id;
        }
?>

<h2>More Posts in <?php echo $term->name; ?> Cases</h2>
<div class="spacer-60"></div>
<div class="columns">


<?php 
    $query = new WP_Query( array(
            'posts_per_page'         => 3,
            'post_type' => 'post',          // name of post type.
            'post__not_in' => array( $post->ID ),
            'tax_query' => array(
                array(
                    'taxonomy' => 'category',   // taxonomy name
                    'terms' => $termID,                  // term id, term slug or term name
                )
            )
        ) );

        while ( $query->have_posts() ) : $query->the_post(); ?>
            <a href="<?php the_permalink(); ?>" title="Read More about <?php the_title(); ?>" class="column-third result-box">
                <span class="result-category"><?php the_date(); ?></span>
                    <span class="result-title"><?php the_title(); ?></span>
                    <span class="result-excerpt"><?php the_excerpt(); ?></span>
            </a>
                        
        <?php endwhile; wp_reset_postdata(); ?>

        </div>
    </div>

    <div class="spacer-30"></div>
        <a href="/legal-blog/category/<?php echo $term->slug; ?>/" class="btn">More Posts</a>