<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="utf-8">
	<meta name="HandheldFriendly" content="true">
	<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
	<title>BUK Portal</title>
	<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/sty.css">

</head>
<body>
		<header>
			<img src="images/logo2.jpg" alt="BUK logo" height="100" width="100">
			<h1><strong> Bayero University Siwes Portal </strong> </h1>
		</header>
	
	<form class="test" action="exe_profile.php" method="POST"> <fieldset>
		<legend>Student Personal Information</legend>
		<tr>
          <td colspan="2" align="center"><div align="center"><font color="#FF0000">
              <?php if(isset($_GET['login_error'])){
				echo $_GET['login_error']; 
			}?>
            </font></div></td>
          </tr>
		<div class="container">

			<div class="row">
				<div class="col-25">
					<label for="title">Title:</label>
				</div>
				<div class="col-75">
					<select name="title" id="title" required="required">
						<option selected="selected">Mr.</option>
						<option>Mrs.</option>
						<option>Miss.</option>
					</select>
				</div>
			</div>
			<div class="row">
				<div class="col-25">
					<label for="fname">FirstName:</label>
				</div>
				<div class="col-75">
					<input type="text" name="fname" id="fname" placeholder="Enter yout FirstName" required="required">
				</div>
			</div>

			<div class="row">
				<div class="col-25">
					<label for="sname">Surname:</label>
				</div>
				<div class="col-75">
					<input type="text" name="surname" id="surname" placeholder="Enter yout SurName" required="required">
				</div>
			</div>
			
			<div class="row">
				<div class="col-25">
					<label for="reg">Reg. No:</label>
				</div>
				<div class="col-75">
					<input type="text" name="reg_no" id="reg_no" placeholder="Enter yout Registration Number" required="required">
				</div>
			</div>
			
			<div class="row">
				<div class="col-25">
					<label for="email">Email:</label>
				</div>
				<div class="col-75">
					<input type="email" name="email" id="email" placeholder="Enter yout Email" required="required">
				</div>
			</div>
			
			<div class="row">
				<div class="col-25">
					<label for="mobile">Mobile:</label>
				</div>
				<div class="col-75">
					<input type="text" name="mobile" id="mobile" placeholder="(000) - 0000000" maxlength="12" required="required">
				</div>
			</div>
			
			<div class="row">
				<div class="col-25">
				<label for="gender">Gender:</label>
				</div>
				<div class="col-75">
		<select required="required" name="gender" id="gender">
			<option>Select</option>
			<option >Male</option>
			<option >Female</option>
			<option >Others</option>
		</select>
			</div>	
			</div>
			
			<div class="row">
				<div class="col-25">
					<label for="dept">Department:</label>
				</div>
				<div class="col-75">
					<select id="dept" name="dept" required="required">
						<option>Select Department</option>
						<option>Computer Science</option>
						<option>Cyber Security</option>
						<option>Information Technology</option>
						<option>Software Engineering</option>
						<option>Mathematics</option>
						<option>Geography</option>
						<option>Mass Communication</option>
						<option>Biology</option>
					</select> 
				</div>
			</div>


			<div class="row">
				<div class="col-25">
					<label for="level">Level:</label>
				</div>
				<div class="col-75">
					<select id="level" name="level" required="required">
						<option>Selec Level</option>
						<option>300</option>
						<option>400</option>
					</select>
				</div>
			</div>

			<div class="row">
				<div class="col-25">
					<label for="title">Duration:</label>
				</div>
				<div class="col-75">
					<select name="duration" id="duration" required="required">
						<option selected="selected">Select</option>
						<option>Three (3) Months</option>
						<option>Six (6) Months</option>
					</select>
				</div>
			</div>
			<div class="row">
				<div class="col-25">
					<label for="title">Start Date:</label>
				</div>
				<div class="col-75">
					<input type="date" name="start" id="start" required="required">
				</div>
			</div>
			<div class="row">
				<div class="col-25">
					<label for="title">End Date:</label>
				</div>
				<div class="col-75">
					<input type="date" name="end" id="end" required="required">
				</div>
			</div>
			<div class="row">
				<div class="col-25">
					<label for="pass">Password:</label>
				</div>
				<div class="col-75">
					<input type="password" name="password" id="password" placeholder="Create your Password" required="required">
				</div>
			</div>

			<div class="row">
				<div class="col-25">
					<label for="cpass">Conifrm-Password:</label>
				</div>
				<div class="col-75">
					<input type="password" name="cpass" id="cpass" placeholder="Create your Password" required="required">
				</div>
			</div>
			<p>
				<div class="row">
				<input id="submit" type="submit" name="Submit" value="Submit">
			</div>
			</p>
			

		</div>
	</fieldset>
	</form>
	
	
</body>
</html>