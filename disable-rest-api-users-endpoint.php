<?php
/*
Plugin Name:  disable user REST API endpoint
Plugin URI:   https://github.com/paulvanbuuren/WordPress-disable-REST-API-users-endpoint
Description:  To prevent your scriptkiddies from retrieving users' slugs add this MUas a must-use plugin.
Author:       Paul van Buuren
Version:      1.0
Author URI:   https://wbvb.nl
*/

// disable user REST API endpoint
add_filter( 'rest_endpoints', function( $endpoints ){
    if ( isset( $endpoints['/wp/v2/users'] ) ) {
        unset( $endpoints['/wp/v2/users'] );
    }
    if ( isset( $endpoints['/wp/v2/users/(?P<id>[\d]+)'] ) ) {
        unset( $endpoints['/wp/v2/users/(?P<id>[\d]+)'] );
    }
    return $endpoints;
});

