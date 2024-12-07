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
   
    
<section id="pageTitle" class="page-title page-title-layout2 bg-overlay bg-parallax">
      <div class="bg-img"><img src="assets/images/page-titles/14.jpg" alt="background"></div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12 col-xl-8">
            <h1 class="pagetitle__heading">Enquiry</h1>
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
                      10:00 AM - 7:00 PM</strong></p>
                  <div class="contact__number d-flex align-items-center">
                    <i class="icon-phone"></i>
                    <a href="tel:9893594094">+91 9893594094</a>
                  </div>
                </div>
              </div>
			  
					
				    <?php if(isset($_GET['empty']) == 'empty'){ ?>
					<div align="center" style="color:#FF0000;"><?php echo $_GET['empty'];?></div>		
					<?php } ?>
					<?php $page_name = "enquiry.php";?>	
					<?php $table_name = "form_enquiry";?>
					<?php $website_name = "Refracast Metallurgicals Pvt.Ltd";?>
					<?php $enquiry_name = "Enquiry";?>
					
					    <form  action="mail-operation.php" class="contact__form-panel" method="post"  autocomplete="off" >
					    <input type="hidden" name="phupld" value="phupld">
						<input type="hidden" name="table_name" value="<?php echo $table_name ; ?>" class="form-control" />
						<input type="hidden" name="page_name" value="<?php echo $page_name ; ?>" class="form-control" />
						<input type="hidden" name="website_name" value="<?php echo $website_name ; ?>" class="form-control" />
						<input type="hidden" name="enquiry_name" value="<?php echo $enquiry_name ; ?>" class="form-control" />
                <div class="row">
                  <div class="col-sm-12 contact__form-panel-header">
                    <h4>Enquiry Form</h4>
                  </div>
                  <div class="col-sm-6 col-md-6 col-lg-6">
                    <div class="form-group">
					<input type="text" name="fname" value="<?php echo $_GET['fname'];?>" class="form-control" placeholder="Name">
					</div>
                  </div>
				  
                  <div class="col-sm-6 col-md-6 col-lg-6">
                    <div class="form-group"><input type="text" name="mobile" value="<?php echo $_GET['mobile'];?>" class="form-control" placeholder="Mobile Number"></div>
                  </div>
				  
				   <div class="col-sm-6 col-md-6 col-lg-6">
                    <div class="form-group"> <input type="email" name="email" value="<?php echo $_GET['email'];?>" class="form-control" placeholder="Email Id"></div>
                  </div>
				  
				  <div class="col-sm-6 col-md-6 col-lg-6">
                    <div class="form-group"><input type="text" name="city" value="<?php echo $_GET['city'];?>" class="form-control" placeholder="City"></div>
                  </div>
				  
				  <div class="col-sm-6 col-md-6 col-lg-12">
                    <div class="form-group"><input type="text" name="address" value="<?php echo $_GET['address'];?>" class="form-control" placeholder="Address"></div>
                  </div>
               	   
                  <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="form-group">
                      <textarea name="message" class="form-control" placeholder="Message"><?php echo $_GET['message'];?></textarea>
                    </div>
                  </div>
				  
				  <div class="col-sm-6 col-md-6 col-lg-6">
           <div class="form-group"><input type="text" name="secure" onClick="this.value=''" id="input-password" class="form-control"></div>
                  </div>
				  
				  <div class="col-sm-6 col-md-6 col-lg-6">
                   <img src="image.php" alt="Click to reload image" title="Click to reload image" id="captcha" onClick="javascript:reloadCaptcha()" />
                  <div>Click on the image to reload</div>
                  </div>
				  
                  <div class="col-sm-12 col-md-12 col-lg-12">
                    <button type="submit" class="btn btn__secondary btn__block">
                      <span>Submit</span><i class="icon-arrow-right"></i>
                    </button>
                  </div>
                </div>
              </form>
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