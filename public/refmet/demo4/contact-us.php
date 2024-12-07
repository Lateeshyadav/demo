<!DOCTYPE html>
<html lang="en">
<head>
  <title>Refmet Metal Technologies Pvt. Ltd. | Ferro Moly | Ferro Nickel</title>
  <?php include('head.php'); ?>
</head>
<body>
 <div class="wrapper">
<?php include('header.php'); ?>
<?php //include('banner.php'); ?>
   
    
<section id="pageTitle" class="page-title page-title-layout2 bg-overlay- bg-parallax">
      <div class="bg-img"><img src="assets/images/page-titles/15.jpg" alt="background"></div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12 col-xl-8">
           
            <h1 class="pagetitle__heading">Contact Us</h1>
          </div>
        </div>
      </div>
    </section>
   
    <section id="contactLayout1" class="contact contact-layout1 pt-0">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12">
            <div class="contact__panel">
              <div class="contact__panel-banner">
                <img src="assets/images/banners/2.jpg" alt="banner img">
                <div class="cta__banner">
                  <p class="cta__desc"><strong>We will get back to you within 24 hours, or you can call us everyday,
                      10:00 AM - 7:00 PM IST</strong></p>
                  <div class="contact__number d-flex align-items-center">
                    <i class="icon-phone"></i>
                    <a href="tel:98935-94094">+91 98935-94094</a>
                  </div>
                </div>
              </div>
			  
			  
					<?php $page_name = "contact-us.php";?>	
					<?php //$table_name = "form_enquiry";?>
					<?php $website_name = "Refracast Metallurgicals Pvt.Ltd";?>
					<?php $enquiry_name = "Enquiry";?>
                     <form  action="enquiry-operation.php" class="contact__form-panel" method="post">
					  <input type="hidden" name="phupld" value="phupld">						
						<input type="hidden" name="page_name" value="<?php echo $page_name ; ?>" class="form-control" />
						<input type="hidden" name="website_name" value="<?php echo $website_name ; ?>" class="form-control" />
						<input type="hidden" name="enquiry_name" value="<?php echo $enquiry_name ; ?>" class="form-control" />
                <div class="row">
                  <div class="col-sm-12 contact__form-panel-header">
                    <h4>Enquiry Form</h4>
					
					<?php if(isset($_GET['empty']) == 'empty'){ ?>
					<div align="center" style="color:#FF0000;"><?php echo $_GET['empty'];?></div>		
					<?php } ?>
                  </div>
                  <div class="col-sm-6 col-md-6 col-lg-6">
                    <div class="form-group">
					<input type="text" name="fname" value="<?php echo $_GET['fname'];?>" class="form-control" placeholder="Name" required>
					</div>
                  </div>
				  
                  <div class="col-sm-6 col-md-6 col-lg-6">
                    <div class="form-group"><input type="text" name="mobile" value="<?php echo $_GET['mobile'];?>" class="form-control" placeholder="Mobile Number" required></div>
                  </div>
				  
				   <div class="col-sm-6 col-md-6 col-lg-6">
                    <div class="form-group"> <input type="email" name="email" value="<?php echo $_GET['email'];?>" class="form-control" placeholder="Email Id" required></div>
                  </div>
				  
				  <div class="col-sm-6 col-md-6 col-lg-6">
                    <div class="form-group"><input type="text" name="city" value="<?php echo $_GET['city'];?>" class="form-control" placeholder="City"></div>
                  </div>
				  
				  <div class="col-sm-6 col-md-6 col-lg-12">
                    <div class="form-group"><input type="text" name="address" value="<?php echo $_GET['address'];?>" class="form-control" placeholder="Company /Organisation"></div>
                  </div>
               	   
                  <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="form-group">
                      <textarea name="messages" class="form-control" placeholder="Message"><?php echo $_GET['messages'];?></textarea>
                    </div>
                  </div>
				  
				  <!--<div class="col-sm-6 col-md-6 col-lg-6">
           <div class="form-group"><input type="text" name="secure" onClick="this.value=''" id="input-password" class="form-control"></div>
                  </div>
				  
				  <div class="col-sm-6 col-md-6 col-lg-6">
                   <img src="image.php" alt="Click to reload image" title="Click to reload image" id="captcha" onClick="javascript:reloadCaptcha()" />
                  <div>Click on the image to reload</div>
                  </div>-->
				  
                  <div class="col-sm-12 col-md-12 col-lg-12">
                    <button type="submit" class="btn btn__secondary btn__block">
                      <span>Submit</span><i class="icon-arrow-right"></i>
                    </button>
                  </div>
                </div>
              </form>
            </div><!-- /.contact__panel -->
          </div><!-- /.col-lg-12 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section>
	
	<section id="contactInfo" class="contact contact-info pt-0">
      <div class="container">
        <div class="row">
         
          <div class="col-sm-12 col-md-4 col-lg-4">
            <div class="contact-info-box">
              <h4 class="contact__info-box-title">Corporate Office  Address</h4>
              <ul class="contact__info-list list-unstyled">
                <li>Address: Crown Building, Ashoka Park, Opposite Khamardih Police Station, Shankar Nagar, Landmark - near Devkripa Hospital.492001</li>
                <li>Mobile: +919893594094</li>
				<li>Email: <a href="kunal@refmet.org"><span class="__cf_email__" data-cfemail="bed5d1d7ccdffe89d1ccd1d1d890ddd1d3">kunal@refmet.org</span></a></li>
                <li>Hours: Mon-Sat: 10am - 7pm</li>
              </ul>
            </div>
          </div>
		  
		  <div class="col-sm-12 col-md-4 col-lg-4">
            <!--<div class="contact-info-box">
              <h4 class="contact__info-box-title">Raipur Office</h4>
              <ul class="contact__info-list list-unstyled">
               <li>Email: <a href="arnab@refmet.org"><span class="__cf_email__" data-cfemail="bed5d1d7ccdffe89d1ccd1d1d890ddd1d3">arnab@refmet.org</span></a></li>
                <li>Address: 750, Satyavihar, Pacheda, Arang Raipur, India, 492101</li>
                <li>Mobile: +919893594094</li>
                <li>Hours: Mon-Sat: 10am - 7pm</li>
              </ul>
            </div>-->
          </div>
         
          <div class="col-sm-12 col-md-4 col-lg-4">
            <div class="contact-info-box">
              <h4 class="contact__info-box-title">Factory Address </h4>
              <ul class="contact__info-list list-unstyled">
                <li>Address: Refracast Metallurgicals Private Limited, 22- Industrial Area, Bhanpuri, P.O. Birgaon, Raipur 493221(CG)</li>
                <li>Mobile: +919893594094</li>
				 <li>Email: <a href="kunal@refmet.org"><span class="__cf_email__" data-cfemail="bed5d1d7ccdffe89d1ccd1d1d890ddd1d3">kunal@refmet.org</span></a></li>
                <li>Hours: Mon-Sat: 10am - 7pm</li>
              </ul>
            </div>
          </div>
		        
        </div>
      </div>
    </section>
	
<?php include('footer.php'); ?>
 </div>
  
<?php include('footer-js.php'); ?>
  
</body>

</html>