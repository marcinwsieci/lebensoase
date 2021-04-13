<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package lebensoase
 */

?>

    </main><!-- #main -->

    <footer class="site-footer">

        <?php
        /**
         *  @hooked lebensoase_footer__before - 5
         *  @hooked lebensoase_footer__content - 10
         *  @hooked lebensoase_footer__after - 15
         */
        do_action( 'lebensoase_footer' );
        ?>

    </footer>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
