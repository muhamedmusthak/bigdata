<?php
$page=$this->uri->segment(2);
//echo $page; exit();
$user_name=$this->session->userdata('name');

?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" xml:lang="en" lang="en-US" prefix="og: http://ogp.me/ns#">

<head>
	<!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'/><![endif]-->
        <!--[if lt IE 9]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <meta charset="UTF-8">
         <META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no" name="viewport">
        <link href="<?php echo base_url();?>application/css/font-awesome.min.css" rel="stylesheet" integrity="" crossorigin="anonymous">
        <link rel="icon" type="image/png" href="<?php echo base_url();?>application/images/favicon.ico" />
        
       
        <title>Bigdata Innovation Hub</title>
        
        <script type="text/javascript">
			window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/72x72\/","ext":".png","source":{"concatemoji":"<?php echo base_url();?>application/js/wp-emoji-release.min.js"}};
			!function(a,b,c){function d(a){var c=b.createElement("canvas"),d=c.getContext&&c.getContext("2d");return d&&d.fillText?(d.textBaseline="top",d.font="600 32px Arial","flag"===a?(d.fillText(String.fromCharCode(55356,56812,55356,56807),0,0),c.toDataURL().length>3e3):(d.fillText(String.fromCharCode(55357,56835),0,0),0!==d.getImageData(16,16,1,1).data[0])):!1}function e(a){var c=b.createElement("script");c.src=a,c.type="text/javascript",b.getElementsByTagName("head")[0].appendChild(c)}var f,g;c.supports={simple:d("simple"),flag:d("flag")},c.DOMReady=!1,c.readyCallback=function(){c.DOMReady=!0},c.supports.simple&&c.supports.flag||(g=function(){c.readyCallback()},b.addEventListener?(b.addEventListener("DOMContentLoaded",g,!1),a.addEventListener("load",g,!1)):(a.attachEvent("onload",g),b.attachEvent("onreadystatechange",function(){"complete"===b.readyState&&c.readyCallback()})),f=c.source||{},f.concatemoji?e(f.concatemoji):f.wpemoji&&f.twemoji&&(e(f.twemoji),e(f.wpemoji)))}(window,document,window._wpemojiSettings);
		</script>
		<style type="text/css">
            img.wp-smiley,
            img.emoji {
            	display: inline !important;
            	border: none !important;
            	box-shadow: none !important;
            	height: 1em !important;
            	width: 1em !important;
            	margin: 0 .07em !important;
            	vertical-align: -0.1em !important;
            	background: none !important;
            	padding: 0 !important;
            }
         </style>
        <style>
         .tab-content > .tab-pane
          {
            display:block!important;
            visibility:visible!important;
         }
        .top{
        	margin-left:489px;
        	padding-bottom:16px !important;
        }
        .top li a{
        	line-height:40px!important;
        	height:45px!important;
        	/*padding:10px 1px 10px 9px!important;*/
        }
        </style>
<style>


.dropdown {
    position: relative;
    display: inline-block;
}
.dropdown-content li {

}
.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 5px 5px!important;
    text-decoration: none !important;
     line-height: 16px!important;
      height: 30px!important;
    /*display: block;*/
}

.dropdown-content a:hover {background-color: none;}

.dropdown:hover .dropdown-content {
    display: block;

}
.dropdown-content a:hover  {
    display: block;
    text-decoration: none!important;


}

.dropdown:hover  {
    background-color: none;
}
</style>
        

