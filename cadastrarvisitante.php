<html>
	<head>
		<title>Trabalho</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="estilo.css" type="text/css">
	</head>
	<style>
		form{
			text-align:center;
		}
	</style>
	<body>
	<?php
		include("header.php");
	?>
		<section>
			<br>
			<?php
				$nome = "";
				$bairro = "";
				$escola ="";
				$senha ="";
				$apelido ="";

				if (!empty($_POST)) {
					if ($_POST["nome"] != null){
						$nome = $_POST["nome"];
					}
					if (($_POST["bairro"] != null)){
						$bairro = $_POST["bairro"];
						if (($bairro == "Outro") && ($_POST["outroBairro"]) ){
							$bairro = $_POST["bairroOutro"];
						}
					}
					if (($_POST["escola"] != null)){
						$escola = $_POST["escola"];
						if (($escola == "Outra") && ($_POST["outroEscola"])) {
							$escola = $_POST["outroEscola"];
						}
					}
					if (($_POST["senha"] != null)) {
						$senha = $_POST["senha"];
					}
					
					if (($_POST["apelido"] != null)) {
						$apelido = $_POST["apelido"];
					}
				}
				include('conexao.php');
				if ($nome != ""){
					$sql = 'insert into visitantes (nm_visitante,ds_bairro,ds_escola,ds_senha,ds_apelido) values ("'.$nome.'","'.$bairro.'","'.$escola.'","'.md5($senha).'","'.$apelido.'")';
					/*echo $sql;*/
					$ok = mysql_query($sql);
					
					if ($ok) {
						echo "<h2>Obrigado $nome, por se cadastrar !!</h2>";
					} else {
						echo "Falha ao gravar $nome";
						echo mysql_error();
					}
				}
				echo "<br>";
			?>		
		</section>
		<footer>
			<p><br>Programador de Computador Vespertino 2014 - SENAI &copy;</p>
		</footer>
	</body>
</html>