
<?php
    //change this to your email. 
   $to = "kunal@refmet.org"; 
   //$to = "gajendra0213@gmail.com"; 
 // $from = "Refracast Metallurgicals Pvt. Ltd."; 
  //$subject = "Refracast Metallurgicals Pvt. Ltd."; 
 
  $name = $_POST["fname"];
  $mobile = $_POST["mobile"];
  $email = $_POST["email"];
  $city = $_POST["city"];
  $address = $_POST["address"];
  $messages = $_POST["messages"]; 
  
  $from = $_POST["email"];
  $sub ="Refracast Metallurgicals Pvt. Ltd. : Enquiry Form  ";


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
 <table border=1 cellpadding=0 cellspacing=0 style=border-collapse: collapse bordercolor=#000000 width=100%>
	
			<tr>
		    <td width=20% valign=top><b>Name</b></td>
		    <td width=80% valign=top>'. $name .' </td>
		    </tr>
			
			<tr>
		    <td width=20% valign=top><b>Mobile No.</b></td>
		    <td width=80% valign=top>'. $mobile .' </td>
		    </tr>
	
			<tr>
		    <td width=20% valign=top><b>Email Id</b></td>
		    <td width=80% valign=top>'. $email .' </td>
		    </tr>
	
			
			<tr>
		    <td width=20% valign=top><b>City</b></td>
		    <td width=80% valign=top>'. $city .' </td>
		    </tr>
	
			<tr>
		    <td width=20% valign=top><b>Company/Organisation</b></td>
		    <td width=80% valign=top>'. $address .' </td>
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
	//alert("Thank you for contacting us. Your enquiry has been successfully submitted.\Our expert team will review it promptly and get back to you with the information you need.\In the meantime, learn more about our innovative products.");
	window.location="enquiry-success.php";
	</script>
<?php
	}
	else
	{
	header("location:index.php");
	}
 ?>