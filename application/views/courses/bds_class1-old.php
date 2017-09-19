<style type="text/css">
  .img{
    z-index: -1;
    position: absolute;
    width: 89%
  }
  .inner-content{
    padding-left: 20px;
margin-bottom: 10px;
    
  }
  .inner-heading{
    border-bottom: 1px solid #e3e3e3;
    padding-top: 39px;
    text-align: center;
    padding-bottom: 10px;
  }
  .duration{
    color:white;
    text-align: center;
  }
  @media screen and (min-width: 360px) and (max-width: 800px){
   
    .inner-content{
    padding-left: 20px;
    }
  .inner-heading{
      padding-top: 86px;
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
  }
  .inner-heading{
      padding-top: 116px;
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
  border-color: lightgrey;
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
  border : 2px solid #01395c;
  
}
.enroll:hover {
   background-color: #def7fe; 
}
</style>
<div id="content" class="site-content">

    
<div class="row fullform">
  <div class="col-md-3 col-sm-5 col-sm-5 col-md-offset-2">
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
          <h4 class="font-lato" style="font-size: 14px;"><i class="fa fa-calendar" aria-hidden="true" style="color:#999999;"></i>&nbsp <span style="color:#37B09A;font-weight:600;">Batch Filled- <?php echo $predate=date('d-M-Y',strtotime($predate));?> </span></h4>
          <h4 class="font-lato" style="font-size: 16px;color:#37B09A;font-weight:600;text-align:center">Next Batch Starts On - <?php echo $val2;?></h4>
          <?php } else { 
            ?>
          <h4 class="font-lato" style="font-size: 14px;"><i class="fa fa-calendar" aria-hidden="true" style="color:#999999;"></i>&nbsp <span style="color:#37B09A">Batch Statrs on- <?php echo $val2;?> </span>
          </h4><p></p>
          <?php } ?>
        </div>
        
        
        <div class="inner-content">
            <div style="padding-left: 10px!important;">
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

                  <?php echo $result[0]['weeks']?>&nbsp;&nbsp;&nbsp; Weeks
                  <p style="color: #00BCDB;">Cost &nbsp;: &nbsp;<?php echo $result[0]['class_fees']?></p>
            </div>       
         </div>
         
     </div>
   </div>
   <form action="<?php echo base_url('BigdataAdminController/enrollvalue');?>" method="post">
   <div class="col-md-4 col-sm-5">
      <div class="form-group" style="padding-top: 5px;">
      <label>First Name:</label>
      <input type="text" class="form-control" name="first_name" id="first_name" placeholder="Enter First Name">
    </div>
    <div class="form-group" style="padding-top: 10px;">
      <label for="pwd">Last Name:</label>
      <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Enter Last_Name">
    </div>
     <div class="form-group" style="padding-top: 10px;">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
    </div>
    <div class="form-group" style="padding-top: 10px;">
      <label for="pwd">Contact:</label>
      <input type="text" class="form-control" id="contact" name="contact" placeholder="Enter Contact">
      <input type="hidden" class="form-control" id="batch" name="batch" 
      value="<?php echo $result[0]['class_id']?>" >
       <input type="hidden" class="form-control" id="date" name="date" 
      value="<?php echo $val2=date('Y-m-d',strtotime($val2));?>">
    </div>
     <div class="form-group" style="padding-top:40px;text-align: center;">
      <button type="submit" class="enroll">Submit</button>
    </div>
   

      </div>
      </form>
 
</div>
    
  
</div>
    
        
    
  

 



</div>
