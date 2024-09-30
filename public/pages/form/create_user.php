<?php

require '../../../bootstrap.php';

// flash message
if (isEmpty()) {
    flash('message', 'Preencha todos os campos!', 'danger');

    return redirect('create_user');
}

$validate = validate([
    'name' => 's',
    'lastname' => 's',
    'email' => 'e',
    'password' => 's',
]);

$cadastrado = create('tb_user', $validate);

if ($cadastrado) {
    flash('message', 'Usuário cadastrado com sucesso!', 'success');

    return redirect('create_user');
}

flash('message', 'Erro ao cadastrar usuário!');
redirect('create_user');