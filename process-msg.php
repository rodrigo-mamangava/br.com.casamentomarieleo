<?php

// process.php


include './email-data.php';
$subject = "Mensagem para os noivos!";

$message = "Mensagem para os noivos: \n";
$message .= "-------------------------------\n";
$message .= "Nome: {$_POST['nome']} \n\n";
$message .= "Mensagem: {$_POST['texto']} \n";

$enviado = mail($to, $subject, $message);


if ($enviado) {
    $data['success'] = true;
} else {
    $data['success'] = false;
}


echo json_encode($data);

