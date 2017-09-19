<?php  
		  $total=count($res);
		  ?>
		  <input type="hidden" name="count" id="count"  value="<?php echo $total ?>"><?php
		  for ($i=1; $i<=$total; $i++) { ?>

                <input  class="question<?php echo $i; ?>" type="hidden"  name="quesId<?php echo $i; ?>" value="<?php echo $res[$i-1]['id']; ?>">
             <div class="tab-pane fade in <?php if($i == 1){ echo 'active';}?>" id="step<?php echo $i; ?>">
               
              <div> 
               
                  <label>Question <?php echo $i; ?> </label>
                  <br>
                 <p><?php echo $res[$i-1]['question']; ?></p>
                 <input class='option_a'  name='q<?php echo $i; ?>_option' id="optiona<?php echo $i; ?>" <?php if($i!=$total){ ?> onchange="radiocall('step<?php echo $i+1; ?>', $(this))" <?php } ?>  type='radio' value="option_a"/> <label for="optiona<?php echo $i; ?>"> <?php echo $res[$i-1]['option_a']; ?></label><br>
                 <input class='option_a' name='q<?php echo $i; ?>_option' id="optionb<?php echo $i; ?>" <?php if($i!=$total){ ?>onchange="radiocall('step<?php echo $i+1; ?>', $(this))"<?php } ?>  type='radio' value="option_b"/> <label for="optionb<?php echo $i; ?>"> <?php echo $res[$i-1]['option_b']; ?></label><br>
                 <input class='option_c' name='q<?php echo $i; ?>_option' id="optionc<?php echo $i; ?>" value="option_c"  <?php if($i!=$total){ ?>onchange="radiocall('step<?php echo $i+1; ?>', $(this))"<?php } ?>  type='radio'/> <label for="optionc<?php echo $i; ?>"> <?php echo $res[$i-1]['option_c']; ?></label><br>
                 <input class='option_a' value="option_d" name='q<?php echo $i; ?>_option' id="optiond<?php echo $i; ?>" <?php if($i!=$total){ ?>onchange="radiocall('step<?php echo $i+1; ?>', $(this))"<?php } ?>  type='radio'/> <label for="optiond<?php echo $i; ?>"> <?php echo $res[$i-1]['option_d']; ?></label><br>
                
              </div>
              <div class="pathbase">
               <a class="nextButtonbtn btn btn-success" id="nextBtn" style="display: <?php if($i == 1){ echo 'none'; } ?>; " href="#step<?php echo $i-1; ?>" data-toggle="tab" data-step="2">Back</a>
              <a class="nextButtonbtn btn btn-success disabled" style="display: <?php if($i == $total){ echo 'none'; } ?>;" id="nextBtn" href="#step<?php echo $i+1; ?>" data-toggle="tab" data-step="<?php echo $i+1; ?>">Next</a>
               
              <!-- <a class="nextButtonbtn btn btn-success " id="nextBtn" style="visibility: <?php if($i == $total){ echo 'hidden'; } ?>; float:right" href="#step<?php echo $i+1; ?>" data-toggle="tab" data-step="<?php echo $i+1; ?>">Next</a>  -->
              <!-- <a class="nextButtonbtn btn btn-success disabled" id="nextBtn" href="#step2" data-toggle="tab" data-step="2">Next</a> -->
              <!-- <a class="btn btn-default next" href="#step2">Continue</a> -->

              <!-- <button class="btn btn-primary " type="submit" style="float:right;display: <?php if($i != $total){ echo 'none'; } ?>"  id="assess_submit" href="#stepSuccess" name="assess_submit" data-toggle="tab" data-step="<?php echo $i+1; ?>" onclick="call_classtiming()" >submit</button> -->
              <button class="btn btn-primary" type="button" onclick="submitForm()" style="float:right;display: <?php if($i != $total){ echo 'none'; } ?>"  id="assess_submit" href="#stepSuccess" data-toggle="tab" data-step="11"   name="assess_submit"  >submit</button>
              
               </div>  
            </div>
     <!-- <script src="<?php echo base_url();?>application/js/main.js"></script> -->
        <script>
           $(document).ready(function(){

               $('button[name="assess_submit"]').prop('disabled', true);
                $('input[name="q<?php echo $total; ?>_option"]').on('change', function() {
             $('button[name="assess_submit"]').prop('disabled', false);
      });
           });

        </script>


    <?php } ?>

