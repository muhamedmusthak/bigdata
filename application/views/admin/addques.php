<!-- begin #content -->
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css"> -->
        <div id="content" class="content">
            <!-- begin breadcrumb -->
            <ol class="breadcrumb pull-right">
                <li><a href="javascript:;">Dashboard</a></li>
                <!-- <li><a href="javascript:;">Form Stuff</a></li> -->
                <li class="active">Add Assessment</li>
            </ol>
            <!-- end breadcrumb -->
            <!-- begin page-header -->
            <h1 class="page-header">Add Questions  <small> You may add your assessment details here..</small></h1>
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

    <form action="<?php echo base_url('bigdataAdminController/insertquestions');?>" method="post">     
    <table id="" cellspacing="0" width=100%>
        <tbody>
        <tr>
            <label class="col-sm-3">Course Name
                <select  class="form-control" name="course" id="course" data-placeholder="Course">
                <option></option>
                <?php $total=count($courseName); for ($i=0; $i <$total ; $i++) { ?>
                               
                <option value="<?php echo $courseName[$i]['course_id']; ?>"><?php echo $courseName[$i]['course_name']; ?></option>
                <?php } ?>
                <!--  <option value="asscociate-bigdata" >Associate Big Data</option>
                <option value="asscociate-datascience" >Associate Data Science</option>
                <option value="practitioner-bigdata" >Practitioner Big Data</option>
                <option value="practitioner-datascience" >Practitioner Data Science</option>
                <option value="practitioner-datavisualization" >Practitioner Data Visualization</option>
                <option value="specialist-bigdata" >Specialist Big Data</option>
                <option value="specialist-datamanagement" >Specialist Data Management</option>
                <option value="specialist-dataingestion" >Specialist Data Ingestion</option>
                <option value="specialist-hadoop&spark-development" >Specialist Hadoop & Spark Development</option>
                <option value="advanced-R-developement" >R Developement</option>
                <option value="advanced-bigdata-analytics-projectmanagement" >Big Data Analytics Project Management</option>
                <option value="advanced-deep-learning" >Deep Learning</option>
                <option value="advanced-unstructured-data-analytics" >Unstructured Data Analytics</option>
                <option value="advanced-real-time-analytics" >Real Time Analytics</option> -->
                </select>
                </label>
            <label class="col-sm-1">Pattern
                <select  class="form-control" name="pattern" id="pattern" data-placeholder="Pattern">
                <option></option>
                <option value="A">A</option>
                <option value="B">B</option>
            </label>
         </tr>
         <tr class="tr_clone" colspan="5">
             <td>
                  <label class="col-sm-12">Question<input class="form-control" name="questions[]" type="text" ></label>
                <label class="col-md-2">Option A<input class="form-control" name="option_1[]" type="text" ></label>
                 <label class="col-md-2">Option B<input class="form-control" name="option_2[]" type="text" ></label>
                 <label class="col-md-2">Option C<input class="form-control" name="option_3[]" type="text" ></label>
                 <label class="col-md-2">Option D<input class="form-control" name="option_4[]" type="text" ></label> 
                   <label class="col-md-2">Answer 
                        <select id="mySelect" style="height: 35px;" name="answer[]" class="form-control">
                           <option value="option_a">A</option>
                           <option value="option_b">B</option>
                           <option value="option_c">C</option>
                           <option value="option_d">D</option>
                        </select>
                    </label>
                           <input type="button" name="delete" value="delete" class="tr_clone_delete btn btn-danger" onclick="custom($(this));" style="margin-top: 15px">
                    <input type="button" name="add" value="Add" class="tr_clone_add btn btn-success" style="margin-top: 15px">  <!--  <td class="hidden deleteElement"><input type="button" name="delete" value="delete" class="tr_clone_delete btn btn-danger" onclick="custom($(this));"></td>
                <td><input type="button" name="add" value="Add" class="tr_clone_add btn btn-success"></td> -->      
             </td>
         </tr>
           <!--  <tr class="tr_clone" >
               
                <label class="col-sm-10">Question<input class="form-control" name="questions[]" type="text" ></label>
                <label class="col-md-12">Option A<input class="form-control" name="option_1[]" type="text" ></label>
                 <label class="col-md-12">Option B<input class="form-control" name="option_2[]" type="text" ></label>
                 <label class="col-md-12">Option C<input class="form-control" name="option_3[]" type="text" ></label>
                 <label class="col-md-12">Option D<input class="form-control" name="option_4[]" type="text" ></label>
                 <label class="col-md-12">Answer 
                        <select id="mySelect" style="height: 35px;" name="answer[]" class="form-control">
                           <option value="option_a">A</option>
                           <option value="option_b">B</option>
                           <option value="option_c">C</option>
                           <option value="option_d">D</option>
                        </select>
                    </label>
                    <input type="button" name="delete" value="delete" class="tr_clone_delete btn btn-danger" onclick="custom($(this));">
                    <input type="button" name="add" value="Add" class="tr_clone_add btn btn-success">
                <td ><label class="col-sm-10">Question<input class="form-control" name="questions[]" type="text" ></label></td>
                <td>
                    <label class="col-md-12">Option A<input class="form-control" name="option_1[]" type="text" ></label>
                </td>
                <td>
                    <label class="col-md-12">Option B<input class="form-control" name="option_2[]" type="text" ></label>
                </td>
                <td>
                    <label class="col-md-12">Option C<input class="form-control" name="option_3[]" type="text" ></label>
                </td>
                <td>
                    <label class="col-md-12">Option D<input class="form-control" name="option_4[]" type="text" ></label>
                </td>  
                <td>
                    <label class="col-md-12">Answer 
                        <select id="mySelect" style="height: 35px;" name="answer[]" class="form-control">
                           <option value="option_a">A</option>
                           <option value="option_b">B</option>
                           <option value="option_c">C</option>
                           <option value="option_d">D</option>
                        </select>
                    </label>
                </td>
                
                <td class="hidden deleteElement"><input type="button" name="delete" value="delete" class="tr_clone_delete btn btn-danger" onclick="custom($(this));"></td>
                <td><input type="button" name="add" value="Add" class="tr_clone_add btn btn-success"></td>
                 
            </tr> -->

            </tbody> 
        </table>
        <button type="submit" class="btn btn-success" style="float: right;">Save</button>
        <!-- <input type="submit" class="btn-success" value="Submit" style="float: right;" > -->
        </form>
        <!-- <table>
            <tbody id="temp"> 
                <tr>
                    <td class="col-md-2">
                        <button type="button" class="btn btn-success" onclick='custom()' value="Add">ADD</button>
                    </td>
                </tr>   
            </tbody>
            
        </table> -->
    <script>
    $(document).ready(function(){
        $(".tr_clone_add").click(function()
        {
            //alert("dfdfed");
            var $tr    = $(this).closest('.tr_clone');
            var $clone = $tr.clone();
            $clone.find(':text').val('');
            $tr.after($clone);
            $clone.find('.deleteElement').removeClass('hidden');
            $clone.find('.tr_clone_add').addClass('hidden');
        });
    });
    function custom(ele)
    {

           console.log(ele.parents("tr").remove());
    }
   

        //     function custom(){
        //         $(".hide").removeClass("hide");
        //     $("#temp").append('<tr class="row form-group remove1"><td class="col-md-12"><label class="col-md-10">Question<input class="form-control" type="text"></label></td><td class="col-md-2"><label class="col-md-12">Option 1<input class="form-control" type="text"></label></td><td class="col-md-2"><label class="col-md-12">Option 2<input class="form-control" type="text"></label></td><td class="col-md-2"><label class="col-md-12">Option 3<input class="form-control" type="text"></label></td><td class="col-md-2"><label class="col-md-12">Option 4<input class="form-control" type="text"></label></td><td class="col-md-2"><label class="col-md-12">Answer<select id="mySelect" style="height: 35px;" name="test" class="form-control"><option value="100">Option 1</option><option value="200">Option 2</option><option value="300">Option 3</option><option value="400">Option 4</option></select></label></td><td class="col-md-2"><button class="glyphicon glyphicon-trash btn btn-danger" onclick="cancel1(this)"></button></td></tr>');
        // }   
        
    
        //     function cancel1(result){
        //     $(result).parents(".remove1").remove();
        // }

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

