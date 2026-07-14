<?php

  /* __ Get albums collection __ */

  /* Get current album collection */
  $json_albums = file_get_contents('./src/albums.json');
  //var_dump($json_albums);

  /* Convert from JSON to PHP (associative array) */
  $albums = json_decode($json_albums, true);
  //var_dump($albums);

    
  /* __ Get new album __ */
  $new_album = [

    "title" =>  isset($_POST['title']) && !empty(trim($_POST['title'])) && strlen(trim($_POST['title'])) >= 1 && strlen(trim($_POST['title'])) < 200 
      ? trim($_POST['title']) 
      : 'Unknown', 

    "artist" => isset($_POST['artist']) && !empty(trim($_POST['artist'])) && strlen(trim($_POST['artist'])) >= 1 && strlen(trim($_POST['artist'])) < 200 
      ? trim($_POST['artist']) 
      : 'Unknown',

    "cover_url" => isset($_POST['cover_url']) && !empty(trim($_POST['cover_url'])) && strlen(trim($_POST['cover_url'])) >= 1 && strlen(trim($_POST['cover_url'])) < 500 && filter_var(trim($_POST['cover_url']), FILTER_VALIDATE_URL) 
      ? trim($_POST['cover_url']) 
      : 'https://placehold.co/200?text=missing%0Acover%0Aimage&font=poppins',

    "genre" => isset($_POST['genre']) && !empty(trim($_POST['genre'])) && strlen(trim($_POST['genre'])) >= 1 && strlen(trim($_POST['genre'])) < 30 
      ? trim($_POST['genre']) 
      : 'Unknown',
    
    "release_year" => isset($_POST['release_year']) && !empty(trim($_POST['release_year'])) && (int)(trim($_POST['release_year'])) >= 1990 && (int)(trim($_POST['release_year'])) <= 1999 
      ? trim($_POST['release_year']) 
      : 'Unknown',

  ];  
  

  /* __ Save new album to collection __ */
  $albums[] = $new_album;


  /* __ Update json album collection __ */

  /* Convert albums collection from PHP to JSON (string) */
  $json_albums_updated = json_encode($albums, JSON_UNESCAPED_SLASHES);

  /* Update json collection */
  file_put_contents('./src/albums.json', $json_albums_updated);


  /* __ Redirect user to index page __ */

  header('Location: ./index.php');