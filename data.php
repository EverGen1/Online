<?php
if($_POST['submit'] == "SignUp")
{
 $varName = $_POST['fullName'];
 $varEmail = $_POST['Email'];
 $varPassword = $_POST['Password'];
 $errorMessage = "";
if(empty($varName)){
 $errorMessage .= "<li>Name Required</li>";
}
if(empty($varEmail)){
 $errorMessage .= "<li>Email Required</li>";
}
if(empty($varPassword)){
 $errorMessage .= "<li>Password Required</li>";
}
?>
