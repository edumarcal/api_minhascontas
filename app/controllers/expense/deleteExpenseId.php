<?php
//Agradeço a DEUS pelo dom do conhecimento

/**
*@apiGrupo Expense
*@apiRota DELETE /api/expense/:id/delete
*@apiDescricao Deleta uma despesa
*@apiSaidaErro  [ {"persistence":false} , {"validation": false}, {"autorizacao": false}, {"dbErro": "validação do banco"}, {"status":false} ]
*@apiSaidaSucesso {"status":true}
*/
(@include_once(ROOT_DIR."/connection/connection.php")) or die(JSON_CONNECTION);
(@include_once(ROOT_DIR."/validation/verify_token_session.php")) or die(JSON_VALIDATION);
(@include_once(ROOT_DIR."/persistence/expense/deleteExpenseId.php")) or die(JSON_PERSISTENCE);
die(JSON_SUCESSO);