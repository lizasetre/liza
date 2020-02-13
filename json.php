<?php
  include 'config.php';
  include 'class.books.php';
  
  header('Content-Type: application/json');

  $Books = new books();
  $list=$Books->get_books();

  echo "{\"Books\":";
  echo json_encode($list);
  echo "}";
?>
