<?php
require_once("Video.php");
require_once("Gafanhoto.php");

$v[0] = new Video('Aula 1 de POO');
$v[1] = new Video('Aula 12 de HTML');
$v[2] = new Video('Aula 15 de PHP');

$g[0] = new Gafanhoto('Gabriel',25,'M','GabriBueno');
$g[1] = new Gafanhoto('Flavia',24,'F','Flavialise');


var_dump($v,$g);




?>