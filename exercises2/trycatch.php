<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tratando erros</title>
</head>
<body>
    <form method='get'>
    <label>Name:<input type='text' maxlength='20' minlength='8' name='name'></label><br>
    <label>Age:<input type='number' min='0' max='150' name='age'></label><br>
    <input type="submit" value='Exibir'><br>

    <?php
    
    try {
        if (isset($_GET['name']) or isset($_GET['age'])) {
            throw new Exception("sfd");
        }else if (empty($_GET['name']) or empty($_GET['age'])){
            throw new Exception('Preencha os campos acima.');
        }else {
            $name = $_GET['name'];
            $age = $_GET['age'];
            echo "<h1>Your name is ".ucfirst($name)." and your age is $age<h2>";
        }
    }catch (Exception $err) {
        echo $err->getMessage();
    }
    ?>
</form>
</body>
</html>