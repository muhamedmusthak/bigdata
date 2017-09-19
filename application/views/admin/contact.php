<!-- begin #content -->
        <div id="content" class="content">
            <!-- begin breadcrumb -->
            <ol class="breadcrumb pull-right">
                <li><a href="javascript:;">Dashboard</a></li>
                <!-- <li><a href="javascript:;">Form Stuff</a></li> -->
                <li class="active">Contact</li>
            </ol>
            <!-- end breadcrumb -->
            <!-- begin page-header -->
            <h1 class="page-header">Contact<small> You may view your details here..</small></h1>
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
                            <h4 class="panel-title">Contact</h4>
                        </div>
                        <div class="panel-body">
                            <form class="form-horizontal" action="<?php echo base_url('bigdataAdminController/update_footer');?>" id="form_validation" method="post" name="form_validation" enctype="multipart/form-data">
                                <legend>Choose Banner Image to Change</legend>
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
                                        <h4 class="m-t-0">Banner Title</h4>
                                       <input class="form-control input-md" name="Phone_Number" type="text" value="" placeholder="TYPE YOUR BANNER TITLE">
                                    </div>
                                </div><p></p>
                                <div class="row">
                                    <div class="col-md-12">
                                        <p></p>
                                        <h4 class="m-t-0">Banner description</h4>
                                        <textarea class="ckeditor textarea form-control  textarea_middle required" name="Footer_Content" rows="5"   placeholder="TYPE YOUR OWN PARAGRAPH"></textarea>
                                    </div>
                                </div><p></p><br>
                               <!--  <legend>Choose Tab title to Change</legend> -->
                                <div class="row">
                                    <div class="col-md-4">
                                        <p>
                                        <h4 class="m-t-0">Banner Sub-content Image 1</h4>
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
                                        <h4 class="m-t-0">Banner Sub-content Image 2</h4>
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
                                        <h4 class="m-t-0">Content</h4>
                                        <input class="form-control input-md" name="Email_Id" type="text" value="" placeholder="TYPE YOUR CONTENT">
                                    </div>
                                    <div class="col-md-4">
                                        <p></p>
                                        <h4 class="m-t-0">Content</h4>
                                        <input class="form-control input-md" name="Email_Id" type="text" value="" placeholder="TYPE YOUR CONTENT">
                                    </div>
                                </div><p></p><br>
                                <legend>Choose Button link to change</legend>
                                <div class="row">
                                     <div class="col-md-4">
                                        <p></p>
                                        <h4 class="m-t-0">Button Name</h4>
                                        <input class="form-control input-md" name="Email_Id" type="text" value="" placeholder="TYPE YOUR BUTTON NAME">
                                    </div>
                                    <div class="col-md-4">
                                        <p></p>
                                        <h4 class="m-t-0">Button Link</h4>
                                        <input class="form-control input-md" name="Email_Id" type="text" value="" placeholder="TYPE YOUR BUTTON LINK">
                                    </div>
                                </div><p></p><br>
                                <legend>Choose Phone and Email to change</legend>
                                <div class="row">
                                     <div class="col-md-4">
                                        <p></p>
                                        <h4 class="m-t-0">Phone number 1</h4>
                                        <input class="form-control input-md" name="Email_Id" type="text" value="" placeholder="TYPE YOUR PHONE NO">
                                    </div>
                                    <div class="col-md-4">
                                        <p></p>
                                        <h4 class="m-t-0">Phone number 2</h4>
                                        <input class="form-control input-md" name="Email_Id" type="text" value="" placeholder="TYPE YOUR PHONE NO">
                                    </div>
                                     <div class="col-md-4">
                                        <p></p>
                                        <h4 class="m-t-0">E-mail</h4>
                                        <input class="form-control input-md" name="Email_Id" type="text" value="" placeholder="TYPE YOUR EMAIL ID">
                                    </div>
                                </div><p></p><br>
                                <legend>Choose Address to change</legend>
                                <div class="row">
                                     <div class="col-md-4">
                                        <p></p>
                                        <h4 class="m-t-0">Address 1</h4>
                                        <input class="form-control input-md" name="Email_Id" type="text" value="" placeholder="TYPE YOUR ADDRESS 1">
                                    </div>
                                    <div class="col-md-4">
                                        <p></p>
                                        <h4 class="m-t-0">Address 2</h4>
                                        <input class="form-control input-md" name="Email_Id" type="text" value="" placeholder="TYPE YOUR  ADDRESS 2">
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
        
        