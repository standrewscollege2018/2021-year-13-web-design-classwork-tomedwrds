<?php

  //Conect to DB
  include("dbconnect.php");

  $firstname =  $_POST['studentfirstname'];
  $lastname =  $_POST['studentlastname'];
  $tutorcode = (int)$_POST['studenttutor'];

  //Check if person already exists
  $studentdup_sql = "SELECT * FROM student WHERE (firstname = '$firstname' AND lastname = '$lastname' AND tutorgroupID = $tutorcode)";
  $studentdup_qry = mysqli_query($dbconnect, $studentdup_sql);
  $studentdup_aa = mysqli_fetch_assoc($studentdup_qry);

  if (empty($studentdup_aa))
  {
    $student_sql = "INSERT INTO student (firstname, lastname,tutorgroupID) VALUES ('$firstname','$lastname',$tutorcode)";
    $student_qry = mysqli_query($dbconnect, $student_sql);
    header('Location: index.php');

  }
  else
  {
    header('Location: newstudent.php?error=True');

  }




 ?>
