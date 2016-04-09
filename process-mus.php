<?php
include './email-data.php';
$subject = "Sugestão de músicas";

$message = "E-mail de sugestão de músicas: \n";
$message .= "-------------------------------\n";
$message .= "Música: {$_POST['nome']} \n\n";
$message .= "Obs: {$_POST['obs']} \n";

$enviado = mail($to, $subject, $message);


if ($enviado) {
    $data['success'] = true;
} else {
    $data['success'] = false;
}


echo json_encode($data);

