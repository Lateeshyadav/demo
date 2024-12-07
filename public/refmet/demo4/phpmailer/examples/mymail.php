<?php 
require_once 'mail/class.phpmailer.php';
 
$results_messages = array();
 
$mail = new PHPMailer(true);
$mail->CharSet = 'utf-8';
 
class phpmailerAppException extends phpmailerException {}
 
try {
$to = 'info@itmint.in';
if(!PHPMailer::ValidateAddress($to)) {
  throw new phpmailerAppException("Email address " . $to . " is invalid -- aborting!");
}
$mail->IsSendmail();
//$mail->AddReplyTo("1111.sona@gmail.com", "ss");
$mail->From       = "1111.sona@gmail.com";
$mail->FromName   = "ss";
$mail->AddAddress("info@itmint.in", "Santosh");
//$mail->AddBCC("itmintraipur@gmail.com");
//$mail->AddCC("hr@itmint.in");
$mail->Subject  = "Subject(PHPMailer test using SENDMAIL)";
$body = <<<'EOT'
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>PHPMailer Test</title>
</head>
<body>
  <div style="width: 640px; font-family: Arial, Helvetica, sans-serif; font-size: 11px;">
    <h1>This is a test of PHPMailer.</h1>
    <div align="center">
      <a href="https://github.com/PHPMailer/PHPMailer/"><img src="images/logo.gif" height="90" width="340" alt="PHPMailer rocks"></a>
    </div>
    <p>This example uses <strong>HTML</strong>.</p>
    <p>The PHPMailer image at the top has been embedded automatically.</p>
  </div>
</body>
</html>
 
EOT;
$mail->WordWrap = 80;
$mail->MsgHTML($body, dirname(__FILE__), true); //Create message bodies and embed images
//$mail->AddAttachment('images/phpmailer_mini.gif', 'phpmailer_mini.gif');  // optional name
//$mail->AddAttachment('images/phpmailer.png', 'phpmailer.png');  // optional name
 
try {
  $mail->Send();
  $results_messages[] = "Message has been sent using SENDMAIL";
}
catch (phpmailerException $e) {
  throw new phpmailerAppException('Unable to send to: ' . $to. ': '.$e->getMessage());
}
}
catch (phpmailerAppException $e) {
  $results_messages[] = $e->errorMessage();
}
 
if (count($results_messages) > 0) {
  echo "<h2>Run results</h2>\n";
  echo "<ul>\n";
foreach ($results_messages as $result) {
  echo "<li>$result</li>\n";
}
echo "</ul>\n";
}

?>