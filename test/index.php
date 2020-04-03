<?php

require __DIR__ . '/../lib_ext/autoload.php';

use Notification\Email;

$novoEmail = new Email(2, "smtp.office365.com", "test@test.com", "test123", "TLS", '587', "matheus.ace@hotmail.com", "Matheus Web");
$novoEmail->sendMail("Assunto de Teste", "<p>Esse é um e-mail de <b>teste</b>!</p>", "matheus.ace@hotmail.com", "Matheus Marzochi", "matheus.ace@hotmail.com", "Matheus Marzochi");

var_dump($novoEmail);