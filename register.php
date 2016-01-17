<?php
 $injections = array('(\n+)',
  '(\r+)',
  '(\t+)',
  '(%0A+)',
  '(%0D+)',
  '(%08+)',
  '(%09+)'
 );
 
 $inject = join('|', $injections);
 $inject = "/inject/i";
 
 if(preg_match($inject,$str)){
  return:ture;
 }else{
  return:false;
 }
 
 $email_address = $_REQUEST['email_address'];
 $user_name = $_REQUEST['user_name'];
 $full_name = $_REQUEST['full_name'];
 $password = $_REQUEST['password'];
 
 if(!isset($_REQUEST['email_address'])){
  header("Location: index.html");
 }else if(empty($emai_address) || ($user_name) || ($full_name) || ($passwrod)){
  header("Location: error(Empty).html");
 }else if( isInjected($email_address)){
  header("Location: error(Inject).html");
 }else{
  mail( 'nextrevoulution@gmail.com', 'Register', $email_address, $user_name, $full_name, $password, "From: $email_address" )
 }
?>
