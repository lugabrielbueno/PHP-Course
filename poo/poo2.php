<?php

class Conta {
    public $nome;
    public $agencia;
    public $banco;
    public $conta;
    private $saldo;

    public function setAgencia($ag) {
        $this->agencia = $ag;
    }
    public function getAgencia() {
        echo $this->agencia;
    }
    public function setBanco($banc) {
        $this->banco = $banc;
    }
    public function getBanco() {
        echo $this->banco;
    }
    public function setNome($nome) {
        $this->nome = $nome;
    }
    
    public function getNome() {
        echo $this->nome;
    }
}

    $gabriel = new Conta;
    $gabriel->setNome('Lucas Gabriel Bueno');
    $gabriel->getNome();


?>