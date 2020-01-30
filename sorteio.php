<html>
	<head>
		<title>Trabalho</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="estilo.css" type="text/css">
		<script>
		
		function aleatorio(){
			min = document.getElementById("sort").value;
			max = document.getElementById("sort2").value;
			quantidade = document.getElementById("quant").value;
			saida = "";
			numerosSorteados = [];
			if (((max-min)<quantidade)) {
				alert("Não foi possivel gerar o sorteio, quantidade maior que a disponibilidade");
				saida = "verifique os dados";
			} else {
				cont = 0;
				mins = false;
				maxs = false;
				
				while (cont < quantidade) {
					var nro = (Math.floor(Math.random() * (parseInt(max)+1)));
					var achou = false;
					if (!(nro < min)){
						if (numerosSorteados.length > 0){
							for (var c=0; c < numerosSorteados.length; c++){
								if (numerosSorteados[c] == nro){
									achou = true;
								}
							}
						}
						if (!achou){
							numerosSorteados.push(nro);
							cont++;
						}
					}
				}
			}
			
			for (var c=0; c < numerosSorteados.length; c++){
				if (saida == "") {
					saida = ""+numerosSorteados[c];
				} else {
					saida = saida+' - '+numerosSorteados[c];
				}
			}
			
			document.getElementById('a').innerHTML = "Nros Sorteados: "+saida;
			 
		}
	</script>
	</head>
	
	<body>
	<?php
	  include('./header.php');
	?>
		<section>
			<br>
			<div class="descricao">
				Sorteio Utilizando Javascript
			</div>
			
	
	
        
    <center>
	
      <form>

			<label>Numero Inicial</label><input type="number"  placeholder="Numero Inicial" id="sort">
			<br>
			<label>Numero Final</label><input type="number"  placeholder="Numero Final" id="sort2">
			<br>
			<label>Quantidade de Numeros</label><input type="number"  placeholder="Quantidade de Numeros do Sorteio" id="quant">

			<input type="button"  value="sortear" onclick="aleatorio()">
		</form>
		

        
    </center>
		<br>
			<div class="descricao">
				<p id="a"></p>
			</div>
	
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