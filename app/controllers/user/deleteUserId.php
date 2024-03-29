<?php
//Agradeço a DEUS pelo dom do conhecimento

/**
*@apiGrupo User
*@apiRota DELETE /api/user/:id/delete
*@apiDescricao Deleta um usuário cadastrado na base de dados (
*@apiSaidaErro  [ {"persistence":false} , {"validation": false}, {"autorizacao": false}, {"dbErro": "validação do banco"}, {"status":false} ]
*@apiSaidaSucesso {"status":true}
*/
(@include_once(ROOT_DIR."/connection/connection.php")) or die(JSON_CONNECTION);
(@include_once(ROOT_DIR."/validation/verify_token_session.php")) or die(JSON_VALIDATION);
(@include_once(ROOT_DIR."/persistence/user/deleteUserId.php")) or die(JSON_PERSISTENCE);
die(JSON_SUCESSO);