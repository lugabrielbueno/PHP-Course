<?php

$images = scandir("images");

//var_dump($images);

$data = array();

foreach ($images as $img) {
    if (!in_array($img, array(".",".."))) {

        $filename = 'images'.DIRECTORY_SEPARATOR.$img;

        $info = pathinfo($filename);
        $info['size'] = filesize($filename);
        $info['modified'] = date('d/m/Y H:i:s', filemtime($filename));
        $info['url'] = 'http://localhost/PHP-Course/exercises/images'.str_replace("\\","/",$filename);

        array_push($data,$info);
        
    }
}

echo json_encode($data);

/*
$name = 'images';

if (!is_dir($name)) {
    mkdir($name);
    echo "Diretório $name criado com sucesso.";


}else {
    echo "Já existe o diretório: $name";
}
*/
?>

