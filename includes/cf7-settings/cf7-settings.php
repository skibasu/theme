<?php
add_filter( 'wpcf7_form_elements', 'delicious_wpcf7_form_elements' );
 
function delicious_wpcf7_form_elements( $form ) {
    $form = do_shortcode( $form );
    return $form;
}

add_filter('wpcf7_autop_or_not', '__return_false');