<?php
//Agradeço a DEUS pelo dom do conhecimento

/**
*@apiGrupo User
*@apiRota POST /api/login 
*@apiDescricao Login do usuário
*@apiEntrada name Texto Sim -Login de acesso do usuário
*@apiEntrada password Texto Sim -Senha de acesso do usuário
*@apiSaidaErro { "token": "" } ]
*@apiSaidaSucesso { "token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJNeUR1IiwidXNlcmVtYWlsIjoiVGVzdGUiLCJ2YWxpZCI6Im5vIn0=.V0aT\/r5Fjl2+yQaHAE17EcRWYBiE5I3IcO78EOtm7XA=" }
*/

(@include_once(ROOT_DIR."/connection/connection.php")) or die(JSON_CONNECTION);
(@include_once(ROOT_DIR."/persistence/user/session.php")) or die(JSON_PERSISTENCE);
die(json_encode($retorno, JSON_PRETTY_PRINT));