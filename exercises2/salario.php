<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculo de salário</title>
    <style>
        h4 {
            margin-bottom: -18px;
            font-size: 14pt;
        }
    </style>

</head>
<body>
    <form method='get'>
        <label>Valor por hora: <input type="number" name='valorhr' min='0'></label><br>
        <label>Horas trabalhadas no mês: <input type="number" name='tothr' min='0'></label>
        <input type='submit' value='Calcular'>

    </form>
</body>
</html>
<?php
    $horasTraba = $_GET['tothr'];
    $precoHora = $_GET['valorhr'];
    $salarioBruto = $precoHora * $horasTraba;
    $sindicato = $salarioBruto*0.05;
    $inss = $salarioBruto*0.08;
    $impostoRenda = $salarioBruto*0.11;
    $salarioLiqui = $salarioBruto - $sindicato - $inss - $impostoRenda;
    $salarioBruto = $precoHora * $horasTraba;      
    
    echo "<h4>Valor recebido por hora trabalhada: R$ ".number_format($precoHora,2)."</h4> ";
    echo "<h4>Total de horas trabalhadas neste mês: $horasTraba horas</h4>";
    echo "<h4>Salario Bruto: R$ ".number_format($salarioBruto,2)."</h4>";
    echo "<h4>Imposto de renda: R$ ".number_format($impostoRenda,2)."</h4>";
    echo "<h4>Sindicato: R$ ".number_format($sindicato,2)."</h4>";
    echo "<h4>INSS: R$ ".number_format($inss,2)."</h4>";
    echo "<br>";
    echo "<h2>Salário líquido: ".number_format($salarioLiqui,2)."</h3>";
        

?>