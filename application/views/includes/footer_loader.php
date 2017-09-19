<div class="loader hidden" id="loader" >
    <!-- <img src="<?php echo base_url();?>application/images/bx_loader.gif" />   -->
</div>
<div class="footer_section">
	<div class="wrapper">
  <div class="row between-md ">
   <div class="col-xs-12 col-md-3"> <a href="/"><img src="<?php echo base_url();?>application/images/footer-logo.png" alt="Footer Logo"  id="footerLogo"></a>
    <div class="footerSnippt">
     <p><?php echo $this->lang->line('footer_left_content'); ?>
     </p>
    </div>
      </div>
   <div class="col-xs-12 col-md-8">
    <div class="box">
     <div class="row between-xs">
      <div class="col-xs-6 col-sm-3 col-md-4 lineBlock">
          <div class="smTitle">BDIH</div>
            <ul>
             <li><a href="<?php echo base_url('BigdatasiteController/index');?>">inicio</a></li>             
             <li><a href="<?php echo base_url('BigdatasiteController/why_us');?>">BDIHub?</a></li>
             <li><a href="<?php echo base_url('BigdatasiteController/contact_us');?>">contacto</a></li>
                  <li><a href="<?php echo base_url('BigdatasiteController/bidi');?>">bidi</a></li>
            </ul>
        </div>
         <div class="col-xs-5 col-sm-3 col-md-4 lineBlock">
          <div class="smTitle">Explore</div>
          <ul>
                <li><a href="<?php echo base_url('BigdatasiteController/training_on_demand/5');?>">Capacitación Corporativa</a></li>
                 <li><a href="<?php echo base_url('BigdatasiteController/business_solutions/6');?>">Soluciones para empresas</a></li>
          </ul>
         </div>
         <div class="col-xs-6 col-sm-3 col-md-4 lineBlock">
          <div class="smTitle">Learn</div>
          <ul>
           <li><a href="<?php echo base_url('BigdatasiteController/associate/1');?>">Associate</a></li>
           <li><a href="<?php echo base_url('BigdatasiteController/practitioner/2');?>">Practitioner</a></li>
           <li><a href="<?php echo base_url('BigdatasiteController/specialist/3');?>">Specialist</a></li>
                <li><a href="<?php echo base_url('BigdatasiteController/advanced/4');?>">Specialized Courses</a></li>
          </ul>
         </div>
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
 

