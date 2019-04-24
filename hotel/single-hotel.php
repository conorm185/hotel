<?php

session_start();
include 'includes/config.inc.php';
include 'includes/functions.inc.php';

try {
    $roomsDB = new roomsDB($pdo);
    $rooms = $roomsDB->getAll();
    //$rooms = $roomsDB->findByHotelId('1');
    $roomTypeDB = new RoomTypeDB($pdo);
    $type = $roomTypeDB->getAll();
    
    $hotelsDB = new hotelsDB($pdo);
    $hotels = $hotelsDB->getAll();
    
}
catch (PDOException $e) {
   die( $e->getMessage() );
}
/*
if(!isset($_SESSION['email']) ){
    
    header('location: login.php');
}
*/

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
    
    <script src="js/bootstrap.js"></script>
    <link href="css/bootstrap.css" rel="stylesheet" >
    
    <link href="css/semantic.css" rel="stylesheet" >
    <link href="css/icon.css" rel="stylesheet" >
    <link href="css/styles.css" rel="stylesheet">  
</head>
<body >
    
<?php include 'includes/header.inc.php'; ?>
    
<main class="ui segment doubling stackable grid container">

    <section class="sixteen wide column">

        
<!--        <div id="map_div" style="height: 500px; width: 900px"></div>-->
        <div id="map_div" ></div>
        <h1 class="ui header">Rooms</h1>
        <h3 class="ui sub header"><?php echo 'filter'; ?></h3>
        <ul class="ui divided items" id="paintingsList">
            
<!--
          <?php  //while ($work = $rooms->fetch() ){ ?>
            
          <li class="item">
            <a class="ui small image" href="single-hotel.php?id=<?php echo $work['hotelID']; ?>"><img src="images/hotels/<?php echo $work['hotelID']; ?>.jpg"></a>
            <div class="content">
              <a class="header" href="single-hotel.php?id=<?php echo $work['roomID']; ?>"><?php echo utf8_encode($work['hotelID']); ?></a>
              <div class="meta"><span class="cinema"><?php echo $work['hotelID']; ?></span></div>        
              <div class="description">
                <p><?php echo utf8_encode($work['hotelID']); ?></p>
              </div>
              <div class="meta">     
                  <strong><?php echo '$' . number_format($work['hotelID'],0); ?></strong>        
              </div>        
              <div class="extra">
                <a class="ui icon orange button" href="cart.php?id=<?php echo $work['hotelID']; ?>"><i class="add to cart icon"></i></a>
                <a class="ui icon button" href="addToFavorites.php?id=<?php echo $work['hotelID']; ?>&path=<?php echo $work['hotelID'] ?>&title=<?php echo urlencode($work['hotelID']); ?>"><i class="heart icon"></i></a>  
              </div>        
            </div>      
          </li>
            



    <!-- Main section about painting 
    <section class="ui segment grey100">
        <div class="ui doubling stackable grid container">
            <div class="nine wide column">
              <img src="images/art/works/medium/<?php echo  $row['ImageFileName']; ?>.jpg" alt="..." class="ui big image" id="artwork">
                
                <div class="ui fullscreen modal">
                  <div class="image content">
                      <img src="images/art/works/large/<?php echo  $row['ImageFileName']; ?>.jpg" alt="..." class="image" >
                      <div class="description"><p></p></div>
                  </div>
                </div>                
                
            </div>
            <div class="seven wide column">
                
                <!-- Main Info 
                <div class="item">
                    <h2 class="header"><?php echo  utf8_encode($row['Title']); ?></h2>
                    <h3 ><?php echo utf8_encode($row['FirstName'] . ' ' . $row['LastName']); ?></h3>
                      <div class="meta">
                        <p><?php echo generateRatingStars($averageRating); ?></p>
                        <p><?php echo  utf8_encode($row['Excerpt']); ?></p>
                      </div>  
                </div>                          
                  
                <!-- Tabs For Details, Museum, Genre, Subjects 
                <?php //include 'includes/painting-small-tabs.inc.php'; ?>
                
                <!-- Cart and Price
                <?php //include 'includes/cart-box.inc.php'; ?>                        
                          
            </div>
        </div>
    </section>
    
    <!-- Tabs for Description, On the Web, Reviews 
    <?php //include 'includes/painting-large-tabs.inc.php'; ?> 
    
    <!-- Related Images   
    <?php //include 'includes/related-images.inc.php'; ?> 
            -->











          <?php  //} ?>
-->

        </ul>        
    </section>  
   
</main>    
    
<?php include 'includes/footer.inc.php'; ?>
    
</body>
</html>