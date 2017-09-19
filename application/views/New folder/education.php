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
               <li><a href="#" >Services</a></li>
               <li><a href="#" >Industry</a></li>
               <li href="#">Education</li>
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
                <div class="title">
                 <a type="button" class="course-button" style="float: left;" href="information_technology">Previous</a> 
                 <a type="button" class="course-button" style="float: right" href="agriculture">Next</a>
                 
                 <h2 style="padding-top: 80px;" align="center">Education</h2>
                 <h3 style="padding-bottom: 20px;">Text Mining To Measure Comprehension Burden</h3>
                    <div>
                        <h6 >Customer</h6>
                    	<p class="col-md-offset-1">An Esteemed International Educational Institute.</p>
                    </div>
                    <div>
                        <h6 >Business Background</h6>
                      <p class="col-md-offset-1">With the increase in the number of students for whom English is a second language, the "one model fits all" approach fails. &nbsp; In other words, the same reading material and teaching styles for students whose mother tongue is not English will fail in these scenarios. &nbsp; Reading plays a crucial role for any educational development, but finding the appropriate reading materials for students at different comprehension levels is not easy. </p>
                       <div id="img">
                             <img src="<?php echo base_url();?>application/images/courses/education1.png" width="600px;" >
                           </div>
                    </div>
                    <div>
                        <h6 >Need For Analytics</h6>
                      <p class="col-md-offset-1">To address the problem of providing reading materials at different comprehension levels, often teachers make an effort to find materials from various online sources. &nbsp; Unfortunately, this process is difficult and time consuming. &nbsp; To satisfy the needs of different students, teachers are often forced to rewrite the material themselves to suit various student needs. &nbsp; The application of text mining and machine learning approaches on reading materials automates the process of determining the complexity of the material.</p>
                    </div>
                     <div>
                        <h6 >Technical Solution</h6>
                      <p class="col-md-offset-1">Data was collected from common core state standards. &nbsp; Each data entry has a grade level that determines the complexity of reading comprehension. &nbsp; With this data as a training set, we applied text mining techniques to extract useful information from the data set. &nbsp; Each text document was represented as a graph and features to define each text document are extracted by applying social network analysis on the graph.</p>
                      <p class="col-md-offset-1">A combination of social network aspects and the graph properties of the text act as features to define the text document. &nbsp; After extracting features from all the text documents, a machine-learning algorithm for classification is applied. &nbsp; The accuracy of the model proved commendable for the test data provided by the university.</p>
                    </div>
                    <div>
                        <h6 >Software / Tools</h6>
                      <p class="col-md-offset-1">Quadratyx NLPTook Kit, Gephi, Java, R.</p>
                    </div>
                    <div>
                        <h6 >Outcome</h6>
                      <p class="col-md-offset-1">The model was built and deployed successfully. &nbsp; The accuracy of the test data provided by the university was commendable.</p>
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