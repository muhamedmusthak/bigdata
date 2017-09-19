<!-- <script src="<?php echo base_url();?>application/assets/plugins/tinymce/js/tinymce/jquery.tinymce.min.js"></script> -->
 <!-- <link href="<?php echo site_url ('application/assets/plugins/tinymce/js/tinymce/skins/lightgray/content.min.css');?>" rel="stylesheet" />   -->

<style>
/*.cke_contents .cke_reset
{

    height:137px;
}*/
.first{
margin-top:-50px;
}
.col-md-1.second {
    margin-top: 22px;
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
                            <form class="" action="<?php echo base_url('bigdataAdminController/add_syllabus');?>" id="" method="post" name="" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-md-offset-3  col-md-4">
                                    <legend>Choose course to add syllabus</legend>
                                        <div class="form-group">
                                           <select name="course_id" class="form-control" >
                                                <?php foreach($this->BigdataAdminModel->get_course() as $row){ ?>
                                                 <option value="<?php echo $row['course_id'];?>">
                                                 <?php echo $row['course_name']; ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div><br>
                                </div><br><br>
                                <div class="row">
                                    <div class="col-md-12 original removediv" style="margin-top:30px"> 
                                       <!--  <div class="well"> -->
                                            <div class="row">
                                                <div class="col-md-10">
                                                    <div class="form-group">
                                                        <input class="form-control" type="text" value="" name="syllabus_title[]" placeholder="Enter Syllabus title " data-parsley-required="true" />
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            <div class="row">
                                                <div class="col-md-10">
                                                    <div class="form-group">
                                                        <label  for="number">Syllabus Description</label> 
                                                        <textarea class="mytextarea textarea form-control required" name="syllabus_des[]" rows="5"   placeholder="TYPE YOUR OWN PARAGRAPH"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-md-1 second hidden">
                                                    <div class="form-group">
                                                        <label  for="number"></label> 
                                                        <a type="button" class="btn btn-danger cancel"  onclick="cancel(this);" ><i class="fa fa-trash-o"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                       <!--  </div> -->
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
                                            <a class="btn btn-primary cloneNewRow" id="add"><i class="fa fa-plus"></i> </a>
                                        </div>
                                    </div> 
                                </div>
                                
                                <div class="row">
                                    <div class="col-md-offset-5
                                     col-md-7">
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary">submit</button>
                                        </div>
                                    </div>
                                </div>
                                <br></br>

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
        // $(document).ready(function(){
        //     //var count=0;
        //     //var newiframe_id='mydiv-'+count+'_ifr';
        //    // alert(newiframe_id)
        //    // var count1=0;
        //     //var newtextarea_id='mydiv-'+count1;
        //     //alert(newtextarea_id);
        //     $("#add").click(function(){
        //         //var newId=newiframe_id;
        //         //var newtid=newtextarea_id;
        //         var newEle = $('#template').clone().insertBefore('.original').removeClass('hidden').addClass('remove_div');
        //         //console.log(newEle,"new element");
        //         //console.log($(newEle).find('iframe').attr('id', newId));
        //         //console.log($(newEle).find('textarea').attr('id', newtid));
        //         //tinyMCE.execCommand('mceAddControl',false,'newtid');
        //         //count++;
        //        // count1++;
        //         $(newEle).find('.mce-content-body').each(function () {
        //             $(this).removeAttr('id');
        //         });

        //         // $(newEle).find('textarea[name="syllabus_des_1"]')each(function() {
        //         //     this.name = this.name.replace(/\d+/, cnt);
        //         // });
        //         //console.log(newEle);
        //         //var oneplus=1;
        //         //$(newEle).find('textarea[name="syllabus_des_1"]').attr("name", "syllabus_des_"oneplus++"");
        //         //$(newEle).find('input').val('');
        //         //CKEDITOR.replace("syllabus_des_"+oneplus+"");
        //         // $('#cke_syllabus_des_1').each(function() {
        //         //         var $ids = $('[id=' + this.id + ']');
        //         //         if ($ids.length > 1) {
        //         //             $ids.not(':first').remove();
        //         //         }
        //         // });
        //         // i=i+1;
        //          //oneplus++;
        //     });
        //     // $(newEle).find('.mce-content-body').each(function () {
        //     //        // alert();
        //     //             $(this).removeAttr('id');
        //     // });
        // });
    
        // function cancel(name){
        //     $(name).parents('.remove_div').remove();
        // }
        // $('.cloneNewRow').click(function(){
        //     $('.template').clone().insertBefore('.original').removeClass('hidden').addClass('remove_div');
        // });
        </script>

        <script>
        $(document).ready(function(){
            $("#add").click(function()
            {
                $('.original').find('.second').removeClass('hidden');
                $('#template').append('<div class="removediv"><div class="row"><div class="col-md-10"><div class="form-group"><input class="form-control" type="text" value="" name="syllabus_title[]" placeholder="Enter Syllabus title " data-parsley-required="true" /></div></div></div><div class="row"><div class="col-md-10"><div class="form-group"><label  for="number">Syllabus Description</label> <textarea class="mytextarea textarea form-control required" name="syllabus_des[]" rows="5"   placeholder="TYPE YOUR OWN PARAGRAPH"></textarea></div></div><div class="col-md-1 second"><div class="form-group"><label  for="number"></label> <a type="button" class="btn btn-danger cancel"  onclick="cancel(this);" ><i class="fa fa-trash-o"></i></a></div></div></div></div>');
               iniLoad();
            });

        });
        function cancel(name){
            //alert();
            $(name).parents('.removediv').remove();
        }
        </script>
        