
<?php
include "config.php";
if (!empty($_GET["title"]) && !empty($_GET["importance"]) && !empty($_GET["date"])&& !empty($_GET["ids2"])&& !empty($_GET["ids"])){
  $title  = $_GET["title"];
  $importance  = $_GET["importance"];
  $date  = $_GET["date"];
  $institute_name = $_GET["ids2"];
  $sql_statement = "SELECT * FROM institutes WHERE name='$institute_name'";
  $result = mysqli_query($db, $sql_statement); 
  $row = mysqli_fetch_assoc($result);
  $institute_id = $row["institute_id"];
  $needs_id = $_GET["ids"];

  $sql_statement = "INSERT INTO posts_create(title, importance, date, institute_id, needs_id) VALUES ('$title',$importance,'$date', $institute_id,$needs_id)";
  $result = mysqli_query($db, $sql_statement);
  if($result != 1){
  }
  else{
    header("Location: main_page_institute.php");
  } 
}
else{
  echo "You have not enter all fields";
}
?>
<br>
<!DOCTYPE html>
<html>
<head>
	<title>User Sign UP</title>
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
          <p style="color:#302b63;font-size:22px;"><b>Please return to Institute Main Page!</b></p></div>
          <a href="main_page_institute.php" style="text-decoration: none;">
					<button>Back to Institute Main Page</button></a>
				</form>
			</div>
	</div>
</body>
</html>