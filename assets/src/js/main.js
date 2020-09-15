const toggleSearchForm = () => {

  const searchToggle = document.querySelector( '.menu-secondary .search-toggle' );
  const searchForm = document.querySelector( '.menu-secondary .search' );

  if( searchToggle && searchForm ) {

    searchToggle.addEventListener( 'click', () => {

      searchForm.classList.toggle( 'is-active' );

    }, false );

  }

}

window.addEventListener( 'load', () => {
  toggleSearchForm();
} );
