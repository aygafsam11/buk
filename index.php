
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="utf-8">
	<meta name="HandheldFriendly" content="true">
	<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
	<title>BUK Portal</title>
	<link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body>
	<div class="first" id="firs" align="center">
		<img src="images/logo2.jpg" width="100" height="100">
		<h1>Bayero Univeristy Kano.</h1>
	</div>
		<form class="form1" method="POST" action="exe_login.php">
			<h2 align="center" class="sec" id="sec">FCSIT SIWES LOGIN PAGE</h2>

			<table cellspacing="0" cellpadding="2" align="center">
			<tr>
          <td colspan="2" align="center"><div align="center"><font color="#FF0000">
              <?php if(isset($_GET['login_error'])){
				echo $_GET['login_error']; 
			}?>
            </font></div></td>
          </tr>
				<div id="tb" align="center">
					<tr>
					<td align="right">Username:</td>
					<td><input type="text" name="reg_no" id="reg_no" placeholder="Reg. Number:/Matric No:" required="required"></td>
				</tr>
				<tr>
					<td align="right">Password:</td>
					<td><input type="password" name="password" id="password" placeholder="Password" required="required"></td>
				</tr>
				</div>
			</table>
			<div>
					<button class="login" id="login" name="login">Login</button>
				</div>
				<div class="foot" id="foot">Click <a href="create_student.php">here</a> to Create Student Profile</div>
		</form>
</body>
</html>