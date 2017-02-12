<?php
//Agradeço a DEUS pelo dom do conhecimento

//Local
//$banco = pg_connect('host=localhost dbname=minhascontas user=postgres password=p@ssw0rd') or die('{"dbErro" : "' . pg_last_error() .'"}');

// Server
$banco = pg_connect("host=ec2-107-20-191-76.compute-1.amazonaws.com dbname=d7nrjq7ji2u8eq user=npabgykjjwkjpq password=222640022d082c2becfc6ca38463bfae1e15cde5022daa95dcb33f2cafab659e") or die('{"dbErro" : "' . pg_last_error() .'"}');