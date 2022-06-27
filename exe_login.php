<?php
		session_start();

		require('config.php');

$log = "select * from profile where reg_no = '".$_POST['reg_no']."' and password = '".$_POST['password']."'";
		$res = mysqli_query($conn, $log);

		$c = mysqli_num_rows($res);

		if($c == 1){

			$stud = mysqli_fetch_assoc($res);
			$_SESSION['reg_no'] = $stud['reg_no'];
			$_SESSION['fname'] = $stud['fname'];
			$_SESSION['dept'] = $stud['dept'];
			$_SESSION['start_date'] = $stud['start'];
			$_SESSION['end_start'] = $stud['end'];
			$_SESSION['siwes_active'] = $stud['active'];

			header("location: uploadletter.php");
			exit();
		}else{
			
			$err = 'Incorrect Reg. No. or Password';
			header("location: index.php?login_error=$err");
			exit();
		}
?>