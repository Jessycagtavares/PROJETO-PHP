<?php
$status = "";

if(isset($_POST['nome'])){

$nome = $_POST['nome'];
$nome_s = $_POST['sobrenome'];
$email = $_POST['email'];
$mensagem = $_POST['mensagem'];

$sql = "INSERT INTO `contatos`(`nome`, `sobrenome`, `email`, `mensagem`) VALUES ('$nome', '$nome_s', '$email', '$mensagem')";
$insert = mysqli_query($conn, $sql);

if(!$insert)
$status = "Ocorreu um erro ao cadastrar no banco de dados.";
else
$status = "Mensagem enviada com sucesso!";
}

?>
<div class="container">
    <div class="form_logo">
    <span style="color:#fff"><?= $status; ?></span>
            <img src="assets/logo.png" alt="">
    </div>
        <form class="form" method="POST">
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" name="nome" placeholder="Nome">
            </div>
            <div class="form-group">
                <label for="sobrenome">Sobrenome:</label>
                <input type="text" name="sobrenome" placeholder="Sobrenome">
            </div>
            <div class="form-group">
                <label for="email">E-mail:</label>
                <input type="email" name="email" placeholder="Email">
            </div>
            <div class="form-group">
                <label for="mensagem">Mensagem:</label>
                <textarea name="mensagem" placeholder="Mensagem"></textarea>
            </div>
            <div class="btn">
                <button type="submit" >Enviar</button>
            </div>
            
        </form>
    </div>