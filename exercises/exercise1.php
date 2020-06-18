<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php

        $n1 = $_GET["n1"];
        $n2 = $_GET["n2"];
        $n3 = $_GET["n3"];
        $m = ($n1+$n2+$n3)/3;
        $m = round($m,1);
        $sit = 'situacao';
        ($m>=7)?$situacao = 'Aprovado':$situacao='Reprovado';
        echo "A média do aluno é $m e ele está $situacao.";

    ?>

</body>
</html>