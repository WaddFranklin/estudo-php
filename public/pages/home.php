<?= get('message') ?>

<a href="/?pages=create_user" class="btn btn-primary">Cadastrar Usuário</a>
<a href="/?pages=contato" class="btn btn-primary">Contato</a>
<h2>Página Inicial</h2>

<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>Email</th>
            <th></th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php 
            $users = all('tb_user');
            foreach ($users as $user): 
        ?>
        <tr>
            <td><?= $user->id_user ?></td>
            <td><?= $user->name ?></td>
            <td><?= $user->email ?></td>
            <td><a href="/?pages=edit_user&id=<?= $user->id_user ?>" class="btn btn-warning">Editar</a></td>
            <td><a href="/?pages=delete_user&id=<?= $user->id_user ?>" class="btn btn-danger">Deletar</a></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>