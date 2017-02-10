<?php
//Agradeço a DEUS pelo dom do conhecimento
$objeto = json_decode(file_get_contents("php://input")) or die(JSON_PARSER);
$objeto->name or die(JSON_MALFORMADO);
$objeto->password or die(JSON_MALFORMADO);

$objeto->password = hash('md5', $objeto->password."MyDu");

$command = pg_query($banco, "SELECT id FROM users WHERE name = '$objeto->name' AND password = '$objeto->password'") or die('{"dbErro": "' . pg_last_error() . '"}');

$id = pg_fetch_array($command)['id'];
if(empty($id))  die('{"token": ""}');

$token = generateTokenSession();
pg_query($banco, "UPDATE users SET token = '".$token."' WHERE id = '$id'") or die('{"dbErro": "' . pg_last_error() . '"}');
pg_close($banco);

$retorno['token'] = $token;