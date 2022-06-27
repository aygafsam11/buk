<?php
    session_start();

    unset($_SESSION['username']);
    unset($_SESSION['username_status']);
    
    header("Location: adminlogin.php");
    exit();
?>