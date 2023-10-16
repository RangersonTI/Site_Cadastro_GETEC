<?php

    $dbHost = 'localhost';
    $dbUsername = 'root';
    $dbPassword = 'wrede';
    $dbName = 'PARTICIPANTES_GETEC';

    $connection = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);

    if($connection -> connect_errorno){
        echo "Erro ao estabelecer conexão com banco de dados";
    }
    else{
        echo "Conexão estabelecida com sucesso";
    }

?>