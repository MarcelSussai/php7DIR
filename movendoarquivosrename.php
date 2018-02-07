<?php

$dir1 = "folder_01";
$dir2 = "folder_02";

if (!is_dir($dir1)) mkdir($dir1);
if (!is_dir($dir2)) mkdir($dir2);

$filename = "arquivo.txt";
$separador = DIRECTORY_SEPARATOR;

if (!file_exists($dir1.$separador.$filename)){
    $file = fopen($dir1.$separador.$filename, "w+");
    fwrite($file, date("Y-m-d H:i:s"));
    fclose($file);
} 

rename(
    $dir1.$separador.$filename,     // Origem
    $dir2.$separador.$filename      // Destino
);
echo "Arquivo Movido com sucesso";