<?php
session_start();

if (!isset($_SESSION['usuario_id'])) {
    header('Location: login.html');
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard - Take1Coffe</title>
  <link rel="stylesheet" href="style.css"> <!-- Substitua pelo seu CSS real -->
  <style>
    :root {
      --cor-principal: #6F4E37;
      --cor-hover: #5a3e2f;
      --fundo: #f5f5f5;
      --branco: #fff;
    }

    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      margin: 0;
      padding: 0;
      background: var(--fundo);
    }

    header {
      background: var(--cor-principal);
      color: white;
      padding: 15px 30px;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    header h1 {
      margin: 0;
      font-size: 1.8rem;
    }

    nav div {
      font-size: 16px;
    }

    nav a {
      color: white;
      margin-left: 15px;
      text-decoration: none;
    }

    main {
      padding: 30px;
    }

    h2 {
      color: var(--cor-principal);
      margin-bottom: 10px;
      text-align: center;
    }

    .produtos {
      display: grid;
      grid-template-columns: repeat(5, 1fr);
      gap: 20px;
      justify-content: center;
      align-items: center;
      padding: 20px;
    } 

    .produto {
      background: var(--branco);
      border-radius: 10px;
      padding: 15px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.1);
      text-align: center;
      transition: transform 0.3s;
    }

    .produto:hover {
      transform: translateY(-5px);
    }

    .produto img {
      max-width: 100%;
      height: 160px;
      object-fit: cover;
      border-radius: 6px;
    }

    .produto h3 {
      margin: 10px 0 5px;
      color: var(--cor-principal);
    }

    .produto p {
      color: #555;
      font-size: 14px;
    }

    .btn-comprar {
      background-color: var(--cor-principal);
      color: white;
      border: none;
      padding: 10px 20px;
      margin-top: 10px;
      border-radius: 5px;
      cursor: pointer;
      font-weight: bold;
    }

    .btn-comprar:hover {
      background-color: var(--cor-hover);
    }
  </style>
</head>
<body>

<header>
  <div class="logo">
    <h1>Take1Coffe</h1>
  </div>
  <nav>
    <div>
      Olá, <?php echo htmlspecialchars($_SESSION['usuario_nome']); ?> |
      <a href="logout.php">Sair</a>
    </div>
  </nav>
</header>

<main>
  <h2>Nossos Produtos</h2>
  <p style="text-align: center;">Escolha entre nossas opções deliciosas:</p>

  <div class="produtos">
    <div class="produto">
      <img src="images/cafe1.png" alt="Café Especial">
      <h3>Café Especial</h3>
      <p>Grãos premium, 100% arábica.</p>
      <button class="btn-comprar">Comprar</button>
    </div>

    <div class="produto">
      <img src="images/cafe2.png" alt="Cappuccino Premium">
      <h3>Cappuccino Premium</h3>
      <p>Cremoso e com toque de canela.</p>
      <button class="btn-comprar">Comprar</button>
    </div>

    <div class="produto">
      <img src="images/cafe3.png" alt="Expresso Forte" width="300">
      <h3>Expresso Forte</h3>
      <p>Para quem gosta de intensidade.</p>
      <button class="btn-comprar">Comprar</button>
    </div>

    <div class="produto">
      <img src="images/latte.png" alt="Latte Artístico">
      <h3>Latte Artístico</h3>
      <p>Estilo e sabor na mesma xícara.</p>
      <button class="btn-comprar">Comprar</button>
    </div>

    <div class="produto">
      <img src="images/coldbrew.png" alt="Cold Brew">
      <h3>Cold Brew</h3>
      <p>Café gelado artesanal.</p>
      <button class="btn-comprar">Comprar</button>
    </div>

    <!-- Novos produtos adicionados -->
    <div class="produto">
      <img src="images/cafe4.png" alt="Café Mocha">
      <h3>Café Mocha</h3>
      <p>Combinação perfeita de café e chocolate.</p>
      <button class="btn-comprar">Comprar</button>
    </div>

    <div class="produto">
      <img src="images/cafe5.png" alt="Café Descafeinado">
      <h3>Café Descafeinado</h3>
      <p>Sabor suave sem cafeína.</p>
      <button class="btn-comprar">Comprar</button>
    </div>

    <div class="produto">
      <img src="imagens/cafe6.jpg" alt="Café com Leite">
      <h3>Café com Leite</h3>
      <p>Clássico e reconfortante.</p>
      <button class="btn-comprar">Comprar</button>
    </div>

    <div class="produto">
      <img src="imagens/cafe7.jpg" alt="Café Gelado">
      <h3>Café Gelado</h3>
      <p>Refrescante para dias quentes.</p>
      <button class="btn-comprar">Comprar</button>
    </div>

    <div class="produto">
      <img src="imagens/cafe8.jpg" alt="Café Gourmet">
      <h3>Café Gourmet</h3>
      <p>Seleção especial de grãos.</p>
      <button class="btn-comprar">Comprar</button>
    </div>
  </div>
</main>

</
::contentReference[oaicite:0]{index=0}
 
