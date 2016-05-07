<?php
  // Richard Davis
  // CSCI4000
  // 01 May 2016
  // Assignment 5

  // helper function to get a specific major's name given an id
  function get_major_name($majorID) {
    global $db;
    $query = 'SELECT * FROM major
              WHERE majorID = :majorID';
    $statement = $db->prepare($query);
    $statement->bindValue(':majorID', $majorID);
    $statement->execute();
    $major = $statement->fetch();
    $statement->closeCursor();
    $major_name = $major['majorName'];
    return $major_name;
  }
?>
