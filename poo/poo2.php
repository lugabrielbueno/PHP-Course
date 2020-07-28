<?php

class Conta {
    public $nome;
    public $agencia;
    public $status;
    public $tipo;
    public $banco;
    public $conta;
    private $saldo;


    public function setTipo($tip) {
        $this->tipo = $tip;
    }
    public function getTipo() {
        echo $this->tipo;
    }
    public function setStatus($bool) {
        $this->status = $bool;
    }
    public function getStatus(){
        echo $this->status;
    }
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

    public function saque($valor) {
        $this->saldo -= $valor;
        echo 'Saque realizado com sucesso';
        echo 'Valor: '.$valor;
    }
    public function deposito($valor) {
        $this->saldo += $valor;
        echo 'Depósito realizado com sucesso';
        echo 'Valor: '.$valor;
    }
}

    $gabriel = new Conta;
    $gabriel->setNome('Lucas Gabriel Bueno');
    $gabriel->getNome();


?>