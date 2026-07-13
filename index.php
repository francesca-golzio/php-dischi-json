<?php

  require_once __DIR__ . '/function.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Import Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  <!-- Custom CSS -->
  <link rel="stylesheet" href="src/css/style.css">

  <title>PHP Dischi</title>
</head>
<body>

<header>
  <h1>PHP Albums</h1>
  <h2>Music from the 90's</h2>
</header>

<main>

  <div class="container">
    
    <!-- Print each album data in page -->
    <div class="collection">

      <?php 
        foreach($albums as $album) {
          echo "<div class='album_card card col-8 col-sm-5 col-md-4 col-lg-3 col-xl-2'>
                  <div class='card-header'>
                    <h5 class='card-title'>" . $album['title'] . "</h5>
                    <h6 class='card-subtitle'>" . $album['artist'] . "</h6>
                  </div>
                  <div class='card-body'>
                    <img src='" . $album['cover_url'] . "' class='cover' alt='" . $album['title'] .  "album cover'>
                  <div class='info'>
                      <p class='card-text genre'>" . $album['genre'] . "</p>
                      <p class='card-text'>" . $album['release_year'] . "</p>
                    </div>
                  </div>
                </div>";
        }
      ?>

  </div>
  
</main>

<footer>
  <p>Francesca Golzio &copy; 2026 PHP Albums</p>
</footer>

</body>
</html>