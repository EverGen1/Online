<?php
$db = mysql_connect("sql3.freemysqlhosting.net", "sql3100432", "3KIBBEuddj");
if(!$db) die("Error Connecting To Database");
mysql_select_db("sql3100432", $db);
$sql = "INSERT INTO movieformdata (Name, Email, Password) VALUES (".
         PrepSQL($varName) . ", " .
         PreoSQL($varUser) . ", " .
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
 $varUser = $_POST['UserName'];
 $varEmail = $_POST['Email'];
 $varPassword = $_POST['Password'];
 $errorMessage = "";
if(empty($varName)){
 $errorMessage .= "<li>Name Required</li>";
}
if(empty($varUser)){
 $errorMessage .= "<li>Make A UserName</li>";
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
function CheckLoginInDB($username,$password)
{
    if(!$this->DBLogin())
    {
        $this->HandleError("Database login failed!");
        return false;
    }          
    $username = $this->SanitizeForSQL($username);
    $pwdmd5 = md5($password);
    $qry = "Select name, email from $this->tablename ".
        " where username='$username' and password='$pwdmd5' ".
        " and confirmcode='y'";
     
    $result = mysql_query($qry,$this->connection);
     
    if(!$result || mysql_num_rows($result) <= 0)
    {
        $this->HandleError("Error logging in. ".
            "The username or password does not match");
        return false;
    }
    return true;
}
?>
