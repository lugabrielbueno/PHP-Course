<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form>
        <input type="number" min='1' max='9999' name='multitable'>
        <input type="submit" value="Calculate">
    </form>
    <?php 
        $number = $_GET["multitable"];
        echo "$number X 1 = ".($number*1)."<br>";
        echo "$number X 2 = ".($number*2)."<br>";
        echo "$number X 3 = ".($number*3)."<br>";
        echo "$number X 4 = ".($number*4)."<br>";
        echo "$number X 5 = ".($number*5)."<br>";
        echo "$number X 6 = ".($number*6)."<br>";
        echo "$number X 7 = ".($number*7)."<br>";
        echo "$number X 8 = ".($number*8)."<br>";
        echo "$number X 9 = ".($number*9)."<br>";
        echo "$number X 0 = ".($number*10)."<br>";
        ?>
</body>
</html>