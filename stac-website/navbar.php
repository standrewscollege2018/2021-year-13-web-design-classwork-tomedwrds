<?php
//navbar

//Query all tutors from database
$tutor_sql = "SELECT * FROM tutorgroup";
$tutor_qry = mysqli_query($dbconnect, $tutor_sql);
$tutor_aa = mysqli_fetch_assoc($tutor_qry);
 ?>
 <!-- Display tutor names -->
 <!-- Bootstrap CSS -->
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
 <link rel="stylesheet" href="style.css">
 <script src="https://kit.fontawesome.com/fe000c5cff.js" crossorigin="anonymous"></script>

 <title>Template</title>
</head>
<body>



 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

 <nav class="navbar navbar-expand-lg  bg-stac">
  <a class="navbar-brand text-white" href="#"><h3 class= "bold">St Andrew's College</h3></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <i class="text-white fas fa-hamburger"></i>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">

      <?php
        do {
          // Display all tutors
          $tutorgroupID = $tutor_aa['tutorgroupID'];
          $tutorcode = $tutor_aa['tutorcode'];
          echo "<li class='nav-item'>";
          //If tutor code is clicked on rederict to tutor group page with tutor code
          echo "<a class = 'p-2 lead' href='index.php?page=tutorgroup&tutorgroupID=$tutorgroupID&tutorcode=$tutorcode'>$tutorcode</a>";
          echo "</li>";
         } while ($tutor_aa = mysqli_fetch_assoc($tutor_qry))
      ?>


    </ul>
    <form class="form-inline my-2 my-lg-0" action="index.php?page=searchresults" method="post">
      <input required placeholder = "Student Name" class="form-control mr-sm-2" name="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0 text-white border-white bg-stac" type="submit" name="button"><i class=" p-1 fas fa-search"></i></button>
    </form>
    <a class="btn btn-outline-success my-2 my-sm-0 text-white border-white ml-2 bg-stac" href="newstudent.php"type="button" name="button" ><i class="p-1 fas fa-plus"></i></i></a>

  </div>
</nav>
