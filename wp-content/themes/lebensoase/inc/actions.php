<?php

function lebensoase_header__before(){
    ?>
    <div class="container-fluid">
        <div class="row">
            <div class="<?php if( is_front_page() ): ?>col-xl-6 px-0 d-flex align-items-between flex-column<?php else : ?>col-12 d-flex px-0<?php endif; ?>">
                <a class="header__logo-link" href="<?php echo home_url(); ?>">
                    <?php
                        if( has_custom_logo() ){
                            echo get_custom_logo();
                        }else{
                            echo sprintf( '<img class="d-inline-block align-top" src="%s" alt="%s" />',
                                            get_template_directory_uri() . '/assets/images/logo.png',
                                            get_bloginfo( 'name' )
                                        );
                        }
                    ?>
                </a>
                <?php
                if( is_front_page() )
                    echo sprintf( '<h1 class="d-none d-md-inline-block">%s</h1>', __( 'Lerntherapie | Workshops | Eltern Coaching', 'lebensoase' ) );
                else{
                    echo sprintf( '<h2 class="d-none d-md-inline-block ml-5 mt-4">%s<br/>%s</h2>',
                                    __( 'Sie sind hier:', 'lebensoase' ),
                                    get_the_title( get_the_id() )
                                );
                }
                ?>
            </div>
            <div class="d-none d-xl-flex col-xl-6 px-0 justify-content-end">
                <?php if( has_post_thumbnail() ){
                    echo sprintf( '<figure class="header__thumb-fig">%s</figure>',
                                    get_the_post_thumbnail( get_the_id(), 'full' )
                                );
                } ?>
            </div>
        </div>
    </div>
    <?php
}

function lebensoase_header__after(){

}

function lebensoase_header__navbar(){
    if( has_nav_menu( 'primary' ) ){
        ?>
        <button class="navbar-toggler">
            <span class="navbar-toggler-icon"></span>
        </button>
        <?php
        wp_nav_menu(
            array(
                'theme_location'  => 'primary',
                'menu_class'      => 'nav flex-column',
                'container_class' => 'navbar',
                'container_id'  =>  'navbarTop',
                'items_wrap'      => '<ul class="%2$s">%3$s</ul>',
                'fallback_cb'     => false,
                'li_class'  =>  'nav-item'
            )
        );
    }
}

function lebensoase_footer__before(){
    ?>
    <div class="container-fluid px-0 px-md-3">
        <div class="row">
            <div class="col-12 px-0">
                <?php echo sprintf( '<p class="mb-0">%s</p>', __( 'LebensOase by Verena, Beilngries-Leising', 'lebensoase' ) ); ?>
            </div>
        </div>
    </div>
    <?php
}

function lebensoase_footer__after(){
    ?>
    <div class="container-fluid px-0 px-md-3">
        <div class="row">
            <div class="col-12 mt-4 pt-2 px-0">
                <?php echo sprintf( '<a href="%s" rel="nofollow" target="_blank">%s</a>',
                                        __( 'https://netzmotor.de', 'lebensoase' ),
                                        __( 'netzmotor.de', 'lebensoase' )
                                    );
                ?>
            </div>
        </div>
    </div>
    <?php
}

function lebensoase_footer__content(){
    if( has_nav_menu( 'footer' ) ){
        ?>
        <div class="container-fluid px-0 px-md-3">
            <div class="row">
                <?php
                wp_nav_menu(
                    array(
                        'theme_location'    =>  'footer',
                        'menu_class'    =>  'nav',
                        'container_class'   =>  'col-12 px-0',
                        'items_wrap'    =>  '<ul class="%2$s">%3$s</ul>',
                        'fallback_cb'   =>  false,
                        'li_class'  =>  'nav-item'
                    )
                );
                ?>
            </div>
        </div>
        <?php
    }
}

function lebensoase_content(){
    ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 content">
                <?php the_content(); ?>
            </div>
        </div>
    </div>
    <?php
}
