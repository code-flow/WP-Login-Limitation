<?php
/*
Plugin Name: Mein Login-Limitation Plugin
Description: Fügt einen Parameter in das wp-login.php Formular an.
*/

// sorgt dafür, dass der acceess=yes Parameter angehängt wird, wenn das Formular abgesendet wird.
function wpbll_site_url( $url, $path, $scheme, $blog_id ){
	if( 'wp-login.php' ==  $path && 'login_post' == $scheme){
		return 'wp-login.php?access=yes';
	}

	return $url;
}
add_filter( 'site_url', 'wpbll_site_url', 10, 4 );

// sorgt dafür, dass das Formular trotzdem wieder angezeigt wird, auch wenn man ausgeloggt wurde.
function wpbll_logout_redirect( $location, $status ){
	if( false !== stripos($location, 'loggedout=') ){
		return $location . '&access=yes';
	}

	return $location;
}
add_filter( 'wp_redirect', 'wpbll_logout_redirect', 10, 2 );