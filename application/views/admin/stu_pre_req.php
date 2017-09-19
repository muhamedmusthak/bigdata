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
									<th>Pre-Requisties</th>
									<th>Icon Image</th>
									<th>Action</th>
								</tr>
                            </thead>
                            <tbody>
                                <?php $count=1; foreach($result as $row){ ?> 
                                  <tr>
                                    
                                    <input type="hidden" id="id" 
                                    value="<?php echo $row['id'];?>" >
                                    
									<td><?php echo $count;?></td>
									<td><?php echo $row['course_name'];?></td>
								    <td><?php echo $row['description'];?></td>
								    <td><?php echo $row['icon_image'];?></td>
									<td>
                                    <a  onclick="openToggle('<?php echo $row['id'];?>')" type="button" id="edit_batch" class="btn btn-xs btn-primary"><i class="fa fa-edit"></i></a>
                                     <a href="<?php echo base_url();?>BigdataAdminController/class_delete/<?php echo $row['id'];?>" class="btn btn-xs btn-danger" id="delete_box"><i class="fa fa-trash-o"></i></a></td>
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
 <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Student Pre-Requisities</h4>
        </div>
        <div class="modal-body">
        <center>
        	<form id="form" class="form-horizontal" method="post" action="<?php echo base_url('BigdataAdminController/add_stu_pre');?>">
                        <div class="form group">

                            <div class="row">

					    		<div class="col-md-7">
					    		 <!-- <h4 class="m-t-0">Choose Course</h4> -->
                                    <select id="course" name="course_id" class="form-control selectpicker" >
                                        <?php foreach($this->BigdataAdminModel->get_course() as $row)
                                		{ ?>
                                		<option>Choose course</option>
                                        <option value="<?php echo $row['course_id'];?>">
                                			<?php echo $row['course_name']; ?>
                                				
                                		</option>
                                    	<?php } ?>
                                    </select>
                                </div>
                             </div><br><br>
                             <div class="row">
                             	<div class="col-md-7">
                                        <h4 class="m-t-0">Icon Image</h4>
                                        <p>
                                            <img class="media-object superbox-img previewimage" id="previewing"
                                           src="<?php echo base_url('application/images/courses/report.png')?>" >
                                        </p>    
                                        <div role="form">
                                            <input type="hidden" value="" name="old_icon_img"/>
                                    <input id="filestyle-1" class="filestyle" type="file" name='icon_image' onchange="PreviewImage();" data-buttonbefore="true" style="position: absolute; clip: rect(0px, 0px, 0px, 0px);" tabindex="-1" >
                                            <div class="bootstrap-filestyle input-group">
                                                <span class="group-span-filestyle input-group-btn" tabindex="0">
                                                    <label id="new" class="btn btn-default" for="filestyle-1">
                                                        <span class="glyphicon glyphicon-folder-open"></span>
                                                        Choose file
                                                    </label>
                                                </span>
                                                <input class="form-control" id="filestyle-2"  
                                                value="" type="text" readonly>
                                            </div>
                                        </div>
                                    </div>
                                </div><p></p>
                                <div class="row">
	                                <div class="col-md-7">
	                                 	<input class="form-control input-md" name="description" 
	                                    type="text" value="" placeholder="TYPE STUDENT PRE-REQUISITES" id="description">
	                                    <!-- <textarea class="ckeditor textarea form-control  textarea_middle required" name="description" id="description" rows="5">TYPE YOUR DESCRIPTION</textarea> -->
	                                  	<input type="hidden" id="stu_id" name="stu_id" value="">
	                                </div>
	                        </div><br><br>
	                        <div class="row">
	                        		<div class="col-md-offset-1 col-md-4">
	                                	<input type="submit" class="btn btn-success hiddee" name="add" id="add" value="Add" >
	                        			<input type="button" id="update" class="btn btn-success hidden" name="update" value="Update">
	                        		</div>
                        	</div><br>
                        </div>
           </form>
           </center>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
<script>
	$('#myTable').DataTable();
	function PreviewImage() 
    {
        var image =document.getElementById("filestyle-1").value;
        $('#filestyle-2').val(image);
        var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById("filestyle-1").files[0]);
        oFReader.onload = function (oFREvent) {
        var data1=document.getElementById("previewing").src = oFREvent.target.result;
        };
    };
    function openToggle($id){
        $('#myModal').modal('show');
        
        var id=$id;
        $('#update').removeClass('hidden');
        $('#add').addClass('hidden');
        var URL ="<?php echo base_url('BigdataAdminController/stu_pre_edit'); ?>";
		$.ajax({
		    type: "POST",
		    url: URL,
		    data: {id:id},
		    dataType:'json',
		    success: function(json)
		    {
		    	//alert(json);
                
		    	 $('#previewing').attr('src',"<?php echo base_url();?>application/images/courses/"+json[0].icon_image);
                  $('#filestyle-2').val(json[0].icon_image);
                 $('select[name=course_id]').val(json[0].course_id);
                 $('#stu_id').val(json[0].id);
				 $('#description').val(json[0].description);
    		}
		})
    }

 $(document).ready(function() {
    	$("#update").click(function(){

	     // var id= $("#update").attr('data-id');
      // alert(up_id);
        var formData = new FormData($("#form")[0]);
        $.ajax({
        type    :"POST",
        url     :"<?php echo base_url('BigdataAdminController/update_student_pre'); ?>",
        async: true,
        data:  formData,
        processData: false,  // tell jQuery not to process the data
        contentType: false,
        success :function(result) {
        },
       error: function(e) {
            console.log(e.responseText);
        }
	});
		
	});
});

 $(function() {
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


