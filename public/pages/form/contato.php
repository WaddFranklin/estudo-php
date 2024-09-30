<?php

require '../../../bootstrap.php';

// flash message
if (isEmpty()) {
    flash('message', 'Preencha todos os campos!', 'danger');

    return redirect('contato');
}

$validate = validate([
    'name' => 's',
    'email' => 'e',
    'subject' => 's',
    'message' => 's',
]);

$data = [
    'who' => $validate->email,
    'to' => 'waddinsohn@gmail.com',
    'message' => $validate->message,
    'subject' => $validate->subject,
];

if (send($data)) {
    flash('message', 'Email enviado com sucesso!', 'success');

    return redirect('contato');
}