<link href="<?php echo base_url();?>application/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link rel='stylesheet' id='responsive-lightbox-swipebox-css'  href='<?php echo base_url();?>application/css/swipebox.min.css' type='text/css' media='all' />
<link rel='stylesheet' id='wp_review-style-css'  href="<?php echo base_url();?>application/css/wp-review.css" type='text/css' media='all' />
<link rel='stylesheet' id='jigsaw-lato-css'  href='<?php echo base_url();?>application/css/fonts.googleapis.css' type='text/css' media='all' />
<link rel='stylesheet' id='jigsaw-nontserrat-css'  href='<?php echo base_url();?>application/css/montserrat.css' type='text/css' media='all' />
<link rel='stylesheet' id='jigsaw-bootstrap-css'  href='<?php echo base_url();?>application/css/bootstrap.custom.css' type='text/css' media='all' />
<link href="<?php echo base_url();?>application/css/bootstrapvalidator.min.css" rel="stylesheet">
<link href="<?php echo base_url();?>application/css/jquery.loader.css" rel="stylesheet">
<link rel='stylesheet' id='jigsaw-magnific-css'  href='<?php echo base_url();?>application/css/magnific-popup.css' type='text/css' media='all' />
<link rel='stylesheet' id='jigsaw-style-css'  href='<?php echo base_url();?>application/css/style.css' type='text/css' media='all' />
<link rel='stylesheet' id='jigsaw-media-css'  href='<?php echo base_url();?>application/css/media.css' type='text/css' media='all' />
<link rel='stylesheet' id='jigsaw-carousel-css'  href='<?php echo base_url();?>application/css/carousel.css' type='text/css' media='all' />
<meta name="generator" content="WordPress 4.3.1" />
<link rel='shortlink' href='#' />
<!--[if IE 7]>
<link rel="stylesheet" href="./css/wp-review.css">
<![endif]-->
<link rel="icon" href="#" sizes="32x32" />
<link rel="icon" href="#" sizes="192x192" />
<link rel="apple-touch-icon-precomposed" href="#">
<meta name="msapplication-TileImage" content="#">
</head>
<body class="home page page-id-313 page-template page-template-page-home page-template-page-home-php group-blog">
    	<noscript><span style="text-align: center;background: black;color: white;padding: 5pt;position: fixed;z-index: 1111;width: 100%;opacity: 0.6;text-transform: uppercase;">Jigsaw Academy needs JavaScript enabled to work properly.</span></noscript>
    	<style scoped>
    		.offer-main.alt:after, .offer-main.alt {
    			background: #05A4DE!important;
    			margin-top: -7px;
    			font-size: 11px;
    		}
    		.stickyheader .offer-main.alt {
    			margin-top: 0px;
    			line-height: 22px;
    			max-height: 65px;
    		}
    		.alt-height {
    			line-height: 10px;
    		}

    		.stickyheader .alt-height {
    			line-height: 20px;
    		}
    	</style>
    	<style>
    		#main-nav ul li {
    			vertical-align: top;
    		}
    		#main-nav ul li.login-button a {
    			top: 28px;
                /*padding:10px 1px 10px 9px;*/
    			
    		}
    		header.stickyheader #main-nav ul li.login-button a {
    			top: 11px;
    		}
    	</style>
    	  <style>
    	@media only screen and (min-width: 1201px) {
		    #menu_hide {
		        display:none!important;
		    }
 .menu1 li:hover > ul{
    display: block;
        visibility:visible;
}
 
