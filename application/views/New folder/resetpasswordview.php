<style type="text/css">

h1.head3{
  color:white!important;
  text-align: center;
  padding-top: 70px;
  font-size: 40px!important; 
}
.reset_form{

  background-color: white;
  padding:30px 0px 30px 90px;
  border-radius:6px;
}

@media screen and (min-width: 320px) and (max-width: 990px) {
h1.head3{
  font-size: 23px!important;
  padding-top: 40px!important;
}
.reset_form{

  background-color: white;
  padding:14px!important;
  border-radius:6px;
  }
}

</style>
<div id="content" class="site-content">
  <div id="banner banner1" class="contact-banner" style="background: url('<?php echo base_url();?>application/images/thankyou/thankyou-banner.jpg'); background-repeat:no-repeat; background-size:cover;height: 650px;padding-top: 77px;height: 600px;">
      <!-- row ends here--> 
      
      <!-- <div class="popup-content" -->>
    <!-- <div class="popupbox-inner" style="padding-top:120px;padding-left:470px;"> -->
        <!-- <div class="login-sec">
            <div class="clearfix">
            <div class="sign-up-sec" style="float:none;">
                <div class="sign-up-sec-in" id="loginform"> -->
                 
                   <form id="login" method="post" class="form-horizontal" action="<?php echo base_url('BigdataAdminController/savenewpass');?>">
                        <div class="row">
                            <div class=" col-md-offset-3 col-md-6 col-sm-10 col-xs-12">
                              <h1 class="head3">Choose a new password</h1>
                              <div class="reset_form">
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <input type="hidden" class="form-control" name="id" id="" 
                                        value="<?php echo $id;?>" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-9">
                                        <input type="password" class="form-control" name="new_password" id="new_password" placeholder="New Password" />
                                    </div>
                                </div>
                                <div class="form-group">
                                   <div class="col-md-9">
                                        <input type="password" class="form-control" id="confirm_password"
                                        name="confirm_password" placeholder="Confirm password"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-4">
                                        <button id="reset" type="submit" class="btn btn-primary btn-block">RESET</button>
                                    </div>
                                </div>
                                 <!-- <div class="form-group">
                                    <div class="col-md-offset-3 col-md-3">
                                    <a id="show_forget" type="button" class="">Sign In?</a>
                                    </div>
                                </div> -->
                                <div class="error" style="color: red" id="error"></div> 
                                <!-- <?php $error=$this->session->flashdata('error');?>
                                <?php if($error) {?> 
                               <?php } ?> -->
                              </div>
                            </div>
                        </div>
                   </form>
               <!--  </div>
            </div>
            </div>
        </div> -->
  <!--   </div> -->
 <!-- </div> -->
  </div> <!-- banner ends here--> 
  
</div><!-- #content -->

    
    