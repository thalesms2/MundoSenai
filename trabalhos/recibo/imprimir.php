<html>
	<head>
		<title>Trabalho</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="estilo_recibo.css" type="text/css">
	</head>
	<body>
	<?php
	$n = $_COOKIE["n"];
	$valo = $_COOKIE["valor"];
	$receb = $_COOKIE["receb"];
	$corresp = $_COOKIE["corresp"];
	$nome = $_COOKIE["nome"];
	$cpf = $_COOKIE["cpf"];
	$end = $_COOKIE["end"];
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
		echo"<div id='princ'>
		
			<div id='cab'><strong id='titulo' >RECIBO</strong> 
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				Nº <strong id='n'>$n</strong>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
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
		
		</div>"
		
		?>
	</body>
	</html>