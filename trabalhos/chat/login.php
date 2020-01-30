<html>
	<head>
		<title>Trabalho</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="estilo2.css" type="text/css">
	</head>
	<body>
		<header>
			<h1>Programador de Computador</h1>
			<br>
			<nav>
				<ul class="menu">
					<li><a href="../../inicial.html">Início</a></li>
					<li><a href="../../js.html">Javascript</a>
						<ul>
							<li><a href="../../trabalhos/alerta/alerta.html">Alerta</a></li>
							<li><a href="../../trabalhos/data_e_hora/data_e_hora.html">Data e Hora</a></li>
							<li><a href="../../trabalhos/bhaskara_pitagoras/bhaskara_pitagoras.html">Bháskara e Pitágoras</a></li>
							<li><a href="../../trabalhos/sorteio/sorteio.html">Sorteio</a></li>
							<li><a href="../../trabalhos/cronometro/cronometro.html">Cronômetro</a></li>
							<li><a href="../../trabalhos/jogo/jogo.html">Jogo da Moeda</a></li>
						</ul>
					</li>
					<li><a href="../../php.php">PHP</a>
						<ul>
							<li><a href="../../trabalhos/chat/chat.php">Chat</a></li>
							<li><a href="../../trabalhos/recibo/recibo.php">Recibo</a></li>
						</ul>
					</li>
					<li><a href="../../da.html">Desenho e Animação</a>
						<ul>
							<li><a href="../../trabalhos/tutoriais/tutoriais.php">Tutoriais GIMP</a></li>
						</ul>
					</li>
				<ul>
			</nav>
		</header>
		<section>
			<h2 id="hTituloLoginGrande">Primeiro Chat - Aprendizagem industrial programação</h2>
			<div id="divLoginTudo">
				<h2 id="hTituloLogin">Login</h2>
				<form action="validar_login.php" method="POST">
					<label>User: </label><input id="inputUser" type="text" name="user" required="required"><br>
					<label>Senha: </label><input id="inputSenha" type="password" name="pwd" required="required"><br>
					<br><input type="submit" id="botaoLogin" value="Login">
				</form>
				<h4><a id="aCadastro" href="cad_user.html">Clique aqui para se cadastrar</a></h4>
			</div>
		<?php
			$msg = "";
			if (!empty($_GET)) {
				if ($_GET["msg"] != null){
					$msg = $_GET["msg"];
				}
			}
			echo "<h3 id='pN'>$msg</h3>";
		?>
		</section>
		<footer>
			<p><br>Programador de Computador Vespertino 2014 - SENAI &copy;</p>
		</footer>
	</body>
</html>