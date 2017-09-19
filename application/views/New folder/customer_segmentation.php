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
          <li href="#">Customer Segmentation</li>
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
                <a type="button" class="course-button" style="float: left;" href="cross_sell">Previous</a> <a type="button" class="course-button" style="float: right" href="investment_advice">Next</a>
                <h2 style="padding-top: 80px;" align="center">Customer Segmentation</h2>

                <h3 style="padding-bottom: 20px;">Adding Intelligence To Dining: Restaurant Business</h3>
                <div>
                <h6 >Client Organization</h6>
                	<p class="col-md-offset-1">One of the largest dining restaurant chains in the USA.</p>
                </div>
                <div style="padding-bottom: 20px;">
                	 <h6>Project Owner</h6>
                	<p class="col-md-offset-1"><strong style="color: #31B0D5"> VP Marketing &amp; Strategy</strong></p>
                	<div id="img">
                	<img src="<?php echo base_url();?>application/images/courses/custum.png" width="500px;" >
                	</div>
                </div>
                <div>
                	<h6>The Problem</h6>
                	<p class="col-md-offset-1">With increase in unstructured data (text, multimedia etc.,) across all business, there is a need for an efficient, scalable way to store &amp; retrieve data. &nbsp; SQL architecture proves to be expensive and not scalable, whereas NoSQL scales well and is efficient to retrieve and manipulate unstructured data. &nbsp; Consequently, a noticeable drift from SQL to NoSQLis evident. &nbsp; Likewise, our customer used MongoDB (a widely usedNoSQL document database) to store large amounts of restaurants data. &nbsp; The customer wanted to analyze data, the way they did with SQL databases but NoSQL databases support only a limited type of queries and not all useful for building efficient predictive models.</p>
                </div>
                <div>
                	<h6>The Solution</h6>
                	<p class="col-md-offset-1">Most predictive algorithms accept data in the form of relational tables as input. &nbsp; Although NoSQL is efficient to store and retrieve data, building predictive on NoSQL data has always been a challenging job. &nbsp; Hence, an essential first step to build predictive models on NoSQL data is to transform / export just the required data from NoSQL to a tabular format. &nbsp; We designed a generic, flexible plug-in to convert NoSQL to SQL (Our solution works with any NoSQL data at any level of complexity, independent of the domain and schema). &nbsp; Then we built a few predictive algorithms to work seamlessly with the data. &nbsp; The complete design and modeling helped the client in segmenting their customers and the design was flexible to accommodate new updates as per business requirement.</p>
                </div>
                <div>
                   	<h6>Tools & Technologies</h6>
                	<p class="col-md-offset-1">Python, R, MongoDB, HBase, Hadoop, Map-Reduce.</p>
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