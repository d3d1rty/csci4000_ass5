<?php
  // Richard Davis
  // CSCI4000
  // 01 May 2016
  // Assignment 5

  // connects db
  require_once('../model/richard_davis_database.php');
  require_once('../model/richard_davis_major_db.php');

  // checks post and get for action and assigns default value if not found
  $action = filter_input(INPUT_POST, 'action');
  if ($action == NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action == NULL) {
      $action = 'list_students';
    }
  }

  // sets major_id and major_name to defaults for testing purposes
  $major_id = 1;
  $major_name = "Computer Science";

  // prints values for testing purposes
  echo $major_id."<br>";
  echo $major_name."<br>";

?>

