<table>
    <tr>
        <td style="width: 25px;">Id</td>
        <td style="width: 205px;">Nome</td>
        <td style="width: 205px;">Email</td>
        <td style="width: 305px;">Mensagem</td>
    </tr>
    <?php 
    $busca = "Select * from contatos order by id";
    $todos = mysqli_query($conn, $busca);
    while ($dados=mysqli_fetch_array($todos)) {
    ?>    
    <tr>
        <td><?=$dados['id'];?></td>
        <td><?=$dados['nome'];?> <?=$dados['sobrenome'];?></td>
        <td><?=$dados['email'];?></td>
        <td><?=$dados['mensagem'];?></td>
    </tr>    
    <?php } ?>
</table>
