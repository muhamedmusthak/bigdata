<style type="text/css">
  .img{
    z-index: -1;
    position: absolute;
    width: 89%
  }
  .inner-content{
    padding-left: 20px;
    
  }
  .inner-heading{
   /* border-bottom: 1px solid #e3e3e3;*/
    height: 107px;
    padding-top: 53px;
    text-align: center;
   /* padding-bottom: 10px;*/
  }
  .duration{
    color:white;
    text-align: center;
  }
  @media screen and (min-width: 360px) and (max-width: 800px){
   
    .inner-content{
    padding-left: 20px;
    padding-top: 20px;
    }
  .inner-heading{
      padding-top: 75px;
  }
  .img{
    z-index: -1;
    position: absolute;
    width: 89.5%
  }
  }
  @media screen and (min-width: 801px) and (max-width: 980px){
    .img{
      width: 91.5%;
    }
    .inner-content{
    padding-left: 20px;
    padding-top: 50px;
  }
  .inner-heading{
      padding-top: 110px;
  }
  }
  @media screen and (min-width: 981px) and (max-width: 1280px){
    .img{
      width: 88%;
    }
    .inner-content{
    padding-left: 20px;
   /* padding-top: 40px;*/
  }

  }
.fullform{
  padding-top: 150px;
  padding-bottom: 100px;
}
.inner-border{
  border-style: solid;
  border-width: 2px;
  border-color: #e6e6e6;
  border-radius: 8px;
}
.p1{
    color: white;
    font-size: 23px;
    line-height: 40px;
    padding-bottom: 19px;
    padding-top: 20px;
    text-align: center;
}
.enroll{
  border-radius: 15px;
  width: 120px;
  height:40px;
  background-color: white;
  border : 2px solid #226CCD;
  color:#226CCD;
  
}
.enroll:hover {
   background-color: #def7fe; 
}
</style>
<style>

.batch_timing {
    /*border-bottom: 1px solid blue;*/
    color: blue;
    padding-bottom: 5px;
}
.batch_timing {
    text-align: center;
}
.enroll-form
{
	
	/*border-top: 2px solid #6caee0;*/
	border-top: 1px solid #e6e6e6;
	border-left:1px solid #e6e6e6;
	border-right:1px solid #e6e6e6;
	border-bottom:1px solid #e6e6e6;
	background-color:  #ffffff;
	box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.1);
	box-sizing: border-box;
	border-radius:8px;
}
.enroll-in-form
{
	padding: 10px;
}
.form-control 
{
    background-color: #fff;
    background-image: none;
    border: 1px solid #ddd;
    /*border-radius: 4px;*/
    box-shadow: 0 1px 1px rgba(0, 0, 0, 0.075) inset;
    color: #555;
    display: block;
    font-size: 14px;
    height: 41px;
    line-height: 1.42857;
    padding: 6px 12px;
    transition: border-color 0.15s ease-in-out 0s, box-shadow 0.15s ease-in-out 0s;
    width: 100%;
    border-radius:0px;
}

