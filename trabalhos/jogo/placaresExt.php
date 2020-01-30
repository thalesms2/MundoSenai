<style type="text/css">
  .tftable {
    margin: 0 auto;
    font-size:100%;
    color:#333333;
    width:50%;
    border-width: 1px;
    border-color: #ebab3a;
    border-collapse: collapse;
  }
  .tftable th {
    font-size:100%;
    background-color:#e6983b;
    border-width: 1px;
    padding: 8px;
    border-style: solid;
    border-color: #ebab3a;
    text-align:left;
  }
  .tftable tr {
    background-color:#ffffff;
  }
  .tftable td {
    font-size:100%;
    border-width: 1px;
    padding: 8px;
    border-style: solid;
    border-color: #ebab3a;
  }
  .tftable tr:hover {
    background-color:#ffff99;
  }
  .botao {
	-moz-box-shadow:inset 0px 1px 10px 0px #bee2f9;
	-webkit-box-shadow:inset 0px 1px 10px 0px #bee2f9;
	box-shadow:inset 0px 1px 10px 0px #bee2f9;
	background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #63b8ee), color-stop(1, #468ccf) );
	background:-moz-linear-gradient( center top, #63b8ee 5%, #468ccf 100% );
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#63b8ee', endColorstr='#468ccf');
	background-color:#63b8ee;
	-webkit-border-top-left-radius:0px;
	-moz-border-radius-topleft:0px;
	border-top-left-radius:0px;
	-webkit-border-top-right-radius:0px;
	-moz-border-radius-topright:0px;
	border-top-right-radius:0px;
	-webkit-border-bottom-right-radius:0px;
	-moz-border-radius-bottomright:0px;
	border-bottom-right-radius:0px;
	-webkit-border-bottom-left-radius:0px;
	-moz-border-radius-bottomleft:0px;
	border-bottom-left-radius:0px;
	text-indent:0;
	border:1px solid #3866a3;
	display:inline-block;
	color:#14396a;
	font-family:Arial;
	font-size:15px;
	font-weight:bold;
	font-style:normal;
	height:65px;
        vertical-align: middle;
        alignment-adjust: middle;
	line-height:65px;
	width:131px;
	text-decoration:none;
	text-align:center;
	text-shadow:1px 1px 0px #7cacde;
        
        margin-bottom: 5px;
        margin-left: 200px;
        
}
.botao:hover {
	background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #468ccf), color-stop(1, #63b8ee) );
	background:-moz-linear-gradient( center top, #468ccf 5%, #63b8ee 100% );
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#468ccf', endColorstr='#63b8ee');
	background-color:#468ccf;
}.botao:active {
	position:relative;
	top:1px;
}
 
</style>
<meta charset="UTF-8">
<body >
    <?php
$servername = "localhost";
$username   = "root";

  echo ' <div  style="position:absolute;  ">
            <p><a href="placaresEasy.php" class="botao" >Easy</a></p>
            <p><a href="placaresMed.php" class="botao" >Medium</a></p>
            <p><a href="placaresHard.php" class="botao" >Hard</a></p>
            <p><a href="placaresExt.php" class="botao" >Extreme</a></p>
            
        </div>';

	include('conexao.php');


$sql    = "SELECT * FROM `scores` where ds_dificuldade='Extreme' " . "order by vl_pontos DESC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo '<table class="tftable" border="1">
     <tr><th>Nome</th><th>Pontos</th><th>Dificuldade</th></tr>';
    
    while ($row = $result->fetch_assoc()) {
        
        echo '<tr><td> ' . $row["nm_user"] . '</td><td>' . $row["vl_pontos"] . '</td><td>' . $row["ds_dificuldade"] . '</td></tr>';
        
    }
    
    
    echo "</table>";
} else {
    echo "Nenhuma Pontuaçao disponivel";
}



$conn->close();
?>


</body>

