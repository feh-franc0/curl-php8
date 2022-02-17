<?php

echo "Solicitação via " . $_SERVER["REQUEST_METHOD"];
echo "<br/>";
echo "Seu nome é: " . $_POST["nome"];
echo "<br/>";
echo "Seu email é: " . $_POST["email"];