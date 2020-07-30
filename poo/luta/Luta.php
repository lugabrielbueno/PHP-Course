<?php

class Luta {
    private $desafiado;
    private $desafiante;
    private $rounds;
    private $aprovada;

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
                    echo "Empatou";
                    $this->desafiante->empatarLuta();
                    $this->desafiado->empatarLuta();
                case 1:
                    echo $this->desafiado->getNome()." Ganhou";
                    $this->desafiado->ganharLuta();
                    $this->desafiante->perderLuta();
                case 2:
                    echo $this->desafiante->getNome()." Ganhou";
                    $this->desafiante->ganharLuta();
                    $this->desafiado->perderLuta();
            }
        }else{
            echo "A luta não pode acontecer";
        }

    }
}

?>