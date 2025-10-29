<section class="footer-contact">
    <div class="container">
        <div class="columns">
            <div class="column-half">
                <h2>In the Heart of Midtown Atlanta, Representing <span class="blue">All of Georgia.</span></h2>
                <div class="spacer-30"></div>
                <p>We’re a boutique criminal defense firm focused on one thing – the passionate defense of individuals accused of sex offenses in Georgia.</p>
                <p class="strong spread">CONVENIENTLY LOCATED IN REGIONS PLAZA</p>
                <p><?php the_field('global_address','options'); ?></p>
                <p><a href="<?php the_field('driving_directions','options'); ?>" title="Directions to Brody Law Firm" class="driving-directions" target="_blank">Driving Directions</a> &nbsp; | &nbsp; <a href="#myModal" title="Contact Brody Law Firm" class="driving-directions" data-lity> Parking Info</a></p>
                
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
                
                <p><span class="blue">PH</span>   |  <a href="tel:<?php the_field('global_phone','options'); ?>" title="Call Bernard Brody"><?php the_field('global_phone','options'); ?></a><br>
                <span class="blue">EM</span>  |  <a href="mailto:<?php the_field('global_email','options'); ?>" title="Email Bernard Brody"><?php the_field('global_email','options'); ?></a></p>
                </p>
            </div>
            <div class="column-half mediumgray"><h2><span class="blue">Contact us 24/7</span> for<br>a Consultation.</h2>
                <div class="spacer-30"></div>
                <?php echo do_shortcode("[contact-form-7 id='5499' title='Primary contact form']"); ?>
            </div>
        </div>
    </div>
</section>