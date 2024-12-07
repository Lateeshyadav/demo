<?php	
session_start();		
include('mail/class.phpmailer.php'); 
date_default_timezone_set("Asia/Kolkata");
$ent_date = date("d-M-Y");
$ent_time = date("g:i A");

$fname = $_POST["fname"];
//$lname = $_POST["lname"];
$mobile = $_POST["mobile"];
$email = $_POST["email"];
$city =  $_POST["city"];
$address =  $_POST["address"];
//$state =  $_POST["state"];
//$country =  $_POST["country"];
//$pincode =  $_POST["pincode"];
//$category =  $_POST["category"];
$message =  $_POST["message"];
$secure =  $_POST["secure"];
$page_name = $_POST["page_name"];
//$table_name = $_POST["table_name"];
$website_name = $_POST["website_name"];
$enquiry_name = $_POST["enquiry_name"];

//$user1 = "feedbackenquiry18@gmail.com";
//$user1 = "kunal@refmet.org";
//$user2 = "enquiry@refmet.org";
$user1 = "info@oneplusandrealmeservicecenter.com";
$user2 = "mail.oneplusandrealmeservicecenter.com";
$user3 = "feedbackenquiry18@gmail.com";

if(empty($fname)){
?>
<script type="text/javascript">window.location="<?php echo $_POST['page_name'] ; ?>?empty=Your Name cannot be blank&fname=<?php echo $_POST['fname'] ; ?>&mobile=<?php echo $_POST['mobile'] ; ?>&email=<?php echo $_POST['email'] ; ?>&city=<?php echo $_POST['city'] ; ?>&address=<?php echo $_POST['address'] ; ?>&message=<?php echo $_POST['message'] ; ?>";</script>

<?php 
}elseif(empty($mobile)){
?>
<script type="text/javascript">window.location="<?php echo $_POST['page_name'] ; ?>?empty=Your Mobile no. cannot be blank&fname=<?php echo $_POST['fname'] ; ?>&mobile=<?php echo $_POST['mobile'] ; ?>&email=<?php echo $_POST['email'] ; ?>&city=<?php echo $_POST['city'] ; ?>&address=<?php echo $_POST['address'] ; ?>&message=<?php echo $_POST['message'] ; ?>";</script>
<?php 
}elseif(is_numeric(trim($mobile)) == false){ 
?>
<script type="text/javascript">window.location="<?php echo $_POST['page_name'] ; ?>?empty=Check your Mobile Number. Only for Numeric Number&fname=<?php echo $_POST['fname'] ; ?>&mobile=<?php echo $_POST['mobile'] ; ?>&email=<?php echo $_POST['email'] ; ?>&city=<?php echo $_POST['city'] ; ?>&address=<?php echo $_POST['address'] ; ?>&message=<?php echo $_POST['message'] ; ?>";</script>
<?php 
}elseif(strlen($mobile)<10){
?>
<script type="text/javascript">window.location="<?php echo $_POST['page_name'] ; ?>?empty=Mobile Number should be 10 digits&fname=<?php echo $_POST['fname'] ; ?>&mobile=<?php echo $_POST['mobile'] ; ?>&email=<?php echo $_POST['email'] ; ?>&city=<?php echo $_POST['city'] ; ?>&address=<?php echo $_POST['address'] ; ?>&message=<?php echo $_POST['message'] ; ?>";</script>

<?php 
}elseif(empty($email)){ 
?>
<script type="text/javascript">window.location="<?php echo $_POST['page_name'] ; ?>?empty=Your Email cannot be blank&fname=<?php echo $_POST['fname'] ; ?>&mobile=<?php echo $_POST['mobile'] ; ?>&email=<?php echo $_POST['email'] ; ?>&city=<?php echo $_POST['city'] ; ?>&address=<?php echo $_POST['address'] ; ?>&message=<?php echo $_POST['message'] ; ?>";</script>
<?php 
}elseif(!preg_match("/^[_\.0-9a-zA-Z-]+@([0-9a-zA-Z][0-9a-zA-Z-]+\.)+[a-zA-Z]{2,6}$/i", $email)){ 
?>
<script type="text/javascript">window.location="<?php echo $_POST['page_name'] ; ?>?empty=You did not enter a valid email&fname=<?php echo $_POST['fname'] ; ?>&mobile=<?php echo $_POST['mobile'] ; ?>&email=<?php echo $_POST['email'] ; ?>&city=<?php echo $_POST['city'] ; ?>&address=<?php echo $_POST['address'] ; ?>&message=<?php echo $_POST['message'] ; ?>";</script>

<?php 
}elseif(empty($city)){ 
?>
<script type="text/javascript">window.location="<?php echo $_POST['page_name'] ; ?>?empty=Your City cannot be blank&fname=<?php echo $_POST['fname'] ; ?>&mobile=<?php echo $_POST['mobile'] ; ?>&email=<?php echo $_POST['email'] ; ?>&city=<?php echo $_POST['city'] ; ?>&address=<?php echo $_POST['address'] ; ?>&message=<?php echo $_POST['message'] ; ?>";</script>

<?php 
}elseif(empty($address)){ 
?>
<script type="text/javascript">window.location="<?php echo $_POST['page_name'] ; ?>?empty=Your Company/Organisation cannot be blank&fname=<?php echo $_POST['fname'] ; ?>&mobile=<?php echo $_POST['mobile'] ; ?>&email=<?php echo $_POST['email'] ; ?>&city=<?php echo $_POST['city'] ; ?>&address=<?php echo $_POST['address'] ; ?>&message=<?php echo $_POST['message'] ; ?>";</script>

<?php }elseif(empty($message)){ ?>
<script type="text/javascript">window.location="<?php echo $_POST['page_name'] ; ?>?empty=Your Message cannot be blank&fname=<?php echo $_POST['fname'] ; ?>&mobile=<?php echo $_POST['mobile'] ; ?>&email=<?php echo $_POST['email'] ; ?>&city=<?php echo $_POST['city'] ; ?>&address=<?php echo $_POST['address'] ; ?>&message=<?php echo $_POST['message'] ; ?>";</script>


<?php
}elseif(empty($secure)){
?>
<script type="text/javascript">window.location="<?php echo $_POST['page_name'] ; ?>?empty=Solve it cannot be blank&fname=<?php echo $_POST['fname'] ; ?>&mobile=<?php echo $_POST['mobile'] ; ?>&email=<?php echo $_POST['email'] ; ?>&city=<?php echo $_POST['city'] ; ?>&address=<?php echo $_POST['address'] ; ?>&message=<?php echo $_POST['message'] ; ?>";</script>
<?php
}else{	
if(isset($_POST['secure'])){
if($_POST['secure'] != $_SESSION['security_number']){
?>
<script type="text/javascript">
//alert("");
window.location="<?php echo $_POST['page_name'] ; ?>?empty=Incorrect Solve it. Please try again&fname=<?php echo $_POST['fname'] ; ?>&mobile=<?php echo $_POST['mobile'] ; ?>&email=<?php echo $_POST['email'] ; ?>&city=<?php echo $_POST['city'] ; ?>&address=<?php echo $_POST['address'] ; ?>&message=<?php echo $_POST['message'] ; ?>";
</script>

<?php
}else{

$message= "
<html>
<head></head>
<body>
<table border=1 align=center cellpadding =1 cellspacing =1 width=100% > 

<tr>
<td width=20%><b>Name</b></td>
<td width=80%>". $fname ." </td>
</tr>

<tr>
<td><b>Mobile No</b></td>
<td>". $mobile ." </td>
</tr> 

<tr>
<td><b>Email</b></td>
<td>". $email ." </td>
</tr> 

<tr>
<td><b>City</b></td>
<td>". $city ." </td>
</tr>

<tr>
<td><b>Company/Organisation</b></td>
<td>". $address ." </td>
</tr>

<tr>
<td><b>Message</b></td>
<td>". $message ." </td>
</tr> 

</table>			
</body>
</html>
";

$mail  = new PHPMailer();   
$mail->IsSMTP();                                                
$mail->SMTPAuth   = true;
$mail->SMTPSecure = 'tls';

$mail->SMTPAutoTLS = false;
$mail->SMTPKeepAlive = true;   
$mail->Mailer = “smtp”; // don't change the quotes!

//$mail->Host       = "smtp.gmail.com"; 
//$mail->Port       = 587;                  
//$mail->Username   = "contact@pertsol.com"; 
//$mail->Password   = "123456";

$mail->Host       = "mail.oneplusandrealmeservicecenter.com"; 
$mail->Port       = "465";                    
$mail->Username   = "info@oneplusandrealmeservicecenter.com"; 
$mail->Password   = "d_9cAXtuxzcV";
 
//$mail  = new PHPMailer();   
//$mail->IsSMTP();                                                
//$mail->SMTPAuth   = true;
//$mail->SMTPSecure = 'tls';
//
//$mail->SMTPAutoTLS = false;
//$mail->SMTPKeepAlive = true;   
//$mail->Mailer = “smtp”; // don't change the quotes!
//
//$mail->Host       = "mail.refmet.org"; 
//$mail->Port       = 465;                    
//$mail->Username   = "enquiry@refmet.org"; 
//$mail->Password   = "FfBMlPwxtyA1";

$mail->From       = "$user1";
$mail->FromName   = "$website_name";
$mail->Subject    = "$website_name : $enquiry_name Form";
$mail->MsgHTML($message);
$mail->AddAddress($user1,"");
$mail->AddCC($user2,"");	
$mail->AddBCC($user3,"");	
$mail->IsHTML(true); 
if(!$mail->Send()) {
  echo "Mailer Error: " . $mail->ErrorInfo;
}else{
 //echo "Success";
?>
<script type="text/javascript">
//alert("Your details has been submitted successfully into our database.\nThanks for showing your interest in us.\nWe will contact you at the earliest..");
alert("Thank you for contacting us\ Your enquiry has been successfully submitted.\Our expert team will review it promptly and get back to you with the information you need.\In the meantime, learn more about our innovative products.");
window.location="index.php";
</script>
<?php } // email script end ?>
<?php } ?>
<?php } ?>
<?php } ?>