
<?php
    //change this to your email. 
 $to = "sarthakcg@rediffmail.com, abhay1053@gmail.com"; 
  // $to = "gajanandsinha255@gmail.com"; 
   $from = "Sarthak Jan Vikas Sansthan"; 
   $subject = "Sarthak Jan Vikas Sansthan"; 
   $name = $_POST["name"];
  $address = $_POST["address"];
  $city = $_POST["city"];
  $contact = $_POST["contact"];
  $email = $_POST["email"];
  $messages = $_POST["messages"]; 
  


    //begin of HTML message 
    $message = '<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>Enquiry Form</title>
</head>
<body>
  <div style="width: 640px; font-family: Arial, Helvetica, sans-serif; font-size: 11px;">
	
<div align="center">
  <center>
 <table border=1 cellpadding=0 cellspacing=0 
		   style=border-collapse: collapse bordercolor=#000000 width=100%>
	
			<tr>
		    <td width=20% valign=top><b>Name</b></td>
		    <td width=80% valign=top>'. $name .' </td>
		    </tr>
	
			<tr>
		    <td width=20% valign=top><b>Address</b></td>
		    <td width=80% valign=top>'. $address .' </td>
		    </tr>
	
			<tr>
		    <td width=20% valign=top><b>City</b></td>
		    <td width=80% valign=top>'. $city .' </td>
		    </tr>
	
	
			<tr>
		    <td width=20% valign=top><b>Contact No.</b></td>
		    <td width=80% valign=top>'. $contact .' </td>
		    </tr>
	
			<tr>
		    <td width=20% valign=top><b>Email Id</b></td>
		    <td width=80% valign=top>'. $email .' </td>
		    </tr>
			
			<tr>
		    <td width=20% valign=top><b>Message</b></td>
		    <td width=80% valign=top>'. $messages .'</td>
		    </tr>			
			 
		   </table>
  </center>
</div>
	
	
  </div>
</body>
</html>'; 
$headers  = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
$headers .= "From:". $name ."\r\n";

 	$a=mail($to,$sub, $message,$headers);
	if($a)
	{
	//header("location:enquiry_submit.php");
	?>
    <script type="text/javascript">
	alert("Your Details has been submitted Successfully into our database.\nThanks for showing your interest in us.\nWe Will contact you at the earliest..");
	window.location="contact_up.php";
	</script>
<?php
	}
	else
	{
	header("location:index.php");
	}
 ?>