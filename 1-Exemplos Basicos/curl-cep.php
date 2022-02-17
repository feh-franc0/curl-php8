<?php

// permite acessar outros servidores usando o Curl, podemos usar varios tipos de protocolos, sendo os mais usados http e https

$cep = "09750730";

$curl = curl_init();

curl_setopt($curl, CURLOPT_URL, "https://viacep.com.br/ws/{$cep}/json/");

curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

// para manipular os dados que vem da url e nao exibir os dados que tivemos acesso, use:
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$resposta = curl_exec($curl); // Joga na tela por padrao

curl_close($curl);

// echo $resposta;

// vamos tirar do json e por em array
$dados = json_decode($resposta, true);

// vamos pegar apenas a chave logradoura do array
echo $dados['logradouro'];