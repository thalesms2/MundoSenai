<html>
	<head>
		<title>Trabalho</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="estilo_recibo.css" type="text/css">
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
			<br>
			<div class="descricao">
				Este trabalho tem o intuito de criar recibos com as informações inseridas nestes campos
			</div>
			<br>
			<h3>INSIRA OS CAMPOS ABAIXO PARA GERAR SEU RECIBO</h3>
			<form method="POST" action="recibo_vis.php" />
			<label>Nº</label><input type="text" name="n" />
			<br>
			<br>
			<label>Valor</label><input type="text" name="valor" />
			<br>
			<br>
			<label>Recebi de</label><input type="text" name="receb" />
			<br>
			<br>
			<label>Correspondente</label><input type="text" name="corresp" />
			<br>
			<br>
			<label>Nome</label><input type="text" name="nome" />
			<br>
			<br>
			<label>CPF/RG</label><input type="text" name="cpf" />
			<br>
			<br>
			<label>Endereço</label><input type="text" name="end" />
			<br>
			<br>
			<input type="submit" value="Gerar" id="botao" name="botao" />
			</form>
			<br>
			<div class="objetivo">
				<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Este site tem por objetivo mostrar o que a nossa turma produziu ao longo do ano.</p>
			</div>
		</section>
		<footer>
			<p><br>Programador de Computador Vespertino 2014 - SENAI &copy;</p>
		</footer>
	</body>
</html>