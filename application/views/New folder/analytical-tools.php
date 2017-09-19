 <style>
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 100%;
      margin: auto;
      height: 300px;

  }
   .item {
    display: none;
    position: relative;
    .transition(.6s ease-in-out left);
}
  .hero-image-right{
    text-align: center;
  }
  .img{
  z-index: -1;
  position: absolute;
}


.course-button{
    background: #26acb5 none repeat scroll 0 0;
    border: 2px solid #26acb5;
    border-radius: 15px;
    color: #def7fe;
    cursor: pointer;
    display: inline-block;
    font-size: 16px;
    font-weight: 400;
    height: 100%;
    line-height: 45px;
    margin: 10px auto;
    max-height: 80px;
    max-width: 180px;
    outline-offset: -2px;
    text-align: center;
    transition: all 0.4s ease-in-out 0s;
    width: 100%;
}
 .card-content-new:before {
  content: "";
  background:#f9fafa !important;
  width: 100%;
  height: 50%;
  position: absolute;
  top: -16px;
  z-index: 1;
  -webkit-transform: skewY(-5deg);
  -moz-transform: skewY(-5deg);
  -ms-transform: skewY(-5deg);
  -o-transform: skewY(-5deg);
  transform: skewY(-5deg);
  -webkit-transition: all 0.4s ease;
  -moz-transition: all 0.4s ease;
  -o-transition: all 0.4s ease;
  -ms-transition: all 0.4s ease;
  transition: all 0.4s ease;
}
@media  screen and (width:360px){
  .bannerfont{
    font-size: 20px!important;
  }

} 

