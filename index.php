<?php

// Inicia a sessão PHP para acessar variáveis de sessão
session_start();

// Verifica se a variável de sessão 'email' está definida (usuário está logado)
if (isset($_SESSION['email'])) {
    // Se o usuário estiver logado, redireciona para a página inicial (home.php)
    header("Location: home.php");
    // Encerra o script para evitar que o restante do código seja executado
    exit();
}

// Verifica se o formulário de login foi submetido
if (isset($_POST['login'])) {
    // Se o formulário de login foi submetido, inclui o arquivo de login.php para processamento
    require_once 'login.php';
}


?>



<!DOCTYPE html>
<html>
<head>
    <title>Login e Cadastro de Usuários</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f1f1f1;
        }

        .container {
            max-width: 400px;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1);
        }

        h2 {
            margin-top: 0;
            color: #333;
        }

        form {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            color: #555;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            width: 100%;
            background-color: #4caf50;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Login</h2>
        <form action="login.php" method="post">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            <label for="senha">Senha:</label>
            <input type="password" id="senha" name="senha" required>
            <input type="submit" value="Entrar">
        </form>

        <h2>Cadastro</h2>
        <form action="cadastrar_usuario.php" method="post">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" required>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            <label for="senha">Senha:</label>
            <input type="password" id="senha" name="senha" required>
            <input type="submit" value="Cadastrar">
        </form>
    </div>
</body>
</html>
