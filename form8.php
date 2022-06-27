<?php error_reporting(0); ?>

<?php 

	session_start();
	
	require('config.php');
	
	$sqll = "select * from profile, form8 where profile.reg_no = '".$_SESSION['reg_no']."' and form8.reg_no = '".$_SESSION['reg_no']."'";
		
	$res = mysqli_query($conn, $sqll);
		
			$cc = mysqli_num_rows($res);
			
			if($cc == 1){
			
			$f = mysqli_fetch_assoc($res);
			
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
	<link rel="stylesheet" type="text/css" href="css/form88.css">
	<style>
		
	</style>
</head>
<body>
		<div id="img" align="center"> <img src="images/formspe.png" alt="Form 8" width="970" height="160" > </div>
		<nav>
		<div>
			<ul id="MenuBar1" class="MenuBarVertical">
				<li>Student SIWES</li>
				<li><a href="uploadletter.php" target="_self"> Uplaod Acceptance Letter </a></li>
				<li><a href="bank.php" target="_self">Fill Bank Details </a> </li>
				<li><a href="form8.php" target="_self">Fill Form 8</a></li>
				<li><a href="print_form8.php" target="_self">Print Form 8</a></li>
				<li><a href="print_speform.php" target="_self">Print SPE 1 Form</a></li>
				<li><a href="letter.php" target="_self">Print Introduction Letter</a></li>
				<li><a href="logout.php" target="_self">Logout</a></li>
			</ul>
		</div>
	</nav>
	<fieldset id="f1">
		 
		<legend>Welcome&nbsp;<strong><?php echo $_SESSION['fname'] ?>&nbsp;<?php echo $_SESSION['surname'] ?></strong></legend>
		<fieldset> 
			<table width="719" align="center" cellpadding="1" cellspacing="1">
				<tr>
                      <td width="5">&nbsp;</td>
                      <td width="517"><div align="center">
				<?php
					$status = 1; 
  
    function GetImageExtension($imagetype)
     {
       if(empty($imagetype)) return false;
       switch($imagetype)
       {
           case 'image/bmp': return '.bmp';
           case 'image/gif': return '.gif';
           case 'image/jpeg': return '.jpg';
           case 'image/png': return '.png';
           default: return false;

       }
     }
if (!empty($_FILES["uploadedimage"]["name"])) {
    $file_name = $_FILES["uploadedimage"]["name"];
    $temp_name = $_FILES["uploadedimage"]["tmp_name"];
    $imgtype = $_FILES["uploadedimage"]["type"];
    $ext = GetImageExtension($imgtype);
    $imagename = $_SESSION['name'].$ext;
    $target_path = "upload_images/".$imagename;

if(move_uploaded_file($temp_name, $target_path)) {

	//require('config.php');
	
    $query_upload = "UPDATE form8 SET passport = '".$target_path."' WHERE form8.reg_no = '".$_SESSION['reg_no']."'";
	
	
    mysqli_query($conn, $query_upload);
	
		echo "<br>";
		echo "<img src=\"$target_path\" width=\"150\" height=\"150\"><br>";
        echo "<br>";
    	echo '<font color="green">Passport Uploaded successfully</font>';
}else{

   exit("Error While uploading image on the server");

	}

}
   
    ?>
    </div></td>
            </tr>
</table>
			<form action="form8.php" method="post" enctype="multipart/form-data" name="form" id="form">

			<legend id="f2" align="center">Upload Recent Passport</legend>
			<input type="file" name="uploadedimage" id="file" >
			<p class="t2">Format: (Passport size, size must be 1000kb below and file type .gif, .jpeg, .png )</p>
			<div id="upload1">
				<input name="Submit" id="upload2" type="submit" value="Uplaod Passport" />
			</div>
		</form>
		</fieldset>
		
		<fieldset id="f3">
			<legend>Programme Report Sheet</legend>
			<form action="exe_form8.php" method="POST"> 
			
				<table align="center" cellspacing="0" cellpadding="2">
				<tr>
				<th align="right"><b>Year of Study:</b></th>
				<td><label>
      <select name="yos" id="yos" required="required">
      <option value="<?php echo $f['yos'] ?>" selected="<?php echo $f['yos'] ?>"><?php echo $f['yos'] ?></option>
      
      <?php for($i = 2022; $i >= 1930; $i--){
	  	
		echo'<option value="'.$i.'">'.$i.'</option>'; 
		
		} ?>
      </select>
    </label>
        </td>
		</tr>
		<tr>
		<th align="right"><b>Name of Institution: </b> </th>
							<td align="left"><input type="text" value="<?php echo $f['noi'] ?>" name="noi" id="inst" required="required"></td>
						</tr>
						<tr > 
							<th align="right"><b>Name of the Establishment of Attachment: </b></td>
							<td align="left"><input type="text" value="<?php echo $f['noe'] ?>" name="noe" id="esta" required="required"></td>
						</tr>
							
					</div>
					<tr>
						<th align="right"><b>Address of the Establishment of the Attachment: </b></th>
						<td align="left"><textarea cols="40" rows="5" name="address" id="message" required="required"><?php echo $f['address'] ?></textarea></td>
					</tr>

					<tr>
						<th align="right"><b>The Department/Section:   </b> </th>
						<td align="left"><input type="text" name="sec" id="dept" required="required" value="<?php echo $f['sec'] ?>"></td>
					</tr>

					<tr>
						<th align="right"><b>Number of Weeks:</b></th>
						<td><input type="text" name="now" id="weeks" required="required" value="<?php echo $f['now'] ?>"></td>
					</tr>

					<tr>
						<th align="right"><b>Total Allowance received by student:</b></th>
						<td><input type="text" name="allowance" id="allow" required="required" value="<?php echo $f['allowance'] ?>"></td>
					</tr>

					<tr>
						<th align="right"><b>Brief and Outline the experience/relevance of training provided:</b></th>
						<td><textarea name="brief" id="train" cols="40" rows="5" required="required"><?php echo $f['brief'] ?></textarea></td>
					</tr>

					<tr>
						<th align="right"><b>Where were you attached last? (if applicable): </b></th>
						<td><input type="text" name="place" id="last" required="required" value="<?php echo $f['place'] ?>"></td>
					</tr>
					<tr>
						<th align="right"><b>Total number of weeks engaged on industrial attachment:</b></th>
						<td ><input type="text" name="toweeks" id="engaged" required="required" value="<?php echo $f['toweeks'] ?>"></td>
					</tr>

				</table>
					<div id="sub">
						<input id="submit" type="submit" name="Submit" value="Update Programme Report Sheet"/>&nbsp;&nbsp;
					</div>
						
			</form>
		</fieldset>
	</fieldset>
</body>
</html>