@media  screen and (min-width:1025px) and (max-width: 1280px){
  .tabs-list li .desktop-tab2{
   padding:0px 0px!important;
  }
  .tabs-list li .desktop-tab3{
    padding:12px 15px!important;
  }
}
@media  screen and (min-width:1281px) and (max-width: 2000px){
  .tabs-list li .desktop-tab2{
        padding:1px!important;
  }
  .tabs-list li .desktop-tab3{
    padding:12px 15px!important;
  }
}
.carousel-indicators{
  bottom: 5px!important;
 
}
}
.carousel-indicators{
  bottom: 5px!important;
 
}
.button-small {
  max-height: 40px;
  line-height: 40px;
}
.banner-button {
  color: #fff;
  font-size: 16px;
  font-weight: 400;
 /* text-transform: uppercase;*/
  margin: 5px 15px 15px 10px;
  min-width: 280px;
 /* max-height: 80px;*/
  height: 100%;
 /* line-height: 59px;*/
  width: 100%;
  text-align: center;
}
.button-orange {
  background:linear-gradient(to right, #26ACB5, #26ACB5);
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#fe761b', endColorstr='#ff9326', GradientType=1);
  position: relative;
  display: inline-block;
}
.button-orange:hover, .button-orange:active{
  background:linear-gradient(to right,#26ACB5,#26ACB5);
  color: #fff;
}

</style>
<div id="content" class="site-content">

     <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
          <li data-target="#myCarousel" data-slide-to="3"></li>
           <li data-target="#myCarousel" data-slide-to="4"></li>
       
         
        </ol>

    <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
          <div class="item active" style="padding-top: 70px;padding-bottom: 30px;" >
            <img class="img" src="<?php echo base_url();?>application/images/courses/courses1cc.png" alt="Chania" width="460" height="345" class="image-course">
            <div class="row">
          <div class="hero-section" style="width: 100%;">
              <div class="banner-content" style="">
                  
                  <div class="button-group" id="home-page-banner-button">
                    
                   
                  </div> <!-- button-group ends here-->
              </div> <!-- banner-content ends here-->
            <div class="hero-image-right">
               <!-- <img src="http://localhost/bigdata-demoslider/application/images/big-data.png" alt="Internet of Things" style="margin-right: 50px;max-width:81%" /> -->
               <h1 class="bannerfont" style="color:white!important;font-weight:400!important;font-size:39px;padding:30px!important;line-height: 1.4!important;">Learn from Global Big data and Data Science experts from US and India</h1>
               <div class="">
               <a href="<?php echo base_url('BigdatasiteController/bigdata_specialization/1');?>" class="skewed banner-button button-small button-orange"><span>Big Data Specialization</span></a>
               <!--   <a href="#pathfinder-steps" target="_blank" class="popup-with-form course-button skewed moved-button2">
                <span class="button-main-text button-blue">Path finder</span> -->
                <!-- <span class="button-main-arrow-image">
                  <img src="<?php echo base_url();?>application/images/long-arrow-iot.png" alt="arrow" class="image-icon">
                </span> -->
                </a>
              </div>
            </div>
          </div>
          
        </div>

          </div>
       
           <div class="item" style="padding-top: 70px;padding-bottom: 30px;">
            <img class="img" src="<?php echo base_url();?>application/images/courses/courses2cc.png" alt="Chania" width="460" height="345" class="image-course">
            <div class="row">
          <div class="hero-section" style="width: 100%;">
              <div class="banner-content" style="">
                  
                  <div class="button-group" id="home-page-banner-button">
                    
                   
                  </div> <!-- button-group ends here-->
              </div> <!-- banner-content ends here-->
            <div class="hero-image-right">
               <!-- <img src="http://localhost/bigdata-demoslider/application/images/big-data.png" alt="Internet of Things" style="margin-right: 50px;max-width:81%" /> -->
               <h1 class="bannerfont" style="color:white!important;font-weight:400!important;font-size:39px;padding:30px!important;line-height: 1.4!important;">Practical training with real world use<br> case scenarios</h1>
               <div class="">
        <a href="<?php echo base_url('BigdatasiteController/datascience_specialization/2');?>" class="skewed banner-button button-small button-orange"><span>Data Science Specialization</span></a>
                <!-- <span class="button-main-arrow-image">
                  <img src="<?php echo base_url();?>application/images/long-arrow-iot.png" alt="arrow" class="image-icon">
                </span> -->
                </a>
              </div>
            </div>
          </div>
          
        </div>

          </div>

           <div class="item" style="padding-top: 70px;padding-bottom: 30px;">
            <img class="img" src="<?php echo base_url();?>application/images/courses/courses3cc.png" alt="Chania" width="460" height="345" class="image-course">
            <div class="row">
          <div class="hero-section" style="width: 100%;">
              <div class="banner-content" style="">
                  
                  <div class="button-group" id="home-page-banner-button">
                    
                   
                  </div> <!-- button-group ends here-->
              </div> <!-- banner-content ends here-->
            <div class="hero-image-right">
               <!-- <img src="http://localhost/bigdata-demoslider/application/images/big-data.png" alt="Internet of Things" style="margin-right: 50px;max-width:81%" /> -->
               <h1 class="bannerfont" style="color:white!important;font-weight:400!important;font-size:39px;padding:30px!important;line-height: 1.4!important;">Practice and Work on cloud based <br> Hadoop Clusters</h1>
               <div class="">
                <a href="<?php echo base_url('BigdatasiteController/combo_course/3');?>" class="skewed banner-button button-small button-orange"><span>Big Data and Data Science with R</span></a>
                <!-- <span class="button-main-arrow-image">
                  <img src="<?php echo base_url();?>application/images/long-arrow-iot.png" alt="arrow" class="image-icon">
                </span> -->
                </a>
              </div>
            </div>
          </div>
          
        </div>

          </div>
               <div class="item" style="padding-top: 70px;padding-bottom: 30px;">
            <img class="img" src="<?php echo base_url();?>application/images/courses/courses4cc.png" alt="Chania" width="460" height="345" class="image-course">
            <div class="row">
          <div class="hero-section" style="width: 100%;">
              <div class="banner-content" style="">
                  
                  <div class="button-group" id="home-page-banner-button">
                    
                   
                  </div> <!-- button-group ends here-->
              </div> <!-- banner-content ends here-->
            <div class="hero-image-right">
               <!-- <img src="http://localhost/bigdata-demoslider/application/images/big-data.png" alt="Internet of Things" style="margin-right: 50px;max-width:81%" /> -->
               <h1 class="bannerfont" style="color:white!important;font-weight:400!important;font-size:39px;padding:30px!important;line-height: 1.4!important;">Gain access to on-going expertise <br> from scientists in US and India</h1>
               <div class="">
                 <a href="<?php echo base_url('BigdatasiteController/business_analyst/4');?>" class="skewed banner-button button-small button-orange"><span>Business Analyst</span></a>
                <!-- <span class="button-main-arrow-image">
                  <img src="<?php echo base_url();?>application/images/long-arrow-iot.png" alt="arrow" class="image-icon">
                </span> -->
                </a>
              </div>
            </div>
          </div>
          
        </div>


          </div>
               <div class="item" style="padding-top: 70px;padding-bottom: 30px;">
            <img class="img" src="<?php echo base_url();?>application/images/courses/courses5cc.png" alt="Chania" width="460" height="345" class="image-course">
            <div class="row">
          <div class="hero-section" style="width: 100%;">
              <div class="banner-content" style="">
                  
                  <div class="button-group" id="home-page-banner-button">
                    
                   
                  </div> <!-- button-group ends here-->
              </div> <!-- banner-content ends here-->
            <div class="hero-image-right">
               <!-- <img src="http://localhost/bigdata-demoslider/application/images/big-data.png" alt="Internet of Things" style="margin-right: 50px;max-width:81%" /> -->
               <h1 class="bannerfont" style="color:white!important;font-weight:400!important;font-size:39px;padding:30px!important;line-height: 1.4!important;">Be part of the global community of<br> Data Scientists</h1>
               <div class="">
                <a href="<?php echo base_url('BigdatasiteController/corporate_training/5');?>" class="skewed banner-button button-small button-orange"><span>Corporate Training</span></a>
                <!-- <span class="button-main-arrow-image">
                  <img src="<?php echo base_url();?>application/images/long-arrow-iot.png" alt="arrow" class="image-icon">
                </span> -->
                </a>
              </div>
            </div>
          </div>
          
        </div>

          </div>

       <!-- <div class="item">
            <img src="<?php echo base_url();?>application/images/courses/courses1cc.png" alt="Flower" width="460" height="345">


          </div> -->
        </div>

    <!-- Left and right controls -->
      <!--   <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a> -->
      </div> <!-- banner ends here-->
    <!-- banner ends here-->
     <div id="tabs">
        <div class="row">
           <ul class="tabs-list">
              <li class="tab-item tab-company">
              <a href="<?php echo base_url('BigdatasiteController/courses?#tabs')?>">Big Data Specialization</a>
              </li>
              <li class="tab-item tab-people">

    <a href="<?php echo base_url('BigdatasiteController/dataScience?#tabs')?>" 
    class="">Data Science Specialization</a>
              </li>
              <li class="tab-item tab-careers active">

          <a href="<?php echo base_url('BigdatasiteController/analyticalTools?#tabs')?>" class="desktop-tab3"> Big Data and Data Science with R</a>
              </li>
              <li class="tab-item tab-careers">
               <a href="<?php echo base_url('BigdatasiteController/certificationCourses?#tabs')?>">
             Business Analyst</a></li>
              <li class="tab-item tab-careers">
               <a href="<?php echo base_url('BigdatasiteController/corporate_courses?#tabs')?>">
              Corporate Training</a></li>
           </ul>
        </div>
    </div> 
    <div id="a_company" class="content-about-us">
      <div class="tab-content responsive" style="clear:both;">
  <div role="tabpanel" class="tab-pane " id="Array">
    <div id="courses-listing" class="bg-white">
      <div class="row row-fix" style="max-width:1200px!important">
        <div class="col-lg-12">
              <!-- <h3 id="advanced-courses">Analytical Tools</h3> -->
            </div>
            <div class="col-lg-12">
              <div id="course-listing">
                <div>
                  <ul class="common cards-main catalog-main categoryholder" id="course-landing-course-list-inner">
                  <style>
    .bg-grey1{background: #f9fafa;}
    .bg-grey .card-content {background: transparent; }
    .bg-grey .card-content:before {background: #f9fafa;}
</style>
    <li class="one-fourth card-items mix item-advanced" style="display: flex;">
    <a href="<?php echo base_url('BigdatasiteController/combo_course/3');?>" class="course-advanced item-4310 bg-grey1">
        <div class="card-image" style="padding-bottom: 0px;">
                    <div style="background: transparent url('<?php echo base_url()?>application/images/courses/Data-Science-with-R1-300x165.jpg') no-repeat scroll bottom 30px center / 100% 100%; height: 142px;" class="wp-review-thumbnail-wrapper"></div>
            <!--<img width="400" height="220" src="https://www.jigsawacademy.com/wp-content/uploads/2016/03/Apache-Spark1-01.jpg" class="item wp-post-image" alt="Apache-Spark1-01" />-->
            <span class="mask mask-dark"></span>
        </div>
        <div class="card-content-new">
            <div class="card-content-in-new">
                <h5 class="has-prereq">Big Data and Data Science with R</h5>                    
                <!-- <span class="prerequisite" data-toggle="tooltip" data-placement="top" title="Has prerequisites">
                     <img src="./images/check-icon.png">
                 </span> -->
                 <p></p>
                 <h6 style="height:20px;color:">Job Profile</h6>
              <p> Hadoop developer , Hadoop Programmer , Data Analyst , Big Data Engineer, Data Science engineer, Business Analyst.</p>

                <div class="card-date" style="padding-right: 15px;">
                       <!--  <span style="padding-right: 20px;">
                          <i class="fa fa-clock-o" aria-hidden="true" style="color:#999999;"></i>
                          <strong>x </strong>  weeks                    </span> -->
                    <i class="fa fa-calendar" aria-hidden="true" style="color:#999999;"></i>
                    <span><strong> 260 </strong> hours</span>                </div>
                        <div style="margin: 0px 45px 0px 25px;">
             <div class="moved-button skewed" style="max-height:50px;-moz-transform:skew(-12deg)">
              <div class="actual-price" style="text-align:center;"><span class="font-lato" style="font-size:20px;"><b>Register</b></span></div>            </div>
          </div>
        </div>
    </div>
</a>
</li>

</ul>
</div>
  </div>
    </div>
    </div>
  </div>
</div>
</div>                
        </div>
</div><!-- #content -->
