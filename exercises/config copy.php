<?php
 
// AUTOLOAD
spl_autoload_register(function($nameClass) {
    $nameClass = str_replace('\\', '/', $nameClass);
 
    // Pasta das classes

    // Caminho do arquivo de classe a ser carregado
    $filename = $nameClass . ".php";
    
    if (file_exists($filename)) {
        require_once($filename);
    }
 
});
 
?>