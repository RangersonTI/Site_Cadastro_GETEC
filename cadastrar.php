<?php

    if($_SERVER["REQUEST_METHOD"] == "POST")
    {  
        $nome_completo = $_POST['nome'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $genero = $_POST['genero'];
        $cpf = $_POST['cpf'];

        $connectionBD = connection();
        $Sql = "INSERT INTO Participantes(Nome, Email, Telefone, Genero, CPF) VALUES ('$nome_completo', '$email', '$telefone', '$genero', '$cpf')";
        
        $result = mysqli_query($connectionBD, $Sql);

        if($result){
            echo "Cadastro realizado com sucesso";
        }
        else{
            echo "Erro".$result."<br>".mysqli_error($Sql);
        }

        mysqli_close($connectionBD);
    }

    function connection(){
        $dbHost = 'localhost';
        $dbUsername = 'root';
        $dbPassword = '';
        $dbName = 'PARTICIPANTES_GETEC';

        $connection = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);

        return $connection;
    }

?>