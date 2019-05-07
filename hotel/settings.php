<?php
session_start();
include 'includes/config.inc.php';



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
      <h2>Settings</h2>
        
    </section>

</main>

<?php include 'includes/footer.inc.php'; ?>
    
</body>
</html>