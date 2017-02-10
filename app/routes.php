<?php
//Agradeço a DEUS pelo dom do conhecimento

DEFINE("ROOT_DIR", __DIR__);
DEFINE("ROTA_FALHA", '{"url":false}');
DEFINE("JSON_SUCESSO", '{"status": true}');
DEFINE("JSON_FALHA", '{"status": false}');
DEFINE("JSON_PERSISTENCE", '{"persistence":false}');
DEFINE("JSON_CONNECTION", '{"connection":false}');
DEFINE("JSON_TOKEN", '{"autorizacao": false}');

$url = explode("/", $SERVER['REQUEST_URI']);

if ($SERVER['REQUEST_METHOD'] == 'GET')
{
	switch ($SERVER['REQUEST_URI']) {
		case '/user/'. filter_var(@$url[3],  FILTER_VALIDATE_INT):
			return include ROOT_DIR.'/controllers/user/getUserId.php';
		case '/expenses':
			return include ROOT_DIR.'/controllers/expense/getAllExpenses.php';	
		case '/expenses/'. filter_var(@$url[3],  FILTER_VALIDATE_INT):
			return include ROOT_DIR.'/controllers/expense/getExpenseId.php';
		case '/doc':
			die(header("Location: /doc"));
		default:
			die(ROTA_FALHA);
	}
}

if ($SERVER['REQUEST_METHOD'] == 'POST')
{
	switch ($SERVER['REQUEST_URI']) {
		case '/user':
			return include ROOT_DIR.'/controllers/user/saveUser.php';	
		case '/expenses':
			return include ROOT_DIR.'/controllers/expense/saveExpense.php';	
		default:
			die(ROTA_FALHA);
	}
}

if ($SERVER['REQUEST_METHOD'] == 'PUT')
{
	switch ($SERVER['REQUEST_URI']) {
		case '/user/'. filter_var(@$url[3],  FILTER_VALIDATE_INT):
			return include ROOT_DIR.'/controllers/user/updateUserId.php';	
		case '/expenses/'. filter_var(@$url[3],  FILTER_VALIDATE_INT):
			return include ROOT_DIR.'/controllers/expense/updateExpenseId.php';	
		default:
			die(ROTA_FALHA);
	}
}

if ($SERVER['REQUEST_METHOD'] == 'DELETE')
{
	switch ($SERVER['REQUEST_URI']) {
		case '/user/'. filter_var(@$url[3],  FILTER_VALIDATE_INT):
			return include ROOT_DIR.'/controllers/user/deleteUserId.php';	
		case '/expenses/'. filter_var(@$url[3],  FILTER_VALIDATE_INT):
			return include ROOT_DIR.'/controllers/expense/deleteExpenseId.php';	
		default:
			die(ROTA_FALHA);
	}
}