<?php

$conn = new PDO("mysql:dbname=book_shop; host=localhost", "root","anarquia99");

$stmt = $conn->prepare("INSERT INTO books (title,author_fname,author_lname,released_year,stock_quantity,pages) VALUES ('A brief history of time','Stephen','Hawking',1978,49,280)");

$stmt->execute();

echo "Feito!";

?>