<?php
session_start();

// Verifica se o usuário está logado
if (!isset($_SESSION['nome'])) {
    header('Location: login.html');
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $produto = $_POST['produto'];
    $preco = $_POST['preco'];
} else {
    header('Location: dashboard-index.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Checkout | Take 1 Coffe</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

<header>
  <nav class="navbar">
    <h2 class="logo-text">☕ Take 1 Coffe</h2>
    <div class="nav-auth-buttons">
      <span class="user-name"><?php echo htmlspecialchars($_SESSION['nome']); ?></span>
      <a href="logout.php" class="auth-button logout-button">Sair</a>
    </div>
  </nav>
</header>

<main>
  <section class="checkout-section">
    <h2>Resumo da Compra</h2>
    <p><strong>Produto:</strong> <?php echo htmlspecialchars($produto); ?></p>
    <p><strong>Preço:</strong> R$ <?php echo htmlspecialchars($preco); ?></p>

    <p>Obrigado pela sua compra, <?php echo htmlspecialchars($_SESSION['nome']); ?>!</p>

    <a href="dashboard-index.php" class="button">Voltar à loja</a>
  </section>
</main>

</body>
</html>
