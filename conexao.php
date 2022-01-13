<?php

$servidor = "localhost";
$usuario = "root";
$senha = "";
$bd = "bdrevisao";

try {
    $con = new PDO("mysql:dbname=".$bd.";host=".$servidor, $usuario, $senha);
} catch (PDOException $e) {
    echo "Foi gerado um erro: " . $e->getMessage();
}