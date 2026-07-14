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

    "title" => $_POST['title'],    
    "artist" => $_POST['artist'],
    "cover_url" => $_POST['cover_url'],
    "genre" => $_POST['genre'],
    "release_year" => $_POST['release_year']

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