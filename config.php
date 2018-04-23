<?php

date_default_timezone_set('America/Chicago');

return [
	'baseUrl' => '',
	'production' => false,
	'collections' => [
		'blocks' => [
			'sort' => 'weight'
		],
		'shop' => [
			'sort' => 'weight'
		],
		'resources' => [
			'sort' => 'weight'
		],
		'artworks',
		'events' => [
			'sort' => 'sortOrder'
		],
	],
];
