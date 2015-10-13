<?php

/**
 * Created by PhpStorm.
 * User: schandramouli
 * Date: 10/8/15
 * Time: 6:02 PM
 */


$email = $_REQUEST['email'];
$subject = "Hello";
$message = "I am testing";

mail($email, $subject, $message);

echo "Mail sent to ".$email;
