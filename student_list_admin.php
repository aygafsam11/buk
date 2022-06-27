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
	<title>BUK Portal</title>
	<style>
		*{box-sizing: border-box;}
		header{
			text-align: center;
			color: blue;
			justify-content: center;
		}
		fieldset{
			width: 500px;
			margin-right: auto;
			margin-left: auto;
			border-radius: 5px;
		}
		a{
			text-decoration: none;
			padding: 5px;

		}
		.view{
			background-color: blue;
			color: white;
			border: none;
			border-radius: 5px;
			font-size: 15px;
			cursor: pointer;
		}
		.delete{
			background-color: red;
			color: white;
			border: none;
			border-radius: 5px;
			margin-left: 5px;
			font-size: 15px;
			cursor: pointer;
		}
		@media screen and (max-width: 860px){
			.table1{
			width: auto;
		}
		fieldset{
			width: 300px;
		}
		.delete{
			margin-left: 0;
			margin-top: 2px;
		}
		}
		

	</style>
</head>
<body>
	<div class="container">
		<header>
		<img src="images/logo2.jpg" width="100" height="100">
		<h1>Bayero Univeristy Kano</h1>
	</header>
	<div>
		<fieldset>
			<legend><b>Welcome <?php echo $_SESSION['username'] ?> </B></legend>
			<a href="adminpage.php">Back</a> <a href="admin_out.php">Logout</a>
		</fieldset>
	</div>
		<table class="table1" width="830" align="center" cellpadding="3" cellspacing="0" border="1" bordercolor="#000000">
			<tr valign="top" align="left" bgcolor="#ccffff">
				<th width="44">&nbsp;S/No.</th>
				<th width="139">&nbsp;Name</th>
				<th width="139">&nbsp;Reg. No.</th>
				<th width="140">&nbsp;Course of Study</th>
				<th width="80">&nbsp;Action</th>
			</tr>
<?php
    $_SESSION['search'] = $_POST['search'];

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
				<th><input type="button" class="view" name="view" id="view" value="view" onclick="javascript: location.href='student_profile.php?reg_no=<?php echo $x['reg_no'] ?>'"><input type="button" class="delete" name="delete" id="delete" value="delete" onclick="javascript: location.href='delete_profile.php?reg_no=<?php echo $x['reg_no'] ?>'"></a></th>
			</tr>
<?php } ?>


			
		 </table>
	</div>
	

</body>
</html>