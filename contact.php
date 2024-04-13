<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Libro Network - Contacto</title>

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

  <main>
    <div class="contact-container">
      <div class="contact-info-container contact-flex-container">
        <h1>¡Estamos aquí para ayudarte!</h1>
        <p class="mb-4">¿Tienes alguna pregunta, comentario o sugerencia? No dudes en contactarnos. Estamos comprometidos a brindarte el mejor servicio posible y responder a tus inquietudes de manera rápida y eficiente.</p>
        <h2>Formas de Contacto</h2>
        <ul class="mb-4">
          <li><strong>Correo Electrónico:</strong> Puedes enviarnos un correo electrónico a <strong>correo@correo.com</strong> y te responderemos en un plazo máximo de 24 horas.</li>
          <li><strong>Teléfono:</strong> ¿Prefieres hablar directamente con nosotros? Llámanos al <strong>+1 (123) 456-7890</strong> y uno de nuestros representantes estará encantado de atenderte.</li>
          <li><strong>Formulario de Contacto:</strong> Completa nuestro formulario de contacto en línea para enviarnos tu mensaje. Nos aseguraremos de que tu consulta llegue al equipo adecuado y te responderemos lo antes posible.</li>
        </ul>
        <h2>Redes Sociales</h2>
        <p>Conéctate con nosotros a través de nuestras redes sociales para estar al tanto de las últimas noticias, promociones y eventos especiales</p>
        <div class="social-button-container">
          <a class="cta-button social-icon" href="https://facebook.com">
            <i class="fab fa-facebook-square"></i> Facebook
          </a>
          <a class="cta-button social-icon" href="https://twitter.com">
            <i class="fab fa-x-twitter"></i> Twitter
          </a>
          <a class="cta-button social-icon" href="https://instagram.com">
            <i class="fab fa-instagram"></i> Instagram
          </a>
        </div>

      </div>
      <div class="contact-form-container contact-flex-container">
        <form id="contact-form" method="POST">
          <h2 class="mb-3">Formulario de Contacto</h2>
          <?php
            include "model/connection.php";
            include "controller/contact_register.php";
          ?>
          <div class="fields">
            <input type="text" name="name" placeholder="Nombre" required>            
            <input type="text" name="last-name" placeholder="Apellido" required>
            <input type="email" name="email" placeholder="Correo electrónico" required>
            <input type="text" name="subject" placeholder="Asunto" required>
            <textarea name="comment" placeholder="Comentario" required></textarea>
          </div>
          <button type="submit" class="cta-button" name="submit-contact-form" value="Enviar formulario">Enviar formulario</button>
        </form>
      </div>
    </div>
  </main>

  <footer>
    <?php include "./layout/footer.php" ?>
  </footer>
</body>
</html>