<?php

	$c = curl_init();

	curl_setopt($c, CURLOPT_URL, $hook_url);
	curl_setopt($c, CURLOPT_CUSTOMREQUEST, 'POST');
	curl_setopt($c, CURLOPT_HTTPHEADER, array('Content-Type: application/x-www-form-urlencoded'));
	curl_setopt($c, CURLOPT_RETURNTRANSFER, true);

	curl_setopt($c, CURLOPT_POST, TRUE);
	curl_setopt($c, CURLOPT_POSTFIELDS, http_build_query($data));

	$resp = curl_exec($c);
