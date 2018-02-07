<?php
// curl
// viacep - serviço de consulta a cep

$cep = "18074145";
$link = "https://viacep.com.br/ws/$cep/json/";

$ch = curl_init($link);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0); // 0 para funcionar https

$resposta = curl_exec($ch);
curl_close($ch);

$data = json_decode($resposta, true);
var_dump($data);