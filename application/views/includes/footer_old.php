<div class="footer_section">
	<div class="wrapper">
		<div class="row between-md ">
			<div class="col-xs-12 col-md-3"> <a href="/"><img src="<?php echo base_url();?>application/images/footer-logo.png" alt="Footer Logo"  id="footerLogo"></a>
				<div class="footerSnippt">
					<p>Our training values every second and we handle with varied range of creative, technical, and knowledgable persons at our brand location in Bogota, Colombia
					</p>
				</div>

			</div>
			<div class="col-xs-12 col-md-8">
				<div class="box">
					<div class="row between-xs">
						<div class="col-xs-6 col-sm-3 col-md-4 lineBlock">
				<div class="smTitle">BDIH</div>
				<ul>
					<li><a href="<?php echo base_url('BigdatasiteController/about_us');?>">About us</a></li>
					<li><a href="<?php echo base_url('BigdatasiteController/global-opportunities');?>">Global opportunity</a></li>
					<li><a href="<?php echo base_url('BigdatasiteController/why_us');?>">Why BDIHub</a></li>
					<li><a href="<?php echo base_url('BigdatasiteController/corporate_solutions');?>">Corporate Solutions</a></li>
				</ul>
			</div>
			<div class="col-xs-5 col-sm-3 col-md-4 lineBlock">
				<div class="smTitle">Explore</div>
				<ul>
<!--					<li>Case studies</li>-->
					<li><a href="<?php echo base_url('BigdatasiteController/privacy_policy');?>">Privacy Policy</a></li>
				</ul>
			</div>
			<div class="col-xs-6 col-sm-3 col-md-4 lineBlock">
				<div class="smTitle">Learn</div>
				<ul>
					<li><a href="<?php echo base_url('BigdatasiteController/training_program');?>">Training Program</a></li>
					<li><a href="<?php echo base_url('BigdatasiteController/contact_us');?>">Contact</a></li>
					<li><a href="<?php echo base_url('BigdatasiteController/global_opportunities_new');?>">Job opportunities</a></li>
<!--					<li>Article</li>-->
				</ul>
			</div>
<!--
			<div class="col-xs-6 col-sm-3 col-md-3 lineBlock">
				<div class="smTitle">Learning Center</div>
				<ul>
					<li>Log in</li>
				</ul>
			</div>
-->
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="footerCopy">
		<div class="wrapper">
			&copy; 2017 big data innovation hub. All rights has reserved
		</div>
	</div>
</div>


