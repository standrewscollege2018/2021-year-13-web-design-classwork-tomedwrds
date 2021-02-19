<div class="container-fluid p-4 ">
<?php
  //Error checking
  if(!isset($_POST['search'])) {
    header("Location: search.php");
  }

  // Get serach
  $search = $_POST['search'];

  // Query
  $result_sql = "SELECT * FROM student WHERE firstname LIKE '%$search%' OR lastname LIKE '%$search%'";

  $result_qry = mysqli_query($dbconnect, $result_sql);

  // Error check
  if(mysqli_num_rows($result_qry)==0) {
      echo "<h1>No results found</h1>";
    } else {
      $result_aa = mysqli_fetch_assoc($result_qry);
      // Dispaly students

      echo "<div class='row'>";
      do {
        $firstname = $result_aa['firstname'];
        $lastname = $result_aa['lastname'];
        $photo = $result_aa['photo'];
        echo "
        <div class='col-md-4 pt-4'>
          <div class='card'> ";
            echo "<img src='images/$photo' class='card-img-top'>";
            echo "<div class='card-body'>";
              echo "<h5 class='card-title'>$firstname $lastname</h5>";
            echo "</div>
          </div>
        </div>";


        } while ($result_aa = mysqli_fetch_assoc($result_qry));
        }
        ?>





</div>
