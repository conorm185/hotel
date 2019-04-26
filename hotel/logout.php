<?php
    session_start();

    if(isset($_SESSION['email']) ){
        echo 'here';
        unset($_SESSION['email']);
        unset($_SESSION['customer_id']);
        header('location: login.php');
    }else{
        header('location: login.php');
    }
?>