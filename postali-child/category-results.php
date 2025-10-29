<?php
/**
 * Post archive template.
 * 
 * @package Postali Child
 * @author Postali LLC
 */

get_header(); ?>

<section class="interior-header">
    <div class="container">
        <div class="columns">
            <div class="column-full">
                <h1>Case Results</h1>
                <span class="header-headline">Victories for Our Clients</span>
            </div>
        </div>
    </div>
</section>

<section id="blog-holder">
<div class="container blog-posts">

<div class="columns blog-header">
	<div class="column-half">
        <?php if( $terms = get_terms( array(
            'taxonomy' => 'result_topic', 
            'orderby' => 'name'
        ) ) ) :
        ?>
		<p id="breadcrumbs"><span><span><a href="/">Home</a> <span class="icon-drw-chevron-right"></span> <a href="/legal-blog/">Case Results</a> <span class="icon-drw-chevron-right"></span> <?php echo get_the_category( $id )[0]->name ?> </span></span></span></p>
	</div>
	<div class="column-half">
	<span class="category-title">Category &nbsp; </span><div class="select-wrapper"> 
		
		<?php echo '<select name="categoryfilter" id="categories" onchange="javascript:location.href = this.value;">';
		echo '<option value="/legal-blog/">All Results</option>'; 
		foreach ( $terms as $term ) :
		echo '<option value="/legal-blog/category/' . $term->slug . '">' . $term->name . '</option>'; // ID of the category as an option value
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
            <?php while ( have_posts() ) : the_post(); ?>
                <a href="<?php the_permalink(); ?>" title="Read More about <?php the_title(); ?>" class="column-third result-box">
                    <span class="result-category"><?php the_date(); ?></span>
                    <span class="result-title"><?php the_title(); ?></span>
                    <span class="result-excerpt"><?php the_excerpt(); ?></span>
                </a>
            <?php endwhile; ?>
        </div>
    </div>
</section>

     
            <?php the_posts_pagination(); ?>

</div><!-- #content -->
</div>

<?php get_template_part('block', 'awards');?>

<?php get_footer(); ?>
