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
			border-radius: 5px;
			margin-right: auto;
			margin-left: auto;
		}
		a {
			text-decoration: none;
			padding: 5px;
		}
		.form1{
			margin-top: 10px;
		}
		.submit{
			height: 30px;
			background-color: teal;
			color: white;
			width: 100px;
			font-weight: bold;
			font-family: sans-serif;
			border-radius: 5px;
			border: none;
		}
		.clear{
			height: 30px;
			background-color: blue;
			width: 50px;
			color: white;
			font-weight: bold;
			font-family: sans-serif;
			border-radius: 5px;
			border: none;
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
		@media screen and (max-width: 840px){
			.table1{
				width: auto;
			}
			.delete{
				margin-top: 2px;
				margin-left: 0;
			}
		}
		@media screen and (max-width: 515px){
			.table1{
				width: auto;
			}
			.delete{
				margin-top: 2px;
				margin-left: 0;
			}
			fieldset{
				width: auto;
			}
		}
	</style>
</head>
<body>
	<div container>
		<header>
		<img src="images/logo2.jpg" width="100" height="100">
		<h1>Bayero Univeristy Kano</h1>
	</header>
	<div>
		<fieldset>
			<legend>Welcome <strong?> <?php echo $_SESSION['username'] ?> </strong></legend>
			<a href="adminpage.php">Back</a> <a href="admin_out.php">Logout</a>
			<form class="form1" method="post" action="payment_dept.php">
				<select id="search" name="search">
					<option selected="selected" value="select">Select</option>
					<option value="Computer Science">Computer Science</option>
					<option value="Cyber Security">Cyber Security</option>
					<option value="Information Technology">Information Technology</option>
					<option value="Software Engineering">Software Engineering</option>
				</select><br><br>
				<button name="submit" class="submit" type="submit">Search</button> <button class="clear" id="clear">Clear</button>
			</form>
		</fieldset>
			<table class="table1" width="960" align="center" cellpadding="3" cellspacing="0" border="1" bordercolor="#000000">
			<tr valign="top" align="left" bgcolor="#ccffff">
				<th width="44">&nbsp;S/No.</th>
				<th width="139">&nbsp;Name</th>
				<th width="139">&nbsp;Reg. No.</th>
				<th width="180">&nbsp;Course of Study</th>
				<th width="150">&nbsp;Bank Name</th>
				<th width="150">&nbsp;Account No.</th>
				<th width="150">&nbsp;Sort Code</th>
				<th width="150">&nbsp;Action</th>
			</tr>
<?php 
        $_SESSION['search'] = $_POST['search'];

        $sql = mysqli_query($conn, "select * from profile p, bank b where p.dept = '".$_SESSION['search']."' and p.letter_status = 1 and p.status = 1 and p.reg_no = b.reg_no and b.status = 1 order by dept asc ");

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
				<th><input type="button" class="view" name="view" id="view" value="view" onclick="javascript: location.href='student_payment_profile.php?reg_no=<?php echo $x['reg_no'] ?>'"><input type="button" class="delete" name="delete" id="delete" value="delete"></th>
			</tr>
       <?php } ?>
			
		 </table>
	</div>
</body>
</html>