</style>
<div id="content" class="site-content">
<div class="row fullform">
  <div class="col-md-3 col-sm-5 col-sm-5 col-md-offset-2" style="margin-bottom: 10px;">
    <div class="inner-border">

      <img class="img" src="<?php echo base_url();?>application/images/courses/coursesbg.png">
      <p class="p1">Big Data Specialization</p>
      <div class="duration">
          <h3 style="color:white" align="center">Duration</h3>
          <h2 style="padding-bottom:0px;color:white">
          120
          <span style="font-size: 14px;">Hours</span>
        </h2>
      </div>
      <div class="inner-heading">
        <h4 style="padding-top:10px!important;"><?php echo $result[0]['class_name']?></h4>
      </div>
      <div class="inner-content">
          <div style="padding-left: 0px!important;">
                <?php if(isset($result[0]['class_id']))
                  {
                    $daytiming=$this->BigdatasiteModel->getdaytiming($result[0]['class_id']);
                  }
                ?>
                  <h4 class="font-lato" style="font-size: 14px;"><?php echo $daytiming[0]['day']?></h4>
                    <p><i class="fa fa-clock-o" aria-hidden="true" style="color:#999999;padding-left: 10px;"></i>&nbsp <?php echo $daytiming[0]['start_time']?> to <?php echo $daytiming[0]['end_time']?></p> 

                     <?php if(isset($daytiming[1]['start_time'])) { ?>      
                    <h4 class="font-lato" style="font-size: 14px;"><?php echo $daytiming[1]['day']?></h4>                 
                     <p><i class="fa fa-clock-o" aria-hidden="true" style="color:#999999;padding-left: 10px;"></i>&nbsp <?php echo $daytiming[1]['start_time']?> to <?php echo $daytiming[1]['start_time']?> .</p>
                      <?php } ?>

                    <?php echo $result[0]['weeks']?>&nbsp;&nbsp;&nbsp; Weeks<p></p>
                    <p style="color:#226CCD;padding-bottom:10px;font-weight:600;">Cost &nbsp;: &nbsp;<?php echo $result[0]['class_fees']?></p>
          </div>       
      </div>
           
    </div>
  </div>
  <div class="enroll-form col-md-4 col-sm-5">
   	<div class="enroll-in-form">
   			<div class="batch_timing">
   				<?php 
		          $date=date('Y-m-d',strtotime($val2));
		          $check=$this->BigdatasiteModel->beforeDatecount($result[0]['class_id'],$date);
		          $count=count($check);
		          //sprint_r($count); exit();
		          if($count!=0)
		          {    
		          $check=$this->BigdatasiteModel->beforeDatecount($result[0]['class_id'],$date); 
		          $predate=$check[0]['start_date'];
		          ?>
		          <h4 class="font-lato" style="font-size: 16px;color: #226CCD; font-weight: 600;">All Seats Booked For Batch - <?php echo $predate=date('d-M-Y',strtotime($predate));?></h4>
		          <h4 class="font-lato" style="font-size: 16px;color:green;text-align:center;font-weight: 600;">Available Batch Starts On <br>
              <i class="fa fa-calendar" aria-hidden="true" style="color:green;"></i>&nbsp <span style="color:green">
<?php echo $val2=date('d-M-Y',strtotime($val2));?>
</span></h4>
		          <?php } else { 
		            ?>
		          <h4 class="font-lato" style="font-size: 16px;font-weight: 600;"><i class="fa fa-calendar" aria-hidden="true" style="color:#226CCD;"></i>&nbsp <span style="color:#226CCD">Batch Statrs on- <?php echo $val2;?> </span>
		          </h4><p></p>
		          <?php } ?>
   			</div>
   			<hr style="margin-bottom:0px;margin-top:0px;">
   			<form  method="post" id="enroll_form" data-toggle="validator">
           <!--  <div class="form-group">
              <label for="inputName" class="control-label">Name</label>
              <input type="text" class="form-control" id="inputName" placeholder="Cina Saffary" required>
            </div>
            <div class="form-group has-feedback">
              <label for="inputTwitter" class="control-label">Twitter</label>
              <div class="input-group">
                <span class="input-group-addon">@</span>
                <input type="text" pattern="^[_A-z0-9]{1,}$" maxlength="15" class="form-control" id="inputTwitter" placeholder="1000hz" required>
              </div>
              <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
              <div class="help-block with-errors">Hey look, this one has feedback icons!</div>
            </div>
            <div class="form-group">
              <label for="inputEmail" class="control-label">Email</label>
              <input type="email" class="form-control" id="inputEmail" placeholder="Email" data-error="Bruh, that email address is invalid" required>
              <div class="help-block with-errors"></div>
            </div>
            <div class="form-group">
              <label for="inputPassword" class="control-label">Password</label>
              <div class="form-inline row">
                <div class="form-group col-sm-6">
                  <input type="password" data-minlength="6" class="form-control" id="inputPassword" placeholder="Password" required>
                  <div class="help-block">Minimum of 6 characters</div>
                </div>
                <div class="form-group col-sm-6">
                  <input type="password" class="form-control" id="inputPasswordConfirm" data-match="#inputPassword" data-match-error="Whoops, these don't match" placeholder="Confirm" required>
                  <div class="help-block with-errors"></div>
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="radio">
                <label>
                  <input type="radio" name="underwear" required>
                  Boxers
                </label>
              </div>
              <div class="radio">
                <label>
                  <input type="radio" name="underwear" required>
                  Briefs
                </label>
              </div>
            </div>
            <div class="form-group">
              <div class="checkbox">
                <label>
                  <input type="checkbox" id="terms" data-error="Before you wreck yourself" required>
                  Check yourself
                </label>
                <div class="help-block with-errors"></div>
              </div>
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div> -->
				   <div style="padding-top:28px">
					    <div class="form-group" style="">
					     
					      <input type="text" class="form-control" name="first_name" id="first_name" placeholder=" Your First Name" required>
					    </div>
					    <div class="form-group" style="">
					   
					      <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Your Last Name" required >
					    </div>
					    <div class="form-group" style="">
					    
					      <input type="email" class="form-control" id="email" name="email" placeholder="Your Email" required >
					    </div>
					    <div class="form-group" style="">
					      
					      <input type="text" class="form-control" id="phone_num" name="phone_num" placeholder="Your Contact" required >
					      <input type="hidden" class="form-control" id="batch" name="batch" 
					      value="<?php echo $result[0]['class_id']?>" required>
					       <input type="hidden" class="form-control" id="date" name="date" 
					      value="<?php echo $val2=date('Y-m-d',strtotime($val2));?>" required>
					    </div>
					     <div class="form-group" style="text-align: center;">
					      <button type="button" class="enroll" id="email_reduce" onclick="call_enroll()">Submit</button>
					    </div>
				  </div>
			  </form>
		</div>
	</div>
</div>
</div>
</div>
