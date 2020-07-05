<?php

require_once("config.php");

use Cliente\Cadastro;

$cad = new Cadastro();

$cad->setNome('Gabriel Bueno');
$cad->setEmail('gabri@vscode.com.br');
$cad->setSenha('54684312');

$cad->registrarVenda();

?>