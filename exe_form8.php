<?php 

	session_start();

	require('config.php');

	$status = 1;

	$sql = "update form8 set yos = '".$_POST['yos']."',
	noi = '".$_POST['noi']."', 
	noe = '".$_POST['noe']."', 
	address = '".$_POST['address']."', 
	sec = '".$_POST['sec']."', 
	now = '".$_POST['now']."', 
	allowance = '".$_POST['allowance']."',
	brief = '".$_POST['brief']."', 
	place = '".$_POST['place']."',
	toweeks = '".$_POST['toweeks']."',
	spe = '$status'
	where 
	reg_no = '".$_SESSION['reg_no']."'";

	$result = mysqli_query($conn, $sql);
	if ($result) {
		$err = "Data has been updated";
		header("location: form8.php?login_error=$err");
		exit();

	}else{
		header("location: siw_menu.php");
		exit();
	}
 ?>