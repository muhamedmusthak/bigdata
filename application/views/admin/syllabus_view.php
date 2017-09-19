<!-- <style type="text/css">
	#myTable_filter{
		text-align: right;
	}
</style> -->
<div id="content" class="content">
	<div class="row">
	<!-- begin col-12 -->
		<div class="col-md-12">
		<!-- begin panel -->
			<div class="panel panel-inverse">
                <div class="panel-heading">
                    <div class="panel-heading-btn">
						<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
						<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
                    </div>
                    <h4 class="panel-title">Syllabus</h4>
                </div>
                <div class="panel-body">
                	<div class="row">
                        <div class="col-md-3">
                            <a class="btn btn-primary btn-sm" href="<?php echo base_url('BigdataAdminController/syllabus_add'); ?>"><i class="fa fa-plus fa-1x"></i> <span class="f-s-14 f-w-500" >Add </span></a>
                        </div>
                    </div><p></p><br>
                    <div class="table-responsive">
                        <table id="" class="table myTable table-striped table-bordered" cellspacing="0" width=100%>
                            <thead>
                                <tr>
                                    
									<th>S.No</th>
									<th>Course Name</th>
									<th>Action</th>
									
								</tr>
                            </thead>
                             <tbody>
                                <?php $count=1; foreach($result as $row){ ?> 
                                  <tr>
                                    
                                    <input type="hidden" id="id" 
                                    value="<?php echo $row['course_id'];?>">
                                    
									<td><?php echo $count;?></td>
									<td><?php echo $row['course_name'];?></td>
								    <td>
                                    <a href="<?php echo base_url();?>BigdataAdminController/syl_view/<?php echo $row['course_id'];?>" class="btn btn-xs btn-primary" id="syllabus_view"><i class="fa fa-sun-o"></i></a>

                                    <a  href='<?php echo base_url();?>BigdataAdminController/syl_edit/<?php echo $row['course_id'];?>' type="button" id="edit_batch" class="btn btn-xs btn-primary"><i class="fa fa-edit"></i></a>

                                    <a href="<?php echo base_url();?>BigdataAdminController/syl_delete/<?php echo $row['course_id'];?>" class="btn btn-xs btn-danger" onclick="return deletechecked();"><i class="fa fa-trash-o"></i></a>
                                    </td>
								<?php $count++;}?> 
                            </tbody> 
                        </table>
                    </div>
                </div>
            </div>
            <!-- end panel -->
        </div>
    </div>
</div>
 <!-- <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">List of syllabus</h4>
        </div>
        <div class="modal-body">
             <div class="table-responsive">
                        <table id="" class="table myTable" cellspacing="0" width=100%>
                            <thead>
                                <tr>
                                    
                                    <th>S.No</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    
                                </tr>
                            </thead>
                             <tbody id="view">
                                
                            </tbody> 
                        </table>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div> -->
  <!-- <div class="modal fade" id="myModal2" role="dialog">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">List of syllabus</h4>
        </div>
        <div class="modal-body">
             <div class="table-responsive">
                        <table id="" class="table delTable table-bordered" cellspacing="0" width=100%>
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Title</th>
                                    <th>Description</th>
                                </tr>
                            </thead>
                             <tbody id="ebody">
                                
                            </tbody> 
                        </table>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div> -->
<script>
	$('.myTable').DataTable();
   function deletechecked()
    {
        if(confirm("Are you sure want to delete all syllabus under this course?"))
        {
            return true;
        }
        else
        {
            return false;  
        } 
   }
	// $(document).ready(function() {
 //        $('.delTable').DataTable( {
 //            columnDefs: [ {
 //                orderable: false,
 //                className: 'select-checkbox',
 //                targets:   0
 //            } ],
 //            select: {
 //                style:    'os',
 //                selector: 'td:first-child'
 //            },
 //            order: [[ 1, 'asc' ]],
 //            select: true,
 //        } );
 //    } );
  //    function openToggle($id){
  //       //alert();
  //       var id=$id;
  //       var URL ="<?php echo base_url();?>BigdataAdminController/syl_view/";
		// $.ajax({
		//     type: "POST",
		//     url: URL,
		//     data: {id:id},
		//     dataType:'html',
		//     success: function(data)
  //           {   
  //               //alert(data);
  //               $("#myModal").modal("show");
		//     	$("#view").html(data);
  //           }
		// });
  //   }

    // function openToggle2($id){
    //     //alert();
    //     var id=$id;
    //     var URL ="<?php echo base_url();?>BigdataAdminController/syl_view/";
    //     $.ajax({
    //         type: "POST",
    //         url: URL,
    //         data: {id:id},
    //         dataType:'html',
    //         success: function(data)
    //         {   
    //             //alert(data);
    //             $("#myModal2").modal("show");
    //             $("#ebody").html(data);
    //         }
    //     });
    // }

</script>


