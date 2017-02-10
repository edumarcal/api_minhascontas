<?php
//Agradeço a DEUS pelo dom do conhecimento

/**
*@apiGrupo User
*@apiRota POST /api/user
*@apiDescricao Cadastrar usuário
*@apiEntrada name Texto[100] Sim -Login de acesso do usuário
*@apiEntrada password Texto[100] Sim -Senha do usuário
*@apiSaidaErro  [ {"auth": false}, {"json":false}, {"dbErro": "validação do banco"}, {"status":false}, {"erros":["name","password"]} ]
*@apiSaidaSucesso { "status": true }
*/

(@include_once(ROOT_DIR."/connection.php")) or die(JSON_CONNECTION);
(@include_once(ROOT_DIR."/generate_token_session.php")) or die(JSON_CONNECTION);
(@include_once(ROOT_DIR."/persistence/user/saveUser.php")) or die(JSON_PERSITENCE);
die(JSON_SUCESSO);