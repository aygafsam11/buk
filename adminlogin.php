
<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <meta name="HandheldFriendly" content="true">
  <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
	<title>BUK Portal</title>
	<style type="text/css">
     *{
      box-sizing: border-box;
     }

     .container{
     width: 100%;
    }
    h1{
      text-align: center;
      color: blue;
      font-size: 45px;
    }
    .form1{
      border: 1px solid green;
      width: 500px;
     margin-right: auto;
     margin-left: auto;
    }
    h2{
      text-align: center;
      color: green;
    }
    .add{
      margin-top: 10px;
    }
    
    .login{
      border-radius: 20px;
      background-color: blue;
      color: white;
      font-weight: bold;
      width: 180px;
      height: 35px;
      margin-left: 70px;
      border: none;
      cursor: pointer;
    }
    .foot{
      margin-top: 10px;
      font-style: italic;
      margin-left: 30px;
      margin-bottom: 10px;
    }
    .foot a {
      text-decoration: none;
      font-style: italic;
    }
    img{
      display: block;
  margin-left: auto;
  margin-right: auto;
  margin-top: 10px;
    }
    @media screen and (max-width: 500px){
      .form1{
      border: 1px solid green;
      width: 300px;
     margin-right: auto;
     margin-left: auto;
    }
    .container{
     margin-left: auto;
     margin-right: auto;
    }
    }
	</style>
</head>
<body>

  <div class="container">
    <img align="center" src="images/logo2.jpg" width="100" height="100">
    <div class="top">
    
    <h1>Bayero Univeristy Kano</h1>
  </div>
 
     
    <div class="form1" align="center">
       <form action="exe_adminlogin.php" method="post">
      <h2>FCSIT ADMIN LOGIN PAGE</h2>
          <table cellpadding="2" cellspacing="0" >
          <tr>
            <td colspan="3"><div align="center"><span style="color: red;">
              <?php if(isset($_GET['login_error'])){
				echo $_GET['login_error']; 
				}?>
            </span></div>
                <br /></td>
          </tr>
          <tr>
          <td align="right" id="userr">Username:</td>
          <td> <input type="text" name="username" id="username" placeholder="Username:" required="required"></td></tr>
          <tr>
          <td align="right" id="userr">Password:</td>
          <td> <input type="password" name="password" id="password" placeholder="Password:" required="required"></td></tr>
          </table>
          <div class="add">
          <button class="login" name="login">Login</button>
        </div>
        <div class="foot">Click <a href="#">here</a> to Create Admin Account</div>
        </div>
      
         
          </form>
          </div>
  </div>
	
   
 
		
</body>
</html>