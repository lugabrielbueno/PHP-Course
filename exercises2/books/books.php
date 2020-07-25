<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book sistem</title>
    <link rel="stylesheet" href="books.css">
</head>
<body>
    <form method='get' >
    <fieldset><legend>Cadastro de livros</legend>
        <label for="titulo">Título:<input type="text" name='titulo' id='titulo' ></label>
        <label for="ano_lancamento">Ano de lançamento: <input type="number" id='ano_lancamento' name="ano_lancamento"></label>
        <label for="paginas">Páginas: <input type="number" id='paginas' min ='1' name='paginas'></label>
        <label for="autorPrimeiro">Nome do autor: <input type="text" name='autorPrimeiro' id='autorPrimeiro'></label>
        <label for="autorUltimo">Sobrenome do autor: <input type="text" name='autorUltimo' id='autorUltimo'></label><br>
    
        <label for="estoque">Quantidade: <input type="number" min='0' id='estoque' name='estoque'></label>

        <input type="submit" value='Cadastrar' id='submit'>

        <?php

            //função que conecta no banco de dados e executa o comando
            function connect($command){
                $conn = new PDO("mysql:dbname=book_shop; host=localhost","root","anarquia99");
                $stmt = $conn->prepare($command);
                $stmt->execute();
            }

            //esquivando dos NOTICES e WARNINGS
            if ((!isset($_GET['titulo']) or (empty($_GET['titulo']))) and (!isset($_GET['ano_lancamento'])or (empty($_GET['ano_lancamento']))) and (!isset($_GET['paginas'])or (empty($_GET['paginas']))) and (!isset($_GET['autorPrimeiro'])or (empty($_GET['autorPrimeiro'])))  and (!isset($_GET['autorUltimo'])or (empty($_GET['autorUltimo'])))  and (!isset($_GET['estoque']))or (empty($_GET['estoque']))) {

                echo "<h4 style='margin-top:70px;'>Preencha corretamente os campos acima!</h4>";
            }else {
                $titulo = $_GET['titulo'];
                $ano = $_GET['ano_lancamento'];
                $paginas = $_GET['paginas'];
                $autorPrimeiro = $_GET['autorPrimeiro'];
                $autorUltimo = $_GET['autorUltimo'];
                $estoque = $_GET['estoque'];

                connect("INSERT INTO books (title,author_fname,author_lname,pages,stock_quantity,released_year) VALUES ('$titulo','$autorPrimeiro','$autorUltimo',$paginas,$estoque,$ano)");
                
                echo "<h3 style='margin-top:70px;'>Livro cadastrado.</h3>";

            }


        ?>
        </fieldset>
    </form>
</body>
</html>