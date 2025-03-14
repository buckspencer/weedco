/**
 * File navigation.js.
 *
 * Handles toggling the navigation menu for small screens.
 */
( function() {
    const siteNavigation = document.getElementById( 'site-navigation' );

    // Return early if the navigation doesn't exist.
    if ( ! siteNavigation ) {
        return;
    }

    const button = siteNavigation.getElementsByTagName( 'button' )[ 0 ];

    // Return early if the button doesn't exist.
    if ( 'undefined' === typeof button ) {
        return;
    }

    const menu = siteNavigation.getElementsByTagName( 'ul' )[ 0 ];

    // Hide menu toggle button if menu is empty and return early.
    if ( 'undefined' === typeof menu ) {
        button.style.display = 'none';
        return;
    }

    menu.setAttribute( 'aria-expanded', 'false' );

    button.addEventListener( 'click', function() {
        siteNavigation.classList.toggle( 'toggled' );

        if ( button.getAttribute( 'aria-expanded' ) === 'true' ) {
            button.setAttribute( 'aria-expanded', 'false' );
        } else {
            button.setAttribute( 'aria-expanded', 'true' );
        }
    } );
} )(); 