<?php
session_start();

// Verifica se o usuário está autenticado
if (!isset($_SESSION['usuario_id'])) {
    header("Location: login.html");
    exit();
}

// Conexão com o banco de dados
$mysqli = new mysqli("localhost", "root", "", "take1coffe");

if ($mysqli->connect_error) {
    die("Falha na conexão: " . $mysqli->connect_error);
}

// Obtém os dados do usuário
$user_id = $_SESSION['usuario_id'];
$sql = "SELECT nome, email FROM usuarios WHERE id = ?";
$stmt = $mysqli->prepare($sql);
$stmt->bind_param("i", $user_id);
$stmt->execute();
$stmt->bind_result($nome, $email);
$stmt->fetch();
$stmt->close();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Bem-vindo | Take 1 Coffe</title>
  <link rel="stylesheet" href="style.css" />
  <style>
    body {
      background-color: var(--primary-color);
      color: var(--white-color);
      font-family: var(--font-family);
      margin: 0;
    }

    .navbar {
      display: flex;
      justify-content: space-between;
      align-items: center;
      background-color: var(--background-color);
      padding: 1rem 2rem;
    }

    .navbar .logo {
      font-size: 1.5rem;
      font-weight: bold;
      color: var(--secondary-color);
    }

    .nav-auth-buttons {
      display: flex;
      align-items: center;
    }

    .auth-user-name {
      margin-right: 10px;
      font-weight: bold;
      color: var(--white-color);
    }

    .logout-button {
      background-color: var(--secondary-color);
      color: var(--primary-color);
      font-size: var(--font-size-s);
      font-weight: var(--font-weight-medium);
      border: none;
      border-radius: var(--border-radius-s);
      padding: 0.5rem 1rem;
      cursor: pointer;
      transition: 0.3s;
      text-transform: uppercase;
    }

    .logout-button:hover {
      background-color: var(--accent-color);
    }

    .welcome-container {
      background: var(--background-color);
      padding: 2rem;
      border-radius: var(--border-radius-m);
      box-shadow: 0 0 20px rgba(0, 0, 0, 0.3);
      width: 100%;
      max-width: 400px;
      text-align: center;
      margin: 5rem auto;
    }

    .welcome-container h1 {
      color: var(--secondary-color);
      margin-bottom: 1rem;
      font-size: 1.8rem;
    }

    .welcome-container p {
      font-size: 1rem;
      margin-bottom: 1.5rem;
    }
  </style>
</head>
<body>

  <nav class="navbar">
    <div class="logo">Take 1 Coffe</div>
    <div class="nav-auth-buttons">
      <span class="auth-user-name">👋 Olá, <?php echo htmlspecialchars($nome); ?></span>
      <a href="logout.php"><button class="logout-button">Sair</button></a>
    </div>
  </nav>

  <div class="welcome-container">
    <h1>Bem-vindo, <?php echo htmlspecialchars($nome); ?>!</h1>
    <p>Email: <?php echo htmlspecialchars($email); ?></p>
  </div>

  <script>
    // Redireciona para o site principal depois de 5 segundos
    setTimeout(function() {
    window.location.href = "dashboard-indexx.php";
    }, 5000);
  </script>

</body>
</html>