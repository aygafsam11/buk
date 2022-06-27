<?php error_reporting(E_ALL ^ E_NOTICE); ?>
		<?php 
		session_start();
		require('config.php');

		$into = "select * from profile where reg_no = '".$_SESSION['reg_no']."' and status = 1";
		
		$res = mysqli_query($conn, $into);
		
		$c = mysqli_num_rows($res);
		
		if($c == 1){
		
			$into = mysqli_fetch_assoc($res);
		
		}
?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="utf-8">
	<meta name="HandheldFriendly" content="true">
	<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
	<title>BUK Portal</title>
	<link rel="stylesheet" type="text/css" href="css/letter.css">
</head>
<body>
	<div align="center"><img src="images/letter_headed.png" width="auto" height="210"></div>
	
	
	<section>
		<div class="datee">
		<p>Date: <strong><?php echo date("Y-m-d H:i:s"); ?></strong></p>
		<p>...............................................</p>
		<p>...............................................</p>
		<p>...............................................</p>
	</div>
	<div class="dear">
		<p><h2>Dear Sir/Ma,</h2></p>
		<h3 align="center"><strong>STUDENTS INDUSTRIAL WORK EXPERIENCE SCHEME (SIWES)</strong> </h3>
	</div>

	<div class="namee">
		<p>Name: <strong><?php echo $into['title'] ?> <?php echo $into['fname'] ?> <?php echo $into['surname'] ?> </strong></p>
		<p>Registration Number <strong><?php echo $_SESSION['reg_no'] ?></strong> from the Department of <b> <strong><?php echo $into['dept'] ?> </strong></b>for SIWES Programme.</p>
	</div>

	<div class="text1">
		<p>The Student`s Industrial Work Experience Scheme (SIWES) is financially supported by the Industrial Training Fund (ITF) and it will</p>
		<p>provide an opportunity for organizations such as yours to utilize the services of our talented and young computer scientist.
		</p><p>The student will require training from the end of second semester which is <strong><?php echo "23th June, 2022"; ?></strong>...
		 The duration of the training <br><p> is <strong><?php echo ucwords($into['duration']) ?></strong>
		I will be very grateful if you respond to this enquiry as soon as possible using the attached form.</p>
	</div>
	<div class="tanx">Thank you very much.</div>

	<div class="faith">
		<br>
		<p>Your faithfully, <br><br>
			Saminu M Aliyu<br><br><br>
			Departmental SIWES Coordinator<br>
			Bayero University Kano</p>

	</div>
	</section>
	<input class="print" type="button" name="button" value="Print" onclick="javascript: window.print()">
	<button name="Continue" class="continue" onclick="javascript: location.href='siw_menu.php'">Continue</button>
</body>
</html>