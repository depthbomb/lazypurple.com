<?php

function u(string $path = '') : string {
	return sprintf(
		'%s://%s%s%s',
		isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http',
		$_SERVER['SERVER_NAME'],
		isset($_SERVER['SERVER_PORT']) && $_SERVER['SERVER_PORT'] == 8000 ? ":{$_SERVER['SERVER_PORT']}" : '',
		$path
	);
}


function latest_commit() {
	if (cache()->has('commits')) {
		$commits = cache()->get('commits');
	} else {
		$api_url = "https://api.github.com/repos/depthbomb/lazypurple.com/commits";
		$curl = curl_init();
		curl_setopt_array($curl, [
			CURLOPT_RETURNTRANSFER => 1,
			CURLOPT_URL => $api_url,
			CURLOPT_USERAGENT => 'LazyPurple.com'
		]);
		$resp = curl_exec($curl);
		curl_close($curl);
		$commits = json_decode($resp, 1);
		cache()->put('commits', $commits, now()->addDays(1));
	}

	return $commits[0]['sha'];
}


/**
 * Generates a GUID
 *
 * @param integer $salt				Optional numeric salt
 * @param boolean $braces			Wrap output in curly braces
 * @param boolean $uppercase		Returns the string in all uppercase
 * @param boolean $classFriendly	Makes the GUID usable in HTML classes or IDs
 */
function guid(int $salt = null, bool $braces = false, bool $uppercase = false, bool $classFriendly = false) : string {
	srand(is_int($salt) ? $salt : (double) microtime() * 10000 + rand());
	$left_brace = chr(123);
	$right_brace = chr(125);
	$uuid = sprintf(
		'%04x%04x-%04x-%04x-%04x-%04x%04x%04x',
		// 32 bits for "time_low"
		rand(0, 0xffff),
		rand(0, 0xffff),
		// 16 bits for "time_mid"
		rand(0, 0xffff),
		// 16 bits for "time_hi_and_version",
		// four most significant bits holds version number 4
		rand(0, 0x0fff) | 0x4000,
		// 16 bits, 8 bits for "clk_seq_hi_res",
		// 8 bits for "clk_seq_low",
		// two most significant bits holds zero and one for variant DCE1.1
		rand(0, 0x3fff) | 0x8000,
		// 48 bits for "node"
		rand(0, 0xffff),
		rand(0, 0xffff),
		rand(0, 0xffff)
	);

	if ($uppercase) {
		$uuid = strtoupper($uuid);
	}
	
	if ($braces) {
		$uuid = $left_brace . $uuid . $right_brace;
	}

	srand();	//	Reset the seeding

	return $uuid;
}


/**
* Bust
*
* Creates a formatted URL to the provided path and appends a cachebuster string to the end
* @param string $url URL/Path to file
* @return string
*/
function bust(string $path) : string {
	$seed = filemtime(public_path($path)) + filesize(public_path($path));
	$hash = guid($seed);
	return u("{$path}?v={$hash}");
}

/**
* Asset revision helper
* @param  string $p			Absolute path to file relative to /public/  (include beginning slash)
* @return string
*/
function rev(string $p, bool $pathOnly = false) : string {
	$config = config('lazypurple.assets.files');
	if (array_key_exists($p, $config)) {
		$revisioned = $config[$p];
		if ($pathOnly) {
			return $revisioned;
		} else {
			return u($revisioned);
		}
	} else {
		return u($p . '?KEY_NOT_FOUND');
	}
}

/**
 * Obfuscate email addresses
 *
 * @param string $email
 * @return \Illuminate\Support\HtmlString
 */
function obfEmail(string $email) {
	$alwaysEncode = ['.', ':', '@'];
	$result = '';

	// Encode string using oct and hex character codes
	for ($i = 0; $i < strlen($email); $i++) {
		// Encode 36% of characters including several that always should be encoded
		if (in_array($email[$i], $alwaysEncode) || mt_rand(1, 100) < 36) {
			if (mt_rand(0, 1)) {
				$result .= '&#' . ord($email[$i]) . ';';
			} else {
				$result .= '&#x' . dechex(ord($email[$i])) . ';';
			}
		} else {
			$result .= $email[$i];
		}
	}

	return new \Illuminate\Support\HtmlString($result);
}


function weighted(array $weightedValues)
{
	$rand = mt_rand(1, (int) array_sum($weightedValues));

	foreach ($weightedValues as $key => $value) {
		$rand -= $value;
		if ($rand <= 0) {
			return $key;
		}
	}
}