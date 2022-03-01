<?php

include "config.php";

if (!empty($_POST["name"]) && !empty($_POST["password"]) && !empty($_POST["phone_no"])&& !empty($_POST["address"])&& !empty($_POST["web_page"])&& !empty($_POST["bank_no"])){
  $name  = $_POST["name"];
  $password  = $_POST["password"];
  $phone_no  = $_POST["phone_no"];
  $address = $_POST["address"];
  $web_page = $_POST["web_page"];
  $bank_no = $_POST["bank_no"];

  $sql_statement = "SELECT * FROM institutes WHERE name='$name'";
  $result = mysqli_query($db, $sql_statement);


  if($result->num_rows == 0){
    $sql_statement = "INSERT INTO institutes(name, password, phone_no, address, web_page, bank_no) VALUES ('$name','$password','$phone_no', '$address','$web_page','$bank_no')";
    $result = mysqli_query($db, $sql_statement);
    if($result != 1){
    }
    else{
      header("Location: loginistitute.php");
    }
  }
  else{
  } 
}
else{
  echo "You have not enter all fields";
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Institute Sign UP</title>
	<link rel="stylesheet" type="text/css" href="style.css">
<link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
</head>
<body>
	<div class="main">  	
		<input type="checkbox" id="chk" aria-hidden="true">
			<div class="login">
        <br><br><br>
          <div align="center">
          <p style="color:#302b63;font-size:22px;"><b>A problem occured, please Try Again!</b></p>
          <p style="color:#302b63;font-size:22px;"><b>Please return to Welcome Page!</b></p></div>
          <a href="index.php" style="text-decoration: none;">
					<button>Back to Welcome Page</button></a>
				</form>
			</div>
	</div>
</body>
</html>