.menu1 ul ul{
    top: 90px;
    left:10px;
    display: none;
        visibility:hidden;
    border: 1px solid #DDDDDD;
}
.menu1 ul ul ul{
    top: 90px;
    left:10px;
    display: none;
        visibility:hidden;
    border: 1px solid #DDDDDD;
}

    	</style>  
    	
    	<div id="page">
    		<div id="header-fixed">
    			<header>
    				<div class="row clearfix" style="max-width: 1280px">
    					<div class="logo">
    						<a href="<?php echo base_url('BigdatasiteController/index');?>"></a>
    					</div>
    					<nav id="main-nav" class="menu1">
	    					<ul>
    						<li class="<?php if($page=='about'){echo "active" ;} else{echo '';}?>" >
								<a href="<?php echo base_url('BigdatasiteController/about');?>">
									<span>About Us</span>
								</a>
							</li>
    						<li class="<?php if($page=='why_bdih'){echo "active" ;} else{echo '';}?>">
                                <a href="<?php echo base_url('BigdatasiteController/why_bdih');?>">Why BDIHub</a>
                            </li>
                            <li class="<?php if($page=='courses'){echo "active"; } else{ echo '';}?>" >
            					<a href="<?php echo base_url('BigdatasiteController/courses');?>">Courses</a>
            				</li>
            				<li class="<?php if($page=='global_opportunities'){echo "active"; } else{echo '';}?>">
								<a href="<?php echo base_url('BigdatasiteController/global_opportunities');?>">Global Opportunities</a>
                            </li>
							<li class="<?php if($page=='corporate_solutions'){echo "active"; } else{ echo'';}?>dropdown">
								<a href="<?php echo base_url('BigdatasiteController/corporate');?>">Corporate Solutions</a>
                               		 <ul class="dropdown-content">
                                        <li class="new" style="width: 170px;"> <a href="<?php echo base_url('BigdatasiteController/training_demand');?>" >Training on Demand</a></li>
                                        <li class="new"> <a href="<?php echo base_url('BigdatasiteController/placement');?>">Placements</a></li>
                                         <li class="new" style=" border-right:none;width:140px;"><a href="#">Business-Solutions</a>
                                            <ul class="dropdown-content" style=" top: 3px;left:140px;">
                                                    <li class="new" style=" border-right:none;width:140px;"> <a href="#">Services</a>
                                                            <ul class="dropdown-content" style=" top: 3px;left:140px;">
			                                                    <li class="new"> <a href="<?php echo base_url('BigdatasiteController/banking_finance');?>">Industry</a></li>
                                                                <li class="new"> <a href="<?php echo base_url('BigdatasiteController/video_mining');?>">Expertise</a></li>
			                                                   <!--  <li class="new"> <a href="<?php echo base_url('BigdatasiteController/video_mining');?>">Expertise</a>
			                                                    </li>
			                                                    <li class="new"> <a href="<?php echo base_url('BigdatasiteController/internet_things');?>">Case Studies</a>
			                                                    </li> -->
                                              				</ul>
                                                    </li>
                                                     <li class="new" style=" border-right:none;width:140px;"> <a href="#">Case Study</a>
                                                            <ul class="dropdown-content" style=" top: 3px;left:140px;width: 200px;">
			                                                    <li class="new"> <a href="<?php echo base_url('BigdatasiteController/internet_things');?>">Internet of Things</a></li>
			                                                    <li class="new"> <a href="<?php echo base_url('BigdatasiteController/sensor_analysis');?>">Sensor Analysis</a>
			                                                    </li>
			                                                    <li class="new"> <a href="<?php echo base_url('BigdatasiteController/cross_sell');?>">Cross-Sell Up-Sell</a>
			                                                    </li>
			                                                     <li class="new"> <a href="<?php echo base_url('BigdatasiteController/customer_segmentation');?>">Customer Segmentation</a></li>
			                                                    <li class="new" style="margin-bottom: 15px;"> <a href="<?php echo base_url('BigdatasiteController/investment_advice');?>">Personalized Investment Advice</a>
			                                                    </li>
			                                                    <li class="new"> <a href="<?php echo base_url('BigdatasiteController/strategy_marketing');?>">Strategy and Marketing</a>
			                                                    </li>
			                                                     <li class="new"> <a href="<?php echo base_url('BigdatasiteController/human_resource');?>">Human Resources</a>
			                                                    </li>
			                                                     <li class="new"> <a href="<?php echo base_url('BigdatasiteController/visualization');?>">Visualization</a>
			                                                    </li>
                                          					</ul>                                                    
                                            </ul>
                                        </li>
                                </ul>                               
							</li>
							<li class="<?php if($page=='contact'){echo "active"; } else{echo '';}?>">
				                <a href="<?php echo base_url('BigdatasiteController/contact');?>">Contact</a>
                            </li>
                            <li class="<?php if($page=='articles'){echo "active"; } else{echo '';}?>"
