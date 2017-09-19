

  <style type="text/css">
	#form-container .list{
		height: 35px;
	}
.modal-header{
		padding: 10px;
	}
	.modal-footer{
			padding-top: 5px;
		padding-bottom: 5px;
	}
	.modal-body1{
		padding: 10px;
		padding-top: 10px;
		padding-bottom: 0px;
	}
	
</style>



<body>
<div class="main_container">
	
<!-- InstanceBeginEditable name="MainContainer" -->
<div class="innerPageBanner clearfix" id="researchConsult">
	<img src="<?php echo base_url();?>application/images/banners/research-consulting.jpg" alt="Research and Consultation">
		</div>
		<div class="contentBlock" id="innerSubPage">
		<div class="spacer40"></div>
		<div class="wrapper1000">
		<div class="row center-md">
			<div class="col-md-12">
				<div class="introBox">
					<h1 class="title"><?php echo $this->lang->line('researchandconsultation_heading'); ?></h1>
					<p class="font24"><?php echo $this->lang->line('researchandconsultation_content'); ?></p>
				</div>
			</div>
		</div>
		</div>
		<div class="spacer40"></div>
			<div>
		<div class="wrapper">
			<div class="spacer40"></div>
			<div class="clearfix">
				<div class="row reverse middle-md between-md">
					<div class="col-md-6 col-sm-12">
						<div id="workProcessCorporate">
								<h2>How It Works</h2>
								<div class="row">
									<div class="col-xs-12 col-md-6">
									<div class="workstep">
										<div class="stepNumb">Step <span class="number">01</span></div>
										<div class="stepContent">
										<?php echo $this->lang->line('researchandconsultation_howitworks_step1'); ?></div>
										<div class="rightArrow"></div>
									</div>
									</div>
									<div class="col-xs-12 col-md-6">
									<div class="workstep">
										<div class="stepNumb">Step <span class="number">02</span></div>
										<div class="stepContent"><?php echo $this->lang->line('researchandconsultation_howitworks_step2'); ?></div>
										<div class="downArrow"></div>
									</div>
									</div>
									</div>
									<div class="row reverse">
									<div class="col-xs-12 col-md-5">
									<div class="workstep">
										<div class="stepNumb">Step <span class="number">03</span></div>
										<div class="stepContent"><?php echo $this->lang->line('researchandconsultation_howitworks_step3'); ?></div>
										<div class="leftArrow"></div>
									</div>
									</div>
									<div class="col-xs-12 col-md-3">
									<div class="workstep">
										<div class="stepNumb">Step <span class="number">04</span></div>
										<div class="stepContent shortPara"><?php echo $this->lang->line('researchandconsultation_howitworks_step4'); ?><br></br><p></p></div>
										<div class="leftArrow"></div>
									</div>
									</div>
									<div class="col-xs-12 col-md-4">
									<div class="workstep">
										<div class="stepNumb">Step <span class="number">05</span></div>
										<div class="stepContent"><?php echo $this->lang->line('researchandconsultation_howitworks_step5'); ?></div>
									</div>
									</div>
									</div>
								</div>
					</div>
					<div class="col-md-5 lineHeightBig col-sm-12">
						<p><?php echo $this->lang->line('researchandconsultation_howitworks_content'); ?></p> 
					</div>
				</div>
			</div>
			<div class="spacer40"></div>
		</div>
		<div class="lineBar"></div>
		<div class="wrapper">
			<div class="spacer40"></div>
			<div class="row middle-md between-md">
					<div class="col-md-6 col-sm-6 benefits">
						<h2 class="bigH2"><?php echo $this->lang->line('researchandconsultation_benefits_heading'); ?></h2>
						<ul class="customTick font18Big">
							<li><?php echo $this->lang->line('researchandconsultation_benefits_heading'); ?></li>
							<li><?php echo $this->lang->line('researchandconsultation_benefits_content1'); ?></li>
							<li><?php echo $this->lang->line('researchandconsultation_benefits_content2'); ?></li>
							<li><?php echo $this->lang->line('researchandconsultation_benefits_content3'); ?></li> 
							<li><?php echo $this->lang->line('researchandconsultation_benefits_content4'); ?></li>
							<li><?php echo $this->lang->line('researchandconsultation_benefits_content5'); ?></li>
							<!-- <li>Consult with industry leaders, innovators, and professionals in the fields of Big Data and Analytics and Data Science.</li> -->
						</ul>
					</div>
					<div class="col-md-5 col-sm-6">
						<div class="serviceBlk center-xs">
							<div class="iconBlock"></div>
								<div class="titleService" course_id="<?php echo $result[0]['course_id'];?>"><?php echo $result[0]['course_name'];?></div>
								
								<p>Custom built products and solutions that provide competitive advantage to your business.</p>
								<a class="button" href="#" title="Corporate Solutions" onclick="call_enroll();">Register Now<span class="smallText"></span></a>
						</div>
					</div>
				</div>
			<div class="spacer40"></div>
		</div>
		<div class="lineBar"></div>
		<div class="wrapper">
			<div class="spacer40"></div>
			<div class="row middle-md between-xs">
					<div class="col-md-6 col-sm-6 endBlk font22Big">
						<p>The world of Data Science is growing at an accelerated pace, and it's more important than ever for businesses to stay up to date on the latest trends and technologies. Also, it is a necessity to receive current and relevant information so that the information is highly accurate, organized, and prepared for this fast-paced industry.</p>
					</div>
					<div class="col-md-5 col-sm-6">
					  <div class="colourCenterBox lightColorBox">
					  <div class="text">
							Train on Big Data and advanced data analytics techniques
				</div>
					<a href="<?php echo base_url('BigdatasiteController/training_on_demand');?>" class="btnLink" title="Training on Demand">Go to Training on Demand</a>
						</div>
						<div class="colourCenterBox darkColorBox">
					  <div class="text">
							Customized solutions for data analysis and visualization needs
				</div>
					<a href="<?php echo base_url('BigdatasiteController/business_solutions');?>" class="btnLink" title="Business Solutions">Go to Business Solutions</a>
						</div>
					</div>
				</div>
			<div class="spacer40"></div>
		</div>
		</div>
		<div class="fullBgBlue" id="subscribeBlock">
		<div class="wrapper1000">
		<div class="row center-sm">
			<div class="col-md-12 fullTextCenterBox">
				<h3>Subscribe Now to get Update</h3>
			<div class="subscribeform">
				<form action="">
				<input type="text" class="textInput" name="email" placeholder="Enter your email">
				<input type="submit" name="submit" value="Join Now" class="btnWhite">
				</form>
				
			</div>
			</div>
			
		</div>
			
			</div>
		</div>
		</div>	
<!-- InstanceEndEditable -->
		
	</div>
<!-- InstanceBeginEditable name="FooterScriptRegion" --><!-- InstanceEndEditable -->

	
	</body>
<!-- InstanceEnd --></html>
