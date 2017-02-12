<?php
//Agradeço a Deus pelo dom do conhecimento
//$token = apache_request_headers()['Token'] or die(JSON_TOKEN);

die("Testando aqui");
$command = pg_query($banco, "SELECT name FROM users WHERE token = '$token'") or die('{"dbErro": "' . pg_last_error() . '"}');
$name = pg_fetch_array($command)[0];
if(empty($name)) die(JSON_TOKEN);