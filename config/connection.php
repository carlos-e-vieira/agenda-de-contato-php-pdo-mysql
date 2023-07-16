<?php

    $host = 'localhost';
    $dbname = 'agenda';
    $user = 'root';
    $password = 'root';

    try {
        $conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);

        // Ativar modo de erros
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        $error = $e->getMessage();
        echo "Erro: $error";
    }