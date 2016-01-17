<?php
 define('DB_HOST', 'sql5.freesqldatabase.com');
 define('DB_NAME', 'sql5103302');
 define('DB_USER', 'sql5103302');
 define('DB_PASSWORD', 'HQlk9PnlKM');
 
 $con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error());
 $db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error());
 
 if (mysqli_connect_errno($con)){
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
 }else{
  echo “Successfully connected to your database…”;
 }
 
 function SignUp(){
  $user_name = $_POST['user_name'];
  $	
 }
?>