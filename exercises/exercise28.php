<?php

class Pessoa {

    public $nome; // atributo

    public function falar() { //metodo
        return "O meu nome é ".$this->nome;
    }

} 

$gabriel = new Pessoa();
$gabriel->nome = 'Lucas Gabriel Bueno';
echo $gabriel->falar();

?>