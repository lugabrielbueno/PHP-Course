<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Training php</title>
</head>
<body>
    <form method='get' action="exercise9.php">
    <input type="number" name='n1'>
    <input type="number" name='n2'>
    <input type="submit" value='Calculate'>
    </form>
    <?php
        $n1 = $_GET['n1'];
        $n2 = $_GET['n2'];
        $sum = $n1+$n2;
        $mult = $sum*$n1;

        echo "The sum is $sum, and the multiply of $n1 by $sum is $mult";

    ?>
</body>
</html>