  <style>
        /* jssor slider bullet navigator skin 05 css */
        /*
        .jssorb05 div           (normal)
        .jssorb05 div:hover     (normal mouseover)
        .jssorb05 .av           (active)
        .jssorb05 .av:hover     (active mouseover)
        .jssorb05 .dn           (mousedown)
        */
        .jssorb05 {
            position: absolute;
        }
        .jssorb05 div, .jssorb05 div:hover, .jssorb05 .av {
            position: absolute;
            /* size of bullet elment */
            width: 16px;
            height: 16px;
            background: url('img/b05.png') no-repeat;
            overflow: hidden;
            cursor: pointer;
        }
        .jssorb05 div { background-position: -7px -7px; }
        .jssorb05 div:hover, .jssorb05 .av:hover { background-position: -37px -7px; }
        .jssorb05 .av { background-position: -67px -7px; }
        .jssorb05 .dn, .jssorb05 .dn:hover { background-position: -97px -7px; }

        /* jssor slider arrow navigator skin 22 css */
        /*
        .jssora22l                  (normal)
        .jssora22r                  (normal)
        .jssora22l:hover            (normal mouseover)
        .jssora22r:hover            (normal mouseover)
        .jssora22l.jssora22ldn      (mousedown)
        .jssora22r.jssora22rdn      (mousedown)
        .jssora22l.jssora22lds      (disabled)
        .jssora22r.jssora22rds      (disabled)
        */
        .jssora22l, .jssora22r {
            display: block;
            position: absolute;
            /* size of arrow element */
            width: 40px;
            height: 58px;
            cursor: pointer;
            background: url('img/a22.png') center center no-repeat;
            overflow: hidden;
        }
        .jssora22l { background-position: -10px -31px; }
        .jssora22r { background-position: -70px -31px; }
        .jssora22l:hover { background-position: -130px -31px; }
        .jssora22r:hover { background-position: -190px -31px; }
        .jssora22l.jssora22ldn { background-position: -250px -31px; }
        .jssora22r.jssora22rdn { background-position: -310px -31px; }
        .jssora22l.jssora22lds { background-position: -10px -31px; opacity: .3; pointer-events: none; }
        .jssora22r.jssora22rds { background-position: -70px -31px; opacity: .3; pointer-events: none; }
    </style>
 <style>
.banner-sizer{
  position:relative;
  margin:0 auto;
  top:80px;
  left:0px;
  width:1300px;
  height:320px;
  overflow:hidden;
  visibility:hidden;
}
  .banner-inner{
    position:absolute;
    top:30px;
    left:30px;
    text-align:center;
    width:1200px;
    height:120px;
    z-index:0;
    font-size:50px;
    color:#ffffff;
    line-height:60px;
  }
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
    line-height: 35px;
    margin: 10px auto;
    max-height: 80px;
    max-width: 300px;
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
 <div id="jssor_1" class='banner-sizer'>
        <!-- Loading Screen -->
        <div data-u="loading" style="position:absolute;top:0px;left:0px;background:url('img/loading.gif') no-repeat 50% 50%;background-color:rgba(0, 0, 0, 0.7);"></div>
        <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:1300px;height:500px;overflow:hidden;">
            <div>
                <img data-u="image" src="<?php echo base_url();?>application/images/courses/courses1cc.png" />
                <div class="banner-inner">Learn from Global Big data and Data Science experts from US and India</div>
                <div style="position:absolute;top:210px;text-align:center;width:1300px;z-index:0;font-size:30px;color:#ffffff;"><a href='#' class='course-button'>Big Data Specialization</a></div>
            </div>
            <div>
                <img data-u="image" src="<?php echo base_url();?>application/images/courses/courses2cc.png" />
                <div class="banner-inner">Practical training with real world use case scenarios</div>
                <div style="position:absolute;top:210px;text-align:center;width:1300px;z-index:0;font-size:30px;color:#ffffff;"><a href='#' class='course-button'>Data Science Specialization</a></div>
            </div>
            <div>
                <img data-u="image" src="<?php echo base_url();?>application/images/courses/courses3cc.png" />
                <div class="banner-inner">Practice and Work on cloud based Hadoop Clusters</div>
                <div style="position:absolute;top:210px;text-align:center;width:1300px;z-index:0;font-size:30px;color:#ffffff;"><a href='#' class='course-button'>Big Data and Data Science with R</a></div>
            </div>
            <div>
                <img data-u="image" src="<?php echo base_url();?>application/images/courses/courses4cc.png" />
                <div class="banner-inner">Gain access to on-going expertise from scientists in US and India</div>
                <div style="position:absolute;top:210px;text-align:center;width:1300px;z-index:0;font-size:30px;color:#ffffff;"><a href='#' class='course-button'>Business Analyst</a></div>
            </div>
            <div>
                <img data-u="image" src="<?php echo base_url();?>application/images/courses/courses5cc.png" />
                <div class="banner-inner">Be part of the global community of Data Scientists</div>
                <div style="position:absolute;top:210px;text-align:center;width:1300px;z-index:0;font-size:30px;color:#ffffff;"><a href='#' class='course-button'>     

