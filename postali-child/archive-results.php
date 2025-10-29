<?php
/**
 * Results Archive
 *
 * @package Postali Parent
 * @author Postali LLC
 */

$query = new WP_Query( array(
	'posts_per_page'         => 12,
	'paged' => $paged,
	'post_type' => 'results',          // name of post type.
) );


get_header(); ?>

<section class="interior-header">
    <div class="container">
        <div class="columns">
            <div class="column-full">
                <h1>Case Results</h1>
                <span class="header-headline">Unmatched Record of Dismissals and Acquittals</span>
            </div>
        </div>
    </div>
</section>

<section id="blog-holder">
<div class="container blog-posts">

<div class="columns blog-header">
	<div class="column-half">
		<p id="breadcrumbs"><span><span><a href="/">Home</a>  &nbsp; | &nbsp;  Case Results </span></span></span></p>
	</div>
	<div class="column-half">
	<span class="category-title">Category &nbsp; </span><div class="select-wrapper"> 
		<?php if( $terms = get_terms( array(
		'taxonomy' => 'result_topic', 
		'orderby' => 'name'
	) ) ) : 
        echo '<select name="categoryfilter" id="categories" onchange="javascript:location.href = this.value;">';
        echo '<option style="color:black;" value="/case-results/">All Results</option>'; 
		foreach ( $terms as $term ) :
			echo '<option style="color:black;" value="/case-results/result_topic/' . $term->slug . '">' . $term->name . '</option>'; // ID of the category as an option value
			endforeach;
		echo '</select>';
	endif;
	?>
		</div>
	</div>
</div>


<div class="spacer-30"></div>
	<div class="blog-feed">
		<div class="columns">

        <?php while ( $query->have_posts() ) : $query->the_post(); ?>
                        
            <a href="<?php the_permalink(); ?>" title="Read More about <?php the_title(); ?>" class="column-third result-box">
                <span class="result-category"><?php the_field('case_title'); ?></span>
                <span class="result-title"><?php the_title(); ?></span>
                <span class="result-excerpt"><?php the_field('archive_text'); ?></span>
            </a>

        <?php endwhile; wp_reset_postdata(); ?>
		</div>
	</div>
</section>


<?php the_posts_pagination(); ?>


</div><!-- #content -->
</div>

<?php get_template_part('block', 'awards');?>

<?php get_footer(); ?>
