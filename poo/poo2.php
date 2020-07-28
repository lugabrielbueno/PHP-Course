<?php

class Conta {
    private $nome;
    public $agencia;
    private $status;
    protected $tipo;
    public $banco;
    public $conta;
    private $saldo;

    public function __construct(){
        $this->status = false;
        $this->saldo = 50;
    }
    public function getSaldo(){
        echo 'R$'.number_format($this->saldo,2);
    }
    public function setTipo($tip) {
        $this->tipo = $tip;
    }
    public function getTipo() {
        echo $this->tipo;
    }
    public function setStatus($bool) {
        if ($bool == false and $this->saldo != 0){
            echo 'Permissão negada, essa conta possui saldo.';
        }elseif ($bool == false and $this->saldo == 0 and $this->status!= false){
            $this->status = $bool;
            echo 'Conta fechada com sucesso';
        }elseif ($bool == false and $this->status == false) {
            echo 'A conta já está fechada.';
        }elseif ($bool == true) {
            if ($this->status == true){
                echo 'Conta já está aberta.';
            }else {
                $this->status = $bool;
                'A conta foi aberta com sucesso';
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
        if ($this->status == false or $this->saldo < $valor) {
            echo 'Impossível realizar essa operação. (cheque o saldo ou status da conta)';
        }else {
            $this->saldo -= $valor;
            echo "Saque realizado com sucesso. Valor R$". number_format($valor,2);
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
    $gabriel->setNome('Lucas Gabriel Bueno'); echo '<br>';
    $gabriel->getNome();echo '<br>';
    $gabriel->setTipo('CC');echo '<br>';
    $gabriel->getTipo();echo '<br>';
    $gabriel->setAgencia('0120');  echo '<br>';
    $gabriel->getAgencia();echo '<br>';
    $gabriel->setStatus(true);echo '<br>';
    $gabriel->getStatus();echo '<br>';
    $gabriel->deposito(650.00);echo '<br>';
    $gabriel->saque(800);echo '<br>';
    $gabriel->saque(400.00); echo '<br>';
    $gabriel->getSaldo();echo '<br>';




?>