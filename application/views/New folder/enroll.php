<!-- <div class="popup-content" -->>
    <div class="popupbox-inner" style="padding-top:120px;padding-left:470px;">
        <div class="login-sec">
            <div class="clearfix">
            <div class="sign-up-sec" style="float:none;">
                <div class="sign-up-sec-in" id="">
                    <span class="sign-in-sec-head" style="margin-bottom:0px!important">ENROLL YOUR DETAILS</span><BR>
                    <!-- <p style="padding-bottom:20px;">Please Login In to access your course materials and videos</p> -->
                   <form id="" method="post" class="form-horizontal" 
 action="<?php echo base_url('BigdataAdminController/enrollvalue');?>">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="first_name" id="first_name" 
                                        value="" placeholder="First Name" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="last_name" id="last_name" placeholder="Last Name" />
                                    </div>
                                </div>
                                <div class="form-group">
                                   <div class="col-md-9">
                                        <input type="text" class="form-control" name="email" id="" placeholder="Email Id" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-9">
                                        <button  type="submit" class="btn btn-primary btn-block">SUBMIT</button>
                                    </div>
                                </div>
                                 <!-- <div class="form-group">
                                    <div class="col-md-offset-3 col-md-9">
                                    <a id="show_forget" type="button" class="">Sign In?</a>
                                    </div>
                                </div> -->
                                <!-- <div class="error" style="color: red" id="error"></div> --> 
                                <!-- <?php $error=$this->session->flashdata('error');?>
                                <?php if($error) {?> 
                               <?php } ?> -->
                            </div>
                        </div>
                   </form>
                </div>
            </div>
            </div>
        </div>
    </div>
 <!-- </div> -->