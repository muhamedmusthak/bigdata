<!-- begin #content -->
        <div id="content" class="content">
            <!-- begin breadcrumb -->
            <ol class="breadcrumb pull-right">
                <li><a href="javascript:;">Dashboard</a></li>
                <!-- <li><a href="javascript:;">Form Stuff</a></li> -->
                <li class="active">Courses</li>
            </ol>
            <!-- end breadcrumb -->
            <!-- begin page-header -->
            <h1 class="page-header">Courses<small> You may view your details here..</small></h1>
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
                            <h4 class="panel-title">Courses</h4>
                        </div>
                        <div class="panel-body">
                            <form class="form-horizontal" action="<?php echo base_url('bigdataAdminController/update_course');?>" id="form_validation" method="post" name="form_validation" enctype="multipart/form-data">
                               
                                <legend>Choose course name to change</legend>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <h4>Course Name</h4>
                                <input class="form-control input-md" name="course_name" type="text" value="<?php echo $result[0]['course_name'];?>" placeholder="TYPE YOUR COURSE NAME">
                                <input class="form-control input-md" name="course_id" type="hidden" value="<?php echo $result[0]['course_id'];?>" placeholder="TYPE YOUR COURSE NAME">
                                        </div>
                                    </div><P></P><br>
                                <legend>Choose course image to change</legend>
                                <div class="row">
                                    <div class="col-md-3">
                                        <h4 class="m-t-0">Course Image</h4>
                                        <p>
                                            <img class="media-object superbox-img previewimage" 
                                            id="course_image" name="course_image" 
                                            src="<?php echo base_url('application/images/courses/'.$result[0]['course_image']); ?>" >
                                        </p>    
                                        <div role="form">
                                            <input type="hidden" value="<?php echo $result[0]['course_image'];?>" name="old_course_img"/>
                                            <input id="filestyle-1" class="filestyle" type="file" name='course_image' onchange="PreviewImage();" data-buttonbefore="true" style="position: absolute; clip: rect(0px, 0px, 0px, 0px);" tabindex="-1">
                                            <div class="bootstrap-filestyle input-group">
                                                <span class="group-span-filestyle input-group-btn" tabindex="0">
                                                    <label id="new" class="btn btn-default" for="filestyle-1">
                                                        <span class="glyphicon glyphicon-folder-open"></span>
                                                        Choose file
                                                    </label>
                                                </span>
                                                <input class="form-control" id="filestyle-2"  
                                                value="<?php echo $result[0]['course_image'];?>" type="text" readonly>
                                            </div>
                                        </div>
                                    </div>
                                </div><p></p>
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
                var image =document.getElementById("filestyle-1").value;
                $('#filestyle-2').val(image);
                //alert('ahi');
              var oFReader = new FileReader();
                  oFReader.readAsDataURL(document.getElementById("filestyle-1").files[0]);
   
                  oFReader.onload = function (oFREvent) {
              var data1=document.getElementById("course_image").src = oFREvent.target.result;
                   
                };
            };
        </script>
        