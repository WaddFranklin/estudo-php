<?= get('message') ?>
<?php  $user = find('tb_user', 'id_user', $_GET['id']); ?>

<h2>Editar Usuário</h2>

<form action="/pages/form/update_user.php" method="post">
    <input type="hidden" name="id_user" value="<?= $user->id_user ?>">

    <div class="form-group">
        <label for="name">Nome</label>
        <input type="text" class="form-control" name="name" value="<?= $user->name ?>" placeholder="Digite o seu nome...">
    </div>

    <div class="form-group">
        <label for="lastname">Sobrenome</label>
        <input type="text" class="form-control" name="lastname" value="<?= $user->lastname ?>" placeholder="Digite o seu sobrenome...">
    </div>

    <div class="form-group">
        <label for="email">Email</label>
        <input type="text" class="form-control" name="email" value="<?= $user->email ?>" placeholder="Digite o seu email...">
    </div>

    <button type="submit" class="btn btn-primary">Atualizar</button>
    <a href="/" class="btn btn-secondary">Voltar</a>
</form>