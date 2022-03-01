<!DOCTYPE html>
<html>
<head>
	<title>Delete Institute</title>
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
          <p style="color:#302b63;font-size:14px;"><b>If you are sure to delete your institute!</b></p>
          <form action="deletion_inst.php" method="GET">
          <input type="txt" name="name" placeholder="Name" required="">
					<input type="txt" name="password" placeholder="Password" required="">
          <button>DELETE MY INSTITUTE</button>
          </form>

<br><br>
<div align="center"><a href="main_page_institute.php" style="text-decoration: none;">
<button>Back to Institute Main Page</button></a></div>
</div>
</body>
</html>

