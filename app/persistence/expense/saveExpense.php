<?php
//Agradeço a DEUS pelo dom do conhecimento
$objeto = json_decode(file_get_contents("php://input")) or die(JSON_PARSER);
$keys = array('month', 'maturity','description','value','situation');

foreach ($objeto as $key => $value)
   in_array($key, $keys) ?: die(JSON_MALFORMADO);

$returnError = array();
preg_match('/^[a-zA-Z]+$/', $objeto->month) or array_push($returnError, 'month');

$maturityCount = 0;
empty($objeto->maturity) ?: preg_match('/(\d{4})-(\d{2})-(\d{2})/', $objeto->maturity) or $maturity++;
$data = explode('-', $objeto->maturity);
checkdate($data[1],$data[2], $data[0]) or $maturityCount++;
if ($maturity > 0) array_push($retornoErro, 'maturity');

preg_match('/^[a-zA-Z]+$/', $objeto->description) or array_push($returnError, 'description');
preg_match('/^-?(?:\d+|\d*\.\d+)$/', $objeto->value) or array_push($returnError, 'value');

preg_match('/((true)|(false))+$/', $objeto->situation) or array_push($retornoErro, 'situation');
if (!empty($returnError)) die(json_encode(array('erros' => $returnError)));


$command = pg_query($banco, "INSERT INTO expenses(month, maturity, description, value, situation) values ('$objeto->month', '$objeto->maturity', '$objeto->description', '$objeto->value', '$objeto->situation')") or die('{"dbErro": "' . pg_last_error() . '"}');
pg_close($banco);