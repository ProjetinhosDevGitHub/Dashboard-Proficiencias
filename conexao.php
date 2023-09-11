<?php

/*$host = "localhost";
$user = "root";
$pass = "";
$dbname = "elvsystems";
$port = 3306;

try {
    //Conexão com a porta
    //$conn = new PDO("mysql:host=$host;port=$port;dbname=" . $dbname, $user, $pass);

    //Conexão sem a porta
    $conn = new PDO("mysql:host=$host;dbname=" . $dbname, $user, $pass);
    //echo "Conexão com banco de dados realizado com sucesso.";
} catch (PDOException $err) {
    echo "Erro: Conexão com banco de dados não realizado com sucesso. Erro gerado " . $err->getMessage();
}*/
$dbHost = "localhost";
$dbUsername = "root";
$dbpass = "";
$dbName = "elvsystems";

$conexao = new mysqli($dbHost,$dbUsername,$dbpass,$dbName);