<?php
// Esse arquivo simula uma API

// permite acessar outros servidores usando o Curl, podemos usar varios tipos de protocolos, sendo os mais usados http e https

echo json_encode([
    [
        "nome" => "João",
        "email" => "joao@hcode.com.br"
    ],
    [
        "nome" => "Glaucio",
        "email" => "glaucio@hcode.com.br"
    ],
    [
        "nome" => "Djalma",
        "email" => "ddjalma@hcode.com.br"
    ],
]);