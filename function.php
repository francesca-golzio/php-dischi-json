<?php

 /* __ Get albums collection __ */

  /* Retrieve file content */
  $json_albums = file_get_contents('./src/albums.json');

  /* Convert from JSON string to PHP (associative array) */
  $albums = json_decode($json_albums, true);