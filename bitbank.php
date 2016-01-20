<?php
 $to = "nextrevoulution@gmail.com";
 $admin = "bitbank@evergenco.us";
 $info = $_REQUEST['full_name', email_address];
 $subject = "Open BitBank Account;
 
 mail($to, "$subject", "From:" . $admin);
