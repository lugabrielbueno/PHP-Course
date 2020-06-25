<?php
// Programa para verificar se um inteiro dado é positivo ou negativo

$num = $_GET["num"];
if ($num>0) {
    echo "Positivo";
}
else {
    echo "Negativo";
}