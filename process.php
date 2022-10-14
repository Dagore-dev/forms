<?php

  echo '<pre>GET' . PHP_EOL;
  var_dump($_GET);
  echo '</pre>';
  
  echo '<pre>POST' . PHP_EOL;
  var_dump($_POST);
  echo '</pre>';
  
  echo '<pre>REQUEST' . PHP_EOL;
  var_dump($_REQUEST);
  echo '</pre>';

  echo '<pre>FILES' . PHP_EOL;
  var_dump($_FILES);
  echo '</pre>';

  // Mover fichero a carpeta (La versión a saco)
  move_uploaded_file($_FILES['file']['tmp_name'], $_FILES['file']['name']);

?>
