<?php
//Agradeço a DEUS pelo dom do conhecimento

/**
*@apiGrupo User
*@apiRota PUT /api/user
*@apiDescricao Cadastrar usuário
*@apiEntrada name Texto[100] Opcional -Login de acesso do usuário
*@apiEntrada password Texto[100] Opcional -Senha do usuário
*@apiSaidaErro  [ {"auth": false}, {"json":false}, {"dbErro": "validação do banco"}, {"status":false}, {"erros":["name","password"]} ]
*@apiSaidaSucesso { "status": true }
*/

(@include_once(ROOT_DIR."/connection/connection.php")) or die(JSON_CONNECTION);
(@include_once(ROOT_DIR."/validation/verify_token_session.php")) or die(JSON_VALIDATION);
(@include_once(ROOT_DIR."/persistence/user/updateUserId.php")) or die(JSON_PERSISTENCE);
die(JSON_SUCESSO);