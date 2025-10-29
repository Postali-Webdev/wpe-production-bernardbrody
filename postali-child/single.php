<?php
/**
 * Single - Blog Posts
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
                <span class="header-headline">Legal Blog</span>
                <h1><?php the_title(); ?></h1>
            </div>
        </div>
    </div>
</section>

<section id="blog-holder">
    <div class="container">
        <div class="columns">
        <?php 
            $termID = [];
            $terms = get_the_terms($post->ID, 'category');
            foreach ($terms as $term) {
                $termID[] = $term->term_id;
            }
        ?>
        <p id="breadcrumbs"><span><span><a href="/">Home</a> <span class="icon-drw-chevron-right"></span> <a href="/legal-blog/">Legal Blog</a> <span class="icon-drw-chevron-right"></span> <a href="/legal-blog/category/<?php echo $term->slug; ?>/"><?php echo $term->name; ?></a>  <span class="icon-drw-chevron-right"></span> <?php the_title(); ?> </span></span></span></p>
            <hr>
        </div>

        <div class="columns">
            <div class="column-third highlight">
                <h3><?php the_date(); ?></h3>
                <div class="blue-separator"></div>
                <p><?php the_field('blog_highlight_text'); ?><p>
            </div>
            <div class="column-two-thirds"><?php the_content(); ?></div>
        </div>
    </div>
</section>

<section class="results lightgray">
    <div class="container">
    <?php get_template_part('block', 'posts-single');?>
    </div>
</section>
	

</div><!-- #content -->
</div>
<?php get_footer(); ?>
