<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Coffe Website | Take 1 Coffe</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
  <link rel="stylesheet" href="style.css" />
</head>

<body>

<header>
  <nav class="navbar">
    <a href="#" class="nav-logo">
      <h2 class="logo-text">☕ Take 1 Coffe</h2>
    </a>

    <ul class="nav-menu">
      <button id="menu-close-button" class="fas fa-times"></button>

      <li class="nav-item"><a href="#" class="nav-link">Home</a></li>
      <li class="nav-item"><a href="#about" class="nav-link">Sobre</a></li>
      <li class="nav-item"><a href="#menu" class="nav-link">Menu</a></li>
      <li class="nav-item"><a href="#testimonials" class="nav-link">Depoimentos</a></li>
      <li class="nav-item"><a href="#gallery" class="nav-link">Galeria</a></li>
      <li class="nav-item"><a href="#contact" class="nav-link">Contato</a></li>
    </ul>

    <div class="nav-auth-buttons">
      <?php if (isset($_SESSION['nome'])): ?>
        <div class="user-info">
          <span class="user-name"><?php echo htmlspecialchars($_SESSION['nome']); ?></span>
          <a href="logout.php" class="auth-button logout-button">Sair</a>
        </div>
      <?php else: ?>
        <a href="login.html" class="auth-button login-button">Login</a>
        <a href="register.html" class="auth-button register-button">Registrar</a>
      <?php endif; ?>
      </div>





    <button id="menu-open-button" class="fas fa-bars"></button>
  </nav>
