<?php
	session_start();

	unset($_SESSION['reg_no']);
	unset($_SESSION['fname']);
	unset($_SESSION['surname']);

	header("location: index.php");
	exit();
?>