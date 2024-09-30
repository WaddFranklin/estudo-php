<?php

require '../../../bootstrap.php';

$id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);

// flash message
if (isEmpty()) {
    flash('message', 'Preencha todos os campos!', 'danger');

    return redirect("/edit_user&id={$id}");
}

$validate = validate([
    'name' => 's',
    'lastname' => 's',
    'email' => 'e',
]);

$atualzado = update('tb_user', $validate, ['id', $id]);

// if ($atualizado) {
//     flash('message', 'Usuário atualizado com sucesso!', 'success');

//     return redirect("/edit_user&id={$id}");
// }

// flash('message', 'Erro ao atualizar usuário!');
// redirect("/edit_user&id={$id}");