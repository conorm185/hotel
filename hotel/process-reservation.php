<?php
    session_start();
    include 'includes/config.inc.php';
    include 'includes/functions.inc.php';
    $reservationsDB = new reservationsDB($pdo);
    try {
        $reservations = $reservationsDB->insertReservation($_GET['room_id'],$_SESSION['customer_id'],$_GET['checkin'],$_GET['checkout']);
        header('location: view-reservations.php');
    }
    catch (PDOException $e) {
       die( $e->getMessage() );
    }
?>