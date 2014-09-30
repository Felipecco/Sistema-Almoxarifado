<?php
	//include com os dados para conectar com o mysql
$servidor='localhost';
$user = 'root';
$key='';
$base = mysql_connect($servidor, $user, $key);
$db=mysql_select_db('banco_de_dados', $base);
?>















