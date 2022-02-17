<?php

// Como ultilizar essa biblioteca para enviar dados juntos, normalmente via POST

$curl = curl_init();
// http://localhost/Biblioteca%20Client%20URL(cURL)/2-Enviando%20Dados%20com%20Post/post.php
curl_setopt($curl, CURLOPT_URL, "http://localhost/Biblioteca%20Client%20URL(cURL)/2-Enviando%20Dados%20com%20Post/post.php");

$dados = [
    "nome" => "João",
    "email" => "joao@hcode.com.br"
];

curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_POSTFIELDS, $dados);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$resposta = curl_exec($curl);

curl_close($curl);

echo $resposta;