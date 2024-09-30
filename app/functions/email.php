<?php

use PHPMailer\PHPMailer\PHPMailer;

function send(array $data) {

    $email = new PHPMailer();
    $email->CharSet = 'UTF-8';
    $email->SMTPSecure = 'plain';
    $email->isSMTP();
    $email->Host = 'smtp.mailtrap.io';
    $email->Port = '465';
    $email->SMTPAuth = true;
    $email->Username = 'a343cb742c3175';
    $email->Password = 'f86fe1c0d333c6';
    $email->isHTML(true);
    $email->setFrom($data['who']);
    $email->FromName = $data['who'];
    $email->addAddress($data['to']);
    $email->Body = $data['message'];
    $email->Subject = $data['subject'];
    $email->AltBody = 'Para ver esse email, tenha certeza de estar vendo em um programa que aceita ver HTML';
    $email->msgHTML($data['message']);
    
    return $email->send();
}