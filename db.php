<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$host = 'localhost';
$usuario = 'root';
$senha = 'Bacural_2025';
$banco = 'take1coffe_db';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$banco", $usuario, $senha);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erro na conexão: " . $e->getMessage());
}

include 'conexao.php';
?>
