<?php

    $to = "taylorowenskees@outlook.com";
    $from = $_REQUEST['email'];
    $name = $_REQUEST['name'];
    $headers = "From: $from";
    $subject = "New message from your portfolio site";

    $fields = array();
    $fields{"Fname"}    = "First Name";
    $fields{"Lname"}    = "Last Name";
    $fields{"email"}    = "Email";
    $fields{"sub"}    = "Subject";
    $fields{"message"}   = "Message";
    

    $body = "Please see the folowing message:\n\n"; foreach($fields as $a => $b){   $body .= sprintf("%20s: %s\n",$b,$_REQUEST[$a]); }

    $send = mail($to, $subject, $body, $headers);

?>