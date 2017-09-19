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
            <h1 class="page-header">Register<small></small></h1>
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
                            <h4 class="panel-title">Register Form</h4>
                        </div>
                        <div class="panel-body">
                            <form class="form-horizontal" action="<?php if($mode=="edit"){echo base_url('bigdataAdminController/update_users');} else{ echo base_url('bigdataAdminController/add_users'); } ?>"  
                            id="form_validation" method="post" name="form_validation" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="form-group">
                                        <label class="control-label col-md-4 col-sm-4">Name :</label>
                                        <div class="col-md-3 col-sm-3">
                                            <input class="form-control" type="hidden"  name="User_Role" placeholder="Name"   value="admin"/>
        <input class="form-control" type="text"  name="User_Name" placeholder="Name" value="<?php if($mode=="edit"){echo $result[0]['User_Name'];}?>" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-4 col-sm-4">Email :</label>
                                        <div class="col-md-3 col-sm-3">
                                            <input class="form-control" type="text"  name="User_Id" placeholder="Email" value="<?php if($mode=="edit"){echo $result[0]['User_Id'];}?>" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-4 col-sm-4">Password :</label>
                                        <div class="col-md-3 col-sm-3">
                                            <input class="form-control" type="text"  name="User_Password" placeholder="Password"  value="<?php if($mode=="edit"){echo $result[0]['User_Password'];}?>" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-4 col-sm-4">Confirm Password :</label>
                                        <div class="col-md-3 col-sm-3">
                                            <input class="form-control" type="text"  name="confirm_password" placeholder="Confirm Password"   value="<?php if($mode=="edit"){echo $result[0]['User_Password'];}?>" />
                                             <input class="form-control" type="hidden"  name="id" placeholder="" value="<?php if($mode=="edit"){echo $result[0]['id'];}?>" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-offset-4 col-md-3">
                                            <button class="btn btn-primary btn-sm" id="" type="submit"><span class="f-s-14 f-w-500" >Save</span></button>
                                        </div>
                                    </div>
                                </div><p></p><br>
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
        
        