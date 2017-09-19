<?php $sessiondata=$this->session->userdata('sessiondata');
$name=$sessiondata['name']; 
$email=$sessiondata['email'];
$role=$sessiondata['role']; print_r($role); ?>
<style>
.white-box {
    background: white none repeat scroll 0 0;
    /*margin-bottom: 30px;*/
    padding: 26px;
    box-shadow: 12px 15px 20px 0 rgba(46, 61, 73, 0.15);
}
.user-bg {
    height: 250px;
    margin: -25px;
    overflow: hidden;
    position: relative;
}
.user-bg .overlay-box {
    background: #707cd2 none repeat scroll 0 0;
    height: 100%;
    left: 0;
    opacity: 0.9;
    position: absolute;
    right: 0;
    text-align: center;
    top: 0;

}
.user-bg .overlay-box .user-content {
    margin-top: 30px;
    padding: 15px;

}
.thumb-lg {
    height: 88px;
    width: 88px;
}
.user_table{
	font-size:15px;
}
.user-btm-box {
    clear: both;
    overflow: hidden;
    padding: 21px 0 0px;
}
.panel-lavender > .panel-heading {
    background: #707cd2 none repeat scroll 0 0;
}
.content_header{
	background-color: #707cd2 ;
	padding:6px;
	color:white;
	font-size: 15px;
}
.table-user-information > tbody > tr {
    border-top: 1px solid rgb(221, 221, 221);
}

.table-user-information > tbody > tr:first-child {
    border-top: 0;
}


.table-user-information > tbody > tr > td {
    border: 0;
    padding:16px 17px;
}

</style>

<!-- begin #content -->
		<div id="content" class="content">
			<!-- begin breadcrumb -->
			<ol class="breadcrumb pull-right">
				<li><a href="javascript:;">Home</a></li>
				<li class="active">Dashboard</li>
			</ol>
			<!-- end breadcrumb -->
			<!-- begin page-header -->
			<!-- <h1 class="page-header">view/update your profile <small></small></h1> -->
			<!-- end page-header -->
			
			
			<!-- begin row -->
			<div class="row">
				<!-- begin col-12 -->
				<div class="col-md-12">
					<div class="panel panel-inverse" data-sortable-id="index-1">
						<div class="panel-heading">
							<div class="panel-heading-btn">
								<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
								<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
								<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
								<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
							</div>
							<h4 class="panel-title">My Profile</h4>
						</div>
						<div class="panel-body view">
							<div class="col-md-4">
								<div class="white-box">
									<div class="user-bg">
										<div class="overlay-box">
											<div class="user-content">
		                                        <a href="javascript:void(0)">
													<img id="" src="<?php echo base_url('application/uploads/student/'.$result[0]['student_image']);?>" class="thumb-lg img-circle" alt="img">
		                                        </a>
		                                        <h4 class="text-white"><?php echo $role;?></h4>
		                                        <h5 class="text-white"><?php echo $email?></h5> 
		                                        <!-- <center>
		                                        <div class="input-group  col-md-8">
													<label class="input-group-btn">
													<input type="hidden" value=""  name="old_student_profile"/>
				 										<span class="btn btn-info">Browse<input type="file"  name="student_profile" style="display: none;"  onchange="showimage(this);"></span>
				 									</label>
													<input type="text" required="" name="" value="<?php echo $result[0]['student_image'];?>" class="form-control" readonly  >
		  										</div>
		  										</center> -->
		                                    </div>
										</div>
									</div>
									<div class="user-btm-box">
		                            	<div class="col-md-12 col-sm-12 text-center" style="padding-top: 10px;">
  											<h4>Class 1</h4>
                                      		<h4>Bigdata specialization</h4>
										</div>
		                            </div>
								</div>
							</div><p></p>
							<div class="col-md-6">
								<div class="well"> 
									
									
									<legend><h4 style="color:#707cd2 ">Personal Information</h4></legend>
										
									
									<br>
									<div class="row">
										<div class="col-md-12 col-lg-12"> 
						                    <table class="table table-user-information table-responsive" style="font-size:15px;border:none">
							                    <tbody>
							                      <tr>
							                        <td width="27%">First Name</td>
							                        <td width="38%"><?php echo $result[0]['first_name'];?></td>
							                      </tr>
							                      <tr>
							                        <td>Last Name</td>
							                        <td><?php echo $result[0]['last_name'];?></td>
							                      </tr>
							                      <tr>
							                        <td>Date of Birth</td>
							                        <td><?php echo $result[0]['date_birth'];?></td>
							                      </tr>
							                     	<tr>
							                        <td>Email Id</td>
							                        <td><?php echo $result[0]['email'];?></td>
							                      </tr>
							                        <tr>
							                        <td>Contact</td>
							                        <td><?php echo $result[0]['contact'];?></td>
							                      </tr>
							                      <tr>
							                        <td>Address</td>
							                        <td><?php echo $result[0]['address'];?></td>
							                      </tr>
							                    </tbody>
						                    </table>
						                    <div class="">
						              			<button type="button" id="show" class="btn btn-primary">Edit</button>
						              		</div>
						              	</div>
						             </div>
					              	<br>

								</div>
							</div>
						</div>
						<div class="panel-body edit">
							<form action="<?php echo base_url('BigdataAdminController/update_profile')?>" method="post" enctype="multipart/form-data">
								<div class="col-md-4">
									<div class="white-box">
										<div class="user-bg">
											<div class="overlay-box">
												<div class="user-content">
			                                        <a href="javascript:void(0)">
														<img id="previewing" src="<?php echo base_url('application/uploads/student/'.$result[0]['student_image']);?>" class="thumb-lg img-circle" alt="img">
			                                        </a>
			                                        <h4 class="text-white"><?php echo $role;?></h4>
			                                        <h5 class="text-white"><?php echo $email?></h5> 
			                                        <center>
			                                        <div class="input-group  col-md-8">
														<label class="input-group-btn">
														<input type="hidden" value="<?php echo $result[0]['student_image'];?>"  name="old_student_profile"/>
					 										<span class="btn btn-primary">Browse<input type="file"  name="student_profile" style="display: none;"  onchange="showimage(this);"></span>
					 									</label>
														<input type="text" required="" name="" value="<?php echo $result[0]['student_image'];?>" class="form-control" readonly  >
			  										</div>
			  										</center>
			                                    </div>
											</div>
										</div>
										<div class="user-btm-box">
			                            	<div class="col-md-12 col-sm-12 text-center" style="padding-top: 10px;">
	  											<h4>Class 1</h4>
	                                      		<h4>Bigdata specialization</h4>
											</div>
			                            </div>
									</div>
								</div><p></p>
								<div class="col-md-6">
										<div class="well">
											<h4 style="color:#707cd2 ">Personal Information</h4><br>

											<input type="hidden" value="<?php echo $result[0]['enroll_id'];?>" name="row_id"> 
											<div class="form-group">
												<label  for="number" >First Name </label> 
												<input class="form-control" type="text" id="" name="first_name" placeholder="Enter First Name " data-parsley-required="true" value="<?php echo $result[0]['first_name'];?>" />
											</div> 
											<div class="form-group">
												<label  for="number" >Last Name </label> 
												<input class="form-control" type="text" value="<?php echo $result[0]['last_name'];?>" name="last_name" placeholder="Enter Last Name " data-parsley-required="true" />
											</div>
											<div class="form-group">
												<label class="control-label">Date Of Birth</label>
												<div class='input-group date'>
													<input type='text' name="date_birth" class="form-control datetimepicker" value="<?php echo $result[0]['date_birth'];?>"/>
													<span class="input-group-addon">
														<span class="glyphicon glyphicon-calendar"></span>
													</span>
												</div> 
											</div>
											<div class="form-group">
												<label  for="number">Email </label>
												<input class="form-control" type="text" value="<?php echo $result[0]['email'];?>" name="email" placeholder="Enter Email" data-parsley-required="true" readonly/>
											</div>
											<div class="form-group">
												<label  for="number">Contact </label> 
												<input class="form-control" type="text" value="<?php echo $result[0]['contact'];?>" name="contact" placeholder="Enter Contact" data-parsley-required="true" readonly/>
											</div>
											<div class="form-group">
												<label  for="number">Address </label> 
												<textarea class="form-control" type="text" id="" name="address" placeholder="Enter Address" data-parsley-required="true"><?php echo $result[0]['address'];?></textarea>
											</div>
											<div class="form-group">
												<button type="submit" class="btn btn btn-primary">Update</button>
											</div>
										</div> 
								</div>
							</form>
						</div>
					</div>
				</div>
				<!-- end col-12 -->
			</div>
			
		</div>
		<!-- end #content -->
		<script>
		    $(".edit").hide();
		    $(document).ready(function() {
		  		 $("#show").click(function(){
		        	//alert();
			   	 	$(".edit").show();
			  		$(".view").hide();
			   	});
				$('.datetimepicker').datepicker({
		            format: 'dd-M-yyyy'
		        });

		   });
		  
		  function showimage(input){
		  	//alert();
			var preimage = new FileReader();
			preimage.onload = function(e) {
			$('#previewing').attr('src', e.target.result);
			$('#previewing').attr('src', e.target.result);
			}
			preimage.readAsDataURL(input.files[0]);
		}
		$(function()
		{
			// We can attach the `fileselect` event to all file inputs on the page
			$(document).on('change', ':file', function() {
			var input = $(this),
			numFiles = input.get(0).files ? input.get(0).files.length : 1,
			label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
			input.trigger('fileselect', [numFiles, label]);
			});

			// We can watch for our custom `fileselect` event like this
			$(document).ready( function() {
			$(':file').on('fileselect', function(event, numFiles, label) {

			var input = $(this).parents('.input-group').find(':text'),
			log = numFiles > 1 ? numFiles + ' files selected' : label;

			if( input.length ) {
			input.val(log);
			} else {
			if( log ) alert(log);
			}

			});
			});
		});
		</script>
        