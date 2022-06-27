
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
	<link rel="stylesheet" type="text/css" href="css/search.css">
	<style>
		.view{
			border: 0 solid blue;
			font-weight: bold;
			border-radius: 5px;
			background-color: blue;
			color: white;
			height: 20px;
			width: 60px;
			cursor: pointer;
		}

		.del{
			border: 0 solid blue;
			font-weight: bold;
			border-radius: 5px;
			background-color: red;
			color: white;
			height: 20px;
			cursor: pointer;
		}
		</style>
</head>
<body>
	<div class="first" id="first" align="center">
		<img src="images/logo2.jpg" width="100" height="100">
		<h1>Bayero Univeristy Kano.</h1> </div>
		
		<div id="tx" class="tx">
			<fieldset>
			<legend><strong>Welcome <?php echo $_SESSION['username'] ?></strong></legend>
            <form action="search_student.php" method="post">
            <a href="adminpage.php">Back</a>
			<a href="admin_out.php">Logout</a>
			<br><br>
			<input class="txt1" type="text" name="search" id="search" placeholder="Name or Reg. No." size="40" required="required"><br><br>
			<div class="middle">
				<button class="search" id="search" style="cursor: pointer">Search</button> <button style="cursor: pointer" class="clear" id="clear">Clear</button>
            </form>
			
			</div>
		</fieldset>

		<table class="table1" width="830" align="center" cellspacing="0" cellpadding="3" border="1" bordercolor="#000000">
			<tr align="margin-left" valign="top" bgcolor="#ccffff">
				<th width="44">S/No.</th>
				<th width="139">Name</th>
				<th width="207">Reg. No.</th>
				<th width="208">Course of Study</th>
				<th width="120">Action</th>
			</tr>
            <?php
			
                $_SESSION['search'] = $_POST['search'];

                $sql = "select * from profile where reg_no = '".$_SESSION['search']."' or fname = '".$_SESSION['search']."' and letter_status = 1 and status = 1 ";

                $res = mysqli_query($conn, $sql);

                $i = 1;

                while($x = mysqli_fetch_assoc($res)){
                    ?>
                    <tr align="left"  valign="top" bgcolor="#FFFFCC">
                        <td>&nbsp;<?php echo $i++ ?></td>
                        <td>&nbsp;<?php echo $x['fname'] ?> <?php echo $x['surname'] ?></td>
                        <td>&nbsp;<?php echo $x['reg_no'] ?></td>
                        <td>&nbsp;<?php echo $x['dept'] ?></td>
					  <th align="left">&nbsp;<input class="view" name="button" type="button" value="View" onclick="javascript: location.href='student_profile.php?reg_no=<?php echo $x['reg_no'] ?>'"/>

                     &nbsp;<input name="button" class="del" type="button" value="Delete" onclick="javascript: location.href='delete_profile.php?reg_no=<?php echo $x['reg_no'] ?>'"/>
                    </th>
                </tr>
                <?php } ?>
        
		</table>
		</div>
		
</body>
</html>