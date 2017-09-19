<style type="text/css">
@media screen and (width: 320px){
h1{
  font-size: 30px;
}
}
.head1{
  font-size: 50px;
  text-align: center;.
  padding-top: 30px!important;
  color: #818386;

}
</style>
<div id="content" class="site-content">
 <div id="banner banner1" class="contact-banner" style="background: url('<?php echo base_url();?>application/images/contact/map1.png'); background-repeat:no-repeat; background-size:cover;height: 650px;padding-top: 77px;height: 384px;">
         
          <!-- row ends here--> 
           
                <h1 style="color:white!important;text-align: center;padding-top: 72px;">Let's build the future of corporate success,<br>to together.</h1>
                <p style="color:white!important;text-align:center;font-weight:400!important">Reach out through this form, vie email or an social media to start something wonderful.</p>
             </div>           
       </div> <!-- banner ends here-->  
       <div>
         <h1 class="head1"> Get in Touch</h1>
       </div>
       <div id="contact" class="bg-white" style="padding:15px 0 50px 0">
          <div class="row clearfix ">
              <div class="contact-info">
                 <div class="contact-info-content">
                   <span class="contact-info-head">PHONE & Email</span>
                   <span class="contact-info-text font-lato">
						<a>Tel. (+57) (1) 381-4966</a>
						<br />
					<!-- 	<a href="#">+xx xxxx-xxxx (Internet of Things)</a> -->
						<br />						  
						<a href="#">
						contact@bdih.com
						</a>
                   </span>                   
                 </div>
                 <div class="contact-info-content">
                   <span class="contact-info-head">ADDRESS</span>
                   <span class="contact-info-text font-lato">
                       BIG DATA INNOVATION HUB S.A.S.<br/>
                       Carrera 9 No. 94 A – 32<br/>
                       Edificio Bureau - # 502<br/>
                       Bogotá – Colombia<br/>
<!-- <strong>Corporate Office</strong><br />
No.70, 1st Cross<br />
New Thippasandra Main Road<br />
Indiranagar, Bangalore-560075<br />
Landmark: Next to Clumax Diagnostics <br /> -->
<br />
                   </span>                   
                 </div>
                 <div class="contact-info-content">
                   <span class="contact-info-head">social</span>
                   <div class="social-media">
                     <a href="#" target="_blank"><img src="<?php echo base_url();?>application/images/icon-facebook.png" alt="facebook"></a>
                    <a href="#" target="_blank"><img src="<?php echo base_url();?>application/images/icon-youtube.png" alt="youtube"></a>
                    <a href="#" target="_blank"><img src="<?php echo base_url();?>application/images/icon-linkedin.png" alt="linkedin"></a>
                    <a href="#" target="_blank"><img src="<?php echo base_url();?>application/images/icon-twitter.png" alt="twitter"></a>
                   </div>
                 </div>
               </div><!-- contact-address ends here-->
               <div class="contact-form-main">
                    <form class="contact-form jigsawforms" id="contact-form" action="<?php echo base_url('BigdatasiteController/add'); ?>" method="post" enctype="multipart/form-data">
                        <div class="alert"></div>
                        <div class="formcontainer">
                        <div class="clearfix common">
                           <div class="one-half field-main">
                              <label for="name"> name </label>
                              <input type="text" name="name" class="field" id="name" required>
                             </div><!-- one-half ends here-->
                           <div class="one-half field-main">
                             <label for="email">email</label>
                             <input type="email" name="email" id="email" class="field field-error" required>
                           </div><!-- one-half ends here--> 
                        </div><!-- clearfix ends here-->      
                        <div class="clearfix common">
                           <div class="one-half field-main">
                              <label> phone number </label>
                              <input type="text" class="field mobilenumber" name="mobile"  placeholder="xxxxxxxx"   required>
                             </div><!-- one-half ends here-->
                           <div class="one-half field-main">
                             <label for="subject">subject</label>
                             <input type="text" name="subject" class="field" id="subject" required>
                             
                           </div><!-- one-half ends here-->
                        </div><!-- clearfix ends here-->                        
                        <div class="field-main">
                          <label>Message</label>
                          <textarea class="field" name="message" placeholder="Please type your message here" required></textarea>
                        </div>
                        <div class="text-right">
                        
                        <input type="hidden" name="embed_url" value="#">
                        <input type="hidden" name="form" value="90">
                        <input type="hidden" name="form_name" value="page-contact">
                        <button class="send-button">send <img src="<?php echo base_url();?>application/images/send-arrow.png" alt="img"></button>
                        </div>
                        </div>
                     </form><!-- contact-form ends here-->
                 </div>
               
          </div><!-- row ends here-->
       </div><!-- contact-us-sec ends here-->  
   
	</div><!-- #content -->

	