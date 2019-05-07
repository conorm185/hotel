<?php

session_start();
include 'includes/config.inc.php';
include 'includes/functions.inc.php';
/*
foreach ($_SESSION as $key => $value){
    echo "{$key} => {$value} ";
    print_r($_SESSION);
}
*/
try {
    $roomsDB = new roomsDB($pdo);
    $rooms = $roomsDB->getAll();

    $roomTypeDB = new RoomTypeDB($pdo);
    $type = $roomTypeDB->getAll();
    
    $hotelsDB = new hotelsDB($pdo);
    $hotels = $hotelsDB->getAll();
    
    
    
    
    if (isset($_GET['hotel']) && ! empty($_GET['hotel'])
       &&isset($_GET['type']) && ! empty($_GET['type'])
       &&isset($_GET['checkin']) && ! empty($_GET['checkin'])
       &&isset($_GET['checkout']) && ! empty($_GET['checkout'])) {
        
        $rooms = $roomsDB->findByHotelIdType($_GET['hotel'],$_GET['type'],$_GET['checkin'],$_GET['checkout']);

    }
    
}
catch (PDOException $e) {
   die( $e->getMessage() );
}


?>
<!DOCTYPE html>
<html lang=en>
<head>
    <meta charset=utf-8>
    <link href='http://fonts.googleapis.com/css?family=Merriweather' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="css/semantic.js"></script>
    <script src="js/misc.js"></script>
    
<!--    <script src="js/bootstrap.js"></script>-->
    <link href="css/bootstrap.css" rel="stylesheet" >
    
    <link href="css/semantic.css" rel="stylesheet" >
    <link href="css/icon.css" rel="stylesheet" >
    <link href="css/styles.css" rel="stylesheet">
 
<!--<div id="map"></div>-->
    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 600px;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 600px;
        margin: 0;
        padding: 0;
      }
    </style>
    <script>
        function redirectHotel(id){
            //window.location.href = "/prog/hotel/single-hotel.php?hotel_id="+(id);
            alert("/prog/hotel/single-hotel.php?hotel_id="+(id));
        }
        
        
      function initMap() {
        
        
        
        
        var myLatlng = {lat: 37.68598200, lng: -97.33549400};
          
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 4,
          center: myLatlng
        });
        var posArray = [];
        var markerArray = [];
    
        <?php while ($single = $hotels->fetch()) { ?>
          
        var pos = {lat: <?php echo $single['latitude'] ?>, lng: <?php echo $single['longitude'] ?>};
        //posArray.push(pos);   
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
          
        <?php } ?>
          
        for (i = 0; i < posArray.length; i++) {
            var marker = new google.maps.Marker({
              position: posArray[i],
              map: map,
              title: 'Click to zoom'
            });
            
            markerArray.push(marker);
            
            markerArray[i].addListener('click', function(e) {
                //alert("/prog/hotel/single-hotel.php?hotel_id="+(i));
              });
            
        }

      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBxssYVhHUvkzWVhzQyU39SPVzZfwWZZJU&callback=initMap">
    </script>

    
    
</head>
<body >
    
<?php include 'includes/header.inc.php'; ?>
    
<main class="ui segment doubling stackable grid container">
    
    <section class="sixteen wide column">

        
<!--        <div id="map_div" style="height: 500px; width: 900px"></div>-->
        <div id="map" ></div>



    </section>  
   
</main>    
    
<?php include 'includes/footer.inc.php'; ?>
    
</body>
</html>