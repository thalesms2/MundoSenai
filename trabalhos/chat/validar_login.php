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
			<?php
		function validarLogin($user,$pwd){
			$meuArquivo = fopen("senhas.txt","r");
			$ok = false;
			while (!feof($meuArquivo)){
				$linha = fgets($meuArquivo);
				if ($linha != "" ) {
					$linha = explode('|',$linha);
					if ($linha[0] == $user){
						if ($linha[1] == md5($pwd)){
							$ok = true;
							setcookie("cor",$linha[2],time()+60);
							break;
						}
					}
				}
			}
			fclose($meuArquivo);
			return $ok;
		}
		$user = "";
		$pwd = "";
		if (!empty($_POST)) {
			if ($_POST["user"] != null){
				$user = $_POST["user"];
			}
			if (($_POST["pwd"] != null)){
				$pwd = $_POST["pwd"];
			}
		}
		if (validarLogin($user,$pwd)) {
			setcookie("usuario",$user,time()+60);
			header("Location: chat.php"); 
		} else {
			header("Location: login.php?msg=Usuario ou senha incorretos !");
		}
	?>
		</section>
		<footer>
			<p><br>Programador de Computador Vespertino 2014 - SENAI &copy;</p>
		</footer>
	</body>
</html>