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
			<?php
			$n = $_POST["n"];
			$valo = $_POST["valor"];
			$receb = $_POST["receb"];
			$corresp = $_POST["corresp"];
			$nome = $_POST["nome"];
			$cpf = $_POST["cpf"];
			$end = $_POST["end"];
			setcookie("valor",$valo,time()+60);
			setcookie("n",$n,time()+60);
			setcookie("receb",$receb,time()+60);
			setcookie("corresp",$corresp,time()+60);
			setcookie("nome",$nome,time()+60);
			setcookie("cpf",$cpf,time()+60);
			setcookie("end",$end,time()+60);
			/* Começo extenso */
	function mesExtenso(){
				$extensoMes = array("","Janeiro","Fevereiro","Março","Abril","Maio","Junho","Julho","Agosto","Setembro","Outubro","Novembro","Dezembro");
				$b = $extensoMes[date("m")];
				return $b;
			}
			
    function valorPorExtenso($valor=0) {
		$singular = array("centavo", "real", "mil", "milhão", "bilhão", "trilhão", "quatrilhão");
		$plural = array("centavos", "reais", "mil", "milhões", "bilhões", "trilhões","quatrilhões");

		$c = array("", "cem", "duzentos", "trezentos", "quatrocentos","quinhentos", "seiscentos", "setecentos", "oitocentos", "novecentos");
		$d = array("", "dez", "vinte", "trinta", "quarenta", "cinquenta","sessenta", "setenta", "oitenta", "noventa");
		$d10 = array("dez", "onze", "doze", "treze", "quatorze", "quinze","dezesseis", "dezesete", "dezoito", "dezenove");
		$u = array("", "um", "dois", "três", "quatro", "cinco", "seis","sete", "oito", "nove");

		$z=0;

		$inteiro = explode(".", $valor);
		for($i=0;$i<count($inteiro);$i++)
			for($ii=strlen($inteiro[$i]);$ii<3;$ii++)
				$inteiro[$i] = "0".$inteiro[$i];
		// $fim identifica onde que deve se dar junção de centenas por "e" ou por "," ;) 
		$rt = "";
		$fim = count($inteiro) - ($inteiro[count($inteiro)-1] > 0 ? 1 : 2);
		for ($i=0;$i<count($inteiro);$i++) {
			$valor = $inteiro[$i];
			$rc = (($valor > 100) && ($valor < 200)) ? "cento" : $c[$valor[0]];
			$rd = ($valor[1] < 2) ? "" : $d[$valor[1]];
			$ru = ($valor > 0) ? (($valor[1] == 1) ? $d10[$valor[2]] : $u[$valor[2]]) : "";
		
			$r = $rc.(($rc && ($rd || $ru)) ? " e " : "").$rd.(($rd && $ru) ? " e " : "").$ru;
			$t = count($inteiro)-1-$i;
			$r .= $r ? " ".($valor > 1 ? $plural[$t] : $singular[$t]) : "";
			if ($valor == "000")$z++; elseif ($z > 0) $z--;
			if (($t==1) && ($z>0) && ($inteiro[0] > 0)) $r .= (($z>1) ? " de " : "").$plural[$t]; 
			if ($r) $rt = $rt . ((($i > 0) && ($i <= $fim) && ($inteiro[0] > 0) && ($z < 1)) ? ( ($i < $fim) ? ", " : " e ") : " ") . $r;
		}

		return($rt ? $rt : "zero");
	}
	
				$dataDeHoje = date('d-m-Y');
				$valo = number_format($valo, 2, ".", ".");
	/* Fim extenso */
			
			
			
			echo "<div id='princ'>
		
			<div id='cab'><strong id='titulo' >RECIBO</strong> 
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				Nº <strong id='n'>$n</strong>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				VALOR <strong id='val'>R$ $valo</strong>	
			</div>
		
			<div id='cont'>
			&nbsp;&nbsp;&nbsp;&nbsp;Recebi(emos) de <strong id='rec'>$receb</strong>
			<br>
			&nbsp;&nbsp;&nbsp;&nbsp;a quantia de <strong id='quan'>".valorPorExtenso($valo)."</strong>
			<br>
			<br>
			&nbsp;&nbsp;&nbsp;&nbsp;Correspondente a <strong id='corr'>$corresp</strong>
			<br>
			&nbsp;&nbsp;&nbsp;&nbsp;e para clareza firmo(amos) o presente.
			<br>
			<strong id='data'>&nbsp;&nbsp;&nbsp;&nbsp;Brusque: ".date("d")." De ".mesExtenso()." De ".date("Y")."</strong>
			<br>
			<br>
			&nbsp;&nbsp;&nbsp;&nbsp;Assinatura 
			<br>
			&nbsp;&nbsp;&nbsp;&nbsp;Nome <strong id='nom'>$nome</strong> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			CPF/RG <strong id='cr'>$cpf</strong>
			<br>
			&nbsp;&nbsp;&nbsp;&nbsp;Endereço <strong id='end'>$end</strong>
			</div>
		
		</div>";
		?>
		<button id="botaoimprimir" onclick="window.open('recibo_imprimir.php','Recibo','toolbar=no,location=no,status=no,menubar=no,scrollbars=no,resizable=no,width=1000,height=1000'); ">Imprimir</button>
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