add_action( 'tgmpa_register', 'ghostpool_register_plugins', 1 );

function currentYear( $atts ){
    return date('l, F d, Y');
}
add_shortcode( 'year', 'currentYear' );
