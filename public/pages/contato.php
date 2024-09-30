<?= get('message') ?>
<h2>Contato</h2>

<form action="pages/form/contato.php" method="POST">
    <div class="form-group">
        <label for="name">Nome</label>
        <input type="text" class="form-control" name="name" placeholder="Digite o seu nome...">
    </div>

    <div class="form-group">
        <label for="email">Email</label>
        <input type="text" class="form-control" name="email" placeholder="Digite o seu email...">
    </div>

    <div class="form-group">
        <label for="subject">Assunto</label>
        <input type="text" class="form-control" name="subject" placeholder="Digite o assunto...">
    </div>

    <div class="form-group">
        <label for="">Mensagem</label>
        <textarea class="form-control" name="message" rows='5'></textarea>
    </div>

    <button type="submit" class="btn btn-primary">Enviar</button>
    <a href="/" class="btn btn-secondary">Voltar</a>
</form>