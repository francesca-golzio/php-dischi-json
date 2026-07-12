<?php
  // get (stringified) file content
  $list = file_get_contents('./discs.json');
  //var_dump($list);
  
  // convert to php associative array
  $discs = json_decode($list, true);
  //var_dump($discs);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Dischi</title>
</head>
<body>

  <?php 
  // Print each disc data in page
  foreach($discs as $disc) {
    echo $disc['title'] . "<br>";
    echo $disc['artist'] . "<br>";
    echo $disc['cover_url'] . "<br>";
    echo $disc['release_year'] . "<br>";
    echo $disc['genre'] . "<br><br>";
  }
?>

</body>
</html>