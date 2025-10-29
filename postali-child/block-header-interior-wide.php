<section class="interior-header" <?php if( get_field('header_background') ) { ?> style="background-image:url(<?php echo get_field('header_background'); ?>)" <?php } ?>>
    <div class="container">
        <div class="columns">
            <div class="column-full">
                <h1><?php the_field('header_h1'); ?></h1>
                <span class="header-headline"><?php the_field('header_headline'); ?></span>
                <div class="blue-separator"></div>
                    <?php if ( is_page ( 5495 )) { ?>
                        <p><?php the_field('global_address','options'); ?></p>
                        <p><span class="blue">PH</span>   |  <a href="tel:<?php the_field('global_phone','options'); ?>" title="Call Bernard Brody"><?php the_field('global_phone','options'); ?></a><br>
                        <span class="blue">EM</span>  |  <a href="mailto:<?php the_field('global_email','options'); ?>" title="Email Bernard Brody"><?php the_field('global_email','options'); ?></a></p>
                        <div class="spacer-60"></div><div class="spacer-30"></div>
                    <?php } else { ?>
                        <p class="header-snippet"><?php the_field('header_snippet'); ?></p>
                    <?php } ?>
                    <?php if ( !is_page ( 5495 )) { ?>
                        <div class="spacer-30"></div>
                        <p class="header-contact">Contact Brody Law Firm &nbsp; | &nbsp; <a href="tel:<?php the_field('global_phone','options'); ?>" title="Call Brody Law Firm Today"><?php the_field('global_phone','options'); ?></a></p>
                    <?php } else { ?>
                        
                    <?php } ?>
            </div>
        </div>
        <?php if ( is_page ( 5495 )) { ?>
                <span class="contact-directions">
                <div class="row">
                    <div class="col">
                        <div class="tabs">
                        <div class="tab">
                            <input type="checkbox" id="chck1">
                            <label class="tab-label" for="chck1">Driving Directions & Parking Information</label>
                            <div class="tab-content">
                                <?php the_field('driving_directions'); ?>
                                <hr>
                                <p><a href="<?php the_field('driving_directions','options'); ?>" title="Directions to Brody Law Firm" class="driving-directions" target="_blank"><span class="icon-arrow-right2"></span> &nbsp; Click here for driving directions</a></p>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </span>
        <?php } ?>
    </div>
</section>