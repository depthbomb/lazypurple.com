<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
	public function index() {
		return view('deploy/index');
	}

	public function pageRules() {
		return view('deploy/serverinfo');
	}

	public function pageDonate() {
		return view('deploy/donate');
	}

	public function pageDonateSuccess() {
		return view('deploy/donatesuccess');
	}

	public function pageDonateFail() {
		return view('deploy/donatefail');
	}

	public function connectToServer($ip) {
		/**
		 * List of valid server IP addresses that the application will
		 * allow connection to from the interstitial page.
		 * We have this so people can't just use the IP address of any
		 * server with our website URL.
		 */
		$config = config('lazypurple.info.servers');

		if (array_key_exists($ip, $config)) {
			
			$data = [
				'name' => $config[$ip],
				'ip' => $ip,
				'connect_url' => 'steam://connect/' . $ip
			];

			return view('deploy/playgate', ['data' => $data]);
		} else {
			return redirect()->route('index');
		}
	}
}
