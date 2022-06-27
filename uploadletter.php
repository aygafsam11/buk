<?php error_reporting(E_ALL ^ E_NOTICE); ?>
<?php
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
	<link rel="stylesheet" type="text/css" href="css/s.menu.css">
	<link rel="stylesheet" type="text/css" href="css/uploadletter.css">
	<style>
		
		
		/* @media screen and (max-width: 1115px){
			nav{
				width: auto;
				margin-left: 100px;
				margin-right: auto;
			}
			fieldset{
				margin-left: auto;
				margin-right: auto;
			}
		} */
	</style>
</head>
<body>
	<div class=""><img src="images/logo2.jpg">
		<h1>Bayero University Kano</h1>
	</div>
	<div class="body">
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
		
		<fieldset>
			
			<legend>Upload Acceptance Letter:&nbsp;<strong><?php echo $_SESSION['fname']  ?> <?php echo $_SESSION['surname']  ?>
			</strong> </legend>
			<table width="546" cellspacing="1" cellpadding="1">
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
    $target_path = "upload_letter/".$imagename;

if(move_uploaded_file($temp_name, $target_path)) {

	require('config.php');
	
    $query_upload = "UPDATE profile SET letter = '".$target_path."',  letter_status = '$status' WHERE profile.reg_no = '".$_SESSION['reg_no']."'";
	
	
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
		<table> 
		<tr>
		<form action="uploadletter.php" method="post" enctype="multipart/form-data" name="form" id="form">
				<input class="file" type="file" name="uploadedimage" id="uploadedimage" required>
			<p class="t2">Format: (Acceptance Letter size, size must be 1000kb below and file type .gif, .jpeg, .png )</p>
			<div class="upload1">
				<input name="Sumit" type="submit" class="upload2" value="Upload" /> <input type="button" name="button" class="proceed" value="Proceed to Bank" onclick="javascript: location.href='bank.php'" />
			</div>
			</form>
		</tr>	
		</table>
		
		</fieldset>
	
</div>
</body>
</html>