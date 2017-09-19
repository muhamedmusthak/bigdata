 // function for home page and trianing courses page.
 function enrollmodel() 
{
    //alert();
    var url = $(location)[0].href;
    //alert(url);
    var data = url.split("/");
    //alert(data[5]);
   var uriindex = data[5] || 'index';
    if (uriindex =="index") 
    {
        document.getElementById("head1").innerHTML = "Register for a Course / Registrarse para un curso ";
        $('#myModal').modal('show');
        $(".showonlyindex").show();
        //$('#myOldId').attr('id', 'newID');
        $(".hide_index").attr('id','no_value');
        $(".hide_separate").attr('id','course_id');

    }
    else{
        $(".showonlyindex").hide();
        var ele = document.querySelector(".ui-tabs-active").childNodes[0].childNodes[0].data;
        console.log(ele, "ele");
        var ele1 = document.querySelector(".ui-tabs-active").childNodes[0].attributes[1].nodeValue;
        console.log(ele1, "ele1")
        document.getElementById("head1").innerHTML = ele;
        document.getElementById("course_id").value = ele1;
        $('#myModal').modal('show');
        $(".hide_index").attr('id','course_id');
        $(".home_form").hide();
        $(".hide_separate").attr('id','no_value');
    }
   
}
// function for training on demand and corporate solutions
function call_enroll()
{
    var ele1=document.querySelector(".titleService").childNodes[0].data;
    console.log(ele1);
    var ele2=document.querySelector(".titleService").attributes[1].nodeValue;
     console.log(ele2);
    document.getElementById("head1").innerHTML= ele1;
    document.getElementById("course_id").value= ele2;
    $('#myModal').modal('show'); 
}
function call_enroll2()
{
    var ele1=document.querySelector(".titleService").childNodes[0].data;
    console.log(ele1);
    var ele2=document.querySelector(".titleService").attributes[1].nodeValue;
     console.log(ele2);
    document.getElementById("head1").innerHTML= ele1;
    document.getElementById("t_course_id").value= ele2;
    $('#TrainingModel').modal('show'); 
}
function payment_later()
{
   //alert("paymnet_later");
   $(".loader").removeClass('hidden');
  $("#BatchModal").hide();
  //$('.modal-backdrop').removeClass("in");
  var enroll_id = localStorage.getItem('enroll');

   $.ajax({
     type:"post",
     url:base_url + "BigdataAdminController/paymentlater",
     data:{enroll_map_id:enroll_id},
     success :function(response) {

        //$("#BatchModal").hide();
          location.reload();

     }
 });
}
 function insert_training()
{     
          var course_id = $("#t_course_id").val();          
          var first_name = $("#t_first_name").val();
          var last_name = $("#t_last_name").val();
          var email = $("#t_email").val();
          var contact = $("#t_phone").val();
          var address = $("#t_address").val();
          var company = $("#t_company").val();
          var business = $("#t_business").val();
          var department = $("#t_department").val();
          var designation = $("#t_designation").val();
          var salutation = $("#t_salutation").val();          
          var interest_ar = [];
          $("input:checkbox[name=interest]:checked").each(function()
          {
              //console.log($(this).val())
              interest_ar.push($(this).val());
              //console.log(interestArray,"array");
              //alert(interestArray);
          });
          var contact_ar = [];
          $("input:checkbox[name=t_contact]:checked").each(function()
          {
              //console.log($(this).val())
              contact_ar.push($(this).val());
              //console.log(contactArray,"array");
              //alert(interestArray);
          });
         //alert(course_id);
          $.ajax({
             type:"POST",
             //url:"<?php echo base_url() ?>" + "BigdatasiteController/insert_training",
             url: base_url+ "BigdatasiteController/insert_training",
             data:{course_id:course_id,salutation:salutation,first_name:first_name,last_name:last_name,email:email,contact:contact,address:address,company:company,business:business,department:department,designation:designation,interest_ar:interest_ar,contact_ar:contact_ar},
             success :function(response)
             {
                //console.log(response);
                //$("#session1").html(response);
               //alert(response);
              

             }
           });

   }

