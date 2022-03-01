<title>Make Donation Page</title>
<link rel="stylesheet" type="text/css" href="style.css">
<?php include "config.php";?>
<div class="main"> 
  <div class="Login">
  <br><br><br><br><br> 
  <div align="center">
  
<input type="checkbox" id="chk" aria-hidden="true">
<form action="insert_donation.php" method="GET">


<select name="ids">
<?php
$sql_statement2 = "SELECT post_id, title, institute_id FROM posts_create";
$myresult = mysqli_query($db, $sql_statement2);
while($rows = mysqli_fetch_assoc($myresult)){
  $institute_id = $rows["institute_id"];
  $sql_statement3 = "SELECT name FROM institutes Where institute_id = $institute_id";
  $myresult3 = mysqli_query($db, $sql_statement3);
  $rows2 = mysqli_fetch_assoc($myresult3);
  $post_id = $rows["post_id"];
  $name = $rows2["name"];
  $title = $rows["title"];
  echo "<option value=$post_id>".$post_id." - ".$name. " - ". $title."</option>";
}
?>
</select>
<input type="txt" name="amount" placeholder="Amount of Donation" required="">
<input type="txt" name="material" placeholder="Donation Material" required="">
<input type="txt" name="username" placeholder="Your Username" required="">
<input type="txt" name="donation_date" placeholder="Date YYYY-MM-DD" required="">
<button>DONATE</button>
</form>
<p style="color:#302b63;font-size:20px;"><b>Be careful a user cannot donate to same posts twice!</b></p>
</div>
</div>
</div>