</header>

    <main>
      
      <section class="hero-section">
        <div class="section-content">
          <div class="hero-details">
            <h2 class="title">Take 1 Coffee</h2>
            <h3 class="subtitle">Deixe seu dia maravilhoso com nosso café especial!</h3>
            <p class="description">Bem-vindo ao nosso paraíso do café, onde cada grão conta uma história e cada xícara desperta alegria.</p>

            <div class="buttons">
              <a href="login.html" class="button order-now">Encomende</a>
              <a href="#contact" class="button contact-us">Contate-nos</a>
            </div>
          </div>
          <div class="hero-image-wrapper">
            <img src="images/coffee-hero-section.png" alt="Coffee" class="hero-image" />
          </div>
        </div>
      </section>

      <section class="about-section" id="about">
        <div class="section-content">
          <div class="about-image-wrapper">
            <img src="images/about-image.jpg" alt="Sobre" class="about-image" />
          </div>
          <div class="about-details">
            <h2 class="section-title">Sobre nós</h2>
            <p class="text">Na Take 1 Coffee, no Brasil, orgulhamo-nos de ser um destino obrigatório tanto para os amantes do café como para os que procuram conversar. Dedicamo-nos a proporcionar uma experiência de café excepcional em um ambiente aconchegante e convidativo, onde os hóspedes podem relaxar, descontrair e aproveitar seu tempo com conforto.</p>
            <div class="social-link-list">
              <a href="#" class="social-link"><i class="fa-brands fa-facebook"></i></a>
              <a href="#" class="social-link"><i class="fa-brands fa-instagram"></i></a>
              <a href="#" class="social-link"><i class="fa-brands fa-x-twitter"></i></a>
            </div>
          </div>
        </div>
      </section>

      <section class="menu-section" id="menu">
        <h2 class="section-title">Nosso cardápio</h2>
        <div class="section-content">
          <ul class="menu-list">
            <li class="menu-item">
              <img src="images/hot-beverages.png" alt="Bebidas Quentes" class="menu-image" />
              <div class="menu-details">
                <h3 class="name">Bebidas Quentes</h3>
                <p class="text">Café fumegante para torná-lo fresco e leve.</p>
              </div>
            </li>
            <li class="menu-item">
              <img src="images/cold-beverages.png" alt="Bebidas Geladas" class="menu-image" />
              <div class="menu-details">
                <h3 class="name">Bebidas Geladas</h3>
                <p class="text">Café frio cremoso e espumoso para deixar você fresco.</p>
              </div>
            </li>
            <li class="menu-item">
              <img src="images/refreshment.png" alt="Refresco" class="menu-image" />
              <div class="menu-details">
                <h3 class="name">Refresco</h3>
                <p class="text">Frutas e bebida refrescante gelada para fazer você se sentir revigorado.</p>
              </div>
            </li>
            <li class="menu-item">
              <img src="images/special-combo.png" alt="Combos Especiais" class="menu-image" />
              <div class="menu-details">
                <h3 class="name">Combos Especiais</h3>
                <p class="text">Seus favoritos para comer e beber.</p>
              </div>
            </li>
            <li class="menu-item">
              <img src="images/desserts.png" alt="Sobremesa" class="menu-image" />
              <div class="menu-details">
                <h3 class="name">Sobremesa</h3>
                <p class="text">Sacie o seu paladar e leve-o a um deleite culinário.</p>
              </div>
            </li>
            <li class="menu-item">
              <img src="images/burger-frenchfries.png" alt="Hambúrguer e batatas fritas" class="menu-image" />
              <div class="menu-details">
                <h3 class="name">Hambúrguer e batatas fritas</h3>
                <p class="text">Lanches rápidos para satisfazer sua fome de tamanho pequeno.</p>
              </div>
            </li>
          </ul>
        </div>
      </section>

      <section class="testimonials-section" id="testimonials">
        <h2 class="section-title">Depoimentos</h2>
        <div class="section-content">
          <div class="slider-container swiper">
            <div class="slider-wrapper">
              <ul class="testimonials-list swiper-wrapper">
                <li class="testimonial swiper-slide">
                  <img src="images/user-1.jpg" alt="Julia" class="user-image" />
                  <h3 class="name">Julia</h3>
                  <i class="feedback">"Adorei o Hambúrguer. Perfeitamente equilibrado e saboroso. Pedirei novamente!"</i>
                </li>
                <li class="testimonial swiper-slide">
                  <img src="images/user-2.jpg" alt="Matheus" class="user-image" />
                  <h3 class="name">Matheus</h3>
                  <i class="feedback">"Excelente mistura de café expresso! Sabor suave e ousado. Transporte rápido também!"</i>
                </li>
                <li class="testimonial swiper-slide">
                  <img src="images/user-3.jpg" alt="Renan" class="user-image" />
                  <h3 class="name">Renan</h3>
                  <i class="feedback">"Fantástico sabor. Fresco e aromático. Envio rápido!"</i>
                </li>
                <li class="testimonial swiper-slide">
                  <img src="images/user-4.jpg" alt="Alice" class="user-image" />
                  <h3 class="name">Alice</h3>
                  <i class="feedback">"Excelente qualidade! Refresco fresquinho e entrega rápida. Altamente recomendado."</i>
                </li>
                <li class="testimonial swiper-slide">
                  <img src="images/user-5.jpg" alt="Antonio" class="user-image" />
                  <h3 class="name">Antonio</h3>
                  <i class="feedback">"Melhor descafeinado que experimentei! Suave e saboroso. Chegou prontamente."</i>
                </li>
              </ul>

              <div class="swiper-pagination"></div>
              <div class="swiper-slide-button swiper-button-prev"></div>
              <div class="swiper-slide-button swiper-button-next"></div>
            </div>
          </div>
        </div>
      </section>

      <section class="gallery-section" id="gallery">
        <h2 class="section-title">Galeria</h2>
        <div class="section-content">
          <ul class="gallery-list">
            <li class="gallery-item"><img src="images/gallery-1.jpg" alt="Galeria" class="gallery-image" /></li>
            <li class="gallery-item"><img src="images/gallery-2.jpg" alt="Galeria" class="gallery-image" /></li>
            <li class="gallery-item"><img src="images/gallery-3.jpg" alt="Galeria" class="gallery-image" /></li>
            <li class="gallery-item"><img src="images/gallery-4.jpg" alt="Galeria" class="gallery-image" /></li>
            <li class="gallery-item"><img src="images/gallery-5.jpg" alt="Galeria" class="gallery-image" /></li>
            <li class="gallery-item"><img src="images/gallery-6.jpg" alt="Galeria" class="gallery-image" /></li>
          </ul>
        </div>
      </section>

      <section class="contact-section" id="contact">
        <h2 class="section-title">Contate-nos</h2>
        <div class="section-content">
          <ul class="contact-info-list">
            <li class="contact-info"><i class="fa-solid fa-location-crosshairs"></i> <p>Rua XXXX, São Paulo - SP</p></li>
            <li class="contact-info"><i class="fa-regular fa-envelope"></i> <p>take1coffe@gmail.com</p></li>
            <li class="contact-info"><i class="fa-solid fa-phone"></i> <p>(11) 9 9999-9999</p></li>
            <li class="contact-info"><i class="fa-regular fa-clock"></i> <p>Segunda a sexta: 09h às 17h</p></li>
            <li class="contact-info"><i class="fa-regular fa-clock"></i> <p>Sábado: 10h às 15h</p></li>
            <li class="contact-info"><i class="fa-regular fa-clock"></i> <p>Domingo: Fechado</p></li>
            <li class="contact-info"><i class="fa-solid fa-globe"></i> <p>www.Take1Coffe.com</p></li>
          </ul>

          <form action="http://localhost:5000/enviar-sugestao" class="contact-form" method="POST">
            <input type="text" placeholder="Seu nome" class="form-input" required />
            <input type="email" placeholder="Seu email" class="form-input" required />
            <textarea placeholder="Sua mensagem" class="form-input" required></textarea>
            <button type="submit" class="button submit-button">Enviar</button>
          </form>
        </div>
      </section>

      <footer class="footer-section">
        <div class="section-content">
          <p class="copyright-text">
            &copy; 2024 Take 1 Coffee. Todos os direitos reservados.
          </p>

          <div class="social-link-list">
            <a href="#" class="social-link"><i class="fa-brands fa-facebook"></i></a>
            <a href="#" class="social-link"><i class="fa-brands fa-instagram"></i></a>
            <a href="#" class="social-link"><i class="fa-brands fa-x-twitter"></i></a>
          </div>

          <p class="policy-text">
            <a href="#" class="policy-link">Política de Privacidade</a>
            <span class="separator">•</span>
            <a href="#" class="policy-link">Política de Reembolso</a>
          </p>
        </div>
      </footer>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="script.js"></script>
  </body>
</html>