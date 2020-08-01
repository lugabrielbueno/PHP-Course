<?php

class Luta {
    private $desafiado;
    private $desafiante;
    private $rounds;
    private $aprovada;


    public function setDesafiado($desafiado){
        $this->desafiado = $desafiado;
    }
    public function getDesafiado(){
        return $this->desafiado;
    }
    public function setDesafiante($desafiante){
        $this->desafiante = $desafiante;
    }
    public function getDesafiante(){
        return $this->desafiante;
    }
    public function setRounds($rounds){
        $this->rounds = $rounds;
    }
    public function getRounds(){
        return $this->rounds;
    }
    public function marcarLuta($l1,$l2){
        if(($l1->getCategoria() == $l2->getCategoria()) and ($l1!=$l2)){
            $this->aprovada = true;
            $this->desafiado = $l1;
            $this->desafiante = $l2;
        }else {
            $this->aprovada = false;
            $this->desafiado = NULL;
            $this->desafiante = NULL;
        }
    }
    public function lutar(){
        if ($this->aprovada){
            $this->desafiado->apresentar();
            $this->desafiante->apresentar();
            $vencedor = rand(0,2);
            switch($vencedor){
                case 0:
                    echo "<br><-------------------------------------------------->";
                    echo "<br>Empatou";
                    $this->desafiante->empatarLuta();
                    $this->desafiado->empatarLuta();
                    break;
                case 1:
                    echo "<br><-------------------------------------------------->";
                    echo "<br>".$this->desafiado->getNome()." Ganhou";
                    $this->desafiado->ganharLuta();
                    $this->desafiante->perderLuta();
                    break;
                case 2:
                    echo "<br><-------------------------------------------------->";
                    echo "<br>".$this->desafiante->getNome()." Ganhou";
                    $this->desafiante->ganharLuta();
                    $this->desafiado->perderLuta();
                    break;
            }
        }else{
            echo "A luta não pode acontecer";
        }

    }
}

?>