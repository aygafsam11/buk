<?php
error_reporting(0);
    session_start();
    require('config.php');

    $_SESSION['reg_no'] = $_GET['reg_no'];

    $sql = "select * from profile, form8, bank where profile.reg_no = '".$_SESSION['reg_no']."' and bank.reg_no = '".$_SESSION['reg_no']."' and form8.reg_no = '".$_SESSION['reg_no']."' and profile.status = 1 and form8.spe = 1 and bank.status = 1";

    $res = mysqli_query($conn, $sql);
    if($res){
        $f = mysqli_fetch_assoc($res);
    }
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>BUK Portal</title>
<link rel="stylesheet" type="text/css" href="css/student_profile.css">
</head>

<body>
<div class="first" id="first" align="center">
		<img src="images/logo2.jpg" width="100" height="100">
<h1>Bayero Univeristy Kano.</h1> </div>

<table width="650" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="635" align="left" valign="top"><fieldset style="border-radius: 5px"><legend>Welcome <strong><?php echo $_SESSION['username'] ?></strong></legend>
    
       <table width="300" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="53">&nbsp;<a href="adminpage.php">Back</a></td>
    <td width="247">&nbsp;<a href="admin_out.php">Logout</a></td>
  </tr>
</table>
    </fieldset></td>
  </tr>
</table><br />
<table align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td valign="top"><table width="900" cellpadding="0" cellspacing="0">
      <tr>
        <td width="682" align="center" valign="top">
          <table cellspacing="0" cellpadding="0">
  <tr>
    <td align="center" valign="top"><img src="<?php echo $f['passport'] ?>" width="150" height="150" /></td>
  </tr>
  <tr>
    <td>
    <table width="939" align="center" cellpadding="5" cellspacing="5">
  <tr>
    <td width="427"><strong>Student Profile Information</strong></td>
    <td width="475">&nbsp;</td>
  </tr>
  <tr>
    <th align="right"><div align="left">Fullame:</div></th>
    <td><?php echo $f['fname'] ?>&nbsp;<?php echo $f['surname'] ?></td>
  </tr>
  <tr>
    <th align="right"><div align="left">Reg. No./Matric No.:</div></th>
    <td><?php echo $f['reg_no'] ?></td>
  </tr>
  <tr>
    <th align="left">Email:</th>
    <td><?php echo $f['email'] ?></td>
  </tr>
  <tr>
    <th align="left">&nbsp;Phone</th>
    <td><?php echo $f['mobile'] ?></td>
  </tr>
  <tr>
    <th><div align="left">Course of Study:</div></th>
    <td><?php echo $f['dept'] ?></td>
  </tr>
  <tr>
    <th><div align="left">Year of Study:</div></th>
    <td><?php echo $f['yos'] ?></td>
  </tr>
  <tr>
    <th><div align="left">Duration of Industrial Attachment:</div></th>
    <td><?php echo $f['duration'] ?></td>
  </tr>
  <tr>
    <th><div align="left">Name of Institution:</div></th>
    <td><?php echo $f['noi'] ?></td>
  </tr>
  <tr>
    <th><div align="left">Name of the Establishment of Attachment:</div></th>
    <td><?php echo $f['noe'] ?></td>
  </tr>
  <tr>
    <th><div align="left">Address of the Establishment of Attachment:</div></th>
    <td><?php echo $f['address'] ?></td>
  </tr>
  <tr>
    <th><div align="left">The Department/Section:</div></th>
    <td><?php echo $f['sec'] ?></td>
  </tr>
  <tr>
    <th><div align="left">Period of Attachment: From</div></th>
    <td align="left"><?php echo $f['start'] ?>
      &nbsp;&nbsp;<strong>To</strong>&nbsp;&nbsp;<?php echo $f['end'] ?>     </td>
  </tr>
  <tr>
    <th><div align="left">Number of Weeks:</div></th>
    <td align="left"><?php echo $f['now'] ?></td>
  </tr>
  <tr>
    <th><div align="left">Total Allowance recieved by student:</div></th>
    <td><?php echo $f['allowance'] ?></td>
  </tr>
  <tr>
    <th><div align="left">Brief and Outline the experience/relevance of training provided:</div></th>
    <td><?php echo $f['brief'] ?></td>
  </tr>
  <tr>
    <th><div align="left">Where were you attached last? (if applicable)</div></th>
    <td><?php echo $f['place'] ?></td>
  </tr>
  <tr>
    <th><div align="left">Total number of weeks engaged on industrial attachment:</div></th>
    <td><?php echo $f['toweeks'] ?></td>
  </tr>
  <tr>
    <th>&nbsp;</th>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <th><div align="left">Bank Information....</div></th>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <th><div align="left">Bank Name:</div></th>
    <td><?php echo $f['bank_name'] ?></td>
  </tr>
  <tr>
    <th><div align="left">Account Number:</div></th>
    <td><?php echo $f['acc_no'] ?></td>
  </tr>
  <tr>
    <th><div align="left">Bank Sort Code:</div></th>
    <td><?php echo $f['sort_code'] ?></td>
  </tr>
  <tr>
    <td colspan="2" align="center"></td>
  </tr>
</table>

    <table width="939" cellpadding="0" cellspacing="0">
      <tr>
        <td align="right"><input type="submit" name="Submit" id="button" class="submit" value="Print" style="height:50px" onclick="Javascript: self.print();" />&nbsp;<input type="button" class="back" name="Back_button" id="button" value="Back" style="height: 50px" onclick="javascript: location.href='adminpage.php'"/>
          </td>
      </tr>
    </table></td>
  </tr>
</table>

       </td>
      </tr>
    </table></td>
  </tr>
</table>
</body>
</html>
