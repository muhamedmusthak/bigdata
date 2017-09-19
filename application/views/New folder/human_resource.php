<style type="text/css">
	h6{
		background: lightgray;
		padding-left: 10px;
		padding-top: 5px;
		border-left: 10px solid #31B0D5;
		border-right: 10px solid #31B0D5;
		background-color: lightgrey;
		border-radius: 8px;
	}
	 h6:hover{
        background: #e0e0e0;

    }
	p{
		padding-top: 15px;
		padding-bottom: 15px;
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
    line-height: 30px;
    margin: 10px auto;
    max-height: 80px;
    max-width: 100px;
    outline-offset: -2px;
    text-align: center;
    transition: all 0.4s ease-in-out 0s;
    width: 100%;
}
	 #img{
       text-align: center;
       padding-bottom: 20px;
    }

</style>
<div id="content" class="site-content">
    <div id="banner" class="aboutus-banner" style="background:
 url('<?php echo base_url();?>application/images/about/ab3.jpg');   background-repeat:no-repeat; background-size:cover;">
        <div class="row clearfix banner-common">

        <ul class="bread-crumbs font-lato">
          <li><a href="<?php echo base_url('BigdatasiteController/index');?>" >Home</a></li>
          <li><a href="<?php echo base_url('BigdatasiteController/corporate_solutions');?>" >Corporate Solution</a></li>
           <li><a href="#" >Business Solution</a></li>
           <li><a href="#" >Case Study</a></li>
          <li href="#">Human Resource</li>
        </ul>
            <div class="banner-content banner-content-center">
                <h1>Corporate Solution</h1>
                <p>Your professional journey begins with us. &nbsp; With the help of our extensive set of tools,networks and industry experts, we give you the power and knowledge to become a competitive and desirable employee for corporations across the globe.
                </p>

            </div>
            <!-- banner-content ends here-->
        </div>
        <!-- row ends here-->
    </div>
    <!-- banner ends here-->
    <!-- banner ends here-->
  <!--   <div id="tabs">
        <div class="row">
            <ul class="tabs-list">
                <li class="tab-item tab-company active"><a href="">Training on Demand</a></li>
                <li class="tab-item tab-people "><a href="">Placements</a></li>
                <li class="tab-item tab-careers "><a href="">Services</a></li>
                <li class="tab-item tab-careers "><a href="">Business Solutions</a></li>
            </ul>
        </div>
    </div> -->


    <div id="a_company" class="content-about-us">
        <div id="trusted-brands" class="bg-white" >
            <div class="row">
                <div class="title" >
                <a type="button" class="course-button" style="float: left;" href="strategy_marketing">Previous</a> <a type="button" class="course-button" style="float: right" href="visualization">Next</a>
                <h2 style="padding-top: 80px;" align="center">Human Resource</h2>

                <h3 style="padding-bottom: 20px;">Getting More Out Of 360-Degree Reviews</h3>
                <div>
                <h6 >Client Organization</h6>
                	<p class="col-md-offset-1">One of South India's largest business groups.</p>
                </div>
                <div style="padding-bottom: 20px;">
                	 <h6>Project Owner</h6>
                	<p class="col-md-offset-1"><strong style="color: #31B0D5">Head HR</strong></p>
                	<div id="img">
                	<img src="<?php echo base_url();?>application/images/courses/review.png" width="500px;" >
                	</div>
                </div>
                <div>
                	<h6>The Problem</h6>
                	<p class="col-md-offset-1">The business firm conducted 360-degree feedback annually to understand and evaluate the performance of the employees. &nbsp; The feedback is usually a hard copy of the electronically available review form manually filled by the employees or sometimes filled online. &nbsp; In either case, much of the information is in unstructured form (text). &nbsp; The manager does evaluation of performance intuitively. &nbsp; This process is cumbersome, and comparative insights are seldom used. &nbsp; Client wanted us to draw insights from the data and setup an infrastructure for the same so that they may be able to do it on their own in the future.</p>
                </div>
                <div>
                	<h6>The Solution</h6>
                	<p class="col-md-offset-1">We collated data from multiple 360-degree review feedback reports (PDFs). &nbsp; Performed data loading, designed a multi-dimensional model and loaded the data into a SQL database. &nbsp; For descriptive analysis, we designed an interactive dashboard that summarizes the information, and provides drill-down and roll-up operations to get insights from the data. &nbsp; The analysis was done across five different dimensions - people who reviewed it, people who are being reviewed, features of review, scoring and textual comments. &nbsp; To analyze textual comments, we applied text analytics. &nbsp; For predictive analytics, we built models to find clusters of different features along which all managers had similar feedbacks. &nbsp;These clusters indicated that the features are either not distinctive or that reviewers really did not comprehend the subtleties of the features. &nbsp; Linked the online review form to the data base and connected the database to our recently designed interactive dashboard with built in analytical models for future use.</p>
                </div>
                <div>
                   	<h6>Tools & Technologies</h6>
                	<p class="col-md-offset-1">Tableau, R, Stanford Parser.</p>
                </div>
                </div>
            </div>
          </div>
          <!-- <div id="trusted-brands" class="bg-white" >
            <div class="row">
                <div class="title" style="min-height: 300px;">
                <h2 align="center">Banking & Finance</h2>
                	<p align="center">Advanced analytics is reshaping the banking and financial industry today. &nbsp; Businesses are using big data and analytics to differentiate their firms and gain an edge over the competitors by incorporating risk analysis into their daily decision making and predicting customer behavior. &nbsp; Big Data Analytics helps financial firms drive revenue, improve operational efficiencies and transform businesses rapidly.</p>
                </div>
            </div>
          </div>
         -->
        
    </div>
    <!-- #content -->