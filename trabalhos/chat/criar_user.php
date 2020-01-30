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
				function verificarDisponibilidadeLogin($user){
					$meuArquivo = fopen("senhas.txt","r");
					$dispo = TRUE;
					while (!feof($meuArquivo)){
						$linha = fgets($meuArquivo);
						if ($linha != "" ) {
							$linha = explode('|',$linha);
							if ($linha[0] == $user){
								$dispo = FALSE;
								break;
							}
						}
					}
					fclose($meuArquivo);
					return $dispo;
				}
				
				function adicionarLinha($user,$senha,$cor="black"){
					$meuArquivo = fopen("senhas.txt","a");
					date_default_timezone_set('America/Sao_Paulo');
					if ( $senha != "" && $user != "" ){
						if (verificarDisponibilidadeLogin($user)) {
							$user = str_replace("|","",$user);
							$novaLinha = "\n".$user."|".md5($senha)."|".$cor."|".date("d/m/y");
							$novaLinha = strip_tags($novaLinha);
							setcookie("usuario",$user,time()+60);
							setcookie("cor",$cor,time()+60);
							fwrite($meuArquivo,$novaLinha);
							echo "<div id='divCadastroSucesso'>";
								echo "<br><h4 id='hCadastroSucesso'>Cadastrado com sucesso !!! </h4>";
								echo '<h2><a id="aCliqueChat" href="chat.php">Clique aqui para acessar o CHAT </a></h2>';
							echo "</div>";
						} else {
							echo "<div id='divJaUso'>";
								echo "<br><h2 id='hUserJaCadastrado'>Usuario: ".$user." - Ja esta em uso !</h2>";
								echo "<a href='cad_user.html'><input type='button' name='botaoVoltar' id='botaoVoltar2' value='Voltar'></a>";
							echo "</div>";
						}
					}
					fclose($meuArquivo);
				}
						
				$senha = "";
				$senhac = "";
				$user = "";
				$cor = "";
				if (!empty($_POST)) {
					if ($_POST["pwd"] != null){
						$senha = $_POST["pwd"];
					}
					if ($_POST["pwdc"] != null){
						$senhac = $_POST["pwdc"];
					}
					if (($_POST["user"] != null)){
						$user = $_POST["user"];
					}
					if (($_POST["cor"] != null)){
						$cor = $_POST["cor"];
					}
					
					
				}
				if ($senha == $senhac) {
					adicionarLinha($user,$senha,$cor);		
				} else {
					echo "<div id='divSenhaDesiguais'>";
						echo "<h3 id='hSenhasDiferentes'>Senhas não conferem</h3>";
						echo "<a href='cad_user.html'><input type='button' name='botaoVoltar' id='botaoVoltar' value='Voltar'></a>";
					echo "</div>";
				}
			?>
		</section>
		<footer>
			<p><br>Programador de Computador Vespertino 2014 - SENAI &copy;</p>
		</footer>
	</body>
</html>