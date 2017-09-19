<style type="text/css">
	#myTable_filter{
		text-align: right;
	}
</style>
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
                    <h4 class="panel-title">Class</h4>
                </div>
                <div class="panel-body">
                	<div class="row">
                        <div class="col-md-3">
                            <a class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus fa-1x"></i> <span class="f-s-14 f-w-500" >Add </span></a>
                        </div>
                    </div><p></p><br>
					<div class="table-responsive">
                        <table id="myTable" class="table table-striped table-bordered" cellspacing="0" width=100%>
                            <thead>
                                <tr>
                                    
									<th>S.No</th>
									<th>Course Name</th>
									<th>Job Proifle</th>
									<th>Action</th>
								</tr>
                            </thead>
                            <tbody>
                                <?php $count=1; foreach($result as $row){ ?> 
                                  <tr>
                                    
                                    <input type="hidden" id="job_id" 
                                    value="<?php echo $row['job_profile_id'];?>" >
                                    
									<td><?php echo $count;?></td>
									<td><?php echo $row['course_name'];?></td>
								    <td><?php echo $row['job_profile_title'];?></td>
									</td>
                					<td>
                					<a  onclick="openToggle('<?php echo $row['job_profile_id'];?>')" type="button" id="edit_batch" class="btn btn-xs btn-primary"><i class="fa fa-edit"></i></a>
                                     <a href="<?php echo base_url();?>BigdataAdminController/job_profile_delete/<?php echo $row['job_profile_id'];?>" class="btn btn-xs btn-danger" id="delete_box"><i class="fa fa-trash-o"></i></a></td>
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
<br><br><br>
 <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog modal-md">
        	<!-- Modal content-->
          	<div class="modal-content">
            	<div class="modal-header">
              		<button type="button" class="close" data-dismiss="modal">&times;</button>
              		<h4 class="modal-title">Add / Edit Job profile</h4>
            	</div>
            <div class="modal-body">
			<form id="open" class="form-horizontal" method="post" action="<?php echo base_url('BigdataAdminController/add_jobprofile');?>">
                   <div class="form group">
                        <div class="row">
				    		<div class="col-md-5">
                                <select id="course_id" name="course_id" class="form-control selectpicker" >
                                    <?php foreach($this->BigdataAdminModel->get_course() as $row)
                            		{ ?>
                                    <option value="<?php echo $row['course_id'];?>">
                            			<?php echo $row['course_name']; ?>
                            				
                            		</option>
                                	<?php } ?>
                                </select>
                            </div>
                            <div class="col-md-4">
                             	<input class="form-control input-md" name="job_profile_title" 
                                type="text" value="" placeholder="TYPE JOB PROFILE" id="job_profile_title">

                              	<input type="hidden" id="job_profile_id" name="job_profile_id" value="">
                            </div>
                            <div class="col-md-3">
                            	<input type="submit" class="btn btn-success" name="add" id="add" value="Add" >
                    			<input type="button" id="update" class="btn btn-success hidden" name="update" value="Update">
                    		</div>
                        </div>
                    </div>
            </form>
            </div>
             <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
          </div>
          
        </div>
</div>

<script>
	$('#myTable').DataTable();
	
   function openToggle($id){
        $('#myModal').modal('show');
        $('#add').addClass('hidden');
        $('#update').removeClass('hidden');
        //alert($id);
        var id=$id;
        var URL ="<?php echo base_url('BigdataAdminController/jobprofile_edit'); ?>";
		$.ajax({
		    type: "POST",
		    url: URL,
		    data: {id:id},
		    dataType:'json',
		    success: function(json)
		    {
		    	//alert(json);
		    	 $('select[name=course_id]').val(json[0].course_id);
                $('#job_profile_id').val(json[0].job_profile_id);
				$('#job_profile_title').val(json[0].job_profile_title);
    		}
		})
    }

 $(document).ready(function() {
    	$("#update").click(function(){
	     //alert();
	        var id=$('#job_profile_id').val();
			var job_title=$('#job_profile_title').val();
			var course_id=$('#course_id').val();
		//alert(course_id); 
		var URL="<?php echo base_url('BigdataAdminController/update_jobprofile');?>";
		$.ajax({
		    type:'post',
		    url:URL,
		    data:{id:id,job_title:job_title,course_id:course_id},
		    //dataType:'json',
		    success:function(datas){

			     window.location.reload();
			//getTable(id); 
		    }
		    
		});
		
	    });
	});
</script>


