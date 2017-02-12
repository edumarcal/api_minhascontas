<?php
//Agradeço a DEUS pelo dom do conhecimento

$retorno;

$command = pg_query($banco, "SELECT * FROM expenses") or die('{"dbErro": "' . pg_last_error() . '"}');
pg_close($banco);
while($row = pg_fetch_array($command))
{
	$retorno['id'] = $row['id'];
	$retorno['month'] = $row['month'];
	$retorno['maturity'] = $row['maturity'];
	$retorno['description'] = $row['description'];
	$retorno['value'] = $row['value'];
	$retorno['situation'] = $row['situation'];
}
if (empty($retorno)) die("{}");