<!-- enroll modal start-->
<div class="modal fade" id="myModal" role="dialog" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog">
      <form name="contactform" method="post" id="contact_form" enctype="multipart/form-data"  >
        <div class="modal-content">
          <div class="modal-header" style="background-color: #3E8Acc;">
            <button type="button" class="close enroll_close" data-dismiss="modal">&times;</button>
            <div class="pull-left">
              <h4 id="head1" class="head1" style="color:white"></h4>
              <h4 id="head2" class="head2 hide" style="color: white;margin-left: 177px;font-size: 20px;">Thank you for applying</h4>
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
                          <label class="control-label" for="salutation" style="font-size: 15px;">Saludo&nbsp;&nbsp;</label>
                          <select class="form-control" name="salutation" id="salutation">
                            <option value="Mr." selected="selected"><?php echo $this->lang->line('Mr'); ?>.</option>
                            <option value="Mrs."><?php echo $this->lang->line('Ms'); ?>.</option>
                            <option value="Ms."><?php echo $this->lang->line('Mrs'); ?>.</option>
                            <option value="Dr."><?php echo $this->lang->line('Dr'); ?>.</option>
                          </select>
                        </div>
                      </div>
                      <div class="row">
                        <div class="form-group col-md-6">
                          <label class="control-label">el primer nombre<span style="color:red">*</span></label>
                          <input type="hidden" class="form-control hide_index" name="" id="course_id" size="40" placeholder="First Name">
                          <input type="text" class="form-control" name="first_name" id="first_name" size="40" placeholder="el primer nombre">
                        </div>
                        <div class="form-group col-md-6">
                           <label class="control-label">el apellido<span style="color:red">*</span></label>
                            <input type="hidden" class="form-control hide_index" name="" id="course_id" size="40" placeholder="Last Name">
                             <input type="text" class="form-control" name="last_name" id="last_name" size="40" placeholder="el apellido">
                        </div>
                      </div>
                      <div class="row">
                        <div class="form-group col-md-6">
                          <label class="control-label">Correo electrónico<span style="color:red">*</span></label>
                          <input type="text" class="form-control" id="email" name="email" size="40" placeholder="Correo electrónico" style=" background-position: 10px -121px;">
                        </div>
                        <div class="form-group col-md-6">
                          <label class="control-label">Teléfono<span style="color:red">*</span></label>
                          <input type="text" class="form-control" id="contact" name="contact" size="40" placeholder="Teléfono" style=" background-position: 10px -88px;">
                        </div>
                      </div>
                      <div class="row">
                        <div class="form-group col-md-6">
                          <label class="control-label">Dirección<span style="color:red">*</span></label>
                          <input type="text" class="form-control" name="address" id="address" size="40" placeholder="Dirección" style=" background-position: 8px -184px;">
                        </div>
                      </div>
                      <div class="home_form">
                        <div class="row">
                          <label class="control-label">Calificación educativa<span style="color:red">*</span></label>
                        </div>
                        <div class="row">
                          <div class="form-group col-md-4">
                            <input type="radio" name="education_qua" value="ug"> Undergraduate </input>
                          </div>
                          <div class="form-group col-md-4">
                            <input type="radio" name="education_qua" value="pg"> Post-Graduate </input>
                          </div>
                        </div>
                        <div class="row">
                          <div class="form-group col-md-4">
                            <label class="control-label">Especialización </label>
                          </div>
                          <div class="form-group col-md-6">

                            <select  class="form-control  ug" name="" id="edu_qua">
                              <?php foreach ($result3 as $val) { ?>
                                <option value="<?php echo $val['id'];?>"> <?php echo $val['education_name'];?> </option>
                              <?php } ?>
                            </select>

                            <select  class="form-control  pg" name="" id="edu_qua">
                              <?php foreach ($result4 as $val) { ?>
                                <option value="<?php echo $val['id'];?>"> <?php echo $val['education_name'];?> </option>
                              <?php } ?>
                            </select>

                          </div>
                        </div>
                      <!-- lyi -->
                        <div class="row">
                          <div class="form-group col-md-6">
                            <label class="control-label">Experiencia laboral<span style="color:red">*</span></label>
                          </div>
                        </div>
                        <div class="row">
                          <div class="form-group col-md-12">
                            <input type="radio" name="work_exp" value="yes"> YES &nbsp;&nbsp;&nbsp;
                            <input type="radio" name="work_exp" value="no"> No
                          </div>
                        </div>
                        <div class="row">
                          <div class="form-group col-md-6 showonlyindex" style="padding-right: 15px;padding-left: 15px;">
                            <label class="control-label" for="salutation" style="font-size: 15px;">Curso Interesado&nbsp;&nbsp;<span style="color:red">*</span></label>
                                <select class="form-control hide_separate" name="course_id" id="course_id"> 
                                <?php foreach ($result1 as $rval) { ?>
                                  <option value="<?php echo $rval['course_id']; ?>"><?php echo $rval['course_name']; ?></option>  
                                  <?php               
                                    } 
                                  ?>                             
                                </select>
                          </div>
                        </div>
                         <div class="row">
                             <div class="form-group col-md-9 showonlyindex" style="padding-right: 15px;padding-left: 15px;">
                            <label class="control-label" for="salutation" style="font-size: 15px;">"Horario preferido para el curso&nbsp;&nbsp;<span style="color:red">*</span></label>
                                <select class="form-control" name="preferred_course" id="preferred_course"> 
                                
                                  <option value="Monday to Thusday [5:30 PM - 9:30 PM]">Monday to Thusday [5:30 PM - 9:30 PM]</option>  
                                  <option value="Friday evening 5:30pm-9:30pm+Sat 9:00am-5:00pm.">Friday evening 5:30pm-9:30pm+Sat 9:00am-5:00pm. </option>  
                                  <option value="Monday, Wednesday and Friday [9:00 AM - 6:00 PM]">Monday, Wednesday and Friday [9:00 AM - 6:00 PM]</option>  
                                  <option value="Tuesday, Thrusday and Friday [9:00 AM - 6:00 PM]">Tuesday, Thrusday and Friday [9:00 AM - 6:00 PM]</option>  
                                                           
                                </select>
                          </div>
                        </div>
                        <div class="row">
                          <div class="form-group col-md-6">
                            <label class="control-label">Listo para comenzar <span style="color:red">*</span></label>
                          </div>
                        </div>
                        <div class="row">
                          <div class="form-group col-md-12">
                            <input type="radio" name="ready" value="october"> October &nbsp;&nbsp;&nbsp;
                            <input type="radio" name="ready" value="november"> November &nbsp;&nbsp;&nbsp;
                            <input type="radio" name="ready" value="january"> January 2018
                          </div>
                        </div>
                        <div class="row">
                          <div class="form-group col-md-12">
                            <label class="control-label">Póngase en contacto conmigo con las fechas de inicio del curso: <span style="color:red">*</span></label>
                          </div>
                        </div>
                        <div class="row">
                          <div class="form-group col-md-12">
                            <input type="radio" value="yes" name="contact_me"> YES   &nbsp;&nbsp;&nbsp;
                            <input type="radio" value="no" name="contact_me"> NO &nbsp;&nbsp;&nbsp;
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
           <!--  <div class="contentBlock hide" id="assessment" style="font-size: 15px;padding-left: 50px;">
                <div class="" >
                 <p>Kindly check your email. Select a date and time to visit our office and to attend a One Hour Open House program. This program will give you more information about the training program, training schedule, payment options and answer all questions you may have. We look forward to enabling you to achieve your dreams in the world of Big Data and Data Science and propel your career.   </p>
                 <p></p>
                </div>
            </div> -->
            <div class="modal-footer">
              <a href="#" style="font-size: 17px;padding: 10px 10px;text-decoration: none; " data-dismiss="modal" class="enroll_close">Close</a>
                <button class="btn1 call_enroll"  name="enroll" id="call_enroll" type="submit">Enroll Now</button>
                <!-- <button type="button" onclick="payment_later();" style="font-size: 15px;padding: 10px 10px;text-decoration: none;" class="btn btn-success hide call_Assessment" data-dismiss="modal">I do payment later</button>
                <button style="font-size: 15px;padding: 10px 10px;text-decoration: none;" class="btn btn-success call_Assessment hide" type="button" onclick="proceedPayment()">Ok, proceed to payment</button> -->
            </div>
          </div>
        </div>
      </form>
    </div>
