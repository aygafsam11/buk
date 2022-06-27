<?php

    session_start();

    require('config.php');

    $_SESSION['username'] = $_POST['username'];

    $sql = "select * from admin where username = '".$_SESSION['username']."' and password = '".$_POST['password']."' ";

    $result = mysqli_query($conn, $sql);

    $c = mysqli_num_rows($result);

    if($c == 1){
        $log = mysqli_fetch_assoc($result);
        $_SESSION['login'] = $log['username'];
        $_SESSION['user_status'] = 'active';

        header("location: adminpage.php");
        exit();

    }else{
        $err = 'Incorrect Username or Passowrd, Try again';
        header("location: adminlogin.php?login_error=$err");
        exit();
    }
?>