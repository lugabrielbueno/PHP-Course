<?php

$conn = new PDO("mysql:dbname=book_shop; host=localhost", "root","anarquia99");

$stmt = $conn->prepare("SELECT * FROM books;");

$stmt->execute();

$results =$stmt->fetchAll(PDO::FETCH_ASSOC);

foreach($results as $result) {
    var_dump($result);
}

?>