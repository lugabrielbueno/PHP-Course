<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuário e senha</title>
</head>
<body>
    <form method='get'>
    <label>Usuário:<input type="text" name='user'  minlength='3' maxlength='15'></label><br>
    <label>Senha:<input type="password" name='pass' minlength='6' maxlength='20' style="margin-left:10px;"></label><br>
    <label><input type="submit" value='Verificar'></label><br>

    <?php
        $user = $_GET['user'];
        $pass = $_GET['pass'];

        if($user == $pass) {
            echo "A senha deve se diferente do nome de usuário.";
        }else {
            echo "Cadastrado com sucesso.";
        }
    
    ?>


    </form>



</body>
</html>