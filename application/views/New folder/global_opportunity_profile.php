<style>
#banner-why.aboutus-banner {
    padding: 130px 0 30px;
}
</style>

<div id="content" class="site-content">
<div id="banner" class="aboutus-banner" style="background-color:  #52aad3; background-repeat:no-repeat; background-size:cover;">
    <div class="row clearfix banner-common">
       <div class="banner-content banner-content-center">
         <h1>Global opportunity Profile</h1>
          <p>Your professional journey begins with us. With the help of our extensive set of tools,
										networks and industry experts, we give you the power and
										knowledge to become a competitive and desirable employee for corporations across the globe.</p>
       </div> <!-- banner-content ends here-->
   </div> <!-- row ends here-->          
</div> <!-- banner ends here-->
<!-- banner ends here-->

<div id="tabs">
    <div class="row">
       <ul class="tabs-list">
          <li class="tab-item tab-company">
          <a href="<?php echo base_url('BigdatasiteController/about?#tabs')?>">
          What is BDIHub</a></li>
          <li class="tab-item tab-people active">
          <a href="<?php echo base_url('BigdatasiteController/global_opportunity_profile?#tabs')?>" >
          Global Opportunity Profile</a>
          </li>
          <li class="tab-item tab-careers ">
          <a href="<?php echo base_url('BigdatasiteController/management_team?#tabs')?>">Who we are</a></li>
       </ul>
    </div>
</div> 
<div id="a_carees" class="">
    <div class="aboutus-career-sec bg-white">
 <div class="row">
<div class="title">
                <h3 style="font-size:24px;">Global companies that power BDIH</h3>
                <span class="seprator"></span>
            </div>
</div>
        <div class="row">
            <div class="title">
                <h3 style="font-size:20px;">DSYDE Analytics LLC-Based in Dallas, Texas</h3>
                <span class="seprator"></span>
            </div>
            <div class="clearfix">
                <div class="aboutus-career-content">
                    <p style="text-align:justify;">It all started when three data scientists came together and decided to solve the problems faced by company’s day in and day out in making right business decision. With all the multiple years of industry experience in handling large data, they decided to come up with a solution which can facilitate individuals and organizations to make faster and on the fly better business decisions. Later they joined hands with three other business men who were also thinking in the same line, and then came up with a BI and analytical tool called DSYDE. Today DSYDE is an year old and in the process of adding customers use this powerful tool.</p>
                    <p>Click here for <a href="http://www.dsyde.ai" target="_blank">DSYDE</a></p>
			
                    <h3 style="font-size:20px;">Flatworld Solutions Inc.- Based in Princeton, NJ</h3>
                    <span class="seprator"></span>
					<p style="text-align:justify;"> Flatworld Solutions (FWS) is a global corporation offering solutions in IT, Business Consulting and Outsourcing Services. Founded in 2002 and incorporated in 2006 with the single-minded purpose of using technology to equip and enable businesses build efficiency, negate global distances, save time and increase bottom lines worldwide, Flatworld has earned it stripes with a decade of satisfying experiences. Over 9000 customers and millions of dollars in increased client revenue, over 2000 efficient and enabled employees with a solution centric leadership all tell the story - A story of expanding possibilities.</p>
<p>Click here for <a href="http://www.flatworldsolutions.com" target="_blank">Flatworld Solutions</a></p>
			 <h3 style="font-size:20px;">Quadratyx Ltd.-Based in Bangalore, India</h3>																	
                </div>
																
                <!-- aboutus-career-content ends here-->
                <div class="aboutus-career-img">
                    <img src="<?php echo base_url();?>application/images/about/bigdata.jpg" alt="img">
																</div>
                <!-- aboutus-career-img ends here-->
            </div>
        </div>
        <!-- row ends here-->
    </div>
    <!-- boutus-career-sec ends here-->
      
    
    
