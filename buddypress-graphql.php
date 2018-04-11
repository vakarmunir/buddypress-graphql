<?php
  /*
   Plugin Name: Buddypress GraphQL
   Plugin URI: http://my-awesomeness-emporium.com
   description: GraphQL implementation for buddypress
   Version: 1.0
   Author: Waqar Muneer
   Author e-mail: waqarmuneer@gmail.com
   License: GPL2
   */
namespace BuddypressGraphQL;
require_once 'vendor/autoload.php';
use BuddypressGraphQL\Activities\ActivityQuery;

add_filter( 'graphql_root_queries', function( $fields ) {
	/*$defaultResolver = $fields['generalSettings']['resolve'];
	if ( current_user_can( 'eat_potato_chips' ) ) {
		$fields['generalSettings']['resolve'] = $defaultResolver;
	} else {
		$fields['generalSettings']['resolve'] = function() { throw new \Exception( 'You cannot do this brotato chip!' ); };
	}*/
        $fields['waqar'] = ActivityQuery::root_query();
	return $fields;
} );