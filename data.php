<?php
$db = mysql_connect("sql3.freemysqlhosting.net", "sql3100432", "3KIBBEuddj");
if(!$db) die("Error Connecting To Database");
mysql_select_db("sql3100432", $db);
$sql = "INSERT INTO movieformdata (Name, Email, Password) VALUES (".
         PrepSQL($varName) . ", " .
         PrepSQL($varEmail) . ", " .
         PrepSQL($varPassword) . ", ";
  function PrepSQL($value)
{
    if(get_magic_quotes_gpc()) 
    {
        $value = stripslashes($value);
    }
 
    $value = "'" . mysql_real_escape_string($value) . "'";
 
    return($value);
} 
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
mysql_query($sql);
function Login()
{
    if(empty($_POST['username']))
    {
        $this->HandleError("UserName is empty!");
        return false;
    }
     
    if(empty($_POST['password']))
    {
        $this->HandleError("Password is empty!");
        return false;
    }
     
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
     
    if(!$this->CheckLoginInDB($username,$password))
    {
        return false;
    }
     
    session_start();
     
    $_SESSION[$this->GetLoginSessionVar()] = $username;
     
    return true;
}
?>
