class WpCpwNavbarMobile{
    constructor( navbarMovile, navbarMobileList ){
        this.navbarMobile = document.querySelector( navbarMovile )
        this.navbarMobileList = document.querySelector( navbarMobileList )
        this.activeClass = "active"

        this.handleClick = this.handleClick.bind( this )
    }
    handleClick(){
        this.navbarMobileList.classList.toggle( this.activeClass )
        this.navbarMobile.classList.toggle( this.activeClass )
    }
    addEventClick(){
        this.navbarMobile.addEventListener( "click", this.handleClick )
    }
    init(){
        if( this.navbarMobile ){
            this.addEventClick()
        }
        return this
    }
}
export const wpCpwNavbarMobile = new WpCpwNavbarMobile(
    ".navbar-mobile",
    ".navigation ul",
)
wpCpwNavbarMobile.init()