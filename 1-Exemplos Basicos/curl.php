<?php

// Vamos solicitar a nossa API, chamando a url dela

// permite acessar outros servidores usando o Curl, podemos usar varios tipos de protocolos, sendo os mais usados http e https

$curl = curl_init("http://localhost/Biblioteca%20Client%20URL(cURL)/api.php"); // inicia o curl

// vamos obter os dados que o endereço da api esta nos retornando
$response = curl_exec($curl);

curl_close($curl); // fecha o recurso externo

var_dump($response);