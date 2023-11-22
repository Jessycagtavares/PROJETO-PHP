<?php
$id = $_POST['id'];
$titulo = $_POST['titulo'];
$imagem = $_POST['imagem'];
$descricao = $_POST['descricao'];

$sql = "UPDATE servicos SET titulo='$titulo', imagem='$imagem', descricao='$descricao' WHERE id=$id";
$altera = mysqli_query($conn, $sql);

if(!$altera){
    echo "Ocorreu um erro ao atualizar dados no banco de dados. <br>
    <a href='?pg=servicos_listar'>Voltar</a>";
}else{
   echo "<h3>Editado com sucesso!</h3>
<a href='?pg=servicos_listar'>Voltar</a>";
}
?>