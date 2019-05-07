<?php
session_start();
include 'includes/config.inc.php';
include 'includes/functions.inc.php';


if(isset($_SESSION['email'])){
    $reservationsDB = new reservationsDB($pdo);
    $reservations = $reservationsDB->findByCustomerId($_SESSION['customer_id']);
}else{
    header('location: login.php');
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

    <link href="css/bootstrap.css" rel="stylesheet" >
    
    <link href="css/semantic.css" rel="stylesheet" >
    <link href="css/icon.css" rel="stylesheet" >
    <link href="css/styles.css" rel="stylesheet">


</head>
<body >

<?php include 'includes/header.inc.php'; ?>

<main class="ui container">

    <section class="ui basic segment ">
      <h2>Reservations</h2>
        <table class="ui basic collapsing table">
          <thead>
            <tr>
                <th>Image</th>
                <th>Hotel</th>
                <th>Start</th>
                <th>End</th>
                <th>Amount Due</th>
                <th>Review</th>
          </tr></thead>
          <tbody>
              <?php while ($work = $reservations->fetch() ){ ?>
              
              <tr>
                <td><img class="ui small image" src="images/hotels/hotel%20(<?php echo $work['HotelID']; ?>).jpg"></td>
                <td><?php echo $work['name']; ?></td>
                <td><?php echo $work['startDate']; ?></td>
                <td><?php echo $work['endDate']; ?></td>
                <td><?php echo calcCost($work['rate'],$work['length']); ?></td>
                <td><a class="ui small button" href="review.php?id=<?php echo $work['resID']; ?>">Review</a></td>  
                  
                  
                  
              </tr>
                  
                  
              <?php } ?>
                         
          </tbody>
            
          <!--<tfoot class="full-width">
              <th colspan="3">
                
              </th>
          </tfoot>-->
            
         </table>
    </section>

</main>

<?php include 'includes/footer.inc.php'; ?>
    
</body>
</html>
