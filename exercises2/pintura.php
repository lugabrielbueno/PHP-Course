<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculo pintura</title>
    <style>
        
        form {
            border:solid;
            border-width:4px;
            border-style:ridge;
            border-color:black;
            width:32%;
            background-color: rgba(0,0,0,0.7);
            color:white;

        }

        input#butto {
            margin-left:250px;
            margin-top:2px;
            }
    </style>
</head>
<body>
    
    <form method='get'>
    
    <label>Area a ser pintada: <input type="number" name='area' min='0'></label><br>
    <input id='butto' type='submit' value='Calcular'>
    

    <?php
    //preço galão 3,6L = 25 reais
    //preço lata 18L = 80 reais

    $area = $_GET['area'];
    if (empty($area)) {
        echo "Digite a área a ser pintada";
        
    }else {
        $necessariaTinta = $area/6;
        $comprarTinta = $necessariaTinta/18;
        if ($comprarTinta <= 0.85) {
            $comprarTinta = $necessariaTinta/3.6;
            if ($comprarTinta <= 1) {
                echo "Você precisará de apenas 1 galão de 3,6 L";
                echo "<br>";
                echo "Total previsto: R$ 25,00.";
            }else {
                $comprarTinta = ceil($comprarTinta);
                echo "Você precisará de ". $comprarTinta." galões (3,6L) de tinta.";
                echo "<br>";
                echo "Total previsto: R$ ".number_format($comprarTinta*25,2);
            }
        }else if ($comprarTinta <= 1.1){
            echo "Você precisará de apenas 1 Lata de 18L.";
            echo "<br>";
            echo "Total previsto: R$ 75,00.";
        }else {
            $comprarTinta = ceil($comprarTinta);
            echo "Você precisará de ". $comprarTinta." latas (18L) de tinta.";
            echo "<br>";
            echo "Total previsto: R$ ".number_format($comprarTinta*75,2);
        }
    }

    ?>


    </form>


</body>
</html>