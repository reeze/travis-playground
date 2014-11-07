<?php

$post = array(
	'a' => array(1),
		'b' => 333
		);


		$curl = curl_init();

		curl_setopt($curl, CURLOPT_URL, 'http://www.baidu.com');
		curl_setopt($curl, CURLOPT_POST, true);
		curl_setopt($curl, CURLOPT_POSTFIELDS, $post);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);


		$output = curl_exec($curl);
		$code = curl_getinfo($curl, CURLINFO_HTTP_CODE);

		var_dump($output, $code ,$post);

