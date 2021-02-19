<?php

include("dbconnect.php");

include("navbar.php");
 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body>
     <div class="container-fluid p-4">
       <div class="jumbotron">
         <h1 class = "dispaly-4">New Student</h1>

         <form class="" action="addstudent.php" method="post">
           <p class="lead pt-2">First Name</p>
           <input type="text" name="studentfirstname" value="">
           <p class="lead pt-2">Last Name</p>
           <input type="text" name="studentlastname" value="">
           <p class="lead pt-2">Tutor Group</p>
           <select class="" name="studenttutor">
             <?php
             //Query all tutors from database
             $tutor_sql = "SELECT * FROM tutorgroup";
             $tutor_qry = mysqli_query($dbconnect, $tutor_sql);
             $tutor_aa = mysqli_fetch_assoc($tutor_qry);

             $tutor_id = 1;

             do {
               $tutorcode = $tutor_aa['tutorcode'];

               echo "<option value=$tutor_id>$tutorcode</option>";
               $tutor_id += 1;
             } while ($tutor_aa = mysqli_fetch_assoc($tutor_qry));
              ?>

           </select>
           <hr>
           <button class ="btn bg-stac text-white" type="submit"  name="button">Submit</button>
         </form>

         <?php
          if (isset($_GET['error']))
          {

            if ($_GET['error'] == True)
            {
              ?>
              <div class="alert alert-danger">
                <strong>ERROR!</strong> STUDENT ALREADY EXISTS.
              </div>
              <?php
            }
            $_GET['error'] = False;
          }
          ?>
       </div>
     </div>


   </body>
 </html>