</div>
<!-- enroll modal end-->

<!-- result modal start-->
<div class="modal fade" id="resultModal" role="dialog" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog">
     <!--  <form action="<?php echo base_url('BigdataAdminController/detailform');?>"  enctype="multipart" method="post"> -->
        <div class="modal-content">
          <div class="modal-header" style="background-color: #3E8Acc;">
            <button type="button" class="close enroll_close" data-dismiss="modal">&times;</button>
            <div class="pull-left">
             <!--  <h4 id="head1" class="head1"></h4> -->
                <h4 id="head2" class="head2" style="color:white;margin-left: 177px;font-size: 20px;">Thank you for applying</h4>
                
           </div>
          </div>
          <div class="modal-body" >
              <!-- <input type="hidden" id="enroll_map_id" name="enroll_map_id">  -->

               <div class="contentBlock Home" id="assessment" style="font-size: 15px;padding-left: 50px;">
                <div class="" >
                <p>Select a date and time to visit our office and to attend a One Hour Open House program. This program will give you more information about the training program, training schedule, payment options and answer all questions you may have. We look forward to enabling you to achieve your dreams in the world of Big Data and Data Science and propel your career.   </p>
                <p></p>
              </div>
              </div>

               <!-- <input type="hidden" id="enroll_map_id" name="enroll_map_id">  -->
              <div class="contentBlock Others" id="assessment" style="font-size: 15px;padding-left: 50px;">
                <div class="" >
                <p>Please choose your preferred batch timings.</p>
              </div>


          </div>
          <div class="modal-footer">
            <a href="#" style="font-size: 17px;padding: 10px 10px;text-decoration: none; " data-dismiss="modal" class="enroll_close">Close</a>

               <button type="button" style="font-size: 15px;padding: 10px 10px;text-decoration: none;" class="btn btn-success call_Assessment" onclick="scheduler();" data-dismiss="modal">Choose Batch Timing</button>

          </div>
        </div>
       <!--  </form> -->
    </div>