<div id="AssModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <!-- <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button> -->
           <h3 id="myModalLabel">Evaluating your capability to complete this course successfully</h3>
           <h3 id="thankyou">Thank you for taking Online Assessment !</h3>
           <h3 id="batchSched">Batch Schedule</h3>
           <h3 id="timeSched">Time Schedule</h3>
        </div>
        <div class="modal-body" id="myWizard">
          
        <!--  <div class="progress">
           <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="1" aria-valuemin="1" aria-valuemax="10" style="width: 20%;">
             Question 1 
           </div>
         </div> -->
        
         <!-- <div class="navbar">
         </div> -->
         <div class="tab-content">
            <div class="tab-pane fade in active" id="step1">
               
              <div class="well"> 
                
                  <label>Question 1</label>
              		
                  <br>
                  <p>What expertise do you desire to acquire ?<p>
		        	<input class='q3_option' name='q1_option' onchange="radiocall('#step2')" id="1" type='radio'/> Big Data<br>
		            <input class='q3_option' name='q1_option' onchange="radiocall('#step2')" id="1" type='radio'/> Data Science<br>
		            <input class='q3_option' name='q1_option' onchange="radiocall('#step2')" id="1" type='radio'/> Both<br>
              </div>
              <a class="nextButtonbtn btn btn-success " href="#step2" data-toggle="tab" data-step="2">Next</a>
              <!-- <a class="btn btn-default next" href="#step2">Continue</a> -->
            </div>
            <div class="tab-pane fade" id="step2">
               <div class="well"> 
                  <label>Question 2</label>
                  <p>Do you have a wokring knowledge of any relational database ?<p>
		        	<input class='q3_option' name='q2_option' onchange="radiocall('#step3')" type='radio'/> Yes<br>
		            <input class='q3_option' name='q2_option' onchange="radiocall('#step3')" type='radio'/> No<br>
		            
                  <br>
                
               </div>
                <a class="btn btn-success " href="#step1" data-toggle="tab" data-step="2">Back</a>
               <a class="btn btn-success " href="#step3" data-toggle="tab" data-step="3">Next</a>
               <!-- <a class="btn btn-default next" href="#">Continue</a> -->
            </div>
            <div class="tab-pane fade" id="step3">
              <div class="well"> 
              		<label>Question 3</label>
                  <p>What does commodity Hardware in Hadoop world mean?<p>
		        	<input class='q3_option' name='q3_option' onchange="radiocall('#step4')" type='radio' />  Very cheap hardware<br>
		            <input class='q3_option' name='q3_option' onchange="radiocall('#step4')" type='radio' /> Industry standard hardware<br>
		            <input class='q3_option' name='q3_option' onchange="radiocall('#step4')" type='radio' /> Discarded hardware<br>


              </div>
               <a class="btn btn-success " href="#step2" data-toggle="tab" data-step="2">Back</a>
               <a class="nextButtonbtn btn btn-success " href="#step4" data-toggle="tab" data-step="4">Next</a>
               <!-- <a class="btn btn-default next" href="#">Continue</a> -->
            </div>
            <div class="tab-pane fade" id="step4">
              <div class="well"> 
              		<label>Question 4</label>
                  <p> Which of the following are NOT big data problem(s)?<p>
		        	<input class='q3_option' name='q4_option' onchange="radiocall('#step5')" type='radio'/> Parsing 5 MB XML file every 5 minutes<br>
		            <input class='q3_option' name='q4_option' onchange="radiocall('#step5')" type='radio' /> Processing IPL tweet sentiments<br>
		            <input class='q3_option' name='q4_option' onchange="radiocall('#step5')" type='radio' /> Processing online bank transactions<br>
              </div>
               <a class="btn btn-success " href="#step3" data-toggle="tab" data-step="3">Back</a>
               <a class="nextButtonbtn btn btn-success " href="#step5" data-toggle="tab" data-step="5">Next</a>
               <!-- <a class="btn btn-default next" href="#">Continue</a> -->
            </div>
            <div class="tab-pane fade" id="step5">
              <div class="well"> 
              		<label>Question 5</label>
                  <p>What does “Velocity” in Big Data mean?<p>
		        	<input class='q3_option' name='q5_option' onchange="radiocall('#step6')" type='radio' /> Speed of input data generation<br>
		            <input class='q3_option' name='q5_option' onchange="radiocall('#step6')" type='radio' /> Speed of individual machine processors<br>
		            <input class='q3_option' name='q5_option' onchange="radiocall('#step6')" type='radio' /> Speed of ONLY storing data<br>
              </div>
               <a class="btn btn-success " href="#step4" data-toggle="tab" data-step="4">Back</a>
               <a class="nextButtonbtn btn btn-success " href="#step6" data-toggle="tab" data-step="6">Next</a>
               <!-- <a class="btn btn-default next" href="#">Continue</a> -->
            </div>
            <div class="tab-pane fade" id="step6">
              <div class="well"> 
              		<label>Question 6</label>
                 <p>The term Big Data first originated from:<p>
		        	<input class='q3_option' name='q6_option' onchange="radiocall('#step7')" type='radio' /> Stock Markets Domain<br>
		            <input class='q3_option' name='q6_option' onchange="radiocall('#step7')" type='radio' /> Banking and Finance Domain<br>
		            <input class='q3_option' name='q6_option' onchange="radiocall('#step7')" type='radio' /> Genomics and Astronomy Domain<br>
              </div>
               <a class="btn btn-success " href="#step5" data-toggle="tab" data-step="5">Back</a>
               <a class="nextButtonbtn btn btn-success " href="#step7" data-toggle="tab" data-step="7">Next</a>
               <!-- <a class="btn btn-default next" href="#">Continue</a> -->
            </div>
            <div class="tab-pane fade" id="step7">
              <div class="well"> 
              		<label>Question 7</label>
                 <p>Which of the following Batch Processing instance is NOT an example of ( D)BigData Batch Processing<p>
		        	<input class='q3_option' name='q7_option' onchange="radiocall('#step8')" type='radio' /> Processing 10 GB sales data every 6 hours<br>
		            <input class='q3_option' name='q7_option' onchange="radiocall('#step8')" type='radio' /> Processing flights sensor data<br>
		            <input class='q3_option' name='q7_option' type='radio' onchange="radiocall('#step8')" /> Web crawling app<br>
              </div>
               <a class="btn btn-success " href="#step6" data-toggle="tab" data-step="6">Back</a>
               <a class="nextButtonbtn btn btn-success " href="#step8" data-toggle="tab" data-step="8">Next</a>
              </div>

               <!-- <a class="btn btn-default next" href="#">Continue</a> -->
            
            <div class="tab-pane fade" id="step8">
              <div class="well"> 
              		<label>Question 8</label>
                  <p>Sliding window operations typically fall in the category (C ) of<p>
		        	<input class='q3_option' name='q8_option' onchange="radiocall('#step9')" type='radio'  /> OLTP Transactions<br>
		            <input class='q3_option' name='q8_option' type='radio' onchange="radiocall('#step9')"/> Big Data Batch Processing<br>
		            <input class='q3_option' name='q8_option' type='radio' onchange="radiocall('#step9')"/> Big Data Real Time Processing<br>
              </div>
               <a class="btn btn-success " href="#step7" data-toggle="tab" data-step="7">Back</a>
               <a class="nextButtonbtn btn btn-success " href="#step9" data-toggle="tab" data-step="9">Next</a>
               <!-- <a class="btn btn-default next" href="#">Continue</a> -->
            </div>
            <div class="tab-pane fade" id="step9">
              <div class="well"> 
              		<label>Question 9</label>
                  <p>Do you have a wokring knowledge of any relational database ?<p>
		        	<input class='q3_option' name='q9_option' type='radio' onchange="radiocall('#step10')" /> Yes<br>
		            <input class='q3_option' name='q9_option' type='radio' onchange="radiocall('#step10')"/> No<br>
              </div>
               <a class="btn btn-success " href="#step8" data-toggle="tab" data-step="8">Back</a>
               <a class="nextButtonbtn btn btn-success " href="#step10" data-toggle="tab" data-step="10">Next</a>
               <!-- <a class="btn btn-default next" href="#">Continue</a> -->
            </div>
            <div class="tab-pane fade" id="step10">
              <div class="well"> 
              		<label>Question 10</label>
                  <p>Which of the following are the core components of Hadoop? <p>
		        	<input class='q3_option' name='q10_option' type='radio' /> HDFS<br>
		            <input class='q3_option' name='q10_option' type='radio' /> Map Reduce<br>
		            <input class='q3_option' name='q10_option' type='radio' /> HBase<br>
              </div>
               <a class="btn btn-success " href="#step9" data-toggle="tab" data-step="9">Back</a>
               <!-- <a class="btn btn-success first" href="#">Start over</a> -->
            </div>
              <div class="tab-pane fade" id="stepSuccess">
              <div class="well"> 
                  <!-- <label>Thank you for Taking our Online Assessment.</label> -->
                 <h3>You are Eligible to take this Course. Please choose batch timing.</h3>
              </div>
              </div>
               <div class="tab-pane fade" style="padding-bottom: 40px;padding-top: 40px;" id="scheduler">
              <div class="well"> 
                <label>Batch's</label><br>
                 <input class='q3_option' name='batch' type='radio' value="Weekdays Batch( Monday to Friday )" onchange="radiocall('#scheduler1')" /> Weekdays Batch( Monday to Friday )<br>
                <input class='q3_option' name='batch' type='radio' value="Weekend Batch( Saturday and Sunday )"  onchange="radiocall('#scheduler2')"/> Weekend Batch( Saturday and Sunday )<br>
                <input class='q3_option' name='batch' type='radio' value="Both Weekdays and Weekend Batch"  onchange="radiocall('#scheduler3')"/> Both Weekdays and Weekend Batch<br>
                 <a style="display: none" class="nextButtonbtn btn btn-success " href="#scheduler" data-toggle="tab" data-step="13">Next</a>
              </div>
              </div>
               <div class="tab-pane fade" style="padding-bottom: 40px;padding-top: 40px;" id="scheduler1">
              <div class="well"> 
                 <label>Batch timing</label><br>
                 <input class='q3_option' name='batch_timing' type='radio' value="Morning 9 am to Noon 2 pm"  onchange="radiocall('#payment1')" />Morning 9 am to Noon 2 pm<br>
                <input class='q3_option' name='batch_timing' type='radio' value="Evening 6.30 to 9.30 pm" onchange="radiocall('#payment1')"/> Evening 6.30 to 9.30 pm<br>
                 <a style="display: none" class="nextButtonbtn btn btn-success " href="#scheduler1" data-toggle="tab" data-step="13">Next</a>
              </div>
                <a class="btn btn-success " href="#scheduler"  data-toggle="tab" data-step="9">Back</a>
              </div>
               <div class="tab-pane fade" style="padding-bottom: 40px;padding-top: 40px;" id="scheduler2">
              <div class="well"> 
                <label>Batch timing</label><br>
                 <input class='q3_option' name='batch_timing' value="Morning  9 am to Evening 6 pm"  type='radio' onchange="radiocall('#payment1')" />Morning  9 am to Evening 6 pm <br>
                 <a style="display: none" class="nextButtonbtn btn btn-success" href="#scheduler2" data-toggle="tab" data-step="13">Next</a>
              </div>
                 <a class="btn btn-success " href="#scheduler" data-toggle="tab" data-step="9">Back</a>
              </div>
               <div class="tab-pane fade" id="scheduler3">
                   <h3>Choose Batch And Timing</h3>
              <div class="row" style="padding-top: 10px;padding-bottom:10px;pading-left:10%;">                
                <div class="col-md-6">
                 <label> Weakdays</label><br>
                <input type="checkbox" name="monday"> Monday<br>
                <input type="checkbox" name="tuesday"> Tuesday<br>
                <input type="checkbox" name="wednesday"> Wednesday<br>
                <input type="checkbox" name="thursday"> Thursday<br>
                <input type="checkbox" name="friday"> Friday<br>    
                </div> 
                 <div class="col-md-6">
                 <label>Batch Timing</label><br>
                <input class='q3_option' name='batch_timing' type='radio'/> Morning 9 am to Noon 2 pm<br>
                <input class='q3_option' name='batch_timing' type='radio'/> Evening 6.30 to 9.30 pm<br>
                </div>            
              </div>
             
               <div class="row" style="padding-bottom:10px;pading-left:10px;"> 
                <div class="col-md-6">
                 <label>Weakdays</label><br>
               <p> Saturday and Sunday</p><br>     
                </div> 
                 <div class="col-md-6">
                 <label> Batch Timing</label><br>
               <p> Morning  9 am to Evening 6 pm </p> <br>    
                </div>            
              </div>
                  <div style="padding-top: 10px;padding-bottom:10px;">
                  <a style="display: none" class="nextButtonbtn btn btn-success " href="#scheduler3" data-toggle="tab" data-step="13">Next</a>
                 <a class="btn btn-success" href="#scheduler" data-toggle="tab" data-step="9">Back</a>
                 <a class="btn btn-success" href="#payment1" style="float:right;" data-toggle="tab" data-step="9">Submit</a>
                </div>
              </div>
               <div class="tab-pane fade" style="padding-bottom: 40px;padding-top: 40px;" id="payment1">
              <div class="well"> 
              <center>  <h4>Thank You For Choosing Schedule. Kindly Verify your registred mail address and Proceed to Payment.<br>By Click the link on your email Account.</h4>
                 <a style="display: none" class="nextButtonbtn btn btn-success " href="#payment1" data-toggle="tab" data-step="13">Next</a></center>
              </div>
             <a href="#" style="font-size: 15px;padding: 10px 10px;text-decoration: none; " id="close_model" data-dismiss="modal" class="btn btn-success">Ok</a>
             <a href="#" style="font-size: 15px;padding: 10px 10px;text-decoration: none;" 
             onclick="show_enrolldetail();" class="btn btn-success">Take Payment</a>
              </div>
           </div>
        </div>
        <div class="modal-footer">
          <!-- <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button> -->
      <button class="btn btn-primary" id="submit" href="#stepSuccess" data-toggle="tab" data-step="11" onclick="call_classtiming()" >submit</button>
          <button class="btn btn-primary" id="courseDetails" href="#scheduler" data-toggle="tab" data-step="12" onclick="scheduler()">Choose batch timing</button>
        </div>
      </div>`
    </div>
  </div>

<div class="modal fade" id="myModal" role="dialog" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog">
      <form name="contactform" method="post" id="contact_form" enctype="multipart/form-data"  >
      <div class="modal-content">
        <div class="modal-header" >
          <button type="button" class="close enroll_close" data-dismiss="modal">&times;</button>
          <div class="pull-left">
         		<h4 id="head1" class="head1"></h4>
         	    <h4 id="head2" class="head2 hide" style="margin-left: 230px;font-size: 20px;">Thank You!</h4>
              
       	 </div>
        </div>
        <div class="modal-body" >
        <div class="contentBlock" style="font-size: 15px;padding-left: 5%" id="enroll_form">
		<div class="wrapper800" >
	
		<div class="row" >
			<div class="col-xs-12 col-md-7">
			<div id="form-container">
			
        <div class="row">
        <div class="form-group col-md-3">
                <label class="control-label" for="salutation" style="font-size: 15px;">Salutation&nbsp;&nbsp;</label>
        <select class="form-control" name="salutation" id="salutation">
          <option value="Mr." selected="selected">Mr.</option>
          <option value="Mrs.">Mrs.</option>
          <option value="Ms.">Ms.</option>
          <option value="Dr.">Dr.</option>
        </select>
        </div>
      </div>
			<div class="row">
				<input type="hidden" id="course" class="head1" name="course">
				<!-- <input type="hidden" id="" class="head1 course" name="course" value="Assocciate-Big Data">
				<input type="hidden" id="" class="head2 course hide" name="course" value="Assocciate-Data Science"> -->
				<div class="form-group col-md-6">
					<label class="control-label">First Name<span style="color:red">*</span></label>
					<input type="text" class="form-control" name="first_name" id="first_name" size="40" placeholder="First Name">
				</div>
				<div class="form-group col-md-6">
					<label class="control-label">Last Name<span style="color:red">*</span></label>
					<input type="text" class="form-control" name="last_name" id="last_name" size="40" placeholder="Last Name" style=" background-position: 10px -54px;">
				</div>
			</div>
			<div class="row">
				<div class="form-group col-md-6">
					<label class="control-label">Telephone<span style="color:red">*</span></label>
					<input type="text" class="form-control" id="phone_num" name="phone_num" size="40" placeholder="Telephone" style=" background-position: 10px -88px;">
				</div>
				<div class="form-group col-md-6">
					<label class="control-label">Company</label>
					<input type="text" class="form-control" name="company" id="company" size="40" placeholder="Company" style=" background-position: 8px -184px;">
				</div>
			</div>
      <div class="row">
        <div class="form-group col-md-6">
         <label class="control-label">Email<span style="color:red">*</span></label>
          <input type="text" class="form-control" id="email" name="email" size="40" placeholder="Email" style=" background-position: 10px -121px;">
        </div>
      </div>
			
			</div>
			</div>
		</div>

			</div>
		</div>
			<div class="contentBlock hide" id="assessment" style="font-size: 15px;padding-left: 50px;">
			    <div class="wrapper800" >
			     <h3>You have registered Successfully. Proceed to Online <br>Assessment</h3>
           <p></p>
			    </div>
	   		</div>
        
        
        <div class="modal-footer">
          <a href="#" style="font-size: 17px;padding: 10px 10px;text-decoration: none; " data-dismiss="modal" class="enroll_close">Close</a>
             <button class="btn1 call_enroll" name="enroll" id="call_enroll">Enroll Now</button>
             <button class="btn1 hide call_Assessment" name="" id="call_Assessment" onclick="call_Assessment()">Online Assessment</button>
        </div>
      </div>
    </div>
    </form>
</div>
</div>

<!-- Path finder Model window starts -->
<style type="text/css">
.pathbase{
    border-top: 2px solid #3E8Acc;
    padding-top: 15px;
    
}
.pathfinderbtn{
  border: 2px solid #3E8Acc;
  background-color: white;
  border-radius: 15px;
  min-width: 150px;
  min-height: 40px;

}
.btn-success{
background-color: #3E8Acc;
border-color: #3E8Acc;
}
.btn-success:hover{
background-color: #3E8Acc;
border-color: #3E8Acc;
}
.btn-success:focus{
background-color: #3E8Acc!important;
border-color: #3E8Acc!important;
}
</style>
<div id="PathfinderModel" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header" style="background-color: #3E8Acc;">
        <button type="button" style="color: white;" onclick="load_pathmodel()" class="close" aria-hidden="true">×</button>
        <h2 style="padding-left: 40%;color: white;">Path Finder</h2>
      </div>
      <div class="modal-body"   id="myWizard">
        <div class="tab-content">
          <div class="tab-pane fade in active" style="padding-bottom: 40px;padding-top: 40px;" id="path1">
           <div class="">
              <center>
                <h3>Need help to choose a course? </h3>
                <p>Let us help you choose your path. Answer a few questions to find a learning path that suits you best.</p>
                <a class="pathfinderbtn btn" href="#main" data-toggle="tab" data-step="2">Let's go</a>
              </center>   
               <a class="btn btn-success " style="display: none;" href="#path1" data-toggle="tab" data-step="2">Back</a>         
            </div> 
          </div>
        <div class="tab-pane fade" style="padding-bottom: 40px;padding-top: 40px;" id="main">
         <div>          
            <h3>Undergraduate and post graduate in Math or Physics or Statistics or Commerce or Economics ?</h3>
            <div style="padding-left: 5%;">
              <input class='q3_option' name='q2_option' onchange="radiocall('#main2')" type='radio'/> Yes<br>
              <input class='q3_option' name='q2_option' onchange="radiocall('#no')" type='radio'/> No<br>
              <input class='q3_option' name='q2_option' onchange="radiocall('#complet_ass')" type='radio'/> Currently Doing the Course<br>
             <br>
            </div>
          </div>
        <!--  <div class="pathbase"> -->
            <a class="btn btn-success " style="display: none;" href="#main2" data-toggle="tab" data-step="2">Back</a>
            <a class="btn btn-success" style="display: none;" href="#no1" data-toggle="tab" data-step="3">Next</a>
             <a class="btn btn-success" style="display: none;" href="#complet_ass" data-toggle="tab" data-step="3">Next</a>
          <!-- </div>  --> 
               <!-- <a class="btn btn-default next" href="#">Continue</a> -->
          </div>
        <div class="tab-pane fade" style="padding-bottom: 40px;padding-top: 40px;" id="main2">
         <div>          
            <h3>Have knowledge in any programming language and at least one database ?</h3>
            <div style="padding-left: 5%;">
              <input class='q3_option' name='q2_option' onchange="radiocall('#main3')" type='radio'/> Yes<br>
              <input class='q3_option' name='q2_option' onchange="radiocall('#complet_ass')" type='radio'/> No <br>
              <input class='q3_option' name='q2_option' onchange="radiocall('#complet_ass')" type='radio'/> partially Known<br>
              <br>
            </div>
          </div>
          <div class="pathbase">
            <a class="btn btn-success " href="#main" data-toggle="tab" data-step="2">Back</a>
            <a class="btn btn-success " style="display: none;" href="#main3" data-toggle="tab" data-step="4">Next</a>
            <a class="btn btn-success " style="display: none;" href="#complet_ass" data-toggle="tab" data-step="4">Next</a>
          </div>  
               <!-- <a class="btn btn-default next" href="#">Continue</a> -->
          </div>
        <div class="tab-pane fade" style="padding-bottom: 40px;padding-top: 40px;" id="main3">
         <div>          
            <h3> Have minimum two years experience in any programming language and at least one database ?</h3>
            <div style="padding-left: 5%;">
              <input class='q3_option' name='q2_option' onchange="radiocall('#main4')" type='radio'/> Yes<br>
              <input class='q3_option' name='q2_option' onchange="radiocall('#complet_par')" type='radio'/> No<br>
              <input class='q3_option' name='q2_option' onchange="radiocall('#complet_par')" type='radio'/> Less then two years experience<br>
             <br>
            </div>
          </div>
          <div class="pathbase">
            <a class="btn btn-success " href="#main2" data-toggle="tab" data-step="2">Back</a>
            <a class="btn btn-success " style="display: none;" href="#main4" data-toggle="tab" data-step="4">Next</a>
            <a class="btn btn-success " style="display: none;" href="#complet_par" data-toggle="tab" data-step="4">Next</a>
          </div>  
               <!-- <a class="btn btn-default next" href="#">Continue</a> -->
          </div>
        <div class="tab-pane fade" style="padding-bottom: 40px;padding-top: 40px;" id="main4">
         <div>          
            <h3>Have hands-on experience in understanding building blocks of R, data preparation and transformations in R and building analytic data pipelines ?</h3>
            <div style="padding-left: 5%;">
              <input class='q3_option' name='q2_option' onchange="radiocall('#Complet_ad')" type='radio'/> Yes<br>
              <input class='q3_option' name='q2_option' onchange="radiocall('#Complet_sp')" type='radio'/> No<br>
              <input class='q3_option' name='q2_option' onchange="radiocall('#Complet_sp')" type='radio'/> partially Known<br>
             <br>
            </div>
          </div>
          <div class="pathbase">
            <a class="btn btn-success " href="#main3" data-toggle="tab" data-step="2">Back</a>
           <a class="btn btn-success " style="display: none;" href="#Complet_ad" data-toggle="tab" data-step="4">Next</a>
            <a class="btn btn-success " style="display: none;" href="#Complet_sp" data-toggle="tab" data-step="4">Next</a>
          </div>  
               <!-- <a class="btn btn-default next" href="#">Continue</a> -->
          </div>
              <div class="tab-pane fade" style="padding-bottom: 40px;padding-top: 40px;" id="no">
               <div>          
            <h3>Have a basics of Big Data management ?</h3>
            <div style="padding-left: 5%;">
              <input class='q3_option' name='q2_option' onchange="radiocall('#Complet_ad')" type='radio'/> Yes<br>
              <input class='q3_option' name='q2_option' onchange="radiocall('#main2')" type='radio'/> No<br>
              <input class='q3_option' name='q2_option' onchange="radiocall('#main2')" type='radio'/> partially Known<br>
             <br>
            </div>
          </div>
          <div class="pathbase">
            <a class="btn btn-success " href="#main" data-toggle="tab" data-step="2">Back</a>
           <a class="btn btn-success " style="display: none;" href="#no1" data-toggle="tab" data-step="4">Next</a>
            <a class="btn btn-success " style="display: none;" href="#no" data-toggle="tab" data-step="4">Next</a>
          </div> 
          <!-- <div class="pathbase">
            <a class="btn btn-success " href="#Associate1" data-toggle="tab" data-step="2">Back</a>
            <a class="btn btn-success " href="#path4" data-toggle="tab" data-step="4">Next</a>
          </div>  --> 
               <!-- <a class="btn btn-default next" href="#">Continue</a> -->
          </div>
        <div class="tab-pane fade" style="padding-bottom: 40px;padding-top: 40px;" id="no1">
           <div class="">
              <center>
                 <h3>Please Complete Atleat your Undergraduate in Math or Physics or Statistics or Commerce or Economics </h3>
               
                <a class="pathfinderbtn btn" onclick="load_pathmodel()" >Thank You</a>
              </center>            
              <!-- <a class="btn btn-default next" href="#step2">Continue</a> -->
            </div> 
          <!-- <div class="pathbase">
            <a class="btn btn-success " href="#Associate1" data-toggle="tab" data-step="2">Back</a>
            <a class="btn btn-success " href="#path4" data-toggle="tab" data-step="4">Next</a>
          </div>  --> 
               <!-- <a class="btn btn-default next" href="#">Continue</a> -->
          </div>
           <div class="tab-pane fade" style="padding-bottom: 40px;padding-top: 40px;" id="complet_ass">
         <div>          
            <center>
                <h3>Congratulations! </h3>
                <p>Let you can choose Associate Course is suits you best.</p>
                <a class="pathfinderbtn btn" href="<?php echo base_url('BigdatasiteController/associate');?>">Take me to Course</a>
              </center> 
            </div>
          </div>
          <!-- <div class="pathbase">
            <a class="btn btn-success " href="#Associate1" data-toggle="tab" data-step="2">Back</a>
            <a class="btn btn-success " href="#path4" data-toggle="tab" data-step="4">Next</a>
          </div>   -->
               <!-- <a class="btn btn-default next" href="#">Continue</a> -->
           
           <div class="tab-pane fade" style="padding-bottom: 40px;padding-top: 40px;" id="complet_par">
         <div>          
             <center>
                <h3> Congratulations! </h3>
                <p>Let you can choose Practitioner Course is suits you best.</p>
                <a class="pathfinderbtn btn" href="<?php echo base_url('BigdatasiteController/practitioner');?>">Take me to Course</a>
              </center> 
            </div>
          </div>
         <!--  <div class="pathbase">
            <a class="btn btn-success " href="#Associate1" data-toggle="tab" data-step="2">Back</a>
            <a class="btn btn-success " href="#path4" data-toggle="tab" data-step="4">Next</a>
          </div> -->  
               <!-- <a class="btn btn-default next" href="#">Continue</a> -->
         
          <div class="tab-pane fade" style="padding-bottom: 40px;padding-top: 40px;" id="Complet_sp">
         <div>          
          <center>
                <h3> Congratulations! </h3>
                <p>Let you can choose Specialist Course is suits you best.</p>
                <a class="pathfinderbtn btn" href="<?php echo base_url('BigdatasiteController/specialist');?>">Take me to Course</a>
              </center> 
            </div>
          </div>
         <!--  <div class="pathbase">
            <a class="btn btn-success " href="#Associate" data-toggle="tab" data-step="2">Back</a>
            <a class="btn btn-success " style="display: none;" href="#Associate21" data-toggle="tab" data-step="4">Next</a>
             <a class="btn btn-success " style="display: none;" href="#Associate22" data-toggle="tab" data-step="4">Next</a>
              <a class="btn btn-success " style="display: none;" href="#Associate23" data-toggle="tab" data-step="4">Next</a>
               <a class="btn btn-success " style="display: none;" href="#Associate24" data-toggle="tab" data-step="4">Next</a>
          </div>  --> 
               <!-- <a class="btn btn-default next" href="#">Continue</a> -->
 
        <div class="tab-pane fade" style="padding-bottom: 40px;padding-top: 40px;"  id="Complet_ad">
         <div>          
            <center>
                <h3> Congratulations! </h3>
                <p>Let you can choose Advanced Specialist Course is suits you best.</p>
                <a class="pathfinderbtn btn" href="<?php echo base_url('BigdatasiteController/advanced');?>/">Take me to Course</a>
              </center> 
            </div>
          </div>
        <!--   <div class="pathbase">
            <a class="btn btn-success " href="#Associate2" data-toggle="tab" data-step="2">Previous</a>
            <a class="btn btn-success " href="#path4" data-toggle="tab" data-step="4">Next</a>
          </div>  --> 
               <!-- <a class="btn btn-default next" href="#">Continue</a> -->
  
               

        </div>
        </div>
      </div>
    </div>
  </div>
<!-- Path finder Model window end -->
<script type="text/javascript">

 function scheduler()
 {
	$('#thankyou').hide();
	$('#courseDetails').hide();
	$('#batchSched').show();
 }

  function call_classtiming(){
   // alert();
    $('#submit').hide();
    $('#myModalLabel').hide();
    $('#courseDetails').show();
    $('#thankyou').show();
  }


function radiocall(id){ 
  //alert(id);
  // href=id
        $("[href='"+id+"']").trigger('click')
 }
 $(document).ready(function(){
    $('#batchSched').hide();
    $('#timeSched').hide();
    $('#courseDetails').hide();
      $('#thankyou').hide();

  $('.next').click(function(){  
    var nextId = $(this).parents('.tab-pane').next().attr("id");
    $('[href=#'+nextId+']').tab('show');
    return false;
    
  })
  
  $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
    
    //update progress
    var step = $(e.target).data('step');
    var percent = (parseInt(step) / 10) * 100;
    
    $('.progress-bar').css({width: percent + '%'});
    $('.progress-bar').text("Step " + step + " of 10");
    
    //e.relatedTarget // previous tab
    
  })
  
  $('.first').click(function(){
  
    $('#myWizard a:first').tab('show')
  
  })

});
</script>
<script src="<?php echo base_url();?>application/js/global.js"></script>
<script src="<?php echo base_url();?>application/js/jquery.bxslider.min.js"></script>
<link href="<?php echo base_url();?>application/css/bootstrapvalidator.min.css" rel="stylesheet">
<script src="<?php echo base_url();?>application/js/bootstrapValidator.min.js"></script>
<script>
	$( '#sliderBanner' ).bxSlider( {
		pager: true,
		controls: false,
		auto: true,
		autoHover: true,
		pause: 5000,
		autoDelay: 1000
	} );
</script>
<script type="text/javascript" src="<?php echo base_url();?>application/js/jquery-ui.tabs.min.js"></script>
		<script>
	$( function() {
    $( "#programTabs" ).tabs();
  } );
</script>
<script>
      function initMap() {
		  //4.726763, -74.032322
        var uluru = {lat: 4.726763, lng: -74.032322};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 4,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBj6znQhGxfN-cT7X8qmXjINqg7WN2qhUA&callback=initMap">
    </script>
<script src="https://use.typekit.net/hpg7tgp.js"></script>
<script>
	try {
		Typekit.load( {
			async: true
		} );
	} catch ( e ) {}
</script>
<script type="text/javascript">
  $('#call_Assessment').on('click', function(){
    $('#myModal').modal('hide'); 
    $("#AssModal").modal({backdrop: 'static', keyboard: false});
  })
  // function call_Assessment(){
  //   alert();
  //   $('#myModal').modal('hide'); 
  //   $("#AssModal").modal({backdrop: 'static', keyboard: false});

  // }


  $(document).ready(function() {
    $('#contact_form').bootstrapValidator({
        fields: {
            first_name: {
                validators: {
                        stringLength: {
                        min: 2,
                    },
                        notEmpty: {
                        message: 'Please Enter your first name'
                    }
                }
            },
             last_name: {
                validators: {
                     stringLength: {
                        min: 2,
                    },
                    notEmpty: {
                        message: 'Please Enter your last name'
                    }
                }
            },
            email: {
                validators: {
                    notEmpty: {
                        message: 'Please Enter your email address'
                    },
                    emailAddress: {
                        message: 'Please Enter a valid email address'
                    }
                }
            },
            phone_num: {
                validators: {
                    notEmpty: {
                        message: 'Please Enter your phone number'
                    },
                    /*phone: {
                        country: 'India',
                        message: 'Please supply a vaild phone number'
                    }*/
                }
            },
            
            }
        }).on('success.form.bv', function(e) {
            $('#success_message').slideDown({ opacity: "show" }, "slow"); // Do something ...
            $('#contact_form').data('bootstrapValidator').resetForm();
            // Prevent form submission
            e.preventDefault();
            // Get the form instance
            var $form = $(e.target);
            // Get the BootstrapValidator instance
            var bv = $form.data('bootstrapValidator');
            var salutation=$("#salutation").val();
            var first_name=$("#first_name").val();
            var last_name=$("#last_name").val();
            var email=$("#email").val();
            var company=$("#company").val();
            var phone_num=$("#phone_num").val();
            var course=$("#course").val();

            $.ajax({
               type:"post",
               url:"<?php echo base_url() ?>" + "BigdataAdminController/enrollvalue",
               data:{salutation:salutation,first_name:first_name,last_name:last_name,email:email,phone_num:phone_num,company:company,course:course},
               dataType:'json',
               success :function(response) 
               {
                console.log(response,'res111111111');
                $("#assessment").removeClass("hide");
                $("#enroll_form").addClass("hide");
                $("#head2").removeClass("hide");
                $("#head1").addClass("hide");
                $(".enroll_close").addClass("hide");
               $(".call_Assessment").removeClass("hide");
               $(".call_enroll").addClass("hide");
               
                localStorage.setItem("firstname", response.first_name);
                localStorage.setItem("lastname", response.last_name);
                localStorage.setItem("email", response.email);
                localStorage.setItem("phone", response.phone_num);
                localStorage.setItem("course", response.course);
                localStorage.setItem("company", response.company);
               
               
              }
           });
        })

        $('#close_model').click(function() {
          location.reload();
        });
  });
  // Use Ajax to submit form data
        // });
        // });
</script>



<script type="text/javascript">
 function load_pathmodel(){ 
  $("[href='#path1']").trigger('click')
  $("#PathfinderModel").modal("hide");
 
 }
	function enrollmodel()
	{
     alert();
		var ele=document.querySelector(".ui-tabs-active").childNodes[0].childNodes[0].data;
		console.log(ele,"ele");
		document.getElementById("head1").innerHTML= ele;
                document.getElementById("course").value= ele;
		$('#myModal').modal('show'); 

	}
	function call_enroll()
	{
               // alert();
		var ele1=document.querySelector(".titleService").childNodes[0].data;
		console.log(ele1);
		document.getElementById("head1").innerHTML= ele1;
                document.getElementById("course").value= ele1;
                
		$('#myModal').modal('show'); 

	}
/*	function call_Assessment(){
		//alert();
		$('#myModal').modal('hide'); 
		$("#AssModal").modal({backdrop: 'static', keyboard: false});

	}*/
     function PathfinderModel(){
    $("#PathfinderModel").modal({backdrop: 'static', keyboard: false});
}
/*	$(document).ready(function()

	{
    $('#close_model').click(function() {
    location.reload();
});*/
	/*	$("#call_enroll").click(function(){
			
			var salutation=$("#salutation").val();
		        var first_name=$("#first_name").val();
		     	var last_name=$("#last_name").val();
		        var email=$("#email").val();
		        var company=$("#company").val();
		        var phone_num=$("#phone_num").val();
		        var course=$("#course").val();
		        $.ajax({
		           type:"post",
		           url:"<?php echo base_url() ?>" + "BigdataAdminController/enrollvalue",
		           data:{salutation:salutation,first_name:first_name,last_name:last_name,email:email,phone_num:phone_num,company:company,course:course},
		           success :function(response) 
		           {
	   						
	   						$("#assessment").removeClass("hide");
	   						$("#enroll_form").addClass("hide");
	   						$("#head2").removeClass("hide");
	   						$("#head1").addClass("hide");
	   						$(".enroll_close").addClass("hide");
						         $(".call_Assessment").removeClass("hide");
							 $(".call_enroll").addClass("hide");
                            // $("#myModal").modal('hide');
                            // $("#AssModal").modal({backdrop: 'static', keyboard: false});
		                   // emailSend();
                               $("#first_name,#last_name,#email,#company,#phone_num,#course").val('');
              }
		       });
		    })
	});*/
  function show_enrolldetail(){
     
       var batch=$('input[name=batch]:checked').val();
       var batch_timing=$('input[name=batch_timing]:checked').val();
        
        localStorage.setItem("batch", batch);
        localStorage.setItem("batch_timing", batch_timing);

       // alert(batch);
        var url1="<?php echo base_url() ?>" + "BigdataAdminController/detailform/";
       $(location).attr('href', url1);
       //var batch_timing=$('input[name=batch_timing]:checked').val();
       //  $.ajax({
       //     type:"post",
       //     url:"<?php //echo base_url();?>" + "BigdataAdminController/detailform",
       //     data:{
       //      batch:batch,
       //      batch_timing:batch_timing,
       //      firstname:$('#first_name').val(),
       //      lastname:$('#last_name').val(),
       //      email:$('#email').val(),
       //      company:$("#company").val(),
       //      phone_num:$("#phone_num").val(),
       //      course:$("#course").val()
       //    },
       //     success :function(response) {
       //         console.log(response);
       //    }
       // });
  }


  
    function emailSend(){

      var first_name=$("#first_name").val();
       //alert(first_name);
       var last_name=$("#last_name").val();
       var email=$("#email").val();
       var company=$("#company").val();
       var phone_num=$("#phone_num").val();
       var course=$("#course").val();
       //alert(email);
       $.ajax({
           type:"post",
           url:"<?php echo base_url() ?>" + "BigdataAdminController/sendEmail",
           data:{first_name:first_name,last_name:last_name,email:email,phone_num:phone_num,company:company,course:course},
           success :function(response) {
           }
       });
     }
  

</script>
