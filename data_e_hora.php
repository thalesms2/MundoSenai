<html>
	<head>
		<title>Trabalho</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="estilo.css" type="text/css">
		<link rel="stylesheet" href="estilo2.css" type="text/css">
	</head>
	<body onload="intervalo()">
		<?php
			include('header.php');
		?>
		<section>
			<br>
			<h3>Esse trabalho foi feito com o intuito de conciliar os conceitos de vetores e datas utilizando javascript.</h3>
			<br>
			<br>
			<br>
			<br>
			
			<script>
				dias = ["Domingo", "Segunda", "Terça", "Quarta", "Quinta", "Sexta", "Sábado"];
			
				mess = ["Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro"];
			
				d = new Date();
			
				dia = d.getDate();
			
				diase = d.getDay();

				ano = d.getFullYear();

				mes = d.getMonth();
			
				document.write("<h2> Brusque, "+dias[d.getDay()]+", "+dia+" de "+mess[d.getMonth()]+" de "+ano+".</h2>");	
			</script>
		
			<script>
				/*SCRIPT By: Leleo e Loca | AlohaCrew | */
				function intervalo(){
					inter = window.setInterval(recarregar,1)
				}
				function recarregar(){
					x = new Date();
					var teste4 = x.getHours().toString();
					var tamanho4 = teste4.length;
					if (tamanho4 == 1){
						y4 = ("0"+x.getHours());
					} else {
						y4 = x.getHours();
					}
					document.getElementById("hora").innerHTML = y4;
					/*ESPAçO*/
					var teste3 = x.getMinutes().toString();
					var tamanho3 = teste3.length;
					if (tamanho3 == 1){
						y3 = ("0"+x.getMinutes());
					} else {
						y3 = x.getMinutes();
					}
					document.getElementById("min").innerHTML = y3;
					/*ESPAçO*/
					var teste2 = x.getSeconds().toString();
					var tamanho2 = teste2.length;
					if (tamanho2 == 1){
						y2 = ("0"+x.getSeconds());
					} else {
						y2 = x.getSeconds();
					}
					document.getElementById("sec").innerHTML = y2;
					/*ESPAçO*/
					var teste = x.getMilliseconds().toString();
					var tamanho = teste.length;
					if (tamanho == 2){
						y = ("0"+x.getMilliseconds());
					} else {
						y = x.getMilliseconds();
					}
					document.getElementById("mili").innerHTML = y;
				}
				document.write ("<h4> Brusque, " +x.getDay()+" de "+mes[x.getMonth()]+" de "+x.getFullYear());
			</script>
			<br>
			<br>
			<br>
			<h3><strong id="hora"></strong> :
			<strong id="min"></strong> :
			<strong id="sec"></strong> :
			<strong id="mili"></strong><h3>
			<strong id="teste"></strong>
			<strong id="data"></strong>
			
		</section>
		<footer>
			<p>Programador de Computador Vespertino 2014 &copy;</p>
		</footer>
	</body>
</html>