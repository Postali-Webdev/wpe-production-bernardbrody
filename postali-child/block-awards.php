<section class="awards lightgray">
    <div class="container">
    <?php if( have_rows('awards','options') ): ?>
            <?php while( have_rows('awards','options') ): the_row(); ?>
                <img src="<?php the_sub_field('award_image'); ?>" alt="<?php the_sub_field('award_description'); ?>">
            <?php endwhile; ?>
            <?php endif; ?>
    </div>
</section>