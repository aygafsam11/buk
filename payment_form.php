<?php
        error_reporting(0);
        session_start();
        require('config.php');
?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <meta name="HandheldFriendly" content="true">
  <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
	<title> BUK Portal</title>
    <link rel="stylesheet" href="css/payment_form.css">
</head>
<body>
	<div container>
		<header>
		<img src="images/logo2.jpg" width="100" height="100">
		<h1>Bayero Univeristy Kano</h1>
	</header>
	<div>
		<fieldset>
			<legend>Welcome <?php echo $_SESSION['username'] ?></legend>
			<a href="adminpage.php">Back</a> <a href="admin_out.php">Logout</a>
			
		</fieldset>
			<table class="table1" width="960" align="center" cellpadding="3" cellspacing="0" border="1" bordercolor="#000000">
			<tr valign="top" align="left" bgcolor="#ccffff">
				<th width="30">&nbsp;S/No.</th>
				<th width="139">&nbsp;Name</th>
				<th width="139">&nbsp;Reg. No.</th>
				<th width="180">&nbsp;Course of Study</th>
				<th width="150">&nbsp;Bank Name</th>
				<th width="150">&nbsp;Account No.</th>
				<th width="150">&nbsp;Sort Code</th>
				<th width="150">&nbsp;Action</th>
			</tr>
<?php

    $sql = mysqli_query($conn, "select * from profile p, bank b where p.letter_status = 1 and p.status = 1 and p.reg_no = b.reg_no and b.status = 1");

    $i = 1;
    while($x = mysqli_fetch_assoc($sql)){
        ?>
        <tr align="left" valign="top" bgcolor="#FFFFCC">
				<td><?php echo $i++ ?></td>
				<td><?php echo $x['fname'] ?>&nbsp;<?php echo $x['surname'] ?></td>
				<td><?php echo $x['reg_no'] ?></td>
				<td><?php echo $x['dept'] ?></td>
				<td><?php echo $x['bank_name'] ?></td>
				<td><?php echo $x['acc_no'] ?></td>
				<td><?php echo $x['sort_code'] ?></td>
				<th><input type="button" class="view" name="view" id="view" value="view" onclick="javascript: location.href='student_payment_profile.php?reg_no=<?php echo $x['reg_no']?> '"><input type="button" class="delete" name="delete" id="delete" value="delete"></th>
			</tr>
  <?php  } ?>
			
		 </table>
	</div>
</body>
</html>