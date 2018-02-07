<?php
$data = array(
    "chave1"=>"valor da chave 01"
);

setcookie("NOME_DO_COOKIE", json_encode($data), time() + 3600);
echo "ok";