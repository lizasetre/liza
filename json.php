<?php
  include 'config.php';
  include 'class.Books.php';
  
  header('Content-Type: application/json');

  $Books = new Books();
  $list=$Books->get_Books();

  echo "{\"Books\":";
  echo json_encode($list);
  echo "}";
?>
