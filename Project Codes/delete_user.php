<!DOCTYPE html>
<html>
<head>
	<title>Delete User</title>
	<link rel="stylesheet" type="text/css" href="style.css">
<link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
</head>
<body>
	<div class="main">  	
		<input type="checkbox" id="chk" aria-hidden="true">
			<div class="login">
          <br>
          <div align="center">
          <p style="color:#302b63;font-size:24px;"><b>Welcome to Deletion Page!</b></p>
          <p style="color:#302b63;font-size:14px;"><b>If you are sure to delete yourself!</b></p>
          <form action="deletion_me.php" method="GET">
          <input type="txt" name="username" placeholder="Username" required="">
					<input type="txt" name="password" placeholder="Password" required="">
          <button>DELETE ME</button>
          </form>

<br><br>
<div align="center"><a href="main_page_user.php" style="text-decoration: none;">
<button>Back to User Main Page</button></a></div>
</div>
</body>
</html>

