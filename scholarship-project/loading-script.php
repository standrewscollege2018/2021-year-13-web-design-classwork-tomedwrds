<!DOCTYPE html>
<script type="text/javascript">
//Function that handles markers text and display window
function info_window(title, body)
{
  const contentString =
      '<div id="content">' +
      '<div id="siteNotice">' +
      "</div>" +
      '<h1 id="firstHeading" class="firstHeading">' + title + '</h1>' +
      '<div id="bodyContent">' +
      '<p>'+body+'</p>' +
      "</div>" +
      "</div>";

    return contentString;
}


// Initialize and add the map
function initMap() {

  // Set up and center the map on christchurch
  const christchurch = { lat: -43.5320, lng: 172.6306 };
  const map = new google.maps.Map(document.getElementById("map"), {
    zoom: 8,
    center: christchurch
  });

  //Set yp the array
  var markers = [];
  <?php
    // Connect to the the Database
    $dbconnect = mysqli_connect("localhost", "root", "", "scholarship");

    //Run the query and get all of the markers
    $result_sql = "SELECT * FROM cords";
    $result_qry = mysqli_query($dbconnect, $result_sql);
    $result_aa = mysqli_fetch_assoc($result_qry);

    do {
      //Load variables
      $lat = $result_aa['lat'];
      $lng = $result_aa['lng'];
      $title = $result_aa['title'] ;
      $body_text = $result_aa['body_text'];



      //Get the marker database
      echo "var marker_data = new Array(2);";
      echo "marker_data[0] = {lat: $lat, lng: $lng};";
      echo "marker_data[1] = info_window('$title','$body_text');";
      echo "markers.push(marker_data);";


    } while ($result_aa = mysqli_fetch_assoc($result_qry))

   ?>

   //Populate the map with the markers
   for (let i = 0; i < markers.length; i++) {
     let pos =markers[i][0];
     let info = markers[i][1];
     
     //Create the info text
     const infowindow = new google.maps.InfoWindow({
         content: info,
       });
      //Create the marker
      const marker = new google.maps.Marker({
        position: pos,
        map: map,
      });

      marker.addListener("click", () => {
        infowindow.open(map, marker);
      });

  }








}
</script>
