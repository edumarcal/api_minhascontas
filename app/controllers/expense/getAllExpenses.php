<?php
//Agradeço a DEUS pelo dom do conhecimento

/**
*@apiGrupo Expense
*@apiRota GET /api/expense
*@apiDescricao Lista todas as despesas
*@apiSaidaErro  [ {"auth": false}, {"json":false}, {"dbErro": "validação do banco"}, {"status":false}, {"erros":["name","password"]} ]
*@apiSaidaSucesso { "status": true }
*/

(@include_once(ROOT_DIR."/connection/connection.php")) or die(JSON_CONNECTION);
(@include_once(ROOT_DIR."/validation/verify_token_session.php")) or die(JSON_VALIDATION);
(@include_once(ROOT_DIR."/persistence/expense/getAllExpenses.php")) or die(JSON_PERSISTENCE);
die(json_encode($retorno, JSON_PRETTY_PRINT));