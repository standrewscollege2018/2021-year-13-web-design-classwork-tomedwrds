<div class="container-fluid p-4 ">
  <?php
  if(!isset($_GET['tutorgroupID'])) {
    header("Location: index.php");
  } else {
    $tutorcode = $_GET['tutorcode'];
    $tutorgroupID = $_GET['tutorgroupID'];
    $tutor_sql = "SELECT * FROM student WHERE tutorgroupID=$tutorgroupID";
    $tutor_qry = mysqli_query($dbconnect, $tutor_sql);

    if(mysqli_num_rows($tutor_qry)==0) {
      echo "<p class=display-4 p-4>No students in $tutorcode</p>";
    } else {
      $tutor_aa = mysqli_fetch_assoc($tutor_qry);
      echo "<p class=display-3 p-4>$tutorcode</p>";
      echo "<div class='row'>";
      do {
        $firstname = $tutor_aa['firstname'];
        $lastname = $tutor_aa['lastname'];
        $photo = $tutor_aa['photo'];
        echo "
        <div class='col-md-4 pt-4'>
          <div class='card '> ";
            echo "<img src='images/$photo' class='card-img-top'>";
            echo "<div class='card-body'>";

              echo "<form class='' action='deletestudent.php?firstname=$firstname&lastname=$lastname&tutorgroupID=$tutorgroupID' method='post'>
                    <h5 class='card-title'>$firstname $lastname</h5>
                    <button type='submit' class='btn btn-danger'>Delete Student</button>
                  </form>";
            echo "</div>
          </div>
        </div>";





      } while ($tutor_aa = mysqli_fetch_assoc($tutor_qry));
    }
  }

  ?>
</div>


</div>
