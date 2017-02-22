<?php
// Pear Mail Library
require_once "Mail.php";

/**
 * Created by PhpStorm.
 * User: schandramouli
 * Date: 10/8/15
 * Time: 6:02 PM
 */


$from = $_REQUEST['email'];
$subject = "Hello Sai Pc";
$message = "We need you to reset your password, in the following page: http://localhost:63342/htdocs/saipcHackerPage/resetpassword.php";

$to = "csai@amazon.com";

echo $from;

foreach($_REQUEST as $key => $value) {
    echo "Key: $key and Value: $value\n";
}
//this works yoyoyoyoyoyoyo yolo xoxo :D :D :D
$retValue = mail($to, $subject, $message, "From: $from");
if ($retValue) {
    echo "<br>\nAnother email here" . $retValue . " this was returned";
}

/*
$headers = "From: $from\r\n"."Subject: $subject";
$headers = explode("\n", $headers);

foreach($headers as $header) {
    //echo $header."<br>";
}
*/
// apparently the pear lib sanitizes our input, but the builtin mail() function wont :D
/*
$smtp = Mail::factory('smtp', array(
    'host' => 'smtp.gmail.com',
    'port' => '587',
    'auth' => true,
    'username' => "saipc1993@gmail.com",
    'password' => 'dragondragon'
));

$mail = $smtp->send($to, $headers, $message);

if (PEAR::isError($mail)) {
    echo '<p>' . $mail->getMessage() . '</p>';
} else {
    echo "Mail sent to ".$to;
}
*/
/*
 * Python version of the code
msg = MIMEText(email, 'html')
me = "saipc1993@gmail.com"
# me == the sender's email address
msg['Subject'] = subject
msg['From'] = me
msg['To'] = address

# Send the message via our own SMTP server, but don't include the
# envelope header.
server = smtplib.SMTP('smtp.gmail.com', 587)
server.ehlo()
server.starttls()
#socket = server._get_socket()
#Next, log in to the server
server.login("saipc1993", "dragondragon")
server.sendmail(me, [address], msg.as_string())
server.quit()
*/



