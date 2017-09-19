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
                            <form class="form-horizontal" action="<?php echo base_url('bigdataAdminController/update_jobprofile');?>" id="form_validation" method="post" name="form_validation" enctype="multipart/form-data">
                               <legend>Choose course name to change</legend>
                                    <div class="row">
                                        <div class="col-md-4">
                                            
                                                <h4>Select Course</h4>
                                                <select name="course_id" class="form-control" >
                                                <?php foreach($this->BigdataAdminModel->get_course() as $row)
                                                { ?>
                                             
                                                <option value="<?php echo $row['course_id'];?>">
                                                    <?php echo $row['course_name']; ?></option>
                                                <?php } ?>
                                                </select>
                                            
                                        </div>
                                    </div><P></P><br>
                                <legend>Choose Job Profile to change</legend>
                                <div class="row">
                                    <div class="col-md-4">
                                        <h4>Job Profile</h4>
                            <input class="form-control input-md" name="job_profile_title" type="text" value="<?php echo $result[0]['job_profile_title'];?>" placeholder="TYPE PROFILE NAME">
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
       