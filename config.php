<?php

    $dbHost = 'viaduct.proxy.rlwy.net';
    $dbUsername = 'root';
    $dbPassword = 'PFZHNckCbZYcEjrmWGSeuOxJXnqLBOmD';
    $dbName =  'railway';

    $conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

    if ($conexao->connect_error)
    {
       echo "Erro";
    }
    else
    {
       echo "Conexão efetuada com sucesso";
    }

