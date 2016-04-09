<?php
include './email-data.php';
$subject = "RSVP";

$message = "E-mail de confirmação de presença: \n";
$message .= "-------------------------------\n";
$message .= "Nome: {$_POST['nome']} \n\n";
$message .= "Prenseça: {$_POST['presenca']} \n";
$message .= "Número: {$_POST['numero']} \n";
$message .= "E-mail: {$_POST['email']} \n";
$message .= "Telefone: {$_POST['tel']} \n";

$enviado = mail($to, $subject, $message);


if ($enviado) {
    $data['success'] = true;
} else {
    $data['success'] = false;
}


echo json_encode($data);