// insert enroll
$(document).ready(function() 
 {
  $(".thankyoumes").hide();
    $(".modalContent").show();
    $('#contact_form').bootstrapValidator({
        fields: {
            first_name: {
                validators: {
                        stringLength: {
                        min: 2,
                    },
                        notEmpty: {
                        message: 'Please Enter your first name'
                    }
                }
            },
      
            email: {
                validators: {
                    notEmpty: {
                        message: 'Please Enter your email address'
                    },
                    emailAddress: {
                        message: 'Please Enter a valid email address'
                    }
                }

            },
     
            
            }
        }).on('success.form.bv', function(e) {
            $('#success_message').slideDown({ opacity: "show" }, "slow"); // Do something ...
            $('#contact_form').data('bootstrapValidator').resetForm();
            // Prevent form submission
            e.preventDefault();
            // Get the form instance
            var $form = $(e.target);
            // Get the BootstrapValidator instance
            var bv = $form.data('bootstrapValidator');
            var salutation=$("#salutation").val();
            var first_name=$("#first_name").val();
            var last_name=$("#last_name").val();
//alert(last_name);
            var email=$("#email").val();
            var contact=$("#contact").val();
            var address=$("#address").val();
            var edu_qualification=$("#edu_qua").val();
            var work_exp=$('input[name=work_exp]:checked').val();
            var read_to_start=$('input[name=ready]:checked').val();
            var contact_me=$('input[name=contact_me]:checked').val();
            var course_id=$("#course_id").val();
            var preferred_course=$("#preferred_course").val();
          
            $.ajax({
               type:"post",
               //url:"<?php echo base_url() ?>" + "BigdataAdminController/enrollvalue",
               url: base_url+"BigdataAdminController/enrollvalue",
               data:{salutation:salutation,first_name:first_name,last_name:last_name,email:email,contact:contact,address:address,course_id:course_id,edu_qualification:edu_qualification,work_exp:work_exp,read_to_start:read_to_start,contact_me:contact_me,preferred_course:preferred_course},
               dataType:'json',
               success :function(response) 
               {

               console.log(response,"enroll_id");

                var enroll_id=response[0];
                // console.log(response[1],'response ready_to');
                // console.log(response[1]['ready_to']);
                // console.log(response[1].ready_to,'response ready_to 1');
                var data = response[1]['ready_to'];
                console.log(data,'data');
                if(data!=null)
                {
                  $(".Others").hide();
                }else{
                  $(".Home").hide();
                  $(".Others").show();
                }
                localStorage.setItem('enroll', JSON.stringify(enroll_id));
                var enroll_id = localStorage.getItem('enroll');
                // $("#myModal").hide();
                $('#myModal').modal().hide();
                // $('#myModal').modal('toggle'); 
                $("#resultModal").show();
                $("#resultModal").removeClass("fade");
                console.log($("#resultModal"));
                //if()

                $("#call_Assessment").val(enroll_id);
                $("#enroll_map_id").val(enroll_id); 
              $("#enroll_map_id_other").val(enroll_id);
                $("#call_Assessment").val();
                $("#assessment").removeClass("hide");
                $("#enroll_form").addClass("hide");
                $("#head2").removeClass("hide");
                $("#head1").addClass("hide");
                 
                $(".enroll_close").addClass("hide");
                $(".call_Assessment").removeClass("hide");
                // $(".call_enroll").addClass("hide");
                
                var course_id = $("#course_id").val();
       
       
                }
           });
        })

        $('#close_model').click(function() {
          location.reload();
        });
         $('#close_model1').click(function() {
          location.reload();
        });
  });


$(".call_enroll").on('touchstart  click',function()
{
    $(".thankyoumes").show();
    $(".modalContent").hide();
    $(".training").hide();
 });



 //get education qualification form db
 $(document).ready(function() 
 {  
     $("#detailform").submit(function(e){
                e.preventDefault();

              var enroll_map_id = $("#enroll_map_id").val();  
                 // loading.show();
                 $(".loader").removeClass('hidden');
          $.ajax({
           type:"post",
           //url:"<?php echo base_url() ?>" + "BigdatasiteController/get_batchtiming",
           url: base_url+ "BigdataAdminController/detailform",
          
           data:{enroll_map_id:enroll_map_id},
           success :function(response)
           {
              // loading.hide();
              $(".loader").addClass("hide");
              //window.location.href=("index");
              //redirect("BigdatasiteController/index");
              window.location.href = base_url+ "BigdatasiteController/index";
           }
          });
          });
       $("#proceedPay").click(function(){
             //loading.show();
             $(".loader").removeClass('hidden');
         });



      $(".pg").hide();
     $("input[name='education_qua']").click(function()
     {
        console.log($("input[name='education_qua']:checked").val());
        var con=$("input[name='education_qua']:checked").val();
        console.log(con);
        if(con=="ug")
        {
          console.log(con);
          $(".pg").hide();
          $(".ug").show();
        }
        else
        {
          console.log(con);
          $(".pg").show();
          $(".ug").hide();
        }
        
      });
 $(".model_close").click(function(){
        location.reload();
    });
  });

