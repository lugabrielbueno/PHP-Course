<?php

require_once("AcoesVideo.php");

class Video implements AcoesVideo {
    private $titulo;
    private $avaliacao;
    private $views;
    private $curtidas;
    private $reproduzindo;

    public function __construct($titulo){
        $this->titulo = $titulo;
        $this->avaliacao = 1;
        $this->curtidas = 0;
        $this->Views = 0;
        $this->reproduzindo = false;
    }
    public function like(){

    }

    public function pause(){

    }

    public function play(){

    }
    public function setTitulo($titulo){
        $this->titulo = $titulo;
    }
    public function getTitulo(){
        return $this->titulo;
    }
    public function setAvaliacao($avalicao){
        $this->avaliacao = $avaliacao;
    }
    public function getAvaliacao(){
        return $this->avaliacao;
    }
    public function setViews($views){
        $this->views = $views;
    }
    public function getViews(){
        return $this->views;
    }
    public function setCurtidas($curtidas){
        $this->curtidas = $curtidas;
    }
    public function getCurtidas(){
        return $this->curtidas;
    }
    public function setReproduzindo($reproduzindo){
        $this->reproduzindo = $reproduzindo;
    }
    public function getReproduzindo() {
        return $this->reproduzindo;
    }
}
?>