</div>
</div>
<!-- result modal end-->

<!-- batch modal start-->
<div id="BatchModel" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header" style="background-color: #3E8Acc;">
        <h3 class="batch_heading" style="color:white">Choose your preferred schedule</h3>
        <h3 class="payment_heading hidden" style="color:white">Applying for a course</h3>
      </div>
      <div class="modal-body">
        <div class="tab-content"> 


          <div style="text-align:center" class="batch_start"> Open house schedule starts from 18th of September 2017</div>  


<div class="tab-pane fade in active HomeBatch" style="padding-bottom: 40px;padding-top: 40px;" id="scheduler">
              <div class="well"> 
                <label>Batch's</label><br>
                  <?php  foreach($this->BigdatasiteModel->get_session() as $row) 
                  { ?>  

                  <input class='q3_option' name='batch' type='radio' value="<?php echo $row['session_show'];?>" onchange="get_batchtiming(<?php echo $row['session_id']; ?>)"/>

                   <?php echo $row['session_show']; ?><br>
                  <?php 
                  } ?>

                   <a style="display: none" class="nextButtonbtn btn btn-success" href="#session1" data-toggle="tab" data-step="13">Next</a>
                </div>
            </div>
            <div class="tab-pane fade in active OtherBatch" style="padding-bottom: 40px;padding-top: 40px;" id="scheduler">
              <div class="well"> 
                <label>Batch's others</label><br>
                  <?php  foreach($this->BigdatasiteModel->get_session_others() as $row) 
                  { ?>  

                  <input class='q3_option' name='batch' type='radio' value="<?php echo $row['session_show'];?>" onchange="get_batchtiming_others(<?php echo $row['session_id']; ?>)"/>

                   <?php echo $row['session_show']; ?><br>
                  <?php } ?>

                   <a style="display: none" class="nextButtonbtn btn btn-success" href="#session1" data-toggle="tab" data-step="13">Next</a>
                </div>
            </div>



            <div class="tab-pane fade" style="padding-bottom: 40px;padding-top: 40px;" id="session1">

            </div>

            <div class="tab-pane fade" style="padding-bottom: 40px;padding-top: 40px;" id="payment1">
              <form name="detailform" id="detailform"   enctype="multipart" method="post"> 
                <div class="well"> 
                  <center>  
                   <!--  <h4>Please, Proceed to payment to confirm your seat now !!</h4> -->
                    <h4>Thank you for applying. We have sent on email to your registered account.</h4>
                    <input type="hidden" id="enroll_map_id" name="enroll_map_id"> 
                    <a style="display: none" class="nextButtonbtn btn btn-success " href="#payment1" data-toggle="tab" data-step="13">Next</a>
                  </center>
                </div>
                <!-- <a href="#later_pay" style="font-size: 15px;padding: 10px 10px;text-decoration: none;" class="btn btn-success" >I do payment later</a>
                <button style="font-size: 15px;padding: 10px 10px;text-decoration: none;" class="btn btn-success" type="submit" >Ok, proceed to payment</button> -->

               <center> <button style="font-size: 15px;padding: 10px 10px;text-decoration: none;" class="btn btn-success" type="submit">Close</button> </center>
              </form>
            </div>
               
               <div class="tab-pane fade" style="padding-bottom: 40px;padding-top: 40px;" id="payment2">
              <form action="<?php echo base_url('BigdataAdminController/detailform_trainingcourse');?>"  enctype="multipart" method="post"> 
                <div class="well"> 
                  <center>  
                    <h4>Please, Proceed to payment to confirm your seat now !!</h4>
                    <!-- <h4>Kindly check your email.</h4> -->
                    <input type="hidden" id="enroll_map_id_other" name="enroll_map_id"> 
                    <a style="display: none" class="nextButtonbtn btn btn-success " href="#payment2" data-toggle="tab" data-step="13">Next</a>
                  </center>
                </div>
                 <a style="font-size: 15px;padding: 10px 10px;text-decoration: none;" class="nextButtonbtn btn btn-success " href="#later_pay" data-toggle="tab" data-step="13">I do payment later</a>
                <!-- <a href="#later_pay" style="font-size: 15px;padding: 10px 10px;text-decoration: none;" class="btn btn-success" >I do payment later</a> -->
                <button style="font-size: 15px;padding: 10px 10px;text-decoration: none;" id="proceedPay" class="btn btn-success" type="submit" >Ok, proceed to payment</button>
                <!-- <button style="font-size: 15px;padding: 10px 10px;text-decoration: none;" class="btn btn-success" type="submit">Close</button> -->
              </form>
            </div>


            <div class="tab-pane fade" style="padding-bottom: 40px;padding-top: 40px;" id="later_pay">
              <div> 
                  <center>  <h4>An auto generated email with payment link will be send to your registered email. Please proceed to payment bt clicking the link</h4>
                  <a style="display:none" class="nextButtonbtn btn btn-success " href="#later_pay" data-toggle="tab" data-step="13">Next</a></center>
              </div>
              <center>
              <a href="#later_pay" style="font-size: 15px;padding: 10px 10px;text-decoration: none;" onclick="payment_later();" class="btn btn-success close_model">OK</a></center>
            </div>


        </div>
      </div>
      <div class="modal-footer">
        <!-- <button class="btn btn-primary" id="courseDetails" href="#scheduler" data-toggle="tab" data-step="12" onclick="scheduler()">Choose batch timing</button> -->
      </div>
    </div>
  </div>
