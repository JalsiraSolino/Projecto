<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "sistema_aluno";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if($conn->connect_error){
        die("Falha na conexao".$conn->connect_error);
    }
?>