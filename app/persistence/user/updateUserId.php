<?php
//Agradeço a DEUS pelo dom do conhecimento
$objeto = json_decode(file_get_contents("php://input")) or die(JSON_PARSER);
$keys = array('name', 'password');

foreach ($objeto as $key => $value)
   in_array($key, $keys) ?: die(JSON_MALFORMADO);

$returnError = array();
empty($objeto->name) ?: preg_match('/^[a-zA-Zá-üÁ-Ü0-9- ]+$/', $objeto->name) or array_push($returnError, 'name');
empty($objeto->password) or (strlen($objeto->password) > 6) ?: preg_match('/^[a-zA-Zá-üÁ-Ü0-9- ]+$/', $objeto->password) or array_push($returnError, 'password');
if (!empty($returnError)) die(json_encode(array('erros' => $returnError)));

if (!empty($objeto->password))
{
	$objeto->password = hash('md5', $objeto->password."MyDu");
}
$sql = "UPDATE users SET ";
foreach ($objeto as $key => $value)
	$sql.=("$key = '$value', ");

$sql = substr($sql, 0, -2);
$sql.= " WHERE id = '$url[3]'";

echo $sql;

pg_query($banco, $sql) or die('{"dbErro": "' . pg_last_error() . '"}');
if(pg_affected_rows($banco) == 0)  die(JSON_FALHA);
pg_close($banco);