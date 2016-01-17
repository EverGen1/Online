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
 
 function NewUser(){
  $user_name = $_POST['user_name'];
  $password = $_POST['password'];
  $email = $_POST['email_address'];
  
  $query = "INSERT INTO users" (user_name, password, email) VALUES('$user_name', '$password', '$email_address');
  
  $data = mysql_query ($query)or die(mysql_error());
  
  if($data){
   echo "You Have Register";
  }
 }
 
 function SignUp(){
  if(!empty($_POST)['user_name', 'password', 'email_address'])){
   $query = mysql_query("SELECT * FROM users WHERE user_name = '$_POST[user_name]'AND password = '$_POST[password]' AND email = '$_POST[email_address]")or die mysql_error());
   if(!$row = mysql_fetch_array($query)or die(mysql_error())){
   	NewUser();
   }else{
   	echo "SORRY USERNAME ALREADY TAKEN";
   }
  }	
 }
 if(isset($_POST['sign_up'])){
  SignUp();	
 }
?>