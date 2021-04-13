(function($){

    let navbar = $( '.navbar' ),
        navbar_toggler = $( '.navbar-toggler' ),
        body = $( 'body' );

    navbar_toggler.on( 'click', function(e){
        e.preventDefault();
        if( $(this).hasClass( 'active' ) ){
            $(this).removeClass( 'active' );
            navbar.removeClass( 'active' );
            body.removeClass( 'active' );
        }else{
            $(this).addClass( 'active' );
            navbar.addClass( 'active' );
            body.addClass( 'active' );
        }

    });


    if( $( '.header__thumb-fig' ).length > 0 ){
        let thumb = $( '.header__thumb-fig img' ),
            thumb_H = thumb.height(),
            container = $( '.header__thumb-fig' ).parent();

        if( thumb_H > container.width() ){
            thumb.height( container.width() - 32 );
            thumb_H = thumb.height();
        }

        thumb.width( thumb_H );

        $( 'window' ).resize( function(){
            if( thumb_H > container.width() ){
                thumb.height( container.width() - 32 );
                thumb_H = thumb.height();
            }

            thumb.width( thumb_H );
        });
    }

})(jQuery);
