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
    
    
    
    
    if (isset($_GET['hotel_id']) && ! empty($_GET['hotel_id'])
       &&isset($_GET['type']) && ! empty($_GET['type'])
       &&isset($_GET['checkin']) && ! empty($_GET['checkin'])
       &&isset($_GET['checkout']) && ! empty($_GET['checkout'])) {
        
        $rooms = $roomsDB->findByHotelIdType($_GET['hotel_id'],$_GET['type'],$_GET['checkin'],$_GET['checkout']);

    }else{
        $rooms = null;
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
    
</head>
<body >
    
<?php include 'includes/header.inc.php'; ?>
    
<main class="ui segment doubling stackable grid container">
    <section class="four wide column">
        <?php  include 'includes/browse-filters.inc.php'; $hotels = $hotelsDB->findById($_GET['hotel_id']);?>
    </section>
    
    <section class="twelve wide column">

        
<!--        <div id="map_div" style="height: 500px; width: 900px"></div>-->
        <div id="map_div" ></div>
        <h1 class="ui header"><?php echo $hotels['name'] ?>: Rooms</h1>
        <h3 class="ui sub header"><?php echo 'filter'; ?></h3>
        <ul class="ui divided items" id="paintingsList">
            
          <?php if (isset($rooms)){ while ($work = $rooms->fetch() ){ ?>
            
          <li class="item">
            <a class="ui small image" href="#"><img src="images/interior/<?php echo $work['typeID']; ?>.jpg"></a>
            <div class="content">
              <a class="header" href="#"><?php echo $work['name']; ?></a>
              <div class="meta"><span class="cinema">Beds: <?php echo $work['beds']; ?></span></div>        
              <div class="description">
                <p><?php echo utf8_encode($work['description']); ?></p>
              </div>
              <div class="meta">     
                  <strong><?php echo '$' . number_format($work['rate'],2); ?> per day</strong>        
              </div>        
              <div class="extra">
                <a class="ui icon orange button" href="process-reservation.php?room_id=<?php echo $work['roomID'];?>&checkin=<?php echo $_GET['checkin'];?>&checkout=<?php echo $_GET['checkout'];?>"><i class="add to cart icon"></i></a>
              </div>        
            </div>      
          </li>
            
          <?php  }} ?>

        </ul>        
    </section>  
   
</main>    
    
<?php include 'includes/footer.inc.php'; ?>
    
</body>
</html>