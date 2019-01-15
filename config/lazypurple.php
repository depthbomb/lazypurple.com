<?php

/**
 *  !IMPORTANT
 *  If you have command line access and have optimized the application (via `npm run optimize`) then you 
 *  need to run it again after changing the values in this config or any other config file.
 *  However, if you have not ran that command at all then you can freely change these values.
 */

return [
	'info' => [
		/**
		* Site name as it would appear in various meta tags.
		* Also displays in the browser tab as [page title] - [name]
		*/
		'name' => 'LazyPurple.com',
		/**
		 * Site description as it would appear in various meta tags.
		 */
		'description' => 'LazyPurple.com',
		/**
		 * List of GAME server IP addresses and their server names.
		 * If the name of a server has a ' in it, make sure to add a \ in front of it, like \'
		 */
		'servers' => [
			'192.223.26.238:27015' => 'LazyPurple\'s Silly Server #1',
			'192.223.26.238:27016' => 'LazyPurple\'s Silly Server #2',
			'192.223.26.238:27017' => 'The Lazy Pub',
			'192.223.26.238:27019' => 'LazyPurple\'s Special Gamemode Server'
		]
	],

	/**
	 * !DO NOT TOUCH 
	 * This stores the manifest for built static files. Modifying this could result in missing CSS, JS, and image
	 * files.
	 */
	'assets' => json_decode(file_get_contents(base_path('assets.json')), true),
];