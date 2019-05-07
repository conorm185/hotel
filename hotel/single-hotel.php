<?php

session_start();
include 'includes/config.inc.php';
include 'includes/functions.inc.php';

try {
    if (isset($_GET['hotel_id'])) {
        $hotelsDB = new hotelsDB($pdo);
        $hotels = $hotelsDB->findById($_GET['hotel_id']);

        $reviewDB = new ReviewDB($pdo);
        $reviews = $reviewDB->findByHotelId($_GET['hotel_id']);
    }else{
        $hotelsDB = new hotelsDB($pdo);
        $hotels = $hotelsDB->findById(1);

        $reviewDB = new ReviewDB($pdo);
        $reviews = $reviewDB->findByHotelId(1);
    }
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
   
    <link href="css/semantic.css" rel="stylesheet" >
    <link href="css/icon.css" rel="stylesheet" >
    <link href="css/styles.css" rel="stylesheet">  
</head>
<body >
    
<?php include 'includes/header.inc.php'; ?>
    
<main >
    <!-- Main section about painting -->
    <section class="ui segment grey100">
        <div class="ui doubling stackable grid container">
            <div class="nine wide column">
              <img src="images/hotels/hotel%20(<?php echo  $hotels['HotelID']; ?>).jpg" alt="..." class="ui big image" id="artwork">
                
                <div class="ui fullscreen modal">
                  <div class="image content">
                      <img src="images/hotels/hotel%20(<?php echo  $hotels['HotelID']; ?>).jpg" alt="..." class="image" >
                      <div class="description"><p></p></div>
                  </div>
                </div>                
                
            </div>
            <div class="seven wide column">
                
                <!-- Main Info -->
                <div class="item">
                    <h2 class="header"><?php echo  $hotels['name']; ?></h2>
                    <h3 ><?php echo $hotels['address'].', '.$hotels['city'].', '.$hotels['state'].' '.$hotels['zip']; ?></h3>
                      <div class="meta">
                        <p><?php echo generateRatingStars($hotels['rating']); ?></p>
                        <p><?php echo  'description here'; ?></p>
                        <a class="ui right labeled icon button" href="reservation.php?hotel_id=<?php echo $_GET['hotel_id']; ?>">
                          <i class="heart icon"></i>
                          Make a Reservation
                        </a> 
                      </div>  
                </div>                          
                  
                <!-- Tabs For Details, Museum, Genre, Subjects -->
                <?php include 'includes/painting-small-tabs.inc.php'; ?>
                
                <!-- Cart and Price -->
                <?php //include 'includes/cart-box.inc.php'; ?>                        
                          
            </div>
        </div>
    </section>
    
    <!-- Tabs for Description, On the Web, Reviews -->
    <?php include 'includes/painting-large-tabs.inc.php'; ?> 
    
    <!-- Related Images -->    
    <?php include 'includes/related-images.inc.php'; ?>      
</main>
    
<?php include 'includes/footer.inc.php'; ?>
    
</body>
</html>