<?php
  // get (stringified) file content
  $list = file_get_contents('./src/albums.json');
  //var_dump($list);
  
  // convert to php associative array
  $albums = json_decode($list, true);
  //var_dump($albums);