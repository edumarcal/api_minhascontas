<?php
//Agradeço a DEUS pelo dom do conhecimento

/**
*@apiGrupo Expense
*@apiRota PUT /api/expense
*@apiDescricao Cadastrar usuário
*@apiEntrada month Texto[100] Opcional -Mes da conta
*@apiEntrada date date Opcional -Data de vecimento da despesa
*@apiEntrada description Texto[100] Opcional -Descrição da despesa
*@apiEntrada value Real Opcional -Valor da despesa
*@apiEntrada status Binário Opcional -Situação da despesa [0 - Não paga | 1 - Paga]
*@apiSaidaErro  [ {"auth": false}, {"json":false}, {"dbErro": "validação do banco"}, {"status":false}, {"erros":["name","password"]} ]
*@apiSaidaSucesso { "status": true }
*/

(@include_once(ROOT_DIR."/connection/connection.php")) or die(JSON_CONNECTION);
(@include_once(ROOT_DIR."/validation/verify_token_session.php")) or die(JSON_VALIDATION);
(@include_once(ROOT_DIR."/persistence/expense/updateExpenseId.php")) or die(JSON_PERSISTENCE);
die(JSON_SUCESSO);