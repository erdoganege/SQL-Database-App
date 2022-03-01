<?php

include "config.php";

if(!empty($_GET["name"])){
  $name = $_GET["name"];
  $password = $_GET["password"];

  $sql_statement = "SELECT * FROM institutes WHERE name = '$name' AND password='$password'";
  $result = mysqli_query($db, $sql_statement);
  if($result->num_rows != 0){
    $sql_statement = "DELETE FROM institutes WHERE name = '$name'";
    $result = mysqli_query($db, $sql_statement);
    if ($result == 1){
      header("Location: index.php");
    }
  }
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Institute Deletion</title>
	<link rel="stylesheet" type="text/css" href="style.css">
<link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
</head>
<body>
	<div class="main">  	
		<input type="checkbox" id="chk" aria-hidden="true">
			<div class="login">
        <br><br><br>
          <div align="center">
          <p style="color:#302b63;font-size:22px;"><b>There is no such that Institute!</b></p>
          <p style="color:#302b63;font-size:22px;"><b>Please return to Main Institute Page!</b></p></div>
          <a href="main_page_institute.php" style="text-decoration: none;">
					<button>Back to Main Institute Page</button></a>
				</form>
			</div>
	</div>
</body>
</html>