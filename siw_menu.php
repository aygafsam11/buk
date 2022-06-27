<?php error_reporting(0); ?>
<?php 

	session_start();

	require('config.php');

	$chk = "select reg_no, fname, surname from form8 where form8.reg_no = '".$_SESSION['reg_no']."' and form8.fname = '".$_SESSION['fname']."' and form8.surname = '".$_SESSION['surname']."'  ";

		$chks = mysqli_query($conn, $chk);
		

		if ($chks) {

			$cc = mysqli_num_rows($chks);
		
			if ($cc != 1) {

					
				$sql = "insert into form8(fname, surname, reg_no, dept, start, end) values('".$_SESSION['fname']."', '".$_SESSION['surname']."', '".$_SESSION['reg_no']."', '".$_SESSION['dept']."', '".$_SESSION['start']."', '".$_SESSION['end']."')";

				$res = mysqli_query($conn, $sql);
	
			}
		
		}
		$s = "insert into bank (reg_no) values('".$_SESSION['reg_no']."'";
		$r = mysqli_query($conn, $s);
?>

<!DOCTYPE html "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="utf-8">
	<meta name="HandheldFriendly" content="true">
	<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
	<title>BUK Portal</title>
	<link rel="stylesheet" type="text/css" href="css/s.menu.css">
	<link rel="stylesheet" type="text/css" href="css/spe1.css">
	<script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
</head>
<body>
	<div class="logo"><img src="images/logo2.jpg" width="100px" height="100px">
	<h1>Bayero University Kano</h1></div>
	<nav>
		<div>
			<ul id="MenuBar1" class="MenuBarVertical">
				<li>Student SIWES</li>
				<li><a href="uploadletter.php" target="_self"> Uplaod Acceptance Letter </a></li>
				<li><a href="bank.php" target="_self">Fill Bank Details </a> </li>
				<li><a href="form8.php" target="_self">Fill Form 8</a></li>
				<li><a href="print_form8.php" target="_self">Print Form 8</a></li>
				<li><a href="print_speform.php" target="_self">Print SPE 1 Form</a></li>
				<li><a href="letter.php" target="_self">Print Introduction Letter</a></li>
				<li><a href="logout.php" target="_self">Logout</a></li>
			</ul>
		</div>
	</nav>
	<div>
		<form class="form1" action="siw_menu.php" method="post">
			<fieldset>
				<legend><strong>Welcome<?php echo $_SESSION['fname'] ?>&nbsp;<?php echo $_SESSION['surname'] ?> </strong> </legend>
				<p>1. Scan and Upload your Acceptance Letter</p>
				<p>2. Fill your Bank Details</p>
				<p>3. Click on Form 8 to fill it before you can enable to print out Form 8 and Form SPE 1</p>
			</fieldset>
		</form>
	</div>
</body>
</html>
