<html>
	<head>
		<title> Chat </title>
		<meta charset="UTF-8" http-equiv="refresh" content="5">
		<link rel="stylesheet" type="text/css" href="estilo2.css">
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
		<h2>Primeiro Chat! AI. Prog.</h2>
		<?php
			function lerArquivo(){
				$meuArquivo = fopen("dados.txt","r");
				//ler linha a linha
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
			lerArquivo();
			
			
		?>
	</body>
</html>