<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Libro Network - Nuestros libros</title>

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous" defer></script>

  <!-- JQuery -->
  <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

  <!-- Font Awesome -->
  <script src="https://kit.fontawesome.com/4a2b2e0d5d.js" crossorigin="anonymous"></script>
  
  <!-- Stylesheets -->
  <link rel="stylesheet" href="./stylesheets/styles.css">
  <link rel="stylesheet" href="./stylesheets/breakpoints.css">

  <!-- Scripts -->
  <script src="./src/index.js"></script>
</head>
<body>
  <header>
    <nav class="navbar navbar-expand-lg navbar-dark">
      <a class="navbar-brand navbar-size" href="">Libro Network</a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggler" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id=navbarToggler>
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
              <a class="nav-link" href="./index.php">Home</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="./books.php">Nuestros libros</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="./authors.php">Autores</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="./contact.php">Contáctanos</a>
          </li>
        </ul>
      </div>
    </nav>
  </header>

  <main>
    <h1 class="title">Explora Nuestra Colección</h1>
    <p class="subtitle">Descubre libros fascinantes que te llevarán a mundos inexplorados.</p>

    <div class="book-card-container">
      <?php
      include "model/connection.php";

      if (isset($_GET['page']) && is_numeric($_GET['page'])) {
        $pagina_actual = $_GET['page'];
      } else {
          $pagina_actual = 1;
      }

      $sql = "SELECT titulo, tipo, precio, notas, fecha_pub FROM titulos ORDER BY titulo asc";

      foreach ($conn->query($sql) as $row) {
        $fecha_pub_formateada = strftime("%d de %B de %Y", strtotime($row['fecha_pub']));
      ?>
        <div class="book-card">
          <div class="book-card-image-container">
            <img class="book-card-image" src="./assets/book_placeholder.png" alt="Book picture" />
          </div>

          <div class="book-card-content">
            <div class="book-details">
              <div>
                <h2 class="book-card-title"><?php echo $row['titulo']; ?></h2>
                <p class="book-card-text"><?php echo $row['notas']; ?></p>'
              </div>
              <div>
                <p class="book-card-text"><strong>Género:</strong> <?php echo $row['tipo']; ?></p>
                <p class="book-card-text">Publicado el <?php echo $fecha_pub_formateada; ?></p>
              </div>
            </div>
            <div class="detail-button-container">
              <h2 class="book-card-price">$<?php echo $row['precio']; ?></h2>
              <button class="cta-button">Detalles</button>
            </div>
          </div>
        </div>
      <?php
      }
      ?>
    </div>
  </main>

  <footer>
    <div id="footer" class="d-flex flex-column align-items-center justify-content-center">
        <div class="d-flex gap-3">
            <a class="social-icon" href="https://www.linkedin.com/in/emmanuel-campos-0b4985232/" target="_blank"><i class="fa-brands fa-linkedin fa-2x footer-icon"></i></a>
            <a class="social-icon" href=""><i class="fa-brands fa-instagram fa-2x footer-icon" target="_blank"></i></a>
            <a class="social-icon" href=""><i class="fa-brands fa-x-twitter fa-2x footer-icon" target="_blank"></i></a>
            <a class="social-icon" href="mailto:ecampospaulino@gmail.com"><i class="fa-sharp fa-solid fa-envelope fa-2x footer-icon"></i></a>
        </div>

        <div class="text-center mt-4">
            <p class="text-white mb-0">ITLA | Desarrollo de Software</p>
            <p class="text-white mb-0">© Emmanuel Campos - Derechos Reservados | Santo Domingo, 2024</p>
        </div>
    </div>
  </footer>
</body>
</html>