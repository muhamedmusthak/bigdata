<!-- begin #content -->
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css"> -->\
<style >
  
</style>
        <div id="content" class="content">
            <!-- begin breadcrumb -->
            <ol class="breadcrumb pull-right">
                <li><a href="javascript:;">Dashboard</a></li>
                <!-- <li><a href="javascript:;">Form Stuff</a></li> -->
                <li class="active">Add Assessment</li>
            </ol>
            <!-- end breadcrumb -->
            <!-- begin page-header -->
            <h1 class="page-header">Edit Questions  <small> You may Edit your assessment details here..</small></h1>
            
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
                      <h4 class="panel-title">Assessment</h4>
                  </div>


                  <div class="panel-body">
                    <h3 class="col-sm-10"><?php echo $result[0]['course_name']; ?></h3>
                    <input type="button" name="add" value="Add" class="tr_clone_add btn btn-success " style="margin-top: 15px;width:65px;"> 
                    <form action="<?php echo base_url('bigdataAdminController/updateQues');?>" method="post">   <input type="hidden" name="delete_id" id="delete_id">  
                    
                                <table class="hidden" id="clonetable" cellspacing="0" width=100% >
                               <tbody>
                                  <tr class="tr_clone" colspan="5">
                                    <td>
                                      <label class="col-sm-10">Question<input class="form-control" name="questions[]" type="text" ></label>
                                      <a>
                                            <input type="button"  name="delete" value="delete" class="tr_clone_delete btn btn-danger" onclick="custom($(this));" style="margin-top: 15px"></a>
                                      </td>
                                  </tr>
                                   <tr class="tr_clone" colspan="5">
                                       <td>
                                         
                                         <input type="hidden" name="course_id[]" value="<?php echo $result[0]['course_id']; ?>" class="form-control" >
                                         <input type="hidden" name="pattern[]" value="<?php echo $result[0]['pattern']; ?>" class="form-control" >
            
                                          
                                          <label class="col-md-2">Option A<input class="form-control" name="option_1[]" type="text"></label>
                                          <label class="col-md-2">Option B<input class="form-control" name="option_2[]" type="text" ></label>
                                          <label class="col-md-2">Option C<input class="form-control" name="option_3[]" type="text" ></label>
                                          <label class="col-md-2">Option D<input class="form-control" name="option_4[]" type="text" ></label> 
                                          <label class="col-md-2">Answer 
                                                  <select id="mySelect" style="height: 35px;" name="answer[]" class="form-control">
                                                    <option></option>
                                                     <option  value="option_a">A</option>
                                                     <option  value="option_b">B</option>
                                                     <option  value="option_b">C</option>
                                                     <option  value="option_d">D</option>
                                                  </select>
                                          </label>
                                       </td>
                                      
                                   </tr>
                                   </tbody>
                                  </table>
                               <?php if($result[0]['question']){ foreach ($result[0]['question']  as $data) { ?> 
                                <table id="clonetable" cellspacing="0" width=100%>
                                   <tbody>
                                 <!-- <?php print_r($result[0]['course_id']); print_r($result[0]['pattern']); ?> -->
                            
                                    <tr class="tr_clone" colspan="5">
                                      <td>
                                        <label class="col-sm-10">Question<input class="form-control" name="questions[]" type="text" value="<?php echo $data['question']; ?>"></label>
                                        <!-- <a id="del" href="<?php echo base_url('bigdataAdminController/deleteQuestion/'.$data['id']) ?>"> -->
                                              <input type="button"  name="delete" value="delete" class="tr_clone_delete btn btn-danger" onclick="custom($(this),<?php echo $data['id'] ?>);" style="margin-top: 15px"></a>
                                        </td>
                                    </tr>
                                     <tr class="tr_clone" colspan="5">
                                         <td>
                                           <input type="hidden" name="id[]" value="<?php echo $data['id']; ?>" class="form-control" > 
                                           <input type="hidden" name="course_id[]" value="<?php echo $data['course_id']; ?>" class="form-control" >
                                           <input type="hidden" name="pattern[]" value="<?php echo $data['pattern']; ?>" class="form-control" >
              
                                            
                                            <label class="col-md-2">Option A<input class="form-control" name="option_1[]" type="text" value="<?php echo $data['option_a']; ?>"></label>
                                            <label class="col-md-2">Option B<input class="form-control" name="option_2[]" type="text" value="<?php echo $data['option_b']; ?>"></label>
                                            <label class="col-md-2">Option C<input class="form-control" name="option_3[]" type="text" value="<?php echo $data['option_c']; ?>"></label>
                                            <label class="col-md-2">Option D<input class="form-control" name="option_4[]" type="text" value="<?php echo $data['option_d']; ?>"></label> 
                                            <label class="col-md-2">Answer 
                                                    <select id="mySelect" style="height: 35px;" name="answer[]" class="form-control">
                                                       <option <?php if ($data['answer'] == "option_a") echo "selected='selected'";?> value="option_a">A</option>
                                                       <option <?php if ($data['answer'] == "option_b") echo "selected='selected'";?> value="option_b">B</option>
                                                       <option <?php if ($data['answer'] == "option_c") echo "selected='selected'";?> value="option_b">C</option>
                                                       <option <?php if ($data['answer'] == "option_d") echo "selected='selected'";?> value="option_d">D</option>
                                                    </select>
                                            </label>
                                         </td>
                                        
                                     </tr>
                             </tbody>
                            </table>

                            <?php } }else { ?>

                            <table id="clonetable" cellspacing="0" width=100%>
                               <tbody>
                                  <tr class="tr_clone" colspan="5">
                                    <td>
                                      <label class="col-sm-10">Question<input class="form-control" name="questions[]" type="text" ></label>
                                      <a  >
                                            <input type="button"  name="delete" value="delete" class="tr_clone_delete btn btn-danger" onclick="custom($(this));" style="margin-top: 15px"></a>
                                      </td>
                                  </tr>
                                   <tr class="tr_clone" colspan="5">
                                       <td>
                                         
                                         <input type="hidden" name="course_id[]" value="<?php echo $result[0]['course_id']; ?>" class="form-control" >
                                         <input type="hidden" name="pattern[]" value="<?php echo $result[0]['pattern']; ?>" class="form-control" >
            
                                          
                                          <label class="col-md-2">Option A<input class="form-control" name="option_1[]" type="text"></label>
                                          <label class="col-md-2">Option B<input class="form-control" name="option_2[]" type="text" ></label>
                                          <label class="col-md-2">Option C<input class="form-control" name="option_3[]" type="text" ></label>
                                          <label class="col-md-2">Option D<input class="form-control" name="option_4[]" type="text" ></label> 
                                          <label class="col-md-2">Answer 
                                                  <select id="mySelect" style="height: 35px;" name="answer[]" class="form-control">
                                                    <option></option>
                                                     <option  value="option_a">A</option>
                                                     <option  value="option_b">B</option>
                                                     <option  value="option_b">C</option>
                                                     <option  value="option_d">D</option>
                                                  </select>
                                          </label>
                                       </td>
                                      
                                   </tr>
                                <!-- <tr class="tr_clone" colspan="5">
                            
                                 <td>
                                  
                                  
                                    <input type="hidden" name="course_id[]"  value="<?php echo $result[0]['course_id']; ?>" class="form-control" >
                                    <input type="hidden" name="pattern[]"  value="<?php echo $result[0]['pattern']; ?>" class="form-control" >
                                    <div class="row">
                                    <label class="col-sm-10">Question<input class="form-control" name="questions[]" type="text" ></label>
                                    </div>
                                    <label class="col-md-2">Option A<input class="form-control" name="option_1[]" type="text"></label>
                                    <label class="col-md-2">Option B<input class="form-control" name="option_2[]" type="text" ></label>
                                    <label class="col-md-2">Option C<input class="form-control" name="option_3[]" type="text"></label>
                                    <label class="col-md-2">Option D<input class="form-control" name="option_4[]" type="text" ></label> 
                                    <label class="col-md-2">Answer 
                                            <select id="mySelect" style="height: 35px;" name="answer[]" class="form-control">
                                                <option></option>
                                               <option  value="option_a">A</option>
                                               <option  value="option_b">B</option>
                                               <option  value="option_b">C</option>
                                               <option  value="option_d">D</option>
                                            </select>
                                    </label>
                                     <input type="button" name="add" value="Add" class="tr_clone_add btn btn-success" style="margin-top: 15px; "> 
                                    <a ><input type="button"  id="button" name="delete" value="delete" class="tr_clone_delete btn btn-danger" onclick="custom($(this));" style="margin-top: 15px">
                                           
                                 </td>
                                
                             </tr> -->
                                </tbody> 
                            </table>

                            <?php } ?>
                            
                        <button type="submit" class="btn btn-success" style="float: right;margin-right: 143px; margin-top: 18px;">Update</button>
                    </form>
                    
  
    <script>
        $(document).ready(function(){

            $(".tr_clone_add").click(function()
            {
                $tr = $('#clonetable.hidden');
                console.log($tr,"$tr");
                // $tr.child('tr_clone_delete')
                console.log($tr,'$tr$tr$tr');
                console.log($tr.find('.tr_clone_delete '));
                // $tr.find('.tr_clone_delete ').hide();
                var $clone = $tr.clone();
                $clone.find(':text').val('');
                $clone.find('[name="id[]"]').val('');
                //$clone.find('[id="del"]').val('');
                $('form [id="clonetable"]').last().after($clone);
                $('form [id="clonetable"]').last().removeClass('hidden');
                console.log($('[id="clonetable"]').last(),"$('[id=]').last()");
                $clone.find('.deleteElement').removeClass('hidden');
                $clone.find('.tr_clone_add').addClass('hidden');
            });
        });
        var deleteId = [];
        function custom(ele,$id)
        {
              deleteId.push($id); 
              $("#delete_id").val(deleteId); 

              console.log(ele.parents('[id="clonetable"]').remove());
              console.log($('[id="clonetable"]:visible'),"$('[id=clonetable]:visible')")
              if ($('[id="clonetable"]:visible').length == 0) {
                $(".tr_clone_add").trigger('click');
              }
                // var noOfrow=$("[id='clonetable']").length;
                // console.log(noOfrow,'ddd');
                //  if(noOfrow==1){
                //   alert('1');
                //     $('button[name="delete"]').prop('disabled', true);
                   
                //  }
        }
    </script>
                            
                        </div>
                    </div>
                    <!-- end panel -->
                </div>
                <!-- end col-6 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end #content -->




