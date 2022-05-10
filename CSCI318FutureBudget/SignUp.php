<html>
<head>
  <title>Sign Up</title>
  <meta charset="utf-8">
</head>
<body>
  <h2 align="center">Sign Up</h2>
  </hr/>
  <form action="register.php" method="post" enctype="multipart/form-data" align="center">
		Username:
		<input type="text" name="userName" size="20" maxlength="15" value="Username">
		<br>
		Password:
		<input type="password" name="passWord" size="20" maxlength="15">	
		<br>
		Comform Password:
		<input type="password" name="confirmpassWord"><br>
		<br>
		<input type="submit" name="submit" value="Sign Up">
		<input type="reset" name="cancel" value="Reset"> 
	</form>
</body>
</html>
