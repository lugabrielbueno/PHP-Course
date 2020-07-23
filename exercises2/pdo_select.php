<?php

$conn = new PDO("mysql:dbname=book_shop; host=localhost", "root","anarquia99");

$stmt = $conn->prepare("SELECT title,author_fname FROM books;");

$stmt->execute();

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach($results as $res) {
    foreach($res as $re){
        var_dump($re);
    }
}

?>