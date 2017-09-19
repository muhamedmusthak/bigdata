<!DOCTYPE html>
<html lang="en-US"><!-- InstanceBegin template="Templates/inner-page.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<!-- InstanceBeginEditable name="doctitle" -->
<title>Why BDIHub</title>
<meta name="description" content=""/>
<meta name="keywords" content=""/>
<!-- InstanceEndEditable -->
<link rel="stylesheet" href="<?php echo base_url();?>application/css/styles.css" type="text/css" media="screen"/>
 <link rel="stylesheet" href="<?php echo base_url();?>application/css/museo.css" type="text/css" media="screen"/>
<link href="/favicon.ico" type="image/ico" rel="shortcut icon"/>
 <link rel="stylesheet" href="<?php echo base_url();?>application/css/bootstrap.css" type="text/css" media="screen"/>
<script src="<?php echo base_url();?>application/js/jquery-1.12.0.min.js"></script>
<script src="<?php echo base_url();?>application/js/bootstrap.js"></script>
</head>
<?php
$status=$_POST["status"];
$firstname=$_POST["firstname"];
$amount=$_POST["amount"];
$txnid=$_POST["txnid"];
$posted_hash=$_POST["hash"];
$key=$_POST["key"];
$productinfo=$_POST["productinfo"];
$email=$_POST["email"];
$salt="e5iIg1jwi8";

If (isset($_POST["additionalCharges"])) {
       $additionalCharges=$_POST["additionalCharges"];
        $retHashSeq = $additionalCharges.'|'.$salt.'|'.$status.'|||||||||||'.$email.'|'.$firstname.'|'.$productinfo.'|'.$amount.'|'.$txnid.'|'.$key;
        
                  }
 else {   

        $retHashSeq = $salt.'|'.$status.'|||||||||||'.$email.'|'.$firstname.'|'.$productinfo.'|'.$amount.'|'.$txnid.'|'.$key;

         }
   $hash = hash("sha512", $retHashSeq);
   
       if ($hash != $posted_hash) {
        echo "Invalid Transaction. Please try again";
     }
    else { ?>
               
         <!--  echo "<h3>Thank You. Your order status is ". $status .".</h3>";
          echo "<h4>Your Transaction ID for this transaction is ".$txnid.".</h4>";
          echo "<h4>We have received a payment of Rs. " . $amount . ". Your order will soon be shipped.</h4>"; -->
       

<body>
<div class="main_container">
	<div id="whyUs">
		<div class="innerPageBanner clearfix">
		<img src="<?php echo base_url();?>application/images/banners/why-us.jpg" alt="Why BDIHub" title="Why BDIHub">
		</div>
		<div class="contentBlock">
			<div class="spacer40"></div>
				<div class="wrapper800">
					<div class="row center-md">
						<div class="col-md-12">
							<div class="introBox">
								<h1 class="title">Why BDIHub</h1>
								<p><?php  echo "Thank You. Your order status is ". $status; ?></p>
								<p><?php  echo "Your Transaction ID for this transaction is ".$txnid; ?></p>
								<p><?php  echo "We have received a payment of Rs. " . $amount . ". Your order will soon be shipped." ?></p>
							</div>
						</div>
					</div>				
				</div>
			</div>
		</div>		
	</div>
</body>
</html>
<?php     
     }         
?>