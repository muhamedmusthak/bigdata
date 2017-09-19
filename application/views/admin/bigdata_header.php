<!-- begin #content -->
        <div id="content" class="content">
            <!-- begin breadcrumb -->
            <ol class="breadcrumb pull-right">
                <li><a href="javascript:;">Dashboard</a></li>
                <!-- <li><a href="javascript:;">Form Stuff</a></li> -->
                <li class="active">Header</li>
            </ol>
            <!-- end breadcrumb -->
            <!-- begin page-header -->
            <h1 class="page-header">Header  <small> You may view your details here..</small></h1>
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
                            <h4 class="panel-title">Header</h4>
                        </div>
                        <div class="panel-body">
                            <form class="form-horizontal" action="<?php echo base_url('bigdataAdminController/header_update');?>" id="form_validation" method="post" name="form_validation" enctype="multipart/form-data">
                                <legend>Choose The Logo Image To Change</legend>
                                <div class="row">
                                    <div class="col-md-4">
                                    <p>
                                        <img class="media-object superbox-img previewimage" id="show_image_1" name=""
                                         src="<?php echo base_url('application/uploads/header/'.$editdata[0]['Logo_Image'])?>" >
                                    </p>
                                        <div role="form">
                                            <input type="hidden" value="<?php echo $editdata[0]['Logo_Image']?>"  name="Old_Logo_Image"/>
                                            <input id="image_1" class="filestyle" type="file" name='Logo_Image' onchange="PreviewImage();" data-buttonbefore="true" style="position: absolute; clip: rect(0px, 0px, 0px, 0px);" tabindex="-1">
                                            <div class="bootstrap-filestyle input-group">
                                                <span class="group-span-filestyle input-group-btn" tabindex="0">
                                                    <label id="new" class="btn btn-default" for="image_1">
                                                        <span class="glyphicon glyphicon-folder-open"></span>
                                                        Choose file
                                                    </label>
                                                </span>
                                                <input class="form-control" id="image_01" 
                                                value="<?php echo $editdata[0]['Logo_Image']?>" type="text">
                                            </div>
                                        </div>
                                    </div>
                                </div><p></p>
                                <br>
                                <legend>Choose The Menu To Change</legend>
                                <div class="row">
                                    <div class="col-md-6">
                                        <p></p>
                                        <h4 class="m-t-0">Menu 1</h4>
                                       <input class="form-control input-md" name="Menu_1_Name" type="text" value="<?php echo $editdata[0]['Menu_1_Name'] ?>" placeholder="TYPE YOUR MENU NAME">
                                    </div>
                                    <div class="col-md-6">
                                        <p></p>
                                        <h4 class="m-t-0">Link</h4>
                                       <input class="form-control input-md" name="Menu_1_Link" type="text" value="<?php echo $editdata[0]['Menu_1_Link'] ?>" placeholder="TYPE YOUR MENU LINK">
                                    </div>
                                </div><p></p><br>
                                 <div class="row">
                                    <div class="col-md-6">
                                        <p></p>
                                        <h4 class="m-t-0">Menu 2</h4>
                                       <input class="form-control input-md" name="Menu_2_Name" type="text" value="<?php echo $editdata[0]['Menu_2_Name'] ?>" placeholder="TYPE YOUR MENU NAME">
                                    </div>
                                    <div class="col-md-6">
                                        <p></p>
                                        <h4 class="m-t-0">Link</h4>
                                       <input class="form-control input-md" name="Menu_2_Link" type="text" value="<?php echo $editdata[0]['Menu_2_Link'] ?>" placeholder="TYPE YOUR MENU LINK">
                                    </div>
                                </div><p></p><br>
                                 <div class="row">
                                    <div class="col-md-6">
                                        <p></p>
                                        <h4 class="m-t-0">Menu 3</h4>
                                       <input class="form-control input-md" name="Menu_3_Name" type="text" value="<?php echo $editdata[0]['Menu_3_Name'] ?>" placeholder="TYPE YOUR MENU NAME">
                                    </div>
                                    <div class="col-md-6">
                                        <p></p>
                                        <h4 class="m-t-0">Link</h4>
                                       <input class="form-control input-md" name="Menu_3_Link" type="text" value="<?php echo $editdata[0]['Menu_3_Link'] ?>" placeholder="TYPE YOUR MENU LINK">
                                    </div>
                                </div><p></p><br>
                                <div class="row">
                                    <div class="col-md-6">
                                        <p></p>
                                        <h4 class="m-t-0">Menu 4</h4>
                                       <input class="form-control input-md" name="Menu_4_Name" type="text" value="<?php echo $editdata[0]['Menu_4_Name'] ?>" placeholder="TYPE YOUR MENU NAME">
                                    </div>
                                    <div class="col-md-6">
                                        <p></p>
                                        <h4 class="m-t-0">Link</h4>
                                       <input class="form-control input-md" name="Menu_4_Link" type="text" value="<?php echo $editdata[0]['Menu_4_Link'] ?>" placeholder="TYPE YOUR MENU LINK">
                                    </div>
                                </div><p></p><br>
                                <div class="row">
                                    <div class="col-md-6">
                                        <p></p>
                                        <h4 class="m-t-0">Menu 5</h4>
                                       <input class="form-control input-md" name="Menu_5_Name" type="text" value="<?php echo $editdata[0]['Menu_5_Name'] ?>" placeholder="TYPE YOUR MENU NAME">
                                    </div>
                                    <div class="col-md-6">
                                        <p></p>
                                        <h4 class="m-t-0">Link</h4>
                                       <input class="form-control input-md" name="Menu_5_Link" type="text" value="<?php echo $editdata[0]['Menu_5_Link'] ?>" placeholder="TYPE YOUR PHONE NUMBER">
                                    </div>
                                </div><p></p><br>
                                <div class="row">
                                    <div class="col-md-6">
                                        <p></p>
                                        <h4 class="m-t-0">Menu 6</h4>
                                       <input class="form-control input-md" name="Menu_6_Name" type="text" value="<?php echo $editdata[0]['Menu_6_Name'] ?>" placeholder="TYPE YOUR MENU NAME">
                                    </div>
                                    <div class="col-md-6">
                                        <p></p>
                                        <h4 class="m-t-0">Link</h4>
                                       <input class="form-control input-md" name="Menu_6_Link" type="text" value="<?php echo $editdata[0]['Menu_6_Link'] ?>" placeholder="TYPE YOUR PHONE NUMBER">
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
            function PreviewImage() {
            var image =document.getElementById("image_1").value;
            console.log(image);
            //exit;
            $('#image_01').val(image);
            //alert('ahi');
              var oFReader = new FileReader();
                  oFReader.readAsDataURL(document.getElementById("image_1").files[0]);
              
                  oFReader.onload = function (oFREvent) {
                var data1=document.getElementById("show_image_1").src = oFREvent.target.result;
                   
                  };
            };
        </script>
        
        