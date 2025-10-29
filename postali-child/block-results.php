<!-- query for homepage -->

<?php if ( is_page ( 4856 )) { ?>

<section class="results mediumgray">
    <div class="container">

        <h2>Case Results</h2>
        <div class="h2-sub">Unprecedented Results in the Most Difficult Sex Offense Cases in Georgia</div>
        <div class="columns">

        <?php 
            $query = new WP_Query( array(
                'posts_per_page'         => 6,
                'post_type' => 'results',          // name of post type.

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
        <a href="/case-results/" class="btn">All Results</a>
    </div>
</section>

<?php } ?>

<!-- query for practice area pages -->

<?php if ( is_page (array( 4984 , 5030 , 5036 , 5023 , 5016 , 5869 ))) { ?>

<section class="results mediumgray">
    <div class="container">

    <?php 
    if ( is_page ( 4984 )) { $field_name = "Rape"; $field_id = 16; $linkurl = "rape"; } 
    if ( is_page ( 5030 )) { $field_name = "Appeals"; $field_id = 21; $linkurl = "appeals"; } 
    if ( is_page ( 5036 )) { $field_name = "Child Molestation"; $field_id = 12; $linkurl = "child-molestation"; } 
    if ( is_page ( 5023 )) { $field_name = "Child Pornography"; $field_id = 13; $linkurl = "child-pornography"; }
    if ( is_page ( 5016 )) { $field_name = "Internet Stings"; $field_id = 22; $linkurl = "internet-stings"; }
    if ( is_page ( 5869 )) { $field_name = "Sexual Assault"; $field_id = 18; $linkurl = "sexual-assault"; } 
    ?>

                <?php 
                    $query = new WP_Query( array(
                        'posts_per_page'         => 3,
                        'post_type' => 'results',          // name of post type.
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'result_topic',   // taxonomy name
                                'terms' => $field_id,                  // term id, term slug or term name
                            )
                        )
                    ) ); ?>

                    <h2>Our Results in <?php echo $field_name; ?> Cases</h2>
                    <div class="spacer-60"></div>
                    <div class="columns">

                    <?php while ( $query->have_posts() ) : $query->the_post(); ?>
                        
                                        <a href="<?php the_permalink(); ?>" title="Read More about <?php the_title(); ?>" class="column-third result-box">
                                            <span class="result-category"><?php the_field('case_title'); ?></span>
                                            <span class="result-title"><?php the_title(); ?></span>
                                            <span class="result-excerpt"><?php the_field('blog_highlight_text'); ?></span>
                                        </a>
                        
                    <?php endwhile; wp_reset_postdata(); ?>

                    </div> <!-- end rape results -->

            
        </div>
        <div class="spacer-30"></div>
        <a href="/case-results/result_topic/<?php echo $linkurl ?>/" class="btn">All Results</a>
    </div>
</section>

<?php } ?>