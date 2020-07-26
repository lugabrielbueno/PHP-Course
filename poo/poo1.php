<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 01</title>
</head>
<body>
    
    <?php

    class Caneta {
        public $modelo;
        public $cor;
        public $ponta;
        public $carga;
        public $tampada;

        function rabiscar() {
            if ($this->tampada) {
                echo "ERRO, CANETA TAMPADA";
            }else {
                echo "<p>Estou rabiscando</p>";
            }
            
        }
        function tampar() {
            $this->tampada = true;
        }
        function destampar() {
            $this->tampada = false;
        }
    }

    $c1 = new Caneta;
    $c1->cor = 'Azul';
    $c1->ponta = '0.5';
    $c1->carga = '35%';
    $c1->tampada = true;



    $c2 = new Caneta;
    $c2->cor = 'Vermelha';
    $c2->ponta = '0.7';
    $c2->carga = '50%';
    $c2->tampada =true;

    var_dump($c1);
    var_dump($c2);
    ?>

</body>
</html>