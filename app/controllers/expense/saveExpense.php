<?php
//Agradeço a DEUS pelo dom do conhecimento

/**
*@apiGrupo Expense
*@apiRota POST /api/expense
*@apiDescricao Cadastrar usuário
*@apiEntrada month Texto[100] Sim -Mes da conta
*@apiEntrada date date Sim -Data de vecimento da despesa
*@apiEntrada description Texto[100] Sim -Descrição da despesa
*@apiEntrada value Real Sim -Valor da despesa
*@apiEntrada status Binário Sim -Situação da despesa [0 - Não paga | 1 - Paga]
*@apiSaidaErro  [ {"auth": false}, {"json":false}, {"dbErro": "validação do banco"}, {"status":false}, {"erros":["name","password"]} ]
*@apiSaidaSucesso { "status": true }
*/

(@include_once(ROOT_DIR."/connection.php")) or die(JSON_CONNECTION);
(@include_once(ROOT_DIR."/persistence/expense/saveExpense.php")) or die(JSON_PERSITENCE);
die(JSON_SUCESSO);