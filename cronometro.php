<html>
	<head>
		<title>Trabalho</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="estilo/estilo_cronometo.css" type="text/css">
	</head>
	<body>
		<?php
			include('header.php');
		?>
		<section>
			<br>
			<div class="descricao">
				Cronômetro 
			</div>
			<br>
			<div class="objetivo">
				<div id="corpo">
					<center>
						<h1 id="aga">00:00:00</h1>
						<a class="btn1" onclick="iniciar()" id="botao">Iniciar</a>
						<a class="btn2" onclick="parar()" >Parar</a>
        
						<p><br><br><br><br><br> Barra de Espaço: Iniciar </p>
						<p>Esc: Parar </p>
        
					</center>
				</div>	
				</br>
				<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Este site tem por objetivo mostrar o que a nossa turma produziu ao longo do ano.</p>
			</div>
		</section>
		<footer>
			<p><br>Programador de Computador Vespertino 2014 - SENAI &copy;</p>
		</footer>
	<script>
		var x= 0;      
		var y= 0;      
		var z= 0; 
		var b = 0;
		document.addEventListener('keydown', function(event) {
		k = event.keyCode;
		b =document.getElementById("botao").innerHTML;
		if(k===32 && b ==="Iniciar"){
			iniciar();        
        
		}
     
		if(k===32 && b ==="Pausar"){
			pausar();
        
		}    
		if(k===32 && b ==="Retomar"){
			iniciar();
        
		}    
		if(k===27){
			parar();
        
		}   
     
		});
		function iniciar(){
            
            cronometro = window.setInterval(cronometroA,10);
            document.getElementById("botao").innerHTML = "Pausar";
            document.getElementById("botao").className = "btn2";             
            document.getElementById("botao").onclick = pausar;
            b = 1;
                
        }    
        function parar(){
           
            clearInterval(cronometro);
            x = 0;
            y = 0;
            z = 0;
            document.getElementById("botao").innerHTML = "Iniciar";
            document.getElementById("botao").className = "btn1";         
            document.getElementById("aga").innerHTML ="00:00:00";
        }
        function pausar(){
            clearInterval(cronometro);                   
            document.getElementById("botao").innerHTML = "Retomar";
            document.getElementById("botao").className = "btn1";         
            document.getElementById("botao").onclick = iniciar;
            b = 0;
        }
        
		function cronometroA(){
			x = x + 1;
    
			if(x===99){
				x =0;
				y = y + 1;     
            
			}   
			if(y===59){
				y =0;
				z = z +1;
			}
             if(x < 10){
				x = "0"+x;                  
			}
              if(y < 10){
				y = "0"+y;                  
			}
            if(z < 10){
				z = "0"+z;                  
			}

			document.getElementById("aga").innerHTML = z+":"+y+":"+ x;
			x = parseInt(x);
			y = parseInt(y);
			z = parseInt(z);
    
		}
        </script>
	
	</body>
</html>