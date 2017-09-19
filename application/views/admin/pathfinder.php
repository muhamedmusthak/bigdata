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
                                <legend>Add Batch Date</legend>
                                    <div class="row">
                                        <div class="col-md-3">
                                           <a class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus fa-1x"></i> <span class="f-s-14 f-w-500" >Add </span></a>
                                        </div>
                                    </div><p></p><br>

                                    <!-- <div class="row">
                                        <div class="col-md-3">
                                            
                                            <select name="course_id" class="form-control getcourse">
                                                <option>select course</option>
                                                <?php foreach($this->BigdataAdminModel->get_course() as $row)
                                                { ?>
                                                <option value="<?php echo $row['course_id'];?>">
                                                    <?php echo $row['course_name']; ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                        <div class="col-md-3">
                                            
                                            <select class="form-control showclass" name="class_id">
                                                <option>select class</option>
                                            </select>
                                        </div>
                                        <div class="col-md-3">
                                            
                                           <a class="btn btn-primary btn-sm" id="find"> <span class="f-s-14 f-w-500" >Find</span></a>
                                       
                                        </div>
                                    </div> -->
                                    <!-- <div class="panel-body batchtable" >
                                        <div class="table-responsive">
                                            <table id="myTable" class="table table-striped table-bordered" cellspacing="0" width=100%>
                                            <thead>
                                                <tr>
                                                    <th>S.No</th>
                                                    <th>Start Date</th>
                                                    <th>End Date</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody id="batchbody">
                                               
                                            </tbody>
                                        </table>
                                    </div>
                                </div> -->
                                <div class="panel-body" >
                                    <div class="table-responsive">
                                            <table id="example" class="table table-striped table-bordered display" cellspacing="0" width=100%>
                                            <thead>
                                                <tr>
                                                    <th style="width: 10%;">Que.No</th>
                                                    <th style="width: 20%;">Question</th>
                                                    <th style="width: 10%;">Option 1</th>
                                                    <th style="width: 10%;">Que.Link</th>
                                                    <th style="width: 10%;">Option 2</th>
                                                    <th style="width: 10%;">Que.Link</th>
                                                    <th style="width: 10%;">Option 3</th>
                                                    <th style="width: 10%;">Que.Link</th>
                                                    <th style="width: 10%;">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($datapath as $data) {
                                                   ?>
                                              <tr>
                                                <td><?php echo $data['id']; ?></td>
                                                <td><?php echo $data['question']; ?></td>
                                                <td><?php echo $data['answer1']; ?></td>
                                                <td><?php echo $data['link1']; ?></td>
                                                <td><?php echo $data['answer2']; ?></td>
                                                <td><?php echo $data['link2']; ?></td>
                                                <td><?php echo $data['answer3']; ?></td>
                                                <td><?php echo $data['link3']; ?></td>
                                                <td><a onclick="openToggle('<?php echo $data['id']; ?>')" type="button" id="edit_batch" class="btn btn-xs btn-primary"><i class="fa fa-edit"></i></a>
                                                    <?php if($data['id'] == 1){?><a style="display: none;" href="<?php echo base_url();?>BigdataAdminController/pathfinder_delete/<?php echo $data['id']; ?>" class="btn btn-xs btn-success" id="delete_box"><i class="fa fa-trash-o"></i></a><?php } else { ?> 
                                                    <a href="<?php echo base_url();?>BigdataAdminController/pathfinder_delete/<?php echo $data['id']; ?>" class="btn btn-xs btn-danger" id="delete_box"><i class="fa fa-trash-o"></i></a><?php } ?></td>
                                               </tr>
                                               <?php
                                                } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                    </div>
                    <!-- end panel -->
                </div>
                <!-- end col-6 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end #content -->
    <div class="modal fade" id="myModal" role="dialog" data-backdrop="static" data-keyboard="false">
        <div class="modal-dialog modal-md">
        
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Choose Path Finder Question</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" action="<?php echo base_url('bigdataAdminController/ins_pathfinder');?>" id="form_validation" method="post" name="form_validation" enctype="multipart/form-data">
                    <div class="row">
                        <input type="hidden" name="id" id="id" class="form-control">
                        <div class="col-md-12">
                            <label>Question</label>
                           <input type="text" name="question" id="question" class="form-control">                           
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-5">
                           <label>answer 1</label>
                           <input  type="text" name="answer1" id="answer1" class="form-control">
                        </div>
                        <div class="col-md-5">     
                         <label>Link to Question</label>                       
                            <select class="form-control" id="link1" name="link1">
                                <option>select Question link</option>
                                <?php foreach ($datapath as $data) { ?>

                                <option><?php echo $data['id']; ?></option>
                                <?php } ?>
                                <?php foreach ($datapath1 as $data1) { ?>
                               
                                <option><?php echo $data1['course']; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                        <div class="row">
                        <div class="col-md-5">
                            <label>answer 2</label>
                          <input type="text" name="answer2" id="answer2" class="form-control">                           
                        </div>
                        <div class="col-md-5">     
                         <label>Link to Question</label>                       
                            <select class="form-control " id="link2" name="link2">
                                <option>select Question link</option>                                
                                <?php foreach ($datapath as $data) { ?>
                                <option><?php echo $data['id']; ?></option>
                                <?php } ?>
                                <?php foreach ($datapath1 as $data1) { ?>
                               
                                <option><?php echo $data1['course']; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                        <div class="row">
                        <div class="col-md-5">
                            <label>answer 3</label>
                           <input type="text" name="answer3" id="answer3" class="form-control">                         
                        </div>
                        <div class="col-md-5"> 
                         <label>Link to Question</label>                           
                            <select class="form-control " id="link3" name="link3">
                                <option>select Question link</option>
                                <?php foreach ($datapath as $data) { ?>
                                <option><?php echo $data['id']; ?></option>
                                <?php } ?>
                                <?php foreach ($datapath1 as $data1) { ?>
                               
                                <option><?php echo $data1['course']; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div><br>
                    <!--     <div class="row">
                        <div class="col-md-5">
                            <input type="text" name="course_id" class="form-control getcoursem">
                        </div>
                        <div class="col-md-5">                            
                            <select class="form-control showclassm" id="class_id" name="class_id">
                                <option>select class</option>
                            </select>
                        </div>
                    </div> -->
                       <div class="row">
                      <div class="col-md-3">
                                <button class="btn btn-primary btn-sm btn-block" id="savebatch" type="submit"><span class="f-s-14 f-w-500" >Save</span></button>
                            </div>
                            <div class="col-md-3">
                                <button class="btn btn-primary btn-sm btn-block hidden" id="update" type="button"><span class="f-s-14 f-w-500" >Update</span></button>
                            </div>
                    </div>
                 <!--    <div class="well">
                        <div class="row">
                            <div class="col-md-4">
                                <div class='input-group date'>
                                <input type="hidden" name="sch_id" id="sch_id" value="">
                                    <input type='text' name="start_date" id="start_date" class="form-control datetimepicker"/>
                                        <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-calendar"></span>
                                        </span>
                                </div>
                            </div> 
                            <div class="col-md-4">
                                <div class='input-group date'>
                                    <input type='text' name="end_date" id="end_date" class="form-control datetimepicker"/>
                                        <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-calendar"></span>
                                        </span>
                                </div>
                            </div>
                           
                        </div><p></p> 
                    </div> -->
                </form>
            </div>
            <div class="modal-footer">
              <button type="button" onclick="close_model()" id="closeupdate" class="btn btn-default hidden" data-dismiss="modal">Close</button>
              <button type="button" id="closesavebatch" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
          </div>
          
        </div>
     </div>
    <script>
    //$(".batchtable").hide();
 /*   $('#myTable').DataTable();
    $(function() 
    {              
       // Bootstrap DateTimePicker v4
        $('.datetimepicker').datepicker({
            format: 'dd-M-yyyy'
        });
    });*/
   /* $(document).ready(function() {
        
       $('#example').DataTable( {
                initComplete: function () {
                    //alert();
                this.api().columns().every( function () {

                    var column = this;
                    var select = $('<select><option value=""></option></select>')
                        .appendTo( $(column.footer()).empty() )
                        .on( 'change', function () {
                            var val = $.fn.dataTable.util.escapeRegex(
                                $(this).val()
                            );
     
                            column
                                .search( val ? '^'+val+'$' : '', true, false )
                                .draw();
                        } );
     
                    column.data().unique().sort().each( function ( d, j ) {
                        select.append( '<option value="'+d+'">'+d+'</option>' )
                    } );
                } );
            }
        } );

   });*/
    // $('.selectpicker').selectpicker({
    //     style: 'btn-white',
    // });
   $(document).on('click','#update',function(){
        var id=$("#id").val();
        var question=$("#question").val();
        var answer1=$("#answer1").val();
        var link1=$("#link1").val();
        var answer2=$("#answer2").val();
        var link2=$("#link2").val();
        var answer3=$("#answer3").val();
        var link3=$("#link3").val();//        var end=$("#end_date").val();
       //console.log(id);
        $.ajax({
                    type: "POST",
                    url: "<?php echo base_url('BigdataAdminController/update_pathfinder'); ?>",
                    data: {id:id,question:question,answer1:answer1,link1:link1,answer2:answer2,link2:link2,answer3:answer3,link3:link3},
                    //dataType:'json',
                    success: function(json)
                    {   
                       //$("#start_date").val("");
                       //$("#end_date").val("");
                       //$('#myModal').hide();
                       window.location.reload();
                    }
                });
    });
    // $(document).on('click','#edit_batch',function(){

      function openToggle($id){
        //alert();
        $('#myModal').modal({backdrop: 'static', keyboard: false});
        $('#update').removeClass('hidden');
        $('#savebatch').addClass('hidden');
        $('#closeupdate').removeClass('hidden');
        $('#closesavebatch').addClass('hidden');
        //var id=$("#class_schedule_id").val();
        //var id=$(this).find('[name="getid"]').val();
        var id=$id;
        //alert($id);
        $.ajax({
                    type: "POST",
                    url: "<?php echo base_url('BigdataAdminController/edit_pathfinder'); ?>",
                    data: {id:id},
                    dataType:'json',
                    success: function(json)
                    {   
                        //alert(json[0].id);exit();
                       //$(".getcoursem").selectpicker("refresh");
                        ///var $('.getcoursem option[value="+json[0].course_id+"]').prop('selected', true));
                        //alert(json);
                       $("#id").val(json[0].id);
                        $("#question").val(json[0].question);
                        $("#answer1").val(json[0].answer1);
                        $("#link1").val(json[0].link1);
                        $("#answer2").val(json[0].answer2);
                        $("#link2").val(json[0].link2);
                        $("#answer3").val(json[0].answer3);
                        $("#link3").val(json[0].link3);
                    }
                });
    }
    function close_model(){
        $('#update').addClass('hidden');
        $('#savebatch').removeClass('hidden');
        $('#closeupdate').addClass('hidden');
        $('#closesavebatch').removeClass('hidden');
        $('#id').val('');
        $('#question').val('');
        $('#answer1').val('');
        $('#link1').val('');
        $('#answer2').val('');
        $('#link2').val('');
        $('#answer3').val('');
        $('#link3').val('');
    }
    $(document).ready(function(){
        $(".getcoursem").change(function(){
            //alert($(this).val());
             // $("#show").val('').selectpicker('refresh');
            var id=$(this).val();
            $.ajax({
                    type: "POST",
                    url: "<?php echo base_url('BigdataAdminController/show_class'); ?>",
                    data: {id:id},
                    dataType:'html',
                    success: function(data)
                    {   
                        // $("#show").val('').selectpicker('refresh');
                        //console.log(json);
                        //alert(json[0].class_name);
                        //$('#job_profile_title').val(json[0].job_profile_title);
                        $(".showclassm").html(data);
                    }
                })

        });
    });
    $(document).ready(function(){
        $(".getcourse").change(function(){
            //alert($(this).val());
             // $("#show").val('').selectpicker('refresh');
            var id=$(this).val();
            $.ajax({
                    type: "POST",
                    url: "<?php echo base_url('BigdataAdminController/show_class'); ?>",
                    data: {id:id},
                    dataType:'html',
                    success: function(data)
                    {   
                        // $("#show").val('').selectpicker('refresh');
                        //console.log(json);
                        //alert(json[0].class_name);
                        //$('#job_profile_title').val(json[0].job_profile_title);
                        $(".showclass").html(data);
                    }
                })

        });
    });
    $(document).ready(function(){
        $("#find").click(function(){
            $(".batchtable").show();
            var id=$(".showclass").val();
            //alert(id);
            $.ajax({
                    type: "POST",
                    url: "<?php echo base_url('BigdataAdminController/show_batch'); ?>",
                    data: {id:id},
                    dataType:'html',
                    success: function(data)
                    {
                        //console.log(json);
                        //alert(json[0].class_name);
                        //$('#job_profile_title').val(json[0].job_profile_title);

                        $("#batchbody").html(data);
                    }
                })

        });

    });
</script>