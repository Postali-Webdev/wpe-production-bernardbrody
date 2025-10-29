<?php
/**
 * Post Archive
 *
 * @package Postali Parent
 * @author Postali LLC
 */
get_header(); ?>

<div class="container">

	<h1 class="post-title"><?php echo esc_html( $post_title ); ?></h1>

	<?php while ( have_posts() ) : the_post(); ?>
		<a href="<?php the_permalink(); ?>" title="Read More about <?php the_title(); ?>" class="column-third result-box">
            <span class="result-category"><?php the_date(); ?></span>
            <span class="result-title"><?php the_title(); ?></span>
            <span class="result-excerpt"><?php the_excerpt(); ?></span>
        </a>
	<?php endwhile; ?>

	<?php the_posts_pagination(); ?>

	<?php get_sidebar( 'archive' ); ?>

</div><!-- #content -->

<?php get_footer();
