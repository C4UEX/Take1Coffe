<?php
// Configuração do Banco de Dados
$mysqli = new mysqli("localhost", "root", "", "take1coffe");

// Verifica se houve erro na conexão
if ($mysqli->connect_errno) {
    die("Falha na conexão: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error);
}

// Pega os dados do formulário
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

// Criptografar a senha
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

// Insere no banco de dados
$stmt = $mysqli->prepare("INSERT INTO usuarios (nome, email, senha) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $name, $email, $hashed_password);

if ($stmt->execute()) {
    echo "Usuário registrado com sucesso!";
} else {
    echo "Erro ao registrar: " . $stmt->error;
}

$stmt->close();
$mysqli->close();
?>
