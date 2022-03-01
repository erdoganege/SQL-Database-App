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
          <p style="color:yellowgreen;font-size:32px;"><b>FILTERED POSTS TABLE!</b></p></div>
<table>
<tr><th>POST ID</th><th>TITLE</th><th>IMPORTANCE</th><th>DATE</th><th>INSTITUTE NAME</th><th>NEEDED MATERIAL</th><th>AMOUNT</th></tr>
<?php
include "config.php";

if (!empty($_POST["importance"])){
  $importance  = $_POST["importance"];
  $sql_statement = "SELECT * FROM posts_create WHERE importance = $importance";
  $result = mysqli_query($db, $sql_statement);
  while($row = mysqli_fetch_assoc($result)){
    $post_id = $row["post_id"];
    $title = $row["title"];
    $importance = $row["importance"];
    $date = $row["date"];
    $institute_id = $row["institute_id"];
    $sql_statement2 = "SELECT * FROM institutes WHERE institute_id=$institute_id";
    $result2 = mysqli_query($db, $sql_statement2);
    $row2 = mysqli_fetch_assoc($result2);
    $name = $row2["name"];
    $needs_id = $row["needs_id"];
    $sql_statement2 = "SELECT * FROM needs WHERE needs_id=$needs_id";
    $result2 = mysqli_query($db, $sql_statement2);
    $row2 = mysqli_fetch_assoc($result2);
    $material = $row2["material_type"];
    $amount = $row2["amount"];
    echo "<tr>". "<th>". $post_id. "</th>"."<th>". $title. "</th>". "<th>". $importance."</th>". "<th>". $date."</th>". "<th>". $name."</th>". "<th>". $material."</th>"."<th>". $amount."</th>". "</tr>";
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

