<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method='get'>
        <h1>Verificador de números</h1>
        <label>Primeiro:<input type="number" name='primeiro'></label><br>
        <label>Segundo:<input type="number" name='segundo'></label><br>
        <label>Terceiro:<input type="number" name='terceiro'></label><br>
        <input type="submit" value='Verificar'>

        <?php


        if (!isset($_GET['primeiro']) or !isset($_GET['primeiro']) or !isset($_GET['primeiro'])) {
            echo "Preencha os campos acima";
        }else{
            $prim = $_GET['primeiro'];
            $seg = $_GET['segundo'];
            $ter = $_GET['terceiro'];
            if ($prim==$seg and $prim==$ter) {
                echo "Os números são todos iguais";
            }else if($prim>=$seg and $prim>=$ter) {
                echo "O número $prim é o maior";
            }else if($seg>=$prim and $seg>=$ter) {
                echo "O número $seg é o maior";
            }else if($ter>=$prim and $ter>=$seg) {
                echo "O número $ter é o maior.";
            }
        }

        ?>



    </form>


</body>
</html>