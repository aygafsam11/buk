<?php
    error_reporting(0);
    session_start();
    require('config.php');

    $reg_no = $_GET['reg_no'];

    $que = "delete from form8, profile, bank where reg_no = '$reg_no'";
    
    $del = mysqli_query($conn, $que);

    if($del){
        header("location: search_student.php");
        exit();
    }else{
        echo "Error deleting records";
        exit();
    }
    
?>