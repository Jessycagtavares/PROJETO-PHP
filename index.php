<?php
    // INCLUINDO ARQUIVO DE CONFIGURAÇÃO
    include_once("config.inc.php");
    
    $pagina = "inicio";
    if(isset($_GET['pg']))
    $pagina = $_GET['pg'];

    //TOPO
    include_once("topo.php");
    //CONTEUDO
    include_once("paginas/$pagina.php");    
    //RODAPE
    include_once("rodape.php");

?>