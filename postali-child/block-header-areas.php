<section class="interior-header" <?php if( get_field('header_background') ) { ?> style="background-image:url(<?php echo get_field('header_background'); ?>)" <?php } ?>>
    <div class="container">
        <div class="columns">
            <div class="column-full">
                <h1><?php the_field('header_h1'); ?></h1>
                <span class="header-headline"><?php the_field('header_headline'); ?></span>
                <div class="blue-separator"></div>
                        <p><?php the_field('global_address','options'); ?></p>
                        <p><span class="blue">PH</span>   |  <a href="tel:<?php the_field('global_phone','options'); ?>" title="Call Bernard Brody"><?php the_field('global_phone','options'); ?></a><br>
                        <span class="blue">EM</span>  |  <a href="mailto:<?php the_field('global_email','options'); ?>" title="Email Bernard Brody"><?php the_field('global_email','options'); ?></a></p>
            </div>
        </div>
    </div>
</section>