<?php
$db = mysqli_connect("localhost", "root", '', 'cs306_myproject');

if($db->connect_errno > 0){
  die("Unable to connect to database [".$db->connect_errno."]");
}

?>