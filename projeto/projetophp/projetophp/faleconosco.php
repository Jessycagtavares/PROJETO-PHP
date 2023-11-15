<div class="container">
        <form class="form" method="POST" action="?pg=sucesso">
            <h2>Formulário de Contato</h2>
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" id="nome" name="nome" placeholder="Digite seu nome">
            </div>
            <div class="form-group">
                <label for="email">E-mail:</label>
                <input type="email" id="email" name="email" placeholder="Digite seu e-mail">
            </div>
            <div class="form-group">
                <label for="email">Assunto:</label>
                <select id="assunto" name="assunto">
                    <option value="suporte">Suporte</option>
                    <option value="vendas">Vendas</option>
                    <option value="feedback">Feedback</option>
                    <option value="outro">Outro</option>
                </select>
            </div>
            <div class="form-group">
                <label for="mensagem">Mensagem:</label>
                <textarea id="mensagem" name="mensagem" placeholder="Digite sua mensagem"></textarea>
            </div>
            <button type="submit">Enviar</button>
        </form>
    </div>