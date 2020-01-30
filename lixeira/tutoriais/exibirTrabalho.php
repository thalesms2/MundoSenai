<html>
	<head>
		<title>Trabalho</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="estilo.css" type="text/css">
	</head>
	<body>
		<header>
			<h1>Programador de Computador</h1>
			<div id="menu">
					<a>Javascript</a>
					<a>PHP</a>
					<a>Desenho e Animação</a>
			</div>
		</header>
		<section>
		
		<!-- tabela aqui -->
		
		<?php
			$endereco = "";
			if (!empty($_GET["link"])){
				$endereco = $_GET["link"];
				echo '<iframe src="//'.$endereco.'width="500" height="450" frameborder="0" marginwidth="0" marginheight="0" scrolling="no" style="border:0px solid #CCC; border-width:1px; margin-bottom:5px; max-width: 100%;" allowfullscreen> </iframe>';
			}
			
		?>
			
		</section>
		<footer>
			<p>Programador de Computador Vespertino 2014 &copy;</p>
		</footer>
	</body>
</html>


