<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method='get' action="exercise11.php">
    
    Numero: <input type="number" name='num'>
    <fieldset><legend>Operação</legend>
        <input type="radio" name='oper' value='1' id='dobro'>
        <label for="dobro">Dobro</label>
        <input type="radio" name='oper' value='2' id='cubo'>
        <label for="cubo">Cubo</label>
        <input type="radio" name='oper' value='3' id='raiz'>
        <label for="raiz">Raiz</label>
        <input type="submit" value="Go!">

    </fieldset>    
    </form>
    <?php
        $oper = $_GET["oper"];
        $num = $_GET["num"];
        switch ($oper) {
            case '1':
                $a = $num*2;
                break;
            case '2':
                $a = $num**3;
                break;
            case '3':
                $a = $num**(1/2);
                break;
            }
            echo "The result is $a";
    ?>
</body>
</html>