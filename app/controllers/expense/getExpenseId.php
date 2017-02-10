<?php
//Agradeço a DEUS pelo dom do conhecimento

/**
*@apiGrupo Expense
*@apiRota GET /api/expense/:id
*@apiDescricao Capturar despesa pelo id
*@apiSaidaErro  [ {"auth": false}, {"json":false}, {"dbErro": "validação do banco"}, {"status":false}, {"erros":["name","password"]} ]
*@apiSaidaSucesso { "status": true }
*/

(@include_once(ROOT_DIR."/connection.php")) or die(JSON_CONNECTION);
(@include_once(ROOT_DIR."/persistence/expense/getExpenseId.php")) or die(JSON_PERSITENCE);
die(JSON_SUCESSO);