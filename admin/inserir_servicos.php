<?php
$titulo = $_POST['titulo'];
$imagem = $_POST['imagem'];
$descricao = $_POST['descricao'];

$sql = "INSERT INTO servicos (`titulo`, `descricao`, `imagem`) VALUES ('$titulo', '$descricao', '$imagem')";
$insert = mysqli_query($conn, $sql);

if(!$insert){
    echo "Ocorreu um erro ao cadastrar no banco de dados. <a href='?pg=servicos_inserir'>Tente Novamente</a>";
}else{
   echo "<h3>Cadastrada com sucesso!</h3><br>";
}
?>