>

				                <a href="<?php echo base_url('BigdatasiteController/articles');?>">Articles</a>
                            </li>
    						
                                <li><a href="" style="padding:10px 1px 10px 2px"><img src="<?php echo base_url();?>application/images/spanish.png" width="50px" height="50px"></a></li>
                                <li><a href="" style="padding:10px 1px 10px 1px"><img src="<?php echo base_url();?>application/images/english.png" width="40px" height="42px"></a></li>
                                <!-- <li class="login-button">
                                    <a href="<?php echo base_url('BigdatasiteController/login');?>" target="_blank" >
                                         <span>Login</span>
                                    </a>
                                </li> -->

                                 <?php 
                                if($user_name)
                                {
                                ?> 
                                    <li class="login-button">
                                        <a href="<?php echo base_url('BigdataAdminController/logout');?>" class=""><span>Logout</span></a>
                                    </li>
                                <?php } else { ?>
                                <li class="login-button"><a href="#popup-login" class="popup-with-form"><span>Login</span></a></li>
                                <?php } ?>
    							<li class="menu" id="menu_hide">
	    							<a href="#" class="menu-image">
	    							 		<span>Menu</span> 
	    							 		<img src="<?php echo base_url();?>application/images/nav-img.png" alt="nav" class="image-icon" />
	    							</a>
	    							    					
	    						</li>
    							<!-- <li class="IOT"><a href="#" style="padding-top: 0px;"><img src="./images/homepage-badge-iot.png" style="opacity: 1.0;" /></a></li>-->
    						</ul>
    					</nav>

    					<!-- <a class="offer-main" href="#">
    						<span></span>
    						OFFERS </a> -->
                        
                    </div>
                    <!-- row ends here-->
                    <div id="pop-menu-section" class="main-menu-sec bg-white">
                    <div class="row">
                    	<div class="main-menu-sec-in">
                    		<a href="#" class="menu-image menu-close">Close<img src="<?php echo base_url();?>application/images/menu-close.png" alt="nav" class="image-icon" /></a>
                    		<div class="step-container">
                    			<div class="box-with-border textcenter">
                    				<!-- <a href="<?php echo base_url('BigdatasiteController/login');?>" class="mobile-login skewed  button-orange button-small" target="_blank"><span>Login</span></a> -->
                                    <a href="#popup-login" class="popup-with-form mobile-login skewed  button-orange button-small"><span>Login</span></a>
                    				    <div class="clearfix common" style="margin-left: -10.5% !important;">
											<div class="menu-inner">
												<div class="one-fourth font-lato">
													<span class="menu-item-title font-montserrat">BDIH</span><div class="menu-learn-container">
												<ul id="menu-learn" class="menu"><li id="menu-item-9449" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-9449">
												<a href="<?php echo base_url('BigdatasiteController/about');?>">About Us</a></li>
	<li id="menu-item-419" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-419">
													<a href="<?php echo base_url('BigdatasiteController/why_bdih');?>">Why BDIHub</a></li>

	<li id="menu-item-1422" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1422">
													<a href="<?php echo base_url('BigdatasiteController/global_opportunities');?>">Global Opportunities</a></li>

	<li id="menu-item-13896" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-13896">
													<a href="<?php echo base_url('BigdatasiteController/corporate');?>">Corporate Soltuions</a></li>
<li id="menu-item-13896" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-13896">
													<a href="<?php echo base_url('BigdatasiteController/internet_thinks');?>">Case study</a></li>
<li id="menu-item-13896" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-13896">
													<a href="<?php echo base_url('BigdatasiteController/banking_finance');?>">Industry</a></li>
<li id="menu-item-13896" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-13896">
													<a href="<?php echo base_url('BigdatasiteController/video_mining');?>">Expertise</a></li>
												</ul></div>
												</div>
												<div class="one-fourth font-lato"><span class="menu-item-title font-montserrat">Learn</span>
													<div class="menu-explore-header-container"><ul id="menu-explore-header" class="menu">
														<li id="menu-item-2416" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2416">
															<a href="<?php echo base_url('BigdatasiteController/courses');?>">Courses</a></li>
														