</div>
<div id="popupform-applyjob" class="popupbox-main  mfp-hide white-popup-block privacy">
    <div class="popup-content">
        <div class="popupbox-inner">
            <div class="popup-step-container">
                <h3>JOB APPLICATION</h3>
                <div class="information-form-account application-form">
                    <form class="contact-form jigsawforms" id="applyjob" method="post" enctype="multipart/form-data">
                        <div class="alert"></div>
                         <div class="formcontainer">
                        <div class="clearfix common">
                            <div class="one-half field-main">
                                <label for="first_name">First Name</label>
                                <input type="text" class="field" name="first_name" id="first_name" placeholder="Carl" value="" required>
                            </div>
                            <!-- one-half ends here-->
                            <div class="one-half field-main">
                                <label for="last_name">Last Name</label>
                                <input type="text" class="field" name="last_name"  id="last_name" placeholder="Sutton" required>
                            </div>
                            <!-- one-half ends here-->
                        </div>
                        <div class="field-main">
                           <label for="position_field">Position Applied for</label>
                           <input type="text" class="field" name="position"  id="position_field" placeholder="Front end developer" required>
                        </div>
                       <div class="clearfix common">
                            <div class="one-half field-main">
                                <label for="location">Current Location</label>
                                <input type="text" class="field" name="location" id="location" placeholder="Banglore" required>
                            </div>
                            <!-- one-half ends here-->
                            <div class="one-half field-main">
                                <label for="qualification">Academic Qualification</label>
                                <select name='cat' id='qualification' class='field' >
	<option class="level-0" value="B Tech">B Tech</option>
	<option class="level-0" value="BSc">BSc</option>
	<option class="level-0" value="MCA">MCA</option>
	<option class="level-0" value="BA">BA</option>
	<option class="level-0" value="Bcom">Bcom</option>
	<option class="level-0" value="Other">Other</option>
</select>

                            </div>
                            <!-- one-half ends here-->
                        </div>
                        <div class="clearfix common">
                             <div class="one-half field-main">
                                 <label for="company">Company Last Worked</label>
                                 <input type="text" class="field" name="company" id="company" placeholder="Google" required>
                             </div>
                             <!-- one-half ends here-->
                             <div class="one-half field-main">
                                 <label for="experience">Years of experience</label>
                                 <input type="text" name="experience" class="field digitsonly" id="experience" data-rule-maxlength="4" data-rule-digits="true" placeholder="2" required>
                             </div>
                        </div>
                        <!-- one-half ends here-->
                        <div class="clearfix common">
                             <!-- one-half ends here-->
                             <div class="one-half field-main">
                                  <div class="uploaded-box">
                                    <div class="uploadsidebos hide">
                                        <span><img src="https://www.jigsawacademy.com/wp-content/themes/jigsaw/images/file-sign.jpg"></span>
                                        <span class="file-name-application-form">
                                            <span class="doctitle"></span>
                                            <span class="file-size-application-form font-lato"></span>
                                        </span>
                                    </div>

                                    <input type="file" id="fileuploadresume" name="resume" data-rule-extension= "pdf|doc|docx" data-rule-filesize="2048000"  data-msg-extension="Please upload .pdf, .doc, .docx file" required>
                                    <input type="hidden" name="embed_url" value="https://www.jigsawacademy.com/opening/faculty-big-data-hadoop/">
                                    <input type="hidden" name="form" value="139">
                                    <input type="hidden" name="form_name" value="applyjob">
                                    <input type="hidden" name="date" value="2017-03-01 19:33:22">
                                    <span class="input-over">
                                        <img src="https://www.jigsawacademy.com/wp-content/themes/jigsaw/images/icon-upload.png">UPLOAD RESUME
                                    </span>

                                </div>
                                <p>Accepted file formats : .pdf, .doc, .docx</p>
                             </div>
                        </div>
                        <!-- one-half ends here-->
                         <div class="text-right">
                            <input type="hidden" name="form" value="91">
                            <input type="hidden" name="embed_url" value="https://www.jigsawacademy.com/opening/faculty-big-data-hadoop/">
                             <input type="hidden" name="action" value="jigsawforms">
                            <button class="send-button">Apply<img alt="img" src="https://www.jigsawacademy.com/wp-content/themes/jigsaw/images/send-arrow.png"></button>
                        </div>
                        </div>
                    </form>
                    <!-- contact-form ends here-->
                </div>
            </div>
            <!--step-container ends here-->
        </div>
        <!-- popupbox-inner here-->
    </div>
</div>
	</div><!-- #content -->
