<?php

require __DIR__ . '/lib_ext/autoload.php';

use Notification\Email;

$novoEmail = new Email;
$novoEmail->sendMail("Assunto de Teste", "<p>Esse é um e-mail de <b>teste</b>!</p>", "matheus.ace@hotmail.com", "Matheus Marzochi", "matheus.ace@hotmail.com", "Matheus Marzochi");

var_dump($novoEmail);