<style>
.cke_contents .cke_reset
{

    height:137px;
}
.second{

    margin-top: 22px;
}
.first{
margin-top:-50px;
}

</style>

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
                            <form class="" action="<?php echo base_url('bigdataAdminController/update_syllabus');?>" id="" method="post" name="" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-md-offset-3  col-md-4">
                                    <legend>Choose course to add syllabus</legend>
                                        <div class="form-group">
                                           <select name="course_id" class="form-control" >
                                                <?php foreach($this->BigdataAdminModel->get_course() as $row){ ?>
                                                 <option  value="<?php echo $row['course_id'];?>" >
                                                 <?php echo $row['course_name']; ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div><br>
                                </div><br>
                                <div class="row">
                                    <div class="whole_div">
                                        <?php $count=1; foreach($result as $row){ ?> 
                                        <div class="col-md-12 original" style="margin-top:30px"> 
                                       
                                                <div class="row">
                                                    <div class="col-md-10">
                                                        <div class="form-group">
                                                            <input class="form-control" type="text" value="<?php echo $row['syllabus_title']?>" name="syllabus_title[]" placeholder="Enter Syllabus title " data-parsley-required="true" />
                                                            <input class="form-control" type="hidden" value="<?php echo $row['syllabus_id']?>" name="syllabus_id[]" placeholder="Enter Syllabus title " data-parsley-required="true" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-10">
                                                        <div class="form-group">
                                                            <label  for="number">Syllabus Description</label> 
                                                            <textarea class="mytextarea textarea form-control  textarea_middle required" name="syllabus_des[]" rows="5"   placeholder="TYPE YOUR OWN PARAGRAPH"><?php echo $row['syllabus_description']?></textarea>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="col-md-1 second">
                                                        <div class="form-group">
                                                            <label  for="number"></label> 
                                                            <a type="button" class="btn btn-danger cancel" onclick="cancel(<?php echo $row['syllabus_id']?>,$(this));"><i class="fa fa-trash-o"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                        
                                        </div>
                                        <?php } ?>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12" id="template">

                                    </div> 
                                </div>
                                <div class="row">
                                    <div class="col-md-1 col-md-offset-10 first">
                                        <div class="form-group">
                                            <label  for="number"></label> 
                                            <a class="btn btn-primary" onclick="add()"><i class="fa fa-plus"></i> </a>
                                        </div>
                                    </div> 
                                </div>
                                <div class="row">
                                    <div class="col-md-offset-5
                                     col-md-7">
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary">update</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <br></br>
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
        function iniLoad()
        {
            tinymce.init({
            selector: '.mytextarea',
            //mode:"node",
                content_css : '<?php echo base_url(); ?>application/assets/plugins/tinymce/js/tinymce/skins/lightgray/content.min.css',
            });
        }
        iniLoad();
        </script> 
        <script>
        function add()
        {
           
           // alert();
            //$('.original').find('.second').removeClass('hidden');
            $('#template').append('<div class="removediv"><div class="row"><div class="col-md-10"><div class="form-group"><input class="form-control" type="text" value="" name="syllabus_title[]" placeholder="Enter Syllabus title " data-parsley-required="true" /></div></div></div><div class="row"><div class="col-md-10"><div class="form-group"><label  for="number">Syllabus Description</label> <textarea class="mytextarea textarea form-control required" name="syllabus_des[]" rows="5"   placeholder="TYPE YOUR OWN PARAGRAPH"></textarea></div></div><div class="col-md-1 second"><div class="form-group"><label  for="number"></label> <a type="button" class="btn btn-danger cancel"  onclick="cancel_clone(this);" ><i class="fa fa-trash-o"></i></a></div></div></div></div>');
               iniLoad();
        }
        function cancel($id,deleterow){
            if(confirm("Are you sure want to this!"))
            {
                //alert($id);
                var line_id=$id;
                $.ajax({
                url:'<?php echo site_url('bigdataAdminController/syl_particular_del');?>',
                type:"post",
                data:{'id':line_id},
                    success:function(){
                        //alert(data);
                        deleterow.parents('.original').remove();
                        //$("#empTable tr.selected").remove();
                        //window.location.reload();
                    },
                });
            }
        }   
        function cancel_clone(name)
        {
           // alert();
             $(name).parents('.removediv').remove();
             //$(".original:last-child").find('.first').removeClass('hidden');
        }  


        </script>
        