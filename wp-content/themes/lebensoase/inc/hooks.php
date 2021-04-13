<?php
/**
 *  HEADER
 *
 */
add_action( 'lebensoase_header', 'lebensoase_header__before', 5 );
add_action( 'lebensoase_header', 'lebensoase_header__navbar', 10 );
add_action( 'lebensoase_header', 'lebensoase_header__after', 15 );

/**
 *  FOOTER
 *
 */
add_action( 'lebensoase_footer', 'lebensoase_footer__before', 5 );
add_action( 'lebensoase_footer', 'lebensoase_footer__content', 10 );
add_action( 'lebensoase_footer', 'lebensoase_footer__after', 15 );

/**
 *  CONTENT
 *
 */
add_action( 'lebensoase_content', 'lebensoase_content' , 10 );
