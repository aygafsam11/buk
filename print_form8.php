

<?php 
error_reporting(0);
	session_start();

	require('config.php');

	$sql1 = "select * from form8, bank, profile where profile.reg_no = '".$_SESSION['reg_no']."' and bank.reg_no = '".$_SESSION['reg_no']."' and form8.reg_no = '".$_SESSION['reg_no']."' and profile.letter_status = 1 and spe = 1";

	$res = mysqli_query($conn, $sql1);

	$cc = mysqli_num_rows($res);

	if ($cc == 1) {
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
	<link rel="stylesheet" type="text/css" href="css/print_form8.css">
	<title>BUK Portal</title>
</head>
<body>
		<div class="container" align="center">
			<img src="images/formspe.png" alt="Form8" width="970"  height="160">
		</div>

		<table align="center" cellspacing="0" cellpadding="0">
			<tr>
				<th valign="top"><table width="900" cellspacing="0" cellpadding="0">
					<tr>
						<th width="682" align="center" valign="top">
							<table  cellpadding="0" cellspacing="0">
	<tr>
		<th align="center" valign="top"><img src="<?php echo $f['passport'] ?>" width="150" height="150"></th>
	</tr>
	<tr>
		<table width="939" align="center" cellspacing="5" cellpadding="5">
			<tr>
				<td width="427"><strong>PART A: (Student Profile Information)</strong></td>
				<td width="475">&nbsp;</td>
			</tr>
		<tr>
			<th align="right"><div align="left">Full-Name:</div></th>
			<td><?php echo $f['fname'] ?> &nbsp; <?php echo $f['surname'] ?></td>
		</tr>
		<tr>
			<th align="right"><div align="left">Reg. No./Matric No.:</div></th>
			<td><?php echo $f['reg_no'] ?></td>
		</tr>
		<tr>
			<th align="right"><div align="left">Course of Study:</div></th>
			<td><?php echo $f['dept'] ?></td>
		</tr>
		<tr>
			<th align="right"><div align="left">Year of Study:</div></th>
			<td><?php echo $f['yos'] ?></td>
		</tr>
		<tr>
			<th align="right"><div align="left">Name of Institution:</div></th>
			<td><?php echo $f['noi'] ?></td>
		</tr>
		<tr>
			<th align="right"><div align="left">Name of the Establishment of Attachment:</div></th>
			<td><?php echo $f['noe'] ?></td>
		</tr>
		<tr>
			<th align="right"><div align="left">Address of the Establishment of Attachment:</div></th>
			<td><?php echo $f['address'] ?></td>
		</tr>
		<tr>
    <th><div align="left">The Department/Section:</div></th>
    <td><?php echo $f['sec'] ?></td>
  </tr>
		<tr>
			<th align="right"><div align="left">Period of Attachment: From</div></th>
			<td align="left"><?php echo $f['start'] ?>
				&nbsp;&nbsp;<strong>To</strong>&nbsp;&nbsp;<?php echo $f['end'] ?>
			</td>
		</tr>

		<tr>
			<th align="right"><div align="left">Number of Weeks:</div></th>
			<td><?php echo $f['now'] ?></td>
		</tr>

		<tr>
			<th align="right"><div align="left">Total Allowance received by Student:</div></th>
			<td><?php echo $f['allowance'] ?></td>
		</tr>
		<tr>
			<th align="right"><div align="left">Brief and Outine the experience/relevance of the training provided:</div></th>
			<td><?php echo $f['brief'] ?></td>
		</tr>

		<tr>
			<th align="right"><div align="left">Where were you attached last? (if applicable):</div></th>
			<td><?php echo $f['place'] ?></td>
		</tr>
		<tr>
			<th align="right"><div align="left">Total number of weeks engaged on industrial attachment:</div></th>
			<td><?php echo $f['toweeks'] ?></td>
		</tr>
		<tr>
			<th>&nbsp;</th>
			<th>&nbsp;</th>
		</tr>
		<tr>
			<th align="left">&nbsp;</th>
			<th>&nbsp;</th>
		</tr>

		<tr>
			<th align="left">Signature of Student:................................................................</th>
			<td>Date:&nbsp;<strong><?php echo date('Y-m-d'); ?></strong></td>
		</tr>

		<tr>
			<td colspan="2" align="center"></td>
		</tr>
		</table>

		<table width="939" cellpadding="0" cellspacing="0">
			<tr>
        <td><br /><strong>PART B (To be Completed by the Employer)</strong></td>
      </tr>
			<tr>
				<td><br>
					Do you agree with the student's comments on the issues of Total Allowance receiveed by Student and Brief of experience/relevance of training provided in PART A? YES/NO<br />
          If No, Please Comment: .................................................................................................................................................................................................<br />
          <br />
          ..........................................................................................................................................................................................................................................<br />
          <br />
          State total amount paid to students ITF allowance: NGN................................... In words ......................................................................................<br />
          <br />
          Please assess the student's overall performance by ticking appropriate as provided: <strong>(A).</strong> VERY GOOD <strong>(B).</strong> GOOD <strong>(C).</strong> SATISFACTORY <strong>(D).</strong> POOR<br />
          <br />
          Will you accept the student in any future attachment? YES/NO<br />
          <br />
          If No, please comment: ..................................................................................................................................................................................................<br />
          <br />
          .........................................................................................................................................................................................................................................<br />
          <br />
          Is your Company/Establishment in a position to offer this student a job in future? .............................................................................................<br />
          <br />
          Name of Reporting Officer: ............................................................................................ Designation/Rank: ............................................................<br />
          <br />
          <br />
          Signature/Stamp: ............................................................................................ Date: <strong><?php echo date('Y-m-d') ?></strong><br /><br /><strong>N.B.</strong> Forms duly complete by employers should be forwarded to-collected by the respective instityutions under seal:<br /><br /></td>
      </tr>
      <tr>
        <td><strong>PART C (To be Completed by the Institution)</strong><br /><br />
          Indicate number of Visits:...........................................................................................................................................................................................<br />
          <br />
          Give your assessment of facilities provided by Company during visit(s) by ticking: <br />
          <br />
          <strong>A.</strong> STANDARD <strong>B.</strong> ADEQUATE <strong>C.</strong> RELEVANT <strong>D.</strong> NOT RELEVANT<br />
<br />
Give yourimpression of the student's involvements in training: FULLY/PARTIALLY<br />
<br />.........................................................................................................................................................................................................................................<br />
<br />
.........................................................................................................................................................................................................................................<br />
<br />
.........................................................................................................................................................................................................................................<br />
<br />
.........................................................................................................................................................................................................................................<br />
<br />
Assessment of student's performance (Grading "A, B, C, OR D" HAS TO BE STATED).<br />
<br />
.........................................................................................................................................................................................................................................<br />
<br />
.........................................................................................................................................................................................................................................<br />
<br />
.........................................................................................................................................................................................................................................<br />
<br />
.........................................................................................................................................................................................................................................<br />
<br />
Full Name of Supervisor: ................................................................................................................ Status: ..............................................................<br />
<br />
Department/Disicipline: .............................................................................................................................................................................................<br>
<br />
<br />
Signature/Stamp: ............................................................................................................................ Date: <strong><?php echo date('Y-m-d') ?></strong><br />
<br />
<strong>N.B.</strong> This form is to be returned to the ITF on completion by the respective insttutions under seal.</td>
      </tr>
      <tr>
        <td align="right">&nbsp;</td>
      </tr>
      <tr>
        <td align="right"><input type="submit" name="Submit" id="button" value="Print Form 8" onclick="Javascript: self.print();" />&nbsp;<input type="button" name="Back_button" id="button" value="Back" onclick="javascript: location.href='siw_menu.php'"/>
        </td>
      </tr>
		</table>
	</tr>
	</table>
	</th>
	</tr>
	</table></th>
					
	</th>
	</tr>
</table>
</body>
</html>