<?php

    if(isset($_POST['submit']))
    {   
        print_r($_POST['nome']);
        print_r($_POST['email']);
        print_r($_POST['telefone']);
        $genero = $_POST['genero'];
        $cpf = $_POST['cpf'];


        $nome_completo = $_POST['nome'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $genero = $_POST['genero'];
        $cpf = $_POST['cpf'];
        
        include_once('configBD.php');
        
        $result = mysqli_query($connection, "INSERT INTO Participantes(Nome, Email, Telefone, Genero, CPF) 
                                VALUES ('$nome_completo', '$email', '$telefone', '$genero', '$cpf')");
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Cadastro de Participante</title>
</head>
<header>
    <div class="cabecalho">GETEC</div>
</header>
<br><br><br><br><br><br><br><br>
<body>
    <div class="container">
        <h1>Cadastro do Participante</h1>
        <form action="index.php" method="POST" id="CadastroPartGetec">
            <label for="nome">Nome Completo:</label>
            <input type="text" id="nome" name="nome" required>

            <label for="email">E-mail:</label>
            <input type="email" id="email" name="email" required>

            <label for="telefone">Telefone:</label>
            <input type="number" id="telefone" name="telefone" required>

            <label for="genero">Gênero</label>
            <select name="genero" id="genero">
                <option value="Masculino">Masculino</option>
                <option value="Feminino">Feminino</option>
                <option value="Prefiro não dizer">Prefiro não dizer</option>
            </select>

            <label for="cpf">CPF:</label>
            <input type="text" id="cpf" name="cpf" required>

            <div id="button_local"><button id="button_local_cadastro" type="submit" name="submit">Concluir Cadastro</button></div>
        </form>
    </div>
    <div id="teste">
        <div id="regressive_Count">
            <div id="dias"><label id="regressive_Count_label" for="dias">dias</label></div>
            <div id="horas"></div>
            <div id="minutos"></div>
            <div id="segundos"></div>
        </div>
    </div>
    <script src="validation.js"></script>
    <script src="regressive_Count_for_Getec.js"></script>
</body>
</html>