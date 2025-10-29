<?php
/**
 * Results Archive
 *
 * @package Postali Parent
 * @author Postali LLC
 */

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
	<?php if( $terms = get_terms( array(
            'taxonomy' => 'result_topic', 
            'orderby' => 'name'
        ) ) ) :
        ?>
        <p id="breadcrumbs"><span><span><a href="/">Home</a> &nbsp; | &nbsp; <a href="/case-results/">Case Results</a> &nbsp; | &nbsp; </span> 
        <?php // dynamic breadcrumb based on topic category
            $category = get_the_terms( $id, 'result_topic' );
            //get First Category
            $firstCategory = $category[0];
            //get category link
            $category_link = get_category_link($firstCategory->term_id);
            //echo category name
            echo $firstCategory->name;
        ?>

        </span></span></span></p>
	</div>
	<div class="column-half">
	<span class="category-title">Category &nbsp; </span><div class="select-wrapper"> 
        <select name="categoryfilter" id="categories" onchange="javascript:location.href = this.value;">
        <option value="/case-results/">All Results</option>
        <?php foreach ( $terms as $term ) : ?>
            <?php if ( $firstCategory->name == $term->name ) : ?>
            <option style="color:black;" value="/case-results/result_topic/<?php echo $term->slug; ?>" selected><?php echo $term->name; ?></option>
            <?php else : ?>
            <option style="color:black;" value="/case-results/result_topic/<?php echo $term->slug; ?>" ><?php echo $term->name; ?></option>
            <?php endif; ?>
		<?php endforeach; ?>
		</select>
	<?php endif; ?>
		</div>
	</div>
</div>


<div class="spacer-30"></div>
	<div class="blog-feed">
		<div class="columns">

                    <?php while ( have_posts() ) : the_post(); ?>
                        
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
