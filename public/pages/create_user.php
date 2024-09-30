<?= get('message') ?>
<h2>Cadastro de Usuário</h2>

<form action="/pages/form/create_user.php" method="post">
    <div class="form-group">
        <label for="name">Nome</label>
        <input type="text" class="form-control" name="name" placeholder="Digite o seu nome...">
    </div>

    <div class="form-group">
        <label for="lastname">Sobrenome</label>
        <input type="text" class="form-control" name="lastname" placeholder="Digite o seu sobrenome...">
    </div>

    <div class="form-group">
        <label for="email">Email</label>
        <input type="text" class="form-control" name="email" placeholder="Digite o seu email...">
    </div>

    <div class="form-group">
        <label for="password">Senha</label>
        <input type="text" class="form-control" name="password" placeholder="Digite o sua senha...">
    </div>

    <button type="submit" class="btn btn-primary">Cadastrar</button>
    <a href="/" class="btn btn-secondary">Voltar</a>
</form>