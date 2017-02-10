<?php
//Agradeço a DEUS pelo dom do conhecimento
$command = pg_query($banco, "SELECT * FROM users WHERE id = '$url[3]'") or die('{"dbErro": "' . pg_last_error() . '"}');
pg_close($banco);

while($row = pg_fetch_array($command))
{
	$retorno['id'] = $row['id'];
	$retorno['name'] = $row['name'];
	$retorno['password'] = $row['password'];
	$retorno['token'] = $row['token'];
}
if (empty($retorno)) die("{}");