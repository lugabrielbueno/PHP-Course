<?php
require_once('Interface.php');
class ControleRemoto implements Controlador {
    private $volume;
    private $ligado;
    private $tocando;

    //metodos especiais
    private function __construct() {
        $this->volume = 50;
        $this->ligado = false;
        $this->tocando = false;
    }
    private function setVolume($vol) {
        return $this->volume = $vol;
    }
    private function getVolume() {
        return $this->volume;
    }
    private function setLigado($bool) {
        return $this->ligado = $bool;
    }
    private function getLigado(){
        return $this->ligado;
    }
    private function setTocando($bool){
        return $this->tocando = $bool;
    }
    private function getTocando($bool){
        return $this->tocando = $bool;
    }
    public function ligar(){
        $this->setLigado(true);
    }
    public function desligar(){
        $this->setLigado(false);
    }
    public function abrirMenu(){
        echo "<br>Está ligado ? ". ($this->getLigado()?"SIM":"NÃO");
        echo "<br>Está tocando ? ". ($this->getTocando()?"SIM":"NÃO");
        echo "<br>Volume: " . $this->getVolume();
        for($i=0;$i <= $this->getVolume(); $i+=10){
            echo "|";
        }
        echo "<br>";
    }
    public function fecharMenu(){
        echo "<br>Fechando Menu";
    }
    public function maisVolume(){
        if ($this->getLigado) {
            $this->setVolume($this->getVolume() + 2);
        }
    }
    public function menosVolume(){
        if ($this->getLigado) {
            $this->setVolume($this->getVolume() - 2);
        }
    }
    public function ligarMudo(){
        if ($this->getLigado and getVolume() == 0) {
            $this->setVolume($this->getVolume(50));
        }
    }
    public function desligarMudo(){
        if ($this->getLigado) {
            $this->setVolume($this->getVolume() + 2);
        }
    }
    public function play(){
        if($this->getLigado and $this->getTocando){
            $this->setTocando(true);
        }

    }
    public function pause(){
        if($this->getLigado and $this->getTocando){
            $this->setTocando(false);
        }
    }
}
?>