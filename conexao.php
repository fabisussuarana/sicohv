<?php

    // Dados para conexão com banco
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "sicohv";
    $dsn = "mysql:host=" . $servername . ";dbname=" . $database;

    // Criar conexão com o banco
    $conn = new PDO($dsn, $username, $password);

?>