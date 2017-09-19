<?php 

           
            $count=count($result)-1;
            //print_r($result);
            //print_r($result[$count]['session_id']);
            if($result[$count]['session_id'] == 3)
            { ?>

                	<div class="well"> 
						<!-- <h3>Choose Batch And Timing</h3> -->
                        <div class="row" style="padding-top: 10px;padding-bottom:10px;pading-left:10%;">                
	             			<div class="col-md-6">
                              <label> Weekdays Batch</label><br>
                                <?php foreach($this->BigdatasiteModel->get_days() as $row) { ?>
                                  <input type="checkbox" name="type" value="<?php echo $row['day_time_id'];?>"> <?php echo $row['day'];?><br>
                                <?php } ?>
                            </div> 
                            <div class="col-md-6">
                                <label>Batch Timing</label><br>
                                <input class='q3_option' name='batch_timing' value="<?php echo $result[0]['session_id'];?>,first" type='radio'/> 
                                    <?php echo $result[0]['first_start_time'];?> to <?php echo $result[0]['first_end_time'];?><br>
                                <input class='q3_option' name='batch_timing' value="<?php echo $result[0]['session_id'];?>,second"  type='radio'/> 
                                    <?php echo $result[0]['second_start_time'];?> to 
                                <?php echo $result[0]['second_end_time'];?> <br>
                            </div>            
                        </div>
                        <div class="row" style="padding-bottom:10px;pading-left:10px;"> 
                            <div class="col-md-6">
                              <label>Weekend Batch</label><br>
                              <label> Saturday and Sunday </label><br>     
                            </div> 
                            <div class="col-md-6">
                              	<label> Batch Timing</label><br>
                              	<label class='q3_option' name='q10_option' value=""/> 
                              	<?php echo $result[0]['third_start_time'];?> to 
                              	<?php echo $result[0]['third_end_time'];?></label> <br>    
                            </div>            
                        </div>
                 	</div>
            <?php } 

            else { ?>
              <div class="well"> 

                       <label>Batch timing </label><br>

                      <input class='q3_option' name='batch_timing' type='radio' value="<?php echo $result[0]['session_id'];?>,first"/> 
                      <?php echo $result[0]['first_start_time'];?> to <?php echo $result[0]['first_end_time'];?> <br>

                      <?php if($result[0]['second_start_time']!='') 
                      { ?>

                      <input class='q3_option' name='batch_timing' type='radio' value="<?php echo $result[0]['session_id'];?>,second"/> 
                      <?php echo $result[0]['second_start_time'];?> to 
                      <?php echo $result[0]['second_end_time'];?> <br>

                      <?php } ?>

                      <?php if($result[0]['third_start_time']!='') 
                      { ?>
                      <input class='q3_option' name='batch_timing' type='radio' value="<?php echo $result[0]['session_id'];?>,second"/> <?php echo $result[0]['third_start_time'];?> to <?php echo $result[0]['third_end_time'];?>
                      
                       <a style="display: none" class="nextButtonbtn btn btn-success " href="#scheduler1" data-toggle="tab" data-step="14">Next</a>
                       <?php } ?>
                      </div>
             <?php } ?>
                  
                
                    <a class="btn btn-success" href="#scheduler"  data-toggle="tab" data-step="10">Back</a>
                    <a class="btn btn-success" onclick="insert_other_batch();">OK</a>
         <!--      </div> -->
    <!--      <script src="<?php echo base_url();?>application/js/main.js"></script> -->
              