Corporate Training</a></div>
            </div>
           
           <!--  <a data-u="any" href="https://www.jssor.com/wordpress.html" style="display:none">wordpress gallery</a> -->
        </div>
        <!-- Bullet Navigator -->
      <!--   <div data-u="navigator" class="jssorb05" style="bottom:16px;right:16px;" data-autocenter="1">
            bullet navigator item prototype
            <div data-u="prototype" style="width:16px;height:16px;"></div>
        </div> -->
        <!-- Arrow Navigator -->
       <!--  <span data-u="arrowleft" class="jssora22l" style="top:0px;left:8px;width:40px;height:58px;" data-autocenter="2"></span>
        <span data-u="arrowright" class="jssora22r" style="top:0px;right:8px;width:40px;height:58px;" data-autocenter="2"></span> -->
    </div>
      </div> <!-- banner ends here-->
    <!-- banner ends here-->
     <div id="tabs" style='padding-top: 80px;'>
        <div class="row">
           <ul class="tabs-list">
              <li class="tab-item tab-company active">
              <a href="<?php echo base_url('BigdatasiteController/courses?#tabs')?>">Big Data Specialization</a>
              </li>
              <li class="tab-item tab-people">

    <a href="<?php echo base_url('BigdatasiteController/dataScience?#tabs')?>" 
    class="">Data Science Specialization</a>
              </li>
              <li class="tab-item tab-careers">

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
          <!-- <h3 id="intro-courses">Bigdata</h3> -->
        </div> 
        
      <!-- <div class="col-lg-12">
        <div id="course-listing">
          <div>
            <ul class="common cards-main catalog-main categoryholder" id="course-landing-course-list-inner">
      <style>
          .bg-grey1{background: #f9fafa;}
          .bg-grey .card-content {background: transparent; }
          .bg-grey .card-content:before {background: #f9fafa;}
      </style>
        <li class="one-fourth card-items mix item-advanced" style="display: flex;">
          <a href="#" class="course-beginner-courses item-486 bg-grey1">
              <div class="card-image">
                          <div style="background: transparent url('./images/Analytics-for-beginners-rev-300x165.jpg') no-repeat scroll bottom 30px center / 100% 100%; height: 142px;" class="wp-review-thumbnail-wrapper">
                          </div> -->
                  <!--<img width="400" height="222" src="https://www.jigsawacademy.com/wp-content/uploads/2015/10/Analytics-for-beginners-rev-400x222.jpg" class="item wp-post-image" alt="Analytics for beginners-rev" />-->
                 <!--  <span class="mask mask-dark"></span>
              </div>
              <div class="card-content-new">
                  <div class="card-content-in-new">
                      <h5>Analytics for Beginners</h5>
              <p style="height: 90px;">Learn the fundamentals of analytics in a fun way</p>    
              <div class="card-date" style="padding-right: 15px;">
                          <span style="padding-right: 20px;">
                                <i class="fa fa-clock-o" aria-hidden="true" style="color:#999999;"></i>
                                <strong>1 </strong>  week                    
                          </span>
                          <i class="fa fa-calendar" aria-hidden="true" style="color:#999999;"></i>
                          <span><strong> 5 </strong> hours/week</span>                
                      </div>
                      <div style="margin: 0px 45px 0px 25px;">
                      <div class = "moved-button skewed" style="border: 1px #fe761b solid;">
                          <div class="actual-price" style="color: #fe761b; text-align:center;">
                            <span class="font-lato" style="font-size:20px;"><b>&#x20B9; 7,500</b></span>
                          </div>
                       </div>
                    </div>
                </div>
            </div>
        </a>
      </li>
      <style>
          .bg-grey1{background: #f9fafa;}
          .bg-grey .card-content {background: transparent; }
          .bg-grey .card-content:before {background: #f9fafa;}
      </style>
        <li class="one-fourth card-items mix item-advanced" style="display: flex;">
          <a href="#" class="course-beginner-courses item-1610 bg-grey1">
              <div class="card-image">
                          <div style="background: transparent url('./images/Big-data-for-Beginners-Copy-300x165.jpg') no-repeat scroll bottom 30px center / 100% 100%; height: 142px;" class="wp-review-thumbnail-wrapper"></div>
                  <!<img width="400" height="222" src="https://www.jigsawacademy.com/wp-content/uploads/2015/11/Big-data-for-Beginners-Copy-400x222.jpg" class="item wp-post-image" alt="Big-data-for-Beginners-Copy" />-->
                 <!--  <span class="mask mask-dark"></span>
              </div>
              <div class="card-content-new">
                  <div class="card-content-in-new">
                      <h5>Big Data for Beginners</h5>

                      <p style="height: 90px;">Get an authoritative overview of analytics’ fastest growing branch.</p>                                      <div class="card-date" style="padding-right: 15px;">
                              <span style="padding-right: 20px;">
                                <i class="fa fa-clock-o" aria-hidden="true" style="color:#999999;"></i>
                                <strong>1 </strong>  week                    </span>
                          <i class="fa fa-calendar" aria-hidden="true" style="color:#999999;"></i>
                          <span><strong> 5 </strong> hours/week</span>                </div>
                              <div style="margin: 0px 45px 0px 25px;">
                   <div class = "moved-button skewed" style="border: 1px #fe761b solid;">
                    <div class="actual-price" style="color: #fe761b; text-align:center;"><span class="font-lato" style="font-size:20px;"><b>&#x20B9; 8,500</b></span></div>            </div>
                </div>
              </div>
          </div>
        </a>
      </li>
<style>
    .bg-grey1{background: #f9fafa;}
    .bg-grey .card-content {background: transparent; }
    .bg-grey .card-content:before {background: #f9fafa;}
</style>
    <li class="one-fourth card-items mix item-advanced" style="display: flex;">
      <a href="#"
         class="course-beginner-courses item-485 bg-grey1">
        <div class="card-image">
                    <div style="background: transparent url('./images/Ananlytics-for-leader-rev-300x165.jpg') no-repeat scroll bottom 30px center / 100% 100%; height: 142px;" class="wp-review-thumbnail-wrapper"></div> -->
            <!--<img width="400" height="222" src="https://www.jigsawacademy.com/wp-content/uploads/2015/10/Ananlytics-for-leader-rev-400x222.jpg" class="item wp-post-image" alt="Ananlytics for leader-rev" />-->
            <!-- <span class="mask mask-dark"></span>
        </div>
        <div class="card-content-new">
            <div class="card-content-in-new">
                <h5 class="has-prereq">Analytics for Leaders</h5>                    <span class="prerequisite" data-toggle="tooltip" data-placement="top" title="Has prerequisites">
                     <img src="./images/check-icon.png">
                 </span>
                 

                <p style="height: 90px;">Deep dive into the future of business decision-making.</p>                                      <div class="card-date" style="padding-right: 15px;">
                        <span style="padding-right: 20px;">
                          <i class="fa fa-clock-o" aria-hidden="true" style="color:#999999;"></i>
                          <strong>3 </strong>  weeks                    </span>
                    <i class="fa fa-calendar" aria-hidden="true" style="color:#999999;"></i>
                    <span><strong> 3 </strong> hours/week</span>                </div>
                        <div style="margin: 0px 45px 0px 25px;">
             <div class = "moved-button skewed" style="border: 1px #fe761b solid;">
              <div class="actual-price" style="color: #fe761b; text-align:center;"><span class="font-lato" style="font-size:20px;"><b>&#x20B9; 29,500</b></span></div>            </div>
          </div>
        </div>
    </div>
</a>
</li>
                </ul>
              </div>
            </div>
          </div>  -->
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
    <a href="<?php echo base_url('BigdatasiteController/bigdata_specialization/1');?>" class="course-foundation item-484 bg-grey1">
        <div class="card-image" style="padding-bottom: 0px;">
                    <div style="background: transparent url('<?php echo base_url()?>application/images/courses/bds.png') no-repeat scroll bottom 30px center / 100% 100%; height: 142px;" class="wp-review-thumbnail-wrapper"></div>
            <!--<img width="400" height="222" src="https://www.jigsawacademy.com/wp-content/uploads/2015/10/Data-Science-with-SAS-1-400x222.jpg" class="item wp-post-image" alt="Data-Science-with-SAS (1)" />-->
            <span class="mask mask-dark"></span>
        </div>
        <div class="card-content-new">
            <div class="card-content-in-new">
                <h5>Big Data Specialization</h5>

             <!--    <p style="height: 20px;">Career opportunity</p>
                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Median Salary</p>
                   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Global Openings (registered students get access to 
          National &amp; International Placements) -->
              <h6 style="height:20px;color:">Job Profile</h6>
              <p>Hadoop developer , Hadoop Programmer , Big Data Analyst , Big Data Engineer.</p>
                   
          <p></p>
                    <div class="card-date" style="padding-right: 15px;">
                        <!-- <span style="padding-right: 20px;">
                          <i class="fa fa-clock-o" aria-hidden="true" style="color:#999999;"></i>
                          <strong>x </strong>  weeks                    </span> -->
                    <i class="fa fa-calendar" aria-hidden="true" style="color:#999999;"></i>
                    <span><strong> 120 </strong> hours</span>               
                    </div>
                        <div style="margin: 0px 45px 0px 25px;">
             <div class="moved-button skewed" style="max-height:50px;-moz-transform:skew(-12deg)">
             <div class="actual-price" style="text-align:center;">
      <span class="font-lato" style="font-size:20px;"><b>Register</b></span></div>            </div>
          </div>
        </div>
    </div>
</a>
</li>


<!-- <style>
    .bg-grey1{background: #f9fafa;}
    .bg-grey .card-content {background: transparent; }
    .bg-grey .card-content:before {background: #f9fafa;}
</style> -->
    
<!--<style>-->
<!--    .bg-grey1{background: #f9fafa;}-->
<!--    .bg-grey .card-content {background: transparent; }-->
<!--    .bg-grey .card-content:before {background: #f9fafa;}-->
<!--</style>-->
<!--    <li class="one-fourth card-items mix item-advanced" style="display: flex;">-->
<!--    <a href="#"-->
<!--         class="course-foundation item-1169 bg-grey1">-->
<!--        <div class="card-image">-->
<!--                    <div style="background: transparent url('./images/Introduction-to-PYTHON-01-300x165.png') no-repeat scroll bottom 30px center / 100% 100%; height: 142px;" class="wp-review-thumbnail-wrapper"></div>-->
<!--            <!--<img width="400" height="222" src="https://www.jigsawacademy.com/wp-content/uploads/2015/10/Introduction-to-PYTHON-01-400x222.png" class="item wp-post-image" alt="Introduction to PYTHON-01" />-->
<!--            <span class="mask mask-dark"></span>-->
<!--        </div>-->
<!--        <div class="card-content-new">-->
<!--            <div class="card-content-in-new">-->
<!--                <h5 class="has-prereq">Data Science with Python</h5>                    <span class="prerequisite" data-toggle="tooltip" data-placement="top" title="Has prerequisites">-->
<!--                     <img src="./images/check-icon.png">-->
<!--                 </span>-->
<!--                 -->
<!---->
<!--                <p style="height: 90px;">Train in the most cutting-edge programming language</p>                                      <div class="card-date" style="padding-right: 15px;">-->
<!--                        <span style="padding-right: 20px;">-->
<!--                          <i class="fa fa-clock-o" aria-hidden="true" style="color:#999999;"></i>-->
<!--                          <strong>6 </strong>  weeks                    </span>-->
<!--                    <i class="fa fa-calendar" aria-hidden="true" style="color:#999999;"></i>-->
<!--                    <span><strong> 4 </strong> hours/week</span>                </div>-->
<!--                        <div style="margin: 0px 45px 0px 25px;">-->
<!--             <div class = "moved-button skewed" style="border: 1px #fe761b solid;">-->
<!--              <div class="actual-price" style="color: #fe761b; text-align:center;"><span class="font-lato" style="font-size:20px;"><b>&#x20B9; 26,000</b></span></div>            </div>-->
<!--          </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</a>-->
<!--</li>-->
<!--<style>-->
<!--    .bg-grey1{background: #f9fafa;}-->
<!--    .bg-grey .card-content {background: transparent; }-->
<!--    .bg-grey .card-content:before {background: #f9fafa;}-->
<!--</style>-->
<!--    <li class="one-fourth card-items mix item-advanced" style="display: flex;">-->
<!--    <a href="#"-->
<!--         class="course-foundation item-9331 bg-grey1">-->
<!--        <div class="card-image">-->
<!--                    <div style="background: transparent url('./images/Gradient-Boosting-and-Bagging-01-300x165.png') no-repeat scroll bottom 30px center / 100% 100%; height: 142px;" class="wp-review-thumbnail-wrapper"></div>-->
<!--            <!--<img width="400" height="222" src="https://www.jigsawacademy.com/wp-content/uploads/2016/09/Gradient-Boosting-and-Bagging-01-400x222.png" class="item wp-post-image" alt="Gradient Boosting and Bagging-01" />-->
<!--            <span class="mask mask-dark"></span>-->
<!--        </div>-->
<!--        <div class="card-content-new">-->
<!--            <div class="card-content-in-new">-->
<!--                <h5 class="has-prereq">Introduction to Machine Learning</h5>                    <span class="prerequisite" data-toggle="tooltip" data-placement="top" title="Has prerequisites">-->
<!--                     <img src="./images/check-icon.png">-->
<!--                 </span>-->
<!--                 -->
<!---->
<!--                <p style="height: 90px;">Master the fundamentals of Machine Learning -->
<!--</p>                                      <div class="card-date" style="padding-right: 15px;">-->
<!--                        <span style="padding-right: 20px;">-->
<!--                          <i class="fa fa-clock-o" aria-hidden="true" style="color:#999999;"></i>-->
<!--                          <strong>2 </strong>  weeks                    </span>-->
<!--                    <i class="fa fa-calendar" aria-hidden="true" style="color:#999999;"></i>-->
<!--                    <span><strong> 5 </strong> hours/week</span>                </div>-->
<!--                        <div style="margin: 0px 45px 0px 25px;">-->
<!--             <div class = "moved-button skewed" style="border: 1px #fe761b solid;">-->
<!--              <div class="actual-price" style="color: #fe761b; text-align:center;"><span class="font-lato" style="font-size:20px;"><b>&#x20B9; 26,000</b></span></div>            </div>-->
<!--          </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</a>-->
<!--</li>-->
<!--<style>-->
<!--    .bg-grey1{background: #f9fafa;}-->
<!--    .bg-grey .card-content {background: transparent; }-->
<!--    .bg-grey .card-content:before {background: #f9fafa;}-->
<!--</style>-->
<!--    <li class="one-fourth card-items mix item-advanced" style="display: flex;">-->
<!--    <a href="https://www.jigsawacademy.com/online-vba-courses/"-->
<!--         class="course-foundation item-480 bg-grey1">-->
<!--        <div class="card-image">-->
<!--                    <div style="background: transparent url('./images/Visual-Basic-for-Analytics-01-300x165.png') no-repeat scroll bottom 30px center / 100% 100%; height: 142px;" class="wp-review-thumbnail-wrapper"></div>-->
<!--            <!--<img width="400" height="222" src="https://www.jigsawacademy.com/wp-content/uploads/2015/10/Visual-Basic-for-Analytics-01-400x222.png" class="item wp-post-image" alt="Visual Basic for Analytics-01" />-->
<!--            <span class="mask mask-dark"></span>-->
<!--        </div>-->
<!--        <div class="card-content-new">-->
<!--            <div class="card-content-in-new">-->
<!--                <h5 class="has-prereq">Visual Basic for Analytics</h5>                    <span class="prerequisite" data-toggle="tooltip" data-placement="top" title="Has prerequisites">-->
<!--                     <img src="./images/check-icon.png">-->
<!--                 </span>-->
<!--                 -->
<!---->
<!--                <p style="height: 90px;">Raise your career graph with insightful dashboards and reports.</p>                                      <div class="card-date" style="padding-right: 15px;">-->
<!--                        <span style="padding-right: 20px;">-->
<!--                          <i class="fa fa-clock-o" aria-hidden="true" style="color:#999999;"></i>-->
<!--                          <strong>8 </strong>  weeks                    </span>-->
<!--                    <i class="fa fa-calendar" aria-hidden="true" style="color:#999999;"></i>-->
<!--                    <span><strong> 5 </strong> hours/week</span>                </div>-->
<!--                        <div style="margin: 0px 45px 0px 25px;">-->
<!--             <div class = "moved-button skewed" style="border: 1px #fe761b solid;">-->
<!--              <div class="actual-price" style="color: #fe761b; text-align:center;"><span class="font-lato" style="font-size:20px;"><b>&#x20B9; 19,000</b></span></div>            </div>-->
<!--          </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</a>-->
<!--</li>-->
<!--<style>-->
<!--    .bg-grey1{background: #f9fafa;}-->
<!--    .bg-grey .card-content {background: transparent; }-->
<!--    .bg-grey .card-content:before {background: #f9fafa;}-->
<!--</style>-->
<!--    <li class="one-fourth card-items mix item-advanced" style="display: flex;">-->
<!--    <a href="#"-->
<!--         class="course-foundation item-4808 bg-grey1">-->
<!--        <div class="card-image">-->
<!--                    <div style="background: transparent url('./images/Analytics-in-Excel-01.jpg') no-repeat scroll bottom 30px center / 100% 100%; height: 142px;" class="wp-review-thumbnail-wrapper"></div>-->
            <!--<img width="400" height="220" src="https://www.jigsawacademy.com/wp-content/uploads/2016/04/Analytics-in-Excel-01.jpg" class="item wp-post-image" alt="Analytics-in-Excel-01" />-->
            <!--span class="mask mask-dark"></span>
        </div>
        <div class="card-content-new">
            <div class="card-content-in-new">
                <h5>Analytics with Excel</h5>

                <p style="height: 90px;">Learn how to perform complex analytics with the world's most popular analytics tool - Microsoft Excel.</p>                                      <div class="card-date" style="padding-right: 15px;">
                        <span style="padding-right: 20px;">
                          <i class="fa fa-clock-o" aria-hidden="true" style="color:#999999;"></i>
                          <strong>6 </strong>  weeks                    </span>
                    <i class="fa fa-calendar" aria-hidden="true" style="color:#999999;"></i>
                    <span><strong> 4 </strong> hours/week</span>                </div>
                        <div style="margin: 0px 45px 0px 25px;">
             <div class = "moved-button skewed" style="border: 1px #fe761b solid;">
              <div class="actual-price" style="color: #fe761b; text-align:center;"><span class="font-lato" style="font-size:20px;"><b>&#x20B9; 15,000</b></span></div>            </div>
          </div>
        </div>
    </div>
</a>
</li>-->
                </ul>
              </div>
            </div>
          </div>
                      
                      
  
    </div>
  </div>
</div>
</div>                
        </div>
 <script src="<?php echo base_url();?>application/js/slider/jquery-1.11.3.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>application/js/slider/jssor.slider-23.1.6.mini.js" type="text/javascript"></script>
    <script type="text/javascript">
        jQuery(document).ready(function ($) {

            var jssor_1_SlideoTransitions = [
              [{b:900,d:2000,x:-379,e:{x:7}}],
              [{b:900,d:2000,x:-379,e:{x:7}}],
              [{b:-1,d:1,o:-1,sX:2,sY:2},{b:0,d:900,x:-171,y:-341,o:1,sX:-2,sY:-2,e:{x:3,y:3,sX:3,sY:3}},{b:900,d:1600,x:-283,o:-1,e:{x:16}}]
            ];

            var jssor_1_options = {
              $AutoPlay: 1,
              $SlideDuration: 500,
              $SlideEasing: $Jease$.$OutQuint,
              $CaptionSliderOptions: {
                $Class: $JssorCaptionSlideo$,
                $Transitions: jssor_1_SlideoTransitions
              },
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              },
              $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$
              }
            };

            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

            /*responsive code begin*/
            /*remove responsive code if you don't want the slider scales while window resizing*/
            function ScaleSlider() {
                var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
                if (refSize) {
                    refSize = Math.min(refSize, 1920);
                    jssor_1_slider.$ScaleWidth(refSize);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }
            ScaleSlider();
            $(window).bind("load", ScaleSlider);
            $(window).bind("resize", ScaleSlider);
            $(window).bind("orientationchange", ScaleSlider);
            /*responsive code end*/
        });
    </script>
</div><!-- #content -->
