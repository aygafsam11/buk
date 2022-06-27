<?php error_reporting(0); ?>
<?php 
	session_start();

	require('config.php');

	$sql = "select * from profile, bank, form8 where profile.reg_no = '".$_SESSION['reg_no']."' and bank.reg_no = '".$_SESSION['reg_no']."' and form8.reg_no = '".$_SESSION['reg_no']."' and letter_status = 1";

	$result = mysqli_query($conn, $sql);

	$c = mysqli_num_rows($result);

	if($c != 1){
		header("location: siw_menu.php");
		exit();
	}

	$sql1 = "select * from form8, bank, profile where form8.reg_no = '".$_SESSION['reg_no']."' and bank.reg_no = '".$_SESSION['reg_no']."' and profile.reg_no = '".$_SESSION['reg_no']."' and form8.spe = 1";

	$res = mysqli_query($conn, $sql1);

	$cc = mysqli_num_rows($res);

	if($cc == 1){
		$f = mysqli_fetch_assoc($res);
	}else{
		header("location: siw_menu.php");
		exit();
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
	<style>
		*{
			box-sizing: border-box;
		}
		.button{
			background-color: #2a38f8;
			color: white;
			border-radius: 10px;
			border: none;
		}
		
		img{
			display: block;
			margin-right: auto;
			margin-left: auto;
		}
		@media screen and (max-width: 860px){
			.im{
				margin-left: auto;
				margin-right: auto;
				width: 100%;
			}
			
		}
	</style>
</head>
<body>
	<div class="parent"><img class="im" src="images/formspe.png" width="950" height="196"></div>
	<br>
	<table align="center" cellspacing="0" cellpadding="3">
		<tr>
			<td width="700">From: <strong><?php echo $f['noi'] ?>&nbsp;</strong><br><br>
			Name of Organization: <strong><?php echo $f['noe'] ?>&nbsp;</strong><br><br>
			Location Address: <strong><?php echo $f['address'] ?>&nbsp;</strong><br><br></td>
			<td width="365" valign="top">To: Area Manager <br />
			<br />
			<br />
			<br />
		ITF: ..........................................</td>
		</tr>
		<tr>
			<td colspan="2"><table border="1" cellpadding="2" cellspacing="0" bordercolor="#000000">
				<tr>
					<th width="150">Name of Student</th>
					<th>Matric. No</th>
					<th>Course of Study and Year</th>
					<th>Name of Institution</th>
					<th>Period of Attachment in Months</th>
					<th>Date of Commencement</th>
					<th>Date of Completion</th>
					<th>Remarks</th>
				</tr>
				<tr>
					<td align="center"><?php echo $f['fname'] ?> <?php echo $f['surname'] ?></td>
					<td align="center"><?php echo $f['reg_no'] ?></td>
					<td align="center"><?php echo $f['dept'] ?> / <?php echo $f['yos'] ?></td>
					<td align="center"><?php echo $f['noi'] ?></td>
					<td align="center"><?php echo $f['start'] ?>&nbsp;<b>To</b>&nbsp;<?php echo $f['end'] ?></td>
					<td align="center"><?php echo $f['start'] ?></td>
					<td align="center"><?php echo $f['end'] ?></td>
					<td></td>
					
				</tr>
			</table>
			<br><br>
			</td>
		</tr>
		<tr>
      	<td valign="top">This form is to be completed by the Employer and sent to ITF Area Office ........................................By hand</td>
        <td class="down" valign="top">Date: <strong><?php echo date('Y-m-d') ?></strong><br />
<br />
Stamp and Signature of Employer: .......................................................</td>
</tr>
<tr>
      <td colspan="2" align="right" valign="top">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="2" align="right" valign="top">
      	<input class="button" type="submit" name="Submit" id="button" value="Print SPE Form" style="height:50px" onclick="Javascript: self.print();" />&nbsp;<input class="button" type="button" name="Back_button" id="button" value="Back" style="height: 50px" style="width: 70px" onclick="javascript: location.href='siw_menu.php'"/></td>
    </tr>
	</table>
	
</body>
</html>