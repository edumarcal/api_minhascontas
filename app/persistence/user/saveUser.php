<?php
//Agradeço a DEUS pelo dom do conhecimento
$objeto = json_decode(file_get_contents("php://input")) or die(JSON_PARSER);
$keys = array('name', 'password');

foreach ($objeto as $key => $value)
   in_array($key, $keys) ?: die(JSON_MALFORMADO);

$returnError = array();
preg_match('/^[a-zA-Zá-üÁ-Ü0-9- ]+$/', $objeto->name) or array_push($returnError, 'name');
if (strlen($objeto->password) < 6) array_push($returnError, 'password');
if (!empty($returnError)) die(json_encode(array('erros' => $returnError)));

$objeto->password = hash('md5', $objeto->password."MyDu");

$command = pg_query($banco, "INSERT INTO users(name, password, token) values ('$objeto->name', '$objeto->password', '$token')") or die('{"dbErro": "' . pg_last_error() . '"}');
pg_close($banco);