// show bacthModal window

function scheduler()
 {
  $("#resultModal").hide();
  $("#BatchModel").modal({backdrop: 'static', keyboard: false});
  var url = $(location)[0].href;
  var data = url.split("/");
   var uriindex = data[5] || 'index';
    if (uriindex =="index") 
    {
      $(".OtherBatch").hide();
    }else{
      $(".HomeBatch").hide();
      $(".OtherBatch").show();
      $(".batch_start").hide();
    }
 }

// get batc timing  from db
function get_batchtiming($id)
 {
        var id=$id;
       /*alert(id);*/
       $.ajax({
           type:"post",
           //url:"<?php echo base_url() ?>" + "BigdatasiteController/get_batchtiming",
           url: base_url+ "BigdatasiteController/get_batchtiming",
          
           data:{id:id},
           success :function(response)
           {
              //console.log(response);
              $("#session1").html(response);
              radiocall2('#session1');


           }
 });
}



function insert_batch()
{     
        $(".batch_heading").hide();
        $(".payment_heading").removeClass('hidden');
        $(".batch_start").hide();
        var enroll_id = localStorage.getItem('enroll');
        var batch_timing_id=$('input[name=batch_timing]:checked').val();
        console.log(batch_timing_id,'batch_timing_id');
        var data =batch_timing_id.split(",");
        var id=data[0];
        var status=data[1];
         console.log(data[0],'0');
        console.log(data[1],'1');
        if(id=='3')
        {
          //alert("comethird");
          var yourArray = [];
          $("input:checkbox[name=type]:checked").each(function()
          {
              console.log($(this).val())
              yourArray.push($(this).val());
              console.log(yourArray,"array");
              //alert(yourArray);
          });

          $.ajax({
             type:"post",
             //url:"<?php echo base_url() ?>" + "BigdatasiteController/get_batchtiming",
             url: base_url+ "BigdatasiteController/insert_batch",
             data:{id:id,enroll_id:enroll_id,status:status,yourArray:yourArray},
             success :function(response)
             {
                //console.log(response);
                //$("#session1").html(response);
               radiocall3('#payment1');



             }
           });
        }
        else{

          $.ajax({
             type:"post",
             //url:"<?php echo base_url() ?>" + "BigdatasiteController/get_batchtiming",
             url: base_url+ "BigdatasiteController/insert_batch",
            
             data:{id:id,enroll_id:enroll_id,status:status},
             success :function(response)
             {
                //console.log(response);
                //$("#session1").html(response);
                radiocall3('#payment1');


             }
           });

        }
}


