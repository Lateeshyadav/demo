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
           
            <h1 class="pagetitle__heading">Products</h1>
          </div>
        </div>
      </div>
    </section>
   
   
<section id="textContentSection" class="text-content-section">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-3 hidden-xs hidden-sm">
             <?php include('right-section.php'); ?>
          </div>
		  
          <div class="col-sm-12 col-md-12 col-lg-9">
            <div class="text__block">
			
			          	        <?php 
								include('conn.php');								
								$fldPathId = $_GET['fldPathId'];
								if($fldPathId==''){
								$sqlQry = "SELECT* FROM products WHERE fldStatus='0' AND fldDel='0' ORDER BY fldOrder ASC LIMIT 0,1";
								}else{
								$sqlQry = "SELECT* FROM products WHERE fldId='".$fldPathId."' AND fldStatus='0' AND fldDel='0' ORDER BY fldOrder ASC LIMIT 0,50";
								}
								$result = mysql_query($sqlQry);
								while($row = mysql_fetch_array($result)){
								if($row['fldPath']==''){
								$img4 = 'logo.jpg';
								}else{
								$img4 = $row['fldPath'];
								}
								?> 
			
              <h5 class="text__block-title"><?php echo $row['fldName']; ?></h5>      
			  <!--<div class="text__block-desc"><?php //echo $row['fldDetails']; ?></div> -->       
               <img src="uploads/products/<?php echo $img4 ; ?>" class="img-responsive" alt="<?php echo $row['fldName']; ?>" title="<?php echo $row['fldName']; ?>">
            
			  
                
				 
				 <?php } ?>
          </div>
        </div>
		
		<div class="col-sm-12 col-md-12 col-lg-3 hidden-lg hidden-md">
		<br>

             <?php include('right-section.php'); ?>
          </div>
      </div>
	  </div>
    </section>

<?php include('footer.php'); ?>
   
 </div>
  
<?php include('footer-js.php'); ?>
  
</body>

</html>