<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Download arquivo</title>
    <style>
        form {
            border:double;
            width:45%;
        }
        label {
            padding: 5px;
            font-size:15pt;
        }
    </style>
</head>
<body>
<form method='get'>
<label>Tamanho do arquivo: <input id ='um' type="number" min='0' name='size' style="width: 70px;" />MB</label>  <br>
<label>Velocidade: <input id ='dois' type="number" min='0' name='vel' style="width: 150px;" />MB/s</label> 
<input type="submit" value="Calcular" style="margin-left:200px;">


<?php
    if ((isset($_GET['size'])) and (isset($_GET['vel']))) {
        $fileSize = $_GET['size'];
        $speed = $_GET['vel'];
        if (!empty($fileSize) and (!empty($speed))){
            $time = $fileSize/$speed;
            $time = round($time/60);
            echo "<br>Tempo aproximado de download: $time minutos";
        } else {
              echo "<br>Preencha os campos acima!";
    }
    }else {
        echo "<br>Preencha os campos acima!";

    }


?>
</form>




</body>
</html>