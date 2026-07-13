<?php
  // get (stringified) file content
  $list = file_get_contents('./src/discs.json');
  //var_dump($list);
  
  // convert to php associative array
  $discs = json_decode($list, true);
  //var_dump($discs);