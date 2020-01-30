<html>
	<head>
		<title>Trabalho</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="estilo2.css" type="text/css">
		<link rel="stylesheet" href="../../estilo.css" type="text/css">
		<script>
			function emot(texto) {
			  msg = document.getElementById("msg").value;
			  document.getElementById("msg").value = msg + texto;
			}
			function scrollFinal(){
				var e = document.getElementById('mensagens2');
				e.scrollTop = e.scrollHeight;
				document.getElementById('msg').focus();
			}
		</script>
	</head>
	<body onload="scrollFinal()">
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
		<section id="sectionChat">
			<h2 id="hTituloChat">Primeiro Chat - Aprendizagem industrial programação</h2>
		<?php
			function lerArquivo(){
				$meuArquivo = fopen("dados.txt","r");
				
				while (!feof($meuArquivo)){
					$linha = fgets($meuArquivo);
					$dados = explode('|',$linha);
					$msg = str_replace('[:c]','<img src="c.png">',$dados[3]);
					$msg = str_replace('[:cp]','<img src="cp.png">',$msg);
					$msg = str_replace('[:dl]','<img src="dl.png">',$msg);
					$msg = str_replace('[:e]','<img src="e.png">',$msg);
					$msg = str_replace('[:l]','<img src="l.png">',$msg);
					$msg = str_replace('[:p]','<img src="p.png">',$msg);
					$msg = str_replace('[:r]','<img src="r.png">',$msg);
					$msg = str_replace('[:ri]','<img src="ri.png">',$msg);
					$msg = str_replace('[:s]','<img src="s.png">',$msg);
					$msg = str_replace('[:t]','<img src="t.png">',$msg);				
					echo '<p style="color:'.$dados[5].'">'.$dados[1].' - '.$dados[2]." - ".$msg."</p>";
				}
				fclose($meuArquivo);
			}
			
			function adicionarLinha($msg,$usuario,$cor){
				$meuArquivo = fopen("dados.txt","a");
				$ip = getenv("REMOTE_ADDR");
				date_default_timezone_set('America/Sao_Paulo');
				
				if ($msg != "" && $usuario != ""){
					$usuario = str_replace("|","",$usuario);
					$msg = str_replace("|","",$msg);
					$msg = str_replace("<","",$msg);
					$msg = str_replace(">","",$msg);
					$novaLinha = "\n".date("d/m/y")."|".date("H:i:s")."|".$usuario."|".$msg."|".$ip."|".$cor;
					$novaLinha = strip_tags($novaLinha);			
					fwrite($meuArquivo,$novaLinha);
					
				}
				
				fclose($meuArquivo);
			}
			$msg = "";
			$user = "";
			$cor = "black";
			if (IsSet($_COOKIE["usuario"])){
				$user = $_COOKIE["usuario"];
				if (IsSet($_COOKIE["cor"])){
					$cor = $_COOKIE["cor"]; 
				}
			} else {
				header("Location: login.php");
			}
			if (!empty($_POST)) {
				if ($_POST["msg"] != null){
					$msg = $_POST["msg"];
				}
				if (($_POST["nome"] != null)){
					$user = $_POST["nome"];
				}
			}
			setcookie("usuario",$user,time()+120);
			setcookie("cor",$cor,time()+120);
			adicionarLinha($msg,$user,$cor);
			echo '<div id="mensagens">';
				
				echo '<div id="mensagens2">';
					//lerArquivo();
					echo '<iframe id="frame" src="lerMsg.php" width="95%" height="98%" scrolling="auto"></iframe>';
				echo '</div>';
			
				$a = "'";
				echo "<h4 id='hEmoticons'>Emoticons</h4>";
				echo '<img src="c.png" onclick="emot('.$a.'[:c]'.$a.')">';
				echo '<img src="cp.png" onclick="emot('.$a.'[:cp]'.$a.')">';
				echo '<img src="dl.png" onclick="emot('.$a.'[:dl]'.$a.')">';
				echo '<img src="e.png" onclick="emot('.$a.'[:e]'.$a.')">';
				echo '<img src="l.png" onclick="emot('.$a.'[:l]'.$a.')">';
				echo '<img src="p.png" onclick="emot('.$a.'[:p]'.$a.')">';
				echo '<img src="r.png" onclick="emot('.$a.'[:r]'.$a.')">';
				echo '<img src="ri.png" onclick="emot('.$a.'[:ri]'.$a.')">';
				echo '<img src="s.png" onclick="emot('.$a.'[:s]'.$a.')">';
				echo '<img src="t.png" onclick="emot('.$a.'[:t]'.$a.')">';
				echo '<form action="chat.php" method="POST">';
				
				echo "<div id='divNomeChat'>";
					if ($user != ""){
						echo '<label class="labelNomeChat">	Nome:'.$user.' </label><input type="hidden" name="nome" value="'.$user.'">';		
					} else {
						echo '<label class="labelNomeChat">	Nome: </label><input type="text" name="nome">';
					}
				echo "</div>";
				echo ' MSG: <input type="text" id="msg" name="msg" maxlength="140" placeholder="Digite sua msg aqui">';
				echo '<br><br>	<input id="botaoChat" class="botao" type="submit" value="Enviar">';
				echo '</form>';		
			echo '</div>';

		?>
		</section>
		<footer>
			<p><br>Programador de Computador Vespertino 2014 - SENAI &copy;</p>
		</footer>
	</body>
</html>