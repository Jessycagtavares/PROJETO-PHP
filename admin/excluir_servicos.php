<?php
$id = $_GET['id'];

$sql = "DELETE FROM `servicos` WHERE id = '$id'";
$delete = mysqli_query($conn, $sql);

if(!$delete){
    echo "Ocorreu um erro ao deletar no banco de dados.";
}else{
   echo "<h3>Deletado com sucesso!</h3><br>";
}
?>