</div>
<!-- batch modal end-->

<!-- training modal start-->
<div class="modal fade" id="TrainingModel" role="dialog" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog">
      <form name="contactform"  method="POST" id="" enctype="multipart/form-data"  >
      <div class="modal-content">
        <div class="modal-header" style="background-color: #3E8Acc;">
          <button type="button" class="close model_close" data-dismiss="modal">&times;</button>
          <div class="pull-left">
           <h4 id="head1" style="color:white" >CORPORATE EXPRESSION OF INTEREST FORM</h4>
              <h4 id="head2" class="head2 hide" style="color:white;margin-left: 230px;font-size: 20px;">Thank You!</h4>
         </div>
        </div>
        <div class="modal-body" >
        <div class="contentBlock" style="font-size: 15px;padding-left: 5%" id="enroll_form">
  <div class="wrapper800" >
 
  <div class="row" >
   <div class="col-xs-12 col-md-7">
   <div id="form-container">
   <div class="modalContent">
        <div class="row">
        <div class="form-group col-md-3">
        <label class="control-label" for="salutation" style="font-size: 15px;">Saludo&nbsp;&nbsp;</label>
        <select class="form-control" name="salutation" id="t_salutation">
          <option value="Mr." selected="selected">Mr.</option>
          <option value="Mrs.">Mrs.</option>
          <option value="Ms.">Ms.</option>
          <option value="Dr.">Dr.</option>
        </select>
        </div>
      </div>
   <div class="row">
    <input type="hidden" id="course" class="head1" name="course">
    <div class="form-group col-md-6">
     <label class="control-label">el primer nombre<span style="color:red">*</span></label>
          <input type="hidden" class="form-control" name="t_course_id" id="t_course_id" size="40" placeholder="el primer nombre">
     <input required type="text" class="form-control" name="first_name" id="t_first_name" size="40" placeholder="First Name">
    </div>
        <div class="form-group col-md-6">
         <label class="control-label">el apellido<span style="color:red">*</span></label>
          <input required type="text"  class="form-control" id="t_last_name" name="last_name" size="40" placeholder="el apellido" style=" background-position: 10px -121px;">
        </div>
   </div>
   <div class="row">   
        <div class="form-group col-md-12">
         <label class="control-label">Correo electrónico<span style="color:red">*</span></label>
          <input required type="text" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+.[a-z]{2,3}$"  class="form-control" id="t_email" name="email" size="40" placeholder="Correo electrónico" style=" background-position: 10px -121px;">
        </div>
   </div>
   <div class="row">
    <div class="form-group col-md-6">
     <label class="control-label">Teléfono<span style="color:red">*</span></label>
     <input required type="text" pattern="[0-9]{10,}" class="form-control" id="t_phone" name="phone" size="40" placeholder="Teléfono" style=" background-position: 10px -88px;">
    </div>
    <div class="form-group col-md-6">
     <label class="control-label">Dirección</label>
     <input type="text" class="form-control" name="address" id="t_address" size="40" placeholder="Dirección" style=" background-position: 8px -184px;">
    </div>
   </div>
      <div class="row">
        <div class="form-group col-md-6">
          <label class="control-label">nombre de empresa</label>
          <input type="text" class="form-control" name="company" id="t_company" size="40" placeholder="nombre de empresa" style=" background-position: 8px -184px;">
        </div>
        <div class="form-group col-md-6">
          <label class="control-label">Area de negocio</label>
          <input type="text" class="form-control" name="business" id="t_business" size="40" placeholder="Area de negocio" style=" background-position: 8px -184px;">
        </div>
      </div>
      <div class="row">
        <div class="form-group col-md-6">
          <label class="control-label">Departamento</label>
          <input type="text" class="form-control" name="department" id="t_department" size="40" placeholder="Departamento" style=" background-position: 8px -184px;">
        </div>
        <div class="form-group col-md-6">
          <label class="control-label">Designacion</label>
          <input type="text" class="form-control" name="designation" id="t_designation" size="40" placeholder="Designacion" style=" background-position: 8px -184px;">
        </div>
      </div>
      <div class="row">
        <div style="top: 20px;;" class="form-group row col-md-12">  
          <label class="control-label col-md-12">Interesado en</label>       
          <!-- <label class="control-label"> -->
            <p class="col-md-6"><input type="checkbox" name="interest" id="interest_one" value="Big Data and Data Science Business Solutions" > <span for="interest_one">Big Data and Data Science Business Solutions</span></p>
          <!-- </label> -->
          <!-- <label class="control-label"> -->
            <p class="col-md-6"><input type="checkbox" name="interest" id="interest_two" value="Customized Corporate Training Solutions" > <span for="interest_two">Customized Corporate Training Solutions</span></p>
          <!-- </label> -->
          <!-- <label class="control-label"> -->
            <p class="col-md-6"><input type="checkbox" name="interest" id="interest_three" value="BDIHub Training Courses" > <span for="interest_three">BDIHub Training Courses</span></p>
          <!-- </label> -->
        </div>      
      </div>
      <div class="row">
        <div style="top: 20px;;" class="form-group row col-md-12">  
          <label class="control-label col-md-12" >Póngase en contacto conmigo por</label>       
          <p class="col-md-6"><input type="checkbox" name="t_contact" value="email" id="contact_one" > Email</p>
          <p class="col-md-6"><input type="checkbox" name="t_contact" value="phone" id="contact_two"> Phone</p>
        </div>      
      </div>
   </div>
   <div class="thankyoumes">
        <h2 style="text-align: center;"> Thank you for your interest.<br> We will reach to you.</h2>
      </div>
   </div>
   </div>
  </div>
   </div>
  </div>       
        <div class="modal-footer">
          <a href="#" style="font-size: 17px;padding: 10px 10px;text-decoration: none; " data-dismiss="modal" class="model_close">Close</a>
             <button type="button" class="btn1 call_enroll training" onclick="insert_training()"  name="enroll" >Enroll Now</button>            
        </div>
      </div>
    </div>
    </form>
  </div>
