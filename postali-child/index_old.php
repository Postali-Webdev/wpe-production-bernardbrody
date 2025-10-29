<?php
/**
 * Template Name: Blog
 * 
 * @package Postali Child
 * @author Postali LLC
 */

$catID = $_GET['id'];
$catName = $_GET['cat'];

get_header(); ?>

<section class="interior-header">
    <div class="container">
        <div class="columns">
            <div class="column-full">
                <h1>Case Results</h1>
                <span class="header-headline">A Reference for Lawyers & the Accused</span>
            </div>
        </div>
    </div>
</section>

<section id="blog-holder">
<div class="container blog-posts">

<div class="columns blog-header">
	<div class="column-half">
	
	<?php if (empty($catID)) { ?>
		<?php if ( function_exists('yoast_breadcrumb') ) {yoast_breadcrumb('<p id="breadcrumbs">','</p>');} ?>  
	<?php } else { ?>
		<p id="breadcrumbs"><span><span><a href="/">Home</a> <span class="icon-drw-chevron-right"></span> <a href="/legal-blog/">Legal Blog</a><span class="icon-drw-chevron-right"></span><span class="breadcrumb_last" aria-current="page"><?php echo $catName ?> </span></span></span></p>
	<?php } ?>
	</div>
	<div class="column-half">
	<span class="category-title">Category &nbsp; </span><div class="select-wrapper"> 
		<?php if( $terms = get_terms( array(
		'taxonomy' => 'category', 
		'orderby' => 'name'
	) ) ) : 
		echo '<select name="categoryfilter" id="categories" onchange="javascript:location.href = this.value;">';
		echo '<option value="/legal-blog/">All Results</option>'; 
		foreach ( $terms as $term ) :
			if ($term->name == $catName) {
			echo '<option value="/legal-blog/category/' . $term->name . '" selected>' . $term->name . '</option>'; // ID of the category as an option value
			} else {
			echo '<option value="/legal-blog/category/' . $term->name . '">' . $term->name . '</option>'; // ID of the category as an option value
			}
		endforeach;
		echo '</select>';
	endif;
	?>
		</div>
	</div>
</div>



<div class="spacer-30"></div>

	<div class="blog-feed">
		<?php if (empty($catID)) { ?>
			<div class="columns">
			
				<?php 
                    $query = new WP_Query( array(
						'posts_per_page'         => 12,
						'paged' => $paged,
                        'post_type' => 'post',          // name of post type.
                    ) );

                    while ( $query->have_posts() ) : $query->the_post(); ?>
                        
                                        <a href="<?php the_permalink(); ?>" title="Read More about <?php the_title(); ?>" class="column-third result-box">
                                            <span class="result-category"><?php the_date(); ?></span>
                                            <span class="result-title"><?php the_title(); ?></span>
                                            <span class="result-excerpt"><?php the_excerpt(); ?></span>
                                        </a>

                    <?php endwhile; wp_reset_postdata(); ?>

				</div>

				<?php } else { ?>
					
					<div class="columns">
			
				<?php 
                    $query = new WP_Query( array(
						'posts_per_page'         => 12,
						'paged' => $paged,
                        'post_type' => 'post',          // name of post type.
                        'tax_query' => array(
                            array(
								'taxonomy' => 'category',   // taxonomy name
								'field' => $catName,           // term_id, slug or name
                                'terms' => $catID,                  // term id, term slug or term name
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

				<?php } ?>
	</section>

<?php if ($query->max_num_pages > 1) : // custom pagination  ?>
    <section class="pagination">
	    <div class="container">            

			<?php
				$orig_query = $wp_query; // fix for pagination to work
				$wp_query = $query;
			?>
				<div class="container posts">
				<?php the_posts_pagination( array(
					'mid_size' => 5,
					'prev_text' => __( 'Prev', 'textdomain' ),
					'next_text' => __( 'Next', 'textdomain' ),
				) ); ?>
				</div>
			<?php
				$wp_query = $orig_query; // fix for pagination to work
            ?>
            
        </div>
    </section>
<?php endif; ?>

</div><!-- #content -->
</div>

<?php get_template_part('block', 'awards');?>

<?php get_footer(); ?>
