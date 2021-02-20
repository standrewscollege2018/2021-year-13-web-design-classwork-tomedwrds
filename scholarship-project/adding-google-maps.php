<!DOCTYPE html>
<html>
  <head>

    <title>Add Map</title>
    <link rel="stylesheet" href="style.css">


  </head>
  <body>
    <!--The div element for the map -->



    <!-- Form for adding new stuff -->
    <form class="" action="add-marker.php" method="post">
      <h4>New location</h4>
      <input type="text" id="autocomplete" name="" value="">
      <button type="submjt" name="button">Go</button>
    </form>

    <script type="text/javascript">
      let autocomplete;

      function initAutocomplete() {
        autocomplete = new google.maps.places.Autocomplete(
          document.getElementById('autocomplete')
        );


      }
    </script>
    <!-- Async script executes immediately and must be after any DOM elements used in callback. -->

    <script async
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAMVMC-a_wlLf6JCmBptZXOgNfOu_KtaZI&libraries=places&callback=initAutocomplete">
    </script>

</html>
