<script language='javascript'>
function confirmaExclusao(aURL) {
    if(confirm('Você tem certeza que deseja excluir?'))
    location.href = aURL;    
}
</script>

<table>
    <tr>
        <td style="width: 25px;">Id</td>
        <td style="width: 205px;">Titulo</td>
        <td style="width: 105px;">Alterar</td>
        <td style="width: 105px;">Excluir</td>
    </tr>
    <?php 
    $busca = "Select * from servicos order by id";
    $todos = mysqli_query($conn, $busca);
    while ($dados=mysqli_fetch_array($todos)) {
    ?>    
    <tr>
        <td><?=$dados['id'];?></td>
        <td><?=$dados['titulo'];?></td>
        <td><a href="?pg=alterar_servicos&id=<?=$dados['id']; ?>">!!</a></td>
        <td><a href="javascript:confirmaExclusao('?pg=excluir_servicos&id=<?=$dados['id']; ?>')" class="ask">XX</a></td>
    </tr>    
    <?php } ?>
</table>
