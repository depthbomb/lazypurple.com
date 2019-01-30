<?php namespace App\Http\Controllers;

use GameQ\GameQ;
use Illuminate\Http\Request;

class AjaxController extends Controller
{
	public function __construct() {
		$this->servers = [
			[
				'type' => 'tf2',
				'host' => '192.223.26.238:27015'
			],
			[
				'type' => 'tf2',
				'host' => '192.223.26.238:27016'
			],
			[
				'type' => 'tf2',
				'host' => '192.223.26.238:27017'
			],
			[
				'type' => 'tf2',
				'host' => '192.223.26.238:27019'
			],
		];
	}

	public function servers() {
		$GameQ = new GameQ(); // or $GameQ = \GameQ\GameQ::factory();
		$GameQ->addServers($this->servers);
		$GameQ->setOption('timeout', 5); // seconds
		
		$results = $GameQ->process();
		
		if (request()->get('dd')) {
			return dd($results);
		} else {
			return view('deploy/ajax/servers', ['servers' => $results]);
		}
	}
}
