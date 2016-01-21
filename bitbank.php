<?php
 $webMaster = 'nextrevoulution@gmail.com';
 
 $full_name = check_input($_POST['full_name'], "Enter Your Name");
 $email_address = check_input($_POST['email_address'], "Enter Your EMail");
 $phone_number = check_input($_POST['phone_number'], "EnterYour Phone Number");
 $subject = "BitBank Account Creation";

 $message = "
  Name: $full_name
  EMail: $email_address
  Phone Number: $phone_number
 ";

 mail($webMaster, $subject, $message);

function check_input($data, $problem='')
{
$data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data);
if ($problem && strlen($data) == 0)
{
show_error($problem);
}
return $data;
}

function show_error($myError)
{
?>
 <html>
  <body>
   <p>Please correct the following error:</p>
   <strong><?php echo $myError; ?></strong>
   <p>Hit the back button and try again</p>
  </body>
 </html>
<?php
  exit();
 }
?>
