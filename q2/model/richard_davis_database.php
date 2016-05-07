<?php
  // Richard Davis
  // CSCI4000
  // 01 May 2016
  // Assignment 5

  $dsn = 'mysql:host=localhost;dbname=richard_davis_student_db';
  $username = 'richardricardo1';
  $password = 'richardisgreat';
  try {
    $db = new PDO($dsn, $username, $password);
  } catch (PDOException $e) {
      $error_message = $e->getMessage();
      include('../errors/richard_davis_database_error.php');
      exit();
  }

?>

