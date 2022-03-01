<!DOCTYPE html>
<html>
<head>
	<title>User Signup</title>
	<link rel="stylesheet" type="text/css" href="style.css">
<link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
</head>
<body>
	<div class="main">  	
		<input type="checkbox" id="chk" aria-hidden="true">

			<div class="login">
			<br>
					<div align="center">
          <p style="color:#302b63;font-size:24px;"><b>User Sign Up Page!</b></p></div>
				<form action="insert_user.php" method="POST">
        <br>
					<input type="text" name="username" placeholder="Username" required="">
					<input type="text" name="mail" placeholder="Email" required="">
					<input type="text" name="password" placeholder="Password" required="">
					<button>Sign up</button>
				</form>
			</div>
	</div>
</body>
</html>