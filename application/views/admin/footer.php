<!-- begin #content -->
        <div id="content" class="content">
            <!-- begin breadcrumb -->
            <ol class="breadcrumb pull-right">
                <li><a href="javascript:;">Dashboard</a></li>
                <!-- <li><a href="javascript:;">Form Stuff</a></li> -->
                <li class="active">Footer</li>
            </ol>
            <!-- end breadcrumb -->
            <!-- begin page-header -->
            <h1 class="page-header">Footer  <small> You may view your details here..</small></h1>
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
                            <h4 class="panel-title">Footer</h4>
                        </div>
                        <div class="panel-body">
                            <form class="form-horizontal" action="<?php echo base_url('bigdataAdminController/footer_update');?>" id="form_validation" method="post" name="form_validation" enctype="multipart/form-data">
                                <legend>Choose The Footer Image To Change</legend>
                                <div class="row">
                                    <div class="col-md-4">
                                    <p>
                                        <img class="media-object superbox-img previewimage" id="show_image_1" src="<?php echo base_url('application/uploads/footer/'. $editdata[0]['Footer_Img']); ?>" >
                                    </p>
                                        <div role="form">
                                            <input type="hidden" value="<?php echo $editdata[0]['Footer_Img']?>" name="Old_Footer_Img"/>
                                            <input id="image_1" class="filestyle" type="file" name='Footer_Img' onchange="PreviewImage();" data-buttonbefore="true" style="position: absolute; clip: rect(0px, 0px, 0px, 0px);" tabindex="-1">
                                            <div class="bootstrap-filestyle input-group">
                                                <span class="group-span-filestyle input-group-btn" tabindex="0">
                                                    <label id="new" class="btn btn-default" for="image_1">
                                                        <span class="glyphicon glyphicon-folder-open"></span>
                                                        Choose file
                                                    </label>
                                                </span>
                                                <input class="form-control" id="image_01" value="<?php echo $editdata[0]['Footer_Img']?>" type="text" readonly>
                                            </div>
                                        </div>
                                    </div>
                                </div><p></p>
                                <div class="row">
                                    <div class="col-md-12">
                                        <p></p>
                                        <h4 class="m-t-0">Footer Content</h4>
                                        <textarea class="ckeditor textarea form-control  textarea_middle required" name="Footer_Content" rows="5"  placeholder="TYPE YOUR OWN PARAGRAPH">
                                        <?php echo $editdata[0]['Footer_Content'];?> </textarea>
                                    </div>
                                </div><p></p><br>
                                <legend>Change Email ID and Image</legend>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <p>
                                            <img class="media-object superbox-img previewimage" id="show_image_2" 
                                            src="<?php echo base_url('application/uploads/footer/'. $editdata[0]['Emailid_Image']);?>" >
                                            </p>
                                            <div role="form">
                                                <input type="hidden" value=""  name="Old_Emailid_Image"/>
                                                <input id="image_2" class="filestyle" type="file"
                                                 name='Emailid_Image' onchange="PreviewImage1();" data-buttonbefore="true" style="position: absolute; clip: rect(0px, 0px, 0px, 0px);" tabindex="-1">
                                                <div class="bootstrap-filestyle input-group">
                                                    <span class="group-span-filestyle input-group-btn" tabindex="0">
                                                        <label id="new" class="btn btn-default" for="image_2">
                                                            <span class="glyphicon glyphicon-folder-open"></span>
                                                            Choose file
                                                        </label>
                                                    </span>
                                                    <input class="form-control" id="image_02" value=""  type="text" readonly>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <h4>Email Id</h4>
                                           <input class="form-control input-md" name="Email_Id" type="text" value="<?php echo $editdata[0]['Email_Id']?>" placeholder="TYPE YOUR EMAIL ID">
                                        </div>
                                    </div><p></p><br>
                                  <legend>Change Phone number and Image</legend>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <p>
                                            <img class="media-object superbox-img previewimage" id="show_image_3" name="footer_image"  src="<?php echo base_url('application/uploads/footer/'. $editdata[0]['Phone_Num_Img']);?>" >
                                            </p>
                                            <div role="form">
                                                <input type="hidden"  value="<?php echo $editdata[0]['Phone_Num_Img']?>" name="Old_Phone_Num_Img"/>
                                                <input id="image_3" class="filestyle" type="file" 
                                                name='Phone_Num_Img' onchange="PreviewImage2();" data-buttonbefore="true" 
                                                style="position: absolute; clip: rect(0px, 0px, 0px, 0px);" tabindex="-1">
                                                <div class="bootstrap-filestyle input-group">
                                                    <span class="group-span-filestyle input-group-btn" tabindex="0">
                                                        <label id="new" class="btn btn-default" for="image_3">
                                                            <span class="glyphicon glyphicon-folder-open"></span>
                                                            Choose file
                                                        </label>
                                                    </span>
                                                    <input class="form-control" id="image_03"  value="<?php echo $editdata[0]['Phone_Num_Img']?>" type="text" readonly>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <h4>Phone Number 1</h4>
                                           <input class="form-control input-md" name="Phone_Num_1" type="text" 
                                           value="<?php echo $editdata[0]['Phone_Num_1']?>" placeholder="TYPE YOUR PHONE NUMBER">
                                        </div>
                                        <div class="col-md-4">
                                            <h4>Phone Number 2</h4>
                                           <input class="form-control input-md" name="Phone_Num_2" type="text" value="<?php echo $editdata[0]['Phone_Num_2']?>" placeholder="TYPE YOUR PHONE NUMBER">
                                        </div>
                                    </div><p></p><br>
                                    <legend>Change Footer Title 1 and Sub-Title</legend>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <p></p>
                                            <h4 class="m-t-0">Titile 1</h4>
                                           <input class="form-control input-md" name="First_Title" type="text"
                                                  value="<?php echo $editdata[0]['First_Title']?>" placeholder="TYPE YOUR TITLE 1">
                                        </div>
                                    </div><p></p>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <p></p>
                                            <h4 class="m-t-0">Sub-title 1</h4>
                                           <input class="form-control input-md" name="Subtitle_1" type="text"
                                                  value="<?php echo $editdata[0]['Subtitle_1']?>" placeholder="TYPE YOUR SUB-TITLE 1">
                                        </div>
                                        <div class="col-md-3">
                                            <p></p>
                                            <h4 class="m-t-0">Link</h4>
                                           <input class="form-control input-md" name="Subtitle_1_Link" type="text"
                                                  value="<?php echo $editdata[0]['Subtitle_1_Link']?>" placeholder="TYPE YOUR LINK">
                                        </div>
                                        <div class="col-md-3">
                                            <p></p>
                                            <h4 class="m-t-0">Sub-title 2</h4>
                                           <input class="form-control input-md" name="Subtitle_2" type="text"
                                                  value="<?php echo $editdata[0]['Subtitle_2']?>" placeholder="TYPE YOUR SUB-TITLE 2">
                                        </div>
                                         <div class="col-md-3">
                                            <p></p>
                                            <h4 class="m-t-0">Link</h4>
                                           <input class="form-control input-md" name="Subtitle_2_Link" type="text"
                                                  value="<?php echo $editdata[0]['Subtitle_2_Link']?>" placeholder="TYPE YOUR LINK">
                                        </div>
                                    </div>
                                     <div class="row">
                                        <div class="col-md-3">
                                            <p></p>
                                            <h4 class="m-t-0">Sub-title 3</h4>
                                           <input class="form-control input-md" name="Subtitle_3" type="text"
                                           value="<?php echo $editdata[0]['Subtitle_3']?>" placeholder="TYPE YOUR SUB-TITLE 3">
                                        </div>
                                        <div class="col-md-3">
                                            <p></p>
                                            <h4 class="m-t-0">Link</h4>
                                           <input class="form-control input-md" name="Subtitle_3_Link" type="text" 
                                                  value="<?php echo $editdata[0]['Subtitle_3_Link']?>" placeholder="TYPE YOUR LINK">
                                        </div>
                                         <div class="col-md-3">
                                            <p></p>
                                            <h4 class="m-t-0">Sub-title 4</h4>
                                           <input class="form-control input-md" name="Subtitle_4" type="text"
                                                  value="<?php echo $editdata[0]['Subtitle_4']?>"  placeholder="TYPE YOUR SUB-TITLE 4">
                                        </div>
                                        <div class="col-md-3">
                                            <p></p>
                                            <h4 class="m-t-0">Link</h4>
                                           <input class="form-control input-md" name="Subtitle_4_Link" type="text"
                                                  value="<?php echo $editdata[0]['Subtitle_4_Link']?>" placeholder="TYPE YOUR LINK">
                                        </div>
                                    </div><P></P>
                                     <div class="row">
                                        <div class="col-md-3">
                                            <p></p>
                                            <h4 class="m-t-0">Sub-title 5</h4>
                                           <input class="form-control input-md" name="Subtitle_5" type="text"
                                                  value="<?php echo $editdata[0]['Subtitle_5']?>"  placeholder="TYPE YOUR SUB-TITLE 5">
                                        </div>
                                        <div class="col-md-3">
                                            <p></p>
                                            <h4 class="m-t-0">Link</h4>
                                           <input class="form-control input-md" name="Subtitle_5_Link" type="text"
                                                  value="<?php echo $editdata[0]['Subtitle_5_Link']?>"  placeholder="TYPE YOUR LINK">
                                        </div>
                                        <div class="col-md-3">
                                            <p></p>
                                            <h4 class="m-t-0">Sub-title 6</h4>
                                           <input class="form-control input-md" name="Subtitle_6" type="text"
                                                  value="<?php echo $editdata[0]['Subtitle_6']?>" placeholder="TYPE YOUR SUB-TITLE 6">
                                        </div>
                                        <div class="col-md-3">
                                            <p></p>
                                            <h4 class="m-t-0">Link</h4>
                                           <input class="form-control input-md" name="Subtitle_6_Link" type="text"
                                                  value="<?php echo $editdata[0]['Subtitle_6_Link']?>"  placeholder="TYPE YOUR LINK">
                                        </div>
                                    </div>
                                     <div class="row">
                                         <div class="col-md-3">
                                            <p></p>
                                            <h4 class="m-t-0">Sub-title 7</h4>
                                           <input class="form-control input-md" name="Subtitle_7" type="text"
                                                  value="<?php echo $editdata[0]['Subtitle_7']?>" placeholder="TYPE YOUR SUB-TITLE 7">
                                        </div>
                                        <div class="col-md-3">
                                            <p></p>
                                            <h4 class="m-t-0">Link</h4>
                                           <input class="form-control input-md" name="Subtitle_7_Link" type="text"
                                                  value="<?php echo $editdata[0]['Subtitle_7_Link']?>" placeholder="TYPE YOUR LINK">
                                        </div>
                                        <div class="col-md-3">
                                            <p></p>
                                            <h4 class="m-t-0">Sub-title 8</h4>
                                           <input class="form-control input-md" name="Subtitle_8" type="text"
                                                  value="<?php echo $editdata[0]['Subtitle_8']?>"  placeholder="TYPE YOUR SUB-TITLE 8">
                                        </div>
                                        <div class="col-md-3">
                                            <p></p>
                                            <h4 class="m-t-0">Link</h4>
                                           <input class="form-control input-md" name="Subtitle_8_LInk" type="text"
                                                  value="<?php echo $editdata[0]['Subtitle_8_LInk']?>"  placeholder="TYPE YOUR LINK">
                                        </div>
                                    </div>
                                    <p></p><br>
                                    <legend>Change Footer Title 2 and Sub-Title</legend>
                                   <div class="row">
                                        <div class="col-md-4">
                                            <p></p>
                                            <h4 class="m-t-0">Titile 2</h4>
                                           <input class="form-control input-md" name="Second_Title" type="text"
                                                  value="<?php echo $editdata[0]['Second_Title']?>" placeholder="TYPE YOUR TITLE 2">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <p></p>
                                            <h4 class="m-t-0">Sub-title 1</h4>
                                           <input class="form-control input-md" name="Second_Subtitle_1" type="text"
                                                  value="<?php echo $editdata[0]['Second_Subtitle_1']?>" placeholder="TYPE YOUR SUB-TITLE 1">
                                        </div>
                                        <div class="col-md-3">
                                            <p></p>
                                            <h4 class="m-t-0">Link</h4>
                                           <input class="form-control input-md" name="Second_Subtitle_1_Link" type="text"
                                                  value="<?php echo $editdata[0]['Second_Subtitle_1_Link']?>" placeholder="TYPE YOUR LINK">
                                        </div>
                                        <div class="col-md-3">
                                            <p></p>
                                            <h4 class="m-t-0">Sub-title 2</h4>
                                           <input class="form-control input-md" name="Second_Subtitle_2" type="text"
                                                  value="<?php echo $editdata[0]['Second_Subtitle_2']?>" placeholder="TYPE YOUR SUB-TITLE 2">
                                        </div>
                                        <div class="col-md-3">
                                            <p></p>
                                            <h4 class="m-t-0">Link</h4>
                                           <input class="form-control input-md" name="Second_Subtitle_2_Link" type="text"
                                                  value="<?php echo $editdata[0]['Second_Subtitle_2_Link']?>" placeholder="TYPE YOUR LINK">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <p></p>
                                            <h4 class="m-t-0">Sub-title 3</h4>
                                           <input class="form-control input-md" name="Second_Subtitle_3" type="text"
                                                  value="<?php echo $editdata[0]['Second_Subtitle_3']?>" placeholder="TYPE YOUR SUB-TITLE 3">
                                        </div>
                                        <div class="col-md-3">
                                            <p></p>
                                            <h4 class="m-t-0">Link</h4>
                                           <input class="form-control input-md" name="Second_Subtitle_3_Link" type="text"
                                                  value="<?php echo $editdata[0]['Second_Subtitle_3_Link']?>" placeholder="TYPE YOUR LINK">
                                        </div>
                                         <div class="col-md-3">
                                            <p></p>
                                            <h4 class="m-t-0">Sub-title 4</h4>
                                           <input class="form-control input-md" name="Second_Subtitle_4" type="text"
                                                  value="<?php echo $editdata[0]['Second_Subtitle_4']?>" placeholder="TYPE YOUR SUB-TITLE 4">
                                        </div>
                                        <div class="col-md-3">
                                            <p></p>
                                            <h4 class="m-t-0">Link</h4>
                                           <input class="form-control input-md" name="Second_Subtitle_4_Link" type="text"
                                                  value="<?php echo $editdata[0]['Second_Subtitle_4_Link']?>" placeholder="TYPE YOUR LINK">
                                        </div>
                                    </div><p></p><br>
                                    <legend>Change Footer Title 3 and Sub-Title</legend>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <p></p>
                                            <h4 class="m-t-0">Titile 3</h4>
                                           <input class="form-control input-md" name="Third_Title" type="text"
                                                  value="<?php echo $editdata[0]['Third_Title']?>" placeholder="TYPE YOUR TITLE 3">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <p></p>
                                            <h4 class="m-t-0">Sub-title 1</h4>
                                           <input class="form-control input-md" name="Third_Subtitle_1" type="text"
                                                  value="<?php echo $editdata[0]['Third_Subtitle_1']?>"placeholder="TYPE YOUR SUB-TITLE 1">
                                        </div>
                                        <div class="col-md-3">
                                            <p></p>
                                            <h4 class="m-t-0">Link</h4>
                                           <input class="form-control input-md" name="Third_Subtitle_1_Link" type="text"
                                                  value="<?php echo $editdata[0]['Third_Subtitle_1_Link']?>" placeholder="TYPE YOUR LINK">
                                        </div>
                                        <div class="col-md-3">
                                            <p></p>
                                            <h4 class="m-t-0">Sub-title 2</h4>
                                           <input class="form-control input-md" name="Third_Subtitle_2" type="text"
                                                  value="<?php echo $editdata[0]['Third_Subtitle_2']?>" placeholder="TYPE YOUR SUB-TITLE 2">
                                        </div>
                                        <div class="col-md-3">
                                            <p></p>
                                            <h4 class="m-t-0">Link</h4>
                                           <input class="form-control input-md" name="Third_Subtitle_2_Link" type="text"
                                                  value="<?php echo $editdata[0]['Third_Subtitle_2_Link']?>" placeholder="TYPE YOUR LINK">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <p></p>
                                            <h4 class="m-t-0">Sub-title 3</h4>
                                           <input class="form-control input-md" name="Third_Subtitle_3" type="text"
                                                  value="<?php echo $editdata[0]['Third_Subtitle_3']?>" placeholder="TYPE YOUR SUB-TITLE 3">
                                        </div>
                                        <div class="col-md-3">
                                            <p></p>
                                            <h4 class="m-t-0">Link</h4>
                                           <input class="form-control input-md" name="Third_Subtitle_3_Link" type="text"
                                                  value="<?php echo $editdata[0]['Third_Subtitle_3_Link']?>" placeholder="TYPE YOUR LINK">
                                        </div>
                                        <div class="col-md-3">
                                            <p></p>
                                            <h4 class="m-t-0">Sub-title 4</h4>
                                           <input class="form-control input-md" name="Third_Subtitle_4" type="text"
                                                  value="<?php echo $editdata[0]['Third_Subtitle_4']?>"placeholder="TYPE YOUR SUB-TITLE 4">
                                        </div>
                                        <div class="col-md-3">
                                            <p></p>
                                            <h4 class="m-t-0">Link</h4>
                                           <input class="form-control input-md" name="Third_Subtitle_4_Link" type="text"
                                                  value="<?php echo $editdata[0]['Third_Subtitle_4_Link']?>" placeholder="TYPE YOUR LINK">
                                        </div>
                                    </div><p></p>
                                     <div class="row">
                                        <div class="col-md-3">
                                            <p></p>
                                            <h4 class="m-t-0">Sub-title 5</h4>
                                           <input class="form-control input-md" name="Third_Subtitle_5" type="text"
                                                  value="<?php echo $editdata[0]['Third_Subtitle_5']?>" placeholder="TYPE YOUR SUB-TITLE 5">
                                        </div>
                                        <div class="col-md-3">
                                            <p></p>
                                            <h4 class="m-t-0">Link</h4>
                                           <input class="form-control input-md" name="Third_Subtitle_5_Link" type="text"
                                                  value="<?php echo $editdata[0]['Third_Subtitle_5_Link']?>"placeholder="TYPE YOUR LINK">
                                        </div>
                                        <div class="col-md-3">
                                            <p></p>
                                            <h4 class="m-t-0">Sub-title 6</h4>
                                           <input class="form-control input-md" name="Third_Subtitle_6" type="text"
                                                  value="<?php echo $editdata[0]['Third_Subtitle_6']?>" placeholder="TYPE YOUR SUB-TITLE 6">
                                        </div>
                                        <div class="col-md-3">
                                            <p></p>
                                            <h4 class="m-t-0">Link</h4>
                                           <input class="form-control input-md" name="Third_Subtitle_6_Link" type="text" value="<?php echo $editdata[0]['Third_Subtitle_6_Link']?>"  placeholder="TYPE YOUR LINK">
                                        </div>
                                    </div><p></p><br>
                                    <legend>Change Footer Title 4 and Sub-Title</legend>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <p></p>
                                            <h4 class="m-t-0">Titile 4</h4>
                                           <input class="form-control input-md" name="Fourth_Title" type="text"
                                                  value="<?php echo $editdata[0]['Fourth_Title']?>"  placeholder="TYPE YOUR TITLE 4">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <p></p>
                                            <h4 class="m-t-0">Sub-title 1</h4>
                                           <input class="form-control input-md" name="Fourth_Subtitle_1" type="text"
                                                  value="<?php echo $editdata[0]['Fourth_Subtitle_1']?>"  placeholder="TYPE YOUR SUB-TITLE 1">
                                        </div>
                                        <div class="col-md-4">
                                            <p></p>
                                            <h4 class="m-t-0">Link</h4>
                                           <input class="form-control input-md" name="Fourth_Subtitle_1_Link" type="text"
                                                  value="<?php echo $editdata[0]['Fourth_Subtitle_1_Link']?>"  placeholder="TYPE YOUR LINK">
                                        </div>
                                    </div><p></p><br>
                                    <div class="row">
                                       <div class="col-md-4">
                                            <h4>Copyright content</h4>
                                            <input class="form-control input-md" name="Copyright_Content" type="text"
                                                   value="<?php echo $editdata[0]['Copyright_Content']?>"  placeholder="TYPE YOUR COPYRIGHT NAME">
                                       </div>
                                    </div>
                                    <div class="pager form-group">
                                     <div class="col-md-7 control-label">
                                        <!--<button  class="btn btn-success m-r-5 m-b-5" type="submit" name="save" id="save" value="Save">Save</button>-->
                                        <input class="btn btn-success m-r-5 m-b-5" type="submit" name="save" id="save" value="Save">
                                            <button  class="btn btn-danger m-r-5 m-b-5" onclick="window.history.back();" type="button">Cancel</button>
                                     </div>
                                 </div>
                            </form>
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
            function PreviewImage() {
               // alert();
            var image =document.getElementById("image_1").value;
            console.log(image);
            //exit;
            $('#image_01').val(image);
            //alert('ahi');
              var oFReader = new FileReader();
                  oFReader.readAsDataURL(document.getElementById("image_1").files[0]);
              
                  oFReader.onload = function (oFREvent) {
                var data1=document.getElementById("show_image_1").src = oFREvent.target.result;
                   
                  };
            };
        </script>
        
        
        <script>
            function PreviewImage1() {
            var image =document.getElementById("image_2").value;
            console.log(image);
            //exit;
            $('#image_02').val(image);
            //alert('ahi');
              var oFReader = new FileReader();
                  oFReader.readAsDataURL(document.getElementById("image_2").files[0]);
              
                  oFReader.onload = function (oFREvent) {
                var data1=document.getElementById("show_image_2").src = oFREvent.target.result;
                   
                  };
            };
        </script>
        
        

        <script>
            function PreviewImage2() {
            var image =document.getElementById("image_3").value;
            console.log(image);
            //exit;
            $('#image_03').val(image);
            //alert('ahi');
              var oFReader = new FileReader();
                  oFReader.readAsDataURL(document.getElementById("image_3").files[0]);
              
                  oFReader.onload = function (oFREvent) {
                var data1=document.getElementById("show_image_3").src = oFREvent.target.result;
                   
                  };
            };
        </script>
        
        
        
        