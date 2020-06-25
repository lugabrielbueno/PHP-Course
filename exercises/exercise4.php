<?php
// Váriaveis variáveis

$bebida = 'refrigerante';
$$bebida = 'guaraná';
$altura = 4.4;

echo "$refrigerante<br>";
$destino = 'cidade';
$$destino = 'Maringá';

echo "$cidade<br>";
if (is_string($destino)):
    echo "É uma string";
else:
    echo "Não é uma string";
endif;
echo "<hr>";

if (is_float($altura)):
    echo "É um float";
else:
    echo "Não é um float";
endif;