<li id="menu-item-422" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-422">
															
<a href="<?php echo base_url('BigdatasiteController/global_opportunities');?>" >Job opportunity</a></li>
														<li id="menu-item-423" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-423">
															<a href="<?php echo base_url('BigdatasiteController/contact');?>">Contact</a></li>

<li id="menu-item-423" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-423">
<a href="<?php echo base_url('BigdatasiteController/articles');?>" >Articles</a></li>
														
														</ul>
													</div>
												</div>

												<div class="one-fourth font-lato"><span class="menu-item-title font-montserrat">Learning Center</span>
													<div class="menu-for-business-container"><ul id="menu-for-business" class="menu">
													<li id="menu-item-425" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-425">
                                                        <a href="#"><img src="<?php echo base_url();?>application/images/spanish.png" width="52px" height="42px"></a>
                                                    </li>
                                                    <li id="menu-item-425" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-425">
                                                        <a href="#"><img src="<?php echo base_url();?>application/images/english.png" width="40px" height="42px"></a>
                                                    </li>
													<!-- <li id="menu-item-426" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-426">
														<a href="#">University training</a></li> -->
													</ul>
													</div>
												</div>

												<!-- <div class="one-fourth font-lato"><span class="menu-item-title font-montserrat">HELP</span>
													<div class="menu-help-container"><ul id="menu-help" class="menu">
													<li id="menu-item-10072" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-10072">
														<a href="#">Contact</a></li>
													<li id="menu-item-429" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-429">
														<a href="#">How it Works</a></li>
													<li id="menu-item-430" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-430">
														<a href="#">FAQs</a></li>
													</ul>
													</div>
												</div> -->
											</div>
                    					</div>
                    			</div>
                    			<!--box-with-border ends here-->
                    		</div>
                    		<!--step-container ends here-->
                    		<div class="menu-footer">
                    			<div class="clearfix ">
                    				<div class="menu-footer-left font-lato">
                    					<span class="email">
                    						<a href="#" class="email footer-email-link"><img src="<?php echo base_url();?>application/images/icon-mail.png" alt="mail" />info@bdih.com</a></span>
                    						<span class="phone">
                    							<img src="<?php echo base_url();?>application/images/icon-phone.png" alt="phone" /> +xx xx-xxxxxx</span> 
                    				</div>
                    				<div class="menu-footer-right">
                    					<div class="social-media">
        									<a href="#" target="_blank"><img src="<?php echo base_url();?>application/images/icon-facebook.png" alt="facebook"></a>
        									<a href="#" target="_blank"><img src="<?php echo base_url();?>application/images/icon-youtube.png" alt="youtube"></a>
        									<a href="#" target="_blank"><img src="<?php echo base_url();?>application/images/icon-linkedin.png" alt="linkedin"></a>
        									<a href="#" target="_blank"><img src="<?php echo base_url();?>application/images/icon-twitter.png" alt="twitter"></a>
        								</div>
    								<!-- <div class="pricing-switch">   
    										<span class="pricing-label">CURRENCY</span>    
	    									<form action="" method="post">
									        <div class="picing-switch ajax-money">
									            <span class="switch-main">
									                <span class="input-outer">
									                    <input type="radio" name="jig_change_price" id="usd" value="usd"  onchange="this.form.submit()" >
									                    <label class="" for="usd">USD</label>
									                </span>
									                <span class="input-outer">
									                    <input type="radio" name="jig_change_price" id="inr" value="inr"  checked onchange="this.form.submit()" >
									                    <label class="checked" for="inr">INR</label>
									                </span>
									            </span>
									        </div>
									    	</form>
    									</div> -->
                    				</div>
                    			</div>
                    		</div>
                    	</div>
                    </div>
                    </div>

                    <!-- <div style="background-color:red">
                     dfdf
                    </div> -->

                    <div id="pop-menu-section-two" class="main-menu-sec bg-white">
                    <div class="row-two">
                    	<div class="main-menu-sec-in">
                    		<a href="#" class="menu-image menu-close">Close <img src="<?php echo base_url();?>application/images/menu-close.png" alt="nav" class="image-icon" /></a>
                    		<div class="step-container">
                    			<div class="box-with-border textcenter">
                    				<a href="#popup-login" class="popup-with-form mobile-login skewed  button-orange button-small"><span>Login</span></a>
                    				    <div class="clearfix common">
											<div class="menu-inner">
												<div class="one-fourth font-lato">
													<span class="menu-item-title font-montserrat">What is BDIH</span><div class="menu-learn-container">
												<ul id="menu-learn" class="menu"><li id="menu-item-9449" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-9449">
												<a href="./about/index.php">Training</a></li>
												<li id="menu-item-419" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-419">
													<a href="./about/index.php">Consulting</a></li>
												<li id="menu-item-1422" class="pathfinder-menu menu-item menu-item-type-custom menu-item-object-custom menu-item-1422">
													<a href="./about/index.php">Services</a></li>
												<li id="menu-item-13896" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-13896">
													<a href="./about/index.php">Incubator</a></li>
												</ul></div>
												</div>
												<div class="one-fourth font-lato"><span class="menu-item-title font-montserrat">Global opportunity Profile</span>
												<span class="menu-item-title font-montserrat"></span>
												<div class="menu-learn-container">
												<ul id="menu-learn" class="menu"><li id="menu-item-9449" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-9449">
												<a href="http://www.dsyde.ai/about/">DSYDE</a></li>
												<li id="menu-item-419" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-419">
													<a href="https://www.flatworldsolutions.com/about-fws/">Flatworld solutions</a></li>
												</ul>
												</div>
												</div>
												<div class="one-fourth font-lato"><span class="menu-item-title font-montserrat"><a href="./about/management_team.php" style="color:black!important">Management Team</a></span>
												</div>
                    					</div>
                    			</div>
                    			<!--box-with-border ends here-->
                    		</div>
                    		<!--step-container ends here-->
                    		<div class="menu-footer">
                    			<div class="clearfix ">
                    				<div class="menu-footer-left font-lato">
                    					<span class="email">
                    						<a href="#" class="email footer-email-link"><img src="<?php echo base_url();?>application/images/icon-mail.png" alt="mail" />info@bdih.com</a></span>
                    						<span class="phone">
                    							<img src="<?php echo base_url();?>application/images/icon-phone.png" alt="phone" /> +xx xx-xxxxxx</span> 
                    				</div>
                    				<div class="menu-footer-right">
                    					<div class="social-media">
        									<a href="#" target="_blank"><img src="<?php echo base_url();?>application/images/icon-facebook.png" alt="facebook"></a>
        									<a href="#" target="_blank"><img src="<?php echo base_url();?>application/images/icon-youtube.png" alt="youtube"></a>
        									<a href="#" target="_blank"><img src="<?php echo base_url();?>application/images/icon-linkedin.png" alt="linkedin"></a>
        									<a href="#" target="_blank"><img src="<?php echo base_url();?>application/images/icon-twitter.png" alt="twitter"></a>
        								</div>
    								<!-- <div class="pricing-switch">   
    										<span class="pricing-label">CURRENCY</span>    
	    									<form action="" method="post">
									        <div class="picing-switch ajax-money">
									            <span class="switch-main">
									                <span class="input-outer">
									                    <input type="radio" name="jig_change_price" id="usd" value="usd"  onchange="this.form.submit()" >
									                    <label class="" for="usd">USD</label>
									                </span>
									                <span class="input-outer">
									                    <input type="radio" name="jig_change_price" id="inr" value="inr"  checked onchange="this.form.submit()" >
									                    <label class="checked" for="inr">INR</label>
									                </span>
									            </span>
									        </div>
									    	</form>
    									</div> -->
                    				</div>
                    			</div>
                    		</div>
                    	</div>
                    </div>
                    </div>

                 </header>
                    <!-- header ends here-->
   			</div>
                    	<!-- header-fixed ends here-->
