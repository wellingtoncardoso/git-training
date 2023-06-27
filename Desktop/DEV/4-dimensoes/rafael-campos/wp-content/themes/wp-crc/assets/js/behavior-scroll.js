//scroll general
$( window ).scroll( () => {
    if( $( window ).scrollTop() > 200 ){
        $( 'header' ).css( {"background-color":"#0d3470"} ).fadeIn()
    }else{
        $( 'header' ).css( {"background-color":"transparent"} ).fadeIn()
    }
} )

// scroll link ancura
$( '.nav-main a[href^="#"]' ).on( 'click', function ( e ){
    e.preventDefault()
    var id = $( this ).attr( 'href' )
    targetOffset = $( id ).offset().top
    $( 'html, body' ).animate({
        scrollTop: targetOffset - 90
    }, 300)
} )