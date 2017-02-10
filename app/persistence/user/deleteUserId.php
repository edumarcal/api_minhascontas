<?php
//Agradeço a DEUS pelo dom do conhecimento
pg_query($banco, "DELETE FROM users WHERE id = '$url[3]'") or die('{"dbErro": "' . pg_last_error() . '"}');

//if(pg_affected_rows($banco) == 0)  die(JSON_FALHA);
pg_close($banco);