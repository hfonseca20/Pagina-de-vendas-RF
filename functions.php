<?php

function cintia_css() {
	wp_register_style( 'grid-style', get_template_directory_uri() . '/assets/css/grid.min.css', array(), '1.4', false );
	wp_enqueue_style( 'grid-style' );
	$rrr = rand(5, 100);
	wp_register_style( 'geral-style', get_template_directory_uri() . '/style.css', array(), $rrr, false );
	wp_enqueue_style( 'geral-style' );
	
	if ( is_page_template( 'page-ebook-amor-blindado.php' ) ) {
	    
	    wp_register_style( 'ebook-amor', get_template_directory_uri() . '/assets/css/ebook-amor-blindado-4.css', array(), '3.3', false );
	    wp_enqueue_style( 'ebook-amor' );
	    
	}

}
add_action( 'wp_enqueue_scripts', 'cintia_css' );


function wpdocs_custom_excerpt_length( $length ) {
    return 20;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );

?>