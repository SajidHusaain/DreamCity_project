<!DOCTYPE html>
<html>
<head>
	<title>Admin Login</title>
	<style type="text/css">
html{ height:100%;  background:  url(images/b.png) no-repeat center center fixed;
    background-size: cover; }
 .main_container{
  margin: 0 auto;
  width: 80%;
  height: auto;
 }
  body{ min-height:100%; padding:0; margin:0; position:relative; }
  body::after{ content:''; display:block; height:100px; }
	.main_container{
		margin: 0 auto;
		width: 80%;
		height: auto;
	}
	.login{
		margin: 0 auto;
		margin-top: 120px;
		width: 500px;
		height: 420px;
        background: rgba(0,0,0,0.2);
        border-radius: 15px;
        box-shadow: 0px 1px 0px rgba(0,0,0,0.3),inset 0px 1px 0px rgba(255,255,255,0.07);
		
	}
	fieldset{
		border-radius: 15px;
	}
	input[type=text] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    height: 40px;
    color: black;
    font-weight: bold;
    border-radius: 5px; 
}
input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    height: 40px;
    color: black;
    font-weight: bold;
    border-radius: 5px; 
}
input[type=submit] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    height: 45px;
    color:black;
    font-weight: bold;
    border-radius: 10px; 
    font-size: 18px;
}
label{

	font-size: 18px;
}
	</style>
</head>
<body>	
<!-- Main Container Start-->
<div class="main_container">
<div class="login">
<fieldset style="height: 400px;">
<legend style="color:black; font-size: 30px;">Admin Login</legend>
<table  style="text-align: center;" cellpadding="10" cellspacing="18">
	<form action="login.php" method="post">
		<tr>
			<td>
				<label>User Name</label>
			</td>
			<td><input type="text" name="username" placeholder="Enter Your Username....." /></td>
		</tr>

		<tr>
			<td>
				<label>Password</label>
			</td>
			<td><input type="Password" name="pwd" placeholder="Enter Your Password....." /></td>
		</tr>

		<tr>
			<td></td>
			<td colspan="2"><input type="Submit" name="login" value="Login" /></td>
		</tr>

	</form>
</table>
</fieldset>
</div>
</div>
<!-- Main Container Ends -->
<!-- Footer Start-->
<?php include 'footer.php'; ?>
<!-- Footer Ends -->
</body>
</html>