</div>


<!-- training modal end-->



<!-- Path finder Model window starts -->
<style type="text/css">
.loader {
  display : block;
    position : fixed;
    z-index: 10000;
    background-image : url('<?php echo base_url();?>application/images/bx_loader.gif');
    background-color:#666;
    opacity : 0.4;
    background-repeat : no-repeat;
    background-position : center;
    left : 0;
    bottom : 0;
    right : 0;
    top : 0;
}
.pathbase{
    
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
#failmodalcontent{
  margin-top:30px;
  margin-bottom:30px
}
</style>
<div id="PathfinderModel" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header" style="background-color: #3E8Acc;">
        <button type="button" style="color: white;" onclick="load_pathmodel()" class="close" aria-hidden="true">×</button>
        <h2 style="padding-left: 40%;color: white;">Path Finder</h2>
      </div>
      <div class="modal-body">
        <div class="tab-content">
          <div class="tab-pane fade in active" style="padding-bottom: 40px;padding-top: 40px;" id="path1">
           <div class="">
              <center>
                <h3>Need help to choose a course? </h3>
                <p>Let us help you choose your path. Answer a few questions to find a learning path that suits you best.</p>
                <a class="pathfinderbtn btn" href="#main" data-toggle="tab" data-step="2">Let's go</a>
              </center>   
               <a class="btn btn-success " style="display: none;" href="#path1" dat`a-toggle="tab" data-step="2">Back</a>         
            </div> 
          </div>
        <div class="tab-pane fade" style="padding-bottom: 40px;padding-top: 40px;" id="main">
         <div>          
            <h3>Undergraduate and post graduate in Math or Physics or Statistics or Commerce or Economics ?</h3>
            <div style="padding-left: 5%;">
              <input class='q3_option' name='q2_option' onchange="radiocall('#main2')" type='radio'/> Yes<br>
              <input class='q3_option' name='q2_option' onchange="radiocall('#no1')" type='radio'/> No<br>
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
        <div class="tab-pane fade" style="padding-bottom: 40px;padding-top: 40px;" id="no1">
           <div class="">
              <center>
                 <h3>Please Complete Atleast your Undergraduate in Math or Physics or Statistics or Commerce or Economics </h3>
               
                <a class="pathfinderbtn btn" onclick="load_pathmodel()" >Thank You</a>
              </center>            
              <!-- <a class="btn btn-default next" href="#step2">Continue</a> -->
            </div> 
        
          </div>
           <div class="tab-pane fade" style="padding-bottom: 40px;padding-top: 40px;" id="complet_ass">
         <div>          
            <center>
                <h3>Congratulations! </h3>
                <p>Let you can choose Associate Course is suits you best.</p>
                <a class="pathfinderbtn btn" href="<?php echo base_url('BigdatasiteController/associate');?>">Let's go</a>
              </center> 
            </div>
          </div>
     
           
           <div class="tab-pane fade" style="padding-bottom: 40px;padding-top: 40px;" id="complet_par">
         <div>          
             <center>
                <h3> Congratulations! </h3>
                <p>Let you can choose Practitioner Course is suits you best.</p>
                <a class="pathfinderbtn btn" href="<?php echo base_url('BigdatasiteController/practitioner');?>">Let's go</a>
              </center> 
            </div>
          </div>
    
          <div class="tab-pane fade" style="padding-bottom: 40px;padding-top: 40px;" id="Complet_sp">
         <div>          
          <center>
                <h3> Congratulations! </h3>
                <p>Let you can choose Specialist Course is suits you best.</p>
                <a class="pathfinderbtn btn" href="<?php echo base_url('BigdatasiteController/specialist');?>">Let's go</a>
              </center> 
            </div>
          </div>
        
        <div class="tab-pane fade" style="padding-bottom: 40px;padding-top: 40px;"  id="Complet_ad">
         <div>          
            <center>
                <h3> Congratulations! </h3>
                <p>Let you can choose Advanced Specialist Course is suits you best.</p>
                <a class="pathfinderbtn btn" href="<?php echo base_url('BigdatasiteController/advanced');?>/">Let's go</a>
              </center> 
            </div>
          </div>
       
        </div>
        </div>
      </div>
    </div>
  </div>



<!-- <div id="failmodel" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header" style="background-color: #3E8Acc;">
        
           <h3 id="myModalLabel" style="color: white;">You Have not Qualified the Assessment</h3>
       
        </div>
        <div class="modal-body" id="myWizard">
           <center><h3 id="failmodalcontent">You have not qualified the Online Assessment for this Course.Please Take the Asscociate Course</h3></center>
        </div>
        <div class="modal-footer">
        

      <button type="button" class="btn btn-primary" data-dismiss="modal" onclick="emailSend()">Close</button>

         
      </div>
    </div>
  </div> -->

<!-- 
<form id="assessmentForm"  enctype="multipart" method="post">
  <div id="AssModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header" style="background-color: #3E8Acc;">
            <h3 id="myModalLabel" style="color: white;">Evaluating your capability to complete this course successfully</h3>
          </div>
          <div class="modal-body" id="myWizard">
            <input type="hidden" name="enrollid" id="enrollId" >
            <div class="tab-content"></div>
          </div>
          <div class="modal-footer"></div>
        </div>
      </div>
  </div>
</form> --> 




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
    var base_url = "<?php echo base_url();?>";
    //alert(base_url);
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
<script src="<?php echo base_url();?>application/js/main.js"></script>
<script>
	try {
		Typekit.load( {
			async: true
		} );
	} catch ( e ) {}
</script>
<script type="text/javascript">
  // $('#call_Assessment').on('click', function(){


  </script>
