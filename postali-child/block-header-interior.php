<section class="interior-header" <?php if( get_field('header_background') ) { ?> style="background-image:url(<?php echo get_field('header_background'); ?>)" <?php } ?>>
    <div class="header-photo" <?php if( get_field('header_background') ) { ?> style="background-image:url(<?php echo get_field('header_background'); ?>)" <?php } ?>></div>
    <div class="container">
        <div class="columns">
            <div class="column-half">
                <h1><?php the_field('header_h1'); ?></h1>
                <span class="header-headline"><?php the_field('header_headline'); ?></span>
                <div class="blue-separator"></div>
                    <?php if ( is_page ( 5495 )) { ?>
                        <p class="header-snippet"><?php the_field('header_snippet'); ?></p>
                        <p><?php the_field('global_address','options'); ?></p>
                        <p class="header-contact"><a href="#myModal" title="Contact Brody Law Firm" class="driving-directions" data-lity> Parking Info</a></p>
                        <div class="spacer-30"></div>
                        <p><span class="blue">PH</span>   |  <a href="tel:<?php the_field('global_phone','options'); ?>" title="Call Bernard Brody"><?php the_field('global_phone','options'); ?></a><br>
                        <span class="blue">EM</span>  |  <a href="mailto:<?php the_field('global_email','options'); ?>" title="Email Bernard Brody"><?php the_field('global_email','options'); ?></a></p>
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
            <div id="myModal" class="lity-hide">
                    <div class="parking-info-popup">
                        <p>Regions Plaza is located on the corner of West Peachtree Street and 14th Street in the heart of Midtown Atlanta. There are two parking options available for which we gladly provide validations.</p>
                        <hr>
                        <p><strong>Valet Parking</strong><br>
                        Valet Parking is available directly in front of our building between the hours of 9:00 a.m. and 4:00 p.m. Just pull up to the building entrance on West Peachtree Street, leave your vehicle with the valet and walk into the lobby of Regions Plaza.</p>
                        <p>Once inside the lobby, take the elevator to the 20th floor. Upon exiting the elevator, walk down the hall, turn left and proceed to Suite 2075.</p>
                        <hr>
                        <p><strong>Parking Garage</strong><br>
                        The entrance to the parking garage is on West Peachtree Street immediately adjacent to our building. The garage is marked One Atlantic Center Parking.</p>
                        <p>Once you are parked inside the garage, follow the signs that read Elevators to Building. Take the elevator to the first floor. Walk straight out the elevator, through the breezeway, and into the lobby of Regions Plaza.</p>
                        <p>Once inside the lobby, take the elevator to the 20th floor. Upon exiting the elevator, walk down the hall, turn left and proceed to Suite 2075.</p>
                    </div>
                </div>
        <?php } ?>
    </div>
</section>

