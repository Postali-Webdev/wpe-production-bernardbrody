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
                <h1>Legal Blog</h1>
                <span class="header-headline">A Reference for Lawyers & the Public</span>
            </div>
        </div>
    </div>
</section>

<section id="blog-holder">
<div class="container blog-posts">

<div class="columns blog-header">
	<div class="column-half">
        <?php if( $terms = get_terms( array(
            'taxonomy' => 'category', 
            'orderby' => 'name'
        ) ) ) :
        ?>
        <p id="breadcrumbs"><span><span><a href="/">Home</a> &nbsp; | &nbsp; <a href="/blog/">Legal Blog</a> &nbsp; | &nbsp; 
        <?php // dynamic breadcrumb based on topic category
            $category = get_the_terms( $id, 'category' );
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
        <option value="/blog/">All Posts</option>
        <?php foreach ( $terms as $term ) : ?>
            <?php if ( $firstCategory->name == $term->name ) : ?>
            <option value="/blog/category/<?php echo $term->slug; ?>" selected><?php echo $term->name; ?></option>
            <?php else : ?>
            <option value="/blog/category/<?php echo $term->slug; ?>" ><?php echo $term->name; ?></option>
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
