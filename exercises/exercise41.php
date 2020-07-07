<?php

$filename = 'usuarios.csv';

if (file_exists($filename)) {

    $file = fopen($filename,'r');

    while (fgets($file)) {
        $lines = fgets($file);
        echo $lines;
    }



}else{
    echo 'not exist';
}

?>