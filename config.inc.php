<?php
// conexão com servidor: IP do servidor, usuário e senha
$conn = mysqli_connect("localhost", "root", "");
// Selecionar BD
$bd = mysqli_select_db($conn, "financeira");
?>