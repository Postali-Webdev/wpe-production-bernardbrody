<?php
/**
 * Sitemap 
 * Template Name: Sitemap
 * @package Postali Parent
 * @author Postali LLC
 */
get_header(); ?>

<?php get_template_part('block', 'header-interior');?>


<section id="sitemap">
	<?php if (have_posts()) : 
		while (have_posts()) : the_post(); ?>
            <div class="container">
				<div class="columns">
                <div class="column-full">
					<h2>Pages</h2> 
					<div class="spacer-30"></div>
					<ul class="double">
						<?php wp_list_pages("title_li=" ); ?>
						<li><a href="/case-results/">Case Results</a></li>
						<li><a href="/testimonials/">Reviews</a></li>
					</ul> 
				</div>
				<hr>
				<div class="column-full">
					<h2>Blog Posts</h2> 
					<div class="spacer-30"></div>
					<ul class="double">
						<?php wp_get_archives('type=postbypost'); ?>
					</ul>
				</div>
			</div>
	</div>
		<?php endwhile; ?>
	<?php endif; ?>
</section>

<?php get_template_part('block', 'awards');?>
	
<?php get_footer(); ?>
