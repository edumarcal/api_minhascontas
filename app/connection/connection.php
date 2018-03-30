<?php
//Agradeço a DEUS pelo dom do conhecimento

//Local
$banco = pg_connect('host=localhost dbname=minhascontas user=postgres password=p@ssw0rd') or die('{"dbErro" : "' . pg_last_error() .'"}');