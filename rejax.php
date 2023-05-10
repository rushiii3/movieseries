<?php
define ('REJAX_APP_KEY', 'KEYWUittCSBkHjs9CudGZs9Zfw4qoYSvj1u');
define ('REJAX_APP_SECRET', 'SECRETsefj1BdITbVEpOESKsR8qRg9H6v5an5z');
define ('REJAX_API_URL', 'https://rejax.io:3001/api/server');

class Rejax
{
	public static function post($url, $params = "", array $options = [])
	{
		$defaults = array(
			CURLOPT_POST => 1,
			CURLOPT_HEADER => 0,
			CURLOPT_URL => $url,
			CURLOPT_FRESH_CONNECT => 1,
			CURLOPT_RETURNTRANSFER => 1,
			CURLOPT_FORBID_REUSE => 1,
			CURLOPT_TIMEOUT => 30,
			CURLOPT_POSTFIELDS => $params,
			CURLOPT_SSL_VERIFYHOST => 0,
			CURLOPT_SSL_VERIFYPEER => 0
		);

		$ch = curl_init();
		curl_setopt_array($ch, ($options + $defaults));
		if (!$result = curl_exec($ch)) {
			throw new ErrorException(curl_error($ch));
		}
		curl_close($ch);
		return $result;
	}

	public static function post_with_headers($url, $params = "", $headers = null)
	{
		$options = [];
		if ($headers) {
			$options = [CURLOPT_HTTPHEADER => $headers];
		}
		return self::post($url, $params, $options);
	}

	public static function send($channel, $text)
	{
		$response = self::post_with_headers(REJAX_API_URL, json_encode([
			'app_key' => REJAX_APP_KEY,
			'app_secret' => REJAX_APP_SECRET,
			'channel' => $channel,
			'text' => $text,
		], JSON_UNESCAPED_UNICODE), [
			'Content-Type: application/json'
		]);
		return $response;
	}
}

	Rejax::send('my-channel-name', 'hello from server!');

	Rejax::send('my-channel-name', 'byeeee');

?>