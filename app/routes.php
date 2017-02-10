<?php
//Agradeço a DEUS pelo dom do conhecimento

DEFINE("ROOT_DIR", __DIR__);
DEFINE("ROTA_FALHA", '{"url":false}');
DEFINE("JSON_SUCESSO", '{"status": true}');
DEFINE("JSON_FALHA", '{"status": false}');
DEFINE("JSON_PERSISTENCE", '{"persistence":false}');
DEFINE("JSON_CONNECTION", '{"connection":false}');
DEFINE("JSON_TOKEN", '{"autorizacao": false}');
DEFINE("JSON_PARSER", '{"json": false}');
DEFINE("JSON_MALFORMADO", '{"padrao": false}');
DEFINE("JSON_VALIDATION", '{"validation":false}');

$url = explode("/", $_SERVER['REQUEST_URI']);

if ($_SERVER['REQUEST_METHOD'] == 'GET')
{
	switch ($_SERVER['REQUEST_URI']) {
		case '/api/user/'. filter_var(@$url[3],  FILTER_VALIDATE_INT):
			return include ROOT_DIR.'/controllers/user/getUserId.php';
		case '/api/expenses':
			return include ROOT_DIR.'/controllers/expense/getAllExpenses.php';	
		case '/api/expenses/'. filter_var(@$url[3],  FILTER_VALIDATE_INT):
			return include ROOT_DIR.'/controllers/expense/getExpenseId.php';
		case '/':
			die(header("Location: /doc"));
		default:
			die(ROTA_FALHA);
	}
}

if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
	switch ($_SERVER['REQUEST_URI']) {
		case '/api/login':
			return include ROOT_DIR.'/controllers/user/session.php';
		case '/api/user':
			return include ROOT_DIR.'/controllers/user/saveUser.php';	
		case '/api/expenses':
			return include ROOT_DIR.'/controllers/expense/saveExpense.php';	
		default:
			die(ROTA_FALHA);
	}
}

if ($_SERVER['REQUEST_METHOD'] == 'PUT')
{
	switch ($_SERVER['REQUEST_URI']) {
		case '/api/user/'. filter_var(@$url[3],  FILTER_VALIDATE_INT):
			return include ROOT_DIR.'/controllers/user/updateUserId.php';	
		case '/api/expenses/'. filter_var(@$url[3],  FILTER_VALIDATE_INT):
			return include ROOT_DIR.'/controllers/expense/updateExpenseId.php';	
		default:
			die(ROTA_FALHA);
	}
}

if ($_SERVER['REQUEST_METHOD'] == 'DELETE')
{
	switch ($_SERVER['REQUEST_URI']) {
		case '/api/user/'. filter_var(@$url[3],  FILTER_VALIDATE_INT):
			return include ROOT_DIR.'/controllers/user/deleteUserId.php';	
		case '/api/expenses/'. filter_var(@$url[3],  FILTER_VALIDATE_INT):
			return include ROOT_DIR.'/controllers/expense/deleteExpenseId.php';	
		default:
			die(ROTA_FALHA);
	}
}