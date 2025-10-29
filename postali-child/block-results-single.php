<?php 

        $termID = [];
        $terms = get_the_terms($post->ID, 'result_topic');
        foreach ($terms as $term) {
            $termID[] = $term->term_id;
        }
?>

<?php 
if ($term->name == 'Internet Stings') { $term_name = "Internet Sting"; }
if ($term->name == 'Appeals') { $term_name = "Appeal"; }
else $term_name = $term->name; 
?>

<h2>More Results in <?php echo $term_name; ?> Cases</h2>
<div class="spacer-60"></div>
<div class="columns">


<?php 
    $query = new WP_Query( array(
            'posts_per_page'         => 3,
            'post_type' => 'results',          // name of post type.
            'post__not_in' => array( $post->ID ),
            'tax_query' => array(
                array(
                    'taxonomy' => 'result_topic',   // taxonomy name
                    'terms' => $termID,                  // term id, term slug or term name
                )
            )
        ) );

        while ( $query->have_posts() ) : $query->the_post(); ?>
            <a href="<?php the_permalink(); ?>" title="Read More about <?php the_title(); ?>" class="column-third result-box">
                <span class="result-category"><?php the_field('case_title'); ?></span>
                <span class="result-title"><?php the_title(); ?></span>
                <span class="result-excerpt"><?php the_field('blog_highlight_text'); ?></span>
            </a>
                        
        <?php endwhile; wp_reset_postdata(); ?>

        </div>
    </div>

    <div class="spacer-30"></div>
        <a href="/case-results/result_topic/<?php echo $term->slug; ?>/" class="btn">More Results</a>