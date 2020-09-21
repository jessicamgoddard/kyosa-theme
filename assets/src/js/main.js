// Calculate hero height
const setHeroHeight = () => {

  const siteHeader = document.querySelector( '.site-header' );
  const pageHeroImage = document.querySelector( '.page-hero__image' );

  if( pageHeroImage ) {

    const headerHeight = siteHeader.offsetHeight;

    pageHeroImage.style.minHeight = 'calc( 100vh - ' + headerHeight + 'px - 60px )';

  }

}

// Toggle search form display
const toggleSearchForm = () => {

  const searchToggle = document.querySelector( '.menu-secondary .search-toggle' );
  const searchForm = document.querySelector( '.menu-secondary .search' );

  if( searchToggle && searchForm ) {

    searchToggle.addEventListener( 'click', () => {

      searchForm.classList.toggle( 'is-active' );

    }, false );

  }

}

// Set nav item class when sub-menu is active
const activeSubMenu = () => {

  const subMenuToggles = document.querySelectorAll( '.sub-menu-toggle' );

  if( subMenuToggles ) {

    const config = { attributes: true, attributeOldValue: true };

    const callback = ( mutationsList, observer ) => {

      for( let mutation of mutationsList ) {

        if( mutation.type === 'attributes' ) {

          if( mutation.attributeName === 'class' ) {

            if( mutation.target.classList.contains( 'activated' ) ) {

              mutation.target.parentNode.classList.add( 'has-active-sub-menu' );

            } else {

              mutation.target.parentNode.classList.remove( 'has-active-sub-menu' );

            }

          }

        }

      }

    }

    for( let i = 0; i < subMenuToggles.length; i++ ) {

      const observer = new MutationObserver( callback );

      observer.observe( subMenuToggles[i], config );

    }

  }

}

const menuToggleOnScroll = () => {

  const x = window.matchMedia( '(min-width:960px)' );
  const siteHeader = document.querySelector( '.site-header' );

  if( x.matches && siteHeader ) {

    const menuToggle = document.createElement( 'button' );

    menuToggle.innerHTML = '<svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 40 40"><style type="text/css">.st0{fill:none;stroke:#679633;stroke-width:3;}.st1{fill:none;stroke:#D5161D;stroke-width:3;}.st2{fill:none;stroke:#337FD0;stroke-width:3;}.st3{fill:none;stroke:#F1CA4C;stroke-width:3;}</style><g id="bars">	<path class="st0" d="M2,38h36"/><path class="st1" d="M2,26h36"/><path class="st2" d="M2,14h36"/><path class="st3" d="M2,2h36"/></g><g id="x"><path class="st0" d="M21.1,21.1l17.8,17.8"/><path class="st1" d="M1.1,38.9L19,21"/><path class="st2" d="M21.1,18.9L38.9,1.1"/><path class="st3" d="M1.1,1.1l17.8,17.8"/></g></svg>';
    menuToggle.classList.add( 'menu-toggle' );
    menuToggle.setAttribute( 'aria-expanded', 'false' );
    menuToggle.setAttribute( 'aria-pressed', 'false' );
    siteHeader.appendChild( menuToggle );

    const toggleMenuToggle = () => {
      // If the window is scrolled below the site header
      if( window.scrollY >= siteHeader.offsetHeight ) {
        siteHeader.classList.add( 'is-scrolled' );
      } else {
        siteHeader.classList.remove( 'is-scrolled' );
      }
    }

    toggleMenuToggle()

    document.addEventListener( 'scroll', toggleMenuToggle, false );

    menuToggle.addEventListener( 'click', () => {

      siteHeader.classList.toggle( 'activated' );

    }, false );

  }

}

window.addEventListener( 'load', () => {
  setHeroHeight();
  toggleSearchForm();
  activeSubMenu();
  menuToggleOnScroll();
} );
