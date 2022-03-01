<?php
include "config.php";
if (!empty($_POST["password"]) && !empty($_POST["mail"])){
  $password  = $_POST["password"];
  $mail  = $_POST["mail"];
  $sql_statement = "SELECT username FROM users WHERE password='$password' and mail='$mail'";
  $result = mysqli_query($db, $sql_statement);
  if($result->num_rows == 0){
  }
  else{
    header("Location: main_page_user.php");
  } 
}
else{
  echo "You have not enter all fields";
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>User Login</title>
	<link rel="stylesheet" type="text/css" href="style.css">
<link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
</head>
<body>
	<div class="main">  	
		<input type="checkbox" id="chk" aria-hidden="true">
			<div class="login">
        <br><br><br>
          <div align="center">
          <p style="color:#302b63;font-size:22px;"><b>There is no such user in the database!</b></p>
          <p style="color:#302b63;font-size:22px;"><b>Please return to Welcome Page!</b></p></div>
          <a href="index.php" style="text-decoration: none;">
					<button>Back to Welcome Page</button></a>
				</form>
			</div>
	</div>
</body>
</html>