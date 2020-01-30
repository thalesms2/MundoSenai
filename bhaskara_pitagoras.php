<html>
	<head>
		<title>Trabalho</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="estilo/estilo_formulas.css" type="text/css">
	</head>
	<body>
		<?php
			include('header.php');		
		?>
		<section>
		
<br>
<div class="descricao">	
<p>O nome Fórmula de Bhaskara foi dado em homenagem ao matemático Bhaskara Akaria, considerado o mais importante matemático indiano do século XII.
A fórmula de Bhaskara é principalmente usada para resolver equações quadráticas de fórmula geral ax2+bx+c=0, com coeficientes reais, com a≠0 e é dada por:</p>
<img src="imgs/ola.jpg">
<p>Para ajudar,criamos este esquema onde você digita os valores a,b e c,para assim calcular o Delta:</p>
<p>Obs.: Os resultados que irão aparecer,são os valores de x1 e x2</p></div>
<script>
 
 
 function calcular() {
 
	res = " ";
	var res = document.getElementById("x1");
	res.innerHTML = res;

	res2 = " ";
	var res2 = document.getElementById("x2");
	res2.innerHTML = res2;


	
 a = document.getElementById('a').value;
 b = document.getElementById('b').value;
 c = document.getElementById('c').value;
delta =  parseInt (Math.pow(b,2) - (4*a*c));
if(delta < 0) {
	var x1 = document.getElementById("x1");
	x1.innerHTML = "impossível calcular"
}	else{
		x1 = (-b + Math.sqrt(delta)) / (2*a);
		var xx = document.getElementById("x1");
		xx.innerHTML = "O valor de x1 é: "+x1+".";
		x2 = (-b - Math.sqrt(delta)) / (2*a);
		var xxx = document.getElementById("x2");
		xxx.innerHTML = "O valor de x2 é: "+x2+".";

}

} 

</script>
<br>
  <label>Valor de A: </label><input type="number" placeholder="Valor de A" id="a" >
  <br>
  
  <label>Valor de B: </label><input type="number" placeholder="Valor de B" id="b" >
  <br>
  
  <label>Valor de C: </label><input type="number" placeholder="Valor de C" id="c" >
  <br><br>
  
  <input type="button" id="calcular" value="Calcular" onclick="calcular()"><br><br>

	Resultado:<a id="x1"></a><a id="x2"></a><br><br>
<div class="descricao">		
<p>O Teorema de Pitágoras é considerado uma das principais descobertas da Matemática, ele descreve uma relação existente no triângulo retângulo.
 Vale lembrar que o triângulo retângulo pode ser identificado pela existência de um ângulo reto, isto é, medindo 90º.</p>
 <img src="imgs/pitag.png">
<p>Aqui você pode calcular a raiz quadrada da hipotenusa,digitando os valores do cateto adjacente e do cateto oposto:</p></div>	
 <script>
		
		function calcularHipotenusa(){
		
			catetoa = document.getElementById('catetoa').value;
			catetoo = document.getElementById('catetoo').value;
			
			catetoa = catetoa*catetoa
			catetoo = catetoo*catetoo
		
			hipotenusa = catetoa + catetoo
		
			a = parseInt(hipotenusa)
			ra = Math.sqrt(a)
			
			var x = document.getElementById("demo");
			x.innerHTML = ra.toFixed(2);
	
		}
	
	</script>
	<br>
	<label>Cateto Adjacente: </label><input type="number" placeholder="Cateto Adjacente" id="catetoa"><br>
	<label>Cateto Oposto: </label><input type="number" placeholder="Cateto Oposto" id="catetoo"><br><br>
	
	<input type="button" id="calcularHipotenusa" value="Calcular" onclick="calcularHipotenusa()"><br><br>
	
	Resultado:<a id="demo"></a><br><br><br>

			
		</section>
		<footer>
			<p>Programador de Computador Vespertino 2014 &copy;</p>
		</footer>
	</body>
</html>