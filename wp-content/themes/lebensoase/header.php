<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package lebensoase
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">

    <header id="masthead" class="header">

        <?php
        /**
         *  @hooked lebensoase_header__before - 5
         *  @hooked lebensoase_header__navbar - 10
         *  @hooked lebensoase_header__after - 15
         */
        do_action( 'lebensoase_header' );
        ?>

    </header>

	<main id="main" class="site-main" role="main">
