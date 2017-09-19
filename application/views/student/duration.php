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
				<div class="col-md-8">
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
							
							<div class="col-md-8">
							 	<div class="well">  
									<legend><h4 style=" ">Duration - 120 Hours</h4></legend>
									<!-- <div class="note note-info">
										<h4>Duartion and Timings</h4>
									</div> -->
									<div class="duration_content">
									 	<h4 class="font-lato" style="font-size: 14px;">MONDAY THROUGH       FRIDAY</h4>
									 	<P> 6.30 PM to 9.30 PM</P>
                      					<h4 class="font-lato" style="font-size: 14px;">SATURDAY</h4>
									 	<P>8 AM to 1 PM </P>
									 	<h4 style="text-align:center">6 weeks</h4>
									</div>
								</div>
							</div>
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
        