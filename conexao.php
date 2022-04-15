<?php

$host = "localhost";
$user = "root";
$pass = "";
$dbname = "sistemalogin";
$port = 3306;

try{
    // // Conxao com a porta
    // $conn = new PDO("mysql:host=$host;port=$port;dbname=" . $dbname, $user, $pass);
    // echo "Conexão com banco de dados realizado com sucesso";
    // Conexao sem a porta
    $conn = new PDO("mysql:host=$host;dbname=" . $dbname, $user, $pass);
    echo "Conexão com banco de dados realizado com sucesso";
} catch(PDOException $erro){
    echo "Erro: Conexão com banco de dados não realizado com sucesso. Erro gerando"
    . $erro->getMessage();
    
}