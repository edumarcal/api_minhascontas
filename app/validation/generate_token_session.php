<?php
//Agradeço a DEUS pelo dom do conhecimento

function generateTokenSession($name)
{
	//generate token
	$key='ch@v3-3ncr1pt@d@_MyDu'.rand();
	$key=base64_encode($key);

	$header=[
	'typ'=>'JWT',
	'alg'=>'HS256'
	];

	$header=json_encode($header);
	$header=base64_encode($header);

	$payload=[
	'iss'=>'MyDu',
	'useremail'=>$name,
	'valid'=>'no'
	];

	$payload=json_encode($payload);
	$payload=base64_encode($payload);

	$signature=hash_hmac('sha256', "$header.$payload", $key,true);

	$signature=base64_encode($signature);

	$token="$header.$payload.$signature";
	return $token;
}