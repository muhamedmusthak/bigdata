<!-- begin #content -->
        <div id="content" class="content">
            <!-- begin breadcrumb -->
            <ol class="breadcrumb pull-right">
                <li><a href="javascript:;">Dashboard</a></li>
                <!-- <li><a href="javascript:;">Form Stuff</a></li> -->
                <li class="active">About</li>
            </ol>
            <!-- end breadcrumb -->
            <!-- begin page-header -->
            <h1 class="page-header">About Us <small> You may view your details here..</small></h1>
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
                            <h4 class="panel-title">About Us</h4>
                        </div>
                        <div class="panel-body">
                            <form class="form-horizontal" action="<?php echo base_url('bigdataAdminController/update_footer');?>" id="form_validation" method="post" name="form_validation" enctype="multipart/form-data">
                                <legend>Choose Banner to Change</legend>
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
                                <legend>Choose Tab title to Change</legend>
                                <div class="row">
                                    <div class="col-md-4">
                                        <h4>Tab 1 name</h4>
                                       <input class="form-control input-md" name="Email_Id" type="text" value="" placeholder="TYPE TAB NAME">
                                    </div>
                                    <div class="col-md-4">
                                        <h4>Tab 2 name</h4>
                                       <input class="form-control input-md" name="Email_Id" type="text" value="" placeholder="TYPE TAB NAME">
                                    </div>
                                    <div class="col-md-4">
                                        <h4>Tab 3 name</h4>
                                       <input class="form-control input-md" name="Email_Id" type="text" value="" placeholder="TYPE TAB NAME">
                                    </div>
                                </div><p></p><br>
                                <legend>Choose Tab 1 content to change</legend>
                                <div class="row">
                                    <div class="col-md-4">
                                        <h4>First content title to change</h4>
                                       <input class="form-control input-md" name="Email_Id" type="text" value="" placeholder="TYPE YOUR CONTNET TITLE">
                                    </div>
                                </div><P></P>
                                <div class="row">
                                     <div class="col-md-4">
                                        <h4>Description</h4>
                                       <input class="form-control input-md" name="Email_Id" type="text" value="" placeholder="TYPE YOUR DESCRIPTION">
                                    </div>
                                </div><p></p><br>
                                <legend>Choose Second content to change</legend>
                                <div class="row">
                                    <div class="col-md-4">
                                        <h4>Title</h4>
                                       <input class="form-control input-md" name="Email_Id" type="text" value="" placeholder="TYPE YOUR TITLE">
                                    </div>
                                </div><p></p>
                                <div class="row">
                                    <div class="col-md-4">
                                        <p>
                                        <h4 class="m-t-0">Sub-content 1 Image</h4>
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
                                        <h4 class="m-t-0">Sub-content 2 Image</h4>
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
                                        <h4 class="m-t-0">Sub-content 3 Image</h4>
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
                                        <input class="form-control input-md" name="Email_Id" type="text" value="" placeholder="TYPE YOUR EMAIL ID">
                                    </div>
                                    <div class="col-md-4">
                                        <p></p>
                                        <h4 class="m-t-0">Title</h4>
                                        <input class="form-control input-md" name="Email_Id" type="text" value="" placeholder="TYPE YOUR EMAIL ID">
                                    </div>
                                    <div class="col-md-4">
                                        <p></p>
                                        <h4 class="m-t-0">Title</h4>
                                        <input class="form-control input-md" name="Email_Id" type="text" value="" placeholder="TYPE YOUR EMAIL ID">
                                    </div>
                                </div><p></p>
                                <div class="row">
                                     <div class="col-md-4">
                                        <p></p>
                                        <h4 class="m-t-0">Desription</h4>
                                        <textarea class="ckeditor textarea form-control  textarea_middle required" name="Footer_Content" rows="5"   placeholder="TYPE YOUR OWN PARAGRAPH"></textarea>
                                    </div>
                                    <div class="col-md-4">
                                        <p></p>
                                        <h4 class="m-t-0">Desription</h4>
                                        <textarea class="ckeditor textarea form-control  textarea_middle required" name="Footer_Content" rows="5"   placeholder="TYPE YOUR OWN PARAGRAPH"></textarea>
                                     </div>
                                    <div class="col-md-4">
                                        <p></p>
                                        <h4 class="m-t-0">Desription</h4>
                                        <textarea class="ckeditor textarea form-control  textarea_middle required" name="Footer_Content" rows="5"   placeholder="TYPE YOUR OWN PARAGRAPH"></textarea>
                                    </div>
                                </div><p></p>
                               <div class="row">
                                    <div class="col-md-4">
                                        <p></p>
                                        <h4 class="m-t-0">Choose Sub-content 4 Title </h4>
                                        <input class="form-control input-md" name="Email_Id" type="text" value="" placeholder="TYPE YOUR TITLE">
                                    </div>
                                    <div class="col-md-4">
                                        <p></p>
                                       <p></p>
                                        <h4 class="m-t-0">Content</h4>
                                        <input class="form-control input-md" name="Email_Id" type="text" value="" placeholder="TYPE YOUR CONTENT">
                                     </div>
                                </div><p></p><br>
                                <legend>Choose Third content to change</legend>
                                 <div class="row">
                                    <div class="col-md-4">
                                        <h4>Title</h4>
                                       <input class="form-control input-md" name="Email_Id" type="text" value="" placeholder="TYPE YOUR TITLE">
                                    </div>
                                </div><p><p>
                                <div class="row">
                                     <div class="col-md-12">
                                         <h4>Description</h4>
                                         <textarea class="ckeditor textarea form-control  textarea_middle required" name="Footer_Content" rows="5"   placeholder="TYPE YOUR OWN PARAGRAPH"></textarea>
                                    </div>
                                </div><p></p>
                                  <div class="row">
                                    <div class="col-md-3">
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
                                    <div class="col-md-3">
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
                                    <div class="col-md-3">
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
                                    <div class="col-md-3">
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
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
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
                                </div><p></p><br><br>
                                <legend>Choose Tab 2 content to change</legend>
                                <div class="row">
                                    <div class="col-md-4">
                                        <h4>Page Title</h4>
                                       <input class="form-control input-md" name="Email_Id" type="text" value="" placeholder="TYPE YOUR TITLE">
                                    </div>
                                </div><p></p><br>
                                <legend>Choose First content to change</legend>
                                <div class="row">
                                     <div class="col-md-3">
                                        <p>
                                        <h4 class="m-t-0"></h4>
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
                                        <h4>Title</h4>
                                       <input class="form-control input-md" name="Email_Id" type="text" value="" placeholder="TYPE YOUR TITLE">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <p></p>
                                        <h4 class="m-t-0">Description</h4>
                                        <textarea class="ckeditor textarea form-control  textarea_middle required" name="Footer_Content" rows="5"   placeholder="TYPE YOUR OWN PARAGRAPH"></textarea>
                                    </div>
                                </div><p></p><br>
                                 <legend>Choose Second content to change</legend>
                                <div class="row">
                                     <div class="col-md-3">
                                        <p>
                                        <h4 class="m-t-0"></h4>
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
                                        <h4>Title</h4>
                                       <input class="form-control input-md" name="Email_Id" type="text" value="" placeholder="TYPE YOUR TITLE">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <p></p>
                                        <h4 class="m-t-0">Description</h4>
                                        <textarea class="ckeditor textarea form-control  textarea_middle required" name="Footer_Content" rows="5"   placeholder="TYPE YOUR OWN PARAGRAPH"></textarea>
                                    </div>
                                </div><p></p><br>
                                <legend>Choose Third content to change</legend>
                                <div class="row">
                                    <div class="col-md-3">
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
                                    <div class="col-md-3">
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
                                    <div class="col-md-3">
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
                                    <div class="col-md-3">
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
                                </div>
                                 <div class="row">
                                     <div class="col-md-3">
                                        <p></p>
                                        <h4 class="m-t-0">Title</h4>
                                        <input class="form-control input-md" name="Email_Id" type="text" value="" placeholder="TYPE YOUR CONTENT">
                                    </div>
                                    <div class="col-md-3">
                                        <p></p>
                                        <h4 class="m-t-0">Title</h4>
                                        <input class="form-control input-md" name="Email_Id" type="text" value="" placeholder="TYPE YOUR CONTENT">
                                    </div>
                                    <div class="col-md-3">
                                        <p></p>
                                        <h4 class="m-t-0">Title</h4>
                                        <input class="form-control input-md" name="Email_Id" type="text" value="" placeholder="TYPE YOUR CONTENT">
                                    </div>
                                    <div class="col-md-3">
                                        <p></p>
                                        <h4 class="m-t-0">Title</h4>
                                        <input class="form-control input-md" name="Email_Id" type="text" value="" placeholder="TYPE YOUR CONTENT">
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
                                        <input class="form-control input-md" name="Email_Id" type="text" value="" placeholder="TYPE YOUR DESCRIPTION">
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
                                </div><p></p><br><BR>
                                <legend>Choose Fourth content to change</legend>
                                <div class="row">
                                    <div class="col-md-3">
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
                                    <div class="col-md-3">
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
                                    <div class="col-md-3">
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
                                    <div class="col-md-3">
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
                                </div>
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
                                        <input class="form-control input-md" name="Email_Id" type="text" value="" placeholder="TYPE YOUR description">
                                    </div>
                                    <div class="col-md-3">
                                        <p></p>
                                        <h4 class="m-t-0">Description</h4>
                                        <input class="form-control input-md" name="Email_Id" type="text" value="" placeholder="TYPE YOUR description">
                                    </div>
                                    <div class="col-md-3">
                                        <p></p>
                                        <h4 class="m-t-0">Description</h4>
                                        <input class="form-control input-md" name="Email_Id" type="text" value="" placeholder="TYPE YOUR description">
                                    </div>
                                    <div class="col-md-3">
                                        <p></p>
                                        <h4 class="m-t-0">Description</h4>
                                        <input class="form-control input-md" name="Email_Id" type="text" value="" placeholder="TYPE YOUR description">
                                    </div>
                                </div><p></p>  <br>
                                <legend>Choose Fifth content to change</legend>
                                <div class="row">
                                    <div class="col-md-3">
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
                                    <div class="col-md-3">
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
                                    <div class="col-md-3">
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
                                    <div class="col-md-3">
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
                                </div>
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
                                        <input class="form-control input-md" name="Email_Id" type="text" value="" placeholder="TYPE YOUR DESCRIPTION">
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
                                </div><p></p><br>
                                 <legend>Choose Sixth content to change</legend>
                                <div class="row">
                                    <div class="col-md-3">
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
                                    <div class="col-md-3">
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
                                    <div class="col-md-3">
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
                                        <input class="form-control input-md" name="Email_Id" type="text" value="" placeholder="TYPE YOUR DESCRIPTION">
                                    </div>
                                    <div class="col-md-3">
                                        <p></p>
                                        <h4 class="m-t-0">Description</h4>
                                        <input class="form-control input-md" name="Email_Id" type="text" value="" placeholder="TYPE YOUR DESCRIPTION">
                                    </div>
                                </div><p></p><br>
                                <legend>Choose Seventh content to change</legend>
                                <div class="row">
                                    <div class="col-md-3">
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
                                    <div class="col-md-3">
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
                                    <div class="col-md-3">
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
                                    <div class="col-md-3">
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
                                        <textarea class="ckeditor textarea form-control  textarea_middle required" name="Footer_Content" rows="5"   placeholder="TYPE YOUR OWN PARAGRAPH"></textarea>
                                    </div>
                                    <div class="col-md-3">
                                        <p></p>
                                        <h4 class="m-t-0">Description</h4>
                                        <textarea class="ckeditor textarea form-control  textarea_middle required" name="Footer_Content" rows="5"   placeholder="TYPE YOUR OWN PARAGRAPH"></textarea>
                                    </div>
                                    <div class="col-md-3">
                                        <p></p>
                                        <h4 class="m-t-0">Description</h4>
                                        <textarea class="ckeditor textarea form-control  textarea_middle required" name="Footer_Content" rows="5"   placeholder="TYPE YOUR OWN PARAGRAPH"></textarea>
                                    </div>
                                    <div class="col-md-3">
                                        <p></p>
                                        <h4 class="m-t-0">Description</h4>
                                        <textarea class="ckeditor textarea form-control  textarea_middle required" name="Footer_Content" rows="5"   placeholder="TYPE YOUR OWN PARAGRAPH"></textarea>
                                    </div>
                                </div><p></p><br><br>
                                <legend>Choose Tab 3 content to change</legend>
                                 <div class="row">
                                    <div class="col-md-3">
                                        <p>
                                        <h4 class="m-t-0"></h4>
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
                                        <h4>Title</h4>
                                       <input class="form-control input-md" name="Email_Id" type="text" value="" placeholder="TYPE YOUR TITLE">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <p></p>
                                        <h4 class="m-t-0">Description</h4>
                                        <textarea class="ckeditor textarea form-control  textarea_middle required" name="Footer_Content" rows="5"   placeholder="TYPE YOUR OWN PARAGRAPH"></textarea>
                                    </div>
                                </div><p></p><br>
                                <legend>Choose Second content to change</legend>
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
                                        <textarea class="ckeditor textarea form-control  textarea_middle required" name="Footer_Content" rows="5"   placeholder="TYPE YOUR OWN PARAGRAPH"></textarea>
                                    </div>
                                </div><p></p>
                                <legend>Choose Sub-content to change</legend>
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
                                </div><p></p>
                                <div class="row">
                                    <div class="col-md-4">
                                        <p></p>
                                        <h4 class="m-t-0">Description</h4>
                                        <textarea class="ckeditor textarea form-control  textarea_middle required" name="Footer_Content" rows="5"   placeholder="TYPE YOUR OWN PARAGRAPH"></textarea>
                                    </div>
                                    <div class="col-md-4">
                                        <p></p>
                                        <h4 class="m-t-0">Description</h4>
                                        <textarea class="ckeditor textarea form-control  textarea_middle required" name="Footer_Content" rows="5"   placeholder="TYPE YOUR OWN PARAGRAPH"></textarea>
                                    </div>
                                    <div class="col-md-4">
                                        <p></p>
                                        <h4 class="m-t-0">Description</h4>
                                        <textarea class="ckeditor textarea form-control  textarea_middle required" name="Footer_Content" rows="5"   placeholder="TYPE YOUR OWN PARAGRAPH"></textarea>
                                    </div>
                                </div><p></p>
                                <div class="row">
                                    <div class="col-md-4">
                                        <h4>Button Name</h4>
                                       <input class="form-control input-md" name="Email_Id" type="text" value="" placeholder="TYPE YOUR BUTTON NAME">
                                    </div>
                                    <div class="col-md-4">
                                        <h4>Button Link</h4>
                                       <input class="form-control input-md" name="Email_Id" type="text" value="" placeholder="TYPE YOUR BUTTON LINK">
                                    </div>
                                </div><p></p><br>
                                <legend>Choose Third Content to change</legend>
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
                                </div><p></p>
                                <div class="row">
                                    <div class="col-md-4">
                                        <p></p>
                                        <h4 class="m-t-0">Description</h4>
                                        <textarea class="ckeditor textarea form-control  textarea_middle required" name="Footer_Content" rows="5"   placeholder="TYPE YOUR OWN PARAGRAPH"></textarea>
                                    </div>
                                    <div class="col-md-4">
                                        <p></p>
                                        <h4 class="m-t-0">Description</h4>
                                        <textarea class="ckeditor textarea form-control  textarea_middle required" name="Footer_Content" rows="5"   placeholder="TYPE YOUR OWN PARAGRAPH"></textarea>
                                    </div>
                                    <div class="col-md-4">
                                        <p></p>
                                        <h4 class="m-t-0">Description</h4>
                                        <textarea class="ckeditor textarea form-control  textarea_middle required" name="Footer_Content" rows="5"   placeholder="TYPE YOUR OWN PARAGRAPH"></textarea>
                                    </div>
                                </div><p></p>
                                <div class="row">
                                    <div class="col-md-4">
                                        <h4>Button Name</h4>
                                       <input class="form-control input-md" name="Email_Id" type="text" value="" placeholder="TYPE YOUR BUTTON NAME">
                                    </div>
                                    <div class="col-md-4">
                                        <h4>Button Link</h4>
                                       <input class="form-control input-md" name="Email_Id" type="text" value="" placeholder="TYPE YOUR BUTTON LINK">
                                    </div>
                                </div><p></p><br>
                                <legend>Choose Fourth contnet to change</legend>
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
                                </div><p></p>
                                <div class="row">
                                    <div class="col-md-4">
                                        <p></p>
                                        <h4 class="m-t-0">Description</h4>
                                        <textarea class="ckeditor textarea form-control  textarea_middle required" name="Footer_Content" rows="5"   placeholder="TYPE YOUR OWN PARAGRAPH"></textarea>
                                    </div>
                                    <div class="col-md-4">
                                        <p></p>
                                        <h4 class="m-t-0">Description</h4>
                                        <textarea class="ckeditor textarea form-control  textarea_middle required" name="Footer_Content" rows="5"   placeholder="TYPE YOUR OWN PARAGRAPH"></textarea>
                                    </div>
                                    <div class="col-md-4">
                                        <p></p>
                                        <h4 class="m-t-0">Description</h4>
                                        <textarea class="ckeditor textarea form-control  textarea_middle required" name="Footer_Content" rows="5"   placeholder="TYPE YOUR OWN PARAGRAPH"></textarea>
                                    </div>
                                </div><p></p>
                                <div class="row">
                                    <div class="col-md-4">
                                        <h4>Button Name</h4>
                                       <input class="form-control input-md" name="Email_Id" type="text" value="" placeholder="TYPE YOUR BUTTON NAME">
                                    </div>
                                    <div class="col-md-4">
                                        <h4>Button Link</h4>
                                       <input class="form-control input-md" name="Email_Id" type="text" value="" placeholder="TYPE YOUR BUTTON LINK">
                                    </div>
                                </div><p></p><br>
                                 <br>
                                <legend>Choose the Fifth content to change</legend>
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
                                        <textarea class="ckeditor textarea form-control  textarea_middle required" name="Footer_Content" rows="5"   placeholder="TYPE YOUR OWN PARAGRAPH"></textarea>
                                    </div>
                                </div><p></p>
                                 <div class="row">
                                    <div class="col-md-4">
                                        <h4>Button Name</h4>
                                       <input class="form-control input-md" name="Email_Id" type="text" value="" placeholder="TYPE YOUR BUTTON NAME">
                                    </div>
                                    <div class="col-md-4">
                                        <h4>Button Link</h4>
                                       <input class="form-control input-md" name="Email_Id" type="text" value="" placeholder="TYPE YOUR BUTTON LINK">
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
        
        