function insert_other_batch()
{     
       //alert();
        $(".batch_start").hide();
        $(".batch_heading").hide();
        $(".payment_heading").removeClass('hidden');
        var enroll_id = localStorage.getItem('enroll');
        var batch_timing_id=$('input[name=batch_timing]:checked').val();
        console.log(batch_timing_id,'batch_timing_id');
        var data =batch_timing_id.split(",");
        var id=data[0];
        var status=data[1];
        console.log(data[0],'0');
        console.log(data[1],'1');
        if(id=='3')
        {
          //alert("comethird");
          var yourArray = [];
          $("input:checkbox[name=type]:checked").each(function()
          {
              console.log($(this).val())
              yourArray.push($(this).val());
              console.log(yourArray,"array");
              //alert(yourArray);
          });

          $.ajax({
             type:"post",
             //url:"<?php echo base_url() ?>" + "BigdatasiteController/get_batchtiming",
             url: base_url+ "BigdatasiteController/insert_batch_other",
             data:{id:id,enroll_id:enroll_id,status:status,yourArray:yourArray},
             success :function(response)
             {
                console.log(response);
                //$("#session1").html(response);

               radiocall3('#payment2');




             }
           });
        }
        else{

          $.ajax({
             type:"post",
             //url:"<?php echo base_url() ?>" + "BigdatasiteController/get_batchtiming",
             url: base_url+ "BigdatasiteController/insert_batch",
            
             data:{id:id,enroll_id:enroll_id,status:status},
             success :function(response)
             {
                //console.log(response);
                //$("#session1").html(response);
                radiocall3('#payment2');


             }
           });

        }
}


 function radiocall2(next)
  { 
        console.log(next,'nxtid');
        $("[href='"+next+"']").trigger('click');
        // $this.parents('.tab-pane').find('.nextButtonbtn').removeClass('disabled');
  }

  function radiocall3(next)
  { 
        console.log(next,'nxtid');
        $("[href='"+next+"']").trigger('click');
        // $this.parents('.tab-pane').find('.nextButtonbtn').removeClass('disabled');
  }


  $(document).ready(function()
 {

    $('#batchSched').hide();
    $('#timeSched').hide();
    $('#courseDetails').hide();
    $('#thankyou').hide();
    // $('button[name="assess_submit"]').prop('disabled', true);
    $('.next').click(function(){  
    var nextId = $(this).parents('.tab-pane').next().attr("id");
    $('[href=#'+nextId+']').tab('show');
    return false;
    
  })

  $('a[data-toggle="tab"]').on('shown.bs.tab', function (e)
  {
    
    //update progress
    var step = $(e.target).data('step');
    var percent = (parseInt(step) / 10) * 100;
    
    $('.progress-bar').css({width: percent + '%'});
    $('.progress-bar').text("Step " + step + " of 10");
    
    //e.relatedTarget // previous tab
    
  })
  
  $('.first').click(function()
  {
  
    $('#myWizard a:first').tab('show')
  
  })

});







//unwanted code
function getQuestions($this){
console.log($this.val(),'val');
    $.ajax({
       type:"post",
       //url:"<?php echo base_url() ?>" + "BigdatasiteController/getcoursequestion",
       url:base_url+ "BigdatasiteController/getcoursequestion",
        
       data:{enrollId:$this.val()},
       success :function(response) 
       {
         // unLoader();
        $("#AssModal .tab-content").html(response);
      }
     });
    $('#myModal').modal('hide'); 
    $("#AssModal").modal({backdrop: 'static', keyboard: false});
}
  


function call_classtiming()
{
    
  $("#AssModal").modal("hide");
  $('#thankyou').show();
  $('#courseDetails').show();
  //$('#batchSched').show();
  $("#BatchModel").modal({backdrop: 'static', keyboard: false});

}

function emailSend()
{
var enroll_id = localStorage.getItem('enroll');
$.ajax({
     type:"post",
     url:base_url + "BigdataAdminController/sendEmailfail",
     data:{enroll_map_id:enroll_id},
     success :function(response) {
     }
 });
}
 function enroll_mail()
{
  //alert();
var enroll_id = localStorage.getItem('enroll');

 $.ajax({
     type:"post",
     url:base_url + "BigdataAdminController/enroll_mail",
     data:{enroll_map_id:enroll_id},
     success :function(response) {
     }
 });
}


function proceedPayment()
{
var enroll_id = localStorage.getItem('enroll');

 $.ajax({
     type:"post",
     url:base_url + "BigdataAdminController/detailform",
     data:{enroll_map_id:enroll_id},
     success :function(response) {
     }
 });
}

function submitForm()
{
  // var enroll_id=response;
  var enroll_id = localStorage.getItem('enroll');
  $("#enrollId").val(JSON.parse(enroll_id)); 

         $.ajax({
               type:"post",
               //url:"<?php echo base_url() ?>" + "BigdatasiteController/testdata",
               url: base_url+ "BigdatasiteController/testdata",
              
               data: $("#assessmentForm").serialize(),
               success: function(response){
                    console.log(response);
                    if(response==true){
                      call_classtiming();
                      console.log('pass');
                       $('#AssModal').modal('hide');
                       $('#BatchModel').modal('show');

                    }
                    else{
                      $('#AssModal').modal('hide');
                      if(course_id!=1){
                        $('#failmodel').modal('show');

                        console.log('fail');
                      }
                      else{
                        alert();
                        call_classtiming();
                       $('#BatchModel').modal('show');
                      }
                    }
           // alert("success");
           // $('#email').val('');
           // $('#qText').val('');
              },
               error: function(){
                   alert("Fail")
               }
     });

}

function radiocall(next, $this)
{ 
  console.log(next,$this,'jsdjfj');
  $("[href='#"+next+"']").trigger('click');
  $this.parents('.tab-pane').find('.nextButtonbtn').removeClass('disabled');
  console.log('Next:',next,'Previous',$this.parents('.tab-pane').find('.nextButtonbtn'));
  // if (next=='#step13') {
  //   $('#assess_submit').show();
  // }
  // else{
  //  $('#assess_submit').hide();
  // }
 }

function load_pathmodel()
 { 
    $("[href='#path1']").trigger('click')
    $("#PathfinderModel").modal("hide");
 }
 function PathfinderModel()
 {
    $("#PathfinderModel").modal({backdrop: 'static', keyboard: false});
 }
function RegisterModel(){
    $("#RegisterModel").modal({backdrop: 'static', keyboard: false});
}
function TrainingModel()
 {
    console.log($("#TrainingModel"),"TrainingModel");
    $("#TrainingModel").modal({ backdrop: 'static', keyboard: false });
    // $("#TrainingModel").modal({ backdrop: 'static', keyboard: false });
}

//  function enrollmodel()
//  {
    
//   var ele=document.querySelector(".ui-tabs-active").childNodes[0].childNodes[0].data;
//   console.log(ele,"ele");
//   var ele1=document.querySelector(".ui-tabs-active").childNodes[0].attributes[1].nodeValue;
//   console.log(ele1,"ele1")
//   document.getElementById("head1").innerHTML= ele;
//   document.getElementById("course_id").value= ele1;
//   $('#myModal').modal('show'); 
// }


// function show_enrolldetail()
// {
     
//        var batch=$('input[name=batch]:checked').val();
//        var batch_timing=$('input[name=batch_timing]:checked').val();
        
//         localStorage.setItem("batch", batch);
//         localStorage.setItem("batch_timing", batch_timing);

//        // alert(batch);
//         //var url1="<?php echo base_url() ?>" + "BigdataAdminController/detailform/";
//         var url1= base_url+ "BigdataAdminController/detailform/";
        
//        $(location).attr('href', url1);
//        //var batch_timing=$('input[name=batch_timing]:checked').val();
//        //  $.ajax({
//        //     type:"post",
//        //     url:"<?php //echo base_url();?>" + "BigdataAdminController/detailform",
//        //     data:{
//        //      batch:batch,
//        //      batch_timing:batch_timing,
//        //      firstname:$('#first_name').val(),
//        //      lastname:$('#last_name').val(),
//        //      email:$('#email').val(),
//        //      company:$("#company").val(),
//        //      phone_num:$("#phone_num").val(),
//        //      course:$("#course").val()
//        //    },
//        //     success :function(response) {
//        //         console.log(response);
//        //    }
//        // });
// }
function show_enrolldetail()
{
     
    var enroll_id = localStorage.getItem('enroll');
    $.ajax({
       type:"post",
       url: base_url+ "BigdataAdminController/detailform",
       data:{enroll_id:enroll_id},
       success :function(response) 
       {
          console.log(response);
          window.location.href = base_url+ "BigdataAdminController/payment";
       }
   });
}

function emailSend()
{

  var first_name=$("#first_name").val();
       //alert(first_name);
  var last_name=$("#last_name").val();
  var email=$("#email").val();
  var company=$("#company").val();
  var phone_num=$("#phone_num").val();
  var course=$("#course").val();
  //alert(email);
 $.ajax({
     type:"post",
     url:"<?php echo base_url() ?>" + "BigdataAdminController/sendEmail",
     data:{first_name:first_name,last_name:last_name,email:email,phone_num:phone_num,company:company,course:course},
     success :function(response) {
     }
 });
}
function get_batchtiming_others($id)
 {
        var id=$id;
       /*alert(id);*/
       $.ajax({
           type:"post",
           //url:"<?php echo base_url() ?>" + "BigdatasiteController/get_batchtiming",
           url: base_url+ "BigdatasiteController/get_batchtiming_others",
          
           data:{id:id},
           success :function(response)
           {
              //console.log(response);
              $("#session1").html(response);
              radiocall2('#session1');


           }
 });
}

  