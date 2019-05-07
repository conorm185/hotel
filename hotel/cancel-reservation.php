<?php
    session_start();
    include 'includes/config.inc.php';
    include 'includes/functions.inc.php';
    $reservationsDB = new reservationsDB($pdo);

    try {
        $reservations = $reservationsDB->removeReservation($_GET['id']);
        header('location: view-reservations.php');
    }
    catch (PDOException $e) {
       die( $e->getMessage() );
    }
?>