<!DOCTYPE html>
<html>
<head>
	<title>Institute Login</title>
	<link rel="stylesheet" type="text/css" href="style.css">
<link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
</head>
<body>
	<div class="main">  	
		<input type="checkbox" id="chk" aria-hidden="true">
			<div class="login">
				<form action="check_institute_login.php" method="POST">
					<br><br><br>
					<div align="center">
          <p style="color:#302b63;font-size:24px;"><b>Institute Login Page!</b></p></div>
					<input type="txt" name="name" placeholder="Name of the Institute" required="">
					<input type="txt" name="password" placeholder="Password" required="">
					<button>Login</button>
				</form>
			</div>
	</div>
</body>
</html>