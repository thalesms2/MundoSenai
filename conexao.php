<?php

	$conexao = mysql_connect("127.0.0.1", "root", "xxx");

	if (!$conexao) die ("<h1>Falha na conexao com o Banco de Dados!</h1>");
	
	$db = mysql_select_db("mundosenai");

?>