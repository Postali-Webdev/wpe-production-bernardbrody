<?php
/**
 * Single - Case Results
 *
 * @package Postali Parent
 * @author Postali LLC
 */

$catID = $_GET['id'];
$catName = $_GET['cat'];

get_header(); ?>

<section class="interior-header">
    <div class="container">
        <div class="columns">
            <div class="column-full">
            <span class="header-headline">Case Results</span>
                <h1><?php the_title(); ?></h1>
            </div>
        </div>
    </div>
</section>

<section id="blog-holder">
    <div class="container">
        <div class="columns">
            <?php if ( function_exists('yoast_breadcrumb') ) {yoast_breadcrumb('<p id="breadcrumbs">','</p>');} ?>  
            <hr>
        </div>

        <div class="columns">
            <div class="column-third highlight">
                <h3><?php the_field('case_title'); ?></h3>
                <div class="blue-separator"></div>
                <p><?php the_field('blog_highlight_text'); ?><p>
            </div>
            <div class="column-two-thirds">
                <?php the_content(); ?>
                <div class="blue-separator"></div>
                <p><strong>Categories</strong> &nbsp; | &nbsp; 
                <?php
                    $terms = get_the_terms( $post->ID , 'result_topic' );
                    foreach ( $terms as $term ) { ?>
                    <a href="/case-results/result_topic/<?php echo $term->slug; ?>/">
                    <?php echo $term->name; ?></a><span class="comma">, </span>
                <?php } ?>
            </div>
        </div>
    </div>
</section>

<section class="results lightgray">
    <div class="container">
    <?php get_template_part('block', 'results-single');?>
    </div>
</section>
	

</div><!-- #content -->
</div>
<?php get_footer(); ?>
