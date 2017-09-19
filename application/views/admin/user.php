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
                                <legend>Add BDIHub Users</legend>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <a class="btn btn-primary btn-sm" href="<?php echo base_url('BigdataAdminController/add_user_button');?>"><i class="fa fa-plus fa-1x"></i> <span class="f-s-14 f-w-500" >Add </span></a>
                                        </div>
                                    </div><p></p><br>
                                <div class="panel-body" >
                                    <div class="table-responsive">
                                            <table id="example" class="table table-striped table-bordered display" cellspacing="0" width=100%>
                                            <thead>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Email Id</th>
                                                    <th>Role</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                           <!--  <tfoot>
                                                <tr>
                                                    <th>Course Name</th>
                                                    <th>Class Name</th>
                                                    <th>Start Date</th>
                                                    <th>End Date</th>
                                                </tr>
                                            </tfoot> -->
                                            <tbody>
                                                <?php foreach($result as $row){ ?> 
                                                    <tr>
                                                        <input type="hidden" name="row_id" value="<?php echo $row['id']?>" id="row_id">
                                                        <td><?php echo $row['User_Name'];?></td>
                                                        <td><?php echo $row['User_Id'];?></td>
                                                        <td><?php echo $row['User_Role'];?></td>
                                                        <td>
                                                            <a href="<?php echo base_url();?>BigdataAdminController/user_edit/<?php echo $row['id'];?>" class="btn btn-xs btn-primary"><i class="fa fa-edit"></i></a>
                                                            <a href="<?php echo base_url();?>BigdataAdminController/user_delete/<?php echo $row['id'];?>" class="btn btn-xs btn-danger" id="delete_box"><i class="fa fa-trash-o"></i></a>
                                                        </td>
                                                    </tr>
                                                <?php } ?>
                                                
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
    
    <script>
    //$(".batchtable").hide();
    $('#myTable').DataTable();
    $(function() 
    {              
       // Bootstrap DateTimePicker v4
        $('.datetimepicker').datepicker({
            format: 'dd-M-yyyy'
        });
    });
    $(document).ready(function() {
        
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

   });
    // $('.selectpicker').selectpicker({
    //     style: 'btn-white',
    // });
   $(document).on('click','#update',function(){
        var id=$("#sch_id").val();
        var class_id=$("#class_id").val();
        var start=$("#start_date").val();
        var end=$("#end_date").val();
        alert(id);
        $.ajax({
                    type: "POST",
                    url: "<?php echo base_url('BigdataAdminController/update_batch'); ?>",
                    data: {id:id,start_date:start,end_date:end,class_id:class_id},
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
        $('#myModal').modal('show');
        $('#update').removeClass('hidden');
        $('#savebatch').addClass('hidden');
        //var id=$("#class_schedule_id").val();
        //var id=$(this).find('[name="getid"]').val();
        var id=$id;
        //alert($id);
        $.ajax({
                    type: "POST",
                    url: "<?php echo base_url('BigdataAdminController/edit_batch'); ?>",
                    data: {id:id},
                    dataType:'json',
                    success: function(json)
                    {   
                       //$(".getcoursem").selectpicker("refresh");
                        ///var $('.getcoursem option[value="+json[0].course_id+"]').prop('selected', true));
                        //alert(json);
                        $('.showclassm').append('<option value="'+json[0].class_id+'">'+json[0].class_name+'</option>' );
                        $('select[name=course_id]').val(json[0].course_id);
                        $('select[name=class_id]').val(json[0].class_id);
                        $('#start_date').val(json[0].start_date);
                        $('#end_date').val(json[0].end_date);
                        $('#sch_id').val(json[0].class_schedule_id);
                    }
                });
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