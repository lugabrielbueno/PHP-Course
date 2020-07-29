<?php

class Lutador {
    private $nome;
    private $nacionalidade;
    private $idade;
    private $altura;
    private $peso;
    private $categoria;
    private $vitorias;
    private $derrotas;
    private $empates;

    public function __construct($no,$na,$id,$al,$pe,$vi,$de,$em){
        $this->nome = $no;
        $this->nacionalidade = $na;
        $this->idade = $id;
        $this->altura = $al;
        $this->peso = $pe;
        $this->vitorias = $vi;
        $this->derrotas = $de;
        $this->empates = $em;
    }
    public function apresentar($nome) {
        echo "Lutador: ".getNome()."<br>";
        echo "Origem: ".getNacionalidade()."<br>";
        echo getIdade()." anos<br>";
        echo getAltura()."m de altura<br>";
        echo "Pesando ".getPeso()." kg<br>";
        echo "Ganhou: ".getVitorias();
        echo "Perdeu: ".getDerrotas();
        echo "Empatou: ".getEmpates();   
    }
    public function status(){
        echo getNome();
        echo "É um peso ".getCategoria();
        echo getVitorias()." vitórias<br>";
        echo getDerrotas()." derrotas<br>";
        echo getEmpates()." empates<br>";

    }
    public function ganharLuta(){
        $this->vitorias += 1;
    }
    public function perderLuta(){
        $this->derrotas += 1;
    }
    public function empatarLuta(){
        $this->empates += 1;
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
        setCategoria();
    }
    public function getPeso(){
        return $this->peso;
    }
    public function setCategoria(){
        if ($this->peso<52.2){
            $this->categoria = "Inválido";
        }elseif ($this->peso<=70.3) {
            $this->categoria = "Leve";
        }elseif ($this->peso<=83.9) {
            $this->categoria = "Médio";
        }elseif ($this->peso<=120.2) {
            $this->categoria = "Pesado";
        }else {
            $this->categoria = "Inválido";
        }
    }
    public function getCategoria(){
        echo $this->categoria;
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