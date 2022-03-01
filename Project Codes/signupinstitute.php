<!DOCTYPE html>
<html>
<head>
	<title>Institute Signup</title>
	<link rel="stylesheet" type="text/css" href="style.css">
<link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
</head>
<body>
	<div class="main">  	
		<input type="checkbox" id="chk" aria-hidden="true">
			<div class="login">
<br>
			<form action="insert_institute.php" method="POST">
					<input type="text" name="name" placeholder="Name of Institute" required="">
					<input type="text" name="password" placeholder="Password" required="">
          <input type="text" name="phone_no" placeholder="Phone Number" required="">
          <input type="text" name="address" placeholder="Address" required="">
          <input type="text" name="web_page" placeholder="Web Page" required="">
          <input type="text" name="bank_no" placeholder="Bank NO" required="">
					<button>Sign up</button>
				</form>
			</div>
	</div>
</body>
</html>