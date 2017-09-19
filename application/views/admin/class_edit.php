<!-- begin #content -->

        <div id="content" class="content">
            <!-- begin breadcrumb -->
            <ol class="breadcrumb pull-right">
                <li><a href="javascript:;">Dashboard</a></li>
                <!-- <li><a href="javascript:;">Form Stuff</a></li> -->
                <li class="active">Class</li>
            </ol>
            <!-- end breadcrumb -->
            <!-- begin page-header -->
            <h1 class="page-header">Class<small> You may view your details here..</small></h1>
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
                            <h4 class="panel-title">Class</h4>
                        </div>
                        <div class="panel-body">
                            <form class="form-horizontal" action="<?php echo base_url('bigdataAdminController/update_class');?>" id="form_validation" method="post" name="form_validation" enctype="multipart/form-data">
                               <legend>Select course to add class</legend>
                                <div class="row">
                                    <div class="col-md-4">
                                            <h4>Select Course</h4>
                    <select name="course_id" class="form-control" >

                            <?php foreach($this->BigdataAdminModel->get_course() as $row)
                                { ?>
                                         
<option value="<?php echo $row['course_id'];?>" <?php if($result[0]['course_id'] == $row['course_id']){echo 'selected="selected"'; } ?>"   > 

                                <?php echo $row['course_name']; ?></option>
                                    <?php } ?>
                                        </select>
                                    </div>
                                </div><p></p><br>
                               <legend>Choose class name to Change</legend>
                                <div class="row">
                                    <div class="col-md-4">
                                        <h4>Class Name</h4>
                                       <input class="form-control input-md" name="class_name" type="text" value="<?php echo $result[0]['class_name'];?>" placeholder="TYPE CLASS NAME">
                                       <input class="form-control input-md" name="class_id" type="hidden" value="<?php echo $result[0]['class_id'];?>" placeholder="TYPE YOUR COURSE NAME">
                                    </div>
                                </div><p></p><br>
                                <legend>Choose class fees to change</legend>
                                <div class="row">
                                    <div class="col-md-4">
                                        <h4>Fees</h4>
                                       <input class="form-control input-md" name="class_fees" type="text" value="<?php echo $result[0]['class_fees'];?>" placeholder="TYPE FEES NAME">
                                    </div>
                                </div><P></P><br>
                                <legend>Choose Course Duration and weeks to change</legend>
                                <div class="row">
                                    <div class="col-md-4">
                                        <h4>Duration</h4>
                                       <input class="form-control input-md" name="number_of_hours" type="text" value="<?php echo $result[0]['number_of_hours'];?>"  placeholder="TYPE DURATION HOURS">
                                    </div>
                                </div><P></P>
                                <div class="row">
                                    <div class="col-md-4">
                                        <h4>Weeks</h4>
                                       <input class="form-control input-md" name="weeks" type="text" value="<?php echo $result[0]['weeks'];?>"  placeholder="TYPE WEEKS">
                                    </div>
                                </div><P></P>
                                <legend>Change class student limit</legend>
                                <div class="row">
                                    <div class="col-md-4">
                                        <h4>class Student limit</h4>
                                       <input class="form-control input-md disabled" name="student_limit" type="text" value="<?php echo $result[0]['student_limit'];?>"  placeholder="TYPE WEEKS">
                                    </div>
                                </div><P></P>
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
        
        