<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div>
    <form method='get' action="exercise6.php">
        <input type="number" min='1900' max='2020' name='birth'>
        <input type="submit" value='Verify'>
        <br>
    </form>
    <?php
        $birth = $_GET["birth"];
        $age = 2020-$birth;
            
        if ($age >= 18) {
            echo "You must to vote and you can drive";
        }elseif ($age>=16) {
            echo "You can vote and you can drive";
        }else {
            echo "You cannot vote or drive";
        }
    ?>
    
</div>
</body>
</html>