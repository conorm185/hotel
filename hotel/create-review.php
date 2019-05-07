<?php
    session_start();
    include 'includes/config.inc.php';
    include 'includes/functions.inc.php';

    $reservationsDB = new reservationsDB($pdo);
    $reservations = $reservationsDB->findById ($_SESSION['customer_id']);
    
    $roomsDB = new roomsDB($pdo);
    $rooms = $roomsDB->findById($reservations['roomID']);
    
    $reviewDB = new ReviewDB($pdo);

    //echo $_GET['id']."<br>".$_SESSION['customer_id']."<br>".$rooms['hotelID']."<br>".$_GET['ratings']."<br>".$_GET['comment']
    $reviewDB->insertReview($_GET['id'],$_SESSION['customer_id'],$rooms['hotelID'],$_GET['ratings'],$_GET['comment']);

    header('location: view-reservations.php');
?>