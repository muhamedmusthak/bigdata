<!-- begin #content -->
        <div id="content" class="content">
            <!-- begin breadcrumb -->
            <ol class="breadcrumb pull-right">
                <li><a href="javascript:;">Dashboard</a></li>
                <!-- <li><a href="javascript:;">Form Stuff</a></li> -->
                <li class="active">Assessment</li>
            </ol>
            <!-- end breadcrumb -->
            <!-- begin page-header -->
            <h1 class="page-header">Assessment  <small> You may edit your assessment details here..</small></h1>
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
                       <!--  <a href="<?php echo site_url('BigdataAdminController/addquestions');?>"><button class="btn btn-success" style="float: right;margin-top: -9px;">Add <span class="glyphicon glyphicon-plus" aria-hidden="true" ></span></button></a> -->
                            <legend>Assessment Courses</legend>
                                <table class="table">
                  									<thead>
                  									   <tr>
                                        <th>S.No</th>
                  									     <th>Course Name</th>
                                         
                  									     <th>No Of Questions Pattern A</th>
                                         <th>No Of Questions Pattern B</th>
                                         <th>Active Pattern</th>
                  									     <th>Action</th>
                  									   </tr>
                  									 </thead>
									               <tbody>
                                   <!--    <?php print_r($data);  ?>   -->
                                  <?php foreach ($data  as $row) { ?>
            									      <tr class="assessmentrow">
            									        <td><?php echo $row['course_id']; ?></td>
                                      <td><?php echo $row['course_name']; ?></td>

                                      <td><?php echo $row['patternA'] ?></td> 
                                      <td><?php echo $row['patternB'] ?></td> 
                                      <td>
                                              <select id="mySelect" style="height: 35px;" name="" class="form-control" onchange="patternSelect(this.value, <?php echo $row['course_id']; ?>)" >
                                                 <option></option>
                                                 <option <?php if ($row['activePattern'] == "A") echo "selected='selected'";?> value="A">A</option>
                                                 <option  <?php if ($row['activePattern'] == "B") echo "selected='selected'";?> value="B">B</option>
                                               </select>
                                      </td>
<!--                                       <td> 
                                          <select id="selectbox" style="height: 35px;" name="activePattern" class="form-control" onchange="activatePattern(this.value,<?php echo $row['course_id']; ?>)">
                                                <option></option>
                                                <option  value="A">A</option>
                                                <option  value="B">B</option>
                                           </select>
                                      </td> -->
                                      <td>
                                                <a class="btn btn-primary btn-sm a-btn-slide-text" onClick='edit($(this),<?php echo $row['course_id'] ?>)'>
                                                    <span class="glyphicon glyphicon-pencil" aria-hidden="true" style="font-size: 20px;"></span>
                                                </a>
                                                   
                                                <a class="btn btn-danger a-btn-slide-text" onClick='deleteQues($(this),<?php echo $row['course_id'] ?>)'>
                                                    <span class="glyphicon glyphicon-trash"  aria-hidden="true" style="font-size: 20px;"> </span>
                                                </a>
                                      </td>
									                   </tr>
                                  <?php } ?>

          									    </tbody>
          									  </table>
                                
                            <script>
                            //var patternVal;
                            var patternVal;
                            var baseUrl;
                            /*baseUrl = '<?php echo base_url('BigdataAdminController/deleteCourse/'.$row['course_id']); ?>';*/
                            // console.log(baseUrl,'baseUrl');
                            function patternSelect($pattern,$id){
                              console.log($pattern,$id,'sdfsdf');
                                //console.log($pattern,'this')
                                patternVal=$pattern;
                                //var patternVal=$('#mySelect').val();
                                //alert(patternVal);
                                        $.ajax({
                                         type:"post",
                                         url:"<?php echo base_url() ?>" + "BigdataAdminController/activatePattern",
                                         //url:base_url+ "BigdatasiteController/getcoursequestion",
                                          
                                         data:{pattern:$pattern,course_id:$id},
                                         success :function(response) 
                                         {
                                                                                 }
                                       });
                            }
                            //  function activatePattern($pattern,$id){
                            
                            // }
                            function deleteQues($this,$cid){
                            
                              var patternVal = $this.parents('tr').find('select').val();
                              //console.log(patternVal,$cid,'fffff');
                                if(patternVal){
                                    baseUrl = '<?php echo base_url('BigdataAdminController/deleteQues'); ?>';
                                   //var url= baseUrl+'/'+patternVal;
                                   var url= baseUrl+'/'+$cid+'/'+patternVal;
                                   console.log(url,'url');
                                   window.location.href=url;
                               }
                               else{
                                    alert("Please Select Question Paper Pattern ");
                               }
                            }
                            function edit($this, $cid){
                                // console.log($this,"$this");
                                var patternVal = $this.parents('tr').find('select').val();
                                if(patternVal){
                                    baseUrl = '<?php echo base_url('BigdataAdminController/editQues'); ?>';
                                    var url= baseUrl+'/'+$cid+'/'+patternVal;
                                   console.log(url,'url');
                                   window.location.href=url;
                                }
                                else{
                                   alert("Please Select Pattern ");
                                }
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

        