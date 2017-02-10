<?php

$banco = @mysqli_connect('localhost', 'root', '1234') or die('{"dbConnection" : "' . mysqli_connect_error() .'"}');
mysqli_set_charset($banco,"utf8");
mysqli_select_db($banco, 'db_findies' ) or  die (JSON_DATABASE($banco));