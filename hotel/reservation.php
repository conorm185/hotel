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
    //$rooms = $roomsDB->findByHotelId('1');
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
/*
if(!isset($_SESSION['email']) ){
    
    header('location: login.php');
}

try {
    
    // connect and retrieve data for filters    
    $artistDB = new ArtistDB($pdo);
    $artists = $artistDB->getAll();   
    
    $galleryDB = new GalleryDB($pdo);
    $galleries = $galleryDB->getAll(); 
    
    $shapeDB = new ShapeDB($pdo);
    $shapes = $shapeDB->getAll();    
    
    
    // now retrieve paintings ... either all or a subset
    $paintDB = new PaintingDB($pdo);
    
    // filter by artist?
    if (isset($_GET['artist']) && ! empty($_GET['artist'])) {
        $paintings = $paintDB->findByArtist($_GET['artist']);
        
        $artist = $artistDB->findById($_GET['artist']);
        $filter = 'Artist = ' . makeArtistName($artist['FirstName'],$artist['LastName']) ;
    }
    
    // filter by museum?
    if (isset($_GET['museum']) && ! empty($_GET['museum'])) {
        $paintings = $paintDB->findByGallery($_GET['museum']);
        
        $museum = $galleryDB->findById($_GET['museum']);
        $filter = 'Museum = ' . utf8_encode($museum['GalleryName']);
    }    
    
    // filter by shape?
    if (isset($_GET['shape']) && ! empty($_GET['shape'])) {
        $paintings = $paintDB->findByShape($_GET['shape']);
        
        $shape = $shapeDB->findById($_GET['shape']);
        $filter = 'Shape = ' . $shape['ShapeName'];
    }     
                                            
    if (! isset($paintings) || $paintings->rowCount() == 0) {
        $paintings = $paintDB->getAll();
        $filter = "All Paintings [Top 20]";
    }
    
        
}
catch (PDOException $e) {
   die( $e->getMessage() );
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
    <section class="four wide column">
        <?php include 'includes/browse-filters.inc.php'; ?>
    </section>
    
    <section class="twelve wide column">
        <h1 class="ui header">Paintings</h1>
        <h3 class="ui sub header"><?php echo 'filter'; ?></h3>
        <ul class="ui divided items" id="paintingsList">
            
          <?php  while ($work = $rooms->fetch() ){ ?>
            
          <li class="item">
            <a class="ui small image" href="single-painting.php?id=<?php echo $work['hotelID']; ?>"><img src="images/hotels/<?php echo $work['hotelID']; ?>.jpg"></a>
            <div class="content">
              <a class="header" href="single-painting.php?id=<?php echo $work['roomID']; ?>"><?php echo utf8_encode($work['hotelID']); ?></a>
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
            
          <?php  } ?>

        </ul>        
    </section>  
   
</main>    
    
<?php include 'includes/footer.inc.php'; ?>
    
</body>
</html>