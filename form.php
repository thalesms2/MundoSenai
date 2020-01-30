<html>
	<head>
		<title>Trabalho</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="estilo.css" type="text/css">
	</head>
	<style>
		form{
			text-align:center;
		}
	</style>
	<body>
	<?php
		/*include("header.php");*/
	?>
		<section>
			<br>
			<h2>Cadastre-se no site: </h2>
			<br>
			<form action="cadastrarvisitante.php" method="POST">
				Nome: <input type="text" name="nome" required="required"><br>
				Apelido: <input type="text" name="apelido" required="required" ><br>
				Senha: <input type="text" name="senha" required="required" ><br>
				Confirmar senha: <input type="text" name="confSenha" required="required"><br>
				
				Escola <select name="escola">
							<option value="Santa terezinha">Santa terezinha</option>
							<option value="Feliciano pires">Feliciano pires</option>
						</select>
						Outro <input type="text" name="outroEscola"><br>
				Bairro <select name="bairro">
							<option value="Santa rita">Santa rita</option>
							<option value="Centro">Centro</option>
						</select> Outro <input type="text" name="outroBairro"><br>
				<input type="submit" value="Cadastrar">
			</form>		
		</section>
		<footer>
			<p><br>Programador de Computador Vespertino 2014 - SENAI &copy;</p>
		</footer>
	</body>
</html>