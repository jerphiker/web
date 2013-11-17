<!DOCTYPE html>

<html>

<head>
	<meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
    <style type="text/css">
      html { height: 75% }
      body { height: 75%; margin: 0; padding: 0 }
      #map-canvas { height: 75% }
    </style>
    <script type="text/javascript"
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC76EzojTtv7nTnUmbJnZkEbJ2_K7Rkj84&sensor=true">
    </script>
    <script type="text/javascript">
      function initialize() {
        var mapOptions = {
          center: new google.maps.LatLng(39.750325, -105.221046),
          zoom: 17,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        var map = new google.maps.Map(document.getElementById("map-canvas"),
            mapOptions);
      }
      google.maps.event.addDomListener(window, 'load', initialize);
    </script>
</head>

<body>
<?php
	include './includes/header.php';

	include './includes/menu.php';
?>

<p>
This page should have a form on the left side, and a map on the right with all relevant data points for a region.
The form should have fields that can be used to narrow down the results shown on the map (based on information collected with
the status reports). This will allow users to choose a demographic more closely related to their own.
</p>

<?php
	include './includes/footer.php';
?>
</body>
</html>
