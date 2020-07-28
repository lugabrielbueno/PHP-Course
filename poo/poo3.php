<?php

class Lutador {
    public $;
    private $nacionalidade;
    private $idade;
    private $altura;
    private $peso;
    protected $categoria;
    protected $vitorias;
    protected $derrotas;
    protected $empates;

    public function __construct(){
        
    }
    public function setNome($nome){
        $this->nome = $nome;
    }
    public function getNome(){
        return $this->nome;
    }
    public function setNacionalidade($nacionalidade){
        $this->nacionaliade = $nacionalidade;
    }
    public function getNacionalidade(){
        return $this->nacionalidade;
    }
    public function setIdade($idade){
        $this->idade = $idade;
    }
    public function getIdade(){
        return $this->idade;
    }
    public function setAltura($altura){
        $this->altura = $altura;
    }
    public function getAltura(){
        return $this->altura;
    }
    public function setPeso($peso){
        $this->peso = $peso;
    }
    public function getPeso(){
        return $this->peso;
    }
    public function setVitorias($vitorias){
        $this->vitorias = $vitorias;
    }
    public function getVitorias(){
        return $this->vitorias;
    }
    public function setDerrotas($derrotas){
        $this->derrotas = $derrotas;
    }
    public function getDerrotas(){
        return $this->derrotas;
    }
    public function setEmpates($empates){
        $this->empates = $empates;
    }
    public function getEmpates(){
        return $this->empates;
    }

}


?>