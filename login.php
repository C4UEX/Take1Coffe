<?php
session_start();

// Ativar exibição de erros para debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Verifica se o usuário já está logado
if (isset($_SESSION['usuario_id'])) {
    header('Location: dashboard.php');
    exit();
}

// Conexão com o banco
$mysqli = new mysqli("localhost", "root", "", "take1coffe");

if ($mysqli->connect_error) {
    die("Falha na conexão: " . $mysqli->connect_error);
}

// Verifica se os dados foram enviados
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['email']) && isset($_POST['password'])) {
    $email = $mysqli->real_escape_string($_POST['email']);
    $senha = $mysqli->real_escape_string($_POST['password']);

    // Busca o usuário
    $sql = "SELECT * FROM usuarios WHERE email = '$email'";
    $result = $mysqli->query($sql);

    if ($result && $result->num_rows > 0) {
        $usuario = $result->fetch_assoc();

        // Verifica a senha
        if (password_verify($senha, $usuario['senha'])) {
            // Login sucesso
            $_SESSION['usuario_id'] = $usuario['id']; // ID do banco
            $_SESSION['usuario_nome'] = $usuario['nome'];

            // Redireciona para o dashboard
            header("Location: dashboardx.php");
            exit();
        } else {
            echo "Senha incorreta.";
        }
    } else {
        echo "Usuário não encontrado.";
    }
} else {
    echo "Por favor, preencha todos os campos.";
}
?>






