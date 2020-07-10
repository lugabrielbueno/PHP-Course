<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reajuste de salário</title>
</head>
<body>
    
    <form method='get'>
        <label>Salário:<input type="number" name="salario" min='0'></label><br>
        <input type='submit' value='Calcular'><br>
    <?php
    if (!isset($_GET['salario'])){
        echo "Preencha os campos acima.";
    }else {
        $salario = $_GET['salario'];
        $antSalario = $salario;
        $aumento = 0;
        $percentual = 0;
        if ($salario < 280) {
            $percentual  = 0.2;
            $aumento = $salario*$percentual;
            $salario += $aumento;
        }else if (280 <= $salario and $salario < 700 ) {
            $percentual = 0.15;
            $aumento = $salario*$percentual;
            $salario += $aumento;
        }else if ($salario >= 700 and $salario < 1500) {
            $percentual = 0.10;
            $aumento = $salario*$percentual;
            $salario += $aumento;
        }else if ($salario >= 1500) {
            $percentual = 0.05;
            $aumento = $salario*$percentual;
            $salario += $aumento;
        }
        echo "<h4>Salário antigo: R$ ".number_format($antSalario,2,$dec_point=',',$thousands_sep = '.')."</h4>" ;
        echo "<h4>Percentual do aumento: ".$percentual*100 ."% </h4>";
        echo "<h4>Aumento total: R$ ".number_format($aumento,2,$dec_point=',',$thousands_sep = '.')."</h4>";
        echo "<h3>Novo salário: R$ ".number_format($salario,2,$dec_point=',',$thousands_sep = '.'). "</h3>";
    }
    ?>

    </form>


</body>
</html>