<!DOCTYPE html>
<html>
<head>
	<title>Creating Post</title>
	<link rel="stylesheet" type="text/css" href="style.css">
<link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
</head>
<body>
	<div class="main">  	
		<input type="checkbox" id="chk" aria-hidden="true">
			<div class="login">
          <br>
          <div align="center">
          <p style="color:#302b63;font-size:24px;"><b>Welcome to Post Creation!</b></p>
          <p style="color:#302b63;font-size:14px;"><b>Fill following informations!</b></p>
          <form action="insert_post.php" method="GET">
          <input type="txt" name="title" placeholder="Title" required="">
					<input type="txt" name="importance" placeholder="Importance Level" required="">
          <input type="txt" name="date" placeholder="Date YYYY-MM-DD" required="">
          <select name="ids2">
          <?php
          include "config.php";
          $sql_statement2 = "SELECT * FROM institutes";
          $myresult = mysqli_query($db, $sql_statement2);
          while($rows = mysqli_fetch_assoc($myresult)){
            $name = $rows["name"];
            echo "<option value=$name>".$name."</option>";
          }
          ?>
          </select>
          <select name="ids">
          <?php
          include "config.php";
          $sql_statement2 = "SELECT * FROM needs";
          $myresult = mysqli_query($db, $sql_statement2);
          while($rows = mysqli_fetch_assoc($myresult)){
            $needs_id = $rows["needs_id"];
            $material_type = $rows["material_type"];
            $amount = $rows["amount"];
            echo "<option value=$needs_id>".$needs_id." - ".$material_type. " - ". $amount."</option>";
          }
          ?>
          </select>
          <button>CREATE POST</button>
          </form>

<br>
<div align="center"><a href="main_page_user.php" style="text-decoration: none;">
<button>Back to User Main Page</button></a></div>
</div>
</body>
</html>

