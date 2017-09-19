<!-- begin #content -->
        <div id="content" class="content">
            <!-- begin breadcrumb -->
            <ol class="breadcrumb pull-right">
                <li><a href="javascript:;">Dashboard</a></li>
                <!-- <li><a href="javascript:;">Form Stuff</a></li> -->
                <li class="active">Home</li>
            </ol>
            <!-- end breadcrumb -->
            <!-- begin page-header -->
            <h1 class="page-header">Home  <small> You may view your details here..</small></h1>
            <!-- end page-header -->
            
            <!-- begin row -->
            <div class="row">
                <!-- begin col-6 -->
                <div class="col-md-12">
                    <!-- begin panel -->
                    <div class="panel panel-inverse" data-sortable-id="form-stuff-1">
                        <div class="panel-heading">
                            <div class="panel-heading-btn">
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
                            </div>
                            <h4 class="panel-title">Home</h4>
                        </div>
                        <div class="panel-body">
                            <form class="form-horizontal" action="<?php echo base_url('bigdataAdminController/home_update');?>" id="form_validation" method="post" name="form_validation" enctype="multipart/form-data">
                                <legend>Choose Slider 1 To Change</legend>
                                <div class="row">
                                    <div class="col-md-4">
                                    <p>
                                        <img class="media-object superbox-img previewimage" id="footer_image" name="footer_image" src="<?php echo base_url('application/assets/img/login-bg/bg-6.jpg');?>">
                                    </p>
                                        <div role="form">
                                            <input type="hidden" value="" name="Old_Footer_Img"/>
                                            <input id="filestyle-1" class="filestyle" type="file" name='Footer_Img' onchange="PreviewImage();" data-buttonbefore="true" style="position: absolute; clip: rect(0px, 0px, 0px, 0px);" tabindex="-1">
                                            <div class="bootstrap-filestyle input-group">
                                                <span class="group-span-filestyle input-group-btn" tabindex="0">
                                                    <label id="new" class="btn btn-default" for="filestyle-1">
                                                        <span class="glyphicon glyphicon-folder-open"></span>
                                                        Choose file
                                                    </label>
                                                </span>
                                                <input class="form-control" id="filestyle-2"  value="" type="text" readonly>
                                            </div>
                                        </div>
                                    </div>
                                </div><p></p>
                                <div class="row">
                                    <div class="col-md-12">
                                        <p></p>
                                        <h4 class="m-t-0">Slider 1 TITLE</h4>
                                       <input class="form-control input-md" name="Phone_Number" type="text" value="" placeholder="TYPE YOUR TITLE">
                                    </div>
                                </div><p></p>
                                <div class="row">
                                    <div class="col-md-12">
                                        <p></p>
                                        <h4 class="m-t-0">Slider 1 Description</h4>
                                        <textarea class="ckeditor textarea form-control  textarea_middle required" name="Footer_Content" rows="5"   placeholder="TYPE YOUR DESCRIPTION"></textarea>
                                    </div>
                                </div><p></p><br>
                                <div class="row">
                                    <div class="col-md-4">
                                        <p>
                                        <h4 class="m-t-0">Slider Button Image 1</h4>
                                        <img class="media-object superbox-img previewimage" id="email_image" name="footer_image" src="<?php echo base_url('application/assets/img/login-bg/bg-6.jpg');?>">
                                        </p>
                                        <div role="form">
                                            <input type="hidden" value="" name="Old_Email_Img"/>
                                            <input id="filestyle-1" class="filestyle" type="file" name='Email_Img' onchange="PreviewImage();" data-buttonbefore="true" style="position: absolute; clip: rect(0px, 0px, 0px, 0px);" tabindex="-1">
                                            <div class="bootstrap-filestyle input-group">
                                                <span class="group-span-filestyle input-group-btn" tabindex="0">
                                                    <label id="new" class="btn btn-default" for="filestyle-1">
                                                        <span class="glyphicon glyphicon-folder-open"></span>
                                                        Choose file
                                                    </label>
                                                </span>
                                                <input class="form-control" id="filestyle-2"  value="" type="text" readonly>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <p>
                                        <h4 class="m-t-0">Slider Button Image 2</h4>
                                        <img class="media-object superbox-img previewimage" id="email_image" name="footer_image" src="<?php echo base_url('application/assets/img/login-bg/bg-6.jpg');?>">
                                        </p>
                                        <div role="form">
                                            <input type="hidden" value="" name="Old_Email_Img"/>
                                            <input id="filestyle-1" class="filestyle" type="file" name='Email_Img' onchange="PreviewImage();" data-buttonbefore="true" style="position: absolute; clip: rect(0px, 0px, 0px, 0px);" tabindex="-1">
                                            <div class="bootstrap-filestyle input-group">
                                                <span class="group-span-filestyle input-group-btn" tabindex="0">
                                                    <label id="new" class="btn btn-default" for="filestyle-1">
                                                        <span class="glyphicon glyphicon-folder-open"></span>
                                                        Choose file
                                                    </label>
                                                </span>
                                                <input class="form-control" id="filestyle-2"  value="" type="text" readonly>
                                            </div>
                                        </div>
                                    </div>
                                </div><p></p><br>
                                <div class="row">
                                    <div class="col-md-4">
                                        <h4>Button Name</h4>
                                       <input class="form-control input-md" name="Email_Id" type="text" value="" placeholder="TYPE YOUR BUTTON NAME">
                                    </div>
                                    <div class="col-md-4">
                                        <h4>Button Name</h4>
                                       <input class="form-control input-md" name="Email_Id" type="text" value="" placeholder="TYPE YOUR BUTTON NAME">
                                    </div>
                                </div><p></p>
                                <div class="row">
                                    <div class="col-md-4">
                                        <h4>Button Link</h4>
                                       <input class="form-control input-md" name="Email_Id" type="text" value="" placeholder="TYPE YOUR BUTTON NAME">
                                    </div>
                                    <div class="col-md-4">
                                        <h4>Button Link</h4>
                                       <input class="form-control input-md" name="Email_Id" type="text" value="" placeholder="TYPE YOUR BUTTON NAME">
                                    </div>
                                </div><p></p><br>
                                <div class="row">
                                     <div class="col-md-4">
                                        <p>
                                        <h4 class="m-t-0">Slider Sub-content Image</h4>
                                        <img class="media-object superbox-img previewimage" id="email_image" name="footer_image" src="<?php echo base_url('application/assets/img/login-bg/bg-6.jpg');?>">
                                        </p>
                                        <div role="form">
                                            <input type="hidden" value="" name="Old_Email_Img"/>
                                            <input id="filestyle-1" class="filestyle" type="file" name='Email_Img' onchange="PreviewImage();" data-buttonbefore="true" style="position: absolute; clip: rect(0px, 0px, 0px, 0px);" tabindex="-1">
                                            <div class="bootstrap-filestyle input-group">
                                                <span class="group-span-filestyle input-group-btn" tabindex="0">
                                                    <label id="new" class="btn btn-default" for="filestyle-1">
                                                        <span class="glyphicon glyphicon-folder-open"></span>
                                                        Choose file
                                                    </label>
                                                </span>
                                                <input class="form-control" id="filestyle-2"  value="" type="text" readonly>
                                            </div>
                                        </div>
                                	</div>
                                <div class="col-md-4">
                                    <div calss="row">
                                        <div class="col-md-12">
                                            <h4>Content</h4>
                                           <input class="form-control input-md" name="Email_Id" type="text" value="" placeholder="TYPE YOUR CONTENT">
                                        </div>
                                    </div>
                                    <div calss="row">
                                        <div class="col-md-12">
                                            <h4>Content link Name</h4>
                                           <input class="form-control input-md" name="Email_Id" type="text" value="" placeholder="TYPE YOUR CONTENT LINK NAME">
                                        </div>
                                    </div>
                                </div>
                               	</div><p></p><br>
                              
                                <legend>Choose Slider 2 To Change</legend>
                                <div class="row">
                                    <div class="col-md-4">
                                    <p>
                                        <img class="media-object superbox-img previewimage" id="footer_image" name="footer_image" src="<?php echo base_url('application/assets/img/login-bg/bg-6.jpg');?>">
                                    </p>
                                        <div role="form">
                                            <input type="hidden" value="" name="Old_Footer_Img"/>
                                            <input id="filestyle-1" class="filestyle" type="file" name='Footer_Img' onchange="PreviewImage();" data-buttonbefore="true" style="position: absolute; clip: rect(0px, 0px, 0px, 0px);" tabindex="-1">
                                            <div class="bootstrap-filestyle input-group">
                                                <span class="group-span-filestyle input-group-btn" tabindex="0">
                                                    <label id="new" class="btn btn-default" for="filestyle-1">
                                                        <span class="glyphicon glyphicon-folder-open"></span>
                                                        Choose file
                                                    </label>
                                                </span>
                                                <input class="form-control" id="filestyle-2"  value="" type="text" readonly>
                                            </div>
                                        </div>
                                    </div>
                                </div><p></p>
                                <div class="row">
                                    <div class="col-md-12">
                                        <p></p>
                                        <h4 class="m-t-0">Slider 2 Title</h4>
                                       <input class="form-control input-md" name="Phone_Number" type="text" value="" placeholder="TYPE YOUR TITLE">
                                    </div>
                                </div><p></p>
                                <div class="row">
                                    <div class="col-md-12">
                                        <p></p>
                                        <h4 class="m-t-0">Slider 2 Description</h4>
                                        <textarea class="ckeditor textarea form-control  textarea_middle required" name="Footer_Content" rows="5"   placeholder="TYPE YOUR DESCRIPTION"></textarea>
                                    </div>
                                </div><p></p><br>
                                <div class="row">
                                    <div class="col-md-4">
                                        <p>
                                        <h4 class="m-t-0">Slider Button Image 1</h4>
                                        <img class="media-object superbox-img previewimage" id="email_image" name="footer_image" src="<?php echo base_url('application/assets/img/login-bg/bg-6.jpg');?>">
                                        </p>
                                        <div role="form">
                                            <input type="hidden" value="" name="Old_Email_Img"/>
                                            <input id="filestyle-1" class="filestyle" type="file" name='Email_Img' onchange="PreviewImage();" data-buttonbefore="true" style="position: absolute; clip: rect(0px, 0px, 0px, 0px);" tabindex="-1">
                                            <div class="bootstrap-filestyle input-group">
                                                <span class="group-span-filestyle input-group-btn" tabindex="0">
                                                    <label id="new" class="btn btn-default" for="filestyle-1">
                                                        <span class="glyphicon glyphicon-folder-open"></span>
                                                        Choose file
                                                    </label>
                                                </span>
                                                <input class="form-control" id="filestyle-2"  value="" type="text" readonly>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <p>
                                        <h4 class="m-t-0"> Slider Button Image 2</h4>
                                        <img class="media-object superbox-img previewimage" id="email_image" name="footer_image" src="<?php echo base_url('application/assets/img/login-bg/bg-6.jpg');?>">
                                        </p>
                                        <div role="form">
                                            <input type="hidden" value="" name="Old_Email_Img"/>
                                            <input id="filestyle-1" class="filestyle" type="file" name='Email_Img' onchange="PreviewImage();" data-buttonbefore="true" style="position: absolute; clip: rect(0px, 0px, 0px, 0px);" tabindex="-1">
                                            <div class="bootstrap-filestyle input-group">
                                                <span class="group-span-filestyle input-group-btn" tabindex="0">
                                                    <label id="new" class="btn btn-default" for="filestyle-1">
                                                        <span class="glyphicon glyphicon-folder-open"></span>
                                                        Choose file
                                                    </label>
                                                </span>
                                                <input class="form-control" id="filestyle-2"  value="" type="text" readonly>
                                            </div>
                                        </div>
                                    </div>
                                </div><p></p><br>
                                <div class="row">
                                    <div class="col-md-4">
                                        <h4>Button Name</h4>
                                       <input class="form-control input-md" name="Email_Id" type="text" value="" placeholder="TYPE YOUR BUTTON NAME">
                                    </div>
                                    <div class="col-md-4">
                                        <h4>Button Name</h4>
                                       <input class="form-control input-md" name="Email_Id" type="text" value="" placeholder="TYPE YOUR BUTTON NAME">
                                    </div>
                                </div><p></p>
                                <div class="row">
                                    <div class="col-md-4">
                                        <h4>Button Link</h4>
                                       <input class="form-control input-md" name="Email_Id" type="text" value="" placeholder="TYPE YOUR BUTTON LINK">
                                    </div>
                                    <div class="col-md-4">
                                        <h4>Button Link</h4>
                                       <input class="form-control input-md" name="Email_Id" type="text" value="" placeholder="TYPE YOUR BUTTON LINK">
                                    </div>
                                </div><p></p><br>
                                <div class="row">
                                     <div class="col-md-4">
                                        <p>
                                        <h4 class="m-t-0">Slider Sub-content Image</h4>
                                        <img class="media-object superbox-img previewimage" id="email_image" name="footer_image" src="<?php echo base_url('application/assets/img/login-bg/bg-6.jpg');?>">
                                        </p>
                                        <div role="form">
                                            <input type="hidden" value="" name="Old_Email_Img"/>
                                            <input id="filestyle-1" class="filestyle" type="file" name='Email_Img' onchange="PreviewImage();" data-buttonbefore="true" style="position: absolute; clip: rect(0px, 0px, 0px, 0px);" tabindex="-1">
                                            <div class="bootstrap-filestyle input-group">
                                                <span class="group-span-filestyle input-group-btn" tabindex="0">
                                                    <label id="new" class="btn btn-default" for="filestyle-1">
                                                        <span class="glyphicon glyphicon-folder-open"></span>
                                                        Choose file
                                                    </label>
                                                </span>
                                                <input class="form-control" id="filestyle-2"  value="" type="text" readonly>
                                            </div>
                                        </div>
                                	</div>
	                                <div class="col-md-4">
	                                    <div calss="row">
	                                        <div class="col-md-12">
	                                            <h4>Sub-content</h4>
	                                           <input class="form-control input-md" name="Email_Id" type="text" value="" placeholder="TYPE YOUR SUB-CONTNET">
	                                        </div>
	                                    </div>
	                                    <div calss="row">
	                                        <div class="col-md-12">
	                                            <h4>Content link Name</h4>
	                                           <input class="form-control input-md" name="Email_Id" type="text" value="" placeholder="TYPE YOUR LINK">
	                                        </div>
	                                    </div>
	                                </div>
	                             </div><p></p><br>

                          
                                <div class="hidden" id="show">
                                   <legend>Choose New Slider To Change</legend> 
                                   <div class="row">
                                        <div class="col-md-4">
                                        <p>
                                            <img class="media-object superbox-img previewimage" id="footer_image" name="footer_image" src="<?php echo base_url('application/assets/img/login-bg/bg-6.jpg');?>">
                                        </p>
                                            <div role="form">
                                                <input type="hidden" value="" name="Old_Footer_Img"/>
                                                <input id="filestyle-1" class="filestyle" type="file" name='Footer_Img' onchange="PreviewImage();" data-buttonbefore="true" style="position: absolute; clip: rect(0px, 0px, 0px, 0px);" tabindex="-1">
                                                <div class="bootstrap-filestyle input-group">
                                                    <span class="group-span-filestyle input-group-btn" tabindex="0">
                                                        <label id="new" class="btn btn-default" for="filestyle-1">
                                                            <span class="glyphicon glyphicon-folder-open"></span>
                                                            Choose file
                                                        </label>
                                                    </span>
                                                    <input class="form-control" id="filestyle-2"  value="" type="text" readonly>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-offset-6 col-md-1">
                                          <button type="button" id="delete_slider" class="btn btn-danger">X</span>
                                        </div>
                                    </div><p></p>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <p></p>
                                            <h4 class="m-t-0">Slider Title</h4>
                                           <input class="form-control input-md" name="Phone_Number" type="text" value="" placeholder="TYPE YOUR TITLE">
                                        </div>
                                    </div><p></p>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <p></p>
                                            <h4 class="m-t-0">Slider Description</h4>
                                            <textarea class="ckeditor textarea form-control  textarea_middle required" name="Footer_Content" rows="5"   placeholder="TYPE YOUR DESCRIPTION"></textarea>
                                        </div>
                                    </div><p></p><br>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <p>
                                            <h4 class="m-t-0">Slider Button Image 1</h4>
                                            <img class="media-object superbox-img previewimage" id="email_image" name="footer_image" src="<?php echo base_url('application/assets/img/login-bg/bg-6.jpg');?>">
                                            </p>
                                            <div role="form">
                                                <input type="hidden" value="" name="Old_Email_Img"/>
                                                <input id="filestyle-1" class="filestyle" type="file" name='Email_Img' onchange="PreviewImage();" data-buttonbefore="true" style="position: absolute; clip: rect(0px, 0px, 0px, 0px);" tabindex="-1">
                                                <div class="bootstrap-filestyle input-group">
                                                    <span class="group-span-filestyle input-group-btn" tabindex="0">
                                                        <label id="new" class="btn btn-default" for="filestyle-1">
                                                            <span class="glyphicon glyphicon-folder-open"></span>
                                                            Choose file
                                                        </label>
                                                    </span>
                                                    <input class="form-control" id="filestyle-2"  value="" type="text" readonly>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <p>
                                            <h4 class="m-t-0"> Slider Button Image 2</h4>
                                            <img class="media-object superbox-img previewimage" id="email_image" name="footer_image" src="<?php echo base_url('application/assets/img/login-bg/bg-6.jpg');?>">
                                            </p>
                                            <div role="form">
                                                <input type="hidden" value="" name="Old_Email_Img"/>
                                                <input id="filestyle-1" class="filestyle" type="file" name='Email_Img' onchange="PreviewImage();" data-buttonbefore="true" style="position: absolute; clip: rect(0px, 0px, 0px, 0px);" tabindex="-1">
                                                <div class="bootstrap-filestyle input-group">
                                                    <span class="group-span-filestyle input-group-btn" tabindex="0">
                                                        <label id="new" class="btn btn-default" for="filestyle-1">
                                                            <span class="glyphicon glyphicon-folder-open"></span>
                                                            Choose file
                                                        </label>
                                                    </span>
                                                    <input class="form-control" id="filestyle-2"  value="" type="text" readonly>
                                                </div>
                                            </div>
                                        </div>
                                    </div><p></p><br>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <h4>Button Name</h4>
                                           <input class="form-control input-md" name="Email_Id" type="text" value="" placeholder="TYPE YOUR BUTTON NAME">
                                        </div>
                                        <div class="col-md-4">
                                            <h4>Button Name</h4>
                                           <input class="form-control input-md" name="Email_Id" type="text" value="" placeholder="TYPE YOUR BUTTON NAME">
                                        </div>
                                    </div><p></p>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <h4>Button Link</h4>
                                           <input class="form-control input-md" name="Email_Id" type="text" value="" placeholder="TYPE YOUR BUTTON LINK">
                                        </div>
                                        <div class="col-md-4">
                                            <h4>Button Link</h4>
                                           <input class="form-control input-md" name="Email_Id" type="text" value="" placeholder="TYPE YOUR BUTTON LINK">
                                        </div>
                                    </div><p></p><br>
                                    <div class="row">
                                         <div class="col-md-4">
                                            <p>
                                            <h4 class="m-t-0">Slider Sub-content Image</h4>
                                            <img class="media-object superbox-img previewimage" id="email_image" name="footer_image" src="<?php echo base_url('application/assets/img/login-bg/bg-6.jpg');?>">
                                            </p>
                                            <div role="form">
                                                <input type="hidden" value="" name="Old_Email_Img"/>
                                                <input id="filestyle-1" class="filestyle" type="file" name='Email_Img' onchange="PreviewImage();" data-buttonbefore="true" style="position: absolute; clip: rect(0px, 0px, 0px, 0px);" tabindex="-1">
                                                <div class="bootstrap-filestyle input-group">
                                                    <span class="group-span-filestyle input-group-btn" tabindex="0">
                                                        <label id="new" class="btn btn-default" for="filestyle-1">
                                                            <span class="glyphicon glyphicon-folder-open"></span>
                                                            Choose file
                                                        </label>
                                                    </span>
                                                    <input class="form-control" id="filestyle-2"  value="" type="text" readonly>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div calss="row">
                                                <div class="col-md-12">
                                                    <h4>Sub-content</h4>
                                                   <input class="form-control input-md" name="Email_Id" type="text" value="" placeholder="TYPE YOUR SUB-CONTNET">
                                                </div>
                                            </div>
                                            <div calss="row">
                                                <div class="col-md-12">
                                                    <h4>Content link Name</h4>
                                                   <input class="form-control input-md" name="Email_Id" type="text" value="" placeholder="TYPE YOUR LINK">
                                                </div>
                                            </div>
                                        </div>
                                     </div><p></p><br><br>
                                 </div><!--hidden div end-->
                                 <div class="pager form-group">
                                     <div class="col-md-2">
                                        <!--<button  class="btn btn-success m-r-5 m-b-5" type="submit" name="save" id="save" value="Save">Save</button>-->
                                        <input class="btn btn-success m-r-5 m-b-5" type="button" name="save" id="add_slider" value="+ Add Slider">
                                            <!-- <button  class="btn btn-primary m-r-5 m-b-5" onclick="#" type="button">Cancel</button> -->
                                     </div>
                                 </div>
                                <legend>Choose Box content to change</legend>
                                <div class="row">
                                    <div class="col-md-3">
                                        <h4 class="m-t-0">Box 1</h4>
                                        <p>
                                            <img class="media-object superbox-img previewimage" id="footer_image" name="footer_image" src="<?php echo base_url('application/assets/img/login-bg/bg-6.jpg');?>">
                                        </p>    
                                        <div role="form">
                                            <input type="hidden" value="" name="Old_Footer_Img"/>
                                            <input id="filestyle-1" class="filestyle" type="file" name='Footer_Img' onchange="PreviewImage();" data-buttonbefore="true" style="position: absolute; clip: rect(0px, 0px, 0px, 0px);" tabindex="-1">
                                            <div class="bootstrap-filestyle input-group">
                                                <span class="group-span-filestyle input-group-btn" tabindex="0">
                                                    <label id="new" class="btn btn-default" for="filestyle-1">
                                                        <span class="glyphicon glyphicon-folder-open"></span>
                                                        Choose file
                                                    </label>
                                                </span>
                                                <input class="form-control" id="filestyle-2"  value="" type="text" readonly>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <h4>Image Title</h4>
                                        <input class="form-control input-md" name="Email_Id" type="text" value="" placeholder="TYPE YOUR CONTENT TITLE">
                                    </div>
                                    <div class="col-md-3">
                                        <h4 class="m-t-0">Box 2</h4>
                                        <p>
                                            <img class="media-object superbox-img previewimage" id="footer_image" name="footer_image" src="<?php echo base_url('application/assets/img/login-bg/bg-6.jpg');?>">
                                        </p>    
                                        <div role="form">
                                            <input type="hidden" value="" name="Old_Footer_Img"/>
                                            <input id="filestyle-1" class="filestyle" type="file" name='Footer_Img' onchange="PreviewImage();" data-buttonbefore="true" style="position: absolute; clip: rect(0px, 0px, 0px, 0px);" tabindex="-1">
                                            <div class="bootstrap-filestyle input-group">
                                                <span class="group-span-filestyle input-group-btn" tabindex="0">
                                                    <label id="new" class="btn btn-default" for="filestyle-1">
                                                        <span class="glyphicon glyphicon-folder-open"></span>
                                                        Choose file
                                                    </label>
                                                </span>
                                                <input class="form-control" id="filestyle-2"  value="" type="text" readonly>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <h4>Image Title</h4>
                                        <input class="form-control input-md" name="Email_Id" type="text" value="" placeholder="TYPE YOUR CONTENT TITLE">
                                    </div>
                                </div><p></p>
                                <div class="row">
                                    <div class="col-md-6">
                                        <h4>Sub content 1</h4>
                                        <input class="form-control input-md" name="Email_Id" type="text" value="" placeholder="TYPE YOUR CONTENT TITLE">
                                    </div>
                                    <div class="col-md-6">
                                        <h4>Sub content 1</h4>
                                        <input class="form-control input-md" name="Email_Id" type="text" value="" placeholder="TYPE YOUR CONTENT TITLE">
                                    </div>
                                </div><p></p>
                                <div class="row">
                                    <div class="col-md-6">
                                        <h4>Description</h4>
                                        <textarea class="ckeditor textarea form-control  textarea_middle required" name="Footer_Content" rows="5"   placeholder="TYPE YOUR DESCRIPTION"></textarea>
                                    </div>
                                    <div class="col-md-6">
                                        <h4>Description</h4>
                                       <textarea class="ckeditor textarea form-control  textarea_middle required" name="Footer_Content" rows="5"   placeholder="TYPE YOUR DESCRIPTION"></textarea>
                                    </div>
                                </div><p></p>
                                <div class="row">
                                    <div class="col-md-6">
                                        <h4>Sub content 2</h4>
                                        <input class="form-control input-md" name="Email_Id" type="text" value="" placeholder="TYPE YOUR CONTENT TITLE">
                                    </div>
                                    <div class="col-md-6">
                                        <h4>Sub content 2</h4>
                                        <input class="form-control input-md" name="Email_Id" type="text" value="" placeholder="TYPE YOUR CONTENT TITLE">
                                    </div>
                                </div><p></p>
                                 <div class="row">
                                    <div class="col-md-6">
                                        <h4>Description</h4>
                                         <input class="form-control input-md" name="Email_Id" type="text" value="" placeholder="TYPE YOUR CONTENT TITLE">
                                    </div>
                                    <div class="col-md-6">
                                        <h4>Description</h4>
                                        <input class="form-control input-md" name="Email_Id" type="text" value="" placeholder="TYPE YOUR CONTENT TITLE">
                                    </div>
                                </div><p></p><br><br>
                                <div class="row">
                                    <div class="col-md-3">
                                        <h4 class="m-t-0">Box 3</h4>
                                        <p>
                                            <img class="media-object superbox-img previewimage" id="footer_image" name="footer_image" src="<?php echo base_url('application/assets/img/login-bg/bg-6.jpg');?>">
                                        </p>    
                                        <div role="form">
                                            <input type="hidden" value="" name="Old_Footer_Img"/>
                                            <input id="filestyle-1" class="filestyle" type="file" name='Footer_Img' onchange="PreviewImage();" data-buttonbefore="true" style="position: absolute; clip: rect(0px, 0px, 0px, 0px);" tabindex="-1">
                                            <div class="bootstrap-filestyle input-group">
                                                <span class="group-span-filestyle input-group-btn" tabindex="0">
                                                    <label id="new" class="btn btn-default" for="filestyle-1">
                                                        <span class="glyphicon glyphicon-folder-open"></span>
                                                        Choose file
                                                    </label>
                                                </span>
                                                <input class="form-control" id="filestyle-2"  value="" type="text" readonly>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <h4>Image Title</h4>
                                        <input class="form-control input-md" name="Email_Id" type="text" value="" placeholder="TYPE YOUR CONTENT TITLE">
                                    </div>
                                    <div class="col-md-3">
                                        <h4 class="m-t-0">Box 4</h4>
                                        <p>
                                            <img class="media-object superbox-img previewimage" id="footer_image" name="footer_image" src="<?php echo base_url('application/assets/img/login-bg/bg-6.jpg');?>">
                                        </p>    
                                        <div role="form">
                                            <input type="hidden" value="" name="Old_Footer_Img"/>
                                            <input id="filestyle-1" class="filestyle" type="file" name='Footer_Img' onchange="PreviewImage();" data-buttonbefore="true" style="position: absolute; clip: rect(0px, 0px, 0px, 0px);" tabindex="-1">
                                            <div class="bootstrap-filestyle input-group">
                                                <span class="group-span-filestyle input-group-btn" tabindex="0">
                                                    <label id="new" class="btn btn-default" for="filestyle-1">
                                                        <span class="glyphicon glyphicon-folder-open"></span>
                                                        Choose file
                                                    </label>
                                                </span>
                                                <input class="form-control" id="filestyle-2"  value="" type="text" readonly>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <h4>Image Title</h4>
                                        <input class="form-control input-md" name="Email_Id" type="text" value="" placeholder="TYPE YOUR CONTENT TITLE">
                                    </div>
                                </div><p></p>
                                <div class="row">
                                    <div class="col-md-6">
                                        <h4>Sub content 1</h4>
                                        <input class="form-control input-md" name="Email_Id" type="text" value="" placeholder="TYPE YOUR CONTENT TITLE">
                                    </div>
                                    <div class="col-md-6">
                                        <h4>Sub content 1</h4>
                                        <input class="form-control input-md" name="Email_Id" type="text" value="" placeholder="TYPE YOUR CONTENT TITLE">
                                    </div>
                                </div><p></p>
                                <div class="row">
                                    <div class="col-md-6">
                                        <h4>Description</h4>
                                        <textarea class="ckeditor textarea form-control  textarea_middle required" name="Footer_Content" rows="5"   placeholder="TYPE YOUR DESCRIPTION"></textarea>
                                    </div>
                                    <div class="col-md-6">
                                        <h4>Description</h4>
                                       <textarea class="ckeditor textarea form-control  textarea_middle required" name="Footer_Content" rows="5"   placeholder="TYPE YOUR DESCRIPTION"></textarea>
                                    </div>
                                </div><p></p>
                                <div class="row">
                                    <div class="col-md-6">
                                        <h4>Sub content 2</h4>
                                        <input class="form-control input-md" name="Email_Id" type="text" value="" placeholder="TYPE YOUR CONTENT TITLE">
                                    </div>
                                    <div class="col-md-6">
                                        <h4>Sub content 2</h4>
                                        <input class="form-control input-md" name="Email_Id" type="text" value="" placeholder="TYPE YOUR CONTENT TITLE">
                                    </div>
                                </div><p></p>
                                <div class="row">
                                    <div class="col-md-6">
                                        <h4>Description</h4>
                                         <input class="form-control input-md" name="Email_Id" type="text" value="" placeholder="TYPE YOUR CONTENT TITLE">
                                    </div>
                                    <div class="col-md-6">
                                        <h4>Description</h4>
                                        <input class="form-control input-md" name="Email_Id" type="text" value="" placeholder="TYPE YOUR CONTENT TITLE">
                                    </div>
                                </div><p></p><br><br>
                                <div class="row">
                                    <div class="col-md-3">
                                        <h4 class="m-t-0">Box 5</h4>
                                        <p>
                                            <img class="media-object superbox-img previewimage" id="footer_image" name="footer_image" src="<?php echo base_url('application/assets/img/login-bg/bg-6.jpg');?>">
                                        </p>    
                                        <div role="form">
                                            <input type="hidden" value="" name="Old_Footer_Img"/>
                                            <input id="filestyle-1" class="filestyle" type="file" name='Footer_Img' onchange="PreviewImage();" data-buttonbefore="true" style="position: absolute; clip: rect(0px, 0px, 0px, 0px);" tabindex="-1">
                                            <div class="bootstrap-filestyle input-group">
                                                <span class="group-span-filestyle input-group-btn" tabindex="0">
                                                    <label id="new" class="btn btn-default" for="filestyle-1">
                                                        <span class="glyphicon glyphicon-folder-open"></span>
                                                        Choose file
                                                    </label>
                                                </span>
                                                <input class="form-control" id="filestyle-2"  value="" type="text" readonly>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <h4>Image Title</h4>
                                        <input class="form-control input-md" name="Email_Id" type="text" value="" placeholder="TYPE YOUR CONTENT TITLE">
                                    </div>
                                    <div class="col-md-3">
                                        <h4 class="m-t-0">Box 6</h4>
                                        <p>
                                            <img class="media-object superbox-img previewimage" id="footer_image" name="footer_image" src="<?php echo base_url('application/assets/img/login-bg/bg-6.jpg');?>">
                                        </p>    
                                        <div role="form">
                                            <input type="hidden" value="" name="Old_Footer_Img"/>
                                            <input id="filestyle-1" class="filestyle" type="file" name='Footer_Img' onchange="PreviewImage();" data-buttonbefore="true" style="position: absolute; clip: rect(0px, 0px, 0px, 0px);" tabindex="-1">
                                            <div class="bootstrap-filestyle input-group">
                                                <span class="group-span-filestyle input-group-btn" tabindex="0">
                                                    <label id="new" class="btn btn-default" for="filestyle-1">
                                                        <span class="glyphicon glyphicon-folder-open"></span>
                                                        Choose file
                                                    </label>
                                                </span>
                                                <input class="form-control" id="filestyle-2"  value="" type="text" readonly>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <h4>Image Title</h4>
                                        <input class="form-control input-md" name="Email_Id" type="text" value="" placeholder="TYPE YOUR CONTENT TITLE">
                                    </div>
                                </div><p></p>
                                <div class="row">
                                    <div class="col-md-6">
                                        <h4>Sub content 1</h4>
                                        <input class="form-control input-md" name="Email_Id" type="text" value="" placeholder="TYPE YOUR CONTENT TITLE">
                                    </div>
                                    <div class="col-md-6">
                                        <h4>Sub content 1</h4>
                                        <input class="form-control input-md" name="Email_Id" type="text" value="" placeholder="TYPE YOUR CONTENT TITLE">
                                    </div>
                                </div><p></p>
                                <div class="row">
                                    <div class="col-md-6">
                                        <h4>Description</h4>
                                        <textarea class="ckeditor textarea form-control  textarea_middle required" name="Footer_Content" rows="5"   placeholder="TYPE YOUR DESCRIPTION"></textarea>
                                    </div>
                                    <div class="col-md-6">
                                        <h4>Description</h4>
                                       <textarea class="ckeditor textarea form-control  textarea_middle required" name="Footer_Content" rows="5"   placeholder="TYPE YOUR DESCRIPTION"></textarea>
                                    </div>
                                </div><p></p>
                                <div class="row">
                                    <div class="col-md-6">
                                        <h4>Sub content 2</h4>
                                        <input class="form-control input-md" name="Email_Id" type="text" value="" placeholder="TYPE YOUR CONTENT TITLE">
                                    </div>
                                    <div class="col-md-6">
                                        <h4>Sub content 2</h4>
                                        <input class="form-control input-md" name="Email_Id" type="text" value="" placeholder="TYPE YOUR CONTENT TITLE">
                                    </div>
                                </div><p></p>
                                <div class="row">
                                    <div class="col-md-6">
                                        <h4>Description</h4>
                                         <input class="form-control input-md" name="Email_Id" type="text" value="" placeholder="TYPE YOUR CONTENT TITLE">
                                    </div>
                                    <div class="col-md-6">
                                        <h4>Description</h4>
                                        <input class="form-control input-md" name="Email_Id" type="text" value="" placeholder="TYPE YOUR CONTENT TITLE">
                                    </div>
                                </div><p></p><BR><BR>
                                <legend>Choose Second Content to change</legend>
                                <div class="row">
                                    <div class="col-md-4">
                                        <p>
                                        <h4 class="m-t-0">Image 1</h4>
                                        <img class="media-object superbox-img previewimage" id="email_image" name="footer_image" src="<?php echo base_url('application/assets/img/login-bg/bg-6.jpg');?>">
                                        </p>
                                        <div role="form">
                                            <input type="hidden" value="" name="Old_Email_Img"/>
                                            <input id="filestyle-1" class="filestyle" type="file" name='Email_Img' onchange="PreviewImage();" data-buttonbefore="true" style="position: absolute; clip: rect(0px, 0px, 0px, 0px);" tabindex="-1">
                                            <div class="bootstrap-filestyle input-group">
                                                <span class="group-span-filestyle input-group-btn" tabindex="0">
                                                    <label id="new" class="btn btn-default" for="filestyle-1">
                                                        <span class="glyphicon glyphicon-folder-open"></span>
                                                        Choose file
                                                    </label>
                                                </span>
                                                <input class="form-control" id="filestyle-2"  value="" type="text" readonly>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <p>
                                        <h4 class="m-t-0">Image 2</h4>
                                        <img class="media-object superbox-img previewimage" id="email_image" name="footer_image" src="<?php echo base_url('application/assets/img/login-bg/bg-6.jpg');?>">
                                        </p>
                                        <div role="form">
                                            <input type="hidden" value="" name="Old_Email_Img"/>
                                            <input id="filestyle-1" class="filestyle" type="file" name='Email_Img' onchange="PreviewImage();" data-buttonbefore="true" style="position: absolute; clip: rect(0px, 0px, 0px, 0px);" tabindex="-1">
                                            <div class="bootstrap-filestyle input-group">
                                                <span class="group-span-filestyle input-group-btn" tabindex="0">
                                                    <label id="new" class="btn btn-default" for="filestyle-1">
                                                        <span class="glyphicon glyphicon-folder-open"></span>
                                                        Choose file
                                                    </label>
                                                </span>
                                                <input class="form-control" id="filestyle-2"  value="" type="text" readonly>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <p>
                                        <h4 class="m-t-0">Image 3</h4>
                                        <img class="media-object superbox-img previewimage" id="email_image" name="footer_image" src="<?php echo base_url('application/assets/img/login-bg/bg-6.jpg');?>">
                                        </p>
                                        <div role="form">
                                            <input type="hidden" value="" name="Old_Email_Img"/>
                                            <input id="filestyle-1" class="filestyle" type="file" name='Email_Img' onchange="PreviewImage();" data-buttonbefore="true" style="position: absolute; clip: rect(0px, 0px, 0px, 0px);" tabindex="-1">
                                            <div class="bootstrap-filestyle input-group">
                                                <span class="group-span-filestyle input-group-btn" tabindex="0">
                                                    <label id="new" class="btn btn-default" for="filestyle-1">
                                                        <span class="glyphicon glyphicon-folder-open"></span>
                                                        Choose file
                                                    </label>
                                                </span>
                                                <input class="form-control" id="filestyle-2"  value="" type="text" readonly>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <h4>Title 1</h4>
                                       <input class="form-control input-md" name="Email_Id" type="text" value="" placeholder="TYPE YOUR TITLE">
                                    </div>
                                     <div class="col-md-4">
                                        <h4>Title 2</h4>
                                       <input class="form-control input-md" name="Email_Id" type="text" value="" placeholder="TYPE YOUR TITLE">
                                    </div>
                                    <div class="col-md-4">
                                        <h4>Title 3</h4>
                                       <input class="form-control input-md" name="Email_Id" type="text" value="" placeholder="TYPE YOUR TITLE">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <p></p>
                                        <h4 class="m-t-0">Description 1</h4>
                                        <textarea class="ckeditor textarea form-control  textarea_middle required" name="Footer_Content" rows="5"   placeholder="TYPE YOUR OWN DESCRIPTION"></textarea>
                                    </div>
                                    <div class="col-md-4">
                                        <p></p>
                                        <h4 class="m-t-0">Description 2</h4>
                                        <textarea class="ckeditor textarea form-control  textarea_middle required" name="Footer_Content" rows="5"   placeholder="TYPE YOUR OWN DESCRIPTION"></textarea>
                                     </div>
                                    <div class="col-md-4">
                                        <p></p>
                                        <h4 class="m-t-0">Description 3</h4>
                                        <textarea class="ckeditor textarea form-control  textarea_middle required" name="Footer_Content" rows="5"   placeholder="TYPE YOUR OWN DESCRIPTION"></textarea>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <p>
                                        <h4 class="m-t-0">Button Image</h4>
                                        <img class="media-object superbox-img previewimage" id="email_image" name="footer_image" src="<?php echo base_url('application/assets/img/login-bg/bg-6.jpg');?>">
                                        </p>
                                        <div role="form">
                                            <input type="hidden" value="" name="Old_Email_Img"/>
                                            <input id="filestyle-1" class="filestyle" type="file" name='Email_Img' onchange="PreviewImage();" data-buttonbefore="true" style="position: absolute; clip: rect(0px, 0px, 0px, 0px);" tabindex="-1">
                                            <div class="bootstrap-filestyle input-group">
                                                <span class="group-span-filestyle input-group-btn" tabindex="0">
                                                    <label id="new" class="btn btn-default" for="filestyle-1">
                                                        <span class="glyphicon glyphicon-folder-open"></span>
                                                        Choose file
                                                    </label>
                                                </span>
                                                <input class="form-control" id="filestyle-2"  value="" type="text" readonly>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                    	<div class="row">
                                    		<div class="col-md-12">
		                                        <p></p>
		                                        <h4 class="m-t-0">Button title</h4>
		                                        <input class="form-control input-md" name="Email_Id" type="text" value="" placeholder="TYPE YOUR BUTTON TITLE">	
	                                        </div>
                                        </div>
                                        <div class="row">
                                    		<div class="col-md-12">
		                                        <p></p>
		                                        <h4 class="m-t-0">Link name</h4>
		                                        <input class="form-control input-md" name="Email_Id" type="text" value="" placeholder="TYPE YOUR LINK">	
	                                        </div>
                                        </div>
                                    </div>
                                </div><p></p><br><br>
                                <legend>Choose Third Content to change</legend>
                                <div class="row">
                                    <div class="col-md-3">
                                        <p></p>
                                        <h4 class="m-t-0">Sub-content Title 1</h4>
                                        <input class="form-control input-md" name="Email_Id" type="text" value="" placeholder="TYPE YOUR SUB-CONTNET">
                                    </div>
                                    <div class="col-md-3">
                                        <p></p>
                                        <h4 class="m-t-0">Description</h4>
                                        <input class="form-control input-md" name="Email_Id" type="text" value="" placeholder="TYPE YOUR DESCRIPTION">
                                    </div>
                                    <div class="col-md-3">
                                        <p></p>
                                        <h4 class="m-t-0">Sub-content Title 2</h4>
                                        <input class="form-control input-md" name="Email_Id" type="text" value="" placeholder="TYPE YOUR SUB-CONTNET">
                                    </div>
                                    <div class="col-md-3">
                                        <p></p>
                                        <h4 class="m-t-0">Description</h4>
                                        <input class="form-control input-md" name="Email_Id" type="text" value="" placeholder="TYPE YOUR DESCRIPTION">
                                    </div>
                                 </div>
                                 <div class="row">
                                  	<div class="col-md-3">
                                        <p></p>
                                        <h4 class="m-t-0">Sub-content Title 3</h4>
                                        <input class="form-control input-md" name="Email_Id" type="text" value="" placeholder="TYPE YOUR SUB-CONTNET">
                                    </div>
                                    <div class="col-md-3">
                                        <p></p>
                                        <h4 class="m-t-0">Description</h4>
                                        <input class="form-control input-md" name="Email_Id" type="text" value="" placeholder="TYPE YOUR DESCRIPTION">
                                    </div>
                                    <div class="col-md-3">
                                        <p></p>
                                        <h4 class="m-t-0">Sub-content Title 4</h4>
                                        <input class="form-control input-md" name="Email_Id" type="text" value="" placeholder="TYPE YOUR SUB-CONTNET">
                                    </div>
                                    <div class="col-md-3">
                                        <p></p>
                                        <h4 class="m-t-0">Description</h4>
                                        <input class="form-control input-md" name="Email_Id" type="text" value="" placeholder="TYPE YOUR DESCRIPTION">
                                    </div>
                                </div><p></p><br><br>
                                <legend>Choose fourth content to change </legend>
                                <div class="row">
                                	<div class="col-md-4">
	                                    <h4>Title</h4>
	                                    <input class="form-control input-md" name="Email_Id" type="text" value="" placeholder="TYPE YOUR TITLE">
                                    </div>
                                </div><p></p>
                                <div class="row">
                                    <div class="col-md-4">
                                        <p>
                                        <h4 class="m-t-0">Image 1</h4>
                                        <img class="media-object superbox-img previewimage" id="email_image" name="footer_image" src="<?php echo base_url('application/assets/img/login-bg/bg-6.jpg');?>">
                                        </p>
                                        <div role="form">
                                            <input type="hidden" value="" name="Old_Email_Img"/>
                                            <input id="filestyle-1" class="filestyle" type="file" name='Email_Img' onchange="PreviewImage();" data-buttonbefore="true" style="position: absolute; clip: rect(0px, 0px, 0px, 0px);" tabindex="-1">
                                            <div class="bootstrap-filestyle input-group">
                                                <span class="group-span-filestyle input-group-btn" tabindex="0">
                                                    <label id="new" class="btn btn-default" for="filestyle-1">
                                                        <span class="glyphicon glyphicon-folder-open"></span>
                                                        Choose file
                                                    </label>
                                                </span>
                                                <input class="form-control" id="filestyle-2"  value="" type="text" readonly>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <p>
                                        <h4 class="m-t-0">Image 2</h4>
                                        <img class="media-object superbox-img previewimage" id="email_image" name="footer_image" src="<?php echo base_url('application/assets/img/login-bg/bg-6.jpg');?>">
                                        </p>
                                        <div role="form">
                                            <input type="hidden" value="" name="Old_Email_Img"/>
                                            <input id="filestyle-1" class="filestyle" type="file" name='Email_Img' onchange="PreviewImage();" data-buttonbefore="true" style="position: absolute; clip: rect(0px, 0px, 0px, 0px);" tabindex="-1">
                                            <div class="bootstrap-filestyle input-group">
                                                <span class="group-span-filestyle input-group-btn" tabindex="0">
                                                    <label id="new" class="btn btn-default" for="filestyle-1">
                                                        <span class="glyphicon glyphicon-folder-open"></span>
                                                        Choose file
                                                    </label>
                                                </span>
                                                <input class="form-control" id="filestyle-2"  value="" type="text" readonly>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <p>
                                        <h4 class="m-t-0">Image 3</h4>
                                        <img class="media-object superbox-img previewimage" id="email_image" name="footer_image" src="<?php echo base_url('application/assets/img/login-bg/bg-6.jpg');?>">
                                        </p>
                                        <div role="form">
                                            <input type="hidden" value="" name="Old_Email_Img"/>
                                            <input id="filestyle-1" class="filestyle" type="file" name='Email_Img' onchange="PreviewImage();" data-buttonbefore="true" style="position: absolute; clip: rect(0px, 0px, 0px, 0px);" tabindex="-1">
                                            <div class="bootstrap-filestyle input-group">
                                                <span class="group-span-filestyle input-group-btn" tabindex="0">
                                                    <label id="new" class="btn btn-default" for="filestyle-1">
                                                        <span class="glyphicon glyphicon-folder-open"></span>
                                                        Choose file
                                                    </label>
                                                </span>
                                                <input class="form-control" id="filestyle-2"  value="" type="text" readonly>
                                            </div>
                                        </div>
                                    </div>
                                </div><p></p>
                                <div class="row">
                                    <div class="col-md-4">
                                            <p>
                                            <h4 class="m-t-0">Image 4</h4>
                                            <img class="media-object superbox-img previewimage" id="email_image" name="footer_image" src="<?php echo base_url('application/assets/img/login-bg/bg-6.jpg');?>">
                                            </p>
                                            <div role="form">
                                                <input type="hidden" value="" name="Old_Email_Img"/>
                                                <input id="filestyle-1" class="filestyle" type="file" name='Email_Img' onchange="PreviewImage();" data-buttonbefore="true" style="position: absolute; clip: rect(0px, 0px, 0px, 0px);" tabindex="-1">
                                                <div class="bootstrap-filestyle input-group">
                                                    <span class="group-span-filestyle input-group-btn" tabindex="0">
                                                        <label id="new" class="btn btn-default" for="filestyle-1">
                                                            <span class="glyphicon glyphicon-folder-open"></span>
                                                            Choose file
                                                        </label>
                                                    </span>
                                                    <input class="form-control" id="filestyle-2"  value="" type="text" readonly>
                                                </div>
                                            </div>
                                    </div>
                                    <div class="col-md-4">
                                            <p>
                                            <h4 class="m-t-0">Image 5</h4>
                                            <img class="media-object superbox-img previewimage" id="email_image" name="footer_image" src="<?php echo base_url('application/assets/img/login-bg/bg-6.jpg');?>">
                                            </p>
                                            <div role="form">
                                                <input type="hidden" value="" name="Old_Email_Img"/>
                                                <input id="filestyle-1" class="filestyle" type="file" name='Email_Img' onchange="PreviewImage();" data-buttonbefore="true" style="position: absolute; clip: rect(0px, 0px, 0px, 0px);" tabindex="-1">
                                                <div class="bootstrap-filestyle input-group">
                                                    <span class="group-span-filestyle input-group-btn" tabindex="0">
                                                        <label id="new" class="btn btn-default" for="filestyle-1">
                                                            <span class="glyphicon glyphicon-folder-open"></span>
                                                            Choose file
                                                        </label>
                                                    </span>
                                                    <input class="form-control" id="filestyle-2"  value="" type="text" readonly>
                                                </div>
                                            </div>
                                    </div>
                                    <div class="col-md-4">
                                        <p>
                                        <h4 class="m-t-0">Image 6</h4>
                                        <img class="media-object superbox-img previewimage" id="email_image" name="footer_image" src="<?php echo base_url('application/assets/img/login-bg/bg-6.jpg');?>">
                                        </p>
                                        <div role="form">
                                            <input type="hidden" value="" name="Old_Email_Img"/>
                                            <input id="filestyle-1" class="filestyle" type="file" name='Email_Img' onchange="PreviewImage();" data-buttonbefore="true" style="position: absolute; clip: rect(0px, 0px, 0px, 0px);" tabindex="-1">
                                            <div class="bootstrap-filestyle input-group">
                                                <span class="group-span-filestyle input-group-btn" tabindex="0">
                                                    <label id="new" class="btn btn-default" for="filestyle-1">
                                                        <span class="glyphicon glyphicon-folder-open"></span>
                                                        Choose file
                                                    </label>
                                                </span>
                                                <input class="form-control" id="filestyle-2"  value="" type="text" readonly>
                                            </div>
                                        </div>
                                    </div>
                                </div><p></p><br><br>
                                <legend>Choose fifth content to change </legend>
                                 <div class="row">
                                	<div class="col-md-4">
	                                    <h4>Title</h4>
	                                    <input class="form-control input-md" name="Email_Id" type="text" value="" placeholder="TYPE YOUR TITLE">
                                    </div>
                                </div><p></p>
                                <div class="row">
                                	<div class="col-md-12">
                                        <p></p>
                                        <h4 class="m-t-0">Description</h4>
                                        <textarea class="ckeditor textarea form-control  textarea_middle required" name="Footer_Content" rows="5"   placeholder="TYPE YOUR DESCRIPTION"></textarea>
                                    </div>
                                </div><p></p>

                                <div class="row">
	                                <div class="col-md-4">
	                                	<p>
                                        <h4 class="m-t-0">Sub-Content First Image</h4>
                                        <img class="media-object superbox-img previewimage" id="email_image" name="footer_image" src="<?php echo base_url('application/assets/img/login-bg/bg-6.jpg');?>">
                                        </p>
                                        <div role="form">
                                            <input type="hidden" value="" name="Old_Email_Img"/>
                                            <input id="filestyle-1" class="filestyle" type="file" name='Email_Img' onchange="PreviewImage();" data-buttonbefore="true" style="position: absolute; clip: rect(0px, 0px, 0px, 0px);" tabindex="-1">
                                            <div class="bootstrap-filestyle input-group">
                                                <span class="group-span-filestyle input-group-btn" tabindex="0">
                                                    <label id="new" class="btn btn-default" for="filestyle-1">
                                                        <span class="glyphicon glyphicon-folder-open"></span>
                                                        Choose file
                                                    </label>
                                                </span>
                                                <input class="form-control" id="filestyle-2"  value="" type="text" readonly>
                                            </div>
                                        </div>
                                     </div>
                                      <div class="col-md-4">
	                                	<p>
                                        <h4 class="m-t-0">Sub-Content Second Image</h4>
                                        <img class="media-object superbox-img previewimage" id="email_image" name="footer_image" src="<?php echo base_url('application/assets/img/login-bg/bg-6.jpg');?>">
                                        </p>
                                        <div role="form">
                                            <input type="hidden" value="" name="Old_Email_Img"/>
                                            <input id="filestyle-1" class="filestyle" type="file" name='Email_Img' onchange="PreviewImage();" data-buttonbefore="true" style="position: absolute; clip: rect(0px, 0px, 0px, 0px);" tabindex="-1">
                                            <div class="bootstrap-filestyle input-group">
                                                <span class="group-span-filestyle input-group-btn" tabindex="0">
                                                    <label id="new" class="btn btn-default" for="filestyle-1">
                                                        <span class="glyphicon glyphicon-folder-open"></span>
                                                        Choose file
                                                    </label>
                                                </span>
                                                <input class="form-control" id="filestyle-2"  value="" type="text" readonly>
                                            </div>
                                        </div>
                                      </div>
                                      <div class="col-md-4">
	                                	<p>
                                        <h4 class="m-t-0">Sub-Content Third Image</h4>
                                        <img class="media-object superbox-img previewimage" id="email_image" name="footer_image" src="<?php echo base_url('application/assets/img/login-bg/bg-6.jpg');?>">
                                        </p>
                                        <div role="form">
                                            <input type="hidden" value="" name="Old_Email_Img"/>
                                            <input id="filestyle-1" class="filestyle" type="file" name='Email_Img' onchange="PreviewImage();" data-buttonbefore="true" style="position: absolute; clip: rect(0px, 0px, 0px, 0px);" tabindex="-1">
                                            <div class="bootstrap-filestyle input-group">
                                                <span class="group-span-filestyle input-group-btn" tabindex="0">
                                                    <label id="new" class="btn btn-default" for="filestyle-1">
                                                        <span class="glyphicon glyphicon-folder-open"></span>
                                                        Choose file
                                                    </label>
                                                </span>
                                                <input class="form-control" id="filestyle-2"  value="" type="text" readonly>
                                            </div>
                                        </div>
                                      </div>
                                </div><p></p>
                                <div class="row">
                                	 <div class="col-md-4">
                                        <p></p>
                                        <h4 class="m-t-0">Title</h4>
                                        <input class="form-control input-md" name="Email_Id" type="text" value="" placeholder="TYPE YOUR TITLE">
                                    </div>
                                    <div class="col-md-4">
                                        <p></p>
                                        <h4 class="m-t-0">Title</h4>
                                        <input class="form-control input-md" name="Email_Id" type="text" value="" placeholder="TYPE YOUR TITLE">
                                    </div>
                                    <div class="col-md-4">
                                        <p></p>
                                        <h4 class="m-t-0">Title</h4>
                                        <input class="form-control input-md" name="Email_Id" type="text" value="" placeholder="TYPE YOUR TITLE">
                                    </div>
                                </div><p></p>
                                <div class="row">
                                	 <div class="col-md-4">
                                        <p></p>
                                        <h4 class="m-t-0">Description</h4>
                                        <textarea class="ckeditor textarea form-control  textarea_middle required" name="Footer_Content" rows="5"   placeholder="TYPE YOUR DESCRIPTION"></textarea>
                                    </div>
                                    <div class="col-md-4">
                                        <p></p>
                                        <h4 class="m-t-0">Description</h4>
                                        <textarea class="ckeditor textarea form-control  textarea_middle required" name="Footer_Content" rows="5"   placeholder="TYPE YOUR DESCRIPTION"></textarea>
                                     </div>
                                    <div class="col-md-4">
                                        <p></p>
                                        <h4 class="m-t-0">Description</h4>
                                        <textarea class="ckeditor textarea form-control  textarea_middle required" name="Footer_Content" rows="5"   placeholder="TYPE YOUR DESCRIPTION"></textarea>
                                    </div>
                                </div>
                                 <div class="row">
                                    <div class="col-md-4">
                                        <p>
                                        <h4 class="m-t-0">Button Image</h4>
                                        <img class="media-object superbox-img previewimage" id="email_image" name="footer_image" src="<?php echo base_url('application/assets/img/login-bg/bg-6.jpg');?>">
                                        </p>
                                        <div role="form">
                                            <input type="hidden" value="" name="Old_Email_Img"/>
                                            <input id="filestyle-1" class="filestyle" type="file" name='Email_Img' onchange="PreviewImage();" data-buttonbefore="true" style="position: absolute; clip: rect(0px, 0px, 0px, 0px);" tabindex="-1">
                                            <div class="bootstrap-filestyle input-group">
                                                <span class="group-span-filestyle input-group-btn" tabindex="0">
                                                    <label id="new" class="btn btn-default" for="filestyle-1">
                                                        <span class="glyphicon glyphicon-folder-open"></span>
                                                        Choose file
                                                    </label>
                                                </span>
                                                <input class="form-control" id="filestyle-2"  value="" type="text" readonly>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <p></p>
                                                <h4 class="m-t-0">Button title</h4>
                                                <input class="form-control input-md" name="Email_Id" type="text" value="" placeholder="TYPE YOUR BUTTON TITLE">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <p></p>
                                                <h4 class="m-t-0">Button link</h4>
                                                <input class="form-control input-md" name="Email_Id" type="text" value="" placeholder="TYPE YOUR BUTTON LINK">
                                            </div>
                                        </div>
                                    </div>
                                </div><p></p><br><br>
                                <legend>Choose Sixth content to change </legend>
                                 <div class="row">
	                                <div class="col-md-3">
	                                	<p>
                                        <h4 class="m-t-0">Sub-Content First Image</h4>
                                        <img class="media-object superbox-img previewimage" id="email_image" name="footer_image" src="<?php echo base_url('application/assets/img/login-bg/bg-6.jpg');?>">
                                        </p>
                                        <div role="form">
                                            <input type="hidden" value="" name="Old_Email_Img"/>
                                            <input id="filestyle-1" class="filestyle" type="file" name='Email_Img' onchange="PreviewImage();" data-buttonbefore="true" style="position: absolute; clip: rect(0px, 0px, 0px, 0px);" tabindex="-1">
                                            <div class="bootstrap-filestyle input-group">
                                                <span class="group-span-filestyle input-group-btn" tabindex="0">
                                                    <label id="new" class="btn btn-default" for="filestyle-1">
                                                        <span class="glyphicon glyphicon-folder-open"></span>
                                                        Choose file
                                                    </label>
                                                </span>
                                                <input class="form-control" id="filestyle-2"  value="" type="text" readonly>
                                            </div>
                                        </div>
                                     </div>
                                      <div class="col-md-3">
	                                	<p>
                                        <h4 class="m-t-0">Sub-Content Second Image</h4>
                                        <img class="media-object superbox-img previewimage" id="email_image" name="footer_image" src="<?php echo base_url('application/assets/img/login-bg/bg-6.jpg');?>">
                                        </p>
                                        <div role="form">
                                            <input type="hidden" value="" name="Old_Email_Img"/>
                                            <input id="filestyle-1" class="filestyle" type="file" name='Email_Img' onchange="PreviewImage();" data-buttonbefore="true" style="position: absolute; clip: rect(0px, 0px, 0px, 0px);" tabindex="-1">
                                            <div class="bootstrap-filestyle input-group">
                                                <span class="group-span-filestyle input-group-btn" tabindex="0">
                                                    <label id="new" class="btn btn-default" for="filestyle-1">
                                                        <span class="glyphicon glyphicon-folder-open"></span>
                                                        Choose file
                                                    </label>
                                                </span>
                                                <input class="form-control" id="filestyle-2"  value="" type="text" readonly>
                                            </div>
                                        </div>
                                      </div>
                                      <div class="col-md-3">
	                                	<p>
                                        <h4 class="m-t-0">Sub-Content Third Image</h4>
                                        <img class="media-object superbox-img previewimage" id="email_image" name="footer_image" src="<?php echo base_url('application/assets/img/login-bg/bg-6.jpg');?>">
                                        </p>
                                        <div role="form">
                                            <input type="hidden" value="" name="Old_Email_Img"/>
                                            <input id="filestyle-1" class="filestyle" type="file" name='Email_Img' onchange="PreviewImage();" data-buttonbefore="true" style="position: absolute; clip: rect(0px, 0px, 0px, 0px);" tabindex="-1">
                                            <div class="bootstrap-filestyle input-group">
                                                <span class="group-span-filestyle input-group-btn" tabindex="0">
                                                    <label id="new" class="btn btn-default" for="filestyle-1">
                                                        <span class="glyphicon glyphicon-folder-open"></span>
                                                        Choose file
                                                    </label>
                                                </span>
                                                <input class="form-control" id="filestyle-2"  value="" type="text" readonly>
                                            </div>
                                        </div>
                                      </div>
                                      <div class="col-md-3">
	                                	<p>
                                        <h4 class="m-t-0">Sub-Content Fourth Image</h4>
                                        <img class="media-object superbox-img previewimage" id="email_image" name="footer_image" src="<?php echo base_url('application/assets/img/login-bg/bg-6.jpg');?>">
                                        </p>
                                        <div role="form">
                                            <input type="hidden" value="" name="Old_Email_Img"/>
                                            <input id="filestyle-1" class="filestyle" type="file" name='Email_Img' onchange="PreviewImage();" data-buttonbefore="true" style="position: absolute; clip: rect(0px, 0px, 0px, 0px);" tabindex="-1">
                                            <div class="bootstrap-filestyle input-group">
                                                <span class="group-span-filestyle input-group-btn" tabindex="0">
                                                    <label id="new" class="btn btn-default" for="filestyle-1">
                                                        <span class="glyphicon glyphicon-folder-open"></span>
                                                        Choose file
                                                    </label>
                                                </span>
                                                <input class="form-control" id="filestyle-2"  value="" type="text" readonly>
                                            </div>
                                        </div>
                                      </div>
                                 </div><p></p>
                                <div class="row">
                                	 <div class="col-md-3">
                                        <p></p>
                                        <h4 class="m-t-0">Title</h4>
                                        <input class="form-control input-md" name="Email_Id" type="text" value="" placeholder="TYPE YOUR TITLE">
                                    </div>
                                    <div class="col-md-3">
                                        <p></p>
                                        <h4 class="m-t-0">Title</h4>
                                        <input class="form-control input-md" name="Email_Id" type="text" value="" placeholder="TYPE YOUR TITLE">
                                    </div>
                                    <div class="col-md-3">
                                        <p></p>
                                        <h4 class="m-t-0">Title</h4>
                                        <input class="form-control input-md" name="Email_Id" type="text" value="" placeholder="TYPE YOUR TITLE">
                                    </div>
                                    <div class="col-md-3">
                                        <p></p>
                                        <h4 class="m-t-0">Title</h4>
                                        <input class="form-control input-md" name="Email_Id" type="text" value="" placeholder="TYPE YOUR TITLE">
                                    </div>
                                </div><p></p>
                                <div class="row">
                                	 <div class="col-md-3">
                                        <p></p>
                                        <h4 class="m-t-0">Description</h4>
                                        <input class="form-control input-md" name="Email_Id" type="text" value="" placeholder="TYPE YOUR DESCRIPTION">
                                    </div>
                                    <div class="col-md-3">
                                        <p></p>
                                        <h4 class="m-t-0">Description</h4>
                                        <input class="form-control input-md" name="Email_Id" type="text" value="" placeholder="TYPE YOUR DESCRIPTION
                                        ">
                                    </div>
                                    <div class="col-md-3">
                                        <p></p>
                                        <h4 class="m-t-0">Description</h4>
                                        <input class="form-control input-md" name="Email_Id" type="text" value="" placeholder="TYPE YOUR DESCRIPTION">
                                    </div>
                                    <div class="col-md-3">
                                        <p></p>
                                        <h4 class="m-t-0">Description</h4>
                                        <input class="form-control input-md" name="Email_Id" type="text" value="" placeholder="TYPE YOUR DESCRIPTION">
                                    </div>
                                </div><p></p>
                                 <div class="row">
                                	 <div class="col-md-3">
                                        <p></p>
                                        <h4 class="m-t-0">Link</h4>
                                        <input class="form-control input-md" name="Email_Id" type="text" value="" placeholder="TYPE YOUR DESCRIPTION">
                                    </div>
                                    <div class="col-md-3">
                                        <p></p>
                                        <h4 class="m-t-0">Link</h4>
                                        <input class="form-control input-md" name="Email_Id" type="text" value="" placeholder="TYPE YOUR LINK">
                                    </div>
                                    <div class="col-md-3">
                                        <p></p>
                                        <h4 class="m-t-0">Link</h4>
                                        <input class="form-control input-md" name="Email_Id" type="text" value="" placeholder="TYPE YOUR LINK">
                                    </div>
                                    <div class="col-md-3">
                                        <p></p>
                                        <h4 class="m-t-0">Link</h4>
                                        <input class="form-control input-md" name="Email_Id" type="text" value="" placeholder="TYPE YOUR LINK">
                                    </div>
                                </div><p></p>
                                <div class="row">
                                    <div class="col-md-4">
                                        <p>
                                        <h4 class="m-t-0">Button Image</h4>
                                        <img class="media-object superbox-img previewimage" id="email_image" name="footer_image" src="<?php echo base_url('application/assets/img/login-bg/bg-6.jpg');?>">
                                        </p>
                                        <div role="form">
                                            <input type="hidden" value="" name="Old_Email_Img"/>
                                            <input id="filestyle-1" class="filestyle" type="file" name='Email_Img' onchange="PreviewImage();" data-buttonbefore="true" style="position: absolute; clip: rect(0px, 0px, 0px, 0px);" tabindex="-1">
                                            <div class="bootstrap-filestyle input-group">
                                                <span class="group-span-filestyle input-group-btn" tabindex="0">
                                                    <label id="new" class="btn btn-default" for="filestyle-1">
                                                        <span class="glyphicon glyphicon-folder-open"></span>
                                                        Choose file
                                                    </label>
                                                </span>
                                                <input class="form-control" id="filestyle-2"  value="" type="text" readonly>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <p></p>
                                                <h4 class="m-t-0">Button title</h4>
                                                <input class="form-control input-md" name="Email_Id" type="text" value="" placeholder="TYPE YOUR BUTTON TITLE">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <p></p>
                                                <h4 class="m-t-0">Button link</h4>
                                                <input class="form-control input-md" name="Email_Id" type="text" value="" placeholder="TYPE YOUR BUTTON LINK">
                                            </div>
                                        </div>
                                    </div>
                                </div><p></p>
                                <br><br>
                                <legend>Choose Seventh content to change </legend>
                                <div class="row">
                                	<div class="col-md-4">
                                        <p></p>
                                        <h4 class="m-t-0">Title</h4>
                                        <input class="form-control input-md" name="Email_Id" type="text" value="" placeholder="TYPE YOUR TITLE">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <p>
                                        <h4 class="m-t-0">Image</h4>
                                        <img class="media-object superbox-img previewimage" id="email_image" name="footer_image" src="<?php echo base_url('application/assets/img/login-bg/bg-6.jpg');?>">
                                        </p>
                                        <div role="form">
                                            <input type="hidden" value="" name="Old_Email_Img"/>
                                            <input id="filestyle-1" class="filestyle" type="file" name='Email_Img' onchange="PreviewImage();" data-buttonbefore="true" style="position: absolute; clip: rect(0px, 0px, 0px, 0px);" tabindex="-1">
                                            <div class="bootstrap-filestyle input-group">
                                                <span class="group-span-filestyle input-group-btn" tabindex="0">
                                                    <label id="new" class="btn btn-default" for="filestyle-1">
                                                        <span class="glyphicon glyphicon-folder-open"></span>
                                                        Choose file
                                                    </label>
                                                </span>
                                                <input class="form-control" id="filestyle-2"  value="" type="text" readonly>
                                            </div>
                                        </div>
                                    </div>
                                </div><p></p>
                                <div class="row">
                                	 <div class="col-md-4">
                                        <p></p>
                                        <h4 class="m-t-0">Description 1</h4>
                                        <textarea class="ckeditor textarea form-control  textarea_middle required" name="Footer_Content" rows="5"   placeholder="TYPE YOUR DESCRIPTION"></textarea>
                                    </div>
                                    <div class="col-md-4">
                                        <p></p>
                                        <h4 class="m-t-0">Description 2</h4>
                                        <textarea class="ckeditor textarea form-control  textarea_middle required" name="Footer_Content" rows="5"   placeholder="TYPE YOUR DESCRIPTION"></textarea>
                                     </div>
                                    <div class="col-md-4">
                                        <p></p>
                                        <h4 class="m-t-0">Description 3</h4>
                                        <textarea class="ckeditor textarea form-control  textarea_middle required" name="Footer_Content" rows="5"   placeholder="TYPE YOUR DESCRIPTION"></textarea>
                                    </div>
                                </div>
                                 <div class="row">
                                	 <div class="col-md-4">
                                        <p></p>
                                        <h4 class="m-t-0">Description 4</h4>
                                        <textarea class="ckeditor textarea form-control  textarea_middle required" name="Footer_Content" rows="5"   placeholder="TYPE YOUR DESCRIPTION"></textarea>
                                    </div>
                                    <div class="col-md-4">
                                        <p></p>
                                        <h4 class="m-t-0">Description 5</h4>
                                        <textarea class="ckeditor textarea form-control  textarea_middle required" name="Footer_Content" rows="5"   placeholder="TYPE YOUR DESCRIPTION"></textarea>
                                     </div>
                                    <div class="col-md-4">
                                        <p></p>
                                        <h4 class="m-t-0">Description 6</h4>
                                        <textarea class="ckeditor textarea form-control  textarea_middle required" name="Footer_Content" rows="5"   placeholder="TYPE YOUR DESCRIPTION"></textarea>
                                    </div>
                                </div><p></p><br><br>
                                <legend>Choose Last slider image to change</legend>
                                <div class="row">
                                    <div class="col-md-4">
                                        <p>
                                        <h4 class="m-t-0">Slider Image 1</h4>
                                        <img class="media-object superbox-img previewimage" id="email_image" name="footer_image" src="<?php echo base_url('application/assets/img/login-bg/bg-6.jpg');?>">
                                        </p>
                                        <div role="form">
                                            <input type="hidden" value="" name="Old_Email_Img"/>
                                            <input id="filestyle-1" class="filestyle" type="file" name='Email_Img' onchange="PreviewImage();" data-buttonbefore="true" style="position: absolute; clip: rect(0px, 0px, 0px, 0px);" tabindex="-1">
                                            <div class="bootstrap-filestyle input-group">
                                                <span class="group-span-filestyle input-group-btn" tabindex="0">
                                                    <label id="new" class="btn btn-default" for="filestyle-1">
                                                        <span class="glyphicon glyphicon-folder-open"></span>
                                                        Choose file
                                                    </label>
                                                </span>
                                                <input class="form-control" id="filestyle-2"  value="" type="text" readonly>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <p>
                                        <h4 class="m-t-0"> Slider Image 2</h4>
                                        <img class="media-object superbox-img previewimage" id="email_image" name="footer_image" src="<?php echo base_url('application/assets/img/login-bg/bg-6.jpg');?>">
                                        </p>
                                        <div role="form">
                                            <input type="hidden" value="" name="Old_Email_Img"/>
                                            <input id="filestyle-1" class="filestyle" type="file" name='Email_Img' onchange="PreviewImage();" data-buttonbefore="true" style="position: absolute; clip: rect(0px, 0px, 0px, 0px);" tabindex="-1">
                                            <div class="bootstrap-filestyle input-group">
                                                <span class="group-span-filestyle input-group-btn" tabindex="0">
                                                    <label id="new" class="btn btn-default" for="filestyle-1">
                                                        <span class="glyphicon glyphicon-folder-open"></span>
                                                        Choose file
                                                    </label>
                                                </span>
                                                <input class="form-control" id="filestyle-2"  value="" type="text" readonly>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <p>
                                        <h4 class="m-t-0">Slider Image 3</h4>
                                        <img class="media-object superbox-img previewimage" id="email_image" name="footer_image" src="<?php echo base_url('application/assets/img/login-bg/bg-6.jpg');?>">
                                        </p>
                                        <div role="form">
                                            <input type="hidden" value="" name="Old_Email_Img"/>
                                            <input id="filestyle-1" class="filestyle" type="file" name='Email_Img' onchange="PreviewImage();" data-buttonbefore="true" style="position: absolute; clip: rect(0px, 0px, 0px, 0px);" tabindex="-1">
                                            <div class="bootstrap-filestyle input-group">
                                                <span class="group-span-filestyle input-group-btn" tabindex="0">
                                                    <label id="new" class="btn btn-default" for="filestyle-1">
                                                        <span class="glyphicon glyphicon-folder-open"></span>
                                                        Choose file
                                                    </label>
                                                </span>
                                                <input class="form-control" id="filestyle-2"  value="" type="text" readonly>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                 <div class="row">
                                    <div class="col-md-4">
                                        <p>
                                        <h4 class="m-t-0">Slider Image 4</h4>
                                        <img class="media-object superbox-img previewimage" id="email_image" name="footer_image" src="<?php echo base_url('application/assets/img/login-bg/bg-6.jpg');?>">
                                        </p>
                                        <div role="form">
                                            <input type="hidden" value="" name="Old_Email_Img"/>
                                            <input id="filestyle-1" class="filestyle" type="file" name='Email_Img' onchange="PreviewImage();" data-buttonbefore="true" style="position: absolute; clip: rect(0px, 0px, 0px, 0px);" tabindex="-1">
                                            <div class="bootstrap-filestyle input-group">
                                                <span class="group-span-filestyle input-group-btn" tabindex="0">
                                                    <label id="new" class="btn btn-default" for="filestyle-1">
                                                        <span class="glyphicon glyphicon-folder-open"></span>
                                                        Choose file
                                                    </label>
                                                </span>
                                                <input class="form-control" id="filestyle-2"  value="" type="text" readonly>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <p>
                                        <h4 class="m-t-0"> Slider Image 5</h4>
                                        <img class="media-object superbox-img previewimage" id="email_image" name="footer_image" src="<?php echo base_url('application/assets/img/login-bg/bg-6.jpg');?>">
                                        </p>
                                        <div role="form">
                                            <input type="hidden" value="" name="Old_Email_Img"/>
                                            <input id="filestyle-1" class="filestyle" type="file" name='Email_Img' onchange="PreviewImage();" data-buttonbefore="true" style="position: absolute; clip: rect(0px, 0px, 0px, 0px);" tabindex="-1">
                                            <div class="bootstrap-filestyle input-group">
                                                <span class="group-span-filestyle input-group-btn" tabindex="0">
                                                    <label id="new" class="btn btn-default" for="filestyle-1">
                                                        <span class="glyphicon glyphicon-folder-open"></span>
                                                        Choose file
                                                    </label>
                                                </span>
                                                <input class="form-control" id="filestyle-2"  value="" type="text" readonly>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <p>
                                        <h4 class="m-t-0">Slider Image 6</h4>
                                        <img class="media-object superbox-img previewimage" id="email_image" name="footer_image" src="<?php echo base_url('application/assets/img/login-bg/bg-6.jpg');?>">
                                        </p>
                                        <div role="form">
                                            <input type="hidden" value="" name="Old_Email_Img"/>
                                            <input id="filestyle-1" class="filestyle" type="file" name='Email_Img' onchange="PreviewImage();" data-buttonbefore="true" style="position: absolute; clip: rect(0px, 0px, 0px, 0px);" tabindex="-1">
                                            <div class="bootstrap-filestyle input-group">
                                                <span class="group-span-filestyle input-group-btn" tabindex="0">
                                                    <label id="new" class="btn btn-default" for="filestyle-1">
                                                        <span class="glyphicon glyphicon-folder-open"></span>
                                                        Choose file
                                                    </label>
                                                </span>
                                                <input class="form-control" id="filestyle-2"  value="" type="text" readonly>
                                            </div>
                                        </div>
                                    </div>
                                </div><p></p><br>
                                <div class="pager form-group">
                                     <div class="col-md-7 control-label">
                                        <!--<button  class="btn btn-success m-r-5 m-b-5" type="submit" name="save" id="save" value="Save">Save</button>-->
                                        <input class="btn btn-success m-r-5 m-b-5" type="submit" name="save" id="save" value="Save">
                                            <button  class="btn btn-danger m-r-5 m-b-5" onclick="window.history.back();" type="button">Cancel</button>
                                     </div>
                                 </div>
                            </form>
                        </div>
                    </div>
                    <!-- end panel -->
                </div>
                <!-- end col-6 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end #content -->
        <script>
        $('#add_slider').click(function(){
         // alert();
           $("#show").clone(true).insertAfter("#show").removeClass('hidden').addClass('new');
        });
        $('#delete_slider').click(function(){

            $(this).parents('div.new').remove();
        })
        </script>
        