<?php
    //Configuração da conexão com o banco de dados
    $dbHost = 'localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'projetoecomerce';

    $conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

    //Verificador de conexão
    if ($conexao->connect_error) {
        echo "Erro de conexão";
    }
    else{
        echo "Conexão efetuada com sucesso";
    }

?>
