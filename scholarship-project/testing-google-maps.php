<!DOCTYPE html>
<html>
  <head>

    <title>Add Map</title>
    <link rel="stylesheet" href="style.css">
    <?php include('script.php'); ?>

  </head>
  <body>
    <h3>My Google Maps Demo</h3>
    <!--The div element for the map -->
    <div id="map"></div>

    <!-- Async script executes immediately and must be after any DOM elements used in callback. -->
    <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAMVMC-a_wlLf6JCmBptZXOgNfOu_KtaZI&callback=initMap&libraries=&v=weekly"
      async
    ></script>
  </body>
</html>
