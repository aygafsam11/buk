<?php 
	session_start();

	require('config.php');

	$status = 1;

	$sql = "update bank set bank_name = '".$_POST['bank_name']."', acc_no = '".$_POST['acc_no']."', sort_code = '".$_POST['sort_code']."', status = '$status' where reg_no = '".$_SESSION['reg_no']."' ";

	$res = mysqli_query($conn, $sql);

	if($res){
		
		header("location: bank.php");
		exit();
	}else{
		header("location: bank.php");
		exit();
	}
 ?>