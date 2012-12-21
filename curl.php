<?php
if (!function_exists('curlget')) {
	function curlget($url, $method='get', $POSTFIELDS='', $headers=array()) {
		if (empty($url)) return false;
		$method = strtolower($method);
		$https = 0;
		if (substr($url, 0, 5) === 'https') {
			$https = 1;
		}

		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);  
		if (!empty($headers))
			curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);//array('HeaderName: HeaderValue')
		if ($method === 'post') {
			curl_setopt($ch, CURLOPT_POST, 1); 
			curl_setopt($ch, CURLOPT_POSTFIELDS, $POSTFIELDS);
		} else if ($method === 'delete') {
			curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");
		} else if ($method === 'put') {
			$data = $POSTFIELDS;

			$length = strlen($data);
			$fh = fopen('php://memory', 'rw');
			fwrite($fh, $data);
			rewind($fh);

			curl_setopt($ch, CURLOPT_PUT, TRUE);
			curl_setopt($ch, CURLOPT_INFILE, $fh);
			curl_setopt($ch, CURLOPT_INFILESIZE, $length);
		}

		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
		//curl_setopt($ch, CURLOPT_COOKIEFILE, COOKIE_FILE_PATH);
		//curl_setopt($ch, CURLOPT_COOKIEJAR,COOKIE_FILE_PATH);
		if (!empty($https)) {
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
			curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
		}
		curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/4.0 (compatible; MSIE 5.01; Windows NT 5.0)");
		$result = curl_exec($ch);
		curl_close($ch);
		return $result;
	}
}
?>