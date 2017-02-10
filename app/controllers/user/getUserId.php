<?php
//Agradeço a DEUS pelo dom do conhecimento

/**
*@apiGrupo User
*@apiRota GET /api/user/:id 
*@apiDescricao Retorna o usuário pelo id
*@apiSaidaErro  [ {"dbErro": "validação do banco"} , { "status": false } ]
*@apiSaidaSucesso { "status": true }
*/

(@include_once(ROOT_DIR."/connection.php")) or die(JSON_CONNECTION);
(@include_once(ROOT_DIR."/persistence/user/getUserId.php")) or die(JSON_PERSISTENCE);
die(json_encode($retorno, JSON_PRETTY_PRINT));