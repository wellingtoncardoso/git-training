const accordion_item_headers = document.querySelectorAll( '.accordion-item__header' )

accordion_item_headers.forEach( accordion_item_header => {
    accordion_item_header.addEventListener( 'click', event =>{
        accordion_item_header.classList.toggle( 'active' )

        const accordion_tem_body = accordion_item_header.nextElementSibling
        if( accordion_item_header.classList.contains( 'active' ) ){
            accordion_tem_body.style.maxHeight = accordion_tem_body.scrollHeight + "px"
        }else{
            accordion_tem_body.style.maxHeight = 0
        }
    } )
} )