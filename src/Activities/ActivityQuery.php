<?php

namespace BuddypressGraphQL\Activities;
use BuddypressGraphQL\Activities\ActivityType;

class ActivityQuery {

	/**
	 * Holds the root_query field definition
	 * @var array $root_query
	 * @since 0.0.5
	 */
	private static $root_query;

	/**
	 * Method that returns the root query field definition for the post object type
	 *
	 * @return array
	 * @since 0.0.5
	 */
	/*public static function root_query() {

		if ( null === self::$root_query ) {
			self::$root_query = [
				'type'        => new ActivityType(),
				'description' => __( 'Returns a Activity', 'wp-graphql' ),
				'args'        => [
					'id' => Types::non_null( Types::id() ),
				],
				'resolve'     => function( $source, array $args, AppContext $context, ResolveInfo $info ) {
					$id_components = Relay::fromGlobalId( $args['id'] );

					return DataSource::resolve_user( $id_components['id'] );
				},
			];
		}
		return self::$root_query;
	}*/
	public static function root_query() {

		if ( null === self::$root_query ) {
			self::$root_query = [
				'type'        => new ActivityType(),
				'description' => __( 'Returns a Activity', 'wp-graphql' ),				
				'resolve'     => function() {
                                        $wq = new \stdClass();
                                        $wq->count = 101;
                                        $wq->default = "I am waqar";
                                        $wq->url = "mysite";
					return $wq;
				},
			];
		}
		return self::$root_query;
	}

}