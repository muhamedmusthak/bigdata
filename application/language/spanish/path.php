<div id="PathfinderModel" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header" style="background-color: #3E8Acc;">
        <button type="button" style="color: white;" onclick="load_pathmodel()" class="close" aria-hidden="true">×</button>
        <h2 style="padding-left: 40%;color: white;">Path Finder</h2>
      </div>
      <div class="modal-body">
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
                <a class="pathfinderbtn btn" href="<?php echo base_url('BigdatasiteController/associate');?>">Let's go</a>
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
                <a class="pathfinderbtn btn" href="<?php echo base_url('BigdatasiteController/practitioner');?>">Let's go</a>
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
        <!--   <div class="pathbase">
            <a class="btn btn-success " href="#Associate2" data-toggle="tab" data-step="2">Previous</a>
            <a class="btn btn-success " href="#path4" data-toggle="tab" data-step="4">Next</a>
          </div>  --> 
               <!-- <a class="btn btn-default next" href="#">Continue</a> -->
  
               

        </div>
        </div>
      </div>
    </div>
