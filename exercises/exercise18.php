<?php

$frase = "A repetição é mãe da retencão";
$a = strpos($frase,'da');
echo $a;
echo '<br>';
$answer = substr($frase,$a,strlen($frase));

var_dump($answer);

?>