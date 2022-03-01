<?php
include "config.php";

if (!empty($_GET["username"]) && !empty($_GET["donation_date"])&& !empty($_GET["amount"])&& !empty($_GET["material"])){
  $username  = $_GET["username"];
  $post_id  = $_GET["ids"];
  $donation_date  = $_GET["donation_date"];
  $amount = $_GET["amount"];
  $material = $_GET["material"];

  $sql_statement = "SELECT * FROM users WHERE username='$username'";
  $result = mysqli_query($db, $sql_statement);
  $rows = mysqli_fetch_assoc($result);
  $user_id = $rows["user_id"];
  $sql_statement = "INSERT INTO donate(user_id, post_id, donation_date, amount, material) VALUES ($user_id,$post_id,'$donation_date',$amount,'$material')";
  $result = mysqli_query($db, $sql_statement);

  if($result != 1){
  }
  else{
    header("Location: main_page_user.php");
  } 
}
else{
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Donation</title>
	<link rel="stylesheet" type="text/css" href="style.css">
<link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
</head>
<body>
	<div class="main">  	
		<input type="checkbox" id="chk" aria-hidden="true">
			<div class="login">
        <br><br><br>
          <div align="center">
          <p style="color:#302b63;font-size:22px;"><b>An Error is occured!</b></p>
          <p style="color:#302b63;font-size:22px;"><b>Please return to Make Donation Page!</b></p></div>
          <a href="make_donation.php" style="text-decoration: none;">
					<button>Back to Make Donation Page</button></a>
				</form>
			</div>
	</div>
</body>
</html>
