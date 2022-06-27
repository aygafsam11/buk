<?php 
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="utf-8">
	<meta name="HandheldFriendly" content="true">
	<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
	<title>BUK Portal</title>
	<link rel="stylesheet" type="text/css" href="css/adminpage.css">
</head>
<body>
	<div class="first" id="first" align="center">
		<img src="images/logo2.jpg" width="100" height="100">
		<h1>Bayero Univeristy Kano.</h1> </div>

		<div class="parent">
			<fieldset>
				<legend style="color: Green;"><strong>Welcome <?php echo $_SESSION['username'] ?></strong></legend>
				<ul>
					<li><a href="search_student.php">Search Student </a></li>
					<li><a href="student_list_admin.php">View Registered Students </a></li>
					<li><a href="student_list_dept.php">View Registered Students by Department</li>
					<li><a href="download_letter.php">Download Acceptance Letter </a></li>
					<li><a href="view_speform.php">View SPE1 Form </a></li>
					<li><a href="payment_form.php">Print Payment Forms </a></li>
					<li><a href="payment_dept.php">Print Payment Form by Department </a></li>
					<li><a href="admin_out.php">Logout </a></li>
				</ul>	
				
			</fieldset>
		</div>

</body>
</html>