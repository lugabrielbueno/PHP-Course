<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div>    

    <?php
        $valor = $_GET["v"];
        $rq = sqrt($valor);
        echo "A raiz de $valor é ".round($rq,2);
    ?>

</div>
</body>
</html>