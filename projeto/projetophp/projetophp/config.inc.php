<?php
// conexão com servidor: IP do servidor, usuário e senha
$conn = mysqli_connect("localhost","root","");

/* teste se a variavel &conn recebe dados do servidor
if($conn){
    echo "Conexão com servidor bem sucedida!";

}
*/

// Selecionar BD
$bd = mysqli_select_db($conn,"projetophp");
?>