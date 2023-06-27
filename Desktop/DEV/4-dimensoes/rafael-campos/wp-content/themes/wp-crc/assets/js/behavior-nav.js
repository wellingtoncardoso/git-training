$( '.site-main__nav-mobile' ).on( 'click', () => {
    $( '.nav-main' ).css( {"left":"0"} )
    $( '.site-mani__nav-mobile__close' ).css( {"display":"block"} )
} )
$( '.site-mani__nav-mobile__close' ).on( 'click', () => {
    $( '.nav-main' ).css( {"left":"-100%"} )
    $( '.site-mani__nav-mobile__close' ).css( {"display":"none"} )
} )
