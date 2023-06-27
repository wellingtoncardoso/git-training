//modal
var modal = document.querySelector( '.modal' )
var btn_close = document.querySelector( '.btn-close' )

toggle_modal = () => {
    modal.classList.toggle( 'show-modal' )
}

$( '.btn_toggle' ).on( 'click', () => {
    toggle_modal()
} )

window_on_click = ( e ) => {
    if( e.target === modal ){
        toggle_modal()
    }
}

btn_close.addEventListener( 'click', toggle_modal )
window.addEventListener( 'click', window_on_click )

//send info and access whatsapp
$( () => {
    $( '#send-form-lead' ).on( 'click', () => {
        let email = document.querySelector( '.form-lead-email' )
        if( email.value == '' ){
            alert( 'Por favor, preencher corretamente todos os campos' )
        }else{
            window.open(
                'https://wa.me/55319954597671', '_blank'
            )
        }
    } )
} )

// mask number phone
const number = document.getElementById( 'mask-phone' )
number.addEventListener( 'keypress', ( e ) => mask_number( e.target.value ) )
number.addEventListener( 'change', ( e ) => mask_number( e.target.value ) )

const mask_number = ( e ) =>{
    e = e.replace( /\D/g, "" )
    e = e.replace( /^(\d{2})(\d)/g, "($1) $2" )
    e = e.replace( /(\d)(\d{4})$/, "$1-$2" )
    number.value = e
}