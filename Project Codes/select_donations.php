<!DOCTYPE html>
<html>
<head>
<title> DONATION HISTORY </title>
<link rel="stylesheet" type="text/css" href="user_main_page_style.css">
<style>
table {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}
td, th {
  border: 1px solid #ddd;
  padding: 8px;
  color: white;
}
tr:nth-child(even){ background-color: #6b5496;}
</style>
</head>
<body>
<div class="main"> 
<div align="center">
          <p style="color:yellowgreen;font-size:32px;"><b>FILTERED DONATION HISTORY TABLE!</b></p></div>
<table>
<tr><th>USERNAME</th><th>POST ID</th><th>POST'S TITLE</th><th>DONATION DATE</th><th>AMOUNT</th><th>MATERIAL</th></tr>
<?php
include "config.php";
if (!empty($_POST["amount"])){
  $amount  = $_POST["amount"];
  $sql_statement = "SELECT * FROM donate WHERE amount >= $amount";
  $result = mysqli_query($db, $sql_statement);
  while($row = mysqli_fetch_assoc($result)){
    $user_id = $row["user_id"];
    $sql_statement2 = "SELECT * FROM users WHERE user_id=$user_id";
    $result2 = mysqli_query($db, $sql_statement2);
    $row2 = mysqli_fetch_assoc($result2);
    $username = $row2["username"];
    $post_id = $row["post_id"];
    $sql_statement2 = "SELECT * FROM posts_create WHERE post_id=$post_id";
    $result2 = mysqli_query($db, $sql_statement2);
    $row2 = mysqli_fetch_assoc($result2);
    $title = $row2["title"];
    $date = $row["donation_date"];
    $amount = $row["amount"];
    $material = $row["material"];
    echo "<tr>". "<th>". $username. "</th>"."<th>". $post_id. "</th>". "<th>". $title. "</th>"."<th>". $date."</th>". "<th>". $amount."</th>". "<th>". $material."</th>"."</tr>";
  }
}
?>
</table>
<br><br><br>
<div align="center"><a href="main_page_user.php" style="text-decoration: none;">
<button>Back to User Main Page</button></a></div>
</div>

</body>
</html>