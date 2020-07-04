<?php

class Animal {
    public $classe;
    public $especie;
    public $comida;

    public function minhaClasse(){
        echo "Sou ".$this->classe."<br>";

    }

    public function minhaEspecie() {
        echo "Sou um(a) ".$this->especie."<br>";

    }
    public function minhaComida() {
        echo "Eu gosto de comer ".$this->comida."<br>";

    }
}

class Cachorro extends Animal {
    public $classe = "Mamífero";
    public $especie = "Cachorro";
    public $comida = "Ração";
}
class Serpente extends Animal {
    public $classe = "Réptil";
    public $especie = "Serpente";
    public $comida = "Carne e ovos";
}
class Leao extends Animal {
    public $classe = "Mamífero";
    public $especie = "Leão";
    public $comida = "Carne";
}

$don = new Cachorro();
echo $don->minhaEspecie();
echo $don->minhaClasse();
echo $don->minhaComida();
echo "<br>";
$doni = new Leao();
echo $doni->minhaEspecie();
echo $doni->minhaClasse();
echo $doni->minhaComida();
echo "<br>";
$done = new Serpente();
echo $done->minhaEspecie();
echo $done->minhaClasse();
echo $done->minhaComida();