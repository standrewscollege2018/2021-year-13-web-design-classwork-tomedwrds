<?php

  //Conect to DB
  include("dbconnect.php");

  $firstname =  $_GET['firstname'];
  $lastname =  $_GET['lastname'];
  $tutorgroupID = (int)$_GET['tutorgroupID'];

  //Check if person already exists
  $studentdup_sql = "DELETE FROM student WHERE (firstname = '$firstname' AND lastname = '$lastname' AND tutorgroupID = $tutorgroupID)";
  $studentdup_qry = mysqli_query($dbconnect, $studentdup_sql);

  header('Location: index.php');






 ?>
