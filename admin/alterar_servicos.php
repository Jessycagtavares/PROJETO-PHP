<?php
$id = $_GET['id'];
$sql = "SELECT * FROM servicos WHERE id = $id";
$busca = mysqli_query($conn, $sql);

while($dados=mysqli_fetch_array($busca)){    
?>
<form action="?pg=alterar_servicos_db" method="post">
<input type="hidden" name="id" value="<?=$dados['id'];?>"> 
<table>
    <tr>
        <td>Titulo: </td>
        <td><input name="titulo" type="text" value="<?= $dados['titulo']; ?>"/></td>
    </tr>
    <tr> 
        <td>Imagem: </td>
        <td><input name="imagem" type="text" value="<?= $dados['imagem']; ?>"/></td>
    </tr>
    <tr>
        <td>Descrição: </td>
        <td><textarea name="descricao"><?= $dados['descricao']; ?></textarea></td>
    </tr>
    <tr>
        <td></td>
        <td><button name="Enviar">Cadastrar</button></td>
    </tr>
</table>
</form>
<?php } ?>