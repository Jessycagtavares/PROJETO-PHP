<div class="container_servicos">
    <h1 class="servicos_title"> Conheça nossos serviços</h1>
    <div class="conteiner_cards">
    <?php 
    $busca = "Select * from servicos order by id";
    $todos = mysqli_query($conn, $busca);
    while ($dados=mysqli_fetch_array($todos)) {
    ?>    
    <div class="card">
            <div class="card_img">
                <img src="<?= $dados['imagem']; ?>" alt="imagem de servidores publicos">
            </div>
            <div class="title_card">
                <h2><?= $dados['titulo']; ?></h2>
            </div>
            <div class="description_card">
                <p><?= $dados['descricao']; ?></p>
            </div>
            <div class="btn_Card">
                <a href="https://api.whatsapp.com/send?phone=61999818226">Solicitar analise <img src="./whatsapp.png" alt=""></a>
            </div>
        </div>  
    <?php } ?>
        
    </div>
</div>
        