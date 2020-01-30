<html>
	<head>
		<title>Trabalho</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="estilo/estilo_recibo.css" type="text/css">
	</head>
	<body>
		<?php
			include('header.php');
		?>
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