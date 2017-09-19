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
          <li><a href="#" >Expertise</a></li>
          <li href="#">Cognitive Computing</li>
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
                <a type="button" class="course-button" style="float: left;" href="data_warehouse">Previous</a> <a type="button" class="course-button" style="float: right" href="deep_learning">Next</a>
                <h2 style="padding-top: 80px;" align="center">Cognitive Computing</h2>

                <h3 style="padding-bottom: 20px;">Reducing The Complexity Of Text Documentation</h3>
                <div>
                <h6 >Client Organization</h6>
                	<p class="col-md-offset-1">Mid - sized IT Services organization, USA.</p>
                </div>
                <div style="padding-bottom: 20px;">
                	 <h6>Project Owner</h6>
                	<p class="col-md-offset-1"><strong style="color: #31B0D5">Head HR</strong></p>
                	<div id="img">
                	<img src="<?php echo base_url();?>application/images/courses/cong.png">
                	</div>
                </div>
                <div>
                	<h6>The Problem</h6>
                	<p class="col-md-offset-1">The client shared various types of text documents sich as: employee offer letters, policy documents, client related documents, HR documents etc. &nbsp; amongst various users via an online intranet repository. &nbsp; These documents were often lengthy and difficult to understand, especially for people belonging to a different domain (i.e. an HR personnel reading a financial document) because of the domain specific jargons used in the documents. &nbsp; Our aim was to make these documents jargon-free. &nbsp; This project was a part of their plain language initiative. &nbsp; Plain Language as defined by the American government is a language construct, which is jargon-free and ensures understanding of the contents, whether a person reads it or listens to it for the first time. As the client had a huge volume of text documents in the repository, they wanted us to build a text analytics tool for doing the same.</p>
                </div>
                <div>
                	<h6>The Solution</h6>
                	<p class="col-md-offset-1">We collated various documents from various verticals of the company such as HR documents, finance documents, marketing documents, project management documents etc. &nbsp; And applied text-mining techniques to build the model required. &nbsp; We built a model, which was comprised of two modules: &nbsp;<strong> Auto Analyzer: &nbsp;</strong> to analyze the document and<strong> Auto Guidance: &nbsp;</strong> for writing and correcting the document. &nbsp; Auto guidance method also generated suggestions for correction. &nbsp; For example, if a sentence were written in a passive voice, it would suggest an active voice instead. &nbsp; If a complex word was used, it would suggest an alternate commonly used word to replace it. &nbsp; Auto Analyzer analyses the document across various dimensions such as: design of the document, organization of content, language used, context analysis etc. In addition, the end user can view the areas for improvement and make the required modifications. &nbsp; Finally, we deployed the models on the system. &nbsp; The corrections/modifications were automatic but at times, it required human intervention. &nbsp; If human intervention was required for correction/modification, one needed to select a sentence amongst the few choices displayed on the screen or replace it with a more appropriate sentence.</p>
                  
                </div>
                <div>
                   	<h6>Tools &amp; Technologies</h6>
                	<p class="col-md-offset-1">Quadratyx NLPTook Kit, Java, JSP.</p>
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