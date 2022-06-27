<?php error_reporting(E_ALL ^ E_NOTICE); ?>
<?php
	
	session_start();
	require('config.php');

	if($_POST['password'] != $_POST['cpass']){
		$err = 'Password did not match, please enter a valid password.';
		header("location: create_student.php?login_error=$err");
		exit();
		}else{

	$_SESSION['reg_no'] = $_POST['reg_no'];
	$_SESSION['password'] = $_POST['password'];
	$_SESSION['dept'] = $_POST['dept'];
	$_SESSION['start'] = $_POST['start'];
	$_SESSION['end'] = $_POST['end'];
	$status = 1;

	$query = "select reg_no from profile where reg_no = '".$_SESSION['reg_no']."'";
	
	$res = mysqli_select_db($conn, $query);

		$c = mysqli_num_rows($res);

			if($c == 1){
		
			$err = 'Reg. No already existing in the database, please login';
		header("location: student_login.php?login_error=$err");
		exit();
		
		
	}

$sql = "insert into profile (title, fname, surname, reg_no, email, mobile, gender, dept, level, duration, start, end, password, status) values('".$_POST['title']."', '".$_POST['fname']."', '".$_POST['surname']."', '".$_POST['reg_no']."', '".$_POST['email']."', '".$_POST['mobile']."', '".$_POST['gender']."', '".$_POST['dept']."', '".$_POST['level']."', '".$_POST['duration']."', '".$_POST['start']."', '".$_POST['end']."', '".$_POST['password']."', '$status')";

		$result = mysqli_query($conn, $sql);
		if($result) {
			header("location: letter.php");
			exit();
		}
	}
?>