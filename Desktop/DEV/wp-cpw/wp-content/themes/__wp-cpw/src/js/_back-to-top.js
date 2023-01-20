$(document).ready( () => {
    $( ".back-to" ).click( () => {
        $( "html, body" ).animate( {
            scrollTop: 0
        }, 300 )
    } )
} )