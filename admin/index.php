<?php
    include "../config.inc.php"; 
?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin</title>
</head>
<body>
    <!-- Navigation -->
    <header class=page-header>
        <center>
            <h1 style="background-color: #efefef">
                <img src="../assets/logo.png" style="width: 220px;">
            </h1>
        </center>
    </header>
    <!-- Page Content -->
    <div class="container">
        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Painel Admin </h1>
                <ol class="breadcrumb">
                    <li><a href="index.php">Home</a>
                    </li>
                    Serviços
                    <li class="active"><a href="?pg=servicos_listar">Listar Serviços</a></li>
                    <li class="active"><a href="?pg=servicos_inserir">Cadastrar Serviço</a></li>
                    Contatos
                    <li class="active"><a href="?pg=contatos_listar">Listar Contato</a></li>
                </ol>
            </div>
        </div>
        <hr>
        <?php
        // Declarando as variáveis de acesso as páginas
        $pagina = "inicio";
        if(isset($_GET['pg']))
        $pagina = $_GET['pg'];

        include_once("$pagina.php");   
    ?>
        
    </div>
</body>
</html>