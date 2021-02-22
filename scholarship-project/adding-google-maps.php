<!DOCTYPE html>
<html>
  <head>

    <title>Add Map</title>
    <link rel="stylesheet" href="style.css">


  </head>
  <body>
    <!--The div element for the map -->
    <div id="map"></div>


    <!-- Form for adding new stuff -->
    <form class="" action="add-marker.php" method="post">
      <h4>New location</h4>
      <input type="text" id="autocomplete" name="" value="">
      <button type="submjt" name="button">Go</button>
    </form>

    <script type="text/javascript">
    // Initialize and add the map
    // Initialize and add the map
    function initMap() {

      // Set up and center the map on christchurch
      const christchurch = { lat: -43.5320, lng: 172.6306 };
      const map = new google.maps.Map(document.getElementById("map"), {
        zoom: 8,
        center: christchurch
      });

        let autocomplete;

        autocomplete = new google.maps.places.Autocomplete(
          document.getElementById('autocomplete'),
          {
            componentRestrictions: { country: "nz" },
            fields: ["address_components", "geometry", "icon", "name"],
          }
        );

        autocomplete.addListener('place_changed',onPlaceChanged);


        var markers = [];
        function onPlaceChanged()
        {
            //Get the place info
            var place = autocomplete.getPlace();
            console.log(place);
            markers.push(
          new google.maps.Marker({
            map,
            title: place.name,
            position: place.geometry.location,
          })
        );
        }
    }

    </script>
    <!-- Async script executes immediately and must be after any DOM elements used in callback. -->
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAMVMC-a_wlLf6JCmBptZXOgNfOu_KtaZI&libraries=places&callback=initMap"
type="text/javascript"></script>


</html>
