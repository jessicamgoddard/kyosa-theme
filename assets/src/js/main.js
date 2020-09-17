// Caluclate hero height
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

window.addEventListener( 'load', () => {
  setHeroHeight();
  toggleSearchForm();
  activeSubMenu();
} );
