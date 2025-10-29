<?php
/**
 * Theme footer
 *
 * @package Postali Child
 * @author Postali LLC
**/
?>
<footer>

    <?php if ( !is_page ( 5495 )): ?>
        <?php get_template_part('block', 'footer-contact');?>
    <?php endif; ?> 

    <section class="footer-utility">
        <div class="container">
            <div class="footer-copyright"> &copy; <?php echo date("Y"); ?> Brody Law Firm. All Rights Reserved.</div>
            <div class="footer-social">
                <a href="https://www.facebook.com/Brody-Law-Firm-245420782160634/" title="Facebook" target="_blank"><span class="icon-footer-facebook-icon"></span></a><a href="https://www.linkedin.com/in/bernard-brody-53a4257" title="LinkedIn" target="_blank"><span class="icon-footer-linkedin-icon"></span></a><a href="https://twitter.com/bernardbrody" title="Twitter" target="_blank"><span class="icon-footer-twitter-icon"></span></a>
            </div>
            <div class="footer-menu">
                <?php
                    $args = array(
                        'container' => false,
                        'theme_location' => 'footer-nav'
                    );
                    wp_nav_menu( $args );
                ?>
            </div>
        </div>
    </section>
    
</footer>

<!-- Add JSON Schema here -->

<?php 
    // Global Schema
    $global_schema = get_field('global_schema', 'options');
    if ( !empty($global_schema) ) :
        echo '<script type="application/ld+json">' . $global_schema . '</script>';
    endif;

    // Single Page Schema
    $single_schema = get_field('single_schema');
    if ( !empty($single_schema) ) :
        echo '<script type="application/ld+json">' . $single_schema . '</script>';
    endif; 
?>


<?php wp_footer(); ?>
</body>
</html>


