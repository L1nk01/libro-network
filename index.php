<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Libro Network - Home</title>

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
    <?php include "./layout/navbar.php" ?>
  </header>

  <article id="home-image">
    <div></div>

    <div>
      <h1>Bienvenido a nuestra biblioteca virtual</h1>
      <p class="typewriter">Explora nuestra colección de libros y descubre nuevos autores</p>
    </div>

    <div>
      <i class="fa-solid fa-chevron-down"></i>
    </div>
  </article>
  
  <article id="books-section" class="home-container">
    <div class="left-column">
      <h1>Descubre tu próximo libro</h1>
      <p>Explora nuestra colección de libros y encuentra tus próximas lecturas favoritas. Con la capacidad de buscar libros por género, título o autor, estamos aquí para ayudarte a encontrar exactamente lo que estás buscando. Sumérgete en nuestra amplia selección de obras literarias y déjate llevar por historias fascinantes que te transportarán a mundos increíbles. ¡Bienvenido a una experiencia de lectura emocionante y enriquecedora!</p>
      <a href="./books.php"><button class="cta-button">Ver Libros</button></a>
    </div>/
    <div class="right-column">
      <img class="img-right-border" src="./assets/book_section_image.jpg" alt="Book section image" />
    </div>
  </article>

  <article id="authors-section" class="home-container">
    <div class="left-column-reverse">
      <h1>Explora el mundo de los autores</h1>
      <p>Sumérgete en el fascinante mundo de los autores y descubre las mentes creativas detrás de tus libros favoritos. En esta sección, encontrarás información sobre autores famosos, sus obras más destacadas y su impacto en la literatura. Desde clásicos atemporales hasta autores contemporáneos, te invitamos a explorar la diversidad y la riqueza de la escritura a través de las palabras de estos talentosos individuos.</p>
      <a href="./authors.php"><button class="cta-button">Ver Autores</button></a>
    </div>
    <div class="right-column-reverse">
      <img class="img-left-border" src="./assets/author_section_image.jpg" alt="Author section image" />
    </div>
  </article>

  <article id="contact-section" class="home-container">
    <div class="left-column">
      <h1>¡Conéctate con nosotros!</h1>
      <p>Estamos aquí para escucharte. Si tienes alguna pregunta, comentario o sugerencia, no dudes en ponerte en contacto con nuestro equipo. Valoramos tus opiniones y nos comprometemos a proporcionarte la mejor experiencia posible. Completa el formulario a continuación y nos pondremos en contacto contigo lo antes posible.</p>
      <a href="./contact.php"><button class="cta-button">Contáctanos</button></a>
    </div>
    <div class="right-column">
      <img class="img-right-border" src="./assets/contact_section_image.jpg" alt="Book section image" />
    </div>
  </article>

  <footer>
    <?php include "./layout/header.php" ?>
  </footer>
</body>
</html>