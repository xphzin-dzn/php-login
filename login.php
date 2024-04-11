<?php
include('conexao.php');
session_start();

// Recebe os dados do formulário
$email = $_POST['email'];
$senha = $_POST['senha'];

// Busca o usuário no banco de dados
$sql = "SELECT * FROM users WHERE email='$email'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    if (password_verify($senha, $row['senha'])) { // Verifica a senha
        $_SESSION['nome'] = $row['nome']; // Guarda o nome na sessão
        header("Location: home.php"); // Redireciona para a página de home
    } else {
        echo "Senha incorreta";
    }
} else {
    echo "Usuário não encontrado";
}

$conn->close();
?>