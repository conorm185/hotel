<?php
session_start();
include 'includes/config.inc.php';



if(isset($_SESSION['email'])){
    print_r($_SESSION);
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
      <h2>Favorites</h2>
        <table class="ui basic collapsing table">
          <thead>
            <tr>
                <th>Image</th>
                <th>Hotel</th>
                <th>Start</th>
                <th>End</th>
                <th>Amount Due</th>
          </tr></thead>
          <tbody>
              <?php while ($work = $reservations->fetch() ){ ?>
              
              <tr>
                <td><img src="images/hotels/.jpg"></td>
                <td><?php echo $work['roomID']; ?></td>
                <td><?php echo $work['startDate']; ?></td>
                <td><?php echo $work['endDate']; ?></td>
                <td><?php echo $work['length']; ?></td>
              </tr>
                  
                  
              <?php } ?>
                         
          </tbody>
          <tfoot class="full-width">
              <th colspan="3">
                <a class="ui left floated small primary labeled icon button" href="remove-favorites.php">
                  <i class="remove circle icon"></i> Remove All Favorites
                </a>
              </th>
          </tfoot>
         </table>
    </section>

</main>

<?php include 'includes/footer.inc.php'; ?>
    
</body>
</html>
