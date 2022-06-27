<!-- <?php error_reporting(E_ALL ^ E_NOTICE); ?> -->

<?php 
	
	session_start();
	
	require('config.php');

		$chk = "select reg_no from bank where reg_no = '".$_SESSION['reg_no']."' ";

		$chks = mysqli_query($conn, $chk);

		if($chks){
			$cc = mysqli_num_rows($chks);

			if($cc != 1){
			$se = "insert into bank(reg_no) values('".$_SESSION['reg_no']."')";

			$re = mysqli_query($conn, $se);
			
		}
	}

		$s = "select * from bank where reg_no = '".$_SESSION['reg_no']."' ";
		$r = mysqli_query($conn, $s);

		if($r){
			$b = mysqli_fetch_assoc($r);
			
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
	<link rel="stylesheet" type="text/css" href="css/s.menu.css">
	<link rel="stylesheet" type="text/css" href="css/bank.css">
	<style>
		.l1{
			margin-top: -15px;
			margin-bottom: 10px;
		}
	</style>
</head>
<body>
	<div class="head">
		<div align="center"><img src="images/logo2.jpg" width="100" height="100"></div>
	<h1>Bayero University Kano</h1>
	</div>
	
	<table class="t1" align="center" cellpadding="0" cellspacing="0">
		<tr>
			<td><table width="300" cellspacing="0" cellspacing="0">
				<tr>
					<td width="216" align="left" valign="top">
						<link rel="stylesheet" type="text/css" href="s.menu.css">
			<table class="t2" cellspacing="0" cellpadding="0" bgcolor="#CCCCCC">
				<tr>
					<td>
						<ul id="MenuBar1" class="MenuBarVertical">
				<li id="s1">Student SIWES</li>
				<li><a href="uploadletter.php" target="_self"> Uplaod Acceptance Letter </a></li>
				<li><a href="bank.php" target="_self">Fill Bank Details </a> </li>
				<li><a href="form8.php" target="_self">Fill Form 8</a></li>
				<li><a href="print_form8.php" target="_self">Print Form 8</a></li>
				<li><a href="print_speform.php" target="_self">Print SPE 1 Form</a></li>
				<li><a href="letter.php" target="_self">Print Introduction Letter</a></li>
				<li><a href="logout.php" target="_self">Logout</a></li>
						</ul>
					</td>
				</tr>
			</table>
					</td>
					<td width="682" align="left" valign="top" bgcolor="#FFFFFF">
						<fieldset class="f1">
							<legend>Welcome<strong><?php echo $_SESSION['fname'] ?> <?php echo $_SESSION['surname'] ?></strong></legend>
							<br>
							<fieldset>
								<legend align="center"><strong>Update Bank Details</strong></legend>
								<legend align="center" class="l1"> <?php echo "<br>";
    	echo '<font color="green">Bank Details Update successfully</font>'; ?></legend>
				<form action="exe_bank.php" class="bank" id="bank" name="bank" method="POST" >
		<table width="500" border="0" cellspacing="0" cellpadding="2" >
			<tr>
				<th width="184" align="right">&nbsp;</th>
				<td width="408"></td>
			</tr>
		<tr>
	<th align="right">Bank Name:</th>
	<td>&nbsp;
	<input type="text" name="bank_name" required="required" value="<?php echo $b['bank_name'] ?>" /></td>
	</tr>
	<tr>
	<th align="right">Account Number:</th>
	<td>&nbsp;
	<input type="text" name="acc_no" maxlength="10" required="required" value="<?php echo $b['acc_no'] ?>"  /></td>
	</tr>
	<tr>
	<th align="right">Bank Sort Code:</th>
	<td>&nbsp;
	<input type="text" name="sort_code" maxlength="10" required="required" value="<?php echo $b['sort_code'] ?>"/></td>
	</tr>
	<tr>
		<th align="right">&nbsp;</th>
		<td>&nbsp;</td>
	</tr>
	<tr>
		<th align="right">&nbsp;</th>
		<td><input type="submit" name="Submit" value="Submit Bank Details" style="height: 40px"></td>
		
		&nbsp;
	</tr>
						
	</table>
	</form>
	</fieldset>
	</fieldset>
	</td>
	</tr>
	</table></td>
	</tr>
	</table>
</body>
</html>