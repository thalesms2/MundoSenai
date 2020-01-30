<script>
   
    
x = setTimeout(function(){window.location = "index.html";},2000);
    

    
    



</script>
<meta charset="UTF-8">
    <?php
$score = $_POST["pontos"];
$dif = $_POST["dif"];
$user = $_POST["user"];

include('conexao.php');

$sql = "INSERT INTO `scores`(`nm_user`, `vl_pontos`, `ds_dificuldade`) 
VALUES ('".$user."','".$score."','".$dif."')";

if ($conn->query($sql) === TRUE) {
echo "<center>"
. "<h1 style='font-family: Arial;'> Pontuação armazenada! </h1> "
. "<h1 style='font-family: Arial;' id='contador'>Redirecionando...</h1> "
. "</center>";
} else {
    echo "Error 404: " . $conn->error;
}



$conn->close();





