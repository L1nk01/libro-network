<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Libro Network - Autores</title>

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
    <h1 class="title">Nuestros Escritores Destacados</h1>
    <p class="subtitle">Explora la creatividad y la diversidad de los autores que forman parte de nuestra colección.</p>

    <div class="author-card-container">
      <?php
      include "model/connection.php";
      include "model/PaginationModel.php";

      $paginationModel = new PaginationModel($conn);

      $table = "titulos";
      $itemsPerPage = 4;
      $currentPage = $paginationModel->get_current_page();
      $startingIndex = $paginationModel->get_starting_index($currentPage, $itemsPerPage);
      $sql = "SELECT nombre, apellido, ciudad, estado, pais FROM autores ORDER BY nombre asc LIMIT $startingIndex, $itemsPerPage";
      $pageCount = $paginationModel->get_page_count($table ,$itemsPerPage);
      $currentPageItems = $paginationModel->get_current_page_items($sql);

      foreach ($currentPageItems as $row) {
      ?>
        <div class="author-card">
          <div class="author-image-container">
            <img class="author-card-image" src="./assets/author_placeholder.png" alt="Author picture" />
          </div>
          <div class="author-card-content">
            <div class="author-details-container">
              <h2><?php echo $row['nombre'] . " " . $row['apellido']; ?></h2>
              <p><?php echo $row['ciudad'] . ", " . $row['estado']; ?></p> 
              <p><?php echo $row['pais']; ?></p>
            </div>
            <div class="author-button-container">
              <button class="cta-button">Ver libros</button>
            </div>
          </div>
        </div>
      <?php
      }
      ?>
    </div>

    <div class="page-navigator-container">
      <div class="page-navigator">
        <?php
        // Enlace a la página anterior
        $previousPageNumber = $currentPage - 1;
        $previousPage = ($currentPage > 1) ? "./authors.php?p=$previousPageNumber" : "./authors.php?p=1";
        echo "<a class='page-navigator-item page-navigator-prev' href='$previousPage'>Anterior</a>";
        ?>

        <?php
        // Enlaces a las páginas
        for ($i = 1; $i <= $pageCount; $i++) {
          echo "<a class='page-navigator-item' href='./authors.php?p=$i'>$i</a>";
        }
        ?>

        <?php
        // Enlace a la página siguiente
        $nextPageNumber = $currentPage + 1;
        $nextPage = ($currentPage < $pageCount) ? "./authors.php?p=$nextPageNumber" : "./authors.php?p=$pageCount";
        echo "<a class='page-navigator-item page-navigator-next' href='$nextPage'>Siguiente</a>";
        ?>
      </div>
    </div>
  </main>

  <footer>
    <?php include "./layout/footer.php" ?>
  </footer>
</body>
</html>