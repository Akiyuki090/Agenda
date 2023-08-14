<?php

    $host = "localhost";
    $dbname = "Agenda";
    $user = "root";
    $pass = "secret";

    try {
        $conn = new PDO("mysql:host=$host;dbname=$dbname;unix_socket=/var/run/mysqld/mysqld.sock", $user, $pass); //socket Unix

        // ativar modo de erros
        $conn-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e) {
        // erro na conexão
        $error = $e->getMessage();
        echo "Erro: $error";
    }

?>