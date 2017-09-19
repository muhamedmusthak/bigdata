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
                    <h4 class="panel-title">Enrolled Students Details</h4>
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table id="myTable" class="table table-striped table-bordered" cellspacing="0" width=100%>
                            <thead>
                                                                  <tr>
									<th>S.No</th>
									<th>First Name</th>
									<th>Last Name</th>
									<th>Mail-id</th>
									<th>Contact Number</th>
									<th>Course Name</th>
									
									
									
								</tr>
                            </thead>
                            <tbody>
                                <?php $count=1;foreach($result as $row){ ?> 
                               <tr>
									<td><?php echo $count;?></td>
									<td><?php echo $row['first_name'];?></td>
									<td><?php echo $row['last_name'];?></td>
									<td><?php echo $row['email'];?></td>
									<td><?php echo $row['contact'];?></td>
									<td><?php echo $row['course_name'];?></td>
									<td></td>
									<td></td>
									<!--<td><?php echo $row['assessment_status'];?></td>-->
									<!--<td><?php echo $row['payment'];?></td>-->
								</tr>
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
<script>
	$('#myTable').DataTable();
</script>


