<?php
include ('config.php');
if (empty($email)) {
echo 'Please Enter a Email';
}
else {
$msg = 'From: ' . $name . ' Message: ' . $message;
  mail($myemail, $subject, $msg, $email);
echo $msg;
}
?>