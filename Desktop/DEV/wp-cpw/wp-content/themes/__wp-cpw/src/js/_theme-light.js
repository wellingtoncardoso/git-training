const checkbox = document.querySelector( "#checkbox" )

function click () {
    document.body.classList.toggle( "theme-light" )
}
checkbox.addEventListener( "change", click )