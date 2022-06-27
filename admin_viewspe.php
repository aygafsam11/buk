<?php 
    error_reporting();
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
	<title>BUK Portal</title>
	<link rel="stylesheet" type="text/css" href="css/download_letter.css">
</head>
<body>
	<div class="container">
		<header>
		<img src="images/logo2.jpg" width="100" height="100">
		<h1>Bayero Univeristy Kano</h1>
	</header>
	<div>
		<fieldset>
			<legend><b>Welcome <?php echo $_SESSION['username'] ?></b></legend>
			<a href="adminpage.php">Back</a> <a href="admin_out.php">Logout</a>
		</fieldset>
		<table class="table1" width="830" align="center" cellpadding="3" cellspacing="0" border="1" bordercolor="#000000">
			<tr valign="top" align="left" bgcolor="#ccffff">
				<th width="34">&nbsp;S/No.</th>
				<th width="139">&nbsp;Name</th>
				<th width="139">&nbsp;Reg. No.</th>
				<th width="140">&nbsp;Course of Study</th>
				<th width="50">&nbsp;Action</th>
			</tr>
<?php

    $sql = "select * from profile where letter_status = 1 and status = 1";

    $res = mysqli_query($conn, $sql);

    $i = 1;

    while($x = mysqli_fetch_assoc($res)){
        ?>
			<tr align="left" valign="top" bgcolor="#FFFFCC">
				<td>&nbsp;<?php echo $i++ ?></td>
				<td>&nbsp;<?php echo $x['fname'] ?>&nbsp;<?php echo $x['surname'] ?></td>
				<td>&nbsp;<?php echo $x['reg_no'] ?></td>
			<td>&nbsp;<?php echo $x['dept'] ?></td>

<th><input type="button" class="download" name="download" id="download" value="Download letter" onclick="javascript: location.href='<?php echo $x['letter'] ?>' ">
</th>
			</tr>
  <?php  } ?>

		 </table>
	</div>
</body>
</html>