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
               <li href="#">Agriculture</li>
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
                 <a type="button" class="course-button" style="float: left;" href="education">Previous</a> 
                 <a type="button" class="course-button" style="float: right" href="oil_energy">Next</a>
                  
                 <h2 style="padding-top: 80px;" align="center">Agriculture</h2>
                 <h3 style="padding-bottom: 20px;">Using Rainfall To Predict Fertilizer Demand With Model Ensembles</h3>
                    <div>
                        <h6 >Customer</h6>
                    	<p class="col-md-offset-1">A &#36;1.4 Billion Fertilizer Manufacturer.</p>
                    </div>
                    <div>
                        <h6 >Business Background</h6>
                      <p class="col-md-offset-1">The Agricultural department of the Indian government releases data for acreage of individual crops to all states and districts in the country. &nbsp; Other data released by government departments is related to rainfall and reservoir levels. &nbsp; The quality and consistency of such datasets has been questioned time and time again. &nbsp; While it is common knowledge that fertilizer demand varies predictably with rainfall, there are very few examples of the use of large scale application of predictive analytics in India.</p>
                       <div id="img">
                             <img src="<?php echo base_url();?>application/images/courses/agri.png" width="600px;" >
                           </div>
                    </div>
                    <div>
                        <h6 >Need For Analytics</h6>
                      <p class="col-md-offset-1">ypically all Government data is in MS-Word / PDF documents with non-uniform syntax. &nbsp; There are thousands of files, each having tens of thousands of data elements. &nbsp; There is also a strong sense of locality and crop-dependence in this domain. &nbsp; Data blending, cleansing and then application of models is needed, for any structured decision-support from this wealth of data. &nbsp; Business managers like to drill down and visualize the data, and also do scenario analysis in the form of "if rainfall in district x is N cm in next season, how many tons of product K should we ship?".</p>
                    </div>
                     <div>
                        <h6 >Technical Solution</h6>
                      <p class="col-md-offset-1">A single, central data mart was designed. Data is automatically brought into a staging area from the Excel files, taking care of format variations. &nbsp; Tools are built for automatic verification of data quality and integrity. &nbsp; Then data is extracted in either crop-wise, region-wise sub tables and cleansed.</p>
                       <p class="col-md-offset-1">These data sets are used to build crop-wise, region-wise acreage prediction models, using sophisticated time series, dynamic regression and other methods. &nbsp; Acreage and crop sowing practices in turn determine expected fertilizer consumption. &nbsp; A software tool within which the ensemble models are integrated is delivered.</p>
                    </div>
                    <div>
                        <h6 >Software / Tools</h6>
                      <p class="col-md-offset-1">Tableau, R-Shiny, GG-Plot, OCR, MySQL stored.</p>
                    </div>
                    <div>
                        <h6 >Outcome</h6>
                      <p class="col-md-offset-1">End-to-end system successfully built and delivered.</p>
                    </div>
                     <div>
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