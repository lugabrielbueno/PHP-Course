<?php
/*
$prod = 'leite';
$preco = 4.5;
printf ("%s custa R$ %.2f",$prod,$preco);

$x[0] = 1;
$x[1] = 2;
$x[2] = 3;
print_r ($x);

$v = array(1,2,3,5,9,7);
var_export ($v); 

$stri = 'suadhf saud fhusaduhf uhisaudhi fauhsdfu hisauhdf uh ';
echo strlen ($stri).'<br>'; 

echo trim($stri); 

$frase = "I'll study PHP";
echo str_word_count($frase,1);

$frase = 'Hello world';
print_r(explode(" ",$frase)); 

$frase = 'Hello world';
print_r(str_split($frase)); 

$frase = 'Hello world, i am here';
$ex = explode(" ",$frase);
$text = implode(",",$ex);
echo $text; */

$text = 'Em CASA de FERREIRO o espeTO é de PAU';
echo strtolower($text).'<br>';
echo strtoupper($text).'<br>';
echo strrev($text).'<br>';
echo strpos($text,'de').'<br>';
echo stripos($text,'DE').'<br>';
echo str_repeat($text,4).'<br>';
echo str_replace('PAU','madeira',$text);