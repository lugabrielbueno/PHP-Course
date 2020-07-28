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
        if ($bool == false and $this->saldo != 0){
            echo 'Permissão negada, essa conta possui saldo.';
        }elseif ($bool == false and $this->saldo == 0){
            $this->status = $bool;
        }elseif ($bool == true) {
            if ($this->status == true){
                echo 'Conta já está aberta';
            }else {
                $this->saldo = 50;
            }
            
        }

    }
    public function getStatus(){
        if ($this->status == true){
            echo 'Aberta';
        }else {
            echo 'Fechada';
        }
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
        if ($this->status == true) {
            $this->saldo -= $valor;
            echo 'Saque realizado com sucesso';
            echo 'Valor: R$'.number_format($valor,2);
        }else {
            echo 'Conta fechada!';
        }
    }
    public function deposito($valor) {
        if ($this->status == true){
            $this->saldo += $valor;
            echo 'Depósito realizado com sucesso ';
            echo 'Valor: R$'.number_format($valor,2);
        }else {
            echo 'Conta fechada!';
        }
    }
}

    $gabriel = new Conta;
    $gabriel->setNome('Lucas